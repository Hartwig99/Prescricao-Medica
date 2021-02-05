<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class ControladorContato extends Controller
{
    public function enviaContato(Request $request)
    {

        Mail::to('contatoprescricao@gmail.com')->send(new ContatoEmail($request));

        echo" Mensagem enviada com sucesso";
        
        
    }
}
