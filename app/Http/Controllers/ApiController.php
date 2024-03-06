<?php

namespace App\Http\Controllers;

use App\Models\allpro;
use App\Models\rating;
use App\Models\getdata;
use App\Models\Subcate;
use App\Models\equipment;
use App\Models\sparepart;
use App\Models\userinfos;
use App\Models\forkattachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ApiController extends Controller
{
    function list($cate_id=null){

        if($cate_id){
            return Subcate::where('cate_id',$cate_id)->get();
        }else{
            return Subcate::all();
        }
       
    }

    public function getdata($id){

        return userinfos::find($id);
        
      
    }
    public function vgetdata($id)
    {
        return allpro::select('allpro.*','users.id as uid','user.name as uname')->wehere('allpro.id',$id)->first();
    }
    
        public function allproduct()
    {
        $head = Subcate::all();
        $allcategory = equipment::get();
        $cateproduct = allpro::select('id','title','cate_id', 'sub_id', 'user_id','img1', 'apporv', 'price', 'description','capacity','model','old')
                    ->with(['category', 'vendor','subcategory','userData'])
                    ->where('apporv', '!=', '2')
                    ->orderby('id','Desc')
                    // ->limit(10)
                    ->get();
                    // dd($cateproduct);
        return view('newfrontened.temptime.allproduct',compact('head','cateproduct','allcategory'));
    }

     public function all($category,$slug,Request $request)
    {
     
        $id = array_slice(explode('-', $slug), -1)[0];
        $pt = allpro::where('id', '=', $id)->with(['category', 'vendor', 'subcategory','userData'])->first();
         $currenturl = url()->current();
        $sort = $request->input('sort', 'desc');
        
       if(strpos($currenturl, "=") !== false){
            $check1 = array_slice(explode('-', $currenturl), -2)[0];
            $capacity = substr($slug, strpos($slug, "=") + 1);

            $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('sub_id', $check1)
            ->where('capacity', 'like', "%$capacity%")
           ->orderBy('id', $sort)
            ->get();
 
            $mainsubcategory = Subcate::select('sub_cate.*', 'all equipment.id as aid', 'all equipment.name as aname')->join('all equipment', 'sub_cate.cate_id', '=', 'all equipment.id')->where('sub_cate.id', '=', $check1)->first();

            $capacity = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('sub_id',  $check1)
            ->groupby('capacity')
            ->get();
            $allcategory = equipment::where('id', '!=', $mainsubcategory->cate_id)->get();
            $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', $mainsubcategory->cate_id)->get();
            $head = Subcate::all();

            return view('newfrontened.category.subcategory', compact('mainsubcategory', 'allcategory', 'capacity', 'cateproduct', 'category', 'head'));
        }

    if($pt->sub_id==null){
       $similiar = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price','model','capacity','old')
        ->with(['category', 'vendor', 'subcategory','userData'])
        ->where('cate_id', $pt->cate_id)
        ->where('apporv', '!=', '2')
        ->whereNotIn('id', [$id])
        ->get();
    }else{
        $similiar = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price','model','capacity','old')
        ->with(['category', 'vendor', 'subcategory','userData'])
        ->where('sub_id', $pt->sub_id)
        ->where('apporv', '!=', '2')
        ->whereNotIn('id', [$id])
        ->get();
    }   
    
   
       $all = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model','capacity','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('cate_id', $pt->cate_id)
            ->where('apporv', '!=', '2')
            ->whereNotIn('id', [$pt->id])
            ->orderBy('id', 'DESC')
            ->get();
            
        $value = rating::select('ratings.*', 'userinfos.id', 'userinfos.name', 'userinfos.userid')
            ->join('userinfos', 'ratings.user_id', '=', 'userinfos.userid')
            ->where('ratings.product_id', '=', $id)
            ->where('ratings.status', '=', '1')
            ->limit(2)
            ->get();
       

        //set session for recently product//
        if (empty(Session::get('session_id'))) {
            $session_id = md5(uniqid(rand(), true));
        } else {
            $session_id = Session::get('session_id');
        }
        Session::put('session_id', $session_id);
        // Insert product in table if not already exists
        $countRecentlyViewedProducts = DB::table('recently_viewed_product')->where(['product_id' => $id, 'session_id' => $session_id])->count();

        if ($countRecentlyViewedProducts == 0) {
            DB::table('recently_viewed_product')->insert(['product_id' => $id, 'session_id' => $session_id]);
        }

        // Get Recently Viewed Products
        $recentProductsIds = DB::table('recently_viewed_product')->select('product_id')
        ->where('product_id', '!=', $id)->where('session_id', $session_id)
        ->inRandomOrder()->get()->take(5)->pluck('product_id');
        $recentlyviewedproduct = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model','capacity','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
        ->WhereIn('id', $recentProductsIds)->get();
        $recentProductsCount = $recentProductsIds->count();
        $spart = sparepart::inRandomOrder()->limit(5)->get();
        $head = Subcate::all();
         $allfattachment = forkattachment::all();
        return view('newfrontened.product.product', compact('allfattachment','head',  'value', 'spart', 'pt',  'similiar', 'all', 'recentlyviewedproduct', 'recentProductsCount'));

        
    }
    
    
        public function oldurl(Request $request)
    {

        $head = Subcate::all();
        $cateproduct = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id',  'apporv','capacity','model','old')
            ->with(['category', 'vendor','subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->get();
        return view('newfrontened.temptime.oldurls', compact('head', 'cateproduct'));
    }
    
}
