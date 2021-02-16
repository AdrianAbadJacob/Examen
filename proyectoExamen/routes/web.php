<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MailPrincipal;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
});
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/mail', function () {
    $correo = new MailPrincipal;
    Mail::to('destinatario@correo.com')->send(‘correo’);
    return view('mail');
});
Route::get('/migraciones', function () {
    return view('migraciones');
});
Route::get('/seeders', function () {
    return view('seeders');
});

