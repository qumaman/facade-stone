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
    $data['menu'] = 'index';
    return view('index', $data);
});
Route::get('/stamp', function () {
    $data['menu'] = 'stamp';
    return view('stamp', $data);
});
Route::get('/laser', function () {
    $data['menu'] = 'laser';
    return view('laser', $data);
});
Route::get('/design', function () {
    $data['menu'] = 'design';
    return view('design', $data);
});

Route::resource('stamps', 'StampsController');
Route::resource('designs', 'DesignsController');

Route::prefix('admin')->group(function () {
    Route::post('stamps/store', 'StampController@store');
    Route::resource('stamps', 'StampController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
