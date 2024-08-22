<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EventController
};

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); //Criar os dados
Route::get('/events/{id}', [EventController::class, 'show']); //Show para mostrar um dado espécifico do DB
Route::post('/events', [EventController::class, 'store']);//store para enviar os dados para o BD
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');


Route::get('/contacto', function(){
    return view('contacto');
});

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}',  [EventController::class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}',  [EventController::class, 'leaveEvent'])->middleware('auth');