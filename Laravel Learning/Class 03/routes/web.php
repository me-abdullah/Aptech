<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\singleActionController;

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
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/demo', [DemoController::class, 'index']);
//Route::get('/about', 'App/Http/Controllers/DemoController@about');
Route::get('/about', [DemoController::class, 'about']);

Route::get('/about', singleActionController::class);

Route::resource('photo', photoController::class);
