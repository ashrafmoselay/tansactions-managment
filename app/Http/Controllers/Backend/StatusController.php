<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\StatusDataTable;
use App\Http\Controllers\BackendController;
use App\Models\Status;
use App\Http\Services\StatusService;
use App\Http\Requests\StatusRequest;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Services\DataTable;


class StatusController extends BackendController
{
    public bool $full_page_ajax  = true;
    public bool $use_form_ajax   = true;
    public bool $use_button_ajax = true;
    public string $view_sub_path = '';

    public function store(StatusRequest $request, StatusService $StatusService)
    {
        $row = $StatusService->handle($request->validated());
        if ($row instanceof Exception ) throw new Exception( $row );
        return $this->redirect(trans('flash.row created', ['model' => trans('menu.status')]));
    }

    public function update(StatusRequest $request, StatusService $StatusService, $id)
    {
        $row = $StatusService->handle($request->validated(), $id);
        if ($row instanceof Exception ) throw new Exception( $row );
        return $this->redirect(trans('flash.row updated', ['model' => trans('menu.status')]));
    }

    public function model() :Model { return new Status; }

    public function dataTable() :DataTable { return new StatusDataTable; }

    public function append(): array
    {
        return [
            
        ];
    }

    public function query($id) :object|null
    {
        return $this->model()::find($id);
    }
}
