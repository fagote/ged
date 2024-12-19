<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File; 
use App\Models\Company;
use App\Models\Sector;

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
    // Pasta artea/atelie

    public function indexArteaAtelie(){
        return view('admin.artea.setores.atelie.atelie');
    }

    //=========================================

    //=========================================
    // Pasta artea/corte

    public function indexArteaCorte(){
        return view('admin.artea.setores.corte.corte');
    }

    //=========================================

    //=========================================
    // Pasta artea/coladeira

    public function indexArteaColadeira(){
        return view('admin.artea.setores.coladeira.coladeira');
    }

    //=========================================

    //=========================================
    // Pasta artea/furadeira

    public function indexArteaFuradeira(){
        return view('admin.artea.setores.furadeira.furadeira');
    }

    //=========================================

    //=========================================
    // Pasta artea/acabamento

    public function indexArteaAcabamento(){
        return view('admin.artea.setores.acabamento.acabamento');
    }

    //=========================================

    //=========================================
    // Pasta artea/embalagem
    public function indexArteaEmbalagem(){
        return view('admin.artea.setores.embalagem.embalagem');
    }

    //=========================================

    //=========================================
    // Pasta artea/pintura

    public function indexArteaPintura(){
        return view('admin.artea.setores.pintura.pintura');
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexArteaTiInstrucao()
    {
        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Tecnologia da Informação')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'instrução');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro qualidade

    public function indexArteaTiProcedimento(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Tecnologia da Informação')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexArteaTiRegistro(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Tecnologia da Informação')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexArteaTiFormulario(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Tecnologia da Informação')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================


    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexArteaMarketingInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Marketing')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'instrução');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro procedimento

    public function indexArteaMarketingProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Marketing')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'procedimento');
        })
        -> paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexArteaMarketingRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Marketing')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'registro');
        })-> paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexArteaMarketingFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Marketing')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'formulário');
        })-> paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/instrucao

    public function indexArteaComercialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/procedimento

    public function indexArteaComercialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexArteaComercialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexArteaComercialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexArteaAlmoxarifadoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Almoxarifado')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/procedimento

    public function indexArteaAlmoxarifadoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Almoxarifado')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/registro

    public function indexArteaAlmoxarifadoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Almoxarifado')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/fomulario

    public function indexArteaAlmoxarifadoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Almoxarifado')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/fomulario

    public function indexArteaAssistenciaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Assistencia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/registro

    public function indexArteaAssistenciaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Assistencia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/procedimento

    public function indexArteaAssistenciaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Assistencia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexArteaAssistenciaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Assistencia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/formulario

    public function indexArteaComprasFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Compras')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/registro

    public function indexArteaComprasRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Compras')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/procedimento

    public function indexArteaComprasProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Compras')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/instrucao

    public function indexArteaComprasInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Compras')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/formulario

    public function indexArteaContabilidadeFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Contabilidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/registro

    public function indexArteaContabilidadeRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Contabilidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexArteaContabilidadeProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Contabilidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexArteaContabilidadeInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Contabilidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/formulario

    public function indexArteaContasPagarFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a pagar')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexArteaContasPagarRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a pagar')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/procedimento

    public function indexArteaContasPagarProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a pagar')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexArteaContasPagarInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a pagar')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/formulario

    public function indexArteaContasReceberFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a receber')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/registro

    public function indexArteaContasReceberRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a receber')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/procedimento

    public function indexArteaContasReceberProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a receber')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/instrucao

    public function indexArteaContasReceberInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'contas a receber')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/formulario

    public function indexArteaCustoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Custo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/registro

    public function indexArteaCustoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Custo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/procedimento

    public function indexArteaCustoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Custo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/instrucao

    public function indexArteaCustoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Custo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/formulario

    public function indexArteaDesignFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Design')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/registro

    public function indexArteaDesignRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Design')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/procedimento

    public function indexArteaDesignProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Design')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/instrucao

    public function indexArteaDesignInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Design')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================
    
    
    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


    //=========================================
    // inusitta/diretoria administrativa/formulario

    public function indexArteaDiretoriaAdministrativaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria administrativa')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/registro

    public function indexArteaDiretoriaAdministrativaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Administrativa')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/procedimento

    public function indexArteaDiretoriaAdministrativaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Administrativa')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/instrucao

    public function indexArteaDiretoriaAdministrativaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Administrativa')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ formulario

    public function indexArteaDiretoriaComercialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ registro

    public function indexArteaDiretoriaComercialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ procedimento

    public function indexArteaDiretoriaComercialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ instrucao

    public function indexArteaDiretoriaComercialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Comercial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ formulario

    public function indexArteaDiretoriaIndustrialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Industrial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ registro

    public function indexArteaDiretoriaIndustrialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Industrial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ procedimento

    public function indexArteaDiretoriaIndustrialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Industrial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ instrucao

    public function indexArteaDiretoriaIndustrialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Diretoria Industrial')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ formulario

    public function indexArteaEcommerceFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ecommerce')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ registro

    public function indexArteaEcommerceRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ecommerce')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ procedimento

    public function indexArteaEcommerceProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ecommerce')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ instrucao

    public function indexArteaEcommerceInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ecommerce')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ formulario

    public function indexArteaEngenhariaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Engenharia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ registro

    public function indexArteaEngenhariaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Engenharia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ procedimento

    public function indexArteaEngenhariaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Engenharia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ instrucao

    public function indexArteaEngenhariaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Engenharia')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ formulario

    public function indexArteaExpedicaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Expedicao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ registro

    public function indexArteaExpedicaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Expedicao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ procedimento

    public function indexArteaExpedicaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Expedicao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ instrucao

    public function indexArteaExpedicaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Expedicao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ formulario

    public function indexArteaExportacaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Exportacao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ registro

    public function indexArteaExportacaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Exportacao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ procedimento

    public function indexArteaExportacaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Exportacao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ instrucao

    public function indexArteaExportacaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Exportacao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ formulario

    public function indexArteaFaturamentoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Faturamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ registro

    public function indexArteaFaturamentoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Faturamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ procedimento

    public function indexArteaFaturamentoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Faturamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ instrucao

    public function indexArteaFaturamentoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Faturamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ formulario

    public function indexArteaManutencaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Manutencao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ registro

    public function indexArteaManutencaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Manutencao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ procedimento

    public function indexArteaManutencaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Manutencao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ instrucao

    public function indexArteaManutencaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Manutencao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ formulario

    public function indexArteaPedFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'P&d')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ registro

    public function indexArteaPedRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'P&d')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ procedimento

    public function indexArteaPedProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'P&d')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ instrucao

    public function indexArteaPedInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'P&d')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ formulario

    public function indexArteaPmoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pmo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ registro

    public function indexArteaPmoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pmo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ procedimento

    public function indexArteaPmoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pmo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ instrucao

    public function indexArteaPmoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pmo')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ formulario

    public function indexArteaPpcpFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ppcp')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ registro

    public function indexArteaPpcpRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ppcp')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ procedimento

    public function indexArteaPpcpProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ppcp')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ instrucao

    public function indexArteaPpcpInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Ppcp')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ formulario

    public function indexArteaQualidadeFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Qualidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ registro

    public function indexArteaQualidadeRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Qualidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ procedimento

    public function indexArteaQualidadeProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Qualidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ instrucao

    public function indexArteaQualidadeInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Qualidade')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    // QUALIDADE
    //=========================================

    //=========================================
    // inusitta/recepcao/ formulario

    public function indexArteaRecepcaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Recepcao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/recepcao/ registro

    public function indexArteaRecepcaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Recepcao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ procedimento

    public function indexArteaRecepcaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Recepcao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ instrucao

    public function indexArteaRecepcaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Recepcao')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ formulario

    public function indexArteaRestauranteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Restaurante')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ registro

    public function indexArteaRestauranteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Restaurante')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ procedimento

    public function indexArteaRestauranteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Restaurante')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ instrucao

    public function indexArteaRestauranteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Restaurante')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ formulario

    public function indexArteaRhFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Rh')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ registro

    public function indexArteaRhRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Rh')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ procedimento

    public function indexArteaRhProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Rh')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ instrucao

    public function indexArteaRhInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Rh')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ formulario

    public function indexArteaSacFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sac')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ registro

    public function indexArteaSacRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sac')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ procedimento

    public function indexArteaSacProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sac')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ instrucao

    public function indexArteaSacInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sac')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ formulario

    public function indexArteaSesmtFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sesmt')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ registro

    public function indexArteaSesmtRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sesmt')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ procedimento

    public function indexArteaSesmtProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sesmt')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ instrucao

    public function indexArteaSesmtInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Sesmt')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ formulario

    public function indexArteaProjetosFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Projetos')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ registro

    public function indexArteaProjetosRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Projetos')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ procedimento

    public function indexArteaProjetosProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Projetos')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ instrucao

    public function indexArteaProjetosInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Projetos')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ formulario

    public function indexArteaTransporteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Transporte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ registro

    public function indexArteaTransporteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Transporte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexArteaTransporteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Transporte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexArteaTransporteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Transporte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/atelie/ formulario

    public function indexArteaAtelieFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Atelie')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/atelie/ registro

    public function indexArteaAtelieRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Atelie')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexArteaAtelieProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Atelie')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexArteaAtelieInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Atelie')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Corte/ formulario

    public function indexArteaCorteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Corte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Corte/ registro

    public function indexArteaCorteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Corte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexArteaCorteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Corte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexArteaCorteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Corte')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Coladeira/ formulario

    public function indexArteaColadeiraFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Coladeira')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Coladeira/ registro

    public function indexArteaColadeiraRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Coladeira')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexArteaColadeiraProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Coladeira')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexArteaColadeiraInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Coladeira')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Furadeira/ formulario

    public function indexArteaFuradeiraFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Furadeira')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Furadeira/ registro

    public function indexArteaFuradeiraRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Furadeira')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexArteaFuradeiraProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Furadeira')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexArteaFuradeiraInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Furadeira')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Acabamento/ formulario

    public function indexArteaAcabamentoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Acabamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Acabamento/ registro

    public function indexArteaAcabamentoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Acabamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexArteaAcabamentoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Acabamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexArteaAcabamentoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Acabamento')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Embalagem/ formulario

    public function indexArteaEmbalagemFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Embalagem')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Embalagem/ registro

    public function indexArteaEmbalagemRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Embalagem')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexArteaEmbalagemProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Embalagem')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexArteaEmbalagemInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Embalagem')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Pintura/ formulario

    public function indexArteaPinturaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pintura')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Formulario');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Pintura/ registro

    public function indexArteaPinturaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pintura')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Registro');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexArteaPinturaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pintura')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Procedimento');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexArteaPinturaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Artea')->value('id_empresa');

            $query->where(function ($subQuery) use ( $empresaId ) {
                for ($i = 1; $i <= 4; $i++) {
                    $subQuery->orWhere("id_empresa{$i}", $empresaId);
                }
            });
        })
        ->where(function ($query) {
            $setorId = Sector::where('name_setor', 'Pintura')->value('id_setor');
            
            $query->where(function ($subQuery) use ($setorId) {
                for ($i = 1; $i <= 38; $i++) {
                    $subQuery->orWhere("id_setor{$i}", $setorId);
                }
            });
        })
        
        ->whereHas('macro', function ($query) {
            $query->where('name_macro', 'Instrucao');
        })
        ->paginate(10);

        return view('admin.artea.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================
}



