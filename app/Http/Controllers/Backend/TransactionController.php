<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\TransactionDataTable;
use App\Http\Controllers\BackendController;
use App\Models\Transaction;
use App\Http\Services\TransactionService;
use App\Http\Requests\TransactionRequest;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;


class TransactionController extends BackendController
{
    public bool $full_page_ajax  = false;
    public bool $use_form_ajax   = true;
    public bool $use_button_ajax = true;
    public string $view_sub_path = '';

    public function index()
    {
        
        try {
            if (request()->ajax()){
                $list = $this->model()->filter()->get();
                $balance = $list->sum('amount');
                $withdraw = $list->where('type','سحب')->sum('amount');
                $deposite = $list->where('type','ايداع')->sum('amount');
                $data['الرصيد الحالي'] = number_format($balance);
                $data['إجمالي الإيداع'] = number_format($deposite);
                $data['إجمالي السحب'] = number_format(abs($withdraw));
                return $this->dataTable()->render('backend.includes.tables.table',['summery'=>$data]);
            }
            return view('backend.transactions.index', ['count' => $this->modelCount()]);
        } catch (Exception $e) {
            throw new Exception( $e->getMessage() );
        }
    }
    public function store(TransactionRequest $request, TransactionService $TransactionService)
    {
        $row = $TransactionService->handle($request->validated());
        if ($row->type == 'سحب') {
            $row->user->balance -= abs($row->amount);
        } else {
            $row->user->balance += $row->amount;
        }
        $row->user->save();
        if ($row instanceof Exception) throw new Exception($row);
        return $this->redirect(trans('flash.row created', ['model' => trans('menu.transaction')]));
    }

    public function update(TransactionRequest $request, TransactionService $TransactionService, $id)
    {
        try {
            DB::beginTransaction();
            if ($id) {
                $transactionData = Transaction::find($id);
                $oldValue = $transactionData->amount;
                if ($transactionData->type == 'سحب') {
                    $transactionData->user->balance += abs($oldValue);
                } else {
                    $transactionData->user->balance -= $oldValue;
                }
                $transactionData->user->save();
            }
            $row = $TransactionService->handle($request->validated(), $id);
            if ($row instanceof Exception) throw new Exception($row);
            if ($row->type == 'سحب') {
                $row->user->balance -= abs($row->amount);
            } else {
                $row->user->balance += $row->amount;
            }
            DB::commit();
            return $this->redirect(trans('flash.row updated', ['model' => trans('menu.transaction')]));
        } catch (Exception $e) {
            DB::rollBack();
        }
    }

    public function model(): Model
    {
        return new Transaction;
    }

    public function dataTable(): DataTable
    {
        return new TransactionDataTable;
    }

    public function append(): array
    {
        return [

            'users' => \App\Models\User::pluck('name', 'id'),
        ];
    }

    public function query($id): object|null
    {
        return $this->model()::find($id);
    }
}
