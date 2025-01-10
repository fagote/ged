<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\MacroController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\HaosController;
use App\Http\Controllers\Admin\ArteaController;
use App\Http\Controllers\Admin\LavorattoController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckIfIsAdmin;
use App\Http\Middleware\checkPermission;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')
    ->prefix('admin')
    ->group(function(){
        


        //==============================================================
        // ROTAS PARA USUÁRIOS  

        Route::get('/users/search', [UserController::class, 'search'])->name('users.search')->middleware(checkpermission::class);
        Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy')->middleware(checkpermission::class);
        Route::post('/users/{id}/upload', [UserController::class, 'upload'])->name('users.upload')->middleware(checkpermission::class);
        Route::get('/users/create',[UserController::class, 'create'])->name('users.create')->middleware(checkpermission::class);
        Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware(checkpermission::class);
        Route::put('/users/{user}',[UserController::class, 'update'])->name('users.update')->middleware(checkpermission::class);
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware(checkpermission::class);
        Route::post('/users',[UserController::class, 'store'])->name('users.store')->middleware(checkpermission::class);
        Route::get('/users',[UserController::class, 'index'])->name('users.index')->middleware(checkpermission::class);

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

        Route::get('inusitta/recepcao', [UserController::class, 'indexInusittaRecepcao'])->name('inusittaRecepcao.index');
        Route::get('inusitta/recepcao/instrucao', [UserController::class, 'indexInusittaRecepcaoInstrucao'])->name('inusittaRecepcaoInstrucao.index');
        Route::get('inusitta/recepcao/procedimento',[UserController::class, 'indexInusittaRecepcaoProcedimento'])->name('inusittaRecepcaoProcedimento.index');
        Route::get('inusitta/recepcao/registro', [UserController::class, 'indexInusittaRecepcaoRegistro'])->name('inusittaRecepcaoRegistro.index');
        Route::get('inusitta/recepcao/formulario', [UserController::class, 'indexInusittaRecepcaoFormulario'])->name('inusittaRecepcaoFormulario.index');

        Route::get('inusitta/restaurante', [UserController::class, 'indexInusittaRestaurante'])->name('inusittaRestaurante.index');
        Route::get('inusitta/restaurante/instrucao', [UserController::class, 'indexInusittaRestauranteInstrucao'])->name('inusittaRestauranteInstrucao.index');
        Route::get('inusitta/restaurante/procedimento',[UserController::class, 'indexInusittaRestauranteProcedimento'])->name('inusittaRestauranteProcedimento.index');
        Route::get('inusitta/restaurante/registro', [UserController::class, 'indexInusittaRestauranteRegistro'])->name('inusittaRestauranteRegistro.index');
        Route::get('inusitta/restaurante/formulario', [UserController::class, 'indexInusittaRestauranteFormulario'])->name('inusittaRestauranteFormulario.index');

        Route::get('inusitta/rh', [UserController::class, 'indexInusittaRh'])->name('inusittaRh.index');
        Route::get('inusitta/rh/instrucao', [UserController::class, 'indexInusittaRhInstrucao'])->name('inusittaRhInstrucao.index');
        Route::get('inusitta/rh/procedimento',[UserController::class, 'indexInusittaRhProcedimento'])->name('inusittaRhProcedimento.index');
        Route::get('inusitta/rh/registro', [UserController::class, 'indexInusittaRhRegistro'])->name('inusittaRhRegistro.index');
        Route::get('inusitta/rh/formulario', [UserController::class, 'indexInusittaRhFormulario'])->name('inusittaRhFormulario.index');

        Route::get('inusitta/sac', [UserController::class, 'indexInusittaSac'])->name('inusittaSac.index');
        Route::get('inusitta/sac/instrucao', [UserController::class, 'indexInusittaSacInstrucao'])->name('inusittaSacInstrucao.index');
        Route::get('inusitta/sac/procedimento',[UserController::class, 'indexInusittaSacProcedimento'])->name('inusittaSacProcedimento.index');
        Route::get('inusitta/sac/registro', [UserController::class, 'indexInusittaSacRegistro'])->name('inusittaSacRegistro.index');
        Route::get('inusitta/sac/formulario', [UserController::class, 'indexInusittaSacFormulario'])->name('inusittaSacFormulario.index');

        Route::get('inusitta/sesmt', [UserController::class, 'indexInusittaSesmt'])->name('inusittaSesmt.index');
        Route::get('inusitta/sesmt/instrucao', [UserController::class, 'indexInusittaSesmtInstrucao'])->name('inusittaSesmtInstrucao.index');
        Route::get('inusitta/sesmt/procedimento',[UserController::class, 'indexInusittaSesmtProcedimento'])->name('inusittaSesmtProcedimento.index');
        Route::get('inusitta/sesmt/registro', [UserController::class, 'indexInusittaSesmtRegistro'])->name('inusittaSesmtRegistro.index');
        Route::get('inusitta/sesmt/formulario', [UserController::class, 'indexInusittaSesmtFormulario'])->name('inusittaSesmtFormulario.index');

        Route::get('inusitta/projetos', [UserController::class, 'indexInusittaProjetos'])->name('inusittaProjetos.index');
        Route::get('inusitta/projetos/instrucao', [UserController::class, 'indexInusittaProjetosInstrucao'])->name('inusittaProjetosInstrucao.index');
        Route::get('inusitta/projetos/procedimento',[UserController::class, 'indexInusittaProjetosProcedimento'])->name('inusittaProjetosProcedimento.index');
        Route::get('inusitta/projetos/registro', [UserController::class, 'indexInusittaProjetosRegistro'])->name('inusittaProjetosRegistro.index');
        Route::get('inusitta/projetos/formulario', [UserController::class, 'indexInusittaProjetosFormulario'])->name('inusittaProjetosFormulario.index');

        Route::get('inusitta/transporte', [UserController::class, 'indexInusittaTransporte'])->name('inusittaTransporte.index');
        Route::get('inusitta/transporte/instrucao', [UserController::class, 'indexInusittaTransporteInstrucao'])->name('inusittaTransporteInstrucao.index');
        Route::get('inusitta/transporte/procedimento',[UserController::class, 'indexInusittaTransporteProcedimento'])->name('inusittaTransporteProcedimento.index');
        Route::get('inusitta/transporte/registro', [UserController::class, 'indexInusittaTransporteRegistro'])->name('inusittaTransporteRegistro.index');
        Route::get('inusitta/transporte/formulario', [UserController::class, 'indexInusittaTransporteFormulario'])->name('inusittaTransporteFormulario.index');

        Route::get('inusitta/atelie', [UserController::class, 'indexInusittaAtelie'])->name('inusittaAtelie.index');
        Route::get('inusitta/atelie/instrucao', [UserController::class, 'indexInusittaAtelieInstrucao'])->name('inusittaAtelieInstrucao.index');
        Route::get('inusitta/atelie/procedimento',[UserController::class, 'indexInusittaAtelieProcedimento'])->name('inusittaAtelieProcedimento.index');
        Route::get('inusitta/atelie/registro', [UserController::class, 'indexInusittaAtelieRegistro'])->name('inusittaAtelieRegistro.index');
        Route::get('inusitta/atelie/formulario', [UserController::class, 'indexInusittaAtelieFormulario'])->name('inusittaAtelieFormulario.index');

        Route::get('inusitta/corte', [UserController::class, 'indexInusittaCorte'])->name('inusittaCorte.index');
        Route::get('inusitta/corte/instrucao', [UserController::class, 'indexInusittaCorteInstrucao'])->name('inusittaCorteInstrucao.index');
        Route::get('inusitta/corte/procedimento',[UserController::class, 'indexInusittaCorteProcedimento'])->name('inusittaCorteProcedimento.index');
        Route::get('inusitta/corte/registro', [UserController::class, 'indexInusittaCorteRegistro'])->name('inusittaCorteRegistro.index');
        Route::get('inusitta/corte/formulario', [UserController::class, 'indexInusittaCorteFormulario'])->name('inusittaCorteFormulario.index');

        Route::get('inusitta/coladeira', [UserController::class, 'indexInusittaColadeira'])->name('inusittaColadeira.index');
        Route::get('inusitta/coladeira/instrucao', [UserController::class, 'indexInusittaColadeiraInstrucao'])->name('inusittaColadeiraInstrucao.index');
        Route::get('inusitta/coladeira/procedimento',[UserController::class, 'indexInusittaColadeiraProcedimento'])->name('inusittaColadeiraProcedimento.index');
        Route::get('inusitta/coladeira/registro', [UserController::class, 'indexInusittaColadeiraRegistro'])->name('inusittaColadeiraRegistro.index');
        Route::get('inusitta/coladeira/formulario', [UserController::class, 'indexInusittaColadeiraFormulario'])->name('inusittaColadeiraFormulario.index');

        Route::get('inusitta/furadeira', [UserController::class, 'indexInusittaFuradeira'])->name('inusittaFuradeira.index');
        Route::get('inusitta/furadeira/instrucao', [UserController::class, 'indexInusittaFuradeiraInstrucao'])->name('inusittaFuradeiraInstrucao.index');
        Route::get('inusitta/furadeira/procedimento',[UserController::class, 'indexInusittaFuradeiraProcedimento'])->name('inusittaFuradeiraProcedimento.index');
        Route::get('inusitta/furadeira/registro', [UserController::class, 'indexInusittaFuradeiraRegistro'])->name('inusittaFuradeiraRegistro.index');
        Route::get('inusitta/furadeira/formulario', [UserController::class, 'indexInusittaFuradeiraFormulario'])->name('inusittaFuradeiraFormulario.index');

        Route::get('inusitta/acabamento', [UserController::class, 'indexInusittaAcabamento'])->name('inusittaAcabamento.index');
        Route::get('inusitta/acabamento/instrucao', [UserController::class, 'indexInusittaAcabamentoInstrucao'])->name('inusittaAcabamentoInstrucao.index');
        Route::get('inusitta/acabamento/procedimento',[UserController::class, 'indexInusittaAcabamentoProcedimento'])->name('inusittaAcabamentoProcedimento.index');
        Route::get('inusitta/acabamento/registro', [UserController::class, 'indexInusittaAcabamentoRegistro'])->name('inusittaAcabamentoRegistro.index');
        Route::get('inusitta/acabamento/formulario', [UserController::class, 'indexInusittaAcabamentoFormulario'])->name('inusittaAcabamentoFormulario.index');

        Route::get('inusitta/embalagem', [UserController::class, 'indexInusittaEmbalagem'])->name('inusittaEmbalagem.index');
        Route::get('inusitta/embalagem/instrucao', [UserController::class, 'indexInusittaEmbalagemInstrucao'])->name('inusittaEmbalagemInstrucao.index');
        Route::get('inusitta/embalagem/procedimento',[UserController::class, 'indexInusittaEmbalagemProcedimento'])->name('inusittaEmbalagemProcedimento.index');
        Route::get('inusitta/embalagem/registro', [UserController::class, 'indexInusittaEmbalagemRegistro'])->name('inusittaEmbalagemRegistro.index');
        Route::get('inusitta/embalagem/formulario', [UserController::class, 'indexInusittaEmbalagemFormulario'])->name('inusittaEmbalagemFormulario.index');

        Route::get('inusitta/pintura', [UserController::class, 'indexInusittaPintura'])->name('inusittaPintura.index');
        Route::get('inusitta/pintura/instrucao', [UserController::class, 'indexInusittaPinturaInstrucao'])->name('inusittaPinturaInstrucao.index');
        Route::get('inusitta/pintura/procedimento',[UserController::class, 'indexInusittaPinturaProcedimento'])->name('inusittaPinturaProcedimento.index');
        Route::get('inusitta/pintura/registro', [UserController::class, 'indexInusittaPinturaRegistro'])->name('inusittaPinturaRegistro.index');
        Route::get('inusitta/pintura/formulario', [UserController::class, 'indexInusittaPinturaFormulario'])->name('inusittaPinturaFormulario.index');

        //======================================================

        // ROTAS PARA EMPRESA HAOS
        
        Route::get('/haos', [HaosController::class, 'indexHaos'])->name('haos.index');
        
        
        Route::get('/haos/ti', [HaosController::class, 'indexHaosTi'])->name('haosTi.index');
        Route::get('haos/ti/instrucao', [HaosController::class, 'indexHaosTiInstrucao'])->name('haosTiInstrucao.index');
        Route::get('haos/ti/procedimento',[HaosController::class, 'indexHaosTiProcedimento'])->name('haosTiProcedimento.index');
        Route::get('haos/ti/registro', [HaosController::class, 'indexHaosTiRegistro'])->name('haosTiRegistro.index');
        Route::get('haos/ti/formulario', [HaosController::class, 'indexHaosTiFormulario'])->name('haosTiFormulario.index');
        
        Route::get('haos/marketing', [HaosController::class, 'indexHaosMarketing'])->name('haosMarketing.index');
        Route::get('haos/marketing/instrucao', [HaosController::class, 'indexHaosMarketingInstrucao'])->name('haosMarketingInstrucao.index');
        Route::get('haos/marketing/procedimento',[HaosController::class, 'indexHaosMarketingProcedimento'])->name('haosMarketingProcedimento.index');
        Route::get('haos/marketing/registro', [HaosController::class, 'indexHaosMarketingRegistro'])->name('haosMarketingRegistro.index');
        Route::get('haos/marketing/formulario', [HaosController::class, 'indexHaosMarketingFormulario'])->name('haosMarketingFormulario.index');

        Route::get('haos/comercial', [HaosController::class, 'indexHaosComercial'])->name('haosComercial.index');
        Route::get('haos/comercial/instrucao', [HaosController::class, 'indexHaosComercialInstrucao'])->name('haosComercialInstrucao.index');
        Route::get('haos/comercial/procedimento',[HaosController::class, 'indexHaosComercialProcedimento'])->name('haosComercialProcedimento.index');
        Route::get('haos/comercial/registro', [HaosController::class, 'indexHaosComercialRegistro'])->name('haosComercialRegistro.index');
        Route::get('haos/comercial/formulario', [HaosController::class, 'indexHaosComercialFormulario'])->name('haosComercialFormulario.index');

        Route::get('haos/almoxarifado', [HaosController::class, 'indexHaosAlmoxarifado'])->name('haosAlmoxarifado.index');
        Route::get('haos/almoxarifado/instrucao', [HaosController::class, 'indexHaosAlmoxarifadoInstrucao'])->name('haosAlmoxarifadoInstrucao.index');
        Route::get('haos/almoxarifado/procedimento',[HaosController::class, 'indexHaosAlmoxarifadoProcedimento'])->name('haosAlmoxarifadoProcedimento.index');
        Route::get('haos/almoxarifado/registro', [HaosController::class, 'indexHaosAlmoxarifadoRegistro'])->name('haosAlmoxarifadoRegistro.index');
        Route::get('haos/almoxarifado/formulario', [HaosController::class, 'indexHaosAlmoxarifadoFormulario'])->name('haosAlmoxarifadoFormulario.index');

        Route::get('haos/assistencia', [HaosController::class, 'indexHaosAssistencia'])->name('haosAssistencia.index');
        Route::get('haos/assistencia/instrucao', [HaosController::class, 'indexHaosAssistenciaInstrucao'])->name('haosAssistenciaInstrucao.index');
        Route::get('haos/assistencia/procedimento',[HaosController::class, 'indexHaosAssistenciaProcedimento'])->name('haosAssistenciaProcedimento.index');
        Route::get('haos/assistencia/registro', [HaosController::class, 'indexHaosAssistenciaRegistro'])->name('haosAssistenciaRegistro.index');
        Route::get('haos/assistencia/formulario', [HaosController::class, 'indexHaosAssistenciaFormulario'])->name('haosAssistenciaFormulario.index');

        Route::get('haos/compras', [HaosController::class, 'indexHaosCompras'])->name('haosCompras.index');
        Route::get('haos/compras/instrucao', [HaosController::class, 'indexHaosComprasInstrucao'])->name('haosComprasInstrucao.index');
        Route::get('haos/compras/procedimento',[HaosController::class, 'indexHaosComprasProcedimento'])->name('haosComprasProcedimento.index');
        Route::get('haos/compras/registro', [HaosController::class, 'indexHaosComprasRegistro'])->name('haosComprasRegistro.index');
        Route::get('haos/compras/formulario', [HaosController::class, 'indexHaosComprasFormulario'])->name('haosComprasFormulario.index');

        Route::get('haos/contabilidade', [HaosController::class, 'indexHaosContabilidade'])->name('haosContabilidade.index');
        Route::get('haos/contabilidade/instrucao', [HaosController::class, 'indexHaosContabilidadeInstrucao'])->name('haosContabilidadeInstrucao.index');
        Route::get('haos/contabilidade/procedimento',[HaosController::class, 'indexHaosContabilidadeProcedimento'])->name('haosContabilidadeProcedimento.index');
        Route::get('haos/contabilidade/registro', [HaosController::class, 'indexHaosContabilidadeRegistro'])->name('haosContabilidadeRegistro.index');
        Route::get('haos/contabilidade/formulario', [HaosController::class, 'indexHaosContabilidadeFormulario'])->name('haosContabilidadeFormulario.index');

        Route::get('haos/contaspagar', [HaosController::class, 'indexHaosContasPagar'])->name('haosContasPagar.index');
        Route::get('haos/contaspagar/instrucao', [HaosController::class, 'indexHaosContasPagarInstrucao'])->name('haosContasPagarInstrucao.index');
        Route::get('haos/contaspagar/procedimento',[HaosController::class, 'indexHaosContasPagarProcedimento'])->name('haosContasPagarProcedimento.index');
        Route::get('haos/contaspagar/registro', [HaosController::class, 'indexHaosContasPagarRegistro'])->name('haosContasPagarRegistro.index');
        Route::get('haos/contaspagar/formulario', [HaosController::class, 'indexHaosContasPagarFormulario'])->name('haosContasPagarFormulario.index');

        Route::get('haos/contasreceber', [HaosController::class, 'indexHaosContasReceber'])->name('haosContasReceber.index');
        Route::get('haos/contasreceber/instrucao', [HaosController::class, 'indexHaosContasReceberInstrucao'])->name('haosContasReceberInstrucao.index');
        Route::get('haos/contasreceber/procedimento',[HaosController::class, 'indexHaosContasReceberProcedimento'])->name('haosContasReceberProcedimento.index');
        Route::get('haos/contasreceber/registro', [HaosController::class, 'indexHaosContasReceberRegistro'])->name('haosContasReceberRegistro.index');
        Route::get('haos/contasreceber/formulario', [HaosController::class, 'indexHaosContasReceberFormulario'])->name('haosContasReceberFormulario.index');

        Route::get('haos/custo', [HaosController::class, 'indexHaosCusto'])->name('haosCusto.index');
        Route::get('haos/custo/instrucao', [HaosController::class, 'indexHaosCustoInstrucao'])->name('haosCustoInstrucao.index');
        Route::get('haos/custo/procedimento',[HaosController::class, 'indexHaosCustoProcedimento'])->name('haosCustoProcedimento.index');
        Route::get('haos/custo/registro', [HaosController::class, 'indexHaosCustoRegistro'])->name('haosCustoRegistro.index');
        Route::get('haos/custo/formulario', [HaosController::class, 'indexHaosCustoFormulario'])->name('haosCustoFormulario.index');

        Route::get('haos/design', [HaosController::class, 'indexHaosDesign'])->name('haosDesign.index');
        Route::get('haos/design/instrucao', [HaosController::class, 'indexHaosDesignInstrucao'])->name('haosDesignInstrucao.index');
        Route::get('haos/design/procedimento',[HaosController::class, 'indexHaosDesignProcedimento'])->name('haosDesignProcedimento.index');
        Route::get('haos/design/registro', [HaosController::class, 'indexHaosDesignRegistro'])->name('haosDesignRegistro.index');
        Route::get('haos/design/formulario', [HaosController::class, 'indexHaosDesignFormulario'])->name('haosDesignFormulario.index');

        Route::get('haos/diretoriaadministrativa', [HaosController::class, 'indexHaosDiretoriaAdministrativa'])->name('haosDiretoriaAdministrativa.index');
        Route::get('haos/diretoriaadministrativa/instrucao', [HaosController::class, 'indexHaosDiretoriaAdministrativaInstrucao'])->name('haosDiretoriaAdministrativaInstrucao.index');
        Route::get('haos/diretoriaadministrativa/procedimento',[HaosController::class, 'indexHaosDiretoriaAdministrativaProcedimento'])->name('haosDiretoriaAdministrativaProcedimento.index');
        Route::get('haos/diretoriaadministrativa/registro', [HaosController::class, 'indexHaosDiretoriaAdministrativaRegistro'])->name('haosDiretoriaAdministrativaRegistro.index');
        Route::get('haos/diretoriaadministrativa/formulario', [HaosController::class, 'indexHaosDiretoriaAdministrativaFormulario'])->name('haosDiretoriaAdministrativaFormulario.index');

        Route::get('haos/diretoriacomercial', [HaosController::class, 'indexHaosDiretoriaComercial'])->name('haosDiretoriaComercial.index');
        Route::get('haos/diretoriacomercial/instrucao', [HaosController::class, 'indexHaosDiretoriaComercialInstrucao'])->name('haosDiretoriaComercialInstrucao.index');
        Route::get('haos/diretoriacomercial/procedimento',[HaosController::class, 'indexHaosDiretoriaComercialProcedimento'])->name('haosDiretoriaComercialProcedimento.index');
        Route::get('haos/diretoriacomercial/registro', [HaosController::class, 'indexHaosDiretoriaComercialRegistro'])->name('haosDiretoriaComercialRegistro.index');
        Route::get('haos/diretoriacomercial/formulario', [HaosController::class, 'indexHaosDiretoriaComercialFormulario'])->name('haosDiretoriaComercialFormulario.index');

        Route::get('haos/diretoriaindustrial', [HaosController::class, 'indexHaosDiretoriaIndustrial'])->name('haosDiretoriaIndustrial.index');
        Route::get('haos/diretoriaindustrial/instrucao', [HaosController::class, 'indexHaosDiretoriaIndustrialInstrucao'])->name('haosDiretoriaIndustrialInstrucao.index');
        Route::get('haos/diretoriaindustrial/procedimento',[HaosController::class, 'indexHaosDiretoriaIndustrialProcedimento'])->name('haosDiretoriaIndustrialProcedimento.index');
        Route::get('haos/diretoriaindustrial/registro', [HaosController::class, 'indexHaosDiretoriaIndustrialRegistro'])->name('haosDiretoriaIndustrialRegistro.index');
        Route::get('haos/diretoriaindustrial/formulario', [HaosController::class, 'indexHaosDiretoriaIndustrialFormulario'])->name('haosDiretoriaIndustrialFormulario.index');

        Route::get('haos/ecommerce', [HaosController::class, 'indexHaosEcommerce'])->name('haosEcommerce.index');
        Route::get('haos/ecommerce/instrucao', [HaosController::class, 'indexHaosEcommerceInstrucao'])->name('haosEcommerceInstrucao.index');
        Route::get('haos/ecommerce/procedimento',[HaosController::class, 'indexHaosEcommerceProcedimento'])->name('haosEcommerceProcedimento.index');
        Route::get('haos/ecommerce/registro', [HaosController::class, 'indexHaosEcommerceRegistro'])->name('haosEcommerceRegistro.index');
        Route::get('haos/ecommerce/formulario', [HaosController::class, 'indexHaosEcommerceFormulario'])->name('haosEcommerceFormulario.index');

        Route::get('haos/engenharia', [HaosController::class, 'indexHaosEngenharia'])->name('haosEngenharia.index');
        Route::get('haos/engenharia/instrucao', [HaosController::class, 'indexHaosEngenhariaInstrucao'])->name('haosEngenhariaInstrucao.index');
        Route::get('haos/engenharia/procedimento',[HaosController::class, 'indexHaosEngenhariaProcedimento'])->name('haosEngenhariaProcedimento.index');
        Route::get('haos/engenharia/registro', [HaosController::class, 'indexHaosEngenhariaRegistro'])->name('haosEngenhariaRegistro.index');
        Route::get('haos/engenharia/formulario', [HaosController::class, 'indexHaosEngenhariaFormulario'])->name('haosEngenhariaFormulario.index');

        Route::get('haos/expedicao', [HaosController::class, 'indexHaosExpedicao'])->name('haosExpedicao.index');
        Route::get('haos/expedicao/instrucao', [HaosController::class, 'indexHaosExpedicaoInstrucao'])->name('haosExpedicaoInstrucao.index');
        Route::get('haos/expedicao/procedimento',[HaosController::class, 'indexHaosExpedicaoProcedimento'])->name('haosExpedicaoProcedimento.index');
        Route::get('haos/expedicao/registro', [HaosController::class, 'indexHaosExpedicaoRegistro'])->name('haosExpedicaoRegistro.index');
        Route::get('haos/expedicao/formulario', [HaosController::class, 'indexHaosExpedicaoFormulario'])->name('haosExpedicaoFormulario.index');

        Route::get('haos/exportacao', [HaosController::class, 'indexHaosExportacao'])->name('haosExportacao.index');
        Route::get('haos/exportacao/instrucao', [HaosController::class, 'indexHaosExportacaoInstrucao'])->name('haosExportacaoInstrucao.index');
        Route::get('haos/exportacao/procedimento',[HaosController::class, 'indexHaosExportacaoProcedimento'])->name('haosExportacaoProcedimento.index');
        Route::get('haos/exportacao/registro', [HaosController::class, 'indexHaosExportacaoRegistro'])->name('haosExportacaoRegistro.index');
        Route::get('haos/exportacao/formulario', [HaosController::class, 'indexHaosExportacaoFormulario'])->name('haosExportacaoFormulario.index');

        Route::get('haos/faturamento', [HaosController::class, 'indexHaosFaturamento'])->name('haosFaturamento.index');
        Route::get('haos/faturamento/instrucao', [HaosController::class, 'indexHaosFaturamentoInstrucao'])->name('haosFaturamentoInstrucao.index');
        Route::get('haos/faturamento/procedimento',[HaosController::class, 'indexHaosFaturamentoProcedimento'])->name('haosFaturamentoProcedimento.index');
        Route::get('haos/faturamento/registro', [HaosController::class, 'indexHaosFaturamentoRegistro'])->name('haosFaturamentoRegistro.index');
        Route::get('haos/faturamento/formulario', [HaosController::class, 'indexHaosFaturamentoFormulario'])->name('haosFaturamentoFormulario.index');

        Route::get('haos/manutencao', [HaosController::class, 'indexHaosManutencao'])->name('haosManutencao.index');
        Route::get('haos/manutencao/instrucao', [HaosController::class, 'indexHaosManutencaoInstrucao'])->name('haosManutencaoInstrucao.index');
        Route::get('haos/manutencao/procedimento',[HaosController::class, 'indexHaosManutencaoProcedimento'])->name('haosManutencaoProcedimento.index');
        Route::get('haos/manutencao/registro', [HaosController::class, 'indexHaosManutencaoRegistro'])->name('haosManutencaoRegistro.index');
        Route::get('haos/manutencao/formulario', [HaosController::class, 'indexHaosManutencaoFormulario'])->name('haosManutencaoFormulario.index');

        Route::get('haos/ped', [HaosController::class, 'indexHaosPed'])->name('haosPed.index');
        Route::get('haos/ped/instrucao', [HaosController::class, 'indexHaosPedInstrucao'])->name('haosPedInstrucao.index');
        Route::get('haos/ped/procedimento',[HaosController::class, 'indexHaosPedProcedimento'])->name('haosPedProcedimento.index');
        Route::get('haos/ped/registro', [HaosController::class, 'indexHaosPedRegistro'])->name('haosPedRegistro.index');
        Route::get('haos/ped/formulario', [HaosController::class, 'indexHaosPedFormulario'])->name('haosPedFormulario.index');

        Route::get('haos/pmo', [HaosController::class, 'indexHaosPmo'])->name('haosPmo.index');
        Route::get('haos/pmo/instrucao', [HaosController::class, 'indexHaosPmoInstrucao'])->name('haosPmoInstrucao.index');
        Route::get('haos/pmo/procedimento',[HaosController::class, 'indexHaosPmoProcedimento'])->name('haosPmoProcedimento.index');
        Route::get('haos/pmo/registro', [HaosController::class, 'indexHaosPmoRegistro'])->name('haosPmoRegistro.index');
        Route::get('haos/pmo/formulario', [HaosController::class, 'indexHaosPmoFormulario'])->name('haosPmoFormulario.index');

        Route::get('haos/ppcp', [HaosController::class, 'indexHaosPpcp'])->name('haosPpcp.index');
        Route::get('haos/ppcp/instrucao', [HaosController::class, 'indexHaosPpcpInstrucao'])->name('haosPpcpInstrucao.index');
        Route::get('haos/ppcp/procedimento',[HaosController::class, 'indexHaosPpcpProcedimento'])->name('haosPpcpProcedimento.index');
        Route::get('haos/ppcp/registro', [HaosController::class, 'indexHaosPpcpRegistro'])->name('haosPpcpRegistro.index');
        Route::get('haos/ppcp/formulario', [HaosController::class, 'indexHaosPpcpFormulario'])->name('haosPpcpFormulario.index');

        Route::get('haos/qualidade', [HaosController::class, 'indexHaosQualidade'])->name('haosQualidade.index');
        Route::get('haos/qualidade/instrucao', [HaosController::class, 'indexHaosQualidadeInstrucao'])->name('haosQualidadeInstrucao.index');
        Route::get('haos/qualidade/procedimento',[HaosController::class, 'indexHaosQualidadeProcedimento'])->name('haosQualidadeProcedimento.index');
        Route::get('haos/qualidade/registro', [HaosController::class, 'indexHaosQualidadeRegistro'])->name('haosQualidadeRegistro.index');
        Route::get('haos/qualidade/formulario', [HaosController::class, 'indexHaosQualidadeFormulario'])->name('haosQualidadeFormulario.index');

        Route::get('haos/recepcao', [HaosController::class, 'indexHaosRecepcao'])->name('haosRecepcao.index');
        Route::get('haos/recepcao/instrucao', [HaosController::class, 'indexHaosRecepcaoInstrucao'])->name('haosRecepcaoInstrucao.index');
        Route::get('haos/recepcao/procedimento',[HaosController::class, 'indexHaosRecepcaoProcedimento'])->name('haosRecepcaoProcedimento.index');
        Route::get('haos/recepcao/registro', [HaosController::class, 'indexHaosRecepcaoRegistro'])->name('haosRecepcaoRegistro.index');
        Route::get('haos/recepcao/formulario', [HaosController::class, 'indexHaosRecepcaoFormulario'])->name('haosRecepcaoFormulario.index');

        Route::get('haos/restaurante', [HaosController::class, 'indexHaosRestaurante'])->name('haosRestaurante.index');
        Route::get('haos/restaurante/instrucao', [HaosController::class, 'indexHaosRestauranteInstrucao'])->name('haosRestauranteInstrucao.index');
        Route::get('haos/restaurante/procedimento',[HaosController::class, 'indexHaosRestauranteProcedimento'])->name('haosRestauranteProcedimento.index');
        Route::get('haos/restaurante/registro', [HaosController::class, 'indexHaosRestauranteRegistro'])->name('haosRestauranteRegistro.index');
        Route::get('haos/restaurante/formulario', [HaosController::class, 'indexHaosRestauranteFormulario'])->name('haosRestauranteFormulario.index');

        Route::get('haos/rh', [HaosController::class, 'indexHaosRh'])->name('haosRh.index');
        Route::get('haos/rh/instrucao', [HaosController::class, 'indexHaosRhInstrucao'])->name('haosRhInstrucao.index');
        Route::get('haos/rh/procedimento',[HaosController::class, 'indexHaosRhProcedimento'])->name('haosRhProcedimento.index');
        Route::get('haos/rh/registro', [HaosController::class, 'indexHaosRhRegistro'])->name('haosRhRegistro.index');
        Route::get('haos/rh/formulario', [HaosController::class, 'indexHaosRhFormulario'])->name('haosRhFormulario.index');

        Route::get('haos/sac', [HaosController::class, 'indexHaosSac'])->name('haosSac.index');
        Route::get('haos/sac/instrucao', [HaosController::class, 'indexHaosSacInstrucao'])->name('haosSacInstrucao.index');
        Route::get('haos/sac/procedimento',[HaosController::class, 'indexHaosSacProcedimento'])->name('haosSacProcedimento.index');
        Route::get('haos/sac/registro', [HaosController::class, 'indexHaosSacRegistro'])->name('haosSacRegistro.index');
        Route::get('haos/sac/formulario', [HaosController::class, 'indexHaosSacFormulario'])->name('haosSacFormulario.index');

        Route::get('haos/sesmt', [HaosController::class, 'indexHaosSesmt'])->name('haosSesmt.index');
        Route::get('haos/sesmt/instrucao', [HaosController::class, 'indexHaosSesmtInstrucao'])->name('haosSesmtInstrucao.index');
        Route::get('haos/sesmt/procedimento',[HaosController::class, 'indexHaosSesmtProcedimento'])->name('haosSesmtProcedimento.index');
        Route::get('haos/sesmt/registro', [HaosController::class, 'indexHaosSesmtRegistro'])->name('haosSesmtRegistro.index');
        Route::get('haos/sesmt/formulario', [HaosController::class, 'indexHaosSesmtFormulario'])->name('haosSesmtFormulario.index');

        Route::get('haos/projetos', [HaosController::class, 'indexHaosProjetos'])->name('haosProjetos.index');
        Route::get('haos/projetos/instrucao', [HaosController::class, 'indexHaosProjetosInstrucao'])->name('haosProjetosInstrucao.index');
        Route::get('haos/projetos/procedimento',[HaosController::class, 'indexHaosProjetosProcedimento'])->name('haosProjetosProcedimento.index');
        Route::get('haos/projetos/registro', [HaosController::class, 'indexHaosProjetosRegistro'])->name('haosProjetosRegistro.index');
        Route::get('haos/projetos/formulario', [HaosController::class, 'indexHaosProjetosFormulario'])->name('haosProjetosFormulario.index');

        Route::get('haos/transporte', [HaosController::class, 'indexHaosTransporte'])->name('haosTransporte.index');
        Route::get('haos/transporte/instrucao', [HaosController::class, 'indexHaosTransporteInstrucao'])->name('haosTransporteInstrucao.index');
        Route::get('haos/transporte/procedimento',[HaosController::class, 'indexHaosTransporteProcedimento'])->name('haosTransporteProcedimento.index');
        Route::get('haos/transporte/registro', [HaosController::class, 'indexHaosTransporteRegistro'])->name('haosTransporteRegistro.index');
        Route::get('haos/transporte/formulario', [HaosController::class, 'indexHaosTransporteFormulario'])->name('haosTransporteFormulario.index');

        Route::get('haos/atelie', [HaosController::class, 'indexHaosAtelie'])->name('haosAtelie.index');
        Route::get('haos/atelie/instrucao', [HaosController::class, 'indexHaosAtelieInstrucao'])->name('haosAtelieInstrucao.index');
        Route::get('haos/atelie/procedimento',[HaosController::class, 'indexHaosAtelieProcedimento'])->name('haosAtelieProcedimento.index');
        Route::get('haos/atelie/registro', [HaosController::class, 'indexHaosAtelieRegistro'])->name('haosAtelieRegistro.index');
        Route::get('haos/atelie/formulario', [HaosController::class, 'indexHaosAtelieFormulario'])->name('haosAtelieFormulario.index');

        Route::get('haos/corte', [HaosController::class, 'indexHaosCorte'])->name('haosCorte.index');
        Route::get('haos/corte/instrucao', [HaosController::class, 'indexHaosCorteInstrucao'])->name('haosCorteInstrucao.index');
        Route::get('haos/corte/procedimento',[HaosController::class, 'indexHaosCorteProcedimento'])->name('haosCorteProcedimento.index');
        Route::get('haos/corte/registro', [HaosController::class, 'indexHaosCorteRegistro'])->name('haosCorteRegistro.index');
        Route::get('haos/corte/formulario', [HaosController::class, 'indexHaosCorteFormulario'])->name('haosCorteFormulario.index');

        Route::get('haos/coladeira', [HaosController::class, 'indexHaosColadeira'])->name('haosColadeira.index');
        Route::get('haos/coladeira/instrucao', [HaosController::class, 'indexHaosColadeiraInstrucao'])->name('haosColadeiraInstrucao.index');
        Route::get('haos/coladeira/procedimento',[HaosController::class, 'indexHaosColadeiraProcedimento'])->name('haosColadeiraProcedimento.index');
        Route::get('haos/coladeira/registro', [HaosController::class, 'indexHaosColadeiraRegistro'])->name('haosColadeiraRegistro.index');
        Route::get('haos/coladeira/formulario', [HaosController::class, 'indexHaosColadeiraFormulario'])->name('haosColadeiraFormulario.index');

        Route::get('haos/furadeira', [HaosController::class, 'indexHaosFuradeira'])->name('haosFuradeira.index');
        Route::get('haos/furadeira/instrucao', [HaosController::class, 'indexHaosFuradeiraInstrucao'])->name('haosFuradeiraInstrucao.index');
        Route::get('haos/furadeira/procedimento',[HaosController::class, 'indexHaosFuradeiraProcedimento'])->name('haosFuradeiraProcedimento.index');
        Route::get('haos/furadeira/registro', [HaosController::class, 'indexHaosFuradeiraRegistro'])->name('haosFuradeiraRegistro.index');
        Route::get('haos/furadeira/formulario', [HaosController::class, 'indexHaosFuradeiraFormulario'])->name('haosFuradeiraFormulario.index');

        Route::get('haos/acabamento', [HaosController::class, 'indexHaosAcabamento'])->name('haosAcabamento.index');
        Route::get('haos/acabamento/instrucao', [HaosController::class, 'indexHaosAcabamentoInstrucao'])->name('haosAcabamentoInstrucao.index');
        Route::get('haos/acabamento/procedimento',[HaosController::class, 'indexHaosAcabamentoProcedimento'])->name('haosAcabamentoProcedimento.index');
        Route::get('haos/acabamento/registro', [HaosController::class, 'indexHaosAcabamentoRegistro'])->name('haosAcabamentoRegistro.index');
        Route::get('haos/acabamento/formulario', [HaosController::class, 'indexHaosAcabamentoFormulario'])->name('haosAcabamentoFormulario.index');

        Route::get('haos/embalagem', [HaosController::class, 'indexHaosEmbalagem'])->name('haosEmbalagem.index');
        Route::get('haos/embalagem/instrucao', [HaosController::class, 'indexHaosEmbalagemInstrucao'])->name('haosEmbalagemInstrucao.index');
        Route::get('haos/embalagem/procedimento',[HaosController::class, 'indexHaosEmbalagemProcedimento'])->name('haosEmbalagemProcedimento.index');
        Route::get('haos/embalagem/registro', [HaosController::class, 'indexHaosEmbalagemRegistro'])->name('haosEmbalagemRegistro.index');
        Route::get('haos/embalagem/formulario', [HaosController::class, 'indexHaosEmbalagemFormulario'])->name('haosEmbalagemFormulario.index');

        Route::get('haos/pintura', [HaosController::class, 'indexHaosPintura'])->name('haosPintura.index');
        Route::get('haos/pintura/instrucao', [HaosController::class, 'indexHaosPinturaInstrucao'])->name('haosPinturaInstrucao.index');
        Route::get('haos/pintura/procedimento',[HaosController::class, 'indexHaosPinturaProcedimento'])->name('haosPinturaProcedimento.index');
        Route::get('haos/pintura/registro', [HaosController::class, 'indexHaosPinturaRegistro'])->name('haosPinturaRegistro.index');
        Route::get('haos/pintura/formulario', [HaosController::class, 'indexHaosPinturaFormulario'])->name('haosPinturaFormulario.index');

        //==============================================================

        //======================================================

        // ROTAS PARA EMPRESA ARTEA
        
        Route::get('/artea', [ArteaController::class, 'indexArtea'])->name('artea.index');
        
        
        Route::get('/artea/ti', [ArteaController::class, 'indexArteaTi'])->name('arteaTi.index');
        Route::get('artea/ti/instrucao', [ArteaController::class, 'indexArteaTiInstrucao'])->name('arteaTiInstrucao.index');
        Route::get('artea/ti/procedimento',[ArteaController::class, 'indexArteaTiProcedimento'])->name('arteaTiProcedimento.index');
        Route::get('artea/ti/registro', [ArteaController::class, 'indexArteaTiRegistro'])->name('arteaTiRegistro.index');
        Route::get('artea/ti/formulario', [ArteaController::class, 'indexArteaTiFormulario'])->name('arteaTiFormulario.index');
        
        Route::get('artea/marketing', [ArteaController::class, 'indexArteaMarketing'])->name('arteaMarketing.index');
        Route::get('artea/marketing/instrucao', [ArteaController::class, 'indexArteaMarketingInstrucao'])->name('arteaMarketingInstrucao.index');
        Route::get('artea/marketing/procedimento',[ArteaController::class, 'indexArteaMarketingProcedimento'])->name('arteaMarketingProcedimento.index');
        Route::get('artea/marketing/registro', [ArteaController::class, 'indexArteaMarketingRegistro'])->name('arteaMarketingRegistro.index');
        Route::get('artea/marketing/formulario', [ArteaController::class, 'indexArteaMarketingFormulario'])->name('arteaMarketingFormulario.index');

        Route::get('artea/comercial', [ArteaController::class, 'indexArteaComercial'])->name('arteaComercial.index');
        Route::get('artea/comercial/instrucao', [ArteaController::class, 'indexArteaComercialInstrucao'])->name('arteaComercialInstrucao.index');
        Route::get('artea/comercial/procedimento',[ArteaController::class, 'indexArteaComercialProcedimento'])->name('arteaComercialProcedimento.index');
        Route::get('artea/comercial/registro', [ArteaController::class, 'indexArteaComercialRegistro'])->name('arteaComercialRegistro.index');
        Route::get('artea/comercial/formulario', [ArteaController::class, 'indexArteaComercialFormulario'])->name('arteaComercialFormulario.index');

        Route::get('artea/almoxarifado', [ArteaController::class, 'indexArteaAlmoxarifado'])->name('arteaAlmoxarifado.index');
        Route::get('artea/almoxarifado/instrucao', [ArteaController::class, 'indexArteaAlmoxarifadoInstrucao'])->name('arteaAlmoxarifadoInstrucao.index');
        Route::get('artea/almoxarifado/procedimento',[ArteaController::class, 'indexArteaAlmoxarifadoProcedimento'])->name('arteaAlmoxarifadoProcedimento.index');
        Route::get('artea/almoxarifado/registro', [ArteaController::class, 'indexArteaAlmoxarifadoRegistro'])->name('arteaAlmoxarifadoRegistro.index');
        Route::get('artea/almoxarifado/formulario', [ArteaController::class, 'indexArteaAlmoxarifadoFormulario'])->name('arteaAlmoxarifadoFormulario.index');

        Route::get('artea/assistencia', [ArteaController::class, 'indexArteaAssistencia'])->name('arteaAssistencia.index');
        Route::get('artea/assistencia/instrucao', [ArteaController::class, 'indexArteaAssistenciaInstrucao'])->name('arteaAssistenciaInstrucao.index');
        Route::get('artea/assistencia/procedimento',[ArteaController::class, 'indexArteaAssistenciaProcedimento'])->name('arteaAssistenciaProcedimento.index');
        Route::get('artea/assistencia/registro', [ArteaController::class, 'indexArteaAssistenciaRegistro'])->name('arteaAssistenciaRegistro.index');
        Route::get('artea/assistencia/formulario', [ArteaController::class, 'indexArteaAssistenciaFormulario'])->name('arteaAssistenciaFormulario.index');

        Route::get('artea/compras', [ArteaController::class, 'indexArteaCompras'])->name('arteaCompras.index');
        Route::get('artea/compras/instrucao', [ArteaController::class, 'indexArteaComprasInstrucao'])->name('arteaComprasInstrucao.index');
        Route::get('artea/compras/procedimento',[ArteaController::class, 'indexArteaComprasProcedimento'])->name('arteaComprasProcedimento.index');
        Route::get('artea/compras/registro', [ArteaController::class, 'indexArteaComprasRegistro'])->name('arteaComprasRegistro.index');
        Route::get('artea/compras/formulario', [ArteaController::class, 'indexArteaComprasFormulario'])->name('arteaComprasFormulario.index');

        Route::get('artea/contabilidade', [ArteaController::class, 'indexArteaContabilidade'])->name('arteaContabilidade.index');
        Route::get('artea/contabilidade/instrucao', [ArteaController::class, 'indexArteaContabilidadeInstrucao'])->name('arteaContabilidadeInstrucao.index');
        Route::get('artea/contabilidade/procedimento',[ArteaController::class, 'indexArteaContabilidadeProcedimento'])->name('arteaContabilidadeProcedimento.index');
        Route::get('artea/contabilidade/registro', [ArteaController::class, 'indexArteaContabilidadeRegistro'])->name('arteaContabilidadeRegistro.index');
        Route::get('artea/contabilidade/formulario', [ArteaController::class, 'indexArteaContabilidadeFormulario'])->name('arteaContabilidadeFormulario.index');

        Route::get('artea/contaspagar', [ArteaController::class, 'indexArteaContasPagar'])->name('arteaContasPagar.index');
        Route::get('artea/contaspagar/instrucao', [ArteaController::class, 'indexArteaContasPagarInstrucao'])->name('arteaContasPagarInstrucao.index');
        Route::get('artea/contaspagar/procedimento',[ArteaController::class, 'indexArteaContasPagarProcedimento'])->name('arteaContasPagarProcedimento.index');
        Route::get('artea/contaspagar/registro', [ArteaController::class, 'indexArteaContasPagarRegistro'])->name('arteaContasPagarRegistro.index');
        Route::get('artea/contaspagar/formulario', [ArteaController::class, 'indexArteaContasPagarFormulario'])->name('arteaContasPagarFormulario.index');

        Route::get('artea/contasreceber', [ArteaController::class, 'indexArteaContasReceber'])->name('arteaContasReceber.index');
        Route::get('artea/contasreceber/instrucao', [ArteaController::class, 'indexArteaContasReceberInstrucao'])->name('arteaContasReceberInstrucao.index');
        Route::get('artea/contasreceber/procedimento',[ArteaController::class, 'indexArteaContasReceberProcedimento'])->name('arteaContasReceberProcedimento.index');
        Route::get('artea/contasreceber/registro', [ArteaController::class, 'indexArteaContasReceberRegistro'])->name('arteaContasReceberRegistro.index');
        Route::get('artea/contasreceber/formulario', [ArteaController::class, 'indexArteaContasReceberFormulario'])->name('arteaContasReceberFormulario.index');

        Route::get('artea/custo', [ArteaController::class, 'indexArteaCusto'])->name('arteaCusto.index');
        Route::get('artea/custo/instrucao', [ArteaController::class, 'indexArteaCustoInstrucao'])->name('arteaCustoInstrucao.index');
        Route::get('artea/custo/procedimento',[ArteaController::class, 'indexArteaCustoProcedimento'])->name('arteaCustoProcedimento.index');
        Route::get('artea/custo/registro', [ArteaController::class, 'indexArteaCustoRegistro'])->name('arteaCustoRegistro.index');
        Route::get('artea/custo/formulario', [ArteaController::class, 'indexArteaCustoFormulario'])->name('arteaCustoFormulario.index');

        Route::get('artea/design', [ArteaController::class, 'indexArteaDesign'])->name('arteaDesign.index');
        Route::get('artea/design/instrucao', [ArteaController::class, 'indexArteaDesignInstrucao'])->name('arteaDesignInstrucao.index');
        Route::get('artea/design/procedimento',[ArteaController::class, 'indexArteaDesignProcedimento'])->name('arteaDesignProcedimento.index');
        Route::get('artea/design/registro', [ArteaController::class, 'indexArteaDesignRegistro'])->name('arteaDesignRegistro.index');
        Route::get('artea/design/formulario', [ArteaController::class, 'indexArteaDesignFormulario'])->name('arteaDesignFormulario.index');

        Route::get('artea/diretoriaadministrativa', [ArteaController::class, 'indexArteaDiretoriaAdministrativa'])->name('arteaDiretoriaAdministrativa.index');
        Route::get('artea/diretoriaadministrativa/instrucao', [ArteaController::class, 'indexArteaDiretoriaAdministrativaInstrucao'])->name('arteaDiretoriaAdministrativaInstrucao.index');
        Route::get('artea/diretoriaadministrativa/procedimento',[ArteaController::class, 'indexArteaDiretoriaAdministrativaProcedimento'])->name('arteaDiretoriaAdministrativaProcedimento.index');
        Route::get('artea/diretoriaadministrativa/registro', [ArteaController::class, 'indexArteaDiretoriaAdministrativaRegistro'])->name('arteaDiretoriaAdministrativaRegistro.index');
        Route::get('artea/diretoriaadministrativa/formulario', [ArteaController::class, 'indexArteaDiretoriaAdministrativaFormulario'])->name('arteaDiretoriaAdministrativaFormulario.index');

        Route::get('artea/diretoriacomercial', [ArteaController::class, 'indexArteaDiretoriaComercial'])->name('arteaDiretoriaComercial.index');
        Route::get('artea/diretoriacomercial/instrucao', [ArteaController::class, 'indexArteaDiretoriaComercialInstrucao'])->name('arteaDiretoriaComercialInstrucao.index');
        Route::get('artea/diretoriacomercial/procedimento',[ArteaController::class, 'indexArteaDiretoriaComercialProcedimento'])->name('arteaDiretoriaComercialProcedimento.index');
        Route::get('artea/diretoriacomercial/registro', [ArteaController::class, 'indexArteaDiretoriaComercialRegistro'])->name('arteaDiretoriaComercialRegistro.index');
        Route::get('artea/diretoriacomercial/formulario', [ArteaController::class, 'indexArteaDiretoriaComercialFormulario'])->name('arteaDiretoriaComercialFormulario.index');

        Route::get('artea/diretoriaindustrial', [ArteaController::class, 'indexArteaDiretoriaIndustrial'])->name('arteaDiretoriaIndustrial.index');
        Route::get('artea/diretoriaindustrial/instrucao', [ArteaController::class, 'indexArteaDiretoriaIndustrialInstrucao'])->name('arteaDiretoriaIndustrialInstrucao.index');
        Route::get('artea/diretoriaindustrial/procedimento',[ArteaController::class, 'indexArteaDiretoriaIndustrialProcedimento'])->name('arteaDiretoriaIndustrialProcedimento.index');
        Route::get('artea/diretoriaindustrial/registro', [ArteaController::class, 'indexArteaDiretoriaIndustrialRegistro'])->name('arteaDiretoriaIndustrialRegistro.index');
        Route::get('artea/diretoriaindustrial/formulario', [ArteaController::class, 'indexArteaDiretoriaIndustrialFormulario'])->name('arteaDiretoriaIndustrialFormulario.index');

        Route::get('artea/ecommerce', [ArteaController::class, 'indexArteaEcommerce'])->name('arteaEcommerce.index');
        Route::get('artea/ecommerce/instrucao', [ArteaController::class, 'indexArteaEcommerceInstrucao'])->name('arteaEcommerceInstrucao.index');
        Route::get('artea/ecommerce/procedimento',[ArteaController::class, 'indexArteaEcommerceProcedimento'])->name('arteaEcommerceProcedimento.index');
        Route::get('artea/ecommerce/registro', [ArteaController::class, 'indexArteaEcommerceRegistro'])->name('arteaEcommerceRegistro.index');
        Route::get('artea/ecommerce/formulario', [ArteaController::class, 'indexArteaEcommerceFormulario'])->name('arteaEcommerceFormulario.index');

        Route::get('artea/engenharia', [ArteaController::class, 'indexArteaEngenharia'])->name('arteaEngenharia.index');
        Route::get('artea/engenharia/instrucao', [ArteaController::class, 'indexArteaEngenhariaInstrucao'])->name('arteaEngenhariaInstrucao.index');
        Route::get('artea/engenharia/procedimento',[ArteaController::class, 'indexArteaEngenhariaProcedimento'])->name('arteaEngenhariaProcedimento.index');
        Route::get('artea/engenharia/registro', [ArteaController::class, 'indexArteaEngenhariaRegistro'])->name('arteaEngenhariaRegistro.index');
        Route::get('artea/engenharia/formulario', [ArteaController::class, 'indexArteaEngenhariaFormulario'])->name('arteaEngenhariaFormulario.index');

        Route::get('artea/expedicao', [ArteaController::class, 'indexArteaExpedicao'])->name('arteaExpedicao.index');
        Route::get('artea/expedicao/instrucao', [ArteaController::class, 'indexArteaExpedicaoInstrucao'])->name('arteaExpedicaoInstrucao.index');
        Route::get('artea/expedicao/procedimento',[ArteaController::class, 'indexArteaExpedicaoProcedimento'])->name('arteaExpedicaoProcedimento.index');
        Route::get('artea/expedicao/registro', [ArteaController::class, 'indexArteaExpedicaoRegistro'])->name('arteaExpedicaoRegistro.index');
        Route::get('artea/expedicao/formulario', [ArteaController::class, 'indexArteaExpedicaoFormulario'])->name('arteaExpedicaoFormulario.index');

        Route::get('artea/exportacao', [ArteaController::class, 'indexArteaExportacao'])->name('arteaExportacao.index');
        Route::get('artea/exportacao/instrucao', [ArteaController::class, 'indexArteaExportacaoInstrucao'])->name('arteaExportacaoInstrucao.index');
        Route::get('artea/exportacao/procedimento',[ArteaController::class, 'indexArteaExportacaoProcedimento'])->name('arteaExportacaoProcedimento.index');
        Route::get('artea/exportacao/registro', [ArteaController::class, 'indexArteaExportacaoRegistro'])->name('arteaExportacaoRegistro.index');
        Route::get('artea/exportacao/formulario', [ArteaController::class, 'indexArteaExportacaoFormulario'])->name('arteaExportacaoFormulario.index');

        Route::get('artea/faturamento', [ArteaController::class, 'indexArteaFaturamento'])->name('arteaFaturamento.index');
        Route::get('artea/faturamento/instrucao', [ArteaController::class, 'indexArteaFaturamentoInstrucao'])->name('arteaFaturamentoInstrucao.index');
        Route::get('artea/faturamento/procedimento',[ArteaController::class, 'indexArteaFaturamentoProcedimento'])->name('arteaFaturamentoProcedimento.index');
        Route::get('artea/faturamento/registro', [ArteaController::class, 'indexArteaFaturamentoRegistro'])->name('arteaFaturamentoRegistro.index');
        Route::get('artea/faturamento/formulario', [ArteaController::class, 'indexArteaFaturamentoFormulario'])->name('arteaFaturamentoFormulario.index');

        Route::get('artea/manutencao', [ArteaController::class, 'indexArteaManutencao'])->name('arteaManutencao.index');
        Route::get('artea/manutencao/instrucao', [ArteaController::class, 'indexArteaManutencaoInstrucao'])->name('arteaManutencaoInstrucao.index');
        Route::get('artea/manutencao/procedimento',[ArteaController::class, 'indexArteaManutencaoProcedimento'])->name('arteaManutencaoProcedimento.index');
        Route::get('artea/manutencao/registro', [ArteaController::class, 'indexArteaManutencaoRegistro'])->name('arteaManutencaoRegistro.index');
        Route::get('artea/manutencao/formulario', [ArteaController::class, 'indexArteaManutencaoFormulario'])->name('arteaManutencaoFormulario.index');

        Route::get('artea/ped', [ArteaController::class, 'indexArteaPed'])->name('arteaPed.index');
        Route::get('artea/ped/instrucao', [ArteaController::class, 'indexArteaPedInstrucao'])->name('arteaPedInstrucao.index');
        Route::get('artea/ped/procedimento',[ArteaController::class, 'indexArteaPedProcedimento'])->name('arteaPedProcedimento.index');
        Route::get('artea/ped/registro', [ArteaController::class, 'indexArteaPedRegistro'])->name('arteaPedRegistro.index');
        Route::get('artea/ped/formulario', [ArteaController::class, 'indexArteaPedFormulario'])->name('arteaPedFormulario.index');

        Route::get('artea/pmo', [ArteaController::class, 'indexArteaPmo'])->name('arteaPmo.index');
        Route::get('artea/pmo/instrucao', [ArteaController::class, 'indexArteaPmoInstrucao'])->name('arteaPmoInstrucao.index');
        Route::get('artea/pmo/procedimento',[ArteaController::class, 'indexArteaPmoProcedimento'])->name('arteaPmoProcedimento.index');
        Route::get('artea/pmo/registro', [ArteaController::class, 'indexArteaPmoRegistro'])->name('arteaPmoRegistro.index');
        Route::get('artea/pmo/formulario', [ArteaController::class, 'indexArteaPmoFormulario'])->name('arteaPmoFormulario.index');

        Route::get('artea/ppcp', [ArteaController::class, 'indexArteaPpcp'])->name('arteaPpcp.index');
        Route::get('artea/ppcp/instrucao', [ArteaController::class, 'indexArteaPpcpInstrucao'])->name('arteaPpcpInstrucao.index');
        Route::get('artea/ppcp/procedimento',[ArteaController::class, 'indexArteaPpcpProcedimento'])->name('arteaPpcpProcedimento.index');
        Route::get('artea/ppcp/registro', [ArteaController::class, 'indexArteaPpcpRegistro'])->name('arteaPpcpRegistro.index');
        Route::get('artea/ppcp/formulario', [ArteaController::class, 'indexArteaPpcpFormulario'])->name('arteaPpcpFormulario.index');

        Route::get('artea/qualidade', [ArteaController::class, 'indexArteaQualidade'])->name('arteaQualidade.index');
        Route::get('artea/qualidade/instrucao', [ArteaController::class, 'indexArteaQualidadeInstrucao'])->name('arteaQualidadeInstrucao.index');
        Route::get('artea/qualidade/procedimento',[ArteaController::class, 'indexArteaQualidadeProcedimento'])->name('arteaQualidadeProcedimento.index');
        Route::get('artea/qualidade/registro', [ArteaController::class, 'indexArteaQualidadeRegistro'])->name('arteaQualidadeRegistro.index');
        Route::get('artea/qualidade/formulario', [ArteaController::class, 'indexArteaQualidadeFormulario'])->name('arteaQualidadeFormulario.index');

        Route::get('artea/recepcao', [ArteaController::class, 'indexArteaRecepcao'])->name('arteaRecepcao.index');
        Route::get('artea/recepcao/instrucao', [ArteaController::class, 'indexArteaRecepcaoInstrucao'])->name('arteaRecepcaoInstrucao.index');
        Route::get('artea/recepcao/procedimento',[ArteaController::class, 'indexArteaRecepcaoProcedimento'])->name('arteaRecepcaoProcedimento.index');
        Route::get('artea/recepcao/registro', [ArteaController::class, 'indexArteaRecepcaoRegistro'])->name('arteaRecepcaoRegistro.index');
        Route::get('artea/recepcao/formulario', [ArteaController::class, 'indexArteaRecepcaoFormulario'])->name('arteaRecepcaoFormulario.index');

        Route::get('artea/restaurante', [ArteaController::class, 'indexArteaRestaurante'])->name('arteaRestaurante.index');
        Route::get('artea/restaurante/instrucao', [ArteaController::class, 'indexArteaRestauranteInstrucao'])->name('arteaRestauranteInstrucao.index');
        Route::get('artea/restaurante/procedimento',[ArteaController::class, 'indexArteaRestauranteProcedimento'])->name('arteaRestauranteProcedimento.index');
        Route::get('artea/restaurante/registro', [ArteaController::class, 'indexArteaRestauranteRegistro'])->name('arteaRestauranteRegistro.index');
        Route::get('artea/restaurante/formulario', [ArteaController::class, 'indexArteaRestauranteFormulario'])->name('arteaRestauranteFormulario.index');

        Route::get('artea/rh', [ArteaController::class, 'indexArteaRh'])->name('arteaRh.index');
        Route::get('artea/rh/instrucao', [ArteaController::class, 'indexArteaRhInstrucao'])->name('arteaRhInstrucao.index');
        Route::get('artea/rh/procedimento',[ArteaController::class, 'indexArteaRhProcedimento'])->name('arteaRhProcedimento.index');
        Route::get('artea/rh/registro', [ArteaController::class, 'indexArteaRhRegistro'])->name('arteaRhRegistro.index');
        Route::get('artea/rh/formulario', [ArteaController::class, 'indexArteaRhFormulario'])->name('arteaRhFormulario.index');

        Route::get('artea/sac', [ArteaController::class, 'indexArteaSac'])->name('arteaSac.index');
        Route::get('artea/sac/instrucao', [ArteaController::class, 'indexArteaSacInstrucao'])->name('arteaSacInstrucao.index');
        Route::get('artea/sac/procedimento',[ArteaController::class, 'indexArteaSacProcedimento'])->name('arteaSacProcedimento.index');
        Route::get('artea/sac/registro', [ArteaController::class, 'indexArteaSacRegistro'])->name('arteaSacRegistro.index');
        Route::get('artea/sac/formulario', [ArteaController::class, 'indexArteaSacFormulario'])->name('arteaSacFormulario.index');

        Route::get('artea/sesmt', [ArteaController::class, 'indexArteaSesmt'])->name('arteaSesmt.index');
        Route::get('artea/sesmt/instrucao', [ArteaController::class, 'indexArteaSesmtInstrucao'])->name('arteaSesmtInstrucao.index');
        Route::get('artea/sesmt/procedimento',[ArteaController::class, 'indexArteaSesmtProcedimento'])->name('arteaSesmtProcedimento.index');
        Route::get('artea/sesmt/registro', [ArteaController::class, 'indexArteaSesmtRegistro'])->name('arteaSesmtRegistro.index');
        Route::get('artea/sesmt/formulario', [ArteaController::class, 'indexArteaSesmtFormulario'])->name('arteaSesmtFormulario.index');

        Route::get('artea/projetos', [ArteaController::class, 'indexArteaProjetos'])->name('arteaProjetos.index');
        Route::get('artea/projetos/instrucao', [ArteaController::class, 'indexArteaProjetosInstrucao'])->name('arteaProjetosInstrucao.index');
        Route::get('artea/projetos/procedimento',[ArteaController::class, 'indexArteaProjetosProcedimento'])->name('arteaProjetosProcedimento.index');
        Route::get('artea/projetos/registro', [ArteaController::class, 'indexArteaProjetosRegistro'])->name('arteaProjetosRegistro.index');
        Route::get('artea/projetos/formulario', [ArteaController::class, 'indexArteaProjetosFormulario'])->name('arteaProjetosFormulario.index');

        Route::get('artea/transporte', [ArteaController::class, 'indexArteaTransporte'])->name('arteaTransporte.index');
        Route::get('artea/transporte/instrucao', [ArteaController::class, 'indexArteaTransporteInstrucao'])->name('arteaTransporteInstrucao.index');
        Route::get('artea/transporte/procedimento',[ArteaController::class, 'indexArteaTransporteProcedimento'])->name('arteaTransporteProcedimento.index');
        Route::get('artea/transporte/registro', [ArteaController::class, 'indexArteaTransporteRegistro'])->name('arteaTransporteRegistro.index');
        Route::get('artea/transporte/formulario', [ArteaController::class, 'indexArteaTransporteFormulario'])->name('arteaTransporteFormulario.index');

        Route::get('artea/atelie', [ArteaController::class, 'indexArteaAtelie'])->name('arteaAtelie.index');
        Route::get('artea/atelie/instrucao', [ArteaController::class, 'indexArteaAtelieInstrucao'])->name('arteaAtelieInstrucao.index');
        Route::get('artea/atelie/procedimento',[ArteaController::class, 'indexArteaAtelieProcedimento'])->name('arteaAtelieProcedimento.index');
        Route::get('artea/atelie/registro', [ArteaController::class, 'indexArteaAtelieRegistro'])->name('arteaAtelieRegistro.index');
        Route::get('artea/atelie/formulario', [ArteaController::class, 'indexArteaAtelieFormulario'])->name('arteaAtelieFormulario.index');


        Route::get('artea/corte', [ArteaController::class, 'indexArteaCorte'])->name('arteaCorte.index');
        Route::get('artea/corte/instrucao', [ArteaController::class, 'indexArteaCorteInstrucao'])->name('arteaCorteInstrucao.index');
        Route::get('artea/corte/procedimento',[ArteaController::class, 'indexArteaCorteProcedimento'])->name('arteaCorteProcedimento.index');
        Route::get('artea/corte/registro', [ArteaController::class, 'indexArteaCorteRegistro'])->name('arteaCorteRegistro.index');
        Route::get('artea/corte/formulario', [ArteaController::class, 'indexArteaCorteFormulario'])->name('arteaCorteFormulario.index');

        Route::get('artea/coladeira', [ArteaController::class, 'indexArteaColadeira'])->name('arteaColadeira.index');
        Route::get('artea/coladeira/instrucao', [ArteaController::class, 'indexArteaColadeiraInstrucao'])->name('arteaColadeiraInstrucao.index');
        Route::get('artea/coladeira/procedimento',[ArteaController::class, 'indexArteaColadeiraProcedimento'])->name('arteaColadeiraProcedimento.index');
        Route::get('artea/coladeira/registro', [ArteaController::class, 'indexArteaColadeiraRegistro'])->name('arteaColadeiraRegistro.index');
        Route::get('artea/coladeira/formulario', [ArteaController::class, 'indexArteaColadeiraFormulario'])->name('arteaColadeiraFormulario.index');

        Route::get('artea/furadeira', [ArteaController::class, 'indexArteaFuradeira'])->name('arteaFuradeira.index');
        Route::get('artea/furadeira/instrucao', [ArteaController::class, 'indexArteaFuradeiraInstrucao'])->name('arteaFuradeiraInstrucao.index');
        Route::get('artea/furadeira/procedimento',[ArteaController::class, 'indexArteaFuradeiraProcedimento'])->name('arteaFuradeiraProcedimento.index');
        Route::get('artea/furadeira/registro', [ArteaController::class, 'indexArteaFuradeiraRegistro'])->name('arteaFuradeiraRegistro.index');
        Route::get('artea/furadeira/formulario', [ArteaController::class, 'indexArteaFuradeiraFormulario'])->name('arteaFuradeiraFormulario.index');

        Route::get('artea/acabamento', [ArteaController::class, 'indexArteaAcabamento'])->name('arteaAcabamento.index');
        Route::get('artea/acabamento/instrucao', [ArteaController::class, 'indexArteaAcabamentoInstrucao'])->name('arteaAcabamentoInstrucao.index');
        Route::get('artea/acabamento/procedimento',[ArteaController::class, 'indexArteaAcabamentoProcedimento'])->name('arteaAcabamentoProcedimento.index');
        Route::get('artea/acabamento/registro', [ArteaController::class, 'indexArteaAcabamentoRegistro'])->name('arteaAcabamentoRegistro.index');
        Route::get('artea/acabamento/formulario', [ArteaController::class, 'indexArteaAcabamentoFormulario'])->name('arteaAcabamentoFormulario.index');

        Route::get('artea/embalagem', [ArteaController::class, 'indexArteaEmbalagem'])->name('arteaEmbalagem.index');
        Route::get('artea/embalagem/instrucao', [ArteaController::class, 'indexArteaEmbalagemInstrucao'])->name('arteaEmbalagemInstrucao.index');
        Route::get('artea/embalagem/procedimento',[ArteaController::class, 'indexArteaEmbalagemProcedimento'])->name('arteaEmbalagemProcedimento.index');
        Route::get('artea/embalagem/registro', [ArteaController::class, 'indexArteaEmbalagemRegistro'])->name('arteaEmbalagemRegistro.index');
        Route::get('artea/embalagem/formulario', [ArteaController::class, 'indexArteaEmbalagemFormulario'])->name('arteaEmbalagemFormulario.index');

        Route::get('artea/pintura', [ArteaController::class, 'indexArteaPintura'])->name('arteaPintura.index');
        Route::get('artea/pintura/instrucao', [ArteaController::class, 'indexArteaPinturaInstrucao'])->name('arteaPinturaInstrucao.index');
        Route::get('artea/pintura/procedimento',[ArteaController::class, 'indexArteaPinturaProcedimento'])->name('arteaPinturaProcedimento.index');
        Route::get('artea/pintura/registro', [ArteaController::class, 'indexArteaPinturaRegistro'])->name('arteaPinturaRegistro.index');
        Route::get('artea/pintura/formulario', [ArteaController::class, 'indexArteaPinturaFormulario'])->name('arteaPinturaFormulario.index');

        //======================================================

        // ROTAS PARA EMPRESA LAVORATTO
        
        Route::get('/lavoratto', [LavorattoController::class, 'indexLavoratto'])->name('lavoratto.index');
        
        
        Route::get('/lavoratto/ti', [LavorattoController::class, 'indexLavorattoTi'])->name('lavorattoTi.index');
        Route::get('lavoratto/ti/instrucao', [LavorattoController::class, 'indexLavorattoTiInstrucao'])->name('lavorattoTiInstrucao.index');
        Route::get('lavoratto/ti/procedimento',[LavorattoController::class, 'indexLavorattoTiProcedimento'])->name('lavorattoTiProcedimento.index');
        Route::get('lavoratto/ti/registro', [LavorattoController::class, 'indexLavorattoTiRegistro'])->name('lavorattoTiRegistro.index');
        Route::get('lavoratto/ti/formulario', [LavorattoController::class, 'indexLavorattoTiFormulario'])->name('lavorattoTiFormulario.index');
        
        Route::get('lavoratto/marketing', [LavorattoController::class, 'indexLavorattoMarketing'])->name('lavorattoMarketing.index');
        Route::get('lavoratto/marketing/instrucao', [LavorattoController::class, 'indexLavorattoMarketingInstrucao'])->name('lavorattoMarketingInstrucao.index');
        Route::get('lavoratto/marketing/procedimento',[LavorattoController::class, 'indexLavorattoMarketingProcedimento'])->name('lavorattoMarketingProcedimento.index');
        Route::get('lavoratto/marketing/registro', [LavorattoController::class, 'indexLavorattoMarketingRegistro'])->name('lavorattoMarketingRegistro.index');
        Route::get('lavoratto/marketing/formulario', [LavorattoController::class, 'indexLavorattoMarketingFormulario'])->name('lavorattoMarketingFormulario.index');

        Route::get('lavoratto/comercial', [LavorattoController::class, 'indexLavorattoComercial'])->name('lavorattoComercial.index');
        Route::get('lavoratto/comercial/instrucao', [LavorattoController::class, 'indexLavorattoComercialInstrucao'])->name('lavorattoComercialInstrucao.index');
        Route::get('lavoratto/comercial/procedimento',[LavorattoController::class, 'indexLavorattoComercialProcedimento'])->name('lavorattoComercialProcedimento.index');
        Route::get('lavoratto/comercial/registro', [LavorattoController::class, 'indexLavorattoComercialRegistro'])->name('lavorattoComercialRegistro.index');
        Route::get('lavoratto/comercial/formulario', [LavorattoController::class, 'indexLavorattoComercialFormulario'])->name('lavorattoComercialFormulario.index');

        Route::get('lavoratto/almoxarifado', [LavorattoController::class, 'indexLavorattoAlmoxarifado'])->name('lavorattoAlmoxarifado.index');
        Route::get('lavoratto/almoxarifado/instrucao', [LavorattoController::class, 'indexLavorattoAlmoxarifadoInstrucao'])->name('lavorattoAlmoxarifadoInstrucao.index');
        Route::get('lavoratto/almoxarifado/procedimento',[LavorattoController::class, 'indexLavorattoAlmoxarifadoProcedimento'])->name('lavorattoAlmoxarifadoProcedimento.index');
        Route::get('lavoratto/almoxarifado/registro', [LavorattoController::class, 'indexLavorattoAlmoxarifadoRegistro'])->name('lavorattoAlmoxarifadoRegistro.index');
        Route::get('lavoratto/almoxarifado/formulario', [LavorattoController::class, 'indexLavorattoAlmoxarifadoFormulario'])->name('lavorattoAlmoxarifadoFormulario.index');

        Route::get('lavoratto/assistencia', [LavorattoController::class, 'indexLavorattoAssistencia'])->name('lavorattoAssistencia.index');
        Route::get('lavoratto/assistencia/instrucao', [LavorattoController::class, 'indexLavorattoAssistenciaInstrucao'])->name('lavorattoAssistenciaInstrucao.index');
        Route::get('lavoratto/assistencia/procedimento',[LavorattoController::class, 'indexLavorattoAssistenciaProcedimento'])->name('lavorattoAssistenciaProcedimento.index');
        Route::get('lavoratto/assistencia/registro', [LavorattoController::class, 'indexLavorattoAssistenciaRegistro'])->name('lavorattoAssistenciaRegistro.index');
        Route::get('lavoratto/assistencia/formulario', [LavorattoController::class, 'indexLavorattoAssistenciaFormulario'])->name('lavorattoAssistenciaFormulario.index');

        Route::get('lavoratto/compras', [LavorattoController::class, 'indexLavorattoCompras'])->name('lavorattoCompras.index');
        Route::get('lavoratto/compras/instrucao', [LavorattoController::class, 'indexLavorattoComprasInstrucao'])->name('lavorattoComprasInstrucao.index');
        Route::get('lavoratto/compras/procedimento',[LavorattoController::class, 'indexLavorattoComprasProcedimento'])->name('lavorattoComprasProcedimento.index');
        Route::get('lavoratto/compras/registro', [LavorattoController::class, 'indexLavorattoComprasRegistro'])->name('lavorattoComprasRegistro.index');
        Route::get('lavoratto/compras/formulario', [LavorattoController::class, 'indexLavorattoComprasFormulario'])->name('lavorattoComprasFormulario.index');

        Route::get('lavoratto/contabilidade', [LavorattoController::class, 'indexLavorattoContabilidade'])->name('lavorattoContabilidade.index');
        Route::get('lavoratto/contabilidade/instrucao', [LavorattoController::class, 'indexLavorattoContabilidadeInstrucao'])->name('lavorattoContabilidadeInstrucao.index');
        Route::get('lavoratto/contabilidade/procedimento',[LavorattoController::class, 'indexLavorattoContabilidadeProcedimento'])->name('lavorattoContabilidadeProcedimento.index');
        Route::get('lavoratto/contabilidade/registro', [LavorattoController::class, 'indexLavorattoContabilidadeRegistro'])->name('lavorattoContabilidadeRegistro.index');
        Route::get('lavoratto/contabilidade/formulario', [LavorattoController::class, 'indexLavorattoContabilidadeFormulario'])->name('lavorattoContabilidadeFormulario.index');

        Route::get('lavoratto/contaspagar', [LavorattoController::class, 'indexLavorattoContasPagar'])->name('lavorattoContasPagar.index');
        Route::get('lavoratto/contaspagar/instrucao', [LavorattoController::class, 'indexLavorattoContasPagarInstrucao'])->name('lavorattoContasPagarInstrucao.index');
        Route::get('lavoratto/contaspagar/procedimento',[LavorattoController::class, 'indexLavorattoContasPagarProcedimento'])->name('lavorattoContasPagarProcedimento.index');
        Route::get('lavoratto/contaspagar/registro', [LavorattoController::class, 'indexLavorattoContasPagarRegistro'])->name('lavorattoContasPagarRegistro.index');
        Route::get('lavoratto/contaspagar/formulario', [LavorattoController::class, 'indexLavorattoContasPagarFormulario'])->name('lavorattoContasPagarFormulario.index');

        Route::get('lavoratto/contasreceber', [LavorattoController::class, 'indexLavorattoContasReceber'])->name('lavorattoContasReceber.index');
        Route::get('lavoratto/contasreceber/instrucao', [LavorattoController::class, 'indexLavorattoContasReceberInstrucao'])->name('lavorattoContasReceberInstrucao.index');
        Route::get('lavoratto/contasreceber/procedimento',[LavorattoController::class, 'indexLavorattoContasReceberProcedimento'])->name('lavorattoContasReceberProcedimento.index');
        Route::get('lavoratto/contasreceber/registro', [LavorattoController::class, 'indexLavorattoContasReceberRegistro'])->name('lavorattoContasReceberRegistro.index');
        Route::get('lavoratto/contasreceber/formulario', [LavorattoController::class, 'indexLavorattoContasReceberFormulario'])->name('lavorattoContasReceberFormulario.index');

        Route::get('lavoratto/custo', [LavorattoController::class, 'indexLavorattoCusto'])->name('lavorattoCusto.index');
        Route::get('lavoratto/custo/instrucao', [LavorattoController::class, 'indexLavorattoCustoInstrucao'])->name('lavorattoCustoInstrucao.index');
        Route::get('lavoratto/custo/procedimento',[LavorattoController::class, 'indexLavorattoCustoProcedimento'])->name('lavorattoCustoProcedimento.index');
        Route::get('lavoratto/custo/registro', [LavorattoController::class, 'indexLavorattoCustoRegistro'])->name('lavorattoCustoRegistro.index');
        Route::get('lavoratto/custo/formulario', [LavorattoController::class, 'indexLavorattoCustoFormulario'])->name('lavorattoCustoFormulario.index');

        Route::get('lavoratto/design', [LavorattoController::class, 'indexLavorattoDesign'])->name('lavorattoDesign.index');
        Route::get('lavoratto/design/instrucao', [LavorattoController::class, 'indexLavorattoDesignInstrucao'])->name('lavorattoDesignInstrucao.index');
        Route::get('lavoratto/design/procedimento',[LavorattoController::class, 'indexLavorattoDesignProcedimento'])->name('lavorattoDesignProcedimento.index');
        Route::get('lavoratto/design/registro', [LavorattoController::class, 'indexLavorattoDesignRegistro'])->name('lavorattoDesignRegistro.index');
        Route::get('lavoratto/design/formulario', [LavorattoController::class, 'indexLavorattoDesignFormulario'])->name('lavorattoDesignFormulario.index');

        Route::get('lavoratto/diretoriaadministrativa', [LavorattoController::class, 'indexLavorattoDiretoriaAdministrativa'])->name('lavorattoDiretoriaAdministrativa.index');
        Route::get('lavoratto/diretoriaadministrativa/instrucao', [LavorattoController::class, 'indexLavorattoDiretoriaAdministrativaInstrucao'])->name('lavorattoDiretoriaAdministrativaInstrucao.index');
        Route::get('lavoratto/diretoriaadministrativa/procedimento',[LavorattoController::class, 'indexLavorattoDiretoriaAdministrativaProcedimento'])->name('lavorattoDiretoriaAdministrativaProcedimento.index');
        Route::get('lavoratto/diretoriaadministrativa/registro', [LavorattoController::class, 'indexLavorattoDiretoriaAdministrativaRegistro'])->name('lavorattoDiretoriaAdministrativaRegistro.index');
        Route::get('lavoratto/diretoriaadministrativa/formulario', [LavorattoController::class, 'indexLavorattoDiretoriaAdministrativaFormulario'])->name('lavorattoDiretoriaAdministrativaFormulario.index');

        Route::get('lavoratto/diretoriacomercial', [LavorattoController::class, 'indexLavorattoDiretoriaComercial'])->name('lavorattoDiretoriaComercial.index');
        Route::get('lavoratto/diretoriacomercial/instrucao', [LavorattoController::class, 'indexLavorattoDiretoriaComercialInstrucao'])->name('lavorattoDiretoriaComercialInstrucao.index');
        Route::get('lavoratto/diretoriacomercial/procedimento',[LavorattoController::class, 'indexLavorattoDiretoriaComercialProcedimento'])->name('lavorattoDiretoriaComercialProcedimento.index');
        Route::get('lavoratto/diretoriacomercial/registro', [LavorattoController::class, 'indexLavorattoDiretoriaComercialRegistro'])->name('lavorattoDiretoriaComercialRegistro.index');
        Route::get('lavoratto/diretoriacomercial/formulario', [LavorattoController::class, 'indexLavorattoDiretoriaComercialFormulario'])->name('lavorattoDiretoriaComercialFormulario.index');

        Route::get('lavoratto/diretoriaindustrial', [LavorattoController::class, 'indexLavorattoDiretoriaIndustrial'])->name('lavorattoDiretoriaIndustrial.index');
        Route::get('lavoratto/diretoriaindustrial/instrucao', [LavorattoController::class, 'indexLavorattoDiretoriaIndustrialInstrucao'])->name('lavorattoDiretoriaIndustrialInstrucao.index');
        Route::get('lavoratto/diretoriaindustrial/procedimento',[LavorattoController::class, 'indexLavorattoDiretoriaIndustrialProcedimento'])->name('lavorattoDiretoriaIndustrialProcedimento.index');
        Route::get('lavoratto/diretoriaindustrial/registro', [LavorattoController::class, 'indexLavorattoDiretoriaIndustrialRegistro'])->name('lavorattoDiretoriaIndustrialRegistro.index');
        Route::get('lavoratto/diretoriaindustrial/formulario', [LavorattoController::class, 'indexLavorattoDiretoriaIndustrialFormulario'])->name('lavorattoDiretoriaIndustrialFormulario.index');

        Route::get('lavoratto/ecommerce', [LavorattoController::class, 'indexLavorattoEcommerce'])->name('lavorattoEcommerce.index');
        Route::get('lavoratto/ecommerce/instrucao', [LavorattoController::class, 'indexLavorattoEcommerceInstrucao'])->name('lavorattoEcommerceInstrucao.index');
        Route::get('lavoratto/ecommerce/procedimento',[LavorattoController::class, 'indexLavorattoEcommerceProcedimento'])->name('lavorattoEcommerceProcedimento.index');
        Route::get('lavoratto/ecommerce/registro', [LavorattoController::class, 'indexLavorattoEcommerceRegistro'])->name('lavorattoEcommerceRegistro.index');
        Route::get('lavoratto/ecommerce/formulario', [LavorattoController::class, 'indexLavorattoEcommerceFormulario'])->name('lavorattoEcommerceFormulario.index');

        Route::get('lavoratto/engenharia', [LavorattoController::class, 'indexLavorattoEngenharia'])->name('lavorattoEngenharia.index');
        Route::get('lavoratto/engenharia/instrucao', [LavorattoController::class, 'indexLavorattoEngenhariaInstrucao'])->name('lavorattoEngenhariaInstrucao.index');
        Route::get('lavoratto/engenharia/procedimento',[LavorattoController::class, 'indexLavorattoEngenhariaProcedimento'])->name('lavorattoEngenhariaProcedimento.index');
        Route::get('lavoratto/engenharia/registro', [LavorattoController::class, 'indexLavorattoEngenhariaRegistro'])->name('lavorattoEngenhariaRegistro.index');
        Route::get('lavoratto/engenharia/formulario', [LavorattoController::class, 'indexLavorattoEngenhariaFormulario'])->name('lavorattoEngenhariaFormulario.index');

        Route::get('lavoratto/expedicao', [LavorattoController::class, 'indexLavorattoExpedicao'])->name('lavorattoExpedicao.index');
        Route::get('lavoratto/expedicao/instrucao', [LavorattoController::class, 'indexLavorattoExpedicaoInstrucao'])->name('lavorattoExpedicaoInstrucao.index');
        Route::get('lavoratto/expedicao/procedimento',[LavorattoController::class, 'indexLavorattoExpedicaoProcedimento'])->name('lavorattoExpedicaoProcedimento.index');
        Route::get('lavoratto/expedicao/registro', [LavorattoController::class, 'indexLavorattoExpedicaoRegistro'])->name('lavorattoExpedicaoRegistro.index');
        Route::get('lavoratto/expedicao/formulario', [LavorattoController::class, 'indexLavorattoExpedicaoFormulario'])->name('lavorattoExpedicaoFormulario.index');

        Route::get('lavoratto/exportacao', [LavorattoController::class, 'indexLavorattoExportacao'])->name('lavorattoExportacao.index');
        Route::get('lavoratto/exportacao/instrucao', [LavorattoController::class, 'indexLavorattoExportacaoInstrucao'])->name('lavorattoExportacaoInstrucao.index');
        Route::get('lavoratto/exportacao/procedimento',[LavorattoController::class, 'indexLavorattoExportacaoProcedimento'])->name('lavorattoExportacaoProcedimento.index');
        Route::get('lavoratto/exportacao/registro', [LavorattoController::class, 'indexLavorattoExportacaoRegistro'])->name('lavorattoExportacaoRegistro.index');
        Route::get('lavoratto/exportacao/formulario', [LavorattoController::class, 'indexLavorattoExportacaoFormulario'])->name('lavorattoExportacaoFormulario.index');

        Route::get('lavoratto/faturamento', [LavorattoController::class, 'indexLavorattoFaturamento'])->name('lavorattoFaturamento.index');
        Route::get('lavoratto/faturamento/instrucao', [LavorattoController::class, 'indexLavorattoFaturamentoInstrucao'])->name('lavorattoFaturamentoInstrucao.index');
        Route::get('lavoratto/faturamento/procedimento',[LavorattoController::class, 'indexLavorattoFaturamentoProcedimento'])->name('lavorattoFaturamentoProcedimento.index');
        Route::get('lavoratto/faturamento/registro', [LavorattoController::class, 'indexLavorattoFaturamentoRegistro'])->name('lavorattoFaturamentoRegistro.index');
        Route::get('lavoratto/faturamento/formulario', [LavorattoController::class, 'indexLavorattoFaturamentoFormulario'])->name('lavorattoFaturamentoFormulario.index');

        Route::get('lavoratto/manutencao', [LavorattoController::class, 'indexLavorattoManutencao'])->name('lavorattoManutencao.index');
        Route::get('lavoratto/manutencao/instrucao', [LavorattoController::class, 'indexLavorattoManutencaoInstrucao'])->name('lavorattoManutencaoInstrucao.index');
        Route::get('lavoratto/manutencao/procedimento',[LavorattoController::class, 'indexLavorattoManutencaoProcedimento'])->name('lavorattoManutencaoProcedimento.index');
        Route::get('lavoratto/manutencao/registro', [LavorattoController::class, 'indexLavorattoManutencaoRegistro'])->name('lavorattoManutencaoRegistro.index');
        Route::get('lavoratto/manutencao/formulario', [LavorattoController::class, 'indexLavorattoManutencaoFormulario'])->name('lavorattoManutencaoFormulario.index');

        Route::get('lavoratto/ped', [LavorattoController::class, 'indexLavorattoPed'])->name('lavorattoPed.index');
        Route::get('lavoratto/ped/instrucao', [LavorattoController::class, 'indexLavorattoPedInstrucao'])->name('lavorattoPedInstrucao.index');
        Route::get('lavoratto/ped/procedimento',[LavorattoController::class, 'indexLavorattoPedProcedimento'])->name('lavorattoPedProcedimento.index');
        Route::get('lavoratto/ped/registro', [LavorattoController::class, 'indexLavorattoPedRegistro'])->name('lavorattoPedRegistro.index');
        Route::get('lavoratto/ped/formulario', [LavorattoController::class, 'indexLavorattoPedFormulario'])->name('lavorattoPedFormulario.index');

        Route::get('lavoratto/pmo', [LavorattoController::class, 'indexLavorattoPmo'])->name('lavorattoPmo.index');
        Route::get('lavoratto/pmo/instrucao', [LavorattoController::class, 'indexLavorattoPmoInstrucao'])->name('lavorattoPmoInstrucao.index');
        Route::get('lavoratto/pmo/procedimento',[LavorattoController::class, 'indexLavorattoPmoProcedimento'])->name('lavorattoPmoProcedimento.index');
        Route::get('lavoratto/pmo/registro', [LavorattoController::class, 'indexLavorattoPmoRegistro'])->name('lavorattoPmoRegistro.index');
        Route::get('lavoratto/pmo/formulario', [LavorattoController::class, 'indexLavorattoPmoFormulario'])->name('lavorattoPmoFormulario.index');

        Route::get('lavoratto/ppcp', [LavorattoController::class, 'indexLavorattoPpcp'])->name('lavorattoPpcp.index');
        Route::get('lavoratto/ppcp/instrucao', [LavorattoController::class, 'indexLavorattoPpcpInstrucao'])->name('lavorattoPpcpInstrucao.index');
        Route::get('lavoratto/ppcp/procedimento',[LavorattoController::class, 'indexLavorattoPpcpProcedimento'])->name('lavorattoPpcpProcedimento.index');
        Route::get('lavoratto/ppcp/registro', [LavorattoController::class, 'indexLavorattoPpcpRegistro'])->name('lavorattoPpcpRegistro.index');
        Route::get('lavoratto/ppcp/formulario', [LavorattoController::class, 'indexLavorattoPpcpFormulario'])->name('lavorattoPpcpFormulario.index');

        Route::get('lavoratto/qualidade', [LavorattoController::class, 'indexLavorattoQualidade'])->name('lavorattoQualidade.index');
        Route::get('lavoratto/qualidade/instrucao', [LavorattoController::class, 'indexLavorattoQualidadeInstrucao'])->name('lavorattoQualidadeInstrucao.index');
        Route::get('lavoratto/qualidade/procedimento',[LavorattoController::class, 'indexLavorattoQualidadeProcedimento'])->name('lavorattoQualidadeProcedimento.index');
        Route::get('lavoratto/qualidade/registro', [LavorattoController::class, 'indexLavorattoQualidadeRegistro'])->name('lavorattoQualidadeRegistro.index');
        Route::get('lavoratto/qualidade/formulario', [LavorattoController::class, 'indexLavorattoQualidadeFormulario'])->name('lavorattoQualidadeFormulario.index');

        Route::get('lavoratto/recepcao', [LavorattoController::class, 'indexLavorattoRecepcao'])->name('lavorattoRecepcao.index');
        Route::get('lavoratto/recepcao/instrucao', [LavorattoController::class, 'indexLavorattoRecepcaoInstrucao'])->name('lavorattoRecepcaoInstrucao.index');
        Route::get('lavoratto/recepcao/procedimento',[LavorattoController::class, 'indexLavorattoRecepcaoProcedimento'])->name('lavorattoRecepcaoProcedimento.index');
        Route::get('lavoratto/recepcao/registro', [LavorattoController::class, 'indexLavorattoRecepcaoRegistro'])->name('lavorattoRecepcaoRegistro.index');
        Route::get('lavoratto/recepcao/formulario', [LavorattoController::class, 'indexLavorattoRecepcaoFormulario'])->name('lavorattoRecepcaoFormulario.index');

        Route::get('lavoratto/restaurante', [LavorattoController::class, 'indexLavorattoRestaurante'])->name('lavorattoRestaurante.index');
        Route::get('lavoratto/restaurante/instrucao', [LavorattoController::class, 'indexLavorattoRestauranteInstrucao'])->name('lavorattoRestauranteInstrucao.index');
        Route::get('lavoratto/restaurante/procedimento',[LavorattoController::class, 'indexLavorattoRestauranteProcedimento'])->name('lavorattoRestauranteProcedimento.index');
        Route::get('lavoratto/restaurante/registro', [LavorattoController::class, 'indexLavorattoRestauranteRegistro'])->name('lavorattoRestauranteRegistro.index');
        Route::get('lavoratto/restaurante/formulario', [LavorattoController::class, 'indexLavorattoRestauranteFormulario'])->name('lavorattoRestauranteFormulario.index');

        Route::get('lavoratto/rh', [LavorattoController::class, 'indexLavorattoRh'])->name('lavorattoRh.index');
        Route::get('lavoratto/rh/instrucao', [LavorattoController::class, 'indexLavorattoRhInstrucao'])->name('lavorattoRhInstrucao.index');
        Route::get('lavoratto/rh/procedimento',[LavorattoController::class, 'indexLavorattoRhProcedimento'])->name('lavorattoRhProcedimento.index');
        Route::get('lavoratto/rh/registro', [LavorattoController::class, 'indexLavorattoRhRegistro'])->name('lavorattoRhRegistro.index');
        Route::get('lavoratto/rh/formulario', [LavorattoController::class, 'indexLavorattoRhFormulario'])->name('lavorattoRhFormulario.index');

        Route::get('lavoratto/sac', [LavorattoController::class, 'indexLavorattoSac'])->name('lavorattoSac.index');
        Route::get('lavoratto/sac/instrucao', [LavorattoController::class, 'indexLavorattoSacInstrucao'])->name('lavorattoSacInstrucao.index');
        Route::get('lavoratto/sac/procedimento',[LavorattoController::class, 'indexLavorattoSacProcedimento'])->name('lavorattoSacProcedimento.index');
        Route::get('lavoratto/sac/registro', [LavorattoController::class, 'indexLavorattoSacRegistro'])->name('lavorattoSacRegistro.index');
        Route::get('lavoratto/sac/formulario', [LavorattoController::class, 'indexLavorattoSacFormulario'])->name('lavorattoSacFormulario.index');

        Route::get('lavoratto/sesmt', [LavorattoController::class, 'indexLavorattoSesmt'])->name('lavorattoSesmt.index');
        Route::get('lavoratto/sesmt/instrucao', [LavorattoController::class, 'indexLavorattoSesmtInstrucao'])->name('lavorattoSesmtInstrucao.index');
        Route::get('lavoratto/sesmt/procedimento',[LavorattoController::class, 'indexLavorattoSesmtProcedimento'])->name('lavorattoSesmtProcedimento.index');
        Route::get('lavoratto/sesmt/registro', [LavorattoController::class, 'indexLavorattoSesmtRegistro'])->name('lavorattoSesmtRegistro.index');
        Route::get('lavoratto/sesmt/formulario', [LavorattoController::class, 'indexLavorattoSesmtFormulario'])->name('lavorattoSesmtFormulario.index');

        Route::get('lavoratto/projetos', [LavorattoController::class, 'indexLavorattoProjetos'])->name('lavorattoProjetos.index');
        Route::get('lavoratto/projetos/instrucao', [LavorattoController::class, 'indexLavorattoProjetosInstrucao'])->name('lavorattoProjetosInstrucao.index');
        Route::get('lavoratto/projetos/procedimento',[LavorattoController::class, 'indexLavorattoProjetosProcedimento'])->name('lavorattoProjetosProcedimento.index');
        Route::get('lavoratto/projetos/registro', [LavorattoController::class, 'indexLavorattoProjetosRegistro'])->name('lavorattoProjetosRegistro.index');
        Route::get('lavoratto/projetos/formulario', [LavorattoController::class, 'indexLavorattoProjetosFormulario'])->name('lavorattoProjetosFormulario.index');

        Route::get('lavoratto/transporte', [LavorattoController::class, 'indexLavorattoTransporte'])->name('lavorattoTransporte.index');
        Route::get('lavoratto/transporte/instrucao', [LavorattoController::class, 'indexLavorattoTransporteInstrucao'])->name('lavorattoTransporteInstrucao.index');
        Route::get('lavoratto/transporte/procedimento',[LavorattoController::class, 'indexLavorattoTransporteProcedimento'])->name('lavorattoTransporteProcedimento.index');
        Route::get('lavoratto/transporte/registro', [LavorattoController::class, 'indexLavorattoTransporteRegistro'])->name('lavorattoTransporteRegistro.index');
        Route::get('lavoratto/transporte/formulario', [LavorattoController::class, 'indexLavorattoTransporteFormulario'])->name('lavorattoTransporteFormulario.index');

        Route::get('lavoratto/atelie', [LavorattoController::class, 'indexLavorattoAtelie'])->name('lavorattoAtelie.index');
        Route::get('lavoratto/atelie/instrucao', [LavorattoController::class, 'indexLavorattoAtelieInstrucao'])->name('lavorattoAtelieInstrucao.index');
        Route::get('lavoratto/atelie/procedimento',[LavorattoController::class, 'indexLavorattoAtelieProcedimento'])->name('lavorattoAtelieProcedimento.index');
        Route::get('lavoratto/atelie/registro', [LavorattoController::class, 'indexLavorattoAtelieRegistro'])->name('lavorattoAtelieRegistro.index');
        Route::get('lavoratto/atelie/formulario', [LavorattoController::class, 'indexLavorattoAtelieFormulario'])->name('lavorattoAtelieFormulario.index');

        Route::get('lavoratto/corte', [LavorattoController::class, 'indexLavorattoCorte'])->name('lavorattoCorte.index');
        Route::get('lavoratto/corte/instrucao', [LavorattoController::class, 'indexLavorattoCorteInstrucao'])->name('lavorattoCorteInstrucao.index');
        Route::get('lavoratto/corte/procedimento',[LavorattoController::class, 'indexLavorattoCorteProcedimento'])->name('lavorattoCorteProcedimento.index');
        Route::get('lavoratto/corte/registro', [LavorattoController::class, 'indexLavorattoCorteRegistro'])->name('lavorattoCorteRegistro.index');
        Route::get('lavoratto/corte/formulario', [LavorattoController::class, 'indexLavorattoCorteFormulario'])->name('lavorattoCorteFormulario.index');

        Route::get('lavoratto/coladeira', [LavorattoController::class, 'indexLavorattoColadeira'])->name('lavorattoColadeira.index');
        Route::get('lavoratto/coladeira/instrucao', [LavorattoController::class, 'indexLavorattoColadeiraInstrucao'])->name('lavorattoColadeiraInstrucao.index');
        Route::get('lavoratto/coladeira/procedimento',[LavorattoController::class, 'indexLavorattoColadeiraProcedimento'])->name('lavorattoColadeiraProcedimento.index');
        Route::get('lavoratto/coladeira/registro', [LavorattoController::class, 'indexLavorattoColadeiraRegistro'])->name('lavorattoColadeiraRegistro.index');
        Route::get('lavoratto/coladeira/formulario', [LavorattoController::class, 'indexLavorattoColadeiraFormulario'])->name('lavorattoColadeiraFormulario.index');

        Route::get('lavoratto/furadeira', [LavorattoController::class, 'indexLavorattoFuradeira'])->name('lavorattoFuradeira.index');
        Route::get('lavoratto/furadeira/instrucao', [LavorattoController::class, 'indexLavorattoFuradeiraInstrucao'])->name('lavorattoFuradeiraInstrucao.index');
        Route::get('lavoratto/furadeira/procedimento',[LavorattoController::class, 'indexLavorattoFuradeiraProcedimento'])->name('lavorattoFuradeiraProcedimento.index');
        Route::get('lavoratto/furadeira/registro', [LavorattoController::class, 'indexLavorattoFuradeiraRegistro'])->name('lavorattoFuradeiraRegistro.index');
        Route::get('lavoratto/furadeira/formulario', [LavorattoController::class, 'indexLavorattoFuradeiraFormulario'])->name('lavorattoFuradeiraFormulario.index');

        Route::get('lavoratto/acabamento', [LavorattoController::class, 'indexLavorattoAcabamento'])->name('lavorattoAcabamento.index');
        Route::get('lavoratto/acabamento/instrucao', [LavorattoController::class, 'indexLavorattoAcabamentoInstrucao'])->name('lavorattoAcabamentoInstrucao.index');
        Route::get('lavoratto/acabamento/procedimento',[LavorattoController::class, 'indexLavorattoAcabamentoProcedimento'])->name('lavorattoAcabamentoProcedimento.index');
        Route::get('lavoratto/acabamento/registro', [LavorattoController::class, 'indexLavorattoAcabamentoRegistro'])->name('lavorattoAcabamentoRegistro.index');
        Route::get('lavoratto/acabamento/formulario', [LavorattoController::class, 'indexLavorattoAcabamentoFormulario'])->name('lavorattoAcabamentoFormulario.index');

        Route::get('lavoratto/embalagem', [LavorattoController::class, 'indexLavorattoEmbalagem'])->name('lavorattoEmbalagem.index');
        Route::get('lavoratto/embalagem/instrucao', [LavorattoController::class, 'indexLavorattoEmbalagemInstrucao'])->name('lavorattoEmbalagemInstrucao.index');
        Route::get('lavoratto/embalagem/procedimento',[LavorattoController::class, 'indexLavorattoEmbalagemProcedimento'])->name('lavorattoEmbalagemProcedimento.index');
        Route::get('lavoratto/embalagem/registro', [LavorattoController::class, 'indexLavorattoEmbalagemRegistro'])->name('lavorattoEmbalagemRegistro.index');
        Route::get('lavoratto/embalagem/formulario', [LavorattoController::class, 'indexLavorattoEmbalagemFormulario'])->name('lavorattoEmbalagemFormulario.index');

        Route::get('lavoratto/pintura', [LavorattoController::class, 'indexLavorattoPintura'])->name('lavorattoPintura.index');
        Route::get('lavoratto/pintura/instrucao', [LavorattoController::class, 'indexLavorattoPinturaInstrucao'])->name('lavorattoPinturaInstrucao.index');
        Route::get('lavoratto/pintura/procedimento',[LavorattoController::class, 'indexLavorattoPinturaProcedimento'])->name('lavorattoPinturaProcedimento.index');
        Route::get('lavoratto/pintura/registro', [LavorattoController::class, 'indexLavorattoPinturaRegistro'])->name('lavorattoPinturaRegistro.index');
        Route::get('lavoratto/pintura/formulario', [LavorattoController::class, 'indexLavorattoPinturaFormulario'])->name('lavorattoPinturaFormulario.index');


    });
    


//==============================================================
// ROTAS PARA FILES

Route::middleware(checkPermission::class)->group(function(){
    Route::post('/files/{id}/ativar', [FileController::class, 'ativar'])->name('files.ativar');
    Route::post('/files/{id}/inativar', [FileController::class, 'inativar'])->name('files.inativar');
    Route::post('/files/{id}/reprovar', [FileController::class, 'reprovar'])->name('files.reprovar');
    Route::post('/files/{id}/aprovar', [FileController::class, 'aprovar'])->name('files.aprovar');
    Route::get('/files/arquivosativos', [FileController::class, 'arquivosAtivos'])->name('arquivosAtivos.index');
    Route::get('/files/arquivosreprovados',[FileController::class, 'arquivosReprovados'])->name('arquivosReprovados.index');
    Route::get('/files/arquivosaprovados', [FileController::class, 'arquivosAprovados'])->name('arquivosAprovados.index');
    Route::get('/files/arquivosinativos', [FileController::class, 'arquivosInativos'])->name('arquivosInativos.index');
    Route::get('/files/aguardandoaprovacao', [FileController::class, 'aguardandoAprovacao'])->name('aguardandoAprovacao.index');
    Route::get('/files/search', [FileController::class, 'search'])->name('files.search');
    Route::delete('/files/{file}/destroy', [FileController::class, 'destroy'])->name('files.destroy');
    Route::post('/files/{id}/upload', [FileController::class, 'upload'])->name('files.upload');
    Route::get('/files/create',[FileController::class, 'create'])->name('files.create');
    Route::get('/files/{file}', [FileController::class, 'show'])->name('files.show');
    Route::put('/files/{file}',[FileController::class, 'update'])->name('files.update');
    Route::get('/files/{file}/edit', [FileController::class, 'edit'])->name('files.edit');
    Route::post('/files',[FileController::class, 'store'])->name('files.store');
    Route::get('/files',[FileController::class, 'index'])->name('files.index');
});
Route::get('/files/searchCommonUser', [FileController::class, 'searchCommonUser'])->name('filesCommonUser.search');
Route::get('/files/view/{id}', [FileController::class, 'view'])->name('files.view')->middleware('auth');

//==============================================================


//==============================================================
// ROTAS PARA EMPRESAS

Route::middleware([checkPermission::class])->group(function(){
    Route::delete('/companies/{company}/destroy', [CompanyController::class, 'destroy'])->name('companies.destroy');
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
    Route::put('/companies/{company}',[CompanyController::class, 'update'])->name('companies.update');
    Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::post('/companies',[CompanyController::class, 'store'])->name('companies.store');
    Route::get('/companies',[CompanyController::class, 'index'])->name('companies.index');
});
//==============================================================


//==============================================================
// ROTAS PARA SETORES

Route::middleware([checkPermission::class])->group(function(){
    Route::delete('/sectors/{sector}/destroy', [SectorController::class, 'destroy'])->name('sectors.destroy');
    Route::get('/sectors/create', [SectorController::class, 'create'])->name('sectors.create');
    Route::get('/sectors/{sector}', [SectorController::class, 'show'])->name('sectors.show');
    Route::put('/sectors/{sector}',[SectorController::class, 'update'])->name('sectors.update');
    Route::get('/sectors/{sector}/edit', [SectorController::class, 'edit'])->name('sectors.edit');
    Route::post('/sectors',[SectorController::class, 'store'])->name('sectors.store');
    Route::get('/sectors',[SectorController::class, 'index'])->name('sectors.index');
});
//==============================================================

//==============================================================
// ROTAS PARA MACROS

Route::middleware(['auth', checkPermission::class])
    ->prefix('admin')
    ->group(function(){
        
        Route::get('/macros/search', [MacroController::class, 'search'])->name('macros.search');

        Route::delete('/macros/{macro}/destroy', [MacroController::class, 'destroy'])->name('macros.destroy');
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

Route::middleware([checkPermission::class])->group(function(){
    Route::delete('/permissions/{permission}/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy');
    Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::get('/permissions/{permission}', [PermissionController::class, 'show'])->name('permissions.show');
    Route::put('/permissions/{permission}',[PermissionController::class, 'update'])->name('permissions.update');
    Route::get('/permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::post('/permissions',[PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/permissions',[PermissionController::class, 'index'])->name('permissions.index');
});
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

Route::middleware(['auth', checkPermission::class])->group(function () {
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
