<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\Sector;
use App\Http\Requests\StoreSectorRequest;
use App\Http\Requests\UpdateSectorRequest;
use Illuminate\Http\Request;



class SectorController extends Controller
{
    public function index()
    {


        $sectors = Sector::paginate(15); 
        return view('admin.sectors.s_index', compact('sectors'));

    }

    public function create()
    {
        return view('admin.sectors.s_create');
    }


    
    /* public function store(Request $request)
    {

        dd(Company::create( $request->all() ));
    } */

    
    public function store(StoreSectorRequest $request)
    {

        Sector::create($request->validated());
        return redirect()
            ->route('sectors.index')
            ->with('success', 'Setor adicionado com sucesso');
    }

    
    public function edit(string $id)
    {


        if (!$sector = Sector::find($id)) {
            return redirect()->route('sectors.index')->with('message', 'Setor não encontrado');
        }

        return view('admin.sectors.s_edit', compact('sector'));

    }

    public function update(UpdateSectorRequest $request, string $id)
    {

        if (!$sector = Sector::find($id)) {
            return back()->with('message', 'Setor não encontrado');
        }

        $data = $request->only('id_setor', 'name_setor');
        



        $sector->update($data);


        return redirect()
            ->route('sectors.index')
            ->with('success', 'Setor editado com sucesso');

    }

    public function show(string $id)
    {

        if (!$sector = Sector::find($id)) {
            return redirect()->route('sectors.index')->with('message', 'Setor não encontrado');
        }

        return view('admin.sectors.s_show', compact('sector'));

    }

    public function destroy(string $id)
    {

        //if(Gate::allows(string))

        if (!$sector = Sector::find($id)) {
            return redirect()->route('sectors.index')->with('message', 'Setor não encontrado');
        }


        $sector->delete();

        return redirect()
            ->route('sectors.index')
            ->with('success', 'Setor deletado com sucesso');


    }
}