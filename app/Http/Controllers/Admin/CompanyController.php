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
    
    public function store(StoreCompanyRequest $request)
    {
        // Verifica se o id_empresa já existe no banco de dados
        $idEmpresaExistente = Company::where('id_empresa', $request->input('id_empresa'))->first();

        if ($idEmpresaExistente) {
            // Retorna um aviso se o ID já existir
            return redirect()
                ->route('companies.index')
                ->with('error', 'O ID da empresa já existe no banco de dados. Favor inserir um novo ID.');
        }

        // Se o id_empresa não existir, cria o registro
        Company::create($request->validated());

        return redirect()
            ->route('companies.index')
            ->with('success', 'Empresa adicionada com sucesso.');
    }

    
    public function edit(string $id)
    {


        if (!$company = Company::find($id)) {
            return redirect()->route('companies.index')->with('message', 'Empresa não encontrada');
        }

        return view('admin.companies.c_edit', compact('company'));

    }

    public function update(UpdateCompanyRequest $request, string $id)
    {

        if (!$company = Company::find($id)) {
            return back()->with('message', 'Empresa não encontrada');
        }

        $data = $request->only('id_empresa', 'name_empresa');
        
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
            ->with('success', 'Empresa deletada com sucesso');


    }
}