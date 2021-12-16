<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AutomobilistaController;
use App\Http\Controllers\MultaController;

Route::get('/', [Controller::class, 'home']);
Route::get('/layoutDash', [Controller::class, 'dash']);
Route::get('/layoutAdmin', [Controller::class, 'admin']);

//rotas do automobilista
Route::view('/login','login');
Route::post('/login', [AutomobilistaController::class, 'entrar']);
Route::view('/registar','registar');
Route::post('/registar', [AutomobilistaController::class, 'registar']);
Route::get('/listar', [AutomobilistaController::class, 'listar']);
route::get('/pagarMulta/{id}',[AutomobilistaController::class,'pagar']);
route::post('/pagarMulta',[AutomobilistaController::class,'pagar2']);
route::get('/reciboMulta/{id}',[AutomobilistaController::class,'recibo']);

//rotas do dash
route::get('/listarAutomobilistas',[MultaController::class,'listar']);
Route::view('/registarAutomobilista','registarAutomobilista');
Route::post('/registarAutomobilista', [MultaController::class, 'registarAuto']);
Route::get('/registarMultas', [MultaController::class, 'registar1']);
Route::post('/registarMultas', [MultaController::class, 'registar2']);
route::get('/listarMUltasAuto',[MultaController::class,'listarMultas']);
