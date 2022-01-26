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

    public function edit($id){
        $company = Company::find($id);
        return view('companies/edit', [
            'company' => $company,
        ]);
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
    public function edditingcompany(){
        $company = Company::find(request('companyid'));
        $company->name =request('name');
        $company->address =request('address');
        $company->website =request('website');
        $company->email =request('email');
        $company->logo =request('logo');
        $company->save();
        return redirect('/companies');
    }
    public function deleteingcompany(){
        
        $company = Company::find(request('companyid'));
        $company->delete();
         return redirect('/companies');
        
    }
}
