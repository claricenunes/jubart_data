<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio.welcome');  
})->name('inicio');

Route::get('/servicos', function () {
    return view('servico.servicos');
})->name('servicos');

Route::get('/dashboards', function () {
    return view('dashboards.dashboards');
})->name('dashboards');

Route::get('/contato', function () {
    return view('contato.contato');
})->name('contato');

Route::get('/projetos', function () {
    return view('projetos');
})->name('projetos');

Route::get('/relatorio', function () {
    return view('relatorio');
})->name('relatorio');