@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container mt-5">
            <div class="text-center">
                <br><br>
                <h2>{{ __('messages.employee_list') }}</h2>
            </div>
     
        </div>
        
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
         
        </form>

        <a href="{{ route('employees.create') }}" class="btn btn-success mb-2">{{ __('messages.add_employee') }}</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>{{ __('messages.employee_id') }}</th>
                    <th>{{ __('messages.employee_name') }}</th>
                    <th>{{ __('messages.employee_email') }}</th>
                    <th>{{ __('messages.employee_department') }}</th>
                    <th>{{ __('messages.actions') }}</th>
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
                            <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}" class="btn btn-primary">{{ __('messages.edit') }}</a>

                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('messages.confirm_delete') }}')">{{ __('messages.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">{{ __('messages.no_employees_found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

<!-- Move these scripts outside of the content section -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
