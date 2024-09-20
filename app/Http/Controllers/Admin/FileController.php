<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\User;
use App\Models\Company;
use App\Models\Macro;
use App\Models\Sector;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class FileController extends Controller
{

    public function index()
    {

        // Permite o meu banco files acessar o banco usuários para mostrar a 
        // informção
        $files = File::with(['user','company','sector','macro'])->paginate(15);

        return view('admin.files.f_index', compact('files'));

    }


    public function create()
    {
        
        $users = User::all();
        $companies = Company::all();
        $sectors = Sector::all();
        $macros = Macro::all();

        return view('admin.files.f_create', compact('users', 'companies', 'sectors', 'macros'));
    }



    public function upload(StoreFileRequest $request){
        
        $input = $request->validated();
        dd($input);

    }

    //=================================================
    /*
    public function store(StoreFileRequest $request)
    {

        File::create($request->validated());

        $files = request->file('files');

        $paths = [];

        foreach($files as $file){
            $path = $file->store('files', 'public');
            $paths[] = $path;
        }

        foreach ($paths as $path){
            File::create([
                'user_id' => $request->input('user_id'), 
                'id_macro' => $request->input('id_macro'),
                'id_setor' => $request->input('id_setor'),
                'id_empresa' => $request->input('id_empresa'),
                'versao' => $request->input('versao'),
                'codigo' => $request->input('codigo'),
                'file_path' => $path,
            ]);
        }

        return redirect()
            ->route('files.index')
            ->with('success', 'Arquivo adicionado com sucesso');
    }*/
    //================================================


    
    //================================================
    // Função Para Colocar Informações no Banco de Dados
    public function store(StoreFileRequest $request)
    {
        File::create($request->validated());

        return redirect()
            ->route('files.index')
            ->with('success', 'Arquivo(s) adicionado(s) com sucesso!');
    }
    //================================================




    public function edit(string $id)
    {

        //$company = Company::find($id);

        $companies = Company::all();
        $users = User::all();
        $sectors = Sector::all();
        $macros = Macro::all();


        if (!$file = File::find($id)) {
            return redirect()->route('files.index')->with('message', 'Arquivo não encontrado');
        }

        return view('admin.files.f_edit', compact('file', 'companies', 'sectors', 'users', 'macros'));

    }

    public function update(UpdateFileRequest $request, string $id)
{
    // Busca o arquivo pelo ID
    if (!$file = File::find($id)) {
        return back()->with('message', 'Arquivo não encontrado');
    }

    // Coleta todos os dados exceto o arquivo
    $data = $request->only('versao', 'codigo', 'id_macro', 'id_setor', 'id_empresa', 'user_id', 'file_path');

    /*
    // Verifica se um novo arquivo foi enviado
    if ($request->hasFile('file')) {
        // Armazena o novo arquivo na pasta 'files' dentro de 'public'
        $path = $request->file('file')->store('files', 'public');

        // Adiciona o novo caminho do arquivo ao array de dados a serem atualizados
        $data['file_path'] = $path;
    }*/

    // Atualiza os dados do arquivo
    $file->update($data);

    // Redireciona para a página de índice com uma mensagem de sucesso
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
    /*
    public function upload(Request $request, $id)
    {
        $request->validate([
            'files.*' => 'required|mimes:pdf,xlsx,ods|max:2048', // Validação para arquivos
        ]);

        $file = File::find($id);

        foreach ($request->file('files') as $file) {
            $path = $file->store('files', 'public'); // Armazena o arquivo na pasta 'user_files' dentro de 'public'
            $file->files()->create(['file_path' => $path]); // Salva o caminho do arquivo na tabela user_files
        }

        return back()->with('success', 'Arquivos enviados com sucesso!');
    }*/
    
    //=========================================
    

    //=========================================
    // Função Para Mostrar Arquivos
    /*
    public function view($id)
    {
        $file = File::findOrFail($id); // Procura o arquivo pelo ID ou retorna um 404

        $filePath = storage_path('app/public/' . $file->file_path); // Caminho completo do arquivo

        if (file_exists($filePath)) {
            return response()->file($filePath); // Retorna o arquivo para visualização no navegador
        }

        return redirect()->back()->with('error', 'Arquivo não encontrado.');
    }
    */
    //=========================================


    
    //=========================================
    // Função para busca de Arquivos
    public function search(Request $request)
    {
        $query = File::query();

        if ($search = $request->input('search')) {
            $query->where('codigo', 'like', "%{$search}%");
        }

        $files = $query->paginate(10); // Pagina 10 usuários por página

        return view('admin.files.f_index', compact('files'));
    }
    //=========================================
    
    //=========================================
    // Função
    //=========================================
    
   

}
