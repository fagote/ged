<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Company;
use App\Models\Sector;

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

    public function indexHaosTiInstrucao()
    {
        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Tecnologia da Informação')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'instrução');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro qualidade

    public function indexHaosTiProcedimento(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Tecnologia da Informação')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexHaosTiRegistro(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Tecnologia da Informação')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexHaosTiFormulario(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Tecnologia da Informação')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================


    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexHaosMarketingInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Marketing')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'instrução');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro procedimento

    public function indexHaosMarketingProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Marketing')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'procedimento');
        })
        -> paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexHaosMarketingRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Marketing')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'registro');
        })-> paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexHaosMarketingFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Marketing')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'formulário');
        })-> paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/instrucao

    public function indexHaosComercialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/procedimento

    public function indexHaosComercialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexHaosComercialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexHaosComercialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexHaosAlmoxarifadoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Almoxarifado')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/procedimento

    public function indexHaosAlmoxarifadoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Almoxarifado')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/registro

    public function indexHaosAlmoxarifadoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Almoxarifado')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/fomulario

    public function indexHaosAlmoxarifadoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Almoxarifado')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/fomulario

    public function indexHaosAssistenciaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Assistencia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/registro

    public function indexHaosAssistenciaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Assistencia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/procedimento

    public function indexHaosAssistenciaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Assistencia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexHaosAssistenciaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Assistencia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/formulario

    public function indexHaosComprasFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Compras')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/registro

    public function indexHaosComprasRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Compras')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/procedimento

    public function indexHaosComprasProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Compras')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/instrucao

    public function indexHaosComprasInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Compras')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/formulario

    public function indexHaosContabilidadeFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Contabilidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/registro

    public function indexHaosContabilidadeRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Contabilidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexHaosContabilidadeProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Contabilidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexHaosContabilidadeInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Contabilidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/formulario

    public function indexHaosContasPagarFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a pagar')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexHaosContasPagarRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a pagar')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/procedimento

    public function indexHaosContasPagarProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a pagar')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexHaosContasPagarInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a pagar')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/formulario

    public function indexHaosContasReceberFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a receber')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/registro

    public function indexHaosContasReceberRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a receber')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/procedimento

    public function indexHaosContasReceberProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a receber')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/instrucao

    public function indexHaosContasReceberInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a receber')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/formulario

    public function indexHaosCustoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Custo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/registro

    public function indexHaosCustoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Custo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/procedimento

    public function indexHaosCustoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Custo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/instrucao

    public function indexHaosCustoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Custo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/formulario

    public function indexHaosDesignFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Design')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/registro

    public function indexHaosDesignRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Design')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/procedimento

    public function indexHaosDesignProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Design')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/instrucao

    public function indexHaosDesignInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Design')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================
    
    
    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


    //=========================================
    // inusitta/diretoria administrativa/formulario

    public function indexHaosDiretoriaAdministrativaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria administrativa')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/registro

    public function indexHaosDiretoriaAdministrativaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Administrativa')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/procedimento

    public function indexHaosDiretoriaAdministrativaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Administrativa')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/instrucao

    public function indexHaosDiretoriaAdministrativaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Administrativa')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ formulario

    public function indexHaosDiretoriaComercialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ registro

    public function indexHaosDiretoriaComercialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ procedimento

    public function indexHaosDiretoriaComercialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ instrucao

    public function indexHaosDiretoriaComercialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ formulario

    public function indexHaosDiretoriaIndustrialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Industrial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ registro

    public function indexHaosDiretoriaIndustrialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Industrial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ procedimento

    public function indexHaosDiretoriaIndustrialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Industrial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ instrucao

    public function indexHaosDiretoriaIndustrialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Industrial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ formulario

    public function indexHaosEcommerceFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ecommerce')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ registro

    public function indexHaosEcommerceRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ecommerce')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ procedimento

    public function indexHaosEcommerceProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ecommerce')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ instrucao

    public function indexHaosEcommerceInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ecommerce')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ formulario

    public function indexHaosEngenhariaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Engenharia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ registro

    public function indexHaosEngenhariaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Engenharia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ procedimento

    public function indexHaosEngenhariaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Engenharia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ instrucao

    public function indexHaosEngenhariaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Engenharia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ formulario

    public function indexHaosExpedicaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Expedicao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ registro

    public function indexHaosExpedicaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Expedicao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ procedimento

    public function indexHaosExpedicaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Expedicao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ instrucao

    public function indexHaosExpedicaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Expedicao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ formulario

    public function indexHaosExportacaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Exportacao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ registro

    public function indexHaosExportacaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Exportacao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ procedimento

    public function indexHaosExportacaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Exportacao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ instrucao

    public function indexHaosExportacaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Exportacao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ formulario

    public function indexHaosFaturamentoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Faturamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ registro

    public function indexHaosFaturamentoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Faturamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ procedimento

    public function indexHaosFaturamentoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Faturamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ instrucao

    public function indexHaosFaturamentoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Faturamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ formulario

    public function indexHaosManutencaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Manutencao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ registro

    public function indexHaosManutencaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Manutencao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ procedimento

    public function indexHaosManutencaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Manutencao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ instrucao

    public function indexHaosManutencaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Manutencao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ formulario

    public function indexHaosPedFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'P&d')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ registro

    public function indexHaosPedRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'P&d')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ procedimento

    public function indexHaosPedProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'P&d')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ instrucao

    public function indexHaosPedInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'P&d')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ formulario

    public function indexHaosPmoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pmo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ registro

    public function indexHaosPmoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pmo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ procedimento

    public function indexHaosPmoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pmo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ instrucao

    public function indexHaosPmoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pmo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ formulario

    public function indexHaosPpcpFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ppcp')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ registro

    public function indexHaosPpcpRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ppcp')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ procedimento

    public function indexHaosPpcpProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ppcp')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ instrucao

    public function indexHaosPpcpInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ppcp')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ formulario

    public function indexHaosQualidadeFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Qualidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ registro

    public function indexHaosQualidadeRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Qualidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ procedimento

    public function indexHaosQualidadeProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Qualidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ instrucao

    public function indexHaosQualidadeInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Qualidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    // QUALIDADE
    //=========================================

    //=========================================
    // inusitta/recepcao/ formulario

    public function indexHaosRecepcaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Recepcao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/recepcao/ registro

    public function indexHaosRecepcaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Recepcao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ procedimento

    public function indexHaosRecepcaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Recepcao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ instrucao

    public function indexHaosRecepcaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Recepcao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ formulario

    public function indexHaosRestauranteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Restaurante')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ registro

    public function indexHaosRestauranteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Restaurante')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ procedimento

    public function indexHaosRestauranteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Restaurante')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ instrucao

    public function indexHaosRestauranteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Restaurante')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ formulario

    public function indexHaosRhFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Rh')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ registro

    public function indexHaosRhRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Rh')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ procedimento

    public function indexHaosRhProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Rh')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ instrucao

    public function indexHaosRhInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Rh')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ formulario

    public function indexHaosSacFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sac')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ registro

    public function indexHaosSacRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sac')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ procedimento

    public function indexHaosSacProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sac')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ instrucao

    public function indexHaosSacInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sac')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ formulario

    public function indexHaosSesmtFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sesmt')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ registro

    public function indexHaosSesmtRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sesmt')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ procedimento

    public function indexHaosSesmtProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sesmt')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ instrucao

    public function indexHaosSesmtInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sesmt')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ formulario

    public function indexHaosProjetosFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Projetos')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ registro

    public function indexHaosProjetosRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Projetos')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ procedimento

    public function indexHaosProjetosProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Projetos')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ instrucao

    public function indexHaosProjetosInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Projetos')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ formulario

    public function indexHaosTransporteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Transporte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ registro

    public function indexHaosTransporteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Transporte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexHaosTransporteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Transporte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexHaosTransporteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Haos')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Transporte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 32; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.haos.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
}
