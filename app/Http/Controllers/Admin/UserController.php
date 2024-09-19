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


        $users = User::paginate(15); //User::all();

        return view('admin.users.index', compact('users'));

    }

    
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
    //Função Para Upload de Arquivos
    /*
    public function upload(Request $request, $id)
    {
        $request->validate([
            'files.*' => 'required|mimes:pdf,xlsx,ods|max:2048', // Validação para arquivos
        ]);

        $user = User::find($id);

        foreach ($request->file('files') as $file) {
            $path = $file->store('user_files', 'public'); // Armazena o arquivo na pasta 'user_files' dentro de 'public'
            $user->files()->create(['file_path' => $path]); // Salva o caminho do arquivo na tabela user_files
        }

        return back()->with('success', 'Arquivos enviados com sucesso!');
    }
    */
    //=========================================


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
    // Função para escolha da empresa via checkbox
    /*
    public function select_company(){

    }
    */
    //=========================================

    //=========================================
    // Função para escolha do setor via dropdown link
    /*
    public function select_sector(){
        
    }
    */
    //=========================================
    //
    //=========================================

    /*
    public function mostrarUsersFormBlade(){
        $users = User::all();
        return view('admin.files.f_partials.f_form', compact('users'));
    }*/
    


}

