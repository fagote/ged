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
    $data = $request->validated();

    // Upload do arquivo
    if ($request->hasFile('file_path')) {
        $file = $request->file('file_path');
        $filePath = $file->store('files', 'public');  // Armazena o arquivo na pasta 'storage/app/public/arquivos'
        $data['file_path'] = $filePath;  // Adiciona o caminho do arquivo no array de dados validados
    }

    $empresas = $request->input('id_empresa', []); // Pega o array de empresas ou vazio se não selecionado
    for ($i = 1; $i <= 4; $i++) {
        $data["id_empresa{$i}"] = isset($empresas[$i - 1]) ? $empresas[$i - 1] : null;
    }

    // Verifica os campos de setores (id_setor[])
    $setores = $request->input('id_setor', []); // Pega o array de setores ou vazio se não selecionado
    for ($i = 1; $i <= 32; $i++) {
        $data["id_setor{$i}"] = isset($setores[$i - 1]) ? $setores[$i - 1] : null;
    }   
      
    File::create($data);

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
        $data = $request->only('versao', 'codigo', 'id_macro', 'user_id');


        $empresas = $request->input('id_empresa', []);  // Vai pegar o array de empresas ou um array vazio se não houver seleção
        // Adiciona as empresas no array de dados
        for ($i = 1; $i <= 4; $i++) {
            $data["id_empresa{$i}"] = isset($empresas[$i - 1]) ? $empresas[$i - 1] : null;
        }

        // Verifica os campos de setores (id_setor[])
        $setores = $request->input('id_setor', []);  // Vai pegar o array de setores ou um array vazio se não houver seleção
        // Adiciona os setores no array de dados
        for ($i = 1; $i <= 32; $i++) {
            $data["id_setor{$i}"] = isset($setores[$i - 1]) ? $setores[$i - 1] : null;
        }   


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
    // Busca de arquivos para usuários comuns

    public function searchCommonUser(Request $request)
    {
        $user = auth()->user(); // Obtém o usuário logado
        $file = File::all();
    
        // Identifica as permissões do usuário logado (empresa e setor)
        $empresaId1 = $user->id_empresa1; 
        $empresaId2 = $user->id_empresa2;
        $empresaId3 = $user->id_empresa3;
        $empresaId4 = $user->id_empresa4;
        $setorId1 = $user->id_setor1;  
        $setorId2 = $user->id_setor2; 
        $setorId3 = $user->id_setor3; 
        $setorId4 = $user->id_setor4; 
        $setorId5 = $user->id_setor5; 
        $setorId6 = $user->id_setor6; 
        $setorId7 = $user->id_setor7; 
        $setorId8 = $user->id_setor8; 
        $setorId9 = $user->id_setor9; 
        $setorId10 = $user->id_setor10; 
        $setorId11 = $user->id_setor11; 
        $setorId12 = $user->id_setor12; 
        $setorId13 = $user->id_setor13; 
        $setorId14 = $user->id_setor14; 
        $setorId15 = $user->id_setor15;  
        $setorId16 = $user->id_setor16;  
        $setorId17 = $user->id_setor17; 
        $setorId18 = $user->id_setor18; 
        $setorId19 = $user->id_setor19; 
        $setorId20 = $user->id_setor20; 
        $setorId21 = $user->id_setor21; 
        $setorId22 = $user->id_setor22; 
        $setorId23 = $user->id_setor23; 
        $setorId24 = $user->id_setor24; 
        $setorId25 = $user->id_setor25; 
        $setorId26 = $user->id_setor26; 
        $setorId27 = $user->id_setor27; 
        $setorId28 = $user->id_setor28; 
        $setorId29 = $user->id_setor29; 
        $setorId30 = $user->id_setor30;  
        $setorId31 = $user->id_setor31;  
        $setorId32 = $user->id_setor32; 
      
    
        // Realiza a busca de arquivos com o filtro de empresa, setor e código
        $files = File::whereIn('id_empresa', [$empresaId1, $empresaId2,$empresaId3,$empresaId4])
                     ->whereIn('id_setor', [$setorId1,$setorId2,$setorId3,$setorId4,$setorId5,
                                                            $setorId6,$setorId7,$setorId8,$setorId9,$setorId10,$setorId11,
                                                            $setorId12,$setorId13,$setorId14,$setorId15,$setorId16,$setorId17,$setorId18,
                                                            $setorId19,$setorId20,$setorId21,$setorId22,$setorId23,$setorId24,$setorId25,
                                                            $setorId26,$setorId27,$setorId28,$setorId29,$setorId30,$setorId31,$setorId32])
                     ->where('ativo',$file->ativo = 1)
                     ->where('aprovacao', $file->aprovacao = 2)
                     ->where('codigo', 'like', '%' . $request->search . '%')
                     ->paginate(10);
    
        return view('admin.files.f_index', compact('files'));
    }
    

    //=========================================
    
   

}
