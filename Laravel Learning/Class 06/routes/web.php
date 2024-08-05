<?php

use App\Http\Controllers\customer_controller;
use App\Models\Customer;
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

Route::get('/customer', function () {
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});

Route::get('/customer',[customer_controller::class, 'index']);
Route::get('/customer/view',[customer_controller::class, 'view']);
Route::post('/customer',[customer_controller::class, 'store']);
