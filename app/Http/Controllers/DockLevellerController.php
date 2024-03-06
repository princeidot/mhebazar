<?php

namespace App\Http\Controllers;
use App\Models\_dock__leveller;
use App\Models\sparepart;
use App\Models\allpro;
use PDF;
use App\Models\rating;
use Illuminate\Support\Facades\DB;
use App\Models\Subcate;
use Illuminate\Support\Facades\Session;
use App\Models\specifications;
use App\Models\equipment;

use Illuminate\Http\Request;

class DockLevellerController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'desc');
         $category = Subcate::select('sub_cate.*', DB::raw("(SELECT count(*) FROM allpro
             WHERE allpro.apporv != 2 AND allpro.sub_id = sub_cate.id GROUP BY allpro.sub_id) as total"))->where('cate_id', 7)->get();
        $cateproduct = allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
                    ->with(['category', 'vendor', 'subcategory','userData'])
                    ->where('apporv', '!=', '2')
                    ->where('cate_id', '7')
                    ->orderBy('id', $sort)
                    ->get();
        $head = Subcate::all();
        $categoryname = equipment::where('id', '=', '7')->first();
        $allcategory = equipment::where('name', '!=', $categoryname->name)->get();
        return view('newfrontened.category.maincategory', compact('allcategory', 'categoryname', 'cateproduct', 'cateproduct', 'head', 'category'));

    }



   

    public function createPDF(Request $request)
    {
        $datas = $request->input();
        $req = new specifications;
        $req->name = $datas['name'];
        $req->email = $datas['email'];
        $req->pname = $datas['title'];
        $req->save();

        $htpuploaddata = allpro::where('id', '=', $datas['title'])->first();;

        $data['htpuploaddata'] = $htpuploaddata;
        $pdf = PDF::loadView('pdf.dockleveller', $data);
        return $pdf->download($datas["title"] . '.pdf');
    }
}
