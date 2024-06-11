<?php

namespace App\Exports;

use App\Models\Equipment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EquipmentExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles
{
    protected $equipments;

    public function __construct(Collection $equipments)
    {
        $this->equipments = $equipments;
    }

    public function collection()
    {
        return $this->equipments;
    }

    public function headings(): array
    {
        return [
            'Equipment ID',
            'Name',
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

    public function map($equipment): array
    {
        return [
            $equipment->equipment_id,
            $equipment->equipment_name,
            $equipment->serial_number,
            $equipment->first_service,
            $equipment->second_service,
            $equipment->third_service,
            $equipment->price,
            $equipment->year_made,
            $equipment->year_installed,
            $equipment->remark,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the headers
            1 => ['font' => ['bold' => true]],

            // Set column width for specific columns
            'D' => ['width' => 20], // First Service
            'E' => ['width' => 20], // Second Service
            'F' => ['width' => 20], // Third Service
            'H' => ['width' => 15], // Year Made
            'I' => ['width' => 15], // Year Installed
        ];
    }
}

