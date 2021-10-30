<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function controles() {
        //echo 'aqui';
        return view('adm.controles');
    }
    public function usuario() {
        return view('adm.usuario');
    }
    public function visitante() {
        return view('adm.visitante');
    }
    public function aluno() {
        return view('adm.aluno');
     }
    public function turma() {
        return view('adm.turmas');
    }
    public function entrada() {
        return view('adm.entradas');
    }
    public function recepcionista() {
        return view('adm.recepcionista');
    }
    public function responsavel() {
        return view('adm.responsavel');
    }
    public function restricao() {
        return view('adm.restricao');
    }
    public function horario() {
        return view('adm.horario');
    }
    public function aviso() {
        return view('adm.aviso');
    }
}
