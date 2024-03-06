<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\carts;
use App\Models\allpro;
use App\Models\Subcate;
use App\Models\rating;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use App\Models\htpuploaddata;
use Illuminate\Http\Request;

class CartController extends Controller
{

       public function addToCart(Request $request, $productId)
    {
        $user = Auth::user();
        $product = allpro::find($productId);
        //Move Product wishlist to cart
         $wishlistItem = Wishlist::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();
           
        if ($wishlistItem) {
            // Create or update cart item
            $cartItem = carts::firstOrCreate(
                ['user_id' => $user->id, 'product_id' => $productId],
                ['quantity' => 1]
            );

            // Delete the wishlist item
            $wishlistItem->delete();

            return redirect()->back()->with('csuccess', 'Product moved to cart.');
        }
        else{
          if (!$product) {
            return redirect()->back()->with('cerror', 'Product not found');
        }
    //Add Product to cart
        $cartItem = carts::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if (!$cartItem) {
            carts::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        } else {
            $cartItem->quantity++;
            $cartItem->save();
        }

        return redirect()->back()->with('csuccess', 'Product added to cart');
    }
    
     
    }

    public function removeFromCart(Request $request, $productId)
    {
        $user = Auth::user();
        $wishlistItem = carts::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return redirect()->back()->with('csuccess', 'Product removed from wishlist');
        }

        return redirect()->back()->with('cerror', 'Product not found in wishlist');
    }

    public function updateCartQuantity(Request $request, $productId)
    {
        $user = Auth::user();
        $cartItem = carts::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $newQuantity = $request->input('quantity');
            $cartItem->quantity = $newQuantity;
            $cartItem->save();

            return response()->json(['message' => 'Quantity updated successfully']);
        }

        return response()->json(['error' => 'Cart item not found'], 404);
    }
    public function calculateCartTotal()
    {
        $user = Auth::user();
        $cartItems = carts::where('user_id', $user->id)->get();

        $totalQuantity = 0;
        $totalPrice = 0;

        foreach ($cartItems as $cartItem) {
            $totalQuantity += $cartItem->quantity;
            $totalPrice += $cartItem->quantity * $cartItem->product->price;
        }

        return [
            'totalQuantity' => $totalQuantity,
            'totalPrice' => $totalPrice,
        ];
    }

    public function cart()
    {
        
        $userId = Auth::id();
        $cartItems = carts::where('user_id', $userId)->with('product')->get();
        $head = Subcate::all();
        return view('newfrontened.frontened.cart', compact('cartItems', 'head'));
    }

      public function reviewstore(Request $request)
    {
    
      
        $review = new rating();
        $review->user_id = $request->user_id;
        $review->product_id = $request->booking_id;
        $review->review = $request->comment;
        $review->rating = $request->rating;
        $review->status = 1;
        $review->save();
        return redirect()->back()->with('success', 'Your review has been submitted Successfully,');
    }

  
  
}
