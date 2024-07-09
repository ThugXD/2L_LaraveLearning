<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "ThugXD";
    $idade = 21;

    $array = [10, 20, 30, 40, 50];
    $nomeThug = ['Valter', 'André', 'Gil', 'Zandamela'];


    return view('welcome',  
        ['nome' => $nome,
         'idade' => $idade,
         'array' => $array,
         'nomeThug' => $nomeThug
        ]);
});

//Estou acessando o Thug vindo da view
Route::get('/Thug', function(){
    return view('Thug');
});

Route::get('/Apelido', function(){
    return view('Apelido');
});
