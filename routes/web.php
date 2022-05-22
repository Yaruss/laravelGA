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
    return view('welcome');
});
Route::get('/re', [App\Http\Controllers\RegistredError::class, 'show']);

Route::get('/viewerror', [App\Http\Controllers\ViewError::class, 'show'])->name('viewerror');


Route::get('/viewname', [App\Http\Controllers\ViewName::class, 'show'])->name('viewname');
Route::get('/editname', [App\Http\Controllers\ViewName::class, 'editandshow'])->name('editname');
Route::get('/delname', [App\Http\Controllers\ViewName::class, 'delandshow'])->name('delname');


