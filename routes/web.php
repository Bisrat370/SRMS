<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller;

use app\Http\Controllers\RackController;
use app\Http\Controllers\ShelfController;

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
    return view('AdminLayout/Admin');
});

Route::group(array('prefix' => 'rack/'), function()
{   
    Route::get('/', 'RackController@index')->name('rack.name');
    Route::get('/create', 'RackController@create')->name('rack.create');
    Route::get('/show/{id}','RackController@show')->name('rack.show');
    Route::post('/store', 'RackController@store')->name('rack.store');
    Route::get('/update/{id}','RackController@update')->name('rack.update');
    Route::get('/edit/{id}',"RackController@edit")->name('rack.edit');
    Route::get('/destroy/{id}',"RackController@destroy")->name('rack.destroy');
});

//Shelf
Route::group(array('prefix' => 'shelf/'), function()
{
    Route::get('/index', 'ShelfController@index')->name('shelf.name');
    Route::get('/create', 'ShelfController@create')->name('shelf.create');
    Route::get('/show/{id}','ShelfController@show')->name('shelf.show');
    Route::post('/store', 'ShelfController@store')->name('shelf.store');
    Route::get('/update/{id}', 'ShelfController@update')->name('shelf.update');
    Route::get('/edit/{id}', 'ShelfController@edit')->name('shelf.edit');
    Route::get('/destroy/{id}',"ShelfController@destroy")->name('shelf.destroy');
 });

 //Folder
 Route::group(array('prefix' => 'folder'), function()
 {
    Route::get('/index','FolderController@index')->name('folder.name');
    Route::get('/create', 'FolderController@create')->name('folder.create');
    Route::post('/store','FolderController@store')->name('folder.store');
    Route::get('/edit/{id}', 'FolderController@edit')->name('folder.edit');
    Route::get('/update/{id}','FolderController@update')->name('folder.update');
    Route::get('/destroy/{id}','FolderController@destroy')->name('folder.destroy');
    Route::get('/show/{id}','FolderController@show')->name('folder.show');
 });

