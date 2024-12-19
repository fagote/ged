<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Company;
use App\Models\Sector;

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
    // Pasta lavoratto/atelie

    public function indexLavorattoAtelie(){
        return view('admin.lavoratto.setores.atelie.atelie');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/corte

    public function indexLavorattoCorte(){
        return view('admin.lavoratto.setores.corte.corte');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/coladeira

    public function indexLavorattoColadeira(){
        return view('admin.lavoratto.setores.coladeira.coladeira');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/furadeira

    public function indexLavorattoFuradeira(){
        return view('admin.lavoratto.setores.furadeira.furadeira');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/acabamento

    public function indexLavorattoAcabamento(){
        return view('admin.lavoratto.setores.acabamento.acabamento');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/embalagem
    public function indexLavorattoEmbalagem(){
        return view('admin.lavoratto.setores.embalagem.embalagem');
    }

    //=========================================

    //=========================================
    // Pasta lavoratto/pintura

    public function indexLavorattoPintura(){
        return view('admin.lavoratto.setores.pintura.pintura');
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexLavorattoTiInstrucao()
    {
        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro qualidade

    public function indexLavorattoTiProcedimento(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexLavorattoTiRegistro(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexLavorattoTiFormulario(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================


    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexLavorattoMarketingInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro procedimento

    public function indexLavorattoMarketingProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexLavorattoMarketingRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexLavorattoMarketingFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/instrucao

    public function indexLavorattoComercialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/procedimento

    public function indexLavorattoComercialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexLavorattoComercialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexLavorattoComercialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexLavorattoAlmoxarifadoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/procedimento

    public function indexLavorattoAlmoxarifadoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/registro

    public function indexLavorattoAlmoxarifadoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/fomulario

    public function indexLavorattoAlmoxarifadoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/fomulario

    public function indexLavorattoAssistenciaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/registro

    public function indexLavorattoAssistenciaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/procedimento

    public function indexLavorattoAssistenciaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexLavorattoAssistenciaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/formulario

    public function indexLavorattoComprasFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/registro

    public function indexLavorattoComprasRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/procedimento

    public function indexLavorattoComprasProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/instrucao

    public function indexLavorattoComprasInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/formulario

    public function indexLavorattoContabilidadeFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/registro

    public function indexLavorattoContabilidadeRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexLavorattoContabilidadeProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexLavorattoContabilidadeInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/formulario

    public function indexLavorattoContasPagarFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexLavorattoContasPagarRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/procedimento

    public function indexLavorattoContasPagarProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexLavorattoContasPagarInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/formulario

    public function indexLavorattoContasReceberFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/registro

    public function indexLavorattoContasReceberRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/procedimento

    public function indexLavorattoContasReceberProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/instrucao

    public function indexLavorattoContasReceberInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/formulario

    public function indexLavorattoCustoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/registro

    public function indexLavorattoCustoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/procedimento

    public function indexLavorattoCustoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/instrucao

    public function indexLavorattoCustoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/formulario

    public function indexLavorattoDesignFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/registro

    public function indexLavorattoDesignRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/procedimento

    public function indexLavorattoDesignProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/instrucao

    public function indexLavorattoDesignInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================
    
    
    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


    //=========================================
    // inusitta/diretoria administrativa/formulario

    public function indexLavorattoDiretoriaAdministrativaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/registro

    public function indexLavorattoDiretoriaAdministrativaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/procedimento

    public function indexLavorattoDiretoriaAdministrativaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/instrucao

    public function indexLavorattoDiretoriaAdministrativaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ formulario

    public function indexLavorattoDiretoriaComercialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ registro

    public function indexLavorattoDiretoriaComercialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ procedimento

    public function indexLavorattoDiretoriaComercialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ instrucao

    public function indexLavorattoDiretoriaComercialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ formulario

    public function indexLavorattoDiretoriaIndustrialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ registro

    public function indexLavorattoDiretoriaIndustrialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ procedimento

    public function indexLavorattoDiretoriaIndustrialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ instrucao

    public function indexLavorattoDiretoriaIndustrialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ formulario

    public function indexLavorattoEcommerceFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ registro

    public function indexLavorattoEcommerceRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ procedimento

    public function indexLavorattoEcommerceProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ instrucao

    public function indexLavorattoEcommerceInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ formulario

    public function indexLavorattoEngenhariaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ registro

    public function indexLavorattoEngenhariaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ procedimento

    public function indexLavorattoEngenhariaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ instrucao

    public function indexLavorattoEngenhariaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ formulario

    public function indexLavorattoExpedicaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ registro

    public function indexLavorattoExpedicaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ procedimento

    public function indexLavorattoExpedicaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ instrucao

    public function indexLavorattoExpedicaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ formulario

    public function indexLavorattoExportacaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ registro

    public function indexLavorattoExportacaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ procedimento

    public function indexLavorattoExportacaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ instrucao

    public function indexLavorattoExportacaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ formulario

    public function indexLavorattoFaturamentoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ registro

    public function indexLavorattoFaturamentoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ procedimento

    public function indexLavorattoFaturamentoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ instrucao

    public function indexLavorattoFaturamentoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ formulario

    public function indexLavorattoManutencaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ registro

    public function indexLavorattoManutencaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ procedimento

    public function indexLavorattoManutencaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ instrucao

    public function indexLavorattoManutencaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ formulario

    public function indexLavorattoPedFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ registro

    public function indexLavorattoPedRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ procedimento

    public function indexLavorattoPedProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ instrucao

    public function indexLavorattoPedInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ formulario

    public function indexLavorattoPmoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ registro

    public function indexLavorattoPmoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ procedimento

    public function indexLavorattoPmoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ instrucao

    public function indexLavorattoPmoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ formulario

    public function indexLavorattoPpcpFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ registro

    public function indexLavorattoPpcpRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ procedimento

    public function indexLavorattoPpcpProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ instrucao

    public function indexLavorattoPpcpInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ formulario

    public function indexLavorattoQualidadeFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ registro

    public function indexLavorattoQualidadeRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ procedimento

    public function indexLavorattoQualidadeProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ instrucao

    public function indexLavorattoQualidadeInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    // QUALIDADE
    //=========================================

    //=========================================
    // inusitta/recepcao/ formulario

    public function indexLavorattoRecepcaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/recepcao/ registro

    public function indexLavorattoRecepcaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ procedimento

    public function indexLavorattoRecepcaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ instrucao

    public function indexLavorattoRecepcaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ formulario

    public function indexLavorattoRestauranteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ registro

    public function indexLavorattoRestauranteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ procedimento

    public function indexLavorattoRestauranteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ instrucao

    public function indexLavorattoRestauranteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ formulario

    public function indexLavorattoRhFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ registro

    public function indexLavorattoRhRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ procedimento

    public function indexLavorattoRhProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ instrucao

    public function indexLavorattoRhInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ formulario

    public function indexLavorattoSacFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ registro

    public function indexLavorattoSacRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ procedimento

    public function indexLavorattoSacProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ instrucao

    public function indexLavorattoSacInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ formulario

    public function indexLavorattoSesmtFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ registro

    public function indexLavorattoSesmtRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ procedimento

    public function indexLavorattoSesmtProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ instrucao

    public function indexLavorattoSesmtInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ formulario

    public function indexLavorattoProjetosFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ registro

    public function indexLavorattoProjetosRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ procedimento

    public function indexLavorattoProjetosProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ instrucao

    public function indexLavorattoProjetosInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ formulario

    public function indexLavorattoTransporteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ registro

    public function indexLavorattoTransporteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexLavorattoTransporteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexLavorattoTransporteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/atelie/ formulario

    public function indexLavorattoAtelieFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/atelie/ registro

    public function indexLavorattoAtelieRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexLavorattoAtelieProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexLavorattoAtelieInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Corte/ formulario

    public function indexLavorattoCorteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Corte/ registro

    public function indexLavorattoCorteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexLavorattoCorteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexLavorattoCorteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Coladeira/ formulario

    public function indexLavorattoColadeiraFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Coladeira/ registro

    public function indexLavorattoColadeiraRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexLavorattoColadeiraProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexLavorattoColadeiraInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Furadeira/ formulario

    public function indexLavorattoFuradeiraFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Furadeira/ registro

    public function indexLavorattoFuradeiraRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexLavorattoFuradeiraProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexLavorattoFuradeiraInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Acabamento/ formulario

    public function indexLavorattoAcabamentoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Acabamento/ registro

    public function indexLavorattoAcabamentoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexLavorattoAcabamentoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexLavorattoAcabamentoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Embalagem/ formulario

    public function indexLavorattoEmbalagemFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Embalagem/ registro

    public function indexLavorattoEmbalagemRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexLavorattoEmbalagemProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexLavorattoEmbalagemInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Pintura/ formulario

    public function indexLavorattoPinturaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Pintura/ registro

    public function indexLavorattoPinturaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexLavorattoPinturaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexLavorattoPinturaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Lavoratto')->value('id_empresa');

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

        return view('admin.lavoratto.MOSTRAR-ARQUIVOS-MACRO', compact('files'));
    }
    
    //=========================================
}





