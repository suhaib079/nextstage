<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;

class EmployeeController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $employees = Employee::all();
        return view('employees/index',[
            'employees' => $employees,
        ]);
    }

    public function edit($id){
        $employee = Employee::find($id);
        $companies = Company::all();
        return view('employees/edit', [
            'employee' => $employee,
            'companies' => $companies
        ]);
    }

    public function store(){
        $companies = Company::all();
        return view('employees/store',[
            'companies' => $companies,
        ]);
    }

    public function addingemployee(){
        $employee= new Employee();
        $employee->firstname =request('firstname');
        $employee->lastname =request('lastname');
        $employee->company_id =request('company_id');
        $employee->email =request('email');
        $employee->phone =request('phone');
        $employee->save();
        return redirect('/employees');
    }
    public function edditingemployee(){
        $employee = Employee::find(request('employeeid'));
        $employee->firstname =request('firstname');
        $employee->lastname =request('lastname');
        $employee->company_id =request('company_id');
        $employee->email =request('email');
        $employee->phone =request('phone');
        $employee->save();
        return redirect('/employees');
    }
    public function deleteingemployee(){
        
        $employee = Employee::find(request('employeeid'));
        $employee->delete();
         return redirect('/employees');
        
    }
}
