<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
  
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
        
    }
    public function create(){
        return view('events.create');
    }
}
