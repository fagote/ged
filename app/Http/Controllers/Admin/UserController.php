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
    // Página index da pasta empresa Inusittá

    public function indexIN(){

        return view('admin.inusitta.inusitta');
    }

    //=========================================

    

    //=========================================
    //Função Para Mostrar a pasta do setor TI

    public function indexInusittaTi(){
        return view('admin.inusitta.setores.tecnologia-informacao.tecnologia_informacao');
    }
    //OBS: a view tecnologia_informacao.blade.php funciona como um curinga para ser chamado nos outros setores.
    //=========================================

    //=========================================
    // Função para mostrar a pasta do setor marketing

    public function indexInusittaMarketing(){
        return view('admin.inusitta.setores.marketing.marketing');
    }

    //=========================================

    //=========================================
    // Função para mostrar a pasta do setor comercial

    public function indexInusittaComercial(){
        return view('admin.inusitta.setores.comercial.comercial');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/almoxarifado

    public function indexInusittaAlmoxarifado(){
        return view('admin.inusitta.setores.almoxarifado.almoxarifado');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/assistencia

    public function indexInusittaAssistencia(){
        return view('admin.inusitta.setores.assistencia.assistencia');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/compras

    public function indexInusittaCompras(){
        return view('admin.inusitta.setores.compras.compras');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/contabilidade

    public function indexInusittaContabilidade(){
        return view('admin.inusitta.setores.contabilidade.contabilidade');
    }

    //=========================================





    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexInusittaTiInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrução');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro qualidade

    public function indexInusittaTiProcedimento(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexInusittaTiRegistro(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexInusittaTiFormulario(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================


    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexInusittaMarketingInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Marketing');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro procedimento

    public function indexInusittaMarketingProcedimento(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','procedimento');
        }) -> paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexInusittaMarketingRegistro(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','registro');
        }) -> paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexInusittaMarketingFormulario(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','formulario');
        }) -> paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/instrucao

    public function indexInusittaComercialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/procedimento

    public function indexInusittaComercialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexInusittaComercialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexInusittaComercialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexInusittaAlmoxarifadoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/procedimento

    public function indexInusittaAlmoxarifadoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/registro

    public function indexInusittaAlmoxarifadoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/fomulario

    public function indexInusittaAlmoxarifadoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
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

