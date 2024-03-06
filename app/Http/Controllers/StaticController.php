<?php

namespace App\Http\Controllers;

use App\Models\_dock__leveller;
use App\Models\ept;
use App\Models\mpt;
use App\Models\htpuploaddata;
use App\Models\scissorslift;
use App\Models\stacker;
use App\Models\User;
use App\Models\forklift;
use App\Models\sparepart;
use App\Models\forkattachment;
use App\Models\Subcate;
use App\Models\equipment;
use App\Models\allpro;
use App\Models\rating;
use App\Models\blog;
use App\Models\userinfos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class StaticController extends Controller
{

public function index()
    {
 $sparepart = sparepart::select('name')->get();
        $allfattachment = forkattachment::all();
       
       $allstacker = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model', 'capacity','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
           ->whereNull('old')
            ->where('cate_id',  '3')
            ->groupby('sub_id')
            ->limit(9)
            ->orderBy('id', 'DESC')
            ->get();
        $forklift = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model', 'capacity','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
           ->whereNull('old')
            ->where('cate_id',  '12')
            ->limit(9)->orderBy('id', 'DESC')
            ->get();
        $scissorslift = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model', 'capacity','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->whereNull('old')
            ->where('cate_id',  '8')
            ->limit(9)
            ->orderBy('id', 'DESC')
            ->get();
        $head = Subcate::all();
    $new = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model', 'capacity','old')
        ->with(['category', 'vendor', 'subcategory','userData'])
        ->where('apporv', '!=', '2')
        ->whereNull('old')
        ->limit(10)
        ->orderBy('id', 'DESC')
        ->get();
  
        return view('newfrontened.frontened.index-2', compact('new','allfattachment','sparepart','head', 'allstacker',  'forklift', 'scissorslift'));
    }


       public function about()
    {
        $head = Subcate::all();
        return view('newfrontened.frontened.about',compact('head'));
    }

    public function contact()
    {
        $head = Subcate::all();
        return view('newfrontened.frontened.contact', compact('head'));
    }
  
      public function testimonials(){
        $head = Subcate::all();
      return view('newfrontened.frontened.testimonials',compact('head'));
    }
  
   public function sucessfully(){
        return view('auth.successfully');
    }

      public function sitemap(){

        
        $equipment= equipment::where('id','!=',array(18))->get();
        

        return response()->view('sitemap.sitemap',compact('equipment'))->header('Content-Type', 'text/xml');
   
    }

    public function category(Request $request,$category)
    {
        $name=str_replace('-',' ',$category);
        if($name == 'electric pallet truck'){
            $name='Electric Pallet Truck (BOPT)';
        }
     
         $equipment = equipment::where('name', '=', $name)->first();
        
        $product =allpro::select('id', 'sub_id', 'title','user_id', 'cate_id', 'apporv', 'model', 'capacity','old')
                    ->with(['category', 'vendor', 'subcategory','userData'])
                    ->where('cate_id','=', $equipment->id)
                    ->where('apporv', '!=', '2')
                    ->get();
                    
	    $subcategory = Subcate::select('id','cate_id','title')->where('cate_id','=',$equipment->id)->get();
        return response()->view('sitemap.sitemapcategory', compact('subcategory','equipment', 'product', 'category'))->header('Content-Type', 'text/xml');
    }
  
     public function blogsitemap(){
        $blogs = blog::select('id','blog_url', 'updated_at')->orderBy('id', 'desc')->get();
        return response()->view('sitemap.blog',compact('blogs'))->header('Content-Type', 'text/xml');

    }
  
      public function batteries(Request $request)
    {
     $sort = $request->input('sort', 'desc');
        $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 1)->get();

        $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
        ->with(['category', 'vendor', 'subcategory','userData'])
        ->where('apporv', '!=', '2')
            ->where('cate_id', '1')
            ->orderBy('id', $sort)
            ->get();
    
        $head = Subcate::all();
        $categoryname = equipment::where('id', '=', '1')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();

        return view('newfrontened.category.maincategory', compact('categoryname', 'allcategory', 'cateproduct', 'head', 'category'));

    }
  
      public function batslug(Request $request, $slug)
    {
         $check = array_slice(explode('-', $slug), -1)[0];
        $cateproduct = allpro::select('id', 'sub_id', 'title', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old','user_id')
                    ->with(['category', 'vendor', 'subcategory','userData'])
                    ->where('apporv', '!=', '2')
                    ->where('sub_id', $check)
                    ->orderBy('id', 'DESC')
                    ->get();

        $mainsubcategory = Subcate::select('sub_cate.*', 'all equipment.id as aid', 'all equipment.name as aname')->join('all equipment', 'sub_cate.cate_id', '=', 'all equipment.id')->where('sub_cate.id', '=', $check)->first();

        $capacity = allpro::select('id', 'sub_id', 'title', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old','user_id')
                    ->with(['category', 'vendor', 'subcategory','userData'])
                    ->where('apporv', '!=', '2')
                    ->where('sub_id',  $check)
                    ->groupby('capacity')
                    ->get();
        $allcategory = equipment::where('id', '!=', $mainsubcategory->cate_id)->get();
        $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', $mainsubcategory->cate_id)->get();
        $head = Subcate::all();

        return view('newfrontened.category.subcategory', compact('mainsubcategory', 'allcategory', 'capacity', 'cateproduct', 'category', 'head'));

    }
    
  
        public function vendorsl()
    {
        $head = Subcate::all();
        $vendor = userinfos::select('userinfos.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.user_id = userinfos.userid GROUP BY allpro.user_id) as total"))->get();
        $mhe= allpro::select('id','user_id', 'apporv')->where('user_id','=',null)->where('apporv','!=','2')->count();

        $category = equipment::select('all equipment.*',
                    DB::raw("(SELECT COUNT(*) FROM allpro WHERE allpro.apporv != 2 AND allpro.cate_id = `all equipment`.id) AS total")
                     )->get();
       return view('newfrontened.frontened.vendors',compact('head', 'vendor','mhe', 'category'));
    }
  
    public function vendorss(Request $request,$slug)
    {
        $head = Subcate::all();
        $name=str_replace('-',' ',$slug);
         $sort = $request->input('sort', 'desc');
        $idvendor= userinfos::select('id','name','email','brandname','userid','descp','profile')->where('brandname',$name)->first();
        if($idvendor == null){
             $allproducts = $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
             ->with(['category', 'vendor', 'subcategory'])
             ->where('apporv', '!=', '2')
             ->whereNull('user_id')
             ->orderBy('id', $sort)
             ->get();
        }else{

        $allproducts = $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
             ->with(['category', 'vendor', 'subcategory', 'userData'])
             ->where('apporv', '!=', '2')
             ->where('user_id',  $idvendor->userid)
             ->orderBy('id', $sort)
             ->get();
        
        }
     
        return view('newfrontened.frontened.vendorsingle', compact('idvendor', 'allproducts','head','name'));
        
        }
  
}
