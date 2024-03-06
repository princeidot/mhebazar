<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\getdata;
use App\Models\rentalrequest;
use App\Models\rentandbuy;
use App\Models\allpro;
use DataTables;

class DatatableController extends Controller
{


    public function getform(Request $request)
    {
        if ($request->ajax()) {
            $data = getdata::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $x = '
                    
                    <form action="' . url('dashboard/pf/' . $row->id) . '" method="POST">
                    ' . csrf_field() . '
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" rel="tooltip" class="btn btn-sm btn-danger deleteUser" data-original-title="" title="">
                    <i class="material-icons">delete</i></button></form>';

                    return $x;
                })
                ->editColumn('created_at', function ($row) {
                    return date('d/m/y H:i', strtotime($row->created_at));
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function getrentbuy(Request $request)
    {
        if ($request->ajax()) {
            $data = rentandbuy::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $x = '
                    
                    <form action="' . url('dashboard/rb/' . $row->id) . '" method="POST">
                    ' . csrf_field() . '
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" rel="tooltip" class="btn btn-sm btn-danger deleteUser" data-original-title="" title="">
                    <i class="material-icons">delete</i></button></form>';

                    return $x;
                })
                ->editColumn('rentbuy', function ($row) {
                    if($row->rentbuy == 1){
                        $rent='Rent';
                    }
                    else{
                        $rent='Buy';
                    }
                    return $rent;
                })
                ->editColumn('created_at', function ($row) {
                    return date('d/m/y H:i', strtotime($row->created_at));
                })
               
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function getcontact(Request $request)
    {
        if ($request->ajax()) {
            $data = contact::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                
                ->addColumn('action', function ($row) {
                    $x = '
                    
                    <form action="' . url('dashboard/contact/' . $row->id) . '" method="POST">
                    ' . csrf_field() . '
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" rel="tooltip" class="btn btn-sm btn-danger deleteUser" data-original-title="" title="">
                    <i class="material-icons">delete</i></button></form>';

                    return $x;
                })
                ->editColumn('created_at', function ($row) {
                    return date('d/m/y H:i', strtotime($row->created_at));
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function getrental(Request $request)
    {
        if ($request->ajax()) {
            $data = rentalrequest::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                
                ->addColumn('action', function ($row) {
                    $x = '
                    
                    <form action="' . url('dashboard/rental/' . $row->id) . '" method="POST">
                    ' . csrf_field() . '
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" rel="tooltip" class="btn btn-sm btn-danger deleteUser" data-original-title="" title="">
                    <i class="material-icons">delete</i></button></form>';

                    return $x;
                })
                ->editColumn('created_at', function ($row) {
                    return date('d/m/y H:i', strtotime($row->created_at));
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    
  
    public function allproduct(Request $request)
    {
        
        if ($request->ajax()) {
            $data = allpro::select('allpro.id', 'allpro.title', 'allpro.cate_id', 'allpro.sub_id', 'allpro.user_id', 'allpro.apporv', 'allpro.img1', 'all equipment.id as aid', 'all equipment.name as aname', 'sub_cate.id as sid', 'sub_cate.title as stitle')
                ->join('all equipment', 'allpro.cate_id', '=', 'all equipment.id')
                ->join('sub_cate', 'allpro.sub_id', '=', 'sub_cate.id')
                ->get();
            return Datatables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $x = '
                    
                  
                   
                    <button type="submit" rel="tooltip" class="btn btn-sm btn-danger" data-original-title="" title="">
                    <a href="' . url('dashboard/editproduct/' . $row->id) . '"><i class="material-icons">edit</i></a></button>';

                    return $x;
                })
                ->editColumn('apporv', function ($row) {
                    if ($row->apporv == 2) {
                        $apporv = 'Not Approve';
                    } else {
                        $apporv = 'Approve';
                    }
                    return $apporv;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
  
  
  
  
}
