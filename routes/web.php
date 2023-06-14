<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


Route::get('/', function () {
    return view('index');
});

Route::get('/sobreNos', function () {
    return view('sobreNos');
});


Route::get('/faleconosco', function () {
    return view('faleConosco');
});
Route::get('/politica', function () {
    return view('/politica');
});
Route::get('/selecao', function () {
    return view('selecao');
});



Route::get('/login', 'App\Http\Controllers\AdminsController@index');
Route::get('/selecao', 'App\Http\Controllers\VeiculosController@index');
Route::get('/visualizar', 'App\Http\Controllers\VeiculosController@indexAdmin');
Route::get('/inserir', 'App\Http\Controllers\VeiculosController@create');
Route::post('/inserir', 'App\Http\Controllers\VeiculosController@store')->name('registrar_veiculo');
Route::get('/editar/{id}', 'App\Http\Controllers\VeiculosController@edit');
Route::post('/editar/{id}', 'App\Http\Controllers\VeiculosController@update')->name('alterar_veiculo');
Route::get('/excluir/{id}', 'App\Http\Controllers\VeiculosController@delete');
Route::post('/excluir/{id}', 'App\Http\Controllers\VeiculosController@destroy')->name('deletar_veiculo');


Route::resource("/veiculos", VeiculosController::class);  
