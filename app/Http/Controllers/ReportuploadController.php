<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\equipment;
use App\Models\htpuploaddata;
use App\Models\platform_truck;
use App\Models\towtruck;
use App\Models\_dock__leveller;
use Illuminate\Http\Request;
use App\Imports\UsersImports;
use App\Imports\ImportStacker;
use App\Imports\UsersImport;
use App\Imports\ImportPlateformtruck;
use App\Imports\Importtowtruck;
use App\Imports\Importdockleveller;
use App\Imports\Importscissorslift;
use App\Imports\Importept;
use App\Imports\Importreachruck;
Use App\Imports\Importracking;
use App\Imports\Importforklift;
use App\Imports\Importcontainerhen;
use App\Imports\Importmpt;
use Maatwebsite\Excel\Facades\Excel;



class ReportuploadController extends Controller
{
    public function listdata()
    {
        $equipment = equipment::get();
      
        $htpuploaddata=htpuploaddata::get();
            
        return view('admin/productdetail/uploaddetails', compact('htpuploaddata', 'equipment'));
    }

    public function upload_htp(Request $request)
    {
        $datas = $request->input();
        $cate = $datas['catename'];
     
   

       if($cate==1){
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new UsersImport, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();
                
                return redirect()->back()->with('import_error', $failures);

               
            }



      
       }
        elseif($cate==2){

            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new ImportStacker, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
   
        } elseif ($cate == 3) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importmpt, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 4) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new ImportPlateformtruck, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate ==5) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importtowtruck, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 6) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importdockleveller, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 7) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importscissorslift, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 8) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importept, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 9) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importreachruck, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 10) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importracking, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 11) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importforklift, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 12) {
            $request->validate([
                'htp_upload' => 'required|mimes:xlsx'
            ]);

            try {
                Excel::import(new Importcontainerhen, $request->file('htp_upload'));
                return redirect()->back()->with('success', 'Data Successfully Import!');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();

                return redirect()->back()->with('import_error', $failures);
            }
        } elseif ($cate == 13) {
            echo ('13');
        } elseif ($cate == 14) {
            echo ('14');
        } elseif ($cate == 15) {
            echo ('15');
        } 
        else{
            echo ('16');
        }
    }
}
