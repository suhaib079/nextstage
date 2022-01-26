<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employees/index');
    }

    public function edit(){
        return view('employees/edit');
    }

    public function store(){
        return view('employees/store');
    }
}
