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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/encadrant','EncadrantController@home');
Route::resource('/encadrant','EncadrantController');
Route::resource('/etudiant','EtudiantController');

// FAQ
Route::get("faq",["as"=>"faqView","uses"=>"FaqController@getQuestion"]);
Route::post("faq","FaqController@postQuestion");
Route::get("show/{n}",["as"=>"show","uses"=>"FaqController@show"]);
Route::post("saveRep","FaqController@postReponse");
