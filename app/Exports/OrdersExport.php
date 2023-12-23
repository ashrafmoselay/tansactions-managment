<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OrdersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles, WithMapping, WithEvents
{
    public $index = 0;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::filter()->with(['customer','status', 'fees', 'collections'])->get();
    }

    public function map($order): array
    {
        $this->index ++;
        return [
            $this->index,
            $order->customer->name,
            $order->status->name,
            $order->created_date,
            $order->type,
            $order->record_no,
            $order->alkafil_name,
            $order->visa_number,
            $order->job,
            $order->total,
            $order->alert_date,
            $order->note,
            $order->total_fees,
            $order->total_collections,
        ];
    }

    public function headings(): array
    {
        return ['#', 'العميل', 'الحالة','تاريخ التسجيل', 'النوع','رقم السجل','الكفيل','التأشيره','الوظيفه','الاجمالي','تاريخ التبيه','ملاحظات','الرسوم','التحصيلات'];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true, 'italic' => true, 'size' => 14],
                'alignment' => ['horizontal' => 'center', 'vertical' => 'center'],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => 'thin',
                        'color' => ['argb' => '666666'],
                    ],
                ],
            ],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet;
                $sheet->getStyle('A1:N1')->getFill()->applyFromArray(['fillType' => 'solid','rotation' => 5, 'color' => ['rgb' => 'cccccc'],]);
                $sheet->getDelegate()->getRowDimension(1)->setRowHeight(40);
            },
        ];
    }
}
