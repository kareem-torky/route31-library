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

Route::get('/authors', 'AuthorController@index')->name('allAuthors');

Route::get('/authors/latest', 'AuthorController@latest')->name('latestAuthors');

Route::get('/authors/show/{id}', 'AuthorController@show')->name('showAuthor');

// /authors/search/{word} --> method search

Route::get('/authors/search/{word}', 'AuthorController@search')->name('searchAuthors');