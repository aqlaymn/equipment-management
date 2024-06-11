<?php

namespace App\Exports;

use App\Models\Equipment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Support\Collection;

class EquipmentExport implements FromCollection, WithHeadings
{
    use Exportable;
    
    public function collection()
    {
        return Equipment::all();
    }

    public function headings(): array
    {
        return [
            'Equipment ID',
            'Equipment Name',
            'Serial Number',
            'First Service',
            'Second Service',
            'Third Service',
            'Price',
            'Year Made',
            'Year Installed',
            'Remark',
        ];
    }
}
