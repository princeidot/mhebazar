<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\allpro;
use App\Models\equipment;
use Illuminate\Http\Request;



class SubAdminController extends Controller
{
    public function index()
    {
        return view('admin.subadmin.user');
    }
    
    public function saddproduct(){
        $categ = equipment::whereNotIn('id', [14, 15, 16, 17])->orderby('name','ASC')->get();
        return view('admin.subadmin.addproduct',compact('categ'));
    }

    public function viewallpro(){
        return view('admin.allproductview');
    }

    public function deditproduct($id, Request $request)
    {
        $categ = equipment::get();
        $product = allpro::select('all equipment.id as cateid', 'all equipment.name as aname', 'allpro.*')
        ->join('all equipment', 'all equipment.id', '=', 'allpro.cate_id')
        ->where('allpro.id', '=', $id)->first();
        return view('admin.editproduct', compact( 'product', 'categ'));
    }
}
