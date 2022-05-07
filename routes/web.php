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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
    return view('/Customers/index');
});
Route::get('/menus',function(){
    return view('/customers/menues');
});
Route::get('/cart',function(){
    return view('customers/cart');
});
Route::get('/waiters',function(){
    return view('customers/waiters');
});
Route::get('/bill',function(){
    return view('customers/bill');
});
