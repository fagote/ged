<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class LavorattoController extends Controller
{
    
    
    //=========================================
    // Página index da pasta empresa Lavoratto

    public function indexLavoratto(){

        return view('admin.lavoratto.lavoratto');
    }

    //========================================= 

    //=========================================
    //Função Para Mostrar a pasta do setor TI

    public function indexLavorattoTi(){
        return view('admin.lavoratto.setores.tecnologia-informacao.tecnologia_informacao');
    }
    //OBS: a view tecnologia_informacao.blade.php funciona como um curinga para ser chamado nos outros setores.
    //=========================================

    //=========================================
    // Função para mostrar a pasta do setor marketing

    public function indexLavorattoMarketing(){
        return view('admin.lavoratto.setores.marketing.marketing');
    }

    //=========================================

    //=========================================
    // Função para mostrar a pasta do setor comercial

    public function indexLavorattoComercial(){
        return view('admin.lavoratto.setores.comercial.comercial');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/almoxarifado

    public function indexLavorattoAlmoxarifado(){
        return view('admin.lavoratto.setores.almoxarifado.almoxarifado');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/assistencia

    public function indexLavorattoAssistencia(){
        return view('admin.lavoratto.setores.assistencia.assistencia');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/compras

    public function indexLavorattoCompras(){
        return view('admin.lavoratto.setores.compras.compras');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/contabilidade

    public function indexLavorattoContabilidade(){
        return view('admin.lavoratto.setores.contabilidade.contabilidade');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/contas a pagar 

    public function indexLavorattoContasPagar(){
        return view('admin.lavoratto.setores.contaspagar.contaspagar');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/contas a receber 

    public function indexLavorattoContasReceber(){
        return view('admin.lavoratto.setores.contasreceber.contasreceber');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/custo

    public function indexLavorattoCusto(){
        return view('admin.lavoratto.setores.custo.custo');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/design

    public function indexLavorattoDesign(){
        return view('admin.lavoratto.setores.designn.design');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/diretoria administrativa

    public function indexLavorattoDiretoriaAdministrativa(){
        return view('admin.lavoratto.setores.diretoriaadministrativa.diretoriaadministrativa');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/diretoria comercial

    public function indexLavorattoDiretoriaComercial(){
        return view('admin.lavoratto.setores.diretoriacomercial.diretoriacomercial');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/diretoria industrial

    public function indexLavorattoDiretoriaIndustrial(){
        return view('admin.lavoratto.setores.diretoriaindustrial.diretoriaindustrial');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/e-commerce

    public function indexLavorattoEcommerce(){
        return view('admin.lavoratto.setores.ecommerce.ecommerce');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/engenharia

    public function indexLavorattoEngenharia(){
        return view('admin.lavoratto.setores.engenharia.engenharia');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/expedicao

    public function indexLavorattoExpedicao(){
        return view('admin.lavoratto.setores.expedicao.expedicao');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/exportacao

    public function indexLavorattoExportacao(){
        return view('admin.lavoratto.setores.exportacao.exportacao');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/faturamento

    public function indexLavorattoFaturamento(){
        return view('admin.lavoratto.setores.faturamento.faturamento');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/manutencao

    public function indexLavorattoManutencao(){
        return view('admin.lavoratto.setores.manutencao.manutencao');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/ped

    public function indexLavorattoPed(){
        return view('admin.lavoratto.setores.ped.ped');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/pmo

    public function indexLavorattoPmo(){
        return view('admin.lavoratto.setores.pmo.pmo');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/ppcp

    public function indexLavorattoPpcp(){
        return view('admin.lavoratto.setores.ppcp.ppcp');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/qualidade

    public function indexLavorattoQualidade(){
        return view('admin.lavoratto.setores.qualidade.qualidade');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/recepcao

    public function indexLavorattoRecepcao(){
        return view('admin.lavoratto.setores.recepcao.recepcao');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/restaurante

    public function indexLavorattoRestaurante(){
        return view('admin.lavoratto.setores.restaurante.restaurante');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/rh

    public function indexLavorattoRh(){
        return view('admin.lavoratto.setores.rh.rh');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/sac

    public function indexLavorattoSac(){
        return view('admin.lavoratto.setores.sac.sac');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/sesmt

    public function indexLavorattoSesmt(){
        return view('admin.lavoratto.setores.sesmt.sesmt');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/projetos

    public function indexLavorattoProjetos(){
        return view('admin.lavoratto.setores.projetos.projetos');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/exportacao

    public function indexLavorattoTransporte(){
        return view('admin.lavoratto.setores.transporte.transporte');
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexLavorattoTiInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrução');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro qualidade

    public function indexLavorattoTiProcedimento(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexLavorattoTiRegistro(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexLavorattoTiFormulario(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================


    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexLavorattoMarketingInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Marketing');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro procedimento

    public function indexLavorattoMarketingProcedimento(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','procedimento');
        }) -> paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexLavorattoMarketingRegistro(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','registro');
        }) -> paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexLavorattoMarketingFormulario(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','formulario');
        }) -> paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/comercial/instrucao

    public function indexLavorattoComercialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/comercial/procedimento

    public function indexLavorattoComercialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/comercial/registro

    public function indexLavorattoComercialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/comercial/registro

    public function indexLavorattoComercialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/almoxarifado/instrucao

    public function indexLavorattoAlmoxarifadoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/almoxarifado/procedimento

    public function indexLavorattoAlmoxarifadoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/almoxarifado/registro

    public function indexLavorattoAlmoxarifadoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/almoxarifado/fomulario

    public function indexLavorattoAlmoxarifadoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/assistencia/fomulario

    public function indexLavorattoAssistenciaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistenca');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/assistencia/registro

    public function indexLavorattoAssistenciaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/assistencia/procedimento

    public function indexLavorattoAssistenciaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/almoxarifado/instrucao

    public function indexLavorattoAssistenciaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/compras/formulario

    public function indexLavorattoComprasFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/compras/registro

    public function indexLavorattoComprasRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/compras/procedimento

    public function indexLavorattoComprasProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/compras/instrucao

    public function indexLavorattoComprasInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contabilidade/formulario

    public function indexLavorattoContabilidadeFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contabilidade/registro

    public function indexLavorattoContabilidadeRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contabilidade/procedimento

    public function indexLavorattoContabilidadeProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contabilidade/procedimento

    public function indexLavorattoContabilidadeInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contas a pagar/formulario

    public function indexLavorattoContasPagarFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulário');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contas a pagar/registro

    public function indexLavorattoContasPagarRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'resgistro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contas a pagar/procedimento

    public function indexLavorattoContasPagarProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contas a pagar/registro

    public function indexLavorattoContasPagarInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contas a receber/formulario

    public function indexLavorattoContasReceberFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contas a receber/registro

    public function indexLavorattoContasReceberRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contas a receber/procedimento

    public function indexLavorattoContasReceberProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/contas a receber/instrucao

    public function indexLavorattoContasReceberInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/custo/formulario

    public function indexLavorattoCustoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/custo/registro

    public function indexLavorattoCustoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/custo/procedimento

    public function indexLavorattoCustoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/custo/instrucao

    public function indexLavorattoCustoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/design/formulario

    public function indexLavorattoDesignFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/design/registro

    public function indexLavorattoDesignRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/design/procedimento

    public function indexLavorattoDesignProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/design/instrucao

    public function indexLavorattoDesignInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria administrativa/formulario

    public function indexLavorattoDiretoriaAdministrativaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria administrativa/registro

    public function indexLavorattoDiretoriaAdministrativaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria administrativa/procedimento

    public function indexLavorattoDiretoriaAdministrativaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria administrativa/instrucao

    public function indexLavorattoDiretoriaAdministrativaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria comercial/ formulario

    public function indexLavorattoDiretoriaComercialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria comercial/ registro

    public function indexLavorattoDiretoriaComercialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria comercial/ procedimento

    public function indexLavorattoDiretoriaComercialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria comercial/ instrucao

    public function indexLavorattoDiretoriaComercialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria industrial/ formulario

    public function indexLavorattoDiretoriaIndustrialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria industrial/ registro

    public function indexLavorattoDiretoriaIndustrialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria industrial/ procedimento

    public function indexLavorattoDiretoriaIndustrialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/diretoria industrial/ instrucao

    public function indexLavorattoDiretoriaIndustrialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ecommerce/ formulario

    public function indexLavorattoEcommerceFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ecommerce/ registro

    public function indexLavorattoEcommerceRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ecommerce/ procedimento

    public function indexLavorattoEcommerceProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ecommerce/ instrucao

    public function indexLavorattoEcommerceInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/engenharia/ formulario

    public function indexLavorattoEngenhariaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/engenharia/ registro

    public function indexLavorattoEngenhariaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/engenharia/ procedimento

    public function indexLavorattoEngenhariaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/engenharia/ instrucao

    public function indexLavorattoEngenhariaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/expedicao/ formulario

    public function indexLavorattoExpedicaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/expedicao/ registro

    public function indexLavorattoExpedicaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/expedicao/ procedimento

    public function indexLavorattoExpedicaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/expedicao/ instrucao

    public function indexLavorattoExpedicaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/exportacao/ formulario

    public function indexLavorattoExportacaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/exportacao/ registro

    public function indexLavorattoExportacaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/exportacao/ procedimento

    public function indexLavorattoExportacaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/exportacao/ instrucao

    public function indexLavorattoExportacaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/faturamento/ formulario

    public function indexLavorattoFaturamentoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/faturamento/ registro

    public function indexLavorattoFaturamentoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/faturamento/ procedimento

    public function indexLavorattoFaturamentoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/faturamento/ instrucao

    public function indexLavorattoFaturamentoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/manutencao/ formulario

    public function indexLavorattoManutencaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/manutencao/ registro

    public function indexLavorattoManutencaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/manutencao/ procedimento

    public function indexLavorattoManutencaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/manutencao/ instrucao

    public function indexLavorattoManutencaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ped/ formulario

    public function indexLavorattoPedFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ped/ registro

    public function indexLavorattoPedRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ped/ procedimento

    public function indexLavorattoPedProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ped/ instrucao

    public function indexLavorattoPedInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/pmo/ formulario

    public function indexLavorattoPmoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/pmo/ registro

    public function indexLavorattoPmoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/pmo/ procedimento

    public function indexLavorattoPmoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/pmo/ instrucao

    public function indexLavorattoPmoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ppcp/ formulario

    public function indexLavorattoPpcpFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ppcp/ registro

    public function indexLavorattoPpcpRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ppcp/ procedimento

    public function indexLavorattoPpcpProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/ppcp/ instrucao

    public function indexLavorattoPpcpInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/qualidade/ formulario

    public function indexLavorattoQualidadeFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/qualidade/ registro

    public function indexLavorattoQualidadeRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/qualidade/ procedimento

    public function indexLavorattoQualidadeProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/qualidade/ instrucao

    public function indexLavorattoQualidadeInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    // QUALIDADE
    //=========================================

    //=========================================
    // lavoratto/recepcao/ formulario

    public function indexLavorattoRecepcaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // lavoratto/recepcao/ registro

    public function indexLavorattoRecepcaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/recepcao/ procedimento

    public function indexLavorattoRecepcaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/recepcao/ instrucao

    public function indexLavorattoRecepcaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/restaurante/ formulario

    public function indexLavorattoRestauranteFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/restaurante/ registro

    public function indexLavorattoRestauranteRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/restaurante/ procedimento

    public function indexLavorattoRestauranteProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/restaurante/ instrucao

    public function indexLavorattoRestauranteInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/rh/ formulario

    public function indexLavorattoRhFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/rh/ registro

    public function indexLavorattoRhRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/rh/ procedimento

    public function indexLavorattoRhProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/rh/ instrucao

    public function indexLavorattoRhInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/sac/ formulario

    public function indexLavorattoSacFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/sac/ registro

    public function indexLavorattoSacRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/sac/ procedimento

    public function indexLavorattoSacProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/sac/ instrucao

    public function indexLavorattoSacInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/sesmt/ formulario

    public function indexLavorattoSesmtFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/sesmt/ registro

    public function indexLavorattoSesmtRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/sesmt/ procedimento

    public function indexLavorattoSesmtProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/sesmt/ instrucao

    public function indexLavorattoSesmtInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/projetos/ formulario

    public function indexLavorattoProjetosFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/projetos/ registro

    public function indexLavorattoProjetosRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/projetos/ procedimento

    public function indexLavorattoProjetosProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/projetos/ instrucao

    public function indexLavorattoProjetosInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/transporte/ formulario

    public function indexLavorattoTransporteFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/transporte/ registro

    public function indexLavorattoTransporteRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/transporte/ procedimento

    public function indexLavorattoTransporteProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // lavoratto/transporte/ instrucao

    public function indexLavorattoTransporteInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Lavoratto');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================
}





