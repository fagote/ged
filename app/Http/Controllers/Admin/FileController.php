<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;

class FileController extends Controller
{

    public function index()
    {


        $files = File::paginate(15);

        // acho que aqui deve ser dashboard, mas vai ficar para depois
        return view('admin.files.f_index', compact('files'));

    }

    public function create()
    {
        return view('admin.files.f_create');
    }

    public function store(StoreFileRequest $request)
    {

        File::create($request->validated());
        return redirect()
            ->route('files.index')
            ->with('success', 'Arquivo adicionado com sucesso');
    }

    public function edit(string $id)
    {

        //$company = Company::find($id);
        if (!$file = File::find($id)) {
            return redirect()->route('files.index')->with('message', 'Arquivo não encontrado');
        }

        return view('admin.files.f_edit', compact('file'));

    }

    public function update(UpdateFileRequest $request, string $id)
    {

        if (!$file = File::find($id)) {
            return back()->with('message', 'Arquivo não encontrado');
        }

        $data = $request->only('versao', 'codigo', 'id_macro', 'id_setor', 'id_empresa');
        
        /*if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }*/



        $file->update($data);


        return redirect()
            ->route('files.index')
            ->with('success', 'Arquivo editado com sucesso');

    }

    public function show(string $id)
    {

        if (!$file = File::find($id)) {
            return redirect()->route('files.index')->with('message', 'Arquivo não encontrado');
        }

        return view('admin.files.f_show', compact('file'));

    }

    
    public function destroy(string $id)
    {

        if (!$file = File::find($id)) {
            return redirect()->route('files.index')->with('message', 'Arquivo não encontrado');
        }

        /*
        if (Auth::file()->id === $file->id) {
            return back()->with('message', 'Você não pode excluir seu próprio perfil');
        }*/


        $file->delete();

        return redirect()
            ->route('files.index')
            ->with('success', 'Arquivo excluído com sucesso');


    }


    //=========================================
    // Função Para Upload de Arquivos
    public function upload(Request $request, $id)
    {
        $request->validate([
            'files.*' => 'required|mimes:pdf,xlsx,ods|max:2048', // Validação para arquivos
        ]);

        $file = File::find($id);

        foreach ($request->file('files') as $file) {
            $path = $file->store('files', 'public'); // Armazena o arquivo na pasta 'user_files' dentro de 'public'
            $user->files()->create(['file_path' => $path]); // Salva o caminho do arquivo na tabela user_files
        }

        return back()->with('success', 'Arquivos enviados com sucesso!');
    }
    //=========================================

    //=========================================
    // Função Para Mostrar Arquivos

    public function showFile(){
        $user = auth()->user();
        $files = $user->files;

        dd($files);
        //return view('dashboard', compact('files'));
    }
    //=========================================

    //=========================================
    // Função para busca de Arquivos
    public function search(Request $request)
    {
        $query = File::query();

        if ($search = $request->input('search')) {
            $query->where('codigo', 'like', "%{$search}%");
        }

        $users = $query->paginate(10); // Pagina 10 usuários por página

        return view('admin.files.f_index', compact('files'));
    }
    //=========================================

}
