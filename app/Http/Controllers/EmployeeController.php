<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }
    

    public function create()
    {
        return view('employees.crud');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.crud', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'department' => 'required|string',
        ]);

        $employee->update($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'department' => 'required|string',
        ]);

        Employee::create($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    // Merged code for add/edit employee view
    public function showAddEditForm(Employee $employee = null)
    {
        return view('employees.crud', compact('employee'));
    }
}
