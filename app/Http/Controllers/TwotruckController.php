<?php

namespace App\Http\Controllers;

use App\Models\allpro;
use Illuminate\Http\Request;
use App\Models\sparepart;
use App\Models\Subcate;
use Illuminate\Support\Facades\DB;
use App\Models\towtruck;
use App\Models\rating;
use Illuminate\Support\Facades\Session;
use App\Models\equipment;

class TwotruckController extends Controller
{
   public function index(Request $request){
       $sort = $request->input('sort', 'desc');
 $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 6)->get();
            $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
                          ->with(['category', 'vendor', 'subcategory','userData'])
                          ->where('apporv', '!=', '2')
                          ->where('cate_id', '6')
                          ->orderBy('id', $sort)
                          ->get();
            $head = Subcate::all();
            $categoryname = equipment::where('id', '=', '6')->first();
            $allcategory = equipment::where('name', '!=', $categoryname->name)->get();
            return view('newfrontened.category.maincategory', compact('allcategory', 'categoryname', 'cateproduct', 'cateproduct', 'head', 'category'));
 
   }
    
}
