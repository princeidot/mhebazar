<?php

namespace App\Providers;

use App\Models\Wishlist;
use App\Models\carts;
use App\Models\equipment;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\CartController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Paginator::useBootstrap();
         
           View::composer('*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $wishlistCount = Wishlist::where('user_id', $user->id)->count();
                $view->with('wishlistCount', $wishlistCount);
            } else {
                $view->with('wishlistCount', 0); // If user not logged in, wishlist count is 0
            }
        });
        
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $cartController = new CartController();
                $cartTotal = $cartController->calculateCartTotal();
                $view->with('cartTotal', $cartTotal);
            } else {
                $view->with('cartTotal', null); // Total price of cart products
            }
        });
        
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $CartCount = carts::where('user_id', $user->id)->count();
                $view->with('CartCount', $CartCount);
            } else {
                $view->with('CartCount', 0); // If user not logged in, Cart count is 0
            }
        });
        
        
        //cart Product In header
        View::composer('layouts.frontened.header', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $cartItems = carts::with('product')->where('user_id', $user->id)->limit(2)->get();
                $view->with('cartItems', $cartItems);
            } else {
                $view->with('cartItems', []);
            }
        });
        
        
        //Serach Category In header
        View::composer('layouts.frontened.header',function ($view) {
            $allcategory = equipment::whereNotIn('id', [14, 15, 16, 17])->orderby('name', 'ASC')->get();
                $view->with('allcategory', $allcategory);
            });
        
        
    }
}
