<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
   }
);
Route::prefix("/")->group(__DIR__."/admin/HomeAdmin.php");
Route::prefix("/")->group(__DIR__."/admin/ProductAdmin.php");
Route::prefix("/")->group(__DIR__."/admin/CategoryAdmin.php");
Route::prefix("/")->group(__DIR__."/admin/User.php");
