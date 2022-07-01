<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/',[CategoryController::class,'index']);

//To add new entry
Route::get('/category-create',[CategoryController::class,'create']);
Route::post('/category-store',[CategoryController::class,'store']);

//To edit 
Route::get('/category-edit/{id}',[CategoryController::class,'edit']);
Route::put('/category-update/{id}',[CategoryController::class,'update']);

//To delete
Route::get('/category-delete/{id}',[CategoryController::class,'destroy']);


