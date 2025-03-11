<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas de autenticação (login, registro, etc.)
Auth::routes();

// Rota para o dashboard (após o login)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rotas para o CRUD de notícias
Route::resource('noticias', App\Http\Controllers\NoticiaController::class)->middleware('auth');

// Rota para pesquisa de notícias
Route::get('/noticias/search', [App\Http\Controllers\NoticiaController::class, 'search'])->name('noticias.search')->middleware('auth');

Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');

Route::resource('users', UserController::class);
