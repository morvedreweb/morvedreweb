<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;

Route::post('/solicitar', SolicitudController::class)
    ->middleware('throttle:5,10')
    ->name('solicitud.store');

Route::view('/', 'pages.home')->name('home');
Route::view('/conocenos', 'pages.about')->name('about');

Route::get('/servicios', [ServiceController::class, 'index'])->name('services.index');

Route::view('/aviso-legal', 'legal.aviso')->name('legal.aviso');
Route::view('/privacidad', 'legal.privacidad')->name('legal.privacidad');
Route::view('/cookies', 'legal.cookies')->name('legal.cookies');

// Las URLs antiguas siguen funcionando (enlaces compartidos, Google)
Route::permanentRedirect('/index.html', '/');
Route::permanentRedirect('/conocenos.html', '/conocenos');
Route::permanentRedirect('/aviso-legal.html', '/aviso-legal');
Route::permanentRedirect('/privacidad.html', '/privacidad');
Route::permanentRedirect('/cookies.html', '/cookies');
