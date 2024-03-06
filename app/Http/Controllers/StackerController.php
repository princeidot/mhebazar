<?php

namespace App\Http\Controllers;

use App\Models\stacker;
use App\Models\sparepart;
use PDF;
use App\Models\allpro;
use App\Models\Subcate;
use App\Models\rating;
use Illuminate\Support\Facades\DB;
use App\Models\specifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\equipment;
use App\Models\userinfos;

class StackerController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'desc');
   $head = Subcate::all();
        $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 3)->get();
        $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
        ->where('apporv', '!=', '2')
        ->where('cate_id', '3')
        ->orderBy('id', $sort)
        ->get();
        $categoryname =equipment::where('id', '=', '3')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();
        $head = Subcate::all();
             return view('newfrontened.category.maincategory', compact('allcategory','categoryname','cateproduct','cateproduct','head','category'));
        
    }

   public function pallet(Request $request){
        $sort = $request->input('sort', 'desc');


        $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 19)->get();
        $cateproduct = allpro::select('id', 'sub_id', 'title', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id', '19')
            ->orderBy('id', $sort)
            ->get();


        $head = Subcate::all();
        $categoryname = equipment::where('id', '=', '19')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();

        return view('newfrontened.category.maincategory', compact('categoryname', 'allcategory', 'cateproduct', 'head', 'category'));
 
    }

     public function safety(Request $request){
        $sort = $request->input('sort', 'desc');


        $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 20)->get();
        $cateproduct = allpro::select('id', 'sub_id', 'title', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','user_id','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id', '20')
            ->orderBy('id', $sort)
            ->get();
      

        $head = Subcate::all();
        $categoryname = equipment::where('id', '=', '20')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();

        return view('newfrontened.category.maincategory', compact('categoryname', 'allcategory', 'cateproduct', 'head', 'category'));
 
    }



    public function createPDF(Request $request)
    {
        $datas = $request->input();
        $req = new specifications;
        $req->name = $datas['name'];
        $req->email = $datas['email'];
        $req->pname = $datas['title'];
       // $req->save();

        $htpuploaddata = allpro::where('id', '=', $datas['title'])->first();;

        $data['htpuploaddata'] = $htpuploaddata;
        $pdf = PDF::loadView('pdf.stacker', $data);
        return $pdf->download($datas["title"].'.pdf');
    }


}
