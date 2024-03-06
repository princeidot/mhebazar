<?php

namespace App\Http\Controllers;

use App\Models\_dock__leveller;
use App\Models\ept;
use App\Models\mpt;
use App\Models\htpuploaddata;
use App\Models\scissorslift;
use App\Models\stacker;
use App\Models\forklift;
use App\Models\sparepart;
use App\Models\Subcate;
use App\Models\forkattachment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $sparepart = sparepart::select('name')->get();
        $allfattachment = forkattachment::all();
       
       $allstacker = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model', 'capacity')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')->where('cate_id',  '3')
            ->groupby('sub_id')
            ->limit(9)
            ->orderBy('id', 'DESC')
            ->get();
        $forklift = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model', 'capacity')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id',  '12')
            ->limit(9)->orderBy('id', 'DESC')
            ->get();
        $scissorslift = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model', 'capacity')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id',  '8')
            ->limit(9)
            ->orderBy('id', 'DESC')
            ->get();
        $head = Subcate::all();
    $new = allpro::select('id', 'title', 'cate_id', 'sub_id', 'user_id', 'img1', 'apporv', 'price', 'model', 'capacity','old')
        ->with(['category', 'vendor', 'subcategory','userData'])
        ->where('apporv', '!=', '2')
      
        ->limit(10)
        ->orderBy('id', 'DESC')
        ->get();
   
        return view('newfrontened.frontened.index-2', compact('new','allfattachment','sparepart','head', 'allstacker',  'forklift', 'scissorslift'));
 }
  
}
