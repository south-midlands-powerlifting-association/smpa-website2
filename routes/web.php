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
    return view('home');
})->name("home");


Route::get('/results', function () {
    return view('results');
})->name("results");


Route::get('/events', function () {
    return view('events');
})->name("events");


Route::get('/records', function () {
    return view('records');
})->name("records");

\Illuminate\Support\Facades\Auth::routes();


Route::get("/control_panel", "ControlPanelController@index")->name("control_panel")->middleware("auth");