<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    /*======================Form ============================*/

    Route::get('/dashboard/product-quote-form', [App\Http\Controllers\Admin\DashboardController::class, 'pqform'])->name('dashboard.pqf');
    Route::get('/dashboard/rental-and-buy-form', [App\Http\Controllers\Admin\DashboardController::class, 'rbform'])->name('dashboard.rbf');
    Route::get('/dashboard/conatct-form', [App\Http\Controllers\Admin\DashboardController::class, 'contactform'])->name('dashboard.cf');
    Route::get('/dashboard/rental-form', [App\Http\Controllers\Admin\DashboardController::class, 'rentalform'])->name('dashboard.rentf');
    /*======================End Form============================*/

    /*======================Form Data============================*/
    Route::get('productquote/list', [App\Http\Controllers\Admin\DatatableController::class, 'getform'])->name('product.list');
    Route::get('renbuy/list', [App\Http\Controllers\Admin\DatatableController::class, 'getrentbuy'])->name('rentbuy.list');
    Route::get('contact/list', [App\Http\Controllers\Admin\DatatableController::class, 'getcontact'])->name('contact.list');
    Route::get('rental/list', [App\Http\Controllers\Admin\DatatableController::class, 'getrental'])->name('rental.list');
    /*====================End Form Data========================*/

    /*========================Delete Data======================*/
    Route::delete('dashboard/pf/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'pfdelete'])->name('proqf.delete');
    Route::delete('dashboard/rb/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'rbdelete'])->name('rbf.delete');
    Route::delete('dashboard/contact/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'cfdelete'])->name('contact.delete');
    Route::delete('dashboard/rental/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'rfdelete'])->name('rental.delete');
    /*====================EndDelete Data==========================*/

    Route::get('/dashboard/user', [App\Http\Controllers\Admin\DashboardController::class, 'user'])->name('dashboard.user');
    Route::get('/dashboard/product/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'userproduct'])->name('dashboard.userproduct');
    Route::get('/dashboard/vendar/product/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'userproducts'])->name('dashboard.userproducts');

 /*=====================Vendor User Data======================*/
 
    Route::get('/dashboard/allvendor', [App\Http\Controllers\Admin\DashboardController::class, 'vendor'])->name('dashboard.vendor');
    Route::get('/dashboard/vendor/edit/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'vendoredit'])->name('dashboard.vendoredit');
    Route::post('/dashboard/updatedetails/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'updatedetails'])->name('dashboard.updatedetails');

 
  /*==================End Vendor User Data======================*/
  
  
  
    /*==================Approve Product Data======================*/

    Route::post('dashboard/approve/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'approve'])->name('app.product');
    Route::post('dashboard/remark/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'remark'])->name('app.remark');

    /*====================End Approve Data========================*/
    Route::delete('dashboard/subadmin/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'subadmind'])->name('subadmin.delete');

    /*==================Add Sub Admin======================*/

    Route::resource('dashboard/adduser', App\Http\Controllers\Admin\UserController::class);

    /*==================Add Sub Admin======================*/
});

/*============End Admin Dashboard================*/

/*==============Sub Admin Dashboard==================*/

Route::middleware(['auth', 'isSubadmin'])->group(function () {
    Route::get('/subadmin', [App\Http\Controllers\Admin\SubAdminController::class, 'index'])->name('subadmin');
    Route::get('subadmin/addproduct', [App\Http\Controllers\Admin\SubAdminController::class, 'saddproduct'])->name('saddproduct');
    Route::get('dashboard/allproductview', [App\Http\Controllers\Admin\SubAdminController::class, 'viewallpro'])->name('viewallpro');
    Route::get('dashboard/allproduct', [App\Http\Controllers\Admin\DatatableController::class, 'allproduct'])->name('allproductview');
    Route::get('dashboard/editproduct/{id}', [App\Http\Controllers\Admin\SubAdminController::class, 'deditproduct'])->name('deditproduct');
});
/*============End SubAdmin Dashboard================*/


/*======================Blog Add============================*/
Route::get('dashboard/blog', [App\Http\Controllers\Admin\BlogController::class, 'blog'])->name('admin.blog');
Route::get('dashboard/addblog', [App\Http\Controllers\Admin\BlogController::class, 'addblog'])->name('admin.addblog');
Route::post('dashboard/saveblog', [App\Http\Controllers\Admin\BlogController::class, 'saveblog'])->name('admin.saveblog');
Route::get('dashboard/listblog', [App\Http\Controllers\Admin\BlogController::class, 'listblog'])->name('admin.listblog');
Route::get('dashboard/blogedit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'editblog'])->name('admin.editblog');
Route::post('dashboard/blogupdate/{id}', [App\Http\Controllers\Admin\BlogController::class, 'updateblog'])->name('admin.updateblog');

/*====================End Blog Data========================*/


/*=======================Footer Content Data========================*/
Route::get('dashboard/footer-content/main-category', [App\Http\Controllers\Admin\BlogController::class, 'footerlist'])->name('footerlist');
Route::get('dashboard/footer-content/editmain-category/{id}', [App\Http\Controllers\Admin\BlogController::class, 'footerliste'])->name('footerliste');
Route::post('dashboard/updatemaincategory/{id}', [App\Http\Controllers\Admin\BlogController::class, 'footerlistum'])->name('footerlistum');

Route::get('dashboard/footer-content/sub-category', [App\Http\Controllers\Admin\BlogController::class, 'footerlists'])->name('footerlists');
Route::get('dashboard/footer-content/sub-category/{id}', [App\Http\Controllers\Admin\BlogController::class, 'footerlistes'])->name('footerlistes');
Route::post('dashboard/updatesubcategory/{id}', [App\Http\Controllers\Admin\BlogController::class, 'footerlistus'])->name('footerlistus');

/*====================End Footer Content Data========================*/


/*=========================Meta Data Add============================*/

Route::get('dashboard/meta-data', [App\Http\Controllers\Admin\BlogController::class, 'metadata'])->name('meta.data');
Route::get('dashboard/meta-not-present', [App\Http\Controllers\Admin\BlogController::class, 'metanotdata'])->name('meta.notdata');
Route::get('dashboard/edit/metadata/{id}', [App\Http\Controllers\Admin\BlogController::class, 'editmetadata'])->name('meta.dataedit');
Route::post('dashboard/savemetadata', [App\Http\Controllers\Admin\BlogController::class, 'savemetadata'])->name('meta.savemetadata');


/*======================End Meta Data Add============================*/