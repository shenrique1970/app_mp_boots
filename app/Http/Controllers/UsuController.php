<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuController extends Controller
{
    public function estudante() {
        return view('usu.estudante',['titulo' => 'Estudante']);
    }
    public function res() {
        return view('usu.res', ['titulo' => 'Responsável']);
    }
    public function rec() {
        return view('usu.rec', ['titulo' => 'Recepção']);
    }
}
