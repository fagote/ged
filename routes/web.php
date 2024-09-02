<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckIfIsAdmin;
use Illuminate\Support\Facades\Route;


//==============================================================
// ROTAS PARA USUÁRIOS

Route::middleware('auth')
    ->prefix('admin')
    ->group(function(){

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

/*
//==============================================================
// ROTAS PARA SETORES 

Route::post('/sectors',[SectorController::class, 'store'])->name('sectors.store');
Route::get('/sectors/create', [SectorController::class, 'create'])->name('sectors.create');
Route::get('/sectors',[sectorController::class, 'index'])->name('sectors.index');
Route::put('/sectors/{sector}',[SectorController::class, 'update'])->name('sectors.update');
Route::get('/sectors/{sector}', [sectorController::class, 'show'])->name('sectors.show');
Route::get('/sectors/{sector}/edit', [sectorController::class, 'edit'])->name('sectors.edit');
Route::delete('/sectors/{sector}/destroy', [SectorController::class, 'destroy'])->name('sectors.destroy')->middleware(CheckIfIsAdmin::class);

//==============================================================
*/

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
