<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;



class CompanyController extends Controller
{
    public function index()
    {


        $companies = Company::paginate(15); 
        return view('admin.companies.c_index', compact('companies'));

    }

    public function create()
    {
        return view('admin.companies.c_create');
    }


    
    /* public function store(Request $request)
    {

        dd(Company::create( $request->all() ));
    } */

    
    public function store(StoreCompanyRequest $request)
    {

        Company::create($request->validated());
        return redirect()
            ->route('companies.c_index')
            ->with('success', 'Empresa adicionada com sucesso');
    }

    
    public function edit(string $id)
    {


        if (!$company = Company::find($id)) {
            return redirect()->route('companies.c_index')->with('message', 'Empresa não encontrada');
        }

        return view('admin.companies.c_edit', compact('company'));

    }

    public function update(UpdateCompanyRequest $request, string $id)
    {

        if (!$company = Company::find($id)) {
            return back()->with('message', 'Empresa não encontrada');
        }

        $data = $request->only('name', 'email');
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }



        $company->update($data);


        return redirect()
            ->route('companies.index')
            ->with('success', 'Empresa editada com sucesso');

    }

    public function show(string $id)
    {

        if (!$company = Company::find($id)) {
            return redirect()->route('companies.index')->with('message', 'Empresa não encontrada');
        }

        return view('admin.companies.c_show', compact('company'));

    }

    public function destroy(string $id)
    {

        //if(Gate::allows(string))

        if (!$company = Company::find($id)) {
            return redirect()->route('companies.index')->with('message', 'Empresa não encontrada');
        }


        $company->delete();

        return redirect()
            ->route('companies.index')
            ->with('Success', 'Usuário deletado com sucesso');


    }
}