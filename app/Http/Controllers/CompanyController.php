<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('companies/index',[
            'companies' => $companies,
        ]);
    }

    public function edit(){
        return view('companies/edit');
    }

    public function store(){
        return view('companies/store');
    }

    public function addingcompany(){
        $company= new Company();
        $company->name =request('name');
        $company->address =request('address');
        $company->website =request('website');
        $company->email =request('email');
        $company->logo =request('logo');
        $company->save();
        return redirect('/companies');
    }
}
