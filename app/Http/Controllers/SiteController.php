<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function principal() {
        return view('site.principal', ["titulo" => "Home"]);
    }
    public function sobre() {
        return view('site.sobre', ['titulo' => 'Sobre']);
    }
    public function unidade() {
        return view('site.unidade', ['titulo' => 'Unidade']);
    }
}
