<?php

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

Route::view('/', 'welcome');


Route::get('/inscription', 'InscriptionsController@formulaire')->name('inscription');
Route::post('/inscription','InscriptionsController@traitement');


Route::get('/connexion', 'ConnexionController@formulaire')->name('connexion');
Route::post('/connexion','ConnexionController@traitement');

Route::get('/deconnexion', 'ComptesController@deconnexion');


Route::get('topics', 'TopicsController@index')->name('index');
Route::get('topicsFormulaire', 'TopicsController@formulaire')->name('formulaire');
Route::post('topics', 'TopicsController@traitement')->name('traitement');


Route::post('/recherche', 'RechercheController@recherche')->name('recherche');
