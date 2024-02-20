<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('addEmployee');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|min:5|max:20',
        'age' => 'required|numeric|min:20',
        'address' => 'required|min:10|max:40',
        'number' => 'required|regex:/^08\d{0,11}$/|max:13'
    ]);

    Employee::create([
        'name' => $request->name,
        'age' => $request->age,
        'address' => $request->address,
        'number' => $request->number
    ]);

    return redirect(route('dashboard'))->with('success', 'Employee has been created successfully!');
}

    public function show()
    {
        $employees = Employee::all();

        $employee = $employees->reverse();

        return view('dashboard')->with('employee', $employees);
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
    
        return view('editEmployee')->with('employee', $employee);
    }
    

    public function update($id, Request $request)
    {
        $employee = Employee::findOrFail($id);
    
        $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|numeric|min:20',
            'address' => 'required|min:10|max:40',
            'number' => 'required|regex:/^08\d{0,11}$/|max:13'
        ]);
    
        $employee->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'number' => $request->number
        ]);
    
        return redirect()->route('dashboard', ['id' => $employee->id])->with('success', 'Employee data has been updated successfully!');
    }
    
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        Employee::destroy($id);

        // Redirect to the index page or any other page after deletion
        return redirect()->route('dashboard')->with('success', 'Employee has been deleted successfully');
    }
}