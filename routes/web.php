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

Route::get('/', function () {
    return view('layouts.main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ==================resource route=================
Route::resource('branches','App\Http\Controllers\BranchController');
Route::resource('addresses','App\Http\Controllers\AddressController');
Route::resource('companies','App\Http\Controllers\CompanyController');
Route::resource('mas_address_types','App\Http\Controllers\MasAddressTypeController');
// ==================resource route=================
