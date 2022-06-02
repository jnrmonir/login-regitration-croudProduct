<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
    return view('auth.register');
});

Route::get('all_users/',[DashboardController::class,'allusers'])->name('allusers');
Route::get('edit/users/{user_id}',[DashboardController::class,'editusers'])->name('editusers');
Route::post('update/users/',[DashboardController::class,'updateusers'])->name('updateusers');
Route::get('delete/users/{user_id}',[DashboardController::class,'deleteusers'])->name('deleteusers');

Route::get('product',[DashboardController::class,'productpost'])->name('productpost');
Route::post('add/product',[DashboardController::class,'productadd'])->name('productadd');
Route::get('all/product',[DashboardController::class,'allproduct'])->name('allproduct');
Route::get('edit/products/{product_id}',[DashboardController::class,'editproduct'])->name('editproduct');
Route::post('update/products/',[DashboardController::class,'updateproduct'])->name('updateproduct');
Route::get('delete/products/{product_id}',[DashboardController::class,'deleteproduct'])->name('deleteproduct');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('dashboard/',[DashboardController::class,'Dashboard'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);