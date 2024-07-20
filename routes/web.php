<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['tittle' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'tittle' => 'About Me',
        'nama' => 'Abdul Manan']);
});

Route::get('/blog', function () {
    return view('blog', ['tittle' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact']);
});