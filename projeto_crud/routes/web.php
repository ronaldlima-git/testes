<?php

use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

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

Route::get('/', function () 
{
    return view('welcome');
});


//Com a tipagem resource, já cria todas as rotas get, post, put, delete
Route::resource("/veiculos", VeiculoController::class);

//Criação de uma rota lançando um erro, para saber como ele irá exibir
Route::get('/teste_erro', function()
{
    throw new Exception('-- Essa é uma mensagem padrão de erro para teste --');
});