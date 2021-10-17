<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::all();
        return view('pages.employee.index' , compact('employee'));
    }

    //to add employee
    public function addemployee(){
        return view('pages.employee.create');
    }

    //to insert the data into database
    public function store(Request $request){
        $employee = new Employee;
        $employee-> name = $request->input('name');
        $employee-> email = $request->input('email');
        $employee-> phone = $request->input('phone');
        $employee-> designation = $request->input('designation');
        $employee-> save();

        return redirect('employee')->with('status', 'Employee Added Sucessfuly');

    }

    public function edit($id){
        $employee = Employee::find($id);
        return view ('pages.employee.edit', compact('employee'));
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');
        $employee->status = $request->input('status') == true ? "1" : "0";

        $employee->update();

        return redirect('employee')->with('status', 'Employee Updated Succesfully');
    }

    public function delete(Request $request, $id){
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('employee')->with('status', 'Employee Data Deleted Succesfully');
    }
}
