<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mensagemController;
use App\Http\Controllers\RespostaController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('/home', mensagemController::class);


//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/enviarmensagem', 'App\Http\Controllers\mensagemController2@send')->name('enviarmensagem');

Route::resource('/mensagems', mensagemController::class);

Route::resource('/resposta', RespostaController::class);
