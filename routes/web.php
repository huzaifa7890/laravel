<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BilController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Product
    Route::view('product',"product");
    Route::view('addproduct',"addproduct");
    Route::post('addp',[UserController::class,'savedata']);
    Route::get('product',[UserController::class,'show']);
    Route::get('delete/{id}',[UserController::class,'delete']);
    Route::get("update/{id}",[UserController::class,'update']);
    Route::post("up/{id}",[UserController::class,'update1']);
    Route::get('/search',[UserController::class,'search']);
    
    // Trash 
    Route::view('trash',"trash");
    Route::get('trash',[UserController::class,'trash']);
    Route::get('forcedel/{id}',[UserController::class,'forcedel']);
    Route::get('restore/{id}',[UserController::class,'restore']);

    // Biling 
    Route::view('biling',"biling");
    Route::get('biling',[BilController::class,'show']);
    Route::post('adddtocart',[BilController::class,'addToCart']);

    Route::get('session',[BilController::class,'destroy']);
Route::get('pdel/{id}',[BilController::class,'pdel']);

// Print 
Route::view('print','print');
Route::view('sale','sale');
// Manage Sale
Route::get('sale',[BilController::class,'sale1']);
Route::post('checkoutk',[BilController::class,'checkout']);







});