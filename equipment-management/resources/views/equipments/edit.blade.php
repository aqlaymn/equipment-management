<!-- resources/views/equipments/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Equipment</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('equipments.update', $equipment->equipment_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="equipment_name" class="form-label"><strong>ID:</strong></label>
                            <p>{{ $equipment->equipment_id }}</p>
                        </div>
                        <div class="col-md-6">
                            <label for="equipment_name" class="form-label"><strong>Name:</strong></label>
                            <input type="text" name="equipment_name" class="form-control" value="{{ $equipment->equipment_name }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="serial_number" class="form-label"><strong>Serial Number:</strong></label>
                            <input type="text" name="serial_number" class="form-control" value="{{ $equipment->serial_number }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="first_service" class="form-label">First Service:</label>
                            <input type="date" name="first_service" class="form-control" value="{{ $equipment->first_service }}">
                        </div>
                        <div class="col-md-4">
                            <label for="second_service" class="form-label">Second Service:</label>
                            <input type="date" name="second_service" class="form-control" value="{{ $equipment->second_service }}">
                        </div>
                        <div class="col-md-4">
                            <label for="third_service" class="form-label">Third Service:</label>
                            <input type="date" name="third_service" class="form-control" value="{{ $equipment->third_service }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" step="0.01" name="price" class="form-control" value="{{ $equipment->price }}">
                        </div>
                        <div class="col-md-6">
                            <label for="year_made" class="form-label">Year Made:</label>
                            <input type="number" name="year_made" class="form-control" value="{{ $equipment->year_made }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="year_installed" class="form-label">Year Installed:</label>
                            <input type="number" name="year_installed" class="form-control" value="{{ $equipment->year_installed }}">
                        </div>
                        <div class="col-md-6">
                            <label for="remark" class="form-label">Remark:</label>
                            <textarea name="remark" class="form-control" rows="3">{{ $equipment->remark }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Update Equipment</button>
                        <a href="{{ route('equipments.index') }}" class="btn btn-secondary">Back to Equipment List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
