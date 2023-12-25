<?php

namespace App\DataTables;

use App\Models\Transfer;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Column;
use App\Traits\DatatableHelper;

class TransferDataTable extends DataTable
{
    use DatatableHelper;

    protected $table = 'transfers';

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('created_at', function (Transfer $row) {
                return $row->created_at->format('Y-m-d');
            }) 
            ->addColumn('from_user_id', function (Transfer $row) {
                return optional($row->fromuser)->name;
            }) 
            ->addColumn('to_user_id', function (Transfer $row) {
                return optional($row->touser)->name;
            }) 
            ->addColumn('statusData', function (Transfer $row) {
                $btnclass = 'btn-warning';
                if($row->status=='قبول'){
                    $btnclass = 'btn-success';
                }elseif($row->status=='رفض'){
                    $btnclass = 'btn-danger';
                }
                
                $link = '<a style="margin-right: 10px" class="remoteModal btn '.$btnclass.' btn-sm" href="' . routeHelper('transfers.updateStatus', $row->id) . '">' . $row->status . ' <i class="fa fa-pen-to-square"></i></a>';
                return $link;
            })
            ->addColumn('check', 'backend.includes.tables.checkbox')
            ->editColumn('action', 'backend.includes.buttons.table-buttons')
            ->rawColumns(['action', 'check','statusData']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Transfer $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Transfer $model)
    {
        return $model->newQuery()->filter();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $this->overWriteProperties();
        return $this->builder()
            ->setTableId('transfers-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->setTableAttribute('class', $this->tableClass)
            ->lengthMenu($this->lengthMenu)
            ->pageLength($this->pageLength)
            ->language($this->translateDatatables())
            ->buttons([
                $this->getCreateButton(),
                $this->getDeleteButton(),
                $this->getImportButton(),
                $this->getExportButton(),
                $this->getSearchButton(),
                $this->getCloseButton(),
                $this->getPageLengthButton()
            ])
            ->responsive(true)
            ->parameters(
                $this->initComplete('')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('check')->title('<label class="skin skin-square p-0 m-0"><input data-color="red" type="checkbox" class="switchery" id="check-all" style="width: 25px"></label>')->exportable(false)->printable(false)->orderable(false)->searchable(false)->width(15)->addClass('text-center')->footer(trans('buttons.delete')),
            Column::make('id')->title('#')->width('70px'),
            Column::make('created_at')->title(trans('inputs.created_at')),
            Column::make('from_user_id')->title(trans('inputs.from_user_id')),
            Column::make('to_user_id')->title(trans('inputs.to_user_id')),
            Column::make('amount')->title(trans('inputs.amount')),
            Column::make('statusData', 'status.name')->title(trans('menu.the status')),
            Column::make('status_note')->title(trans('inputs.status_note')),
            Column::computed('action')->exportable(false)->printable(false)->width(75)->addClass('text-center')->footer(trans('inputs.action'))->title(trans('inputs.action')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return stringwithRelations
     */
    protected function filename()
    {
        return 'transfers_' . date('YmdHis');
    }

    /**
     * Overwrite trait properties.
     *
     * @return void
     */
    protected function overWriteProperties(): void
    {
        // $this->setPageLength(); // number of page length
        // $this->setLengthMenu(); // array of menu length
        // $this->setTableClass(); // string of html classes
    }
}
