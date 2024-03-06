<?php

namespace App\Http\Controllers;

use App\Models\getdata;
use App\Models\equipment;
use App\Models\rentandbuy;
use App\Models\htpuploaddata;
use App\Models\newsletter;
use App\Models\Popup;
use App\Models\allpro;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Mail\GetqouteMailable;
use App\Mail\popupmail;
use App\Mail\rentbuy;
use App\Mail\contactform;
use App\Models\Subcate;
use Illuminate\Support\Facades\Mail;

class GetdataController extends Controller
{
    public function index(Request $request){
    
      if($request->pname){
       $data = Request::createFromGlobals()->all();
       
        $req = new getdata;
        $req->name = $data['name'];
        $req->email = $data['email'];
        $req->no = $data['mno'];
        $req->cname =$data['cname'] ;
        $req->lcation= $data['lcation'];
        $req->pname = $data['pname'];
        $req->meg = $data['megg'];
        $req->save();
        
        Mail::to('sumedh.ramteke@mhebazar.com')->send(new GetqouteMailable($data));
        return redirect()->route('cthankyou');
      }
      
      
      
          return redirect()->back();
       
    }

    public function rentbuy(Request $request)
    {

        $data = Request::createFromGlobals()->all();
       
        $req = new rentandbuy;
        $req->name = $data['name'];
        $req->email = $data['email'];
        $req->no = $data['no'];
        $req->cname = $data['cname'];
        $req->pname = $data['pname'];
        $req->meg = $data['megg'];
        $req->rentbuy = $data['rentbuy'];
        $req->save();
       Mail::to('sumedh.ramteke@mhebazar.com')->send(new rentbuy($data));
                  // return redirect()->back()->with('success', 'your message send  ' . $request->name . '  MHE Bazar team will contact you shortly');
 return redirect()->route('cthankyou');
    }

    public function rental(Request $request)
    {

        $data = Request::createFromGlobals()->all();

        $req = new rentandbuy;
        $req->name = $data['name'];
        $req->email = $data['email'];
        $req->no = $data['mno'];
        $req->cname = $data['cname'];
        $req->pname = $data['pname'];
        $req->meg = $data['megg'];
       
        $req->save();
  Mail::to('sumedh.ramteke@mhebazar.com')->send(new rentbuy($data));
                    //return redirect()->back()->with('success', 'your message send  ' . $request->name . '  MHE Bazar team will contact you shortly');
	 return redirect()->route('cthankyou');
    }
   

Public function news(Request $request){

        $data = Request::createFromGlobals()->all();
        $req = new newsletter;
       
        $req->email = $data['email'];
      
        $req->save();
        return back()->with('email', 'Thanks for subscribing');
    }


public function cform(Request $request)
    {
     if($request->pname){
        $data = Request::createFromGlobals()->all();
        $req = new contact;
        $req->name = $data['name'];
        $req->email = $data['email'];
        $req->mno = $data['mno'];
        $req->cname =$data['cname'] ;
        $req->lcation= $data['lcation'];
        $req->megg = $data['megg'];
       $req->save();
      Mail::to('sumedh.ramteke@mhebazar.com')->send(new contactform($data));
        //return back()->with('success', 'Thanks for contacting us MHE Bazar Team Contact You Shortly ');
   return redirect()->route('cthankyou');
    }

 return redirect()->back();
}

 public function popup(Request $request)
    {

        $data = Request::createFromGlobals()->all();
        $req = new Popup;

        $req->name = $data['name'];
        $req->email = $data['email'];
        $req->mno = $data['mno'];
       
        $req->save();
        Mail::to('sumedh.ramteke@mhebazar.com')->send(new popupmail($data));
        return back()->with('success', 'Thanks for contacting us MHE Bazar Team Contact You Shortly ');
    }


      public function search(Request $request)
    {
        
           $pro = $request->get('pro');
         $query = $request->get('query');
        
        
        if ($pro == 0) {
            $data = allpro::select('id', 'sub_id', 'title', 'cate_id', 'apporv', 'model', 'capacity', 'user_id', 'old')
                ->with(['category', 'vendor', 'subcategory', 'userData'])
                ->where('title', 'like', '%' . $query . '%')
                ->where('apporv', '!=', '2')
                ->get();
        }else {
            $data = allpro::select('id', 'sub_id', 'title', 'cate_id', 'apporv', 'model', 'capacity', 'user_id', 'old')
                ->with(['category', 'vendor', 'subcategory', 'userData'])
                ->where('title', 'like', '%' . $query . '%')
                ->where('apporv', '!=', '2')
                ->where('cate_id', $pro)
                ->get();
                }

        $output = '<ul class="dropdown-menu" style="display:block; position:relative;overflow:visible;">';

        foreach ($data as $row) {
            if (!$row->subcategory == null) {
                $urlcategory = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $row->subcategory->title)));
            } else {
                $urlcategory = strtolower(str_replace(' ', '-', $row->category->name));
            }
            if ($row->vendor == null) {
                $vname = 'mhe-bazar';
            } else {
                $vname = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $row->vendor->name)));
            }
            if (!$row->capacity == null) {
                $urltitle = $vname . '-' . strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $row->title))) . '-' .  strtolower(str_replace(' ', '-', $row->capacity . '-' . $row->model)) . '-' . $row->id;
            } else {
                $urltitle = $vname . '-' . strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $row->title))) . '-' . strtolower(str_replace(' ', '-', $row->model)) . '-' . $row->id;
            }
            $maintile = strtolower($row->title);
            $maintitle = ucwords($maintile);
            $vendorname = str_replace('-', ' ', $vname);
            $mvtitle = ucwords($vendorname);
            if ($row->old == null) {
                $url = $urlcategory . '/' . str_replace('--', '-', $urltitle);
            } else {
                $url = 'used-mhe/' . $urlcategory . '/' . str_replace('--', '-', $urltitle);
            }
            $output .= "
      <li class='ls'>
      <a href='https://www.mhebazar.in/" . $url . "'>" . $mvtitle . ' ' .  $maintitle . ' ' . $row->capacity . ' ' . $row->model . "</a></li>";
        }
        $output .= '</ul>';
        echo $output;
      
    }
  
  
    public function searchpage(Request $request)
    {
        $query = $request->input('searchbox');
        $cate = $request->input('discount');
       
        $sort = $request->input('sort', 'desc');
        $head = Subcate::all();
        
        $allcategory = equipment::all();
        if ($cate == 0) {
            $results = allpro::select('id', 'sub_id', 'title', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','user_id','old')
                        ->with(['category', 'vendor', 'subcategory'])
                        ->where('title', 'like', '%' . $query . '%')
                        ->where('apporv', '!=', '2')
                         ->orderBy('id', $sort)
                        ->get();

            return view('newfrontened.frontened.search', compact('results', 'allcategory', 'head', 'query'));
        } else {
            $results = allpro::select('id', 'sub_id', 'title', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price','user_id','old')
                    ->with(['category', 'vendor', 'subcategory'])
                    ->where('title', 'like', '%' . $query . '%')
                    ->where('apporv', '!=', '2')
                    ->where('cate_id', $cate)
                     ->orderBy('id', $sort)
                    ->get();
               
            return view('newfrontened.frontened.search', compact('results', 'allcategory', 'head', 'query'));

        }
    }
  
  
    public function contactthank(){
      $head = Subcate::all();
       return view('thankyou.cthankyou',compact('head'));
    }
  
}
