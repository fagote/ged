<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\MacroController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\HaosController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckIfIsAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')
    ->prefix('admin')
    ->group(function(){
        


        //==============================================================
        // ROTAS PARA USUÁRIOS  

        Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
        Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy')->middleware(CheckIfIsAdmin::class);
        Route::post('/users/{id}/upload', [UserController::class, 'upload'])->name('users.upload');
        Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
        Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
        Route::put('/users/{user}',[UserController::class, 'update'])->name('users.update');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/users',[UserController::class, 'store'])->name('users.store');
        Route::get('/users',[UserController::class, 'index'])->name('users.index');

        //======================================================
        // ROTAS PARA EMPRESA INUSITTA

        Route::get('/inusitta',[UserController::class, 'indexIN'])->name('inusitta.index');
        
        Route::get('/inusitta/ti', [UserController::class, 'indexInusittaTi'])->name('inusittaTi.index');
        Route::get('inusitta/ti/instrucao', [UserController::class, 'indexInusittaTiInstrucao'])->name('inusittaTiInstrucao.index');
        Route::get('inusitta/ti/procedimento',[UserController::class, 'indexInusittaTiProcedimento'])->name('inusittaTiProcedimento.index');
        Route::get('inusitta/ti/registro', [UserController::class, 'indexInusittaTiRegistro'])->name('inusittaTiRegistro.index');
        Route::get('inusitta/ti/formulario', [UserController::class, 'indexInusittaTiFormulario'])->name('inusittaTiFormulario.index');
        
        Route::get('inusitta/marketing', [UserController::class, 'indexInusittaMarketing'])->name('inusittaMarketing.index');
        Route::get('inusitta/marketing/instrucao', [UserController::class, 'indexInusittaMarketingInstrucao'])->name('inusittaMarketingInstrucao.index');
        Route::get('inusitta/marketing/procedimento',[UserController::class, 'indexInusittaMarketingProcedimento'])->name('inusittaMarketingProcedimento.index');
        Route::get('inusitta/marketing/registro', [UserController::class, 'indexInusittaMarketingRegistro'])->name('inusittaMarketingRegistro.index');
        Route::get('inusitta/marketing/formulario', [UserController::class, 'indexInusittaMarketingFormulario'])->name('inusittaMarketingFormulario.index');

        Route::get('inusitta/comercial', [UserController::class, 'indexInusittaComercial'])->name('inusittaComercial.index');
        Route::get('inusitta/comercial/instrucao', [UserController::class, 'indexInusittaComercialInstrucao'])->name('inusittaComercialInstrucao.index');
        Route::get('inusitta/comercial/procedimento',[UserController::class, 'indexInusittaComercialProcedimento'])->name('inusittaComercialProcedimento.index');
        Route::get('inusitta/comercial/registro', [UserController::class, 'indexInusittaComercialRegistro'])->name('inusittaComercialRegistro.index');
        Route::get('inusitta/comercial/formulario', [UserController::class, 'indexInusittaComercialFormulario'])->name('inusittaComercialFormulario.index');

        Route::get('inusitta/almoxarifado', [UserController::class, 'indexInusittaAlmoxarifado'])->name('inusittaAlmoxarifado.index');
        Route::get('inusitta/almoxarifado/instrucao', [UserController::class, 'indexInusittaAlmoxarifadoInstrucao'])->name('inusittaAlmoxarifadoInstrucao.index');
        Route::get('inusitta/almoxarifado/procedimento',[UserController::class, 'indexInusittaAlmoxarifadoProcedimento'])->name('inusittaAlmoxarifadoProcedimento.index');
        Route::get('inusitta/almoxarifado/registro', [UserController::class, 'indexInusittaAlmoxarifadoRegistro'])->name('inusittaAlmoxarifadoRegistro.index');
        Route::get('inusitta/almoxarifado/formulario', [UserController::class, 'indexInusittaAlmoxarifadoFormulario'])->name('inusittaAlmoxarifadoFormulario.index');

        Route::get('inusitta/assistencia', [UserController::class, 'indexInusittaAssistencia'])->name('inusittaAssistencia.index');
        Route::get('inusitta/assistencia/instrucao', [UserController::class, 'indexInusittaAssistenciaInstrucao'])->name('inusittaAssistenciaInstrucao.index');
        Route::get('inusitta/assistencia/procedimento',[UserController::class, 'indexInusittaAssistenciaProcedimento'])->name('inusittaAssistenciaProcedimento.index');
        Route::get('inusitta/assistencia/registro', [UserController::class, 'indexInusittaAssistenciaRegistro'])->name('inusittaAssistenciaRegistro.index');
        Route::get('inusitta/assistencia/formulario', [UserController::class, 'indexInusittaAssistenciaFormulario'])->name('inusittaAssistenciaFormulario.index');

        Route::get('inusitta/compras', [UserController::class, 'indexInusittaCompras'])->name('inusittaCompras.index');
        Route::get('inusitta/compras/instrucao', [UserController::class, 'indexInusittaComprasInstrucao'])->name('inusittaComprasInstrucao.index');
        Route::get('inusitta/compras/procedimento',[UserController::class, 'indexInusittaComprasProcedimento'])->name('inusittaComprasProcedimento.index');
        Route::get('inusitta/compras/registro', [UserController::class, 'indexInusittaComprasRegistro'])->name('inusittaComprasRegistro.index');
        Route::get('inusitta/compras/formulario', [UserController::class, 'indexInusittaComprasFormulario'])->name('inusittaComprasFormulario.index');

        Route::get('inusitta/contabilidade', [UserController::class, 'indexInusittaContabilidade'])->name('inusittaContabilidade.index');
        Route::get('inusitta/contabilidade/instrucao', [UserController::class, 'indexInusittaContabilidadeInstrucao'])->name('inusittaContabilidadeInstrucao.index');
        Route::get('inusitta/contabilidade/procedimento',[UserController::class, 'indexInusittaContabilidadeProcedimento'])->name('inusittaContabilidadeProcedimento.index');
        Route::get('inusitta/contabilidade/registro', [UserController::class, 'indexInusittaContabilidadeRegistro'])->name('inusittaContabilidadeRegistro.index');
        Route::get('inusitta/contabilidade/formulario', [UserController::class, 'indexInusittaContabilidadeFormulario'])->name('inusittaContabilidadeFormulario.index');

        Route::get('inusitta/contaspagar', [UserController::class, 'indexInusittaContasPagar'])->name('inusittaContasPagar.index');
        Route::get('inusitta/contaspagar/instrucao', [UserController::class, 'indexInusittaContasPagarInstrucao'])->name('inusittaContasPagarInstrucao.index');
        Route::get('inusitta/contaspagar/procedimento',[UserController::class, 'indexInusittaContasPagarProcedimento'])->name('inusittaContasPagarProcedimento.index');
        Route::get('inusitta/contaspagar/registro', [UserController::class, 'indexInusittaContasPagarRegistro'])->name('inusittaContasPagarRegistro.index');
        Route::get('inusitta/contaspagar/formulario', [UserController::class, 'indexInusittaContasPagarFormulario'])->name('inusittaContasPagarFormulario.index');

        Route::get('inusitta/contasreceber', [UserController::class, 'indexInusittaContasReceber'])->name('inusittaContasReceber.index');
        Route::get('inusitta/contasreceber/instrucao', [UserController::class, 'indexInusittaContasReceberInstrucao'])->name('inusittaContasReceberInstrucao.index');
        Route::get('inusitta/contasreceber/procedimento',[UserController::class, 'indexInusittaContasReceberProcedimento'])->name('inusittaContasReceberProcedimento.index');
        Route::get('inusitta/contasreceber/registro', [UserController::class, 'indexInusittaContasReceberRegistro'])->name('inusittaContasReceberRegistro.index');
        Route::get('inusitta/contasreceber/formulario', [UserController::class, 'indexInusittaContasReceberFormulario'])->name('inusittaContasReceberFormulario.index');

        Route::get('inusitta/custo', [UserController::class, 'indexInusittaCusto'])->name('inusittaCusto.index');
        Route::get('inusitta/custo/instrucao', [UserController::class, 'indexInusittaCustoInstrucao'])->name('inusittaCustoInstrucao.index');
        Route::get('inusitta/custo/procedimento',[UserController::class, 'indexInusittaCustoProcedimento'])->name('inusittaCustoProcedimento.index');
        Route::get('inusitta/custo/registro', [UserController::class, 'indexInusittaCustoRegistro'])->name('inusittaCustoRegistro.index');
        Route::get('inusitta/custo/formulario', [UserController::class, 'indexInusittaCustoFormulario'])->name('inusittaCustoFormulario.index');

        Route::get('inusitta/design', [UserController::class, 'indexInusittaDesign'])->name('inusittaDesign.index');
        Route::get('inusitta/design/instrucao', [UserController::class, 'indexInusittaDesignInstrucao'])->name('inusittaDesignInstrucao.index');
        Route::get('inusitta/design/procedimento',[UserController::class, 'indexInusittaDesignProcedimento'])->name('inusittaDesignProcedimento.index');
        Route::get('inusitta/design/registro', [UserController::class, 'indexInusittaDesignRegistro'])->name('inusittaDesignRegistro.index');
        Route::get('inusitta/design/formulario', [UserController::class, 'indexInusittaDesignFormulario'])->name('inusittaDesignFormulario.index');

        Route::get('inusitta/diretoriaadministrativa', [UserController::class, 'indexInusittaDiretoriaAdministrativa'])->name('inusittaDiretoriaAdministrativa.index');
        Route::get('inusitta/diretoriaadministrativa/instrucao', [UserController::class, 'indexInusittaDiretoriaAdministrativaInstrucao'])->name('inusittaDiretoriaAdministrativaInstrucao.index');
        Route::get('inusitta/diretoriaadministrativa/procedimento',[UserController::class, 'indexInusittaDiretoriaAdministrativaProcedimento'])->name('inusittaDiretoriaAdministrativaProcedimento.index');
        Route::get('inusitta/diretoriaadministrativa/registro', [UserController::class, 'indexInusittaDiretoriaAdministrativaRegistro'])->name('inusittaDiretoriaAdministrativaRegistro.index');
        Route::get('inusitta/diretoriaadministrativa/formulario', [UserController::class, 'indexInusittaDiretoriaAdministrativaFormulario'])->name('inusittaDiretoriaAdministrativaFormulario.index');

        Route::get('inusitta/diretoriacomercial', [UserController::class, 'indexInusittaDiretoriaComercial'])->name('inusittaDiretoriaComercial.index');
        Route::get('inusitta/diretoriacomercial/instrucao', [UserController::class, 'indexInusittaDiretoriaComercialInstrucao'])->name('inusittaDiretoriaComercialInstrucao.index');
        Route::get('inusitta/diretoriacomercial/procedimento',[UserController::class, 'indexInusittaDiretoriaComercialProcedimento'])->name('inusittaDiretoriaComercialProcedimento.index');
        Route::get('inusitta/diretoriacomercial/registro', [UserController::class, 'indexInusittaDiretoriaComercialRegistro'])->name('inusittaDiretoriaComercialRegistro.index');
        Route::get('inusitta/diretoriacomercial/formulario', [UserController::class, 'indexInusittaDiretoriaComercialFormulario'])->name('inusittaDiretoriaComercialFormulario.index');

        Route::get('inusitta/diretoriaindustrial', [UserController::class, 'indexInusittaDiretoriaIndustrial'])->name('inusittaDiretoriaIndustrial.index');
        Route::get('inusitta/diretoriaindustrial/instrucao', [UserController::class, 'indexInusittaDiretoriaIndustrialInstrucao'])->name('inusittaDiretoriaIndustrialInstrucao.index');
        Route::get('inusitta/diretoriaindustrial/procedimento',[UserController::class, 'indexInusittaDiretoriaIndustrialProcedimento'])->name('inusittaDiretoriaIndustrialProcedimento.index');
        Route::get('inusitta/diretoriaindustrial/registro', [UserController::class, 'indexInusittaDiretoriaIndustrialRegistro'])->name('inusittaDiretoriaIndustrialRegistro.index');
        Route::get('inusitta/diretoriaindustrial/formulario', [UserController::class, 'indexInusittaDiretoriaIndustrialFormulario'])->name('inusittaDiretoriaIndustrialFormulario.index');

        Route::get('inusitta/ecommerce', [UserController::class, 'indexInusittaEcommerce'])->name('inusittaEcommerce.index');
        Route::get('inusitta/ecommerce/instrucao', [UserController::class, 'indexInusittaEcommerceInstrucao'])->name('inusittaEcommerceInstrucao.index');
        Route::get('inusitta/ecommerce/procedimento',[UserController::class, 'indexInusittaEcommerceProcedimento'])->name('inusittaEcommerceProcedimento.index');
        Route::get('inusitta/ecommerce/registro', [UserController::class, 'indexInusittaEcommerceRegistro'])->name('inusittaEcommerceRegistro.index');
        Route::get('inusitta/ecommerce/formulario', [UserController::class, 'indexInusittaEcommerceFormulario'])->name('inusittaEcommerceFormulario.index');

        Route::get('inusitta/engenharia', [UserController::class, 'indexInusittaEngenharia'])->name('inusittaEngenharia.index');
        Route::get('inusitta/engenharia/instrucao', [UserController::class, 'indexInusittaEngenhariaInstrucao'])->name('inusittaEngenhariaInstrucao.index');
        Route::get('inusitta/engenharia/procedimento',[UserController::class, 'indexInusittaEngenhariaProcedimento'])->name('inusittaEngenhariaProcedimento.index');
        Route::get('inusitta/engenharia/registro', [UserController::class, 'indexInusittaEngenhariaRegistro'])->name('inusittaEngenhariaRegistro.index');
        Route::get('inusitta/engenharia/formulario', [UserController::class, 'indexInusittaEngenhariaFormulario'])->name('inusittaEngenhariaFormulario.index');

        Route::get('inusitta/expedicao', [UserController::class, 'indexInusittaExpedicao'])->name('inusittaExpedicao.index');
        Route::get('inusitta/expedicao/instrucao', [UserController::class, 'indexInusittaExpedicaoInstrucao'])->name('inusittaExpedicaoInstrucao.index');
        Route::get('inusitta/expedicao/procedimento',[UserController::class, 'indexInusittaExpedicaoProcedimento'])->name('inusittaExpedicaoProcedimento.index');
        Route::get('inusitta/expedicao/registro', [UserController::class, 'indexInusittaExpedicaoRegistro'])->name('inusittaExpedicaoRegistro.index');
        Route::get('inusitta/expedicao/formulario', [UserController::class, 'indexInusittaExpedicaoFormulario'])->name('inusittaExpedicaoFormulario.index');

        Route::get('inusitta/exportacao', [UserController::class, 'indexInusittaExportacao'])->name('inusittaExportacao.index');
        Route::get('inusitta/exportacao/instrucao', [UserController::class, 'indexInusittaExportacaoInstrucao'])->name('inusittaExportacaoInstrucao.index');
        Route::get('inusitta/exportacao/procedimento',[UserController::class, 'indexInusittaExportacaoProcedimento'])->name('inusittaExportacaoProcedimento.index');
        Route::get('inusitta/exportacao/registro', [UserController::class, 'indexInusittaExportacaoRegistro'])->name('inusittaExportacaoRegistro.index');
        Route::get('inusitta/exportacao/formulario', [UserController::class, 'indexInusittaExportacaoFormulario'])->name('inusittaExportacaoFormulario.index');

        Route::get('inusitta/faturamento', [UserController::class, 'indexInusittaFaturamento'])->name('inusittaFaturamento.index');
        Route::get('inusitta/faturamento/instrucao', [UserController::class, 'indexInusittaFaturamentoInstrucao'])->name('inusittaFaturamentoInstrucao.index');
        Route::get('inusitta/faturamento/procedimento',[UserController::class, 'indexInusittaFaturamentoProcedimento'])->name('inusittaFaturamentoProcedimento.index');
        Route::get('inusitta/faturamento/registro', [UserController::class, 'indexInusittaFaturamentoRegistro'])->name('inusittaFaturamentoRegistro.index');
        Route::get('inusitta/faturamento/formulario', [UserController::class, 'indexInusittaFaturamentoFormulario'])->name('inusittaFaturamentoFormulario.index');

        Route::get('inusitta/manutencao', [UserController::class, 'indexInusittaManutencao'])->name('inusittaManutencao.index');
        Route::get('inusitta/manutencao/instrucao', [UserController::class, 'indexInusittaManutencaoInstrucao'])->name('inusittaManutencaoInstrucao.index');
        Route::get('inusitta/manutencao/procedimento',[UserController::class, 'indexInusittaManutencaoProcedimento'])->name('inusittaManutencaoProcedimento.index');
        Route::get('inusitta/manutencao/registro', [UserController::class, 'indexInusittaManutencaoRegistro'])->name('inusittaManutencaoRegistro.index');
        Route::get('inusitta/manutencao/formulario', [UserController::class, 'indexInusittaManutencaoFormulario'])->name('inusittaManutencaoFormulario.index');

        Route::get('inusitta/ped', [UserController::class, 'indexInusittaPed'])->name('inusittaPed.index');
        Route::get('inusitta/ped/instrucao', [UserController::class, 'indexInusittaPedInstrucao'])->name('inusittaPedInstrucao.index');
        Route::get('inusitta/ped/procedimento',[UserController::class, 'indexInusittaPedProcedimento'])->name('inusittaPedProcedimento.index');
        Route::get('inusitta/ped/registro', [UserController::class, 'indexInusittaPedRegistro'])->name('inusittaPedRegistro.index');
        Route::get('inusitta/ped/formulario', [UserController::class, 'indexInusittaPedFormulario'])->name('inusittaPedFormulario.index');

        Route::get('inusitta/pmo', [UserController::class, 'indexInusittaPmo'])->name('inusittaPmo.index');
        Route::get('inusitta/pmo/instrucao', [UserController::class, 'indexInusittaPmoInstrucao'])->name('inusittaPmoInstrucao.index');
        Route::get('inusitta/pmo/procedimento',[UserController::class, 'indexInusittaPmoProcedimento'])->name('inusittaPmoProcedimento.index');
        Route::get('inusitta/pmo/registro', [UserController::class, 'indexInusittaPmoRegistro'])->name('inusittaPmoRegistro.index');
        Route::get('inusitta/pmo/formulario', [UserController::class, 'indexInusittaPmoFormulario'])->name('inusittaPmoFormulario.index');

        Route::get('inusitta/ppcp', [UserController::class, 'indexInusittaPpcp'])->name('inusittaPpcp.index');
        Route::get('inusitta/ppcp/instrucao', [UserController::class, 'indexInusittaPpcpInstrucao'])->name('inusittaPpcpInstrucao.index');
        Route::get('inusitta/ppcp/procedimento',[UserController::class, 'indexInusittaPpcpProcedimento'])->name('inusittaPpcpProcedimento.index');
        Route::get('inusitta/ppcp/registro', [UserController::class, 'indexInusittaPpcpRegistro'])->name('inusittaPpcpRegistro.index');
        Route::get('inusitta/ppcp/formulario', [UserController::class, 'indexInusittaPpcpFormulario'])->name('inusittaPpcpFormulario.index');

        Route::get('inusitta/qualidade', [UserController::class, 'indexInusittaQualidade'])->name('inusittaQualidade.index');
        Route::get('inusitta/qualidade/instrucao', [UserController::class, 'indexInusittaQualidadeInstrucao'])->name('inusittaQualidadeInstrucao.index');
        Route::get('inusitta/qualidade/procedimento',[UserController::class, 'indexInusittaQualidadeProcedimento'])->name('inusittaQualidadeProcedimento.index');
        Route::get('inusitta/qualidade/registro', [UserController::class, 'indexInusittaQualidadeRegistro'])->name('inusittaQualidadeRegistro.index');
        Route::get('inusitta/qualidade/formulario', [UserController::class, 'indexInusittaQualidadeFormulario'])->name('inusittaQualidadeFormulario.index');

        //======================================================

        // ROTAS PARA EMPRESA HAOS
        
        Route::get('/haos', [HaosController::class, 'indexHaos'])->name('haos.index');
        /*
        Route::get('/haos/ti', [HaosController::class, 'indexHaosTI'])->name('ti.index');
        Route::get('haos/ti/qualidade',[HaosController::class, 'indexHaosTiQualidade'])->name('qualidade.index');
        Route::get('haos/ti/producao', [HaosController::class, 'indexHaosTiProducao'])->name('producao.index');
        Route::get('haos/ti/instrucao', [HaosController::class, 'indexHaosTiInstrucao'])->name('instrucao.index');
        
        Route::get('haos/marketing', [HaosController::class, 'indexHaosMarketing'])->name('marketing.index');
        Route::get('haos/marketing/qualidade', [HaosController::class, 'indexHaosMarketingQualidade'])->name('haosMarketingQualidade.index');
        Route::get('haos/marketing/producao', [HaosController::class, 'indexHaosMarketingProducao'])->name('haosMarketingProducao.index');
        Route::get('haos/marketing/instrucao',[HaosController::class, 'indexHaosMarketingInstrucao'])->name('haosMarketingInstrucao.index');
        */



        //==============================================================

        
        
    });
    


//==============================================================
// ROTAS PARA FILES

Route::get('/files/search', [FileController::class, 'search'])->name('files.search');
Route::delete('/files/{file}/destroy', [FileController::class, 'destroy'])->name('files.destroy')->middleware(CheckIfIsAdmin::class);
Route::post('/files/{id}/upload', [FileController::class, 'upload'])->name('files.upload');
Route::get('/files/create',[FileController::class, 'create'])->name('files.create');
Route::get('/files/{file}', [FileController::class, 'show'])->name('files.show');
Route::put('/files/{file}',[FileController::class, 'update'])->name('files.update');
Route::get('/files/{file}/edit', [FileController::class, 'edit'])->name('files.edit');
Route::post('/files',[FileController::class, 'store'])->name('files.store');
Route::get('/files',[FileController::class, 'index'])->name('files.index');
Route::get('/files/view/{id}', [FileController::class, 'view'])->name('files.view');

//==============================================================


//==============================================================
// ROTAS PARA EMPRESAS

Route::delete('/companies/{company}/destroy', [CompanyController::class, 'destroy'])->name('companies.destroy')->middleware(CheckIfIsAdmin::class);
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
Route::put('/companies/{company}',[CompanyController::class, 'update'])->name('companies.update');
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
Route::post('/companies',[CompanyController::class, 'store'])->name('companies.store');
Route::get('/companies',[CompanyController::class, 'index'])->name('companies.index');

//==============================================================


//==============================================================
// ROTAS PARA SETORES

Route::delete('/sectors/{sector}/destroy', [SectorController::class, 'destroy'])->name('sectors.destroy')->middleware(CheckIfIsAdmin::class);
Route::get('/sectors/create', [SectorController::class, 'create'])->name('sectors.create');
Route::get('/sectors/{sector}', [SectorController::class, 'show'])->name('sectors.show');
Route::put('/sectors/{sector}',[SectorController::class, 'update'])->name('sectors.update');
Route::get('/sectors/{sector}/edit', [SectorController::class, 'edit'])->name('sectors.edit');
Route::post('/sectors',[SectorController::class, 'store'])->name('sectors.store');
Route::get('/sectors',[SectorController::class, 'index'])->name('sectors.index');

//==============================================================

//==============================================================
// ROTAS PARA MACROS

Route::middleware('auth')
    ->prefix('admin')
    ->group(function(){
        
        Route::get('/macros/search', [MacroController::class, 'search'])->name('macros.search');

        Route::delete('/macros/{macro}/destroy', [MacroController::class, 'destroy'])->name('macros.destroy')->middleware(CheckIfIsAdmin::class);
        Route::post('/macros/{id}/upload', [MacroController::class, 'upload'])->name('macros.upload');
        Route::get('/macros/create',[MacroController::class, 'create'])->name('macros.create');
        Route::get('/macros/{macro}', [MacroController::class, 'show'])->name('macros.show');
        Route::put('/macros/{macro}',[MacroController::class, 'update'])->name('macros.update');
        Route::get('/macros/{macro}/edit', [MacroController::class, 'edit'])->name('macros.edit');
        Route::post('/macros',[MacroController::class, 'store'])->name('macros.store');
        Route::get('/macros',[MacroController::class, 'index'])->name('macros.index');
        
    });

//==============================================================


//==============================================================
// ROTAS PARA PERMISSÕES

Route::delete('/permissions/{permission}/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy')->middleware(CheckIfIsAdmin::class);
Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
Route::get('/permissions/{permission}', [PermissionController::class, 'show'])->name('permissions.show');
Route::put('/permissions/{permission}',[PermissionController::class, 'update'])->name('permissions.update');
Route::get('/permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
Route::post('/permissions',[PermissionController::class, 'store'])->name('permissions.store');
Route::get('/permissions',[PermissionController::class, 'index'])->name('permissions.index');

//==============================================================



Route::get('/', function () {
    return view('Welcome');
})->name('home');


Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// HTTP: protocolo de requisição de informações do tipo cliente-servidor.
/*
- GET: Método para buscar dados do servidor.
- POST: Método para enviar dados ao servidor.
- PUT: Método para atualizar dados do servidor.
- DELETE: Método para apagar dados do servidor.
*/
