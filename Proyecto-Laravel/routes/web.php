<?php

use App\Models\Servicio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/inicio');
});

Route::get('/inicio', function () {
    $servicios = ['Cortes de cabello', 'Tintes y mechas', 'Extensiones de pestañas'];
    return view('inicio', ['servicios' => $servicios]);
});

Route::get('/contacto', function () {
    return view('contacto');
});


// Bd

Route::get('/servicios', function () {
    $servicios = Servicio::all();
    return view('servicios', ['servicios' => $servicios]);
});

Route::get('/servicios/nuevo', function () {
    return view('servicio-nuevo');
})->middleware('auth');

Route::post('/servicios/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ],[
        'nombre.required' => 'El nombre no puede quedar vacio.',
        'precio.required' => 'El precio no puede quedar vacio.',
        'precio.integer'  => 'El precio tiene que ser un numero enteroi sin letras.',
    ]);

    Servicio::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);
    return redirect('/servicios');
})->middleware('auth');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    $credenciales = [
        'email'    => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        request()->session()->regenerate();
        return redirect('/panel');
    }
    return back()->with('error', 'Correo o contraseña incorrectos.');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/inicio');
});

Route::get('/panel', function () {
    $servicios = Servicio::all();
    return view('panel', ['servicios' => $servicios]);
})->middleware('auth');
