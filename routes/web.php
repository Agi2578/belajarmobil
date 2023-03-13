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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/paket', function () {
    return view('paket');

});
Route::get('/driver', function () {
    return view('driver');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/index', function () {
    return view('index');
});
Route::get('/siswa', function () {
    return view('siswa');
});
Route::get('/trainer', function () {
    $trainers = DB::table('trainers')->get();
    return view('trainer', ['trainers' => $trainers]);
});
