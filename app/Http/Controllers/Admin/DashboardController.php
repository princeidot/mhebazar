<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\allpro;
use App\Models\contact;
use App\Models\getdata;
use App\Models\proremark;
use App\Models\rentalrequest;
use App\Models\rentandbuy;
use App\Models\User;
use App\Models\userinfos;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Charts\adminchart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


use Illuminate\Http\Request;

class DashboardController extends Controller
{   

    public function index(Request $request)
    {
        $contact=contact::count();
        $rentandbuy= rentandbuy::count();
        $rentalrequest= rentalrequest::count();
        $product = getdata::count();


        $data = getdata::orderBy('created_at', 'desc')
        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-m-%d')"))
        ->get(array(DB::raw('Date(created_at) as date'),DB::raw('COUNT(*) as "views"')));

        $nameArray = $data->pluck('date')->all();     
        $nameArray1 = $data->pluck('views')->all();

        $chart = new adminchart;
        $chart->labels($nameArray);
        $chart->dataset('Product Quote','bar',$nameArray1,);

        $datam = getdata::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count', 'month_name');;
        $labels = $datam->keys();
        $data1 = $datam->values();
        $chartqm = new adminchart;
        $chartqm->labels($labels);
        $chartqm->dataset('Product Quote', 'bar', $data1,);



        $data = rentandbuy::orderBy('created_at', 'desc')
        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-m-%d')"))
        ->get(array(DB::raw('Date(created_at) as date'), DB::raw('COUNT(*) as "views"')));
        $nameArray2 = $data->pluck('date')->all();
        $nameArray3 = $data->pluck('views')->all();

        $chart1 = new adminchart;
        $chart1->labels($nameArray2);
        $chart1->dataset('Rent and Buy', 'bar', $nameArray3,);

        $datam = rentandbuy::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count', 'month_name');;
        $labels = $datam->keys();
        $data1 = $datam->values();
        $chartqm1 = new adminchart;
        $chartqm1->labels($labels);
        $chartqm1->dataset('Rent and Buy', 'bar', $data1,);



        $data = rentalrequest::orderBy('created_at', 'desc')
        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-m-%d')"))
        ->get(array(DB::raw('Date(created_at) as date'), DB::raw('COUNT(*) as "views"')));
        $nameArray4 = $data->pluck('date')->all();
        $nameArray5 = $data->pluck('views')->all();

        $chart2 = new adminchart;
        $chart2->labels($nameArray4);
        $chart2->dataset('Rental Form', 'bar', $nameArray5,);

        $datam = rentalrequest::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count', 'month_name');;
        $labels = $datam->keys();
        $data1 = $datam->values();
        $chartqm2 = new adminchart;
        $chartqm2->labels($labels);
        $chartqm2->dataset('Rental Form', 'bar', $data1,);



        $data = contact::orderBy('created_at', 'desc')
        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-m-%d')"))
        ->get(array(DB::raw('Date(created_at) as date'), DB::raw('COUNT(*) as "views"')));
        $nameArray6 = $data->pluck('date')->all();
        $nameArray7 = $data->pluck('views')->all();

        $chart3 = new adminchart;
        $chart3->labels($nameArray6);
        $chart3->dataset('Contact Form', 'bar', $nameArray7,);

        $datam = contact::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count', 'month_name');;
        $labels = $datam->keys();
        $data1 = $datam->values();
        $chartqm3 = new adminchart;
        $chartqm3->labels($labels);
        $chartqm3->dataset('Contact Form', 'bar', $data1,);


        return view('admin.index',compact('contact', 'rentandbuy', 'rentalrequest', 'product','chart','chart1','chart2','chart3', 'chartqm', 'chartqm1', 'chartqm2', 'chartqm3'));
    }

    public function pqform()
    {
        return view('admin.productqutoe');
    }
  
    public function rbform()
    {
       
        return view('admin.rbform');
    }
    public function rentalform()
    {
        
        return view('admin.rental');
    }
     public function contactform()
    {   
        
      return view('admin.contact');
    }
   
    public function cfdelete($id)
    {
        //contact::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully form Contact form');
    }
    public function pfdelete($id)
    {
     
     getdata::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully form Product Quote form');
    }
    public function rbdelete($id)
    {
       //rentandbuy::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully form Rent/Buy Quote form');
    }
    public function rfdelete($id)
    {
       // rentalrequest::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully form Rent/Buy Quote form');
    }


       public function vendor(){
        
      $maincate= userinfos::with('userData')->select('userinfos.*', 'allpro.id as aid', 'allpro.user_id as auid',DB::raw('COUNT(allpro.id) as product_count'))
                    ->leftJoin('allpro', 'allpro.user_id', '=', 'userinfos.userid')
                    ->whereNotNull('allpro.user_id')
                    ->groupBy('userinfos.userid')
                    ->orderby('userinfos.id','desc')
                    ->get();
        return view('admin.vendor', compact('maincate'));
    }
 public function vendoredit($id){
   
         $maincate= userinfos::with('userData')->where('userid',$id)->first();

        return view('admin.vendoredit', compact('maincate'));
    }
      public function updatedetails($id, Request $request)
    {
   
        $datas = $request->input();
        $req = userinfos::find($request->id);
        $req->cname= $datas['cname'];
        $req->descp= $datas['descp'];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name =  $image->getClientOriginalName();
                $image->move('css/asset/banner', $name);
                $data1[] = $name;
            }
        $req->banner = json_encode($data1);
            }
        $req->save();
        return redirect()->back()->with('success', 'Update Details');
    }
    


    public function user(){
        $getdata = userinfos::orderBy('id', 'Desc')->paginate(10);
        return view('admin.user', compact('getdata'));
    }

    public function userproduct($id) {
        $vdata=allpro::select('id', 'sub_id', 'title','user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('user_id','=',$id)->get();
   //dd($vdata);
        $getdata = userinfos::where('userid',$id)->first();
      
        return view('admin.vproduct', compact('vdata','getdata'));
    }

    public function userproducts($id)
    {
        // $vdata = allpro::find($id)->first();
        // dd($vdata);
        $pid=$id;
        $vdata = allpro::select('allpro.*')
        ->with(['category', 'vendor', 'subcategory','userData'])
        ->where('id', $id)->first();
        
        return view('admin.vproducts', compact('vdata'));
    }



    public function approve($id, Request $request)
    {
     
        $datas = $request->input();
        $req = allpro::find($request->id);
        $req->apporv= $datas['approve'];
        $req->save();
        return redirect()->back()->with('success', 'Product Approve');
    }

    public function remark($id,Request $request)
    {
         $datas = $request->input();
        $req = allpro::find($request->id);
        $req->remark = $datas['remark'];
        $req->apporv= 2;
        $req->save();
        return redirect()->back()->with('success', 'Product Remark Sent');
    }



    public function subadmind($id)
    {
       User::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully form Rent/Buy Quote form');
    }


}
