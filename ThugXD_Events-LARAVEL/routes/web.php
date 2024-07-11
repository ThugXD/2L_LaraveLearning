<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

//Estou acessando o Thug vindo da view
Route::get('/Thug', function(){
    return view('Thug');
});

Route::get('/Apelido', function(){
    $busca = request('search');
    return view('Apelido', ['Busca' => $busca]);
});
Route::get('/Apelido_teste/{id?}', function($id = null){
    return view('Apelid', ['id' => $id]);
});