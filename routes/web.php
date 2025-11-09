<?php

use Illuminate\Support\Facades\Route;
//Par botn de salir
use Illuminate\Support\Facades\Auth;

//para simular el login/logout
use Illuminate\Http\Request;



// Route::get('/', function () {
//     return view('welcome');
// });

// Página principal
Route::get('/', function () {
    $user = session('user');
    return view('welcome', compact('user'));
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::post('/logout', function () {
//     Auth::logout();

//     // Invalidar la sesión y regenerar el token de seguridad
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();

//     // Redirigir al usuario a la página de inicio o login
//     return redirect('/');
// })->name('logout');

// Mostrar formulario de login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Procesar login
Route::post('/login', function (Request $request) {
    session(['user' => [
        'name' => 'Usuario de Prueba',
        'email' => 'usuario@ejemplo.com',
    ]]);
    return redirect()->route('home');
})->name('login.post');

// Cerrar sesión
Route::post('/logout', function () {
    session()->forget('user');
    return redirect()->route('home');
})->name('logout');
