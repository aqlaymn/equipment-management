<!-- resources/views/equipments/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">Equipment Details</h1>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">ID:</div>
                    <div class="col-md-9">{{ $equipment->equipment_id }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">Name:</div>
                    <div class="col-md-9">{{ $equipment->equipment_name }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">Serial Number:</div>
                    <div class="col-md-9">{{ $equipment->serial_number }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">First Service:</div>
                    <div class="col-md-9">{{ optional($equipment->first_service)->format('Y-m-d') }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">Second Service:</div>
                    <div class="col-md-9">{{ optional($equipment->second_service)->format('Y-m-d') }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">Third Service:</div>
                    <div class="col-md-9">{{ optional($equipment->third_service)->format('Y-m-d') }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">Price:</div>
                    <div class="col-md-9">{{ ($equipment->price)  }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">Year Made</div>
                    <div class="col-md-9">{{ ($equipment->year_made) }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 font-weight-bold">Year Installed:</div>
                    <div class="col-md-9">{{($equipment->year_installed) }}</div>
                </div>
                <!-- Add more rows for other attributes as needed -->
                <div class="text-center">
                    <a href="{{ route('equipments.index') }}" class="btn btn-primary mt-3">Back to Equipment List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
