<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\Permission;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Illuminate\Http\Request;



class PermissionController extends Controller
{
    public function index()
    {


        $permissions = Permission::paginate(15); 
        return view('admin.permissions.p_index', compact('permissions'));

    }

    public function create()
    {
        return view('admin.permissions.p_create');
    }


    
    /* public function store(Request $request)
    {

        dd(Company::create( $request->all() ));
    } */

    
    public function store(StorePermissionRequest $request)
    {

        Permission::create($request->validated());
        return redirect()
            ->route('permissions.index')
            ->with('success', 'Permissão criada com sucesso');
    }
    
    
    public function edit(string $id)
    {


        if (!$permission = Permission::find($id)) {
            return redirect()->route('permissions.index')->with('message', 'Permissão não encontrada');
        }

        return view('admin.permissions.p_edit', compact('permission'));

    }

    public function update(UpdatePermissionRequest $request, string $id)
    {

        if (!$permission = Permission::find($id)) {
            return back()->with('message', 'Permissão não encontrada');
        }

        $data = $request->only('id_empresa', 'id_setor');
        
        $permission->update($data);

        return redirect()
            ->route('permissions.index')
            ->with('success', 'Permissão editada com sucesso');

    }

    public function show(string $id)
    {

        if (!$permission = Permission::find($id)) {
            return redirect()->route('permissions.index')->with('message', 'Permissão não encontrada');
        }

        return view('admin.permissions.p_show', compact('permission'));

    }

    public function destroy(string $id)
    {

        //if(Gate::allows(string))

        if (!$permission = Permission::find($id)) {
            return redirect()->route('permissions.index')->with('message', 'Permissão não encontrada');
        }


        $permission->delete();

        return redirect()
            ->route('permissions.index')
            ->with('success', 'Permissão deletada com sucesso');


    }
}