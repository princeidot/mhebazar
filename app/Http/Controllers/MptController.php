<?php

namespace App\Http\Controllers;

use App\Models\allpro;
use App\Models\mpt;
use App\Models\sparepart;
use App\Models\Subcate;
use App\Models\rating;
use PDF;
use App\Models\userinfos;
use App\Models\equipment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\specifications;
use Illuminate\Http\Request;

class MptController extends Controller
{
   public function index(Request $request)
   {
       $sort = $request->input('sort', 'desc');
         $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 4)->get();
             
        $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id', '4')
            ->orderBy('id', $sort)
            ->get();   
        
        $head = Subcate::all();
        $categoryname = equipment::where('id', '=', '4')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();
       
        return view('newfrontened.category.maincategory', compact('categoryname', 'allcategory', 'cateproduct', 'head', 'category'));
   }
    


    public function createPDF(Request $request)
    {
        $datas = $request->input();
        $req = new specifications;
        $req->name = $datas['name'];
        $req->email = $datas['email'];

        $req->save();

        $htpuploaddata = mpt::where('id', '=', $datas['title'])->first();;

        $data['htpuploaddata'] = $htpuploaddata;
        $pdf = PDF::loadView('pdf.mpt', $data);
        return $pdf->download($datas["title"] . '.pdf');
    }
}
