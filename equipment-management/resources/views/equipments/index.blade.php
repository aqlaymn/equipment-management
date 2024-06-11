<!-- resources/views/equipments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Equipment List</h1>
        <a href="{{ route('equipments.create') }}" class="btn btn-primary mb-3">Add New Equipment</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Serial Number</th>
                    <th>First Service</th>
                    <th>Second Service</th>
                    <th>Third Service</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipments as $equipment)
                    <tr>
                        <td>{{ $equipment->equipment_id }}</td>
                        <td>{{ $equipment->equipment_name }}</td>
                        <td>{{ $equipment->serial_number }}</td>
                        <td>{{ $equipment->first_service ? $equipment->first_service->format('Y-m-d') : '' }}</td>
                        <td>{{ $equipment->second_service ? $equipment->second_service->format('Y-m-d') : '' }}</td>
                        <td>{{ $equipment->third_service ? $equipment->third_service->format('Y-m-d') : '' }}</td>
                        <td>
                            <a href="{{ route('equipments.show', $equipment->equipment_id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('equipments.edit', $equipment->equipment_id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('equipments.destroy', $equipment->equipment_id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('equipments-export') }}" class="btn btn-success mb-3">Export to Excel</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<script>
    // Add an event listener to hide the success message after 5 seconds
    document.addEventListener('DOMContentLoaded', function() {
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000); // 5000 milliseconds = 5 seconds
        }
    });
</script>
@endsection
