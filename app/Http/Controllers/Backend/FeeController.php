<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\FeeDataTable;
use App\Http\Controllers\BackendController;
use App\Models\Customer;
use App\Models\Fee;
use App\Http\Services\FeeService;
use App\Http\Requests\FeeRequest;
use App\Models\Order;
use App\Models\Transaction;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Services\DataTable;


class FeeController extends BackendController
{
    public bool $full_page_ajax  = false;
    public bool $use_form_ajax   = true;
    public bool $use_button_ajax = true;
    public string $view_sub_path = '';


    public function index()
    {
        try {
            if (request()->ajax()){
                $qry = $this->model()->filter();
                $customer_value = $qry->sum('customer_value');
                $company_value = $qry->sum('company_value');
                $data['إجمالي رسوم الشركة'] = number_format($company_value);
                $data['إجمالي رسوم العملاء'] = number_format($customer_value);

                if (canUser("transactions-index")){
                    $profit = ($customer_value - $company_value);
                    $data['الربح'] = number_format($profit);
                }
                return $this->dataTable()->render('backend.includes.tables.table',['summery'=>$data]);
            }
            return view('backend.fees.index', ['count' => $this->modelCount()]);
        } catch (Exception $e) {
            throw new Exception( $e->getMessage() );
        }
    }
    public function store(FeeRequest $request, FeeService $FeeService)
    {
        $row = $FeeService->handle($request->validated());
        if ($row instanceof Exception ) throw new Exception( $row );
        $this->addTransactions($row);
        return $this->redirect(trans('flash.row created', ['model' => trans('menu.fee')]));
    }

    public function update(FeeRequest $request, FeeService $FeeService, $id)
    {
        $row = $FeeService->handle($request->validated(), $id);
        if ($row instanceof Exception ) throw new Exception( $row );
        $this->addTransactions($row);
        return $this->redirect(trans('flash.row updated', ['model' => trans('menu.fee')]));
    }
    public function addTransactions($row){
        $trans = $row->transactions()->first()?:new Transaction;
        $trans->title = $row->title;
        $trans->transaction_type = 'سحب';
        $trans->transaction_date = date('Y-m-d');
        $trans->value = -$row->company_value;
        $row->transactions()->save($trans);
    }

    public function model() :Model { return new Fee; }

    public function dataTable() :DataTable { return new FeeDataTable; }

    public function append(): array
    {

        if(request('order_id')){
            $order_id = request('order_id');
            $order = Order::find($order_id);
        }
        return [
            'order'=>$order??null,
			'customers' => Customer::pluck('name', 'id'),
			'orders' => Order::pluck('customer_id', 'id'),
        ];
    }

    public function query($id) :object|null
    {
        return $this->model()::find($id);
    }
}
