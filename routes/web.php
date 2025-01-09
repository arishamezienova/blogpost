<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

// Authenticated routes (alleen voor ingelogde gebruikers)
Route::middleware(['auth'])->group(function () {
    // Homepagina
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // About pagina
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    // Resource routes voor blogposts, behalve index
    Route::resource('blog', PostController::class)->except(['index']);

    // Toon het formulier om een nieuwe blogpost te maken
    Route::get('/blog/create', [PostController::class, 'create'])->name('blog.create');

    // Toon individuele blogpost
    Route::get('/blog/{blog}', [PostController::class, 'show'])->name('blog.show');

    // Bewerken van een blogpost
    Route::get('/blog/{blog}/edit', [PostController::class, 'edit'])->name('blog.edit');

    // Updaten van de blogpost
    Route::put('/blog/{blog}', [PostController::class, 'update'])->name('blog.update');

    // Blogpost opslaan
    Route::post('/blog/store', [PostController::class, 'store'])->name('blog.store');

    // Blogpost verwijderen
    Route::delete('/blog/{blog}', [PostController::class, 'destroy'])->name('blog.destroy');
});

// Guest routes (alleen voor niet-ingelogde gebruikers)
Route::middleware(['guest'])->group(function () {
    // Registreren route met zowel GET als POST
    Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');

    // Login route met zowel GET als POST
    Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
});

// Logout route (alleen voor ingelogde gebruikers)
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
