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

Route::layout('layouts.app')->section('content')->group(function (){
    Route::livewire('/posts', 'app.post-index')->name('post.index');
    Route::livewire('/post/{post}', 'app.post-show')->name('post.show');

});
