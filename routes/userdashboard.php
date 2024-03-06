<?php

use Illuminate\Support\Facades\Route;



/*============Start User Dashboard===============*/
Route::group(['middleware' => ['auth', 'verified']], function () {
Route::get('user/account', [App\Http\Controllers\UserDashboardController::class, 'account'])->name('account');
Route::post('user/store', [App\Http\Controllers\UserDashboardController::class, 'store'])->name('store');
Route::post('user/store/add', [App\Http\Controllers\UserDashboardController::class, 'add'])->name('add');
Route::get('user/sell/new', [App\Http\Controllers\UserDashboardController::class, 'sell'])->name('sell');
Route::post('user/store/product', [App\Http\Controllers\UserDashboardController::class, 'addproduct'])->name('addproduct');
/*--------------------Add Product--------------------*/
Route::get('user/sell/old', [App\Http\Controllers\UserDashboardController::class, 'old'])->name('sell.old');
Route::post('user/store/oldproduct', [App\Http\Controllers\UserDashboardController::class, 'addoldproduct'])->name('addoldproduct');
/*------------------End Add Product=-----------------*/
/*--------------------Update Product--------------------*/
Route::get('user/editproduct/{id}', [App\Http\Controllers\UserDashboardController::class, 'editproduct'])->name('editproduct');
Route::post('user/update/product/{id}', [App\Http\Controllers\UserDashboardController::class, 'updateproduct'])->name('updateproduct');
Route::delete('user/product/{id}', [App\Http\Controllers\UserDashboardController::class, 'listproduct'])->name('product.delete');
});
Route::get('auth/google', [App\Http\Controllers\Auth\GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [App\Http\Controllers\Auth\GoogleSocialiteController::class, 'handleCallback']);

Route::get('/set-password', function () {
return view('auth.set-password');
})->middleware('auth');
Route::post('password-set', [App\Http\Controllers\UserDashboardController::class, 'setpass'])->name('passwords.update');

/*============End Admin Dashboard================*/