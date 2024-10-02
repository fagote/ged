<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Middleware\CheckIfIsAdmin;
use App\Models\User;
use App\Models\File;
use App\Models\Company;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    

    public function index()
    {


        $users = User::with(['company','sector'])->paginate(15); //User::all();

        return view('admin.users.index', compact('users'));

    }


    //=========================================
    // Página index da "pasta Inusittá"

    public function indexIN(){

        return view('inusitta');
    }

    //=========================================

    //=========================================
    //Função Para Mostrar a pasta do TI

    public function indexTI(){
        return view('tecnologia_informacao');
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos de qualidade

    public function indexQ(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Qualidade');
        })
        ->paginate(10);

        return view('admin.macros.qualidade', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos de Produção

    public function indexP(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Produção');
        })
        ->paginate(10);

        return view('admin.macros.qualidade', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos de Instrução

    public function indexI(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Instrução');
        })
        ->paginate(10);

        return view('admin.macros.qualidade', compact('files'));
    }

    //=========================================



    
    public function create()
    {

        $sectors = Sector::all();
        $companies = Company::all();
        $files = File::all();

        return view('admin.users.create', compact('sectors', 'companies'));
    }

    public function store(StoreUserRequest $request)
    {

        User::create($request->validated());
        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com sucesso');
    }

    public function edit(string $id)
    {


        $sectors = Sector::all();
        $companies = Company::all();
        $files = File::all();

        //$company = Company::find($id);
        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado');
        }

        return view('admin.users.edit', compact('user','companies', 'sectors'));

    }

    public function update(UpdateUserRequest $request, string $id)
    {

        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado');
        }

        $data = $request->only('name', 'email', 'id_empresa', 'id_setor');
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }



        $user->update($data);


        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário editado com sucesso');

    }

    public function show(string $id)
    {

        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado');
        }

        return view('admin.users.show', compact('user'));

    }

    
    public function destroy(string $id)
    {

        //if(Gate::allows(string))

        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado');
        }

        if (Auth::user()->id === $user->id) {
            return back()->with('message', 'Você não pode excluir seu próprio perfil');
        }


        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário excluído com sucesso');


    }



    //=========================================
    // Função para busca de usuários
    public function search(Request $request)
    {
        $query = User::query();

        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%");
        }

        $users = $query->paginate(10); // Pagina 10 usuários por página

        return view('admin.users.index', compact('users'));
    }
    //=========================================

    //=========================================
    //
    //=========================================

    //=========================================
    //
    //=========================================
    //
    //=========================================

   
    


}

