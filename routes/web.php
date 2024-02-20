<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
});
Route::get('abc',[UserController::class,"userData"]);
Route::get('index',function(){
    return view('dashmin/index');
});
Route::get('category',function(){
    return view('dashmin/addcategory');
});
Route::post('category',[CategoryController::class,"AddCategory"]);
Route::get('details',[CategoryController::class,"viewCategory"]);
Route::get('edit/{id}',[CategoryController::class,"viewData"]);
Route::post('updated',[CategoryController::class,'EditCategory']);
Route::get('delete/{id}',[CategoryController::class,'deleteCategory']);
