<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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
// all listings 
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// store listing data
Route::post('/listings', [ListingController::class, 'store']);

// show edit form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);

// edit submit to update
Route::put('/listings/{listing}/saveEdit', [ListingController::class, 'update']);

// delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// single listing
//Route model binding
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show register create form
Route::get('/register', [UserController::class, 'create']);

// create new user
Route::post('/users', [UserController::class, 'store']);

// logout user
Route::post('/logout', [UserController::class, 'logout']);

//show login form
Route::get('/login', [UserController::class, 'login']);

//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);