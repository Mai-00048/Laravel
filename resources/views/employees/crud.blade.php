@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($employee))
            <h2>Edit Employee</h2>
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
        @else
            <h2>Add Employee</h2>
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
        @endif
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $employee->name ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employee->email ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ old('department', $employee->department ?? '') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">
                @if(isset($employee))
                    Update Employee
                @else
                    Add Employee
                @endif
            </button>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
