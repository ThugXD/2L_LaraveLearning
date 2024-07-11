<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/contacto', function(){
    return view('contacto');
});