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
    // Pasta inusitta/atelie

    public function indexInusittaAtelie(){
        return view('admin.inusitta.setores.atelie.atelie');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/corte

    public function indexInusittaCorte(){
        return view('admin.inusitta.setores.corte.corte');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/coladeira

    public function indexInusittaColadeira(){
        return view('admin.inusitta.setores.coladeira.coladeira');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/furadeira

    public function indexInusittaFuradeira(){
        return view('admin.inusitta.setores.furadeira.furadeira');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/acabamento

    public function indexInusittaAcabamento(){
        return view('admin.inusitta.setores.acabamento.acabamento');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/embalagem
    public function indexInusittaEmbalagem(){
        return view('admin.inusitta.setores.embalagem.embalagem');
    }

    //=========================================

    //=========================================
    // Pasta inusitta/pintura

    public function indexInusittaPintura(){
        return view('admin.inusitta.setores.pintura.pintura');
    }

    //=========================================
    

    //========================================= 
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexInusittaTiInstrucao()
    {
        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.tecnologia-informacao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro qualidade

    public function indexInusittaTiProcedimento(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.tecnologia-informacao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexInusittaTiRegistro(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.tecnologia-informacao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // Função Para Mostrar os arquivos da macro Produção

    public function indexInusittaTiFormulario(){


        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.tecnologia-informacao.show_arq', compact('files'));
    }

    //=========================================


    //=========================================
    // Função Para Mostrar os arquivos da macro Instrução

    public function indexInusittaMarketingInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.marketing.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro procedimento

    public function indexInusittaMarketingProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.marketing.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexInusittaMarketingRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.marketing.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // Função para mostrar os arquivos da macro produção

    public function indexInusittaMarketingFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.marketing.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/instrucao

    public function indexInusittaComercialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.comercial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/procedimento

    public function indexInusittaComercialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.comercial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexInusittaComercialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.comercial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/comercial/registro

    public function indexInusittaComercialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.comercial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexInusittaAlmoxarifadoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.almoxarifado.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/procedimento

    public function indexInusittaAlmoxarifadoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.almoxarifado.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/registro

    public function indexInusittaAlmoxarifadoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.almoxarifado.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/fomulario

    public function indexInusittaAlmoxarifadoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.almoxarifado.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/fomulario

    public function indexInusittaAssistenciaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.assistencia.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/registro

    public function indexInusittaAssistenciaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.assistencia.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/assistencia/procedimento

    public function indexInusittaAssistenciaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.assistencia.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/almoxarifado/instrucao

    public function indexInusittaAssistenciaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.assistencia.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/formulario

    public function indexInusittaComprasFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.compras.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/registro

    public function indexInusittaComprasRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.compras.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/procedimento

    public function indexInusittaComprasProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.compras.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/compras/instrucao

    public function indexInusittaComprasInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.compras.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/formulario

    public function indexInusittaContabilidadeFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contabilidade.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/registro

    public function indexInusittaContabilidadeRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contabilidade.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexInusittaContabilidadeProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contabilidade.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contabilidade/procedimento

    public function indexInusittaContabilidadeInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contabilidade.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/formulario

    public function indexInusittaContasPagarFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contaspagar.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexInusittaContasPagarRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contaspagar.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/procedimento

    public function indexInusittaContasPagarProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contaspagar.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a pagar/registro

    public function indexInusittaContasPagarInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contaspagar.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/formulario

    public function indexInusittaContasReceberFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contasreceber.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/registro

    public function indexInusittaContasReceberRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contasreceber.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/procedimento

    public function indexInusittaContasReceberProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contasreceber.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/contas a receber/instrucao

    public function indexInusittaContasReceberInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.contasreceber.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/formulario

    public function indexInusittaCustoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.custo.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/registro

    public function indexInusittaCustoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.custo.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/procedimento

    public function indexInusittaCustoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.custo.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/custo/instrucao

    public function indexInusittaCustoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.custo.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/formulario

    public function indexInusittaDesignFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.designn.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/registro

    public function indexInusittaDesignRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.designn.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/procedimento

    public function indexInusittaDesignProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.designn.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/design/instrucao

    public function indexInusittaDesignInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.designn.show_arq', compact('files'));
    }

    //=========================================
    
    
    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX


    //=========================================
    // inusitta/diretoria administrativa/formulario

    public function indexInusittaDiretoriaAdministrativaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriaadministrativa.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/registro

    public function indexInusittaDiretoriaAdministrativaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriaadministrativa.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/procedimento

    public function indexInusittaDiretoriaAdministrativaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriaadministrativa.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria administrativa/instrucao

    public function indexInusittaDiretoriaAdministrativaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriaadministrativa.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ formulario

    public function indexInusittaDiretoriaComercialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriacomercial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ registro

    public function indexInusittaDiretoriaComercialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriacomercial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ procedimento

    public function indexInusittaDiretoriaComercialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriacomercial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria comercial/ instrucao

    public function indexInusittaDiretoriaComercialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriacomercial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ formulario

    public function indexInusittaDiretoriaIndustrialFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriaindustrial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ registro

    public function indexInusittaDiretoriaIndustrialRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriaindustrial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ procedimento

    public function indexInusittaDiretoriaIndustrialProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriaindustrial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/diretoria industrial/ instrucao

    public function indexInusittaDiretoriaIndustrialInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.diretoriaindustrial.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ formulario

    public function indexInusittaEcommerceFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ecommerce.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ registro

    public function indexInusittaEcommerceRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ecommerce.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ procedimento

    public function indexInusittaEcommerceProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ecommerce.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ecommerce/ instrucao

    public function indexInusittaEcommerceInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ecommerce.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ formulario

    public function indexInusittaEngenhariaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.engenharia.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ registro

    public function indexInusittaEngenhariaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.engenharia.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ procedimento

    public function indexInusittaEngenhariaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.engenharia.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/engenharia/ instrucao

    public function indexInusittaEngenhariaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.engenharia.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ formulario

    public function indexInusittaExpedicaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.expedicao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ registro

    public function indexInusittaExpedicaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.expedicao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ procedimento

    public function indexInusittaExpedicaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.expedicao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/expedicao/ instrucao

    public function indexInusittaExpedicaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.expedicao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ formulario

    public function indexInusittaExportacaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.exportacao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ registro

    public function indexInusittaExportacaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.exportacao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ procedimento

    public function indexInusittaExportacaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.exportacao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/exportacao/ instrucao

    public function indexInusittaExportacaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.exportacao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ formulario

    public function indexInusittaFaturamentoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.faturamento.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ registro

    public function indexInusittaFaturamentoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.faturamento.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ procedimento

    public function indexInusittaFaturamentoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.faturamento.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/faturamento/ instrucao

    public function indexInusittaFaturamentoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.faturamento.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ formulario

    public function indexInusittaManutencaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.manutencao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ registro

    public function indexInusittaManutencaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.manutencao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ procedimento

    public function indexInusittaManutencaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.manutencao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/manutencao/ instrucao

    public function indexInusittaManutencaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.manutencao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ formulario

    public function indexInusittaPedFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ped.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ registro

    public function indexInusittaPedRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ped.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ procedimento

    public function indexInusittaPedProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ped.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ped/ instrucao

    public function indexInusittaPedInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ped.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ formulario

    public function indexInusittaPmoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.pmo.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ registro

    public function indexInusittaPmoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.pmo.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ procedimento

    public function indexInusittaPmoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.pmo.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/pmo/ instrucao

    public function indexInusittaPmoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.pmo.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ formulario

    public function indexInusittaPpcpFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ppcp.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ registro

    public function indexInusittaPpcpRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ppcp.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ procedimento

    public function indexInusittaPpcpProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ppcp.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/ppcp/ instrucao

    public function indexInusittaPpcpInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.ppcp.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ formulario

    public function indexInusittaQualidadeFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.qualidade.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ registro

    public function indexInusittaQualidadeRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.qualidade.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ procedimento

    public function indexInusittaQualidadeProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.qualidade.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/qualidade/ instrucao

    public function indexInusittaQualidadeInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.qualidade.show_arq', compact('files'));
    }
    // QUALIDADE
    //=========================================

    //=========================================
    // inusitta/recepcao/ formulario

    public function indexInusittaRecepcaoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.recepcao.show_arq', compact('files'));
    }

    //=========================================

    //=========================================
    // inusitta/recepcao/ registro

    public function indexInusittaRecepcaoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.recepcao.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ procedimento

    public function indexInusittaRecepcaoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.recepcao.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/recepcao/ instrucao

    public function indexInusittaRecepcaoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.recepcao.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ formulario

    public function indexInusittaRestauranteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.restaurante.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ registro

    public function indexInusittaRestauranteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.restaurante.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ procedimento

    public function indexInusittaRestauranteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.restaurante.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/restaurante/ instrucao

    public function indexInusittaRestauranteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.restaurante.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ formulario

    public function indexInusittaRhFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.rh.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ registro

    public function indexInusittaRhRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.rh.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ procedimento

    public function indexInusittaRhProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.rh.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/rh/ instrucao

    public function indexInusittaRhInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.rh.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ formulario

    public function indexInusittaSacFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.sac.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ registro

    public function indexInusittaSacRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.sac.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ procedimento

    public function indexInusittaSacProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.sac.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sac/ instrucao

    public function indexInusittaSacInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.sac.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ formulario

    public function indexInusittaSesmtFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.sesmt.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ registro

    public function indexInusittaSesmtRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.sesmt.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ procedimento

    public function indexInusittaSesmtProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.sesmt.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/sesmt/ instrucao

    public function indexInusittaSesmtInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.sesmt.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ formulario

    public function indexInusittaProjetosFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.projetos.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ registro

    public function indexInusittaProjetosRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.projetos.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ procedimento

    public function indexInusittaProjetosProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.projetos.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/projetos/ instrucao

    public function indexInusittaProjetosInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.projetos.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ formulario

    public function indexInusittaTransporteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.transporte.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ registro

    public function indexInusittaTransporteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.transporte.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaTransporteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.transporte.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaTransporteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.transporte.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/atelie/ formulario

    public function indexInusittaAtelieFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.atelie.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/atelie/ registro

    public function indexInusittaAtelieRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.atelie.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaAtelieProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.atelie.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaAtelieInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.atelie.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Corte/ formulario

    public function indexInusittaCorteFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.corte.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Corte/ registro

    public function indexInusittaCorteRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.corte.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaCorteProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.corte.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaCorteInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.corte.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Coladeira/ formulario

    public function indexInusittaColadeiraFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.coladeira.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Coladeira/ registro

    public function indexInusittaColadeiraRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.coladeira.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaColadeiraProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.coladeira.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaColadeiraInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.coladeira.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Furadeira/ formulario

    public function indexInusittaFuradeiraFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.furadeira.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Furadeira/ registro

    public function indexInusittaFuradeiraRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.furadeira.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaFuradeiraProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.furadeira.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaFuradeiraInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.furadeira.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Acabamento/ formulario

    public function indexInusittaAcabamentoFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.acabamento.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Acabamento/ registro

    public function indexInusittaAcabamentoRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.acabamento.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaAcabamentoProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.acabamento.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaAcabamentoInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.acabamento.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Embalagem/ formulario

    public function indexInusittaEmbalagemFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.embalagem.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Embalagem/ registro

    public function indexInusittaEmbalagemRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.embalagem.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaEmbalagemProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.embalagem.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaEmbalagemInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.embalagem.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Pintura/ formulario

    public function indexInusittaPinturaFormulario(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.pintura.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/Pintura/ registro

    public function indexInusittaPinturaRegistro(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.pintura.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ procedimento

    public function indexInusittaPinturaProcedimento(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.pintura.show_arq', compact('files'));
    }
    
    //=========================================

    //=========================================
    // inusitta/transporte/ instrucao

    public function indexInusittaPinturaInstrucao(){

        $files = File::where(function ($query) {
            $empresaId = Company::where('name_empresa', 'Inusitta')->value('id_empresa');

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

        return view('admin.inusitta.setores.pintura.show_arq', compact('files'));
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
        // Obtém os dados básicos validados
        $data = $request->validated();

        // Verifica os campos de empresas (id_empresa[])
        $empresas = $request->input('id_empresa', []); // Pega o array de empresas ou vazio se não selecionado
        for ($i = 1; $i <= 4; $i++) {
            $data["id_empresa{$i}"] = isset($empresas[$i - 1]) ? $empresas[$i - 1] : null;
        }

        // Verifica os campos de setores (id_setor[])
        $setores = $request->input('id_setor', []); // Pega o array de setores ou vazio se não selecionado
        for ($i = 1; $i <= 38; $i++) {
            $data["id_setor{$i}"] = isset($setores[$i - 1]) ? $setores[$i - 1] : null;
        }

        // Cria o usuário no banco de dados
        User::create($data);

        // Redireciona com mensagem de sucesso
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
        // Verifica se o usuário existe
        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado');
        }

        // Obtém os dados do formulário
        $data = $request->only('name', 'email', 'id_permission');

        // Verifica os campos de empresas (id_empresa[])
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

        // Remove o campo de permissão se o usuário for ele mesmo
        if (auth()->user()->id === $user->id) {
            unset($data['id_permission']); 
        }

        // Se houver alteração de senhawaq
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        // Atualiza o usuário com os dados modificados
        $user->update($data);

        // Redireciona com sucesso
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

