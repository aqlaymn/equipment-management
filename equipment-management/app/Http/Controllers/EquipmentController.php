<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use App\Exports\EquipmentExport;
use Maatwebsite\Excel\Facades\Excel;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        return view('equipments.index', compact('equipments'));
    }

    public function create()
    {
        return view('equipments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'equipment_name' => 'required',
            'serial_number' => 'nullable',
            'first_service' => 'nullable',
            'second_service' => 'nullable',
            'third_service' => 'nullable',
            'price' => 'nullable',
            'year_made' => 'nullable',
            'year_installed' => 'nullable',
            'remark' => 'nullable',
        ]);

        Equipment::create($request->all());

        return redirect()->route('equipments.index')
                         ->with('success', 'Equipment created successfully.');
    }


    public function show($equipment_id)
    {
        $equipment = Equipment::findOrFail($equipment_id);
        return view('equipments.show', compact('equipment'));
    }

    public function edit($equipment_id)
    {
        $equipment = Equipment::findOrFail($equipment_id);
        return view('equipments.edit', compact('equipment'));
    }

    public function update(Request $request, $equipment_id)
    {
        $request->validate([
            'equipment_name' => 'nullable',
            'serial_number' => 'nullable',
            'first_service' => 'nullable',
            'second_service' => 'nullable',
            'third_service' => 'nullable',
            'price' => 'nullable',
            'year_made' => 'nullable',
            'year_installed' => 'nullable',
            'remark' => 'nullable',
        ]);

        $equipment = Equipment::findOrFail($equipment_id);
        $equipment->update($request->all());

        return redirect()->route('equipments.index')
                         ->with('success', 'Equipment updated successfully.');
    }

    public function destroy($equipment_id)
    {
        $equipment = Equipment::findOrFail($equipment_id);
        $equipment->delete();

        return redirect()->route('equipments.index')
                         ->with('success', 'Equipment deleted successfully.');
    }

    public function exportToExcel()
    {
        $equipments = Equipment::all();
        return Excel::download(new EquipmentExport($equipments), 'equipment-data.xlsx');
    }
}
