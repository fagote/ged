<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\Macro;
use App\Http\Requests\StoreMacroRequest;
use App\Http\Requests\UpdateMacroRequest;
use Illuminate\Http\Request;



class MacroController extends Controller
{
    public function index()
    {


        $macros = Macro::paginate(15); 
        return view('admin.macros.m_index', compact('macros'));

    }

    public function create()
    {
        return view('admin.macros.m_create');
    }

    
    public function store(StoreMacroRequest $request)
    {

        $idMacroExistente = Macro::where('id_macro', $request->input('id_macro'))->first();

        if ($idMacroExistente) {
            return redirect()
                ->route('macros.index')
                ->with('error', 'O ID da macro já existe no banco de dados. Favor inserir um novo ID.');
        }

        Macro::create($request->validated());
        return redirect()
            ->route('macros.index')
            ->with('success', 'Macro adicionada com sucesso');
    }

    
    public function edit(string $id)
    {


        if (!$macro = Macro::find($id)) {
            return redirect()->route('macros.index')->with('message', 'Macro não encontrada');
        }

        return view('admin.macros.m_edit', compact('macro'));

    }

    public function update(UpdateMacroRequest $request, string $id)
    {

        if (!$macro = Macro::find($id)) {
            return back()->with('message', 'Macro não encontrada');
        }

        $data = $request->only('id_macro', 'name_macro');
        
        $macro->update($data);

        return redirect()
            ->route('macros.index')
            ->with('success', 'Macro editada com sucesso');

    }

    public function show(string $id)
    {

        if (!$macro = Macro::find($id)) {
            return redirect()->route('macros.index')->with('message', 'Macro não encontrada');
        }

        return view('admin.macros.m_show', compact('macro'));

    }

    public function destroy(string $id)
    {

        //if(Gate::allows(string))

        if (!$macro = Macro::find($id)) {
            return redirect()->route('macros.index')->with('message', 'Macro não encontrada');
        }


        $macro->delete();

        return redirect()
            ->route('macros.index')
            ->with('success', 'Macro deletada com sucesso');


    }
}