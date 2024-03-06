<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportuploadController;
use App\Http\Controllers\Auth\GoogleSocialiteController;

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

require __DIR__ . '/userdashboard.php';
require __DIR__ . '/redirections.php';
require __DIR__ . '/frontened.php';
require __DIR__ . '/admin.php';


Route::get('/', [App\Http\Controllers\StaticController::class, 'index']);


Auth::routes(['verify' => true]);


/*--------addToCompare --------*/

Route::get('compare/add/{id}', [App\Http\Controllers\WishlistController::class, 'addToCompare'])->name('addToCompare');
Route::get('compare', [App\Http\Controllers\WishlistController::class, 'compare'])->name('compare');
Route::delete('compare/remove/{id}',[App\Http\Controllers\WishlistController::class, 'removeProduct'])->name('compare.remove');
/*-----End addToCompare --------*/



/*------Testing Url--------*/
Route::get('dummy', [App\Http\Controllers\StaticController::class, 'dummy']);

/*-----End test Url--------*/


/*-----wishlist & Cart Url--------*/

Route::get('wishlist', [App\Http\Controllers\WishlistController::class, 'wish'])->name('wishlist');
Route::get('cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');

Route::middleware(['auth'])->group(function () {
    Route::get('wishlist/add/{productId}', [App\Http\Controllers\WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::get('wishlist/remove/{productId}', [App\Http\Controllers\WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
    
    Route::get('cart/add/{productId}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.add');
    Route::get('cart/remove/{productId}', [App\Http\Controllers\CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('cart/update/{productId}',[App\Http\Controllers\CartController::class, 'updateCartQuantity'])->name('cart.update');
});

/*---End wishlist & Cart Url-----*/






Route::post('review-store', [App\Http\Controllers\CartController::class, 'reviewstore'])->name('review.store');



/*Get Data and Mail*/

Route::post('get-quote', [App\Http\Controllers\GetdataController::class, 'index'])->name('getdata');
Route::post('rent-buy', [App\Http\Controllers\GetdataController::class, 'rentbuy'])->name('rentdata');
Route::post('rental', [App\Http\Controllers\GetdataController::class, 'rental'])->name('rentaldata');
Route::post('news-letter', [App\Http\Controllers\GetdataController::class, 'news'])->name('newsletter');
Route::post('contact-form', [App\Http\Controllers\GetdataController::class, 'cform'])->name('cform');
Route::post('pop-up', [App\Http\Controllers\GetdataController::class, 'popup'])->name('popup');
Route::get('thank-you', [App\Http\Controllers\GetdataController::class, 'contactthank'])->name('cthankyou');
// Route::get('rental-thank-you', [App\Http\Controllers\GetdataController::class, 'rentalthank'])->name('rthankyou');
// Route::get('rent-buy-thank-you', [App\Http\Controllers\GetdataController::class, 'rbthank'])->name('rbthankyou');
// Route::get('guote-thank-you', [App\Http\Controllers\GetdataController::class, 'guotethank'])->name('qthankyou');


/*  Upload data */

Route::get('list-view', [ReportuploadController::class, 'listdata'])->name('list-view');
Route::post('upload_htp', [ReportuploadController::class, 'upload_htp'])->name('upload_htp');


/*End uploaddata*/

/*================After Reset Password====================*/
Route::get('successfully/passwordset', [App\Http\Controllers\StaticController::class, 'sucessfully'])->name('sucessfully');
/*================End Reset Password====================*/

/*================Fetch Data====================*/
Route::get('search',[App\Http\Controllers\GetdataController::class, 'searchpage'])->name('search');
Route::post('searchdata', [App\Http\Controllers\GetdataController::class, 'search'])->name('autocomplete.search');
Route::get('/getPcate/{id}', [App\Http\Controllers\UserDashboardController::class, 'pcateg'])->name('pcateg');
/*===============EndFetch Data =================*/

/*==================Sitemap =====================*/


/*======Redirection Old Sitemap=============*/

Route::get('sitemap.xml', function(){ return Redirect::to('sitemap_index.xml', 301); });

/*============End Redirection Sitemap============*/

Route::get('blog.xml', [App\Http\Controllers\StaticController::class, 'blogsitemap'])->name('blog_sitemap');
Route::get('sitemap_index.xml',[App\Http\Controllers\StaticController::class, 'sitemap'])->name('sitemap');
Route::get('{category}.xml', [App\Http\Controllers\StaticController::class, 'category'])->name('sitemap.category');

/*===============Sitemap End =================*/


//Testing Urls//

Route::get('allproduct', [App\Http\Controllers\ApiController::class, 'allproduct'])->name('newallproduct');
Route::get('{slug}/{category}', [App\Http\Controllers\ApiController::class, 'all'])->name('allproduct');
Route::get('old-url', [App\Http\Controllers\ApiController::class, 'oldurl'])->name('oldurl');

Route::get('safety-solutions/{slug}', [App\Http\Controllers\ApiController::class, 'all'])->name('safety.product');
Route::get('manual-platform-trolly/{slug}', [App\Http\Controllers\HandController::class, 'product'])->name('mpt.product');

//End Testing Urls

