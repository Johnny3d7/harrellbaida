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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Accueil
Route::get('/','Main\HomeController@index')->name('home');

//Services
Route::get('services','Main\ServiceController@index')->name('services');

//Qui sommes nous
Route::get('qui-sommes-nous/presentation','Main\QuisnousController@index')->name('presentation');

Route::get('qui-sommes-nous/valeurs-ethique','Main\QuisnousController@valeurEthique')->name('valeurs-ethique');

Route::get('qui-sommes-nous/notre-equipe','Main\QuisnousController@equipe')->name('equipe');

//Galerie
Route::get('galerie','Main\GalerieController@index')->name('galerie');

//Boutique
Route::get('boutique','Main\BoutiqueController@index')->name('boutique');

//Contact
Route::get('contact','Main\ContactController@index')->name('contact');
