<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('ajoutFrais', function(){
    return view('ajoutFrais');
});

Route::get('connexion', function(){
    return view('connexion');
});

Route::get('deconnexion', function(){
    return view('deconnexion');
});

Route::get('entete', function(){
    return view('entete');
});

Route::get('erreurs', function(){
    return view('erreurs');
});
Route::get('etatFrais', function(){
    return view('etatFrais');
});


