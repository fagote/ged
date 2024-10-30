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

        $users = User::all();
        // Permite o meu banco files acessar o banco usuários para mostrar a 
        // informção
        $files = File::with(['user','company','sector','macro'])->paginate(15);

        return view('admin.files.f_index', compact('files','users'));

    }

    public function aguardandoAprovacao() {

        $files = File::where('aprovacao', 1)->paginate(15);
        return view('admin.files.aguardandoAprovacao', compact('files'));

    }

    public function aprovar($id){

        $file = File::find($id);

        if(!$file){
            return redirect()->back()->with('error','Arquivo não encontrado.');
        }

        $file->aprovacao = 2;
        $file->ativo = 1;
        $file->save();

        return redirect()->back()->with('success','Arquivo aprovado com sucesso.');

    }

    
    public function reprovar(Request $request, $id)
{
    $file = File::find($id);

    if (!$file) {
        return redirect()->back()->with('error', 'Arquivo não encontrado.');
    }

    $file->motivoReprovacao = $request->input('motivoReprovacao');
    $file->aprovacao = 0;
    $file->ativo = 0;
    $file->save();

    // Redirecione com uma mensagem de sucesso
    return redirect()->back()->with('success', 'Arquivo reprovado.');
}


    public function arquivosAprovados(){

        $files = File::where('aprovacao', 2)->paginate('15');
        return view('admin.files.arquivosAprovados',compact('files'));

    }

    public function arquivosReprovados(){
        $files = File::where('aprovacao', 0)->paginate('15');
        return view('admin.files.arquivosReprovados', compact('files'));
    }
    
    public function arquivosInativos(){

        $files = File::where('ativo', 0)->paginate(15);
        return view('admin.files.arquivosInativos', compact('files'));

    }

    public function arquivosAtivos(){

        $files = File::where('ativo', 1)->paginate(15);
        return view('admin.files.arquivosAtivos', compact('files'));

    }

    public function ativar($id){

        $file = File::find($id);

        if(!$file){
            return redirect()->back()->with('error', 'Erro ao encontrar arquivo');
        }

        $file->ativo = 1;
        $file->save();

        return redirect()->back()->with('success','Arquivo ativado com sucesso.');

    }

    public function inativar($id){
        $file = File::find($id);

        if(!$file){
            return redirect()->back()->with('error','Erro ao encontrar arquivo.');
        }

        $file->ativo = 0;
        $file->save();

        return redirect()->back()->with('success','Arquivo inativado com sucesso.');
    }

    public function create()
    {
        
        $users = User::all();
        $companies = Company::all();
        $sectors = Sector::all();
        $macros = Macro::all();

        return view('admin.files.f_create', compact('users', 'companies', 'sectors', 'macros'));
    }

    
    //================================================
    // Função Para Colocar Informações no Banco de Dados

    public function store(StoreFileRequest $request)
    {
    // Validação dos campos
    $validatedData = $request->validate([
        'file_path' => 'required|file|max:10240',  
        'versao' => 'required|integer',
        'codigo' => 'required|string',
        'user_id' => 'required|exists:users,id',
        'id_macro' => 'required|exists:macros,id_macro',
        'id_setor' => 'required|exists:sectors,id_setor',
        'id_empresa' => 'required|exists:companies,id_empresa',
    ]);

    // Upload do arquivo
    if ($request->hasFile('file_path')) {
        $file = $request->file('file_path');
        $filePath = $file->store('files', 'public');  // Armazena o arquivo na pasta 'storage/app/public/arquivos'
        $validatedData['file_path'] = $filePath;  // Adiciona o caminho do arquivo no array de dados validados
    }
      
    File::create($validatedData);

        return redirect()
            ->route('files.index')
            ->with('success', 'Arquivo adicionado com sucesso!');
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
        $data = $request->only('versao', 'codigo', 'id_macro', 'id_setor', 'id_empresa', 'user_id');

        // Verifica se um novo arquivo foi enviado
        if ($request->hasFile('file_path')) {
            // Armazena o novo arquivo na pasta "files"
            $fileToUpload = $request->file('file_path');
            $filePath = $fileToUpload->store('files', 'public'); // Armazena na pasta 'files'
            $data['file_path'] = $filePath; // Atualiza o caminho do arquivo
        }

        // Atualiza o registro do arquivo
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


    //=========================================
    // Função Para Excluir arquivo

    public function destroy(string $id)
    {

        if (!$file = File::find($id)) {
            return redirect()->route('files.index')->with('message', 'Arquivo não encontrado');
        }


        $file->delete();

        return redirect()
            ->route('files.index')
            ->with('success', 'Arquivo excluído com sucesso');

    }

    //=========================================
    

    //=========================================
    // Função Para Mostrar Arquivos
    
    public function view($id)
    {
        $file = File::findOrFail($id); // Procura o arquivo pelo ID ou retorna um 404

        $filePath = storage_path('app/public/' . $file->file_path); // Caminho completo do arquivo

        if (file_exists($filePath)) {
            return response()->file($filePath); // Retorna o arquivo para visualização no navegador
        }

        return redirect()->back()->with('error', 'Arquivo não encontrado.');
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

        $files = $query->paginate(10); // Pagina 10 usuários por página

        return view('admin.files.f_index', compact('files'));
    }
    //=========================================
    
    //=========================================
    // Função
    //=========================================
    
   

}
