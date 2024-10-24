<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class HaosController extends Controller
{
    //=========================================
    // Página index da pasta empresa Haos

    public function indexHaos(){

        return view('admin.haos.haos');
    }

    //========================================= 

    //=========================================
    //Função Para Mostrar a pasta do setor TI

    public function indexHaosTi(){
        return view('admin.haos.setores.tecnologia-informacao.tecnologia_informacao');
    }
    //OBS: a view tecnologia_informacao.blade.php funciona como um curinga para ser chamado nos outros setores.
    //=========================================

    //=========================================
    // Função para mostrar a pasta do setor marketing

    public function indexHaosMarketing(){
        return view('admin.haos.setores.marketing.marketing');
    }

    //=========================================

    //=========================================
    // Função para mostrar a pasta do setor comercial

    public function indexHaosComercial(){
        return view('admin.haos.setores.comercial.comercial');
    }

    //=========================================

    //=========================================
    // Pasta haos/almoxarifado

    public function indexHaosAlmoxarifado(){
        return view('admin.haos.setores.almoxarifado.almoxarifado');
    }

    //=========================================

    //=========================================
    // Pasta haos/assistencia

    public function indexHaosAssistencia(){
        return view('admin.haos.setores.assistencia.assistencia');
    }

    //=========================================

    //=========================================
    // Pasta haos/compras

    public function indexHaosCompras(){
        return view('admin.haos.setores.compras.compras');
    }

    //=========================================

    //=========================================
    // Pasta haos/contabilidade

    public function indexHaosContabilidade(){
        return view('admin.haos.setores.contabilidade.contabilidade');
    }

    //=========================================

    //=========================================
    // Pasta haos/contas a pagar 

    public function indexHaosContasPagar(){
        return view('admin.haos.setores.contaspagar.contaspagar');
    }

    //=========================================

    //=========================================
    // Pasta haos/contas a receber 

    public function indexHaosContasReceber(){
        return view('admin.haos.setores.contasreceber.contasreceber');
    }

    //=========================================

    //=========================================
    // Pasta haos/custo

    public function indexHaosCusto(){
        return view('admin.haos.setores.custo.custo');
    }

    //=========================================

    //=========================================
    // Pasta haos/design

    public function indexHaosDesign(){
        return view('admin.haos.setores.designn.design');
    }

    //=========================================

    //=========================================
    // Pasta haos/diretoria administrativa

    public function indexHaosDiretoriaAdministrativa(){
        return view('admin.haos.setores.diretoriaadministrativa.diretoriaadministrativa');
    }

    //=========================================

    //=========================================
    // Pasta haos/diretoria comercial

    public function indexHaosDiretoriaComercial(){
        return view('admin.haos.setores.diretoriacomercial.diretoriacomercial');
    }

    //=========================================

    //=========================================
    // Pasta haos/diretoria industrial

    public function indexHaosDiretoriaIndustrial(){
        return view('admin.haos.setores.diretoriaindustrial.diretoriaindustrial');
    }

    //=========================================

    //=========================================
    // Pasta haos/e-commerce

    public function indexHaosEcommerce(){
        return view('admin.haos.setores.ecommerce.ecommerce');
    }

    //=========================================

    //=========================================
    // Pasta haos/engenharia

    public function indexHaosEngenharia(){
        return view('admin.haos.setores.engenharia.engenharia');
    }

    //=========================================

    //=========================================
    // Pasta haos/expedicao

    public function indexHaosExpedicao(){
        return view('admin.haos.setores.expedicao.expedicao');
    }

    //=========================================

    //=========================================
    // Pasta haos/exportacao

    public function indexHaosExportacao(){
        return view('admin.haos.setores.exportacao.exportacao');
    }

    //=========================================

    //=========================================
    // Pasta haos/faturamento

    public function indexHaosFaturamento(){
        return view('admin.haos.setores.faturamento.faturamento');
    }

    //=========================================

    //=========================================
    // Pasta haos/manutencao

    public function indexHaosManutencao(){
        return view('admin.haos.setores.manutencao.manutencao');
    }

    //=========================================

    //=========================================
    // Pasta haos/ped

    public function indexHaosPed(){
        return view('admin.haos.setores.ped.ped');
    }

    //=========================================

    //=========================================
    // Pasta haos/pmo

    public function indexHaosPmo(){
        return view('admin.haos.setores.pmo.pmo');
    }

    //=========================================

    //=========================================
    // Pasta haos/ppcp

    public function indexHaosPpcp(){
        return view('admin.haos.setores.ppcp.ppcp');
    }

    //=========================================

    //=========================================
    // Pasta haos/qualidade

    public function indexHaosQualidade(){
        return view('admin.haos.setores.qualidade.qualidade');
    }

    //=========================================

    //=========================================
    // Pasta haos/recepcao

    public function indexHaosRecepcao(){
        return view('admin.haos.setores.recepcao.recepcao');
    }

    //=========================================

    //=========================================
    // Pasta haos/restaurante

    public function indexHaosRestaurante(){
        return view('admin.haos.setores.restaurante.restaurante');
    }

    //=========================================

    //=========================================
    // Pasta haos/rh

    public function indexHaosRh(){
        return view('admin.haos.setores.rh.rh');
    }

    //=========================================

    //=========================================
    // Pasta haos/sac

    public function indexHaosSac(){
        return view('admin.haos.setores.sac.sac');
    }

    //=========================================

    //=========================================
    // Pasta haos/sesmt

    public function indexHaosSesmt(){
        return view('admin.haos.setores.sesmt.sesmt');
    }

    //=========================================

    //=========================================
    // Pasta haos/projetos

    public function indexHaosProjetos(){
        return view('admin.haos.setores.projetos.projetos');
    }

    //=========================================

    //=========================================
    // Pasta haos/exportacao

    public function indexHaosTransporte(){
        return view('admin.haos.setores.transporte.transporte');
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexHaosTiInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrução');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro qualidade

    public function indexHaosTiProcedimento(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexHaosTiRegistro(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexHaosTiFormulario(){


        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Tecnologia da Informação');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================


    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexHaosMarketingInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Marketing');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro procedimento

    public function indexHaosMarketingProcedimento(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','procedimento');
        }) -> paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexHaosMarketingRegistro(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','registro');
        }) -> paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexHaosMarketingFormulario(){

        $files = File::whereHas('company', function($query){
            $query->where('name_empresa','Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor','Marketing');
        })
        ->whereHas('macro', function($query){
            $query->where('name_macro','formulario');
        }) -> paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/comercial/instrucao

    public function indexHaosComercialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/comercial/procedimento

    public function indexHaosComercialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/comercial/registro

    public function indexHaosComercialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/comercial/registro

    public function indexHaosComercialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'Comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/almoxarifado/instrucao

    public function indexHaosAlmoxarifadoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/almoxarifado/procedimento

    public function indexHaosAlmoxarifadoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/almoxarifado/registro

    public function indexHaosAlmoxarifadoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/almoxarifado/fomulario

    public function indexHaosAlmoxarifadoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'almoxarifado');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/assistencia/fomulario

    public function indexHaosAssistenciaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistenca');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/assistencia/registro

    public function indexHaosAssistenciaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/assistencia/procedimento

    public function indexHaosAssistenciaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/almoxarifado/instrucao

    public function indexHaosAssistenciaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'assistencia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/compras/formulario

    public function indexHaosComprasFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/compras/registro

    public function indexHaosComprasRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/compras/procedimento

    public function indexHaosComprasProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/compras/instrucao

    public function indexHaosComprasInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'compras');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contabilidade/formulario

    public function indexHaosContabilidadeFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contabilidade/registro

    public function indexHaosContabilidadeRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contabilidade/procedimento

    public function indexHaosContabilidadeProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contabilidade/procedimento

    public function indexHaosContabilidadeInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contabilidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contas a pagar/formulario

    public function indexHaosContasPagarFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulário');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contas a pagar/registro

    public function indexHaosContasPagarRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'resgistro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contas a pagar/procedimento

    public function indexHaosContasPagarProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contas a pagar/registro

    public function indexHaosContasPagarInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a pagar');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contas a receber/formulario

    public function indexHaosContasReceberFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contas a receber/registro

    public function indexHaosContasReceberRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contas a receber/procedimento

    public function indexHaosContasReceberProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/contas a receber/instrucao

    public function indexHaosContasReceberInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'contas a receber');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/custo/formulario

    public function indexHaosCustoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/custo/registro

    public function indexHaosCustoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/custo/procedimento

    public function indexHaosCustoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/custo/instrucao

    public function indexHaosCustoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'custo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/design/formulario

    public function indexHaosDesignFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/design/registro

    public function indexHaosDesignRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/design/procedimento

    public function indexHaosDesignProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/design/instrucao

    public function indexHaosDesignInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'design');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria administrativa/formulario

    public function indexHaosDiretoriaAdministrativaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria administrativa/registro

    public function indexHaosDiretoriaAdministrativaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria administrativa/procedimento

    public function indexHaosDiretoriaAdministrativaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria administrativa/instrucao

    public function indexHaosDiretoriaAdministrativaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria administrativa');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria comercial/ formulario

    public function indexHaosDiretoriaComercialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria comercial/ registro

    public function indexHaosDiretoriaComercialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria comercial/ procedimento

    public function indexHaosDiretoriaComercialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria comercial/ instrucao

    public function indexHaosDiretoriaComercialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria comercial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria industrial/ formulario

    public function indexHaosDiretoriaIndustrialFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria industrial/ registro

    public function indexHaosDiretoriaIndustrialRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria industrial/ procedimento

    public function indexHaosDiretoriaIndustrialProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/diretoria industrial/ instrucao

    public function indexHaosDiretoriaIndustrialInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'diretoria industrial');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ecommerce/ formulario

    public function indexHaosEcommerceFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ecommerce/ registro

    public function indexHaosEcommerceRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ecommerce/ procedimento

    public function indexHaosEcommerceProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ecommerce/ instrucao

    public function indexHaosEcommerceInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ecommerce');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/engenharia/ formulario

    public function indexHaosEngenhariaFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/engenharia/ registro

    public function indexHaosEngenhariaRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/engenharia/ procedimento

    public function indexHaosEngenhariaProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/engenharia/ instrucao

    public function indexHaosEngenhariaInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'engenharia');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/expedicao/ formulario

    public function indexHaosExpedicaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/expedicao/ registro

    public function indexHaosExpedicaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/expedicao/ procedimento

    public function indexHaosExpedicaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/expedicao/ instrucao

    public function indexHaosExpedicaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'expedicao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/exportacao/ formulario

    public function indexHaosExportacaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/exportacao/ registro

    public function indexHaosExportacaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/exportacao/ procedimento

    public function indexHaosExportacaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/exportacao/ instrucao

    public function indexHaosExportacaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'exportacao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/faturamento/ formulario

    public function indexHaosFaturamentoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/faturamento/ registro

    public function indexHaosFaturamentoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/faturamento/ procedimento

    public function indexHaosFaturamentoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/faturamento/ instrucao

    public function indexHaosFaturamentoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'faturamento');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/manutencao/ formulario

    public function indexHaosManutencaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/manutencao/ registro

    public function indexHaosManutencaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/manutencao/ procedimento

    public function indexHaosManutencaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/manutencao/ instrucao

    public function indexHaosManutencaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'manutencao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ped/ formulario

    public function indexHaosPedFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ped/ registro

    public function indexHaosPedRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ped/ procedimento

    public function indexHaosPedProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ped/ instrucao

    public function indexHaosPedInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'p&d');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/pmo/ formulario

    public function indexHaosPmoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/pmo/ registro

    public function indexHaosPmoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/pmo/ procedimento

    public function indexHaosPmoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/pmo/ instrucao

    public function indexHaosPmoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'pmo');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ppcp/ formulario

    public function indexHaosPpcpFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ppcp/ registro

    public function indexHaosPpcpRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ppcp/ procedimento

    public function indexHaosPpcpProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/ppcp/ instrucao

    public function indexHaosPpcpInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'ppcp');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/qualidade/ formulario

    public function indexHaosQualidadeFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/qualidade/ registro

    public function indexHaosQualidadeRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/qualidade/ procedimento

    public function indexHaosQualidadeProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/qualidade/ instrucao

    public function indexHaosQualidadeInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'qualidade');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    // QUALIDADE
    //=========================================

    //=========================================
    // haos/recepcao/ formulario

    public function indexHaosRecepcaoFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // haos/recepcao/ registro

    public function indexHaosRecepcaoRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/recepcao/ procedimento

    public function indexHaosRecepcaoProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/recepcao/ instrucao

    public function indexHaosRecepcaoInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'recepcao');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/restaurante/ formulario

    public function indexHaosRestauranteFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/restaurante/ registro

    public function indexHaosRestauranteRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/restaurante/ procedimento

    public function indexHaosRestauranteProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/restaurante/ instrucao

    public function indexHaosRestauranteInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'restaurante');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/rh/ formulario

    public function indexHaosRhFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/rh/ registro

    public function indexHaosRhRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/rh/ procedimento

    public function indexHaosRhProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/rh/ instrucao

    public function indexHaosRhInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'rh');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/sac/ formulario

    public function indexHaosSacFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/sac/ registro

    public function indexHaosSacRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/sac/ procedimento

    public function indexHaosSacProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/sac/ instrucao

    public function indexHaosSacInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sac');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/sesmt/ formulario

    public function indexHaosSesmtFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/sesmt/ registro

    public function indexHaosSesmtRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/sesmt/ procedimento

    public function indexHaosSesmtProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/sesmt/ instrucao

    public function indexHaosSesmtInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'sesmt');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/projetos/ formulario

    public function indexHaosProjetosFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/projetos/ registro

    public function indexHaosProjetosRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/projetos/ procedimento

    public function indexHaosProjetosProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/projetos/ instrucao

    public function indexHaosProjetosInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'projetos');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/transporte/ formulario

    public function indexHaosTransporteFormulario(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/transporte/ registro

    public function indexHaosTransporteRegistro(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/transporte/ procedimento

    public function indexHaosTransporteProcedimento(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // haos/transporte/ instrucao

    public function indexHaosTransporteInstrucao(){

        $files = File::whereHas('company', function($query) {
            $query->where('name_empresa', 'Haos');
        })
        ->whereHas('sector', function($query) {
            $query->where('name_setor', 'transporte');
        })
        ->whereHas('macro', function($query) {
            $query->where('name_macro', 'instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================
}
