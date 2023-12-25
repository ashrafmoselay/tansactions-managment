<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\TransferDataTable;
use App\Http\Controllers\BackendController;
use App\Models\Transfer;
use App\Http\Services\TransferService;
use App\Http\Requests\TransferRequest;
use App\Models\Transaction;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Services\DataTable;


class TransferController extends BackendController
{
    public bool $full_page_ajax  = false;
    public bool $use_form_ajax   = true;
    public bool $use_button_ajax = true;
    public string $view_sub_path = '';

    public function __construct()
    {
        view()->composer(['backend.transfers.index'], function ($view) {
            $users = User::pluck('name', 'id');
            $view->with([
                'users' => $users,
            ]);
        });
        parent::__construct();
    }
    public function index()
    {

        try {
            if (request()->ajax()) {
                $list = $this->model()->filter()->get();
                $withdraw = $list->where('status', 'قبول')->where('from_user_id',auth()->user()->id)->sum('amount');
                $deposite = $list->where('status', 'قبول')->where('to_user_id',auth()->user()->id)->sum('amount');
                $data['إجمالي المرسل'] = number_format($deposite);
                $data['إجمالي المستلم'] = number_format(abs($withdraw));
                return $this->dataTable()->render('backend.includes.tables.table', ['summery' => $data]);
            }
            return view('backend.transfers.index', ['count' => $this->modelCount()]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    public function store(TransferRequest $request, TransferService $TransferService)
    {
        $row = $TransferService->handle($request->validated());
        if ($row instanceof Exception) throw new Exception($row);
        return $this->redirect(trans('flash.row created', ['model' => trans('menu.transfer')]));
    }

    public function update(TransferRequest $request, TransferService $TransferService, $id)
    {
        $row = $TransferService->handle($request->validated(), $id);
        if ($row instanceof Exception) throw new Exception($row);
        return $this->redirect(trans('flash.row updated', ['model' => trans('menu.transfer')]));
    }

    public function model(): Model
    {
        return new Transfer;
    }

    public function dataTable(): DataTable
    {
        return new TransferDataTable;
    }

    public function append(): array
    {
        $users = User::get();
        return [
            'from_users' => $users->where('id', auth()->user()->id)->pluck('name', 'id'),
            'to_users' => $users->where('id', '<>', auth()->user()->id)->pluck('name', 'id')
        ];
    }

    public function query($id): object|null
    {
        return $this->model()::find($id);
    }
    public function updateStatus($id)
    {

        $row = $this->model()::find($id);

        if (request()->isMethod('post')) {
            if ($row->status == 'قبول') {
                toast('لا يمكن تعديل طلب تم قبوله', 'error');
                return back();
            }
            $row->status = request('status');
            $row->status_note = request('status_note');
            $row->save();
            if ($row->status == 'قبول') {
                $this->changeBalance($row);
            }
            toast('تم تحديث الحالة بنجاح', 'success');
            return back();
        }
        return view('backend.transfers.status', compact('row'));
    }

    public function changeBalance($transfer)
    {
        $fromUser = User::query()->find($transfer->from_user_id);
        $toUser = User::query()->find($transfer->to_user_id);
        $fromUser->balance -= $transfer->amount;
        $toUser->balance += $transfer->amount;

        Transaction::query()->create([
            'user_id' => $transfer->from_user_id,
            'title' => 'تحويل رقم ' . $transfer->id,
            'type' => 'سحب',
            'amount' => -$transfer->amount,
            'note' => '',
            'transaction_date' => date('Y-m-d')
        ]);

        Transaction::query()->create([
            'user_id' => $transfer->to_user_id,
            'title' => 'تحويل رقم ' . $transfer->id,
            'type' => 'ايداع',
            'amount' => $transfer->amount,
            'note' => '',
            'transaction_date' => date('Y-m-d')
        ]);
    }
    public function destroy(int $id)
    {
        try {
            $row = $this->queryFind($id);
            if (!$row) throw new Exception(trans('flash.something is wrong'));
            if ($row->status == 'قبول') {
                throw new Exception('لا يمكن حذف طلب تم قبوله');
            }
            $row->delete();
            return response()->json(['message' => trans('flash.row deleted', ['model' => trans('menu.' . $this->getTableName(singular: true))]), 'icon' => 'success', 'count' => $this->modelCount()]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
