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
Route::get('/user', function () {
    $name = "Dindaass";
    $pendek = "cut";
    return view('user',['nama_lengkap'=> $name,'cutt' => $pendek,]);

});

Route::get('/login', function () {
    return view('login');

});
Route::get('/dashboard', function () {
    return view('dashboard');

});
Route::get('/galeri', function () {
    return view('galeri');

});