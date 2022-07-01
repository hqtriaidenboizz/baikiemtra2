<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\homeController;

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


Route::get('/',[homeController::class, 'getHome']);
Route::get('/form',[homeController::class, 'getForm']);

// Route::get('/detail',[homeController::class, 'getDetail']);

Route::get("detail/{id}", [homeController::class, 'getDetail']);