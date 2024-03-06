<?php

namespace App\Http\Controllers;

use App\Models\allpro;
use App\Models\Subcate;
use App\Models\carts;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class WishlistController extends Controller
{
       public function addToWishlist(Request $request, $productId)
    {
        $user = Auth::user();
        $product = allpro::find($productId);
        
     $CartItems = carts::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();
        if($CartItems) {
            // Create or update cart item
            $wishlistItem = Wishlist::firstOrCreate(
                ['user_id' => $user->id, 'product_id' => $productId]
                
            );

            // Delete the wishlist item
            $CartItems->delete();

            return redirect()->back()->with('wsuccess', 'Product moved to Wishlist.');
        } else {
            if (!$product) {
                return redirect()->back()->with('werror', 'Product not found');
            }

            $wishlistItem = Wishlist::where('user_id', $user->id)
                ->where('product_id', $productId)
                ->first();

            if (!$wishlistItem) {
                Wishlist::create([
                    'user_id' => $user->id,
                    'product_id' => $productId,
                ]);

                return redirect()->back()->with('wsuccess', 'Product added to wishlist');
            }

            return redirect()->back()->with('werror', 'Product already in wishlist');
        }
    }

    public function removeFromWishlist(Request $request, $productId)
    {
        $user = Auth::user();        
        $wishlistItem = Wishlist::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return redirect()->back()->with('wsuccess', 'Product removed from wishlist');
        }

        return redirect()->back()->with('werror', 'Product not found in wishlist');
    }

    public function wish()
    {
        $userId = Auth::id();
        $wishlistItems = Wishlist::where('user_id', $userId)->with('product')->get();
        $head = Subcate::all();
        return view('newfrontened.frontened.wishlist', compact('wishlistItems','head'));
    }

    public function addToCompare($id)
    {
        $product = allpro::find($id);

        if (!$product) {
            // Handle product not found
            return redirect()->back()->with('error', 'Product not found!');
        }

        $compareList = session()->get('compare', []);
        if (count($compareList) < 4 && !in_array($id, $compareList)) {
            $compareList[] = $id;
            Session::put('compare', $compareList);
            return Redirect::back()->with('success', 'Product added to comparison list');
        } elseif (in_array($id, $compareList)) {
            return Redirect::back()->with('error', 'Product is already in comparison list');
        } else {
            return Redirect::back()->with('error', 'You can compare only Four products at a time');
        }
    }
    
    
    public function removeProduct($id)
    {
        $compareList = Session::get('compare', []);

        if (($key = array_search($id, $compareList)) !== false) {
            unset($compareList[$key]);
            Session::put('compare', $compareList);
            return redirect()->back()->with('success', 'Product removed from comparison list');
        }

        return redirect()->back()->with('error', 'Product not found in comparison list');
    }


    public function compare(){
        $compareList = session()->get('compare', []);
        $products = allpro::select('id','title', 'img1','capacity', 'price', 'manufacturer', 'model',  'operator_type', 'mast_type')->whereIn('id', $compareList)->get();
        $head = Subcate::all();
       return view('newfrontened.frontened.compare',compact('products','head'));
        }



    
}
