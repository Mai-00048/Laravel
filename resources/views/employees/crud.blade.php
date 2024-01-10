@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="container mt-5">
            <div class="text-center">
                @if(isset($employee))
                    <h2>{{ __('messages.edit_employee') }}</h2>
                    <form action="{{ route('employees.update', ['employee' => $employee->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                @else
                    <h2>{{ __('messages.add_employee') }}</h2>
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="name">{{ __('messages.name') }}:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $employee->name ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="email">{{ __('messages.email') }}:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employee->email ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="department">{{ __('messages.department') }}:</label>
            <input type="text" class="form-control" id="department" name="department" value="{{ old('department', $employee->department ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">
            @if(isset($employee))
                {{ __('messages.update_employee') }}
            @else
                {{ __('messages.add_employee') }}
            @endif
        </button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>

        </form>
    </div>
@endsection
