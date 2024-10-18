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
