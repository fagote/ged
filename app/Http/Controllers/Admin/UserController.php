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

