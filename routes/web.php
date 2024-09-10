<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\MacroController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckIfIsAdmin;
use Illuminate\Support\Facades\Route;


//==============================================================
// ROTAS PARA USUÁRIOS

//Route::get('/users', [UserController::class, 'showFile'])->name('dashboard');

Route::middleware('auth')
    ->prefix('admin')
    ->group(function(){
        
        Route::get('/users/search', [UserController::class, 'search'])->name('users.search');

        Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy')->middleware(CheckIfIsAdmin::class);
        Route::post('/users/{id}/upload', [UserController::class, 'upload'])->name('users.upload');
        Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
        Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
        Route::put('/users/{user}',[UserController::class, 'update'])->name('users.update');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/users',[UserController::class, 'store'])->name('users.store');
        Route::get('/users',[UserController::class, 'index'])->name('users.index');
        
    });
//==============================================================

//==============================================================
// ROTAS PARA FILES

Route::post('/files/{id}/upload', [FileController::class, 'upload'])->name('files.upload');

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

//Route::get('/users', [UserController::class, 'showFile'])->name('dashboard');

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
