<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){

        $companies = Company::paginate(15);

        return view('admin.companies.c_index', compact('companies'));
        //return 'CompanyController@@@';
    }

    public function create(){   

        return view('admin.companies.c_create');

    }
}
