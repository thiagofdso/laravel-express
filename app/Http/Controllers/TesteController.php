<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TesteController extends Controller
{
    public function index($nome){
        return view('teste.index',['nome'=>$nome]);
    }
}