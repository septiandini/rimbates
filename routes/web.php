<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('index');
});

Route::get('/item', [Controllers\ItemController::class, 'viewItem']);

Route::post('/item/save', [Controllers\ItemController::class, 'saveItem']);

Route::get('/customer',[Controllers\CustomerController::class,'viewCustomer']);

Route::post('/customer/save',[Controllers\CustomerController::class,'saveCustomer']);