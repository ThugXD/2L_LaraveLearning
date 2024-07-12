<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']); //Criar os dados
Route::get('/events/{id}', [EventController::class, 'show']); //Show para mostrar um dado espécifico do DB
Route::post('/events', [EventController::class, 'store']);//store para enviar os dados para o BD

Route::get('/contacto', function(){
    return view('contacto');
});