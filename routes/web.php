<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Tb_Historico_de_LogMiddleware;

//rotas principais do site
Route::get('/', 'SiteController@principal')->name('site.index');
Route::get('/home', 'SiteController@principal')->name('site.index');
Route::get('/sobre', 'SiteController@sobre')->name('site.sobre');
Route::get('/unidade', 'SiteController@unidade')->name('site.unidade');

Route::get('/_partials/topo#modal/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/_partials/topo#modal/', 'LoginController@autenticar')->name('site.login');

Route::prefix('/adm')->group(function() {
    Route::get('/controles', 'AdmController@controles')->name('adm.controles');
    Route::get('/usuario', 'AdmController@usuario')->name('adm.usuario');
    Route::get('/aluno', 'AdmController@aluno')->name('adm.aluno');
    Route::get('/turmas', 'AdmController@turma')->name('adm.turma');
    Route::get('/recepcionista', 'AdmController@recepcionista')->name('adm.recepcao');
    Route::get('/responsavel', 'AdmController@responsavel')->name('adm.responsavel');
    Route::get('/restricao', 'AdmController@restricao')->name('adm.restricao');
    Route::get('/entradas', 'AdmController@entrada')->name('adm.entrada');
    Route::get('/horario', 'AdmController@horario')->name('adm.horario');
    Route::get('/visitante', 'AdmController@visitante')->name('adm.visitante');
    Route::get('/aviso', 'AdmController@aviso')->name('adm.aviso');   
});

Route::prefix('/usu')->group(function() {
    Route::get('/estudante', 'UsuController@estudante')->name('estudante'); 
    Route::get('/responsavel', 'UsuController@res')->name('res');  
    Route::get('/recepcao', 'UsuController@rec')->name('rec');
});

//rota de falha ou rota nao existente
Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});