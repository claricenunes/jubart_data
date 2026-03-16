<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// =================== ROTAS PT ===================
Route::get('/', fn() => view('inicio.welcome'))->name('inicio');
Route::get('/servicos', fn() => view('servico.servicos'))->name('servicos');
Route::get('/dashboards', fn() => view('dashboards.dashboards'))->name('dashboards');
Route::get('/contato', fn() => view('contato.contato'))->name('contato');
Route::get('/projetos', fn() => view('projetos'))->name('projetos');
Route::get('/relatorio', fn() => view('relatorio'))->name('relatorio');

// =================== DASHBOARDS ===================
Route::get('/dashboards/painel-diario-por-loja', fn() => view('dashboards.painel_diario_por_loja'))->name('painel.diario');

// =================== ROTAS EN ===================
Route::get('/en', fn() => view('en.welcome'))->name('inicio.en');
Route::get('/en/services', fn() => view('en.services'))->name('servicos.en');
Route::get('/en/dashboards', fn() => view('en.dashboards'))->name('dashboards.en');
Route::get('/en/contact', fn() => view('en.contact'))->name('contato.en');
Route::get('/en/login', fn() => view('en.login'))->name('login.en');
Route::get('/en/register', fn() => view('en.register'))->name('register.en');


// =================== AUTH (Breeze) ===================
Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';