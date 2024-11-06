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
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    

    public function index()
    {


        $users = User::paginate(15); //User::all();
        //$users = User::where('id_permission','!=', '1')->paginate(15);

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
    // Pasta inusitta/contas a pagar 

    public function indexInusittaContasPagar(){
        return view('admin.inusitta.setores.contaspagar.contaspagar');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/contas a receber 

    public function indexInusittaContasReceber(){
        return view('admin.inusitta.setores.contasreceber.contasreceber');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/custo

    public function indexInusittaCusto(){
        return view('admin.inusitta.setores.custo.custo');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/design

    public function indexInusittaDesign(){
        return view('admin.inusitta.setores.designn.design');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/diretoria administrativa

    public function indexInusittaDiretoriaAdministrativa(){
        return view('admin.inusitta.setores.diretoriaadministrativa.diretoriaadministrativa');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/diretoria comercial

    public function indexInusittaDiretoriaComercial(){
        return view('admin.inusitta.setores.diretoriacomercial.diretoriacomercial');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/diretoria industrial

    public function indexInusittaDiretoriaIndustrial(){
        return view('admin.inusitta.setores.diretoriaindustrial.diretoriaindustrial');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/e-commerce

    public function indexInusittaEcommerce(){
        return view('admin.inusitta.setores.ecommerce.ecommerce');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/engenharia

    public function indexInusittaEngenharia(){
        return view('admin.inusitta.setores.engenharia.engenharia');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/expedicao

    public function indexInusittaExpedicao(){
        return view('admin.inusitta.setores.expedicao.expedicao');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/exportacao

    public function indexInusittaExportacao(){
        return view('admin.inusitta.setores.exportacao.exportacao');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/faturamento

    public function indexInusittaFaturamento(){
        return view('admin.inusitta.setores.faturamento.faturamento');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/manutencao

    public function indexInusittaManutencao(){
        return view('admin.inusitta.setores.manutencao.manutencao');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/ped

    public function indexInusittaPed(){
        return view('admin.inusitta.setores.ped.ped');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/pmo

    public function indexInusittaPmo(){
        return view('admin.inusitta.setores.pmo.pmo');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/ppcp

    public function indexInusittaPpcp(){
        return view('admin.inusitta.setores.ppcp.ppcp');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/qualidade

    public function indexInusittaQualidade(){
        return view('admin.inusitta.setores.qualidade.qualidade');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/recepcao

    public function indexInusittaRecepcao(){
        return view('admin.inusitta.setores.recepcao.recepcao');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/restaurante

    public function indexInusittaRestaurante(){
        return view('admin.inusitta.setores.restaurante.restaurante');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/rh

    public function indexInusittaRh(){
        return view('admin.inusitta.setores.rh.rh');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/sac

    public function indexInusittaSac(){
        return view('admin.inusitta.setores.sac.sac');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/sesmt

    public function indexInusittaSesmt(){
        return view('admin.inusitta.setores.sesmt.sesmt');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/projetos

    public function indexInusittaProjetos(){
        return view('admin.inusitta.setores.projetos.projetos');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/exportacao

    public function indexInusittaTransporte(){
        return view('admin.inusitta.setores.transporte.transporte');
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

    //=========================================
    // inusitta/assistencia/fomulario

    public function indexInusittaAssistenciaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistenca');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/registro

    public function indexInusittaAssistenciaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/procedimento

    public function indexInusittaAssistenciaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexInusittaAssistenciaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/formulario

    public function indexInusittaComprasFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/registro

    public function indexInusittaComprasRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/procedimento

    public function indexInusittaComprasProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/instrucao

    public function indexInusittaComprasInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/formulario

    public function indexInusittaContabilidadeFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/registro

    public function indexInusittaContabilidadeRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexInusittaContabilidadeProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexInusittaContabilidadeInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/formulario

    public function indexInusittaContasPagarFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulário');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexInusittaContasPagarRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'resgistro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/procedimento

    public function indexInusittaContasPagarProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexInusittaContasPagarInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/formulario

    public function indexInusittaContasReceberFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/registro

    public function indexInusittaContasReceberRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/procedimento

    public function indexInusittaContasReceberProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/instrucao

    public function indexInusittaContasReceberInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/formulario

    public function indexInusittaCustoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/registro

    public function indexInusittaCustoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/procedimento

    public function indexInusittaCustoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/instrucao

    public function indexInusittaCustoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/formulario

    public function indexInusittaDesignFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/registro

    public function indexInusittaDesignRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/procedimento

    public function indexInusittaDesignProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/instrucao

    public function indexInusittaDesignInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/formulario

    public function indexInusittaDiretoriaAdministrativaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/registro

    public function indexInusittaDiretoriaAdministrativaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/procedimento

    public function indexInusittaDiretoriaAdministrativaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/instrucao

    public function indexInusittaDiretoriaAdministrativaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ formulario

    public function indexInusittaDiretoriaComercialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ registro

    public function indexInusittaDiretoriaComercialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ procedimento

    public function indexInusittaDiretoriaComercialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ instrucao

    public function indexInusittaDiretoriaComercialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ formulario

    public function indexInusittaDiretoriaIndustrialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ registro

    public function indexInusittaDiretoriaIndustrialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ procedimento

    public function indexInusittaDiretoriaIndustrialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ instrucao

    public function indexInusittaDiretoriaIndustrialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ formulario

    public function indexInusittaEcommerceFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ registro

    public function indexInusittaEcommerceRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ procedimento

    public function indexInusittaEcommerceProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ instrucao

    public function indexInusittaEcommerceInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ formulario

    public function indexInusittaEngenhariaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ registro

    public function indexInusittaEngenhariaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ procedimento

    public function indexInusittaEngenhariaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ instrucao

    public function indexInusittaEngenhariaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ formulario

    public function indexInusittaExpedicaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ registro

    public function indexInusittaExpedicaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ procedimento

    public function indexInusittaExpedicaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ instrucao

    public function indexInusittaExpedicaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ formulario

    public function indexInusittaExportacaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ registro

    public function indexInusittaExportacaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ procedimento

    public function indexInusittaExportacaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ instrucao

    public function indexInusittaExportacaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ formulario

    public function indexInusittaFaturamentoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ registro

    public function indexInusittaFaturamentoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ procedimento

    public function indexInusittaFaturamentoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ instrucao

    public function indexInusittaFaturamentoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ formulario

    public function indexInusittaManutencaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ registro

    public function indexInusittaManutencaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ procedimento

    public function indexInusittaManutencaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ instrucao

    public function indexInusittaManutencaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ formulario

    public function indexInusittaPedFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ registro

    public function indexInusittaPedRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ procedimento

    public function indexInusittaPedProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ instrucao

    public function indexInusittaPedInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ formulario

    public function indexInusittaPmoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ registro

    public function indexInusittaPmoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ procedimento

    public function indexInusittaPmoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ instrucao

    public function indexInusittaPmoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ formulario

    public function indexInusittaPpcpFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ registro

    public function indexInusittaPpcpRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ procedimento

    public function indexInusittaPpcpProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ instrucao

    public function indexInusittaPpcpInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ formulario

    public function indexInusittaQualidadeFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ registro

    public function indexInusittaQualidadeRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ procedimento

    public function indexInusittaQualidadeProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ instrucao

    public function indexInusittaQualidadeInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    // QUALIDADE
    //=========================================

    //=========================================
    // inusitta/recepcao/ formulario

    public function indexInusittaRecepcaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/recepcao/ registro

    public function indexInusittaRecepcaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ procedimento

    public function indexInusittaRecepcaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ instrucao

    public function indexInusittaRecepcaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ formulario

    public function indexInusittaRestauranteFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ registro

    public function indexInusittaRestauranteRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ procedimento

    public function indexInusittaRestauranteProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ instrucao

    public function indexInusittaRestauranteInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ formulario

    public function indexInusittaRhFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ registro

    public function indexInusittaRhRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ procedimento

    public function indexInusittaRhProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ instrucao

    public function indexInusittaRhInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ formulario

    public function indexInusittaSacFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ registro

    public function indexInusittaSacRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ procedimento

    public function indexInusittaSacProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ instrucao

    public function indexInusittaSacInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ formulario

    public function indexInusittaSesmtFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ registro

    public function indexInusittaSesmtRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ procedimento

    public function indexInusittaSesmtProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ instrucao

    public function indexInusittaSesmtInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ formulario

    public function indexInusittaProjetosFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ registro

    public function indexInusittaProjetosRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ procedimento

    public function indexInusittaProjetosProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ instrucao

    public function indexInusittaProjetosInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ formulario

    public function indexInusittaTransporteFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ registro

    public function indexInusittaTransporteRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaTransporteProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.inusitta.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaTransporteInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Inusitta');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
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
        $permissions = Permission::all();

        return view('admin.users.create', compact('sectors', 'companies', 'permissions'));
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
        $permissions = Permission::all();

        //$company = Company::find($id);
        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado');
        }

        return view('admin.users.edit', compact('user','companies', 'sectors', 'permissions'));

    }

    public function update(UpdateUserRequest $request, string $id)
    {

        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado');
        }

        $data = $request->only('name', 'email', 'id_empresa', 'id_setor', 'id_permission');

        if (auth()->user()->id === $user->id) {
            unset($data['id_permission']); 
        }

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


        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado');
        }

        if (Auth::user()->id === $user->id) {
            return back()->with('message', 'Você não pode excluir seu próprio perfil');
        }


        $user->forceDelete();

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

