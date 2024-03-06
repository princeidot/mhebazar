<?php

namespace App\Http\Controllers;

use App\Models\htpuploaddata;
use Illuminate\Http\Request;
use App\Models\sparepart;
use App\Models\allpro;
use PDF;
use App\Models\userinfos;
use App\Models\Subcate;
use App\Models\rating;
use App\Models\specifications;
use App\Models\equipment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Writer\Pdf as WriterPdf;
use Symfony\Component\HttpFoundation\RequestStack;

class HandController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'desc'); 
        $category= Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
                 WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id',2)->get();
    
       $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id', '2')
            ->orderBy('id', $sort)
            ->get();      
             
                
        $head = Subcate::all();
        $categoryname= equipment::where('id','=','2')->first();
        $allcategory=equipment::where('name','!=',$categoryname->name)->get();

        return view('newfrontened.category.maincategory', compact('categoryname', 'allcategory','cateproduct','head','category'));
    }




    public function product($slug, Request $request)
    {
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
        $check = array_slice(explode('-', $currenturl), -1)[0];
        if(is_numeric($check)){
   
            $cateproduct =   $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
                ->where('apporv', '!=', '2')
                ->where('sub_id', $check)
               ->orderBy('id', $sort)
                ->get(); 
        
            $mainsubcategory = Subcate::select('sub_cate.*', 'all equipment.id as aid', 'all equipment.name as aname')->join('all equipment', 'sub_cate.cate_id', '=', 'all equipment.id')->where('sub_cate.id', '=', $check)->first();

            $capacity = allpro::select('id', 'cate_id', 'sub_id', 'apporv', 'capacity')->where('apporv', '!=', '2')->where('sub_id',  $check)->groupby('capacity')->get();         
            $allcategory = equipment::where('id', '!=', $mainsubcategory->cate_id)->get();
            $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->with('category')->where('cate_id', $mainsubcategory->cate_id)->get();
        
            $head = Subcate::all();

            return view('newfrontened.category.subcategory', compact('mainsubcategory','allcategory', 'capacity', 'cateproduct', 'category', 'head'));
        }
        
        abort(404);
//         $name = str_replace('-', ' ', $slug);
//         $words = preg_replace('/[0-9]+/', '', str_replace('kg', '', $name));

  
//         $pt1 = allpro::select('id','title','sub_id')->where('title', '=', $name)->get();
//         if (empty($pt1[0]->id) > 0) {
//             $id = 0;
//             $sub_id=0;
//         } else {
//             $id = $pt1[0]->id;
//             $sub_id = $pt1[0]->sub_id;
//         }
              
//         $pt = allpro::where('id', '=', $id)->first();
        
//         $vendor= userinfos::where('userid','=',$pt->user_id)->first();

//         $similiar = allpro::select('id', 'sub_id', 'title', 'img1')->where('sub_id', $sub_id)->where('apporv', '!=', '2')->whereNotIn('id', [$pt->id])->get();
         
//         $all =allpro::select('id', 'cate_id', 'sub_id', 'title', 'img1')
//         ->where('cate_id', $pt->cate_id)
//         ->where('apporv', '!=', '2')
//         ->whereNotIn('id', [$pt->id])
//         ->orderBy('id', 'DESC')
//         ->get();
      
//         $value= rating::select('ratings.*', 'userinfos.id', 'userinfos.name', 'userinfos.userid')
//         ->join('userinfos', 'ratings.user_id', '=', 'userinfos.userid')
//         ->where('ratings.product_id', '=', $id)
//         ->where('ratings.status','=','1')
//         ->limit(2)
//         ->get();
//         $cate = equipment::where('id', '=', $pt->cate_id)->first();
        
// 		 //set session for recently product//
//         if (empty(Session::get('session_id'))) {
//             $session_id = md5(uniqid(rand(), true));
//         } else {
//             $session_id = Session::get('session_id');
//           }
//           Session::put('session_id', $session_id);
//         // Insert product in table if not already exists
//         $countRecentlyViewedProducts = DB::table('recently_viewed_product')->where(['product_id' => $id, 'session_id' => $session_id])->count();
//         if ($countRecentlyViewedProducts == 0) {
//             DB::table('recently_viewed_product')->insert(['product_id' => $id, 'session_id' => $session_id]);
//         }
//         // Get Recently Viewed Products
//         $recentProductsIds = DB::table('recently_viewed_product')->select('product_id')
//         ->where('product_id', '!=',$id)->where('session_id',$session_id)
//         ->inRandomOrder()->get()->take(4)->pluck('product_id');
//           $recentlyviewedproduct = allpro::select('allpro.id as aid', 'allpro.cate_id', 'allpro.sub_id', 'allpro.title', 'allpro.img1', 'all equipment.*')
//                              ->join('all equipment', 'allpro.cate_id', 'all equipment.id')                    
//                             ->WhereIn('allpro.id', $recentProductsIds)->get();
// 		$recentProductsCount = $recentProductsIds->count();
// 		 $spart = sparepart::inRandomOrder()->limit(5)->get();
//         $head = Subcate::all();
//       return view('newfrontened.product.hptproduct', compact('vendor','cate','head','name','value','spart','pt', 'name', 'similiar', 'all','recentlyviewedproduct', 'recentProductsCount'));
   
    }
    public function show()
    {
        return view('pdf.hpt');
    }



    public function createPDF(Request $request)
    {
        $datas = $request->input();
        $req = new specifications;
        $req->name = $datas['name'];
        $req->email = $datas['email'];
        $req->pname = $datas['title'];
        $req->save();
        
        $htpuploaddata = htpuploaddata::where('title', '=', $datas['title'])->first();;

        $data['htpuploaddata'] = $htpuploaddata;
        $pdf = PDF::loadView('pdf.hpt', $data);
        return $pdf->download('hpt.pdf');
    }
}
