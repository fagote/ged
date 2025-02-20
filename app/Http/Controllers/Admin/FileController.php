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
use Illuminate\Support\Facades\Crypt;
use App\Events\FileApproved;
use Illuminate\Support\Facades\DB;
use App\Mail;

class FileController extends Controller
{

    public function index()
    {

        $users = User::all();
        // Permite o meu banco files acessar o banco usuários para mostrar a 
        // informção
        $files = File::with(['user', 'company', 'sector', 'macro'])->paginate(15);

        return view('admin.files.f_index', compact('files', 'users'));

    }

    public function aguardandoAprovacao()
    {

        $files = File::where('aprovacao', 1)->paginate(15);
        return view('admin.files.aguardandoAprovacao', compact('files'));

    }

    /*
    public function aprovar($id)
    {
        

        try {
            $file = File::find($id);

            if (!$file) {
                return redirect()->back()->with('error', 'Arquivo não encontrado.');
            }

            $file->aprovacao = 2;
            $file->ativo = 1;
            $file->save();

            event(new FileApproved($file));

            // Confirma a transação
            DB::commit();

            return redirect()->back()->with('success', 'Arquivo aprovado com sucesso.');
        } catch (\Exception $e) {
            // Desfaz a transação em caso de erro
            DB::rollBack();
            \Log::error("Erro ao aprovar arquivo ID {$id}: " . $e->getMessage());
            return redirect()->back()->with('error', 'Erro ao aprovar o arquivo.');
        }
    }*/


    public function aprovar($id)
    {

        $file = File::find($id);

        if (!$file) {
            return redirect()->back()->with('error', 'Arquivo não encontrado.');
        }

        $file->aprovacao = 2;
        $file->ativo = 1;
        $file->save();

        //Mail::to($file->setor->email);

        return redirect()->back()->with('success', 'Arquivo aprovado com sucesso.');

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


    public function arquivosAprovados()
    {

        $files = File::where('aprovacao', 2)->paginate('15');
        return view('admin.files.arquivosAprovados', compact('files'));

    }

    public function arquivosReprovados()
    {
        $files = File::where('aprovacao', 0)->paginate('15');
        return view('admin.files.arquivosReprovados', compact('files'));
    }

    public function arquivosInativos()
    {

        $files = File::where('ativo', 0)->paginate(15);
        return view('admin.files.arquivosInativos', compact('files'));

    }

    public function arquivosAtivos()
    {

        $files = File::where('ativo', 1)->paginate(15);
        return view('admin.files.arquivosAtivos', compact('files'));

    }

    public function ativar($id)
    {

        $file = File::find($id);

        if (!$file) {
            return redirect()->back()->with('error', 'Erro ao encontrar arquivo');
        }

        $file->ativo = 1;
        $file->save();

        return redirect()->back()->with('success', 'Arquivo ativado com sucesso.');

    }

    public function inativar($id)
    {
        $file = File::find($id);

        if (!$file) {
            return redirect()->back()->with('error', 'Erro ao encontrar arquivo.');
        }

        $file->ativo = 0;
        $file->save();

        return redirect()->back()->with('success', 'Arquivo inativado com sucesso.');
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
        for ($i = 1; $i <= 38; $i++) {
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
        for ($i = 1; $i <= 38; $i++) {
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


        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para visualizar este arquivo.');
        }

        // Recupera o arquivo do banco de dados
        $file = File::find($id);

        // Verifica se o arquivo existe
        if (!$file) {
            return abort(404, 'Arquivo não encontrado.');
        }

        // Retorna o arquivo como uma resposta
        return response()->file(storage_path('app/public/' . $file->file_path));



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
    $query = File::query();

    $user = auth()->user();

    $userCompanyIds = [
        $user->id_empresa1,
        $user->id_empresa2,
        $user->id_empresa3,
        $user->id_empresa4,
    ];

    $userSectorIds = [];
    for ($i = 1; $i <= 38; $i++) {
        $sectorField = "id_setor{$i}";
        if (!empty($user->$sectorField)) {
            $userSectorIds[] = $user->$sectorField;
        }
    }

    $query->where(function ($subQuery) use ($userCompanyIds, $userSectorIds) {
        $subQuery->where(function ($companyQuery) use ($userCompanyIds) {
            foreach ($userCompanyIds as $companyId) {
                if ($companyId) {
                    $companyQuery->orWhere('id_empresa1', $companyId)
                                 ->orWhere('id_empresa2', $companyId)
                                 ->orWhere('id_empresa3', $companyId)
                                 ->orWhere('id_empresa4', $companyId);
                }
            }
        })->where(function ($sectorQuery) use ($userSectorIds) {
            foreach ($userSectorIds as $sectorId) {
                $sectorQuery->orWhere(function ($subSectorQuery) use ($sectorId) {
                    for ($j = 1; $j <= 38; $j++) {
                        $subSectorQuery->orWhere("id_setor{$j}", $sectorId);
                    }
                });
            }
        });
    });

    if ($search = $request->input('search')) {
        $query->where('codigo', 'like', "%{$search}%");
    }

    $files = $query->paginate(10);

    return view('admin.files.f_index', compact('files'));
}




    
    //=========================================

    //=========================================

    public function generateToken($id)
    {
        $encrypted = Crypt::encryptString($id);
        return route('files.view', $encrypted);
    }
    //=========================================
    
    //=========================================

    /*
    
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
        $setorId33 = $user->id_setor33;
        $setorId34 = $user->id_setor34;
        $setorId35 = $user->id_setor35;
        $setorId36 = $user->id_setor36;
        $setorId37 = $user->id_setor37;
        $setorId38 = $user->id_setor38;


        // Realiza a busca de arquivos com o filtro de empresa, setor e código
        // Realiza a busca de arquivos com o filtro de empresa, setor e código
        $files = File::where('id_empresa1', $empresaId1)
                    ->Where('id_empresa2', $empresaId2)
                    ->Where('id_empresa3', $empresaId3)
                    ->Where('id_empresa4', $empresaId4)
                    ->where('id_setor1',  $setorId1)
                    ->where('id_setor2',  $setorId2)
                    ->where('id_setor3',  $setorId3)
                    ->where('id_setor4',  $setorId4)
                    ->where('id_setor5',  $setorId5)
                    ->where('id_setor6',  $setorId6)
                    ->where('id_setor7',  $setorId7)
                    ->where('id_setor8',  $setorId8)
                    ->where('id_setor9',  $setorId9)
                    ->where('id_setor10', $setorId10)
                    ->where('id_setor11', $setorId11)
                    ->where('id_setor12', $setorId12)
                    ->where('id_setor13', $setorId13)
                    ->where('id_setor14', $setorId14)
                    ->where('id_setor15', $setorId15)
                    ->where('id_setor16', $setorId16)
                    ->where('id_setor17', $setorId17)
                    ->where('id_setor18', $setorId18)
                    ->where('id_setor19', $setorId19)
                    ->where('id_setor20', $setorId20)
                    ->where('id_setor21', $setorId21)
                    ->where('id_setor22', $setorId22)
                    ->where('id_setor23', $setorId23)
                    ->where('id_setor24', $setorId24)
                    ->where('id_setor25', $setorId25)
                    ->where('id_setor26', $setorId36)
                    ->where('id_setor27', $setorId27)
                    ->where('id_setor28', $setorId28)
                    ->where('id_setor29', $setorId29)
                    ->where('id_setor30', $setorId30)
                    ->where('id_setor31', $setorId31)
                    ->where('id_setor32', $setorId32)
                    ->where('id_setor33', $setorId33)
                    ->where('id_setor34', $setorId34)
                    ->where('id_setor35', $setorId35)
                    ->where('id_setor36', $setorId36)
                    ->where('id_setor37', $setorId37)
                    ->where('id_setor38', $setorId38)
                    ->where('ativo', 1)
                    ->where('aprovacao', 2)
                    ->where('codigo', 'like', '%' . $request->search . '%')
                    ->paginate(10);


        return view('admin.files.f_index', compact('files'));
    }


    */



}
