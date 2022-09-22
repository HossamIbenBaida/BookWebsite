<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [BookController::class ,'home']);
Route::get('/bookdetail/{id}', [BookController::class ,'bookdetail']);
Route::get('/books', [BookController::class ,'allbooks']);
Route::get('/telecharger', [BookController::class ,'telecharger']);
Route::get('/telecharger/{id}', [BookController::class ,'direct_link']);

Route::get('/adminlogin', [AdminController::class ,'adminlogin'])->middleware('notadmin');
Route::post('/access_account', [AdminController::class ,'access_account']);

Route::middleware('admin')->group(function(){
        Route::get('/admin', [AdminController::class ,'admin']);
        Route::get('/logout', [AdminController::class ,'logout']);
        Route::get('/addcategory', [CategoryController::class ,'addcategorie']);
        Route::post('/savecategory', [CategoryController::class ,'savecategory']);
        Route::get('/categories', [CategoryController::class ,'allcategories']);
        Route::get('/edit_category/{id}', [CategoryController::class ,'edit_category']);
        Route::post('/updatecategory', [CategoryController::class ,'updatecategory']);
        Route::get('/delete_category/{id}', [CategoryController::class ,'deletecategory']); 
        Route::get('/addbook', [BookController::class ,'addbook']);
        Route::post('/savebook', [BookController::class ,'savebook']);
        Route::post('/updatebook', [BookController::class ,'updatebook']);
        Route::get('/editbook/{id}', [BookController::class ,'editbook']);
        Route::get('/deletebook/{id}', [BookController::class ,'deletebook']);
});