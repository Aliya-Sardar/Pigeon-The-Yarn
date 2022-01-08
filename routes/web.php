<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\OrderController;

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


// Public Controller 

// route to public controller for index page
Route::get('/', [PublicController::class ,'index'])-> name('home');

// route to public controller for About page
Route::get('/About', [PublicController::class ,'about'])-> name('about');

// route to public controller for Contact page
Route::get('/Contact', [PublicController::class , 'contact'])-> name('contact');



// Authentication Controller

// route to auth controller for Signin page
Route::get('/Signin', [AuthController::class ,'signin'])-> name('signin');
Route::post('/Authenticate', [AuthController::class ,'loginAuth'])-> name('loginAuth');

// route to auth controller for Sign up page
Route::get('/Signup', [AuthController::class ,'signup'])-> name('signup');
Route::post('/Register', [AuthController::class ,'Registration'])-> name('Registration');

// route to auth controller for Logout 
Route::get('/Signout', [AuthController::class ,'signout'])-> name('signout');




// Info Controller

// store the shipping details 
Route::get('/Dashboard-info', [InfoController::class , 'create'])-> name('create_info');
Route::post('/Dashboard-info-store', [InfoController::class , 'store'])-> name('store_info');

// display shipping details
Route::get('/Dashboard-Shipping', [InfoController::class , 'shipping_dashboard'])-> name('shipping_dashboard');




// Order Controller

Route::get('/Dashboard-Order' , [OrderController::class , 'order_dashboard'])-> name('order_dashboard');
Route::post('/Ordering', [OrderController::class, 'store_order'])-> name('store_order');