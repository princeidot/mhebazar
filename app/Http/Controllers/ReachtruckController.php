<?php

namespace App\Http\Controllers;

use App\Models\allpro;
use App\Models\reachtruck;
use App\Models\forklift;
use App\Models\sparepart;
use App\Models\forkattachment;
use App\Models\proremark;
use App\Models\Subcate;
use App\Models\rating;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\equipment;
use App\Models\containerhandler;

use Illuminate\Http\Request;

class ReachtruckController extends Controller
{
    public function index(Request $request)
    {
       $sort = $request->input('sort', 'desc');
	  $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 10)->get();
       
        $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
                    ->with(['category', 'vendor', 'subcategory','userData'])
                    ->where('apporv', '!=', '2')
                    ->where('cate_id', '10')
                    ->orderBy('id', $sort)
                    ->get();

        $head = Subcate::all();
        $categoryname = equipment::where('id', '=', '10')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();

        return view('newfrontened.category.maincategory', compact('categoryname', 'allcategory', 'cateproduct', 'head', 'category'));
 
    }
    
    public function rackings(Request $request)
    {
         $sort = $request->input('sort', 'desc');
        $head = Subcate::all();
        $allcategory = equipment::limit(13)->get();
        $cateproduct = allpro::select('id', 'sub_id', 'title', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','user_id','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id', '11')
            ->orderBy('id', $sort)
            ->get();
        return view('newfrontened.temptime.racking',compact('head', 'allcategory','cateproduct'));
    }
    public function forklift(Request $request)
    {
          $sort = $request->input('sort', 'desc');
        $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 12)->get();

        $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
        ->where('apporv', '!=', '2')
            ->where('cate_id', '12')
           ->orderBy('id', $sort)
            ->get();

        $head = Subcate::all();
        $categoryname = equipment::where('id', '=', '12')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();

        return view('newfrontened.category.maincategory', compact('categoryname', 'allcategory', 'cateproduct', 'head', 'category'));
  
    }

  public function containerhandler(Request $request)
    {
         $sort = $request->input('sort', 'desc');
$category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 13)->get();

        $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
                    ->with(['category', 'vendor', 'subcategory','userData'])
                    ->where('allpro.apporv', '!=', '2')
                    ->where('allpro.cate_id', '13')
                    ->orderBy('id', $sort)
                    ->get();

        $head = Subcate::all();
        $categoryname = equipment::where('id', '=', '13')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();

        return view('newfrontened.category.maincategory', compact('categoryname', 'allcategory', 'cateproduct', 'head', 'category'));
 
    }
   
    public function ems()
    {
       $head = Subcate::all();
        return view('newfrontened.temptime.ems',compact('head'));
    }

    public function orderpicker()
    {
       $head = Subcate::all();
        $allcategory = equipment::limit(13)->get();
        return view('newfrontened.temptime.order',compact('head','allcategory'));
    }

    public function vna(Request $request)
    {
        $sort = $request->input('sort', 'desc');
       $head = Subcate::all();
        $allcategory = equipment::limit(13)->get();
        $cateproduct = allpro::select('id', 'sub_id', 'title', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','user_id','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id', '16')
            ->orderBy('id', $sort)
            ->get();
      
        return view('newfrontened.temptime.vna', compact('head', 'allcategory','cateproduct'));
    }
    public function agv()
    {
	$head = Subcate::all();
        $allcategory = equipment::limit(13)->get();
        return view('newfrontened.temptime.agv', compact('head', 'allcategory'));
    }
    public function rental()
    {
	 $head = Subcate::all();
        return view('newfrontened.frontened.rental',compact('head'));
    }

    public function usedmhe(Request $request)
    {
         $sort = $request->input('sort', 'desc'); 
           $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('old', '1')
            ->orderBy('id', $sort)
            ->get();      
            
        $head = Subcate::all();
        $allcategory = equipment::limit(13)->get();
        return view('newfrontened.frontened.usedmhe',compact('cateproduct','head', 'allcategory'));
    }

    public function usedmhep($title ,$slug,Request $request)
    {
        $id = array_slice(explode('-', $slug), -1)[0];
        $pt = allpro::where('id', '=', $id)->with(['category', 'vendor', 'subcategory','userData'])->first();
       
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
    

    public function attachments()
    {
       $sparepart = forkattachment::all();
        $head = Subcate::all();
        $allcategory = equipment::limit(13)->get();
        return view('newfrontened.frontened.attchment', compact('sparepart','head', 'allcategory'));
    }
    public function sparep()
    {
      $sparepart = sparepart::all();
        $head = Subcate::all();
        $allcategory = equipment::limit(13)->get();
                return view('newfrontened.frontened.spareparts', compact('sparepart','head', 'allcategory'));

    }
    public function services()
    {
        $head = Subcate::all();
        return view('newfrontened.frontened.services',compact('head'));
    }
    public function training()
    {
$head = Subcate::all();
              return view('newfrontened.frontened.training',compact('head'));
    }
}
