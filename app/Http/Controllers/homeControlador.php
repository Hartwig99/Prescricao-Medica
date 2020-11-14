<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeControlador extends Controller
{

    

    public function home() {
        echo "<h1>Pagina Inical</h1>";
        
    }

    public function inicial() {
        return view('inicial.index');
        
    }

    public function login(){
        return view('inicial.login');
    }

    public function registro(){
        
        return view('inicial.registro');
    }

    public function contato(){
        
        return view('inicial.contato');
    }

    public function sobre(){
        
        return view('inicial.sobre');
    }


    public function consultar(){
        
        return view('inicial.consultar');
    }




    

}
