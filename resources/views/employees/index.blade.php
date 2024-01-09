@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee List</h2>
        
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>

        <a href="{{ route('employees.create') }}" class="btn btn-success mb-2">Add Employee</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Employee Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>
                            <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No employees found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
