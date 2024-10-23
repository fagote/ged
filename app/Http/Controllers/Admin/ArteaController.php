<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class ArteaController extends Controller
{
    
    //=========================================
    // Página index da pasta empresa Artea

    public function indexArtea(){

        return view('admin.artea.artea');
    }

    //========================================= 

    //=========================================
    //Função Para Mostrar a pasta do setor TI

    public function indexArteaTi(){
        return view('admin.artea.setores.tecnologia-informacao.tecnologia_informacao');
    }
    //OBS: a view tecnologia_informacao.blade.php funciona como um curinga para ser chamado nos outros setores.
    //=========================================

    //=========================================
    // Função para mostrar a pasta do setor marketing

    public function indexArteaMarketing(){
        return view('admin.artea.setores.marketing.marketing');
    }

    //=========================================

    //=========================================
    // Função para mostrar a pasta do setor comercial

    public function indexArteaComercial(){
        return view('admin.artea.setores.comercial.comercial');
    }

    //=========================================

    //=========================================
    // Pasta artea/almoxarifado

    public function indexArteaAlmoxarifado(){
        return view('admin.artea.setores.almoxarifado.almoxarifado');
    }

    //=========================================

    //=========================================
    // Pasta artea/assistencia

    public function indexArteaAssistencia(){
        return view('admin.artea.setores.assistencia.assistencia');
    }

    //=========================================

    //=========================================
    // Pasta artea/compras

    public function indexArteaCompras(){
        return view('admin.artea.setores.compras.compras');
    }

    //=========================================

    //=========================================
    // Pasta artea/contabilidade

    public function indexArteaContabilidade(){
        return view('admin.artea.setores.contabilidade.contabilidade');
    }

    //=========================================

    //=========================================
    // Pasta artea/contas a pagar 

    public function indexArteaContasPagar(){
        return view('admin.artea.setores.contaspagar.contaspagar');
    }

    //=========================================

    //=========================================
    // Pasta artea/contas a receber 

    public function indexArteaContasReceber(){
        return view('admin.artea.setores.contasreceber.contasreceber');
    }

    //=========================================

    //=========================================
    // Pasta artea/custo

    public function indexArteaCusto(){
        return view('admin.artea.setores.custo.custo');
    }

    //=========================================

    //=========================================
    // Pasta artea/design

    public function indexArteaDesign(){
        return view('admin.artea.setores.designn.design');
    }

    //=========================================

    //=========================================
    // Pasta artea/diretoria administrativa

    public function indexArteaDiretoriaAdministrativa(){
        return view('admin.artea.setores.diretoriaadministrativa.diretoriaadministrativa');
    }

    //=========================================

    //=========================================
    // Pasta artea/diretoria comercial

    public function indexArteaDiretoriaComercial(){
        return view('admin.artea.setores.diretoriacomercial.diretoriacomercial');
    }

    //=========================================

    //=========================================
    // Pasta artea/diretoria industrial

    public function indexArteaDiretoriaIndustrial(){
        return view('admin.artea.setores.diretoriaindustrial.diretoriaindustrial');
    }

    //=========================================

    //=========================================
    // Pasta artea/e-commerce

    public function indexArteaEcommerce(){
        return view('admin.artea.setores.ecommerce.ecommerce');
    }

    //=========================================

    //=========================================
    // Pasta artea/engenharia

    public function indexArteaEngenharia(){
        return view('admin.artea.setores.engenharia.engenharia');
    }

    //=========================================

    //=========================================
    // Pasta artea/expedicao

    public function indexArteaExpedicao(){
        return view('admin.artea.setores.expedicao.expedicao');
    }

    //=========================================

    //=========================================
    // Pasta artea/exportacao

    public function indexArteaExportacao(){
        return view('admin.artea.setores.exportacao.exportacao');
    }

    //=========================================

    //=========================================
    // Pasta artea/faturamento

    public function indexArteaFaturamento(){
        return view('admin.artea.setores.faturamento.faturamento');
    }

    //=========================================

    //=========================================
    // Pasta artea/manutencao

    public function indexArteaManutencao(){
        return view('admin.artea.setores.manutencao.manutencao');
    }

    //=========================================

    //=========================================
    // Pasta artea/ped

    public function indexArteaPed(){
        return view('admin.artea.setores.ped.ped');
    }

    //=========================================

    //=========================================
    // Pasta artea/pmo

    public function indexArteaPmo(){
        return view('admin.artea.setores.pmo.pmo');
    }

    //=========================================

    //=========================================
    // Pasta artea/ppcp

    public function indexArteaPpcp(){
        return view('admin.artea.setores.ppcp.ppcp');
    }

    //=========================================

    //=========================================
    // Pasta artea/qualidade

    public function indexArteaQualidade(){
        return view('admin.artea.setores.qualidade.qualidade');
    }

    //=========================================

    //=========================================
    // Pasta artea/recepcao

    public function indexArteaRecepcao(){
        return view('admin.artea.setores.recepcao.recepcao');
    }

    //=========================================

    //=========================================
    // Pasta artea/restaurante

    public function indexArteaRestaurante(){
        return view('admin.artea.setores.restaurante.restaurante');
    }

    //=========================================

    //=========================================
    // Pasta artea/rh

    public function indexArteaRh(){
        return view('admin.artea.setores.rh.rh');
    }

    //=========================================

    //=========================================
    // Pasta artea/sac

    public function indexArteaSac(){
        return view('admin.artea.setores.sac.sac');
    }

    //=========================================

    //=========================================
    // Pasta artea/sesmt

    public function indexArteaSesmt(){
        return view('admin.artea.setores.sesmt.sesmt');
    }

    //=========================================

    //=========================================
    // Pasta artea/projetos

    public function indexArteaProjetos(){
        return view('admin.artea.setores.projetos.projetos');
    }

    //=========================================

    //=========================================
    // Pasta artea/exportacao

    public function indexArteaTransporte(){
        return view('admin.artea.setores.transporte.transporte');
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexArteaTiInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrução');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro qualidade

    public function indexArteaTiProcedimento(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexArteaTiRegistro(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexArteaTiFormulario(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================


    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexArteaMarketingInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Marketing');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro procedimento

    public function indexArteaMarketingProcedimento(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','procedimento');
        }) -> paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexArteaMarketingRegistro(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','registro');
        }) -> paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexArteaMarketingFormulario(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','formulario');
        }) -> paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/comercial/instrucao

    public function indexArteaComercialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/comercial/procedimento

    public function indexArteaComercialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/comercial/registro

    public function indexArteaComercialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/comercial/registro

    public function indexArteaComercialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/almoxarifado/instrucao

    public function indexArteaAlmoxarifadoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/almoxarifado/procedimento

    public function indexArteaAlmoxarifadoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/almoxarifado/registro

    public function indexArteaAlmoxarifadoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/almoxarifado/fomulario

    public function indexArteaAlmoxarifadoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/assistencia/fomulario

    public function indexArteaAssistenciaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistenca');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/assistencia/registro

    public function indexArteaAssistenciaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/assistencia/procedimento

    public function indexArteaAssistenciaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/almoxarifado/instrucao

    public function indexArteaAssistenciaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/compras/formulario

    public function indexArteaComprasFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/compras/registro

    public function indexArteaComprasRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/compras/procedimento

    public function indexArteaComprasProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/compras/instrucao

    public function indexArteaComprasInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contabilidade/formulario

    public function indexArteaContabilidadeFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contabilidade/registro

    public function indexArteaContabilidadeRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contabilidade/procedimento

    public function indexArteaContabilidadeProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contabilidade/procedimento

    public function indexArteaContabilidadeInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contas a pagar/formulario

    public function indexArteaContasPagarFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulário');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contas a pagar/registro

    public function indexArteaContasPagarRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'resgistro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contas a pagar/procedimento

    public function indexArteaContasPagarProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contas a pagar/registro

    public function indexArteaContasPagarInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contas a receber/formulario

    public function indexArteaContasReceberFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contas a receber/registro

    public function indexArteaContasReceberRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contas a receber/procedimento

    public function indexArteaContasReceberProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/contas a receber/instrucao

    public function indexArteaContasReceberInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/custo/formulario

    public function indexArteaCustoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/custo/registro

    public function indexArteaCustoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/custo/procedimento

    public function indexArteaCustoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/custo/instrucao

    public function indexArteaCustoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/design/formulario

    public function indexArteaDesignFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/design/registro

    public function indexArteaDesignRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/design/procedimento

    public function indexArteaDesignProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/design/instrucao

    public function indexArteaDesignInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria administrativa/formulario

    public function indexArteaDiretoriaAdministrativaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria administrativa/registro

    public function indexArteaDiretoriaAdministrativaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria administrativa/procedimento

    public function indexArteaDiretoriaAdministrativaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria administrativa/instrucao

    public function indexArteaDiretoriaAdministrativaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria comercial/ formulario

    public function indexArteaDiretoriaComercialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria comercial/ registro

    public function indexArteaDiretoriaComercialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria comercial/ procedimento

    public function indexArteaDiretoriaComercialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria comercial/ instrucao

    public function indexArteaDiretoriaComercialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria industrial/ formulario

    public function indexArteaDiretoriaIndustrialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria industrial/ registro

    public function indexArteaDiretoriaIndustrialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria industrial/ procedimento

    public function indexArteaDiretoriaIndustrialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/diretoria industrial/ instrucao

    public function indexArteaDiretoriaIndustrialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ecommerce/ formulario

    public function indexArteaEcommerceFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ecommerce/ registro

    public function indexArteaEcommerceRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ecommerce/ procedimento

    public function indexArteaEcommerceProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ecommerce/ instrucao

    public function indexArteaEcommerceInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/engenharia/ formulario

    public function indexArteaEngenhariaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/engenharia/ registro

    public function indexArteaEngenhariaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/engenharia/ procedimento

    public function indexArteaEngenhariaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/engenharia/ instrucao

    public function indexArteaEngenhariaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/expedicao/ formulario

    public function indexArteaExpedicaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/expedicao/ registro

    public function indexArteaExpedicaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/expedicao/ procedimento

    public function indexArteaExpedicaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/expedicao/ instrucao

    public function indexArteaExpedicaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/exportacao/ formulario

    public function indexArteaExportacaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/exportacao/ registro

    public function indexArteaExportacaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/exportacao/ procedimento

    public function indexArteaExportacaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/exportacao/ instrucao

    public function indexArteaExportacaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/faturamento/ formulario

    public function indexArteaFaturamentoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/faturamento/ registro

    public function indexArteaFaturamentoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/faturamento/ procedimento

    public function indexArteaFaturamentoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/faturamento/ instrucao

    public function indexArteaFaturamentoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/manutencao/ formulario

    public function indexArteaManutencaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/manutencao/ registro

    public function indexArteaManutencaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/manutencao/ procedimento

    public function indexArteaManutencaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/manutencao/ instrucao

    public function indexArteaManutencaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ped/ formulario

    public function indexArteaPedFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ped/ registro

    public function indexArteaPedRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ped/ procedimento

    public function indexArteaPedProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ped/ instrucao

    public function indexArteaPedInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/pmo/ formulario

    public function indexArteaPmoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/pmo/ registro

    public function indexArteaPmoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/pmo/ procedimento

    public function indexArteaPmoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/pmo/ instrucao

    public function indexArteaPmoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ppcp/ formulario

    public function indexArteaPpcpFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ppcp/ registro

    public function indexArteaPpcpRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ppcp/ procedimento

    public function indexArteaPpcpProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/ppcp/ instrucao

    public function indexArteaPpcpInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/qualidade/ formulario

    public function indexArteaQualidadeFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/qualidade/ registro

    public function indexArteaQualidadeRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/qualidade/ procedimento

    public function indexArteaQualidadeProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/qualidade/ instrucao

    public function indexArteaQualidadeInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    // QUALIDADE
    //=========================================

    //=========================================
    // artea/recepcao/ formulario

    public function indexArteaRecepcaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // artea/recepcao/ registro

    public function indexArteaRecepcaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/recepcao/ procedimento

    public function indexArteaRecepcaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/recepcao/ instrucao

    public function indexArteaRecepcaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/restaurante/ formulario

    public function indexArteaRestauranteFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/restaurante/ registro

    public function indexArteaRestauranteRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/restaurante/ procedimento

    public function indexArteaRestauranteProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/restaurante/ instrucao

    public function indexArteaRestauranteInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/rh/ formulario

    public function indexArteaRhFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/rh/ registro

    public function indexArteaRhRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/rh/ procedimento

    public function indexArteaRhProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/rh/ instrucao

    public function indexArteaRhInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/sac/ formulario

    public function indexArteaSacFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/sac/ registro

    public function indexArteaSacRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/sac/ procedimento

    public function indexArteaSacProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/sac/ instrucao

    public function indexArteaSacInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/sesmt/ formulario

    public function indexArteaSesmtFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/sesmt/ registro

    public function indexArteaSesmtRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/sesmt/ procedimento

    public function indexArteaSesmtProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/sesmt/ instrucao

    public function indexArteaSesmtInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/projetos/ formulario

    public function indexArteaProjetosFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/projetos/ registro

    public function indexArteaProjetosRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/projetos/ procedimento

    public function indexArteaProjetosProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/projetos/ instrucao

    public function indexArteaProjetosInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/transporte/ formulario

    public function indexArteaTransporteFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/transporte/ registro

    public function indexArteaTransporteRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/transporte/ procedimento

    public function indexArteaTransporteProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // artea/transporte/ instrucao

    public function indexArteaTransporteInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Artea');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================
}



