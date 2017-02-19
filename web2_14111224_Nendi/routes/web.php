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


Route ::get('/', 'viewcontroller@i');
Route ::get('/', 'viewcontroller@ha');
Route ::get('/', 'viewcontroller@t');
Route ::get('/', 'viewcontroller@e');
/**Route::get('/', function () {
    return view('home');
});

Route::get('/halamanawal', function () {
    return view('halamanawal');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/tambah', function () {
    return view('tambah');
}); */