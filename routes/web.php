<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CelularController;
use App\Http\Controllers\PlanoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    #return view('welcome');
    return view('blog');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ----------------------------------------- CELULAR --------------------------------------

Route::get('/celular', [CelularController::class, 'index'])->name('celular.index');

Route::get('/celular/create', [CelularController::class, 'create'])->name('celular.create');
Route::post('/celular/create', [CelularController::class, 'store'])->name('celular.store');

Route::get('/celular/{id}', [CelularController::class, 'show'])->name('celular.show');

Route::get('/celular/{id}/edit', [CelularController::class, 'edit'])->name('celular.edit');
Route::put('/celular/{id}', [CelularController::class, 'update'])->name('celular.update');

Route::delete('/celular/{id}', [CelularController::class, 'destroy'])->name('celular.destroy');

// ----------------------------------------- CELULAR --------------------------------------

// ----------------------------------------- PLANO --------------------------------------

Route::get('/plano', [PlanoController::class, 'index'])->name('plano.index');

Route::get('/plano/create', [PlanoController::class, 'create'])->name('plano.create');
Route::post('/plano/create', [PlanoController::class, 'store'])->name('plano.store');

Route::get('/plano/{id}', [PlanoController::class, 'show'])->name('plano.show');

Route::get('/plano/{id}/edit', [PlanoController::class, 'edit'])->name('plano.edit');
Route::put('/plano/{id}', [PlanoController::class, 'update'])->name('plano.update');

Route::delete('/plano/{id}', [PlanoController::class, 'destroy'])->name('plano.destroy');

// ----------------------------------------- PLANO --------------------------------------