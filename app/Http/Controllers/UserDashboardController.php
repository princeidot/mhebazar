<?php

namespace App\Http\Controllers;

use App\Models\userinfos;
use App\Models\User;
use App\Models\getdata;
use App\Models\rentandbuy;
use App\Models\equipment;
use App\Models\Subcate;
use App\Models\allpro;
use App\Models\vendar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function account()
    {
        $email = Auth::user()->email;
        $id = Auth::user()->id;
        $post = userinfos::where('email', $email)->first();
        $vendor=allpro::select('user_id')->where('user_id', $id)->count();
        $getdata = getdata::where('email', $email)->get();
        $head = Subcate::all();
        return view('userdashboard.index', compact('post', 'id', 'getdata', 'head','vendor'));
    }

    public function store(Request $request)
    {
        $email = Auth::user()->email;
        $id = Auth::user()->id;
        $data = Request::createFromGlobals()->all();
        
        if(!empty($data['imageUpload'])){
        $folderPath = public_path('profile/');
       
        $image_parts = explode(";base64,", $data['base64image']);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        // $file = $folderPath . uniqid() . '.png';
        $filename = time() . '.' . $image_type;
        
        $file = $folderPath . $filename;
        file_put_contents($file, $image_base64);
         userinfos::where('userid', $id)
            ->update([
                'profile' => $filename,
            ]);
}
        
        userinfos::where('userid', $id)

            ->update([
                'email' => $data['email'],
                'mno' => $data['mno'],
                'gst' => $data['gst'],
                'userid' => $data['userid'],
                'cname' =>$data['cname'],
                
            ]);
        User::where('id', $id)
            ->update([
                'name' => $data['name'],
                'email' => $data['email'],

            ]);
        return redirect()->back()->with('success',  $request->name .  ' your Given Information updated');
    }



    public function add(Request $request)
    {
        $data = Request::createFromGlobals()->all();
        $email = Auth::user()->email;
        $id = Auth::user()->id;
          if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = Auth::user()->name . $image->getClientOriginalName();
                $image->move('css/asset/banner', $name);
                $data1[] = $name;
            }
            userinfos::where('userid', $id)
            ->update([
                'banner' => json_encode($data1),
               
            ]);
        }  
        userinfos::where('email', $email)

            ->update([
                'name' => $data['name'],
                'pcode' => $data['pcode'],
                'address' => $data['address'],
                'address2' => $data['address2'],
                'landmark' => $data['landmark'],
                'city' => $data['city'],
                'state' => $data['state'],
                'alternate_phone' => $data['alternate_phone'],
                'gst' => $data['gst'],
                'descp' =>$data['descp'],
            ]);
        return redirect()->back()->with('success',  $request->name .  ' your Given Information updated');
    }

    public function sell()
    {
        $userid = Auth::user()->id;
        $categ = equipment::whereNotIn('id', [14, 15, 16, 17])->orderby('name','ASC')->get();

        $product = allpro::select('all equipment.*', 'allpro.remark', 'allpro.id', 'allpro.title', 'allpro.img1', 'allpro.cate_id', 'allpro.apporv')
            ->join('all equipment', 'all equipment.id', '=', 'allpro.cate_id')
            // ->join('proremark', 'proremark.pid','allpro.id')
            ->where('allpro.user_id', '=', $userid)->get();

        //dd($product);
        $head = Subcate::all();
        return view('userdashboard.sell', compact('categ', 'product', 'head'));
    }


    public function addproduct(Request $request)
    {
        $userid = Auth::user()->id;
        $data = Request::createFromGlobals()->all();
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $data1[] = $name;
            }
        }
      
    //     if ($request->hasfile('image')){
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080',
    //     ]);
    // }
      
      
        $cate = $data['category'];
        if ($cate == 1) {

            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->voltage = $data['voltage'];
            $req->capacity = $data['capacity'];
            $req->battery_weight = $data['battery_weight'];
            $req->fork_dimensions = $data['fork_dimensions'];
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $file->move('css/asset/image', $filename);
                $req->img1 = $filename;
            }

            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $req->img2 = json_encode($data1);
            }
            $req->price = $data['price'];
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 2) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks = $data['width_over_forks'];
            $req->fork_width = $data['fork_width'];
            $req->fork_length = $data['fork_length'];
            $req->min_height = $data['min_height'];
            $req->lift_height = $data['lift_height'];
            $req->max_lift_height = $data['max_lift_height'];
            $req->single_fork_width = $data['single_fork_width'];
            $req->wheel_type = $data['wheel_type'];
            $req->service_weight = $data['service_weight'];
            $req->overall_length = $data['overall_length'];
            $req->overall_height = $data['overall_height'];
            $req->turning_radius = $data['turning_radius'];
            $req->material = $data['material'];
            $req->img1 = $newImg;
             if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $req->img2 = json_encode($data1);
            }
            
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 3) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks = $data['width_over_forks'];
            $req->mast_type = $data['mast_type'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->wheel_base = $data['wheel_base'];
            $req->wheel_type = $data['wheel_type'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->lift_height = $data['lift_height'];
            $req->max_extended_height = $data['max_extended_height'];
            $req->mast_lowered_height = $data['mast_lowered_height'];
            $req->lowered_fork_height = $data['lowered_fork_height'];
            $req->fork_dimensions = $data['fork_dimensions'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->turning_radius = $data['turning_radius'];
            $req->min_aisle_width = $data['min_aisle_width'];
            $req->min_ground_clearance = $data['min_ground_clearance'];
            $req->travel_speed = $data['travel_speed'];
            $req->lift_speed = $data['lift_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->gradient = $data['gradient'];
            $req->drive_motor = $data['drive_motor'];
            $req->lift_motor = $data['lift_motor'];
            $req->steering_motor = $data['steering_motor'];
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->controler = $data['controler'];
            $req->battery_weight = $data['battery_weight'];
            $req->service_weight = $data['service_weight'];
            $req->img1 = $newImg;
            
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 4) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->wheel_base = $data['wheel_base'];
            $req->platform_height = $data['platform_height'];
            $req->handle_height = $data['handle_height'];
            $req->overall_length = $data['overall_length'];
            $req->overall_height = $data['overall_height'];
            $req->overall_width = $data['overall_width'];
            $req->wheel_type = $data['wheel_type'];
            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 5) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
          
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->wheel_base = $data['wheel_base'];
            $req->battery_weight = $data['battery_weight'];
            $req->service_weight = $data['service_weight'];
            $req->tyres = $data['tyres'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->track_width = $data['track_width'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->battery_compartment = $data['battery_compartment'];
            $req->turning_radius = $data['turning_radius'];
            $req->platform_size = $data['platform_size'];
            $req->platform_height = $data['platform_height'];
            $req->towing_height = $data['towing_height'];
            $req->travel_speed = $data['travel_speed'];
            $req->gradient = $data['gradient'];
            $req->service_brake_type = $data['service_brake_type'];
            $req->parking_brake_type = $data['parking_brake_type'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->drive = $data['drive'];
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->charger_capacity = $data['charger_capacity'];
            $req->drive_control = $data['drive_control'];

            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 6) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->rated_towing_ability =   $data['rated_towing_ability'];
            $req->max_towing_capacity  =   $data['max_towing_capacity'];
            $req->turning_radius  =   $data['turning_radius'];
            $req->travel_speed  =   $data['travel_speed'];
            $req->overall_length  =   $data['overall_length'];
            $req->overall_height   =   $data['overall_height'];
            $req->overall_width  =   $data['overall_width'];
            $req->drive_motor_rating =   $data['drive_motor_rating'];
            $req->gradient =   $data['gradient'];
            $req->battery_type  =   $data['battery_type'];
            $req->battery_capacity   =   $data['battery_capacity'];
            $req->controler  =   $data['controler'];
            $req->battery_weight  =   $data['battery_weight'];
            $req->service_weight =   $data['service_weight'];
            $req->img1 = $newImg;
           if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 7) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->static_load =   $data['static_load'];
            $req->dynamic_load  =   $data['dynamic_load'];
            $req->working_range_above  =   $data['working_range_above'];
            $req->working_range_below  =   $data['working_range_below'];
            $req->platform_length  =   $data['platform_length'];
            $req->platform_width   =   $data['platform_width'];
            $req->lip_length  =   $data['lip_length'];
            $req->lip_width =   $data['lip_width'];
            $req->lip_extention =   $data['lip_extention'];
            $req->lip_operation  =   $data['lip_operation'];
            $req->pit_length   =   $data['pit_length'];
            $req->pit_width  =   $data['pit_width'];
            $req->pit_height  =   $data['pit_height'];
            $req->lifting_cylinder_no =   $data['lifting_cylinder_no'];
            $req->motor_rating =   $data['motor_rating'];

            $req->img1 = $newImg;
             if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 8) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->platform_length =   $data['platform_length'];
            $req->platform_width  =   $data['platform_width'];
            $req->max_lift_height  =   $data['max_lift_height'];
            $req->hydraulic_cylinder_no  =   $data['hydraulic_cylinder_no'];
            $req->floor_lock_no  =   $data['floor_lock_no'];
            $req->floor_lock_type   =   $data['floor_lock_type'];
            $req->number_of_wheels  =   $data['number_of_wheels'];
            $req->wheel_type =   $data['wheel_type'];
            $req->wheel_dimensions =   $data['wheel_dimensions'];
            $req->platform_extention  =   $data['platform_extention'];


            $req->img1 = $newImg;
             if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 9) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks =   $data['width_over_forks'];
            $req->load_center_for_rated_capacity  =   $data['load_center_for_rated_capacity'];
            $req->travel_speed  =   $data['travel_speed'];
            $req->lift_speed  =   $data['lift_speed'];
            $req->lowering_speed  =   $data['lowering_speed'];
            $req->gradient   =   $data['gradient'];
            $req->battery_type  =   $data['battery_type'];
            $req->battery_weight =   $data['battery_weight'];
            $req->battery_capacity =   $data['battery_capacity'];
            $req->service_weight  =   $data['service_weight'];
            $req->wheelbase = $data['wheelbase'];
            $req->overall_width = $data['overall_width'];
            $req->overall_length = $data['overall_length'];
            $req->lift_height = $data['lift_height'];
            $req->fork_lowering_height = $data['fork_lowering_height'];
            $req->fork_dimensions = $data['fork_dimensions'];
            $req->ground_clearance = $data['ground_clearance'];
            $req->turning_radius = $data['turning_radius'];
            $req->type_of_drive_motor = $data['type_of_drive_motor'];
            $req->tyres = $data['tyres'];
            $req->tyre_size_drive = $data['tyre_size_drive'];
            $req->tyre_size_load = $data['tyre_size_load'];
            $req->support_rollers = $data['support_rollers'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->lift_motor_rating = $data['lift_motor_rating'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->drive_control = $data['drive_control'];



            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 10) {

            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks =   $data['width_over_forks'];
            $req->load_center_for_rated_capacity  =   $data['load_center_for_rated_capacity'];
            $req->power_mode  =   $data['power_mode'];
            $req->driving_mode  =   $data['driving_mode'];
            $req->front_overhang  =   $data['front_overhang'];
            $req->wheelbase   =   $data['wheelbase'];
            $req->service_weight  =   $data['service_weight'];
            $req->axle_load_laden_front  =   $data['axle_load_laden_front'];
            $req->axle_load_unladen_front =   $data['axle_load_unladen_front'];
            $req->tyre_type =   $data['tyre_type'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->tread_front = $data['tread_front'];
            $req->tread_rear = $data['tread_rear'];
            $req->fork_tilt_angle = $data['fork_tilt_angle'];
            $req->height = $data['height'];
            $req->free_lifting_height = $data['free_lifting_height'];
            $req->lifting_height = $data['lifting_height'];
            $req->max_height_extended = $data['max_height_extended'];
            $req->height_of_overhead_guard = $data['height_of_overhead_guard'];
            $req->seat_height_relating_to_sip = $data['seat_height_relating_to_sip'];
            $req->overall_length_with_fork = $data['overall_length_with_fork'];
            $req->overall_length_without_fork = $data['overall_length_without_fork'];
            $req->overall_width = $data['overall_width'];
            $req->fork_dimension = $data['fork_dimension'];
            $req->fork_carriage = $data['fork_carriage'];
            $req->distance_across_fork_arm = $data['distance_across_fork_arm'];
            $req->fork_sideshifting = $data['fork_sideshifting'];
            $req->distance_between_support_arm = $data['distance_between_support_arm'];
            $req->reach_distance = $data['reach_distance'];
            $req->ground_clearance = $data['ground_clearance'];
            $req->right_angle_stacking1000x1200mm = $data['right_angle_stacking1000x1200mm'];
            $req->right_angle_stacking800x1200mm = $data['right_angle_stacking800x1200mm'];
            $req->min_outside_turning_radius = $data['min_outside_turning_radius'];
            $req->reach_speed = $data['reach_speed'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->battery_type  =   $data['battery_type'];
            $req->battery_weight =   $data['battery_weight'];
            $req->battery_capacity =   $data['battery_capacity'];
            $req->battery_box_dimension = $data['battery_box_dimension'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->lifting_motor_rating = $data['lifting_motor_rating'];
            $req->steering_motor_rating = $data['steering_motor_rating'];
            $req->drive_motor_control_mode = $data['drive_motor_control_mode'];
            $req->lifting_motor_control_mode = $data['lifting_motor_control_mode'];
            $req->steering_motor_control_mode = $data['steering_motor_control_mode'];
            $req->transmission_box = $data['transmission_box'];
            $req->service_break_type = $data['service_break_type'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];


            $req->img1 = $newImg;
             if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 11) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->type_of_load = $data['type_of_load'];
            $req->type_of_pallet =   $data['type_of_pallet'];
            $req->size_of_pallet  =   $data['size_of_pallet'];
            $req->pallet_unit_load  =   $data['pallet_unit_load'];
            $req->floor_dimension  =   $data['floor_dimension'];
            $req->aisle_width_available  =   $data['aisle_width_available'];
            $req->warehouse_clear_height   =   $data['warehouse_clear_height'];
            $req->equipment_to_be_used  =   $data['equipment_to_be_used'];
            $req->equipment_width =   $data['equipment_width'];
            $req->straddle_width =   $data['straddle_width'];
            $req->floor_layout  =   $data['floor_layout'];
            $req->section_details  =   $data['section_details'];

            $req->img1 = $newImg;
             if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 12) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
          
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->power_mode = $data['power_mode'];
            $req->driving_mode = $data['driving_mode'];
            $req->front_overhang = $data['front_overhang'];
            $req->wheelbase = $data['wheelbase'];
            $req->axle_load_laden_front = $data['axle_load_laden_front'];
            $req->axle_load_unladen_front = $data['axle_load_unladen_front'];
            $req->tyre_type = $data['tyre_type'];
            $req->wheel_number = $data['wheel_number'];
            $req->tread_front = $data['tread_front'];
            $req->tread_rear = $data['tread_rear'];
            $req->mast_tilt_angle = $data['mast_tilt_angle'];
            $req->height = $data['height'];
            $req->free_lifting_height = $data['free_lifting_height'];
            $req->lifting_height = $data['lifting_height'];
            $req->max_height_extended = $data['max_height_extended'];
            $req->height_of_overhead_guard = $data['height_of_overhead_guard'];
            $req->seat_height_relating_to_sip = $data['seat_height_relating_to_sip'];
            $req->towing_coupling_height = $data['towing_coupling_height'];
            $req->overall_length_with_fork = $data['overall_length_with_fork'];
            $req->overall_length_without_fork = $data['overall_length_without_fork'];
            $req->fork_dimension = $data['fork_dimension'];
            $req->fork_carriage = $data['fork_carriage'];
            $req->distance_across_fork_arm = $data['distance_across_fork_arm'];
            $req->ground_clearance_at_the_mast = $data['ground_clearance_at_the_mast'];
            $req->ground_clearance_center_of_wheelbase = $data['ground_clearance_center_of_wheelbase'];
            $req->right_angle_stacking1000x1200mm = $data['right_angle_stacking1000x1200mm'];
            $req->right_angle_stacking800x1200mm = $data['right_angle_stacking800x1200mm'];
            $req->min_outside_turning_radius = $data['min_outside_turning_radius'];
            $req->travel_speed = $data['travel_speed'];
            $req->lift_speed = $data['lift_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->max_drawbar_pull = $data['max_drawbar_pull'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->acceleration_time = $data['acceleration_time'];
            
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->battery_weight = $data['battery_weight'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->lifting_motor_rating = $data['lifting_motor_rating'];
            $req->drive_motor_control_mode = $data['drive_motor_control_mode'];
            $req->lifting_motor_control_mode = $data['lifting_motor_control_mode'];
            $req->service_break_type = $data['service_break_type'];
            $req->parking_break_type = $data['parking_break_type'];
            $req->operating_pressure_for_attachment = $data['operating_pressure_for_attachment'];
            $req->engine_model = $data['engine_model'];
            $req->engine_rated_power = $data['engine_rated_power'];
            $req->max_torque_rated_speed = $data['max_torque_rated_speed'];
            $req->fuel_consumption = $data['fuel_consumption'];
            $req->gearbox = $data['gearbox'];
            $req->img1 = $newImg;
             if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 13) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->max_handling_layers = $data['max_handling_layers'];
            $req->length_of_container_lifted = $data['length_of_container_lifted'];
            $req->max_rotary_lock_height = $data['max_rotary_lock_height'];
            $req->min_rotary_lock_height = $data['min_rotary_lock_height'];
            $req->lifting_speed = $data['lifting_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->mast_tilt = $data['mast_tilt'];
            $req->travel_speed = $data['travel_speed'];
            $req->min_turning_radius = $data['min_turning_radius'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->overall_height = $data['overall_height'];
            $req->wheelbase = $data['wheelbase'];
            $req->tread = $data['tread'];
            $req->min_under_clearance = $data['min_under_clearance'];
            $req->lateral_displacement_of_spreader = $data['lateral_displacement_of_spreader'];
            $req->engine_manufacturer = $data['engine_manufacturer'];
            $req->engine_model = $data['engine_model'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->engine_rated_power = $data['engine_rated_power'];
            $req->max_torque_rated_speed = $data['max_torque_rated_speed'];
            $req->fuel_consumption = $data['fuel_consumption'];
            $req->gearbox = $data['gearbox'];
            $req->tyre_type = $data['tyre_type'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];

            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 18) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->img1 = $newImg;
             if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
           
        } elseif($cate== 19) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->capacity = $data['capacity'];
            $req->overall_length = $data['overall_length'];
            $req->self_weight = $data['self_weight'];
            $req->overall_height = $data['overall_height'];
            $req->material = $data['material'];
            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            
            $req->save();            
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        }elseif($cate== 20) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
           $req->model = $data['model'];
            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            
            $req->save();            
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        }else {
            return redirect()->back()->with('warining', 'Please add Product');
        }

        return redirect()->back()->with('success', 'your Product Details Insert');
    }



    public function old()
    {
        $userid = Auth::user()->id;
        $categ = equipment::whereNotIn('id', [14, 15, 16, 17])->orderby('name','ASC')->get();

        $product = allpro::select('all equipment.*', 'allpro.remark', 'allpro.id', 'allpro.title', 'allpro.img1', 'allpro.cate_id', 'allpro.apporv')
            ->join('all equipment', 'all equipment.id', '=', 'allpro.cate_id')

            ->where('allpro.user_id', '=', $userid)->get();

        //dd($product);
        $head = Subcate::all();
        return view('userdashboard.old', compact('categ', 'product', 'head'));
    }
    public function addoldproduct(Request $request)
    {
        $userid = Auth::user()->id;
        $data = Request::createFromGlobals()->all();
// 	 if ($request->hasfile('image')){
//         $request->validate([
//             'image' => 'required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080',
//         ]);
//     }
      
      
      
        $cate = $data['category'];
        if ($cate == 1) {
        } elseif ($cate == 2) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           

            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->old = 1;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks = $data['width_over_forks'];
            $req->fork_width = $data['fork_width'];
            $req->fork_length = $data['fork_length'];
            $req->min_height = $data['min_height'];
            $req->lift_height = $data['lift_height'];
            $req->max_lift_height = $data['max_lift_height'];
            $req->single_fork_width = $data['single_fork_width'];
            $req->wheel_type = $data['wheel_type'];
            $req->service_weight = $data['service_weight'];
            $req->overall_length = $data['overall_length'];
            $req->overall_height = $data['overall_height'];
            $req->turning_radius = $data['turning_radius'];
            $req->material = $data['material'];
            $req->img1 = $newImg;
             if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 3) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->old = 1;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks = $data['width_over_forks'];
            $req->mast_type = $data['mast_type'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->wheel_base = $data['wheel_base'];
            $req->wheel_type = $data['wheel_type'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->lift_height = $data['lift_height'];
            $req->max_extended_height = $data['max_extended_height'];
            $req->mast_lowered_height = $data['mast_lowered_height'];
            $req->lowered_fork_height = $data['lowered_fork_height'];
            $req->fork_dimensions = $data['fork_dimensions'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->turning_radius = $data['turning_radius'];
            $req->min_aisle_width = $data['min_aisle_width'];
            $req->min_ground_clearance = $data['min_ground_clearance'];
            $req->travel_speed = $data['travel_speed'];
            $req->lift_speed = $data['lift_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->gradient = $data['gradient'];
            $req->drive_motor = $data['drive_motor'];
            $req->lift_motor = $data['lift_motor'];
            $req->steering_motor = $data['steering_motor'];
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->controler = $data['controler'];
            $req->battery_weight = $data['battery_weight'];
            $req->service_weight = $data['service_weight'];
            $req->img1 = $newImg;
           if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 4) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->old = 1;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->wheel_base = $data['wheel_base'];
            $req->platform_height = $data['platform_height'];
            $req->handle_height = $data['handle_height'];
            $req->overall_length = $data['overall_length'];
            $req->overall_height = $data['overall_height'];
            $req->overall_width = $data['overall_width'];
            $req->wheel_type = $data['wheel_type'];
            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 5) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->wheel_base = $data['wheel_base'];
            $req->battery_weight = $data['battery_weight'];
            $req->service_weight = $data['service_weight'];
            $req->tyres = $data['tyres'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->track_width = $data['track_width'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->battery_compartment = $data['battery_compartment'];
            $req->turning_radius = $data['turning_radius'];
            $req->platform_size = $data['platform_size'];
            $req->platform_height = $data['platform_height'];
            $req->towing_height = $data['towing_height'];
            $req->travel_speed = $data['travel_speed'];
            $req->gradient = $data['gradient'];
            $req->service_brake_type = $data['service_brake_type'];
            $req->parking_brake_type = $data['parking_brake_type'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->drive = $data['drive'];
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->charger_capacity = $data['charger_capacity'];
            $req->drive_control = $data['drive_control'];

            $req->img1 = $newImg;
           if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 6) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->rated_towing_ability = $data['rated_towing_ability'];
            $req->max_towing_capacity = $data['max_towing_capacity'];
            $req->turning_radius = $data['turning_radius'];
            $req->travel_speed = $data['travel_speed'];
            $req->overall_length = $data['overall_length'];
            $req->overall_height = $data['overall_height'];
            $req->overall_width = $data['overall_width'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->gradient = $data['gradient'];
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->controler = $data['controler'];
            $req->battery_weight = $data['battery_weight'];
            $req->service_weight = $data['service_weight'];
            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 7) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->static_load = $data['static_load'];
            $req->dynamic_load = $data['dynamic_load'];
            $req->working_range_above = $data['working_range_above'];
            $req->working_range_below = $data['working_range_below'];
            $req->platform_length = $data['platform_length'];
            $req->platform_width = $data['platform_width'];
            $req->lip_length = $data['lip_length'];
            $req->lip_width = $data['lip_width'];
            $req->lip_extention = $data['lip_extention'];
            $req->lip_operation = $data['lip_operation'];
            $req->pit_length = $data['pit_length'];
            $req->pit_width = $data['pit_width'];
            $req->pit_height = $data['pit_height'];
            $req->lifting_cylinder_no = $data['lifting_cylinder_no'];
            $req->motor_rating = $data['motor_rating'];

            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 8) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->platform_length = $data['platform_length'];
            $req->platform_width = $data['platform_width'];
            $req->max_lift_height = $data['max_lift_height'];
            $req->hydraulic_cylinder_no = $data['hydraulic_cylinder_no'];
            $req->floor_lock_no = $data['floor_lock_no'];
            $req->floor_lock_type = $data['floor_lock_type'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->wheel_type = $data['wheel_type'];
            $req->wheel_dimensions = $data['wheel_dimensions'];
            $req->platform_extention = $data['platform_extention'];


            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 9) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks = $data['width_over_forks'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->travel_speed = $data['travel_speed'];
            $req->lift_speed = $data['lift_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->gradient = $data['gradient'];
            $req->battery_type = $data['battery_type'];
            $req->battery_weight = $data['battery_weight'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->service_weight = $data['service_weight'];
            $req->wheelbase = $data['wheelbase'];
            $req->overall_width = $data['overall_width'];
            $req->overall_length = $data['overall_length'];
            $req->lift_height = $data['lift_height'];
            $req->fork_lowering_height = $data['fork_lowering_height'];
            $req->fork_dimensions = $data['fork_dimensions'];
            $req->ground_clearance = $data['ground_clearance'];
            $req->turning_radius = $data['turning_radius'];
            $req->type_of_drive_motor = $data['type_of_drive_motor'];
            $req->tyres = $data['tyres'];
            $req->tyre_size_drive = $data['tyre_size_drive'];
            $req->tyre_size_load = $data['tyre_size_load'];
            $req->support_rollers = $data['support_rollers'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->lift_motor_rating = $data['lift_motor_rating'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->drive_control = $data['drive_control'];



            $req->img1 = $newImg;
           if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 10) {

            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks = $data['width_over_forks'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->power_mode = $data['power_mode'];
            $req->driving_mode = $data['driving_mode'];
            $req->front_overhang = $data['front_overhang'];
            $req->wheelbase = $data['wheelbase'];
            $req->service_weight = $data['service_weight'];
            $req->axle_load_laden_front = $data['axle_load_laden_front'];
            $req->axle_load_unladen_front = $data['axle_load_unladen_front'];
            $req->tyre_type = $data['tyre_type'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->tread_front = $data['tread_front'];
            $req->tread_rear = $data['tread_rear'];
            $req->fork_tilt_angle = $data['fork_tilt_angle'];
            $req->height = $data['height'];
            $req->free_lifting_height = $data['free_lifting_height'];
            $req->lifting_height = $data['lifting_height'];
            $req->max_height_extended = $data['max_height_extended'];
            $req->height_of_overhead_guard = $data['height_of_overhead_guard'];
            $req->seat_height_relating_to_sip = $data['seat_height_relating_to_sip'];
            $req->overall_length_with_fork = $data['overall_length_with_fork'];
            $req->overall_length_without_fork = $data['overall_length_without_fork'];
            $req->overall_width = $data['overall_width'];
            $req->fork_dimension = $data['fork_dimension'];
            $req->fork_carriage = $data['fork_carriage'];
            $req->distance_across_fork_arm = $data['distance_across_fork_arm'];
            $req->fork_sideshifting = $data['fork_sideshifting'];
            $req->distance_between_support_arm = $data['distance_between_support_arm'];
            $req->reach_distance = $data['reach_distance'];
            $req->ground_clearance = $data['ground_clearance'];
            $req->right_angle_stacking1000x1200mm = $data['right_angle_stacking1000x1200mm'];
            $req->right_angle_stacking800x1200mm = $data['right_angle_stacking800x1200mm'];
            $req->min_outside_turning_radius = $data['min_outside_turning_radius'];
            $req->reach_speed = $data['reach_speed'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->battery_type = $data['battery_type'];
            $req->battery_weight = $data['battery_weight'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->battery_box_dimension = $data['battery_box_dimension'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->lifting_motor_rating = $data['lifting_motor_rating'];
            $req->steering_motor_rating = $data['steering_motor_rating'];
            $req->drive_motor_control_mode = $data['drive_motor_control_mode'];
            $req->lifting_motor_control_mode = $data['lifting_motor_control_mode'];
            $req->steering_motor_control_mode = $data['steering_motor_control_mode'];
            $req->transmission_box = $data['transmission_box'];
            $req->service_break_type = $data['service_break_type'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];


            $req->img1 = $newImg;
           if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 11) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->type_of_load = $data['type_of_load'];
            $req->type_of_pallet = $data['type_of_pallet'];
            $req->size_of_pallet = $data['size_of_pallet'];
            $req->pallet_unit_load = $data['pallet_unit_load'];
            $req->floor_dimension = $data['floor_dimension'];
            $req->aisle_width_available = $data['aisle_width_available'];
            $req->warehouse_clear_height = $data['warehouse_clear_height'];
            $req->equipment_to_be_used = $data['equipment_to_be_used'];
            $req->equipment_width = $data['equipment_width'];
            $req->straddle_width = $data['straddle_width'];
            $req->floor_layout = $data['floor_layout'];
            $req->section_details = $data['section_details'];

            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 12) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->power_mode = $data['power_mode'];
            $req->driving_mode = $data['driving_mode'];
            $req->front_overhang = $data['front_overhang'];
            $req->wheelbase = $data['wheelbase'];
            $req->axle_load_laden_front = $data['axle_load_laden_front'];
            $req->axle_load_unladen_front = $data['axle_load_unladen_front'];
            $req->tyre_type = $data['tyre_type'];
            $req->wheel_number = $data['wheel_number'];
            $req->tread_front = $data['tread_front'];
            $req->tread_rear = $data['tread_rear'];
            $req->mast_tilt_angle = $data['mast_tilt_angle'];
            $req->height = $data['height'];
            $req->free_lifting_height = $data['free_lifting_height'];
            $req->lifting_height = $data['lifting_height'];
            $req->max_height_extended = $data['max_height_extended'];
            $req->height_of_overhead_guard = $data['height_of_overhead_guard'];
            $req->seat_height_relating_to_sip = $data['seat_height_relating_to_sip'];
            $req->towing_coupling_height = $data['towing_coupling_height'];
            $req->overall_length_with_fork = $data['overall_length_with_fork'];
            $req->overall_length_without_fork = $data['overall_length_without_fork'];
            $req->fork_dimension = $data['fork_dimension'];
            $req->fork_carriage = $data['fork_carriage'];
            $req->distance_across_fork_arm = $data['distance_across_fork_arm'];
            $req->ground_clearance_at_the_mast = $data['ground_clearance_at_the_mast'];
            $req->ground_clearance_center_of_wheelbase = $data['ground_clearance_center_of_wheelbase'];
            $req->right_angle_stacking1000x1200mm = $data['right_angle_stacking1000x1200mm'];
            $req->right_angle_stacking800x1200mm = $data['right_angle_stacking800x1200mm'];
            $req->min_outside_turning_radius = $data['min_outside_turning_radius'];
            $req->travel_speed = $data['travel_speed'];
            $req->lift_speed = $data['lift_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->max_drawbar_pull = $data['max_drawbar_pull'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->acceleration_time = $data['acceleration_time'];
            
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->battery_weight = $data['battery_weight'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->lifting_motor_rating = $data['lifting_motor_rating'];
            $req->drive_motor_control_mode = $data['drive_motor_control_mode'];
            $req->lifting_motor_control_mode = $data['lifting_motor_control_mode'];
            $req->service_break_type = $data['service_break_type'];
            $req->parking_break_type = $data['parking_break_type'];
            $req->operating_pressure_for_attachment = $data['operating_pressure_for_attachment'];
            $req->engine_model = $data['engine_model'];
            $req->engine_rated_power = $data['engine_rated_power'];
            $req->max_torque_rated_speed = $data['max_torque_rated_speed'];
            $req->fuel_consumption = $data['fuel_consumption'];
            $req->gearbox = $data['gearbox'];
            $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 13) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
            
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->old = 1;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->manufacturer_y = $data['manufacturer_y'];
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->max_handling_layers = $data['max_handling_layers'];
            $req->length_of_container_lifted = $data['length_of_container_lifted'];
            $req->max_rotary_lock_height = $data['max_rotary_lock_height'];
            $req->min_rotary_lock_height = $data['min_rotary_lock_height'];
            $req->lifting_speed = $data['lifting_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->mast_tilt = $data['mast_tilt'];
            $req->travel_speed = $data['travel_speed'];
            $req->min_turning_radius = $data['min_turning_radius'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->overall_height = $data['overall_height'];
            $req->wheelbase = $data['wheelbase'];
            $req->tread = $data['tread'];
            $req->min_under_clearance = $data['min_under_clearance'];
            $req->lateral_displacement_of_spreader = $data['lateral_displacement_of_spreader'];
            $req->engine_manufacturer = $data['engine_manufacturer'];
            $req->engine_model = $data['engine_model'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->engine_rated_power = $data['engine_rated_power'];
            $req->max_torque_rated_speed = $data['max_torque_rated_speed'];
            $req->fuel_consumption = $data['fuel_consumption'];
            $req->gearbox = $data['gearbox'];
            $req->tyre_type = $data['tyre_type'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];

            $req->img1 = $newImg;
           if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success', $request->name . ' your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 19) {
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
            }
           
            $req = new allpro;
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            $req->user_id = $userid;
            $req->apporv = 2;
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
             $req->img1 = $newImg;
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
           
        } else {
            return redirect()->back()->with('warining', 'Please add Product');
        }

        return redirect()->back()->with('success', 'your Product Details Insert');
    }


    public function editproduct($id, Request $request)
    {
        $categ = equipment::whereNotIn('id', [14, 15, 16, 17])->orderby('name','ASC')->get();
        $product = allpro::select('all equipment.id as cateid', 'all equipment.name as aname', 'allpro.*')
            ->join('all equipment', 'all equipment.id', '=', 'allpro.cate_id')
            // ->join('proremark', 'proremark.pid','allpro.id')
            ->where('allpro.id', '=', $id)->first();
        // dd($product);
        $head = Subcate::all();
        return view('userdashboard.editproduct', compact('categ', 'product', 'head'));
    }


    public function updateproduct($id, Request $request)
    {
      	
      
        $userid = Auth::user()->id;
        $data = Request::createFromGlobals()->all();
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $data1[] = $name;
            }
        }
        $cate = $data['category'];
        if ($cate == 1) {
       
           $req = allpro::find($request->id);
			$req->title = $data['title'];
            $req->cate_id = $data['category'];
            if(!$userid==5){
            $req->apporv = 2;
           }
            $req->sub_id = $data['scategory'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            $req->voltage = $data['voltage'];
            $req->capacity = $data['capacity'];
            $req->battery_weight = $data['battery_weight'];
            $req->fork_dimensions = $data['fork_dimensions'];
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
             
                $file->move('css/asset/image', $filename);
                $req->img1 = $filename;
            }

            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $req->img2 = json_encode($data1);
            }
            $req->price = $data['price'];
            $req->save();
          
          
        } elseif ($cate == 2) {


            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }

            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks = $data['width_over_forks'];
            $req->fork_width = $data['fork_width'];
            $req->fork_length = $data['fork_length'];
            $req->min_height = $data['min_height'];
            $req->lift_height = $data['lift_height'];
            $req->max_lift_height = $data['max_lift_height'];
            $req->single_fork_width = $data['single_fork_width'];
            $req->wheel_type = $data['wheel_type'];
            $req->service_weight = $data['service_weight'];
            $req->overall_length = $data['overall_length'];
            $req->overall_height = $data['overall_height'];
            $req->turning_radius = $data['turning_radius'];
            $req->material = $data['material'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }


            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 3) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks = $data['width_over_forks'];
            $req->mast_type = $data['mast_type'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->wheel_base = $data['wheel_base'];
            $req->wheel_type = $data['wheel_type'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->lift_height = $data['lift_height'];
            $req->max_extended_height = $data['max_extended_height'];
            $req->mast_lowered_height = $data['mast_lowered_height'];
            $req->lowered_fork_height = $data['lowered_fork_height'];
            $req->fork_dimensions = $data['fork_dimensions'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->turning_radius = $data['turning_radius'];
            $req->min_aisle_width = $data['min_aisle_width'];
            $req->min_ground_clearance = $data['min_ground_clearance'];
            $req->travel_speed = $data['travel_speed'];
            $req->lift_speed = $data['lift_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->gradient = $data['gradient'];
            $req->drive_motor = $data['drive_motor'];
            $req->lift_motor = $data['lift_motor'];
            $req->steering_motor = $data['steering_motor'];
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->controler = $data['controler'];
            $req->battery_weight = $data['battery_weight'];
            $req->service_weight = $data['service_weight'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }


            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 4) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            if(!$userid==5){
            $req->apporv = 2;
           }
            $req->sub_id = $data['scategory'];
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->wheel_base = $data['wheel_base'];
            $req->platform_height = $data['platform_height'];
            $req->handle_height = $data['handle_height'];
            $req->overall_length = $data['overall_length'];
            $req->overall_height = $data['overall_height'];
            $req->overall_width = $data['overall_width'];
            $req->wheel_type = $data['wheel_type'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }

            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 5) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->wheel_base = $data['wheel_base'];
            $req->battery_weight = $data['battery_weight'];
            $req->service_weight = $data['service_weight'];
            $req->tyres = $data['tyres'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->track_width = $data['track_width'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->battery_compartment = $data['battery_compartment'];
            $req->turning_radius = $data['turning_radius'];
            $req->platform_size = $data['platform_size'];
            $req->platform_height = $data['platform_height'];
            $req->towing_height = $data['towing_height'];
            $req->travel_speed = $data['travel_speed'];
            $req->gradient = $data['gradient'];
            $req->service_brake_type = $data['service_brake_type'];
            $req->parking_brake_type = $data['parking_brake_type'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->drive = $data['drive'];
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->charger_capacity = $data['charger_capacity'];
            $req->drive_control = $data['drive_control'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }


            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 6) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->rated_towing_ability =   $data['rated_towing_ability'];
            $req->max_towing_capacity  =   $data['max_towing_capacity'];
            $req->turning_radius  =   $data['turning_radius'];
            $req->travel_speed  =   $data['travel_speed'];
            $req->overall_length  =   $data['overall_length'];
            $req->overall_height   =   $data['overall_height'];
            $req->overall_width  =   $data['overall_width'];
            $req->drive_motor_rating =   $data['drive_motor_rating'];
            $req->gradient =   $data['gradient'];
            $req->battery_type  =   $data['battery_type'];
            $req->battery_capacity   =   $data['battery_capacity'];
            $req->controler  =   $data['controler'];
            $req->battery_weight  =   $data['battery_weight'];
            $req->service_weight =   $data['service_weight'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }


            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 7) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->static_load =   $data['static_load'];
            $req->dynamic_load  =   $data['dynamic_load'];
            $req->working_range_above  =   $data['working_range_above'];
            $req->working_range_below  =   $data['working_range_below'];
            $req->platform_length  =   $data['platform_length'];
            $req->platform_width   =   $data['platform_width'];
            $req->lip_length  =   $data['lip_length'];
            $req->lip_width =   $data['lip_width'];
            $req->lip_extention =   $data['lip_extention'];
            $req->lip_operation  =   $data['lip_operation'];
            $req->pit_length   =   $data['pit_length'];
            $req->pit_width  =   $data['pit_width'];
            $req->pit_height  =   $data['pit_height'];
            $req->lifting_cylinder_no =   $data['lifting_cylinder_no'];
            $req->motor_rating =   $data['motor_rating'];

            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 8) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->platform_length =   $data['platform_length'];
            $req->platform_width  =   $data['platform_width'];
            $req->max_lift_height  =   $data['max_lift_height'];
            $req->hydraulic_cylinder_no  =   $data['hydraulic_cylinder_no'];
            $req->floor_lock_no  =   $data['floor_lock_no'];
            $req->floor_lock_type   =   $data['floor_lock_type'];
            $req->number_of_wheels  =   $data['number_of_wheels'];
            $req->wheel_type =   $data['wheel_type'];
            $req->wheel_dimensions =   $data['wheel_dimensions'];
            $req->platform_extention  =   $data['platform_extention'];


            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 9) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks =   $data['width_over_forks'];
            $req->load_center_for_rated_capacity  =   $data['load_center_for_rated_capacity'];
            $req->travel_speed  =   $data['travel_speed'];
            $req->lift_speed  =   $data['lift_speed'];
            $req->lowering_speed  =   $data['lowering_speed'];
            $req->gradient   =   $data['gradient'];
            $req->battery_type  =   $data['battery_type'];
            $req->battery_weight =   $data['battery_weight'];
            $req->battery_capacity =   $data['battery_capacity'];
            $req->service_weight  =   $data['service_weight'];
            $req->wheelbase = $data['wheelbase'];
            $req->overall_width = $data['overall_width'];
            $req->overall_length = $data['overall_length'];
            $req->lift_height = $data['lift_height'];
            $req->fork_lowering_height = $data['fork_lowering_height'];
            $req->fork_dimensions = $data['fork_dimensions'];
            $req->ground_clearance = $data['ground_clearance'];
            $req->turning_radius = $data['turning_radius'];
            $req->type_of_drive_motor = $data['type_of_drive_motor'];
            $req->tyres = $data['tyres'];
            $req->tyre_size_drive = $data['tyre_size_drive'];
            $req->tyre_size_load = $data['tyre_size_load'];
            $req->support_rollers = $data['support_rollers'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->lift_motor_rating = $data['lift_motor_rating'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->drive_control = $data['drive_control'];


            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 10) {


            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->operator_type = $data['operator_type'];
            $req->width_over_forks =   $data['width_over_forks'];
            $req->load_center_for_rated_capacity  =   $data['load_center_for_rated_capacity'];
            $req->power_mode  =   $data['power_mode'];
            $req->driving_mode  =   $data['driving_mode'];
            $req->front_overhang  =   $data['front_overhang'];
            $req->wheelbase   =   $data['wheelbase'];
            $req->service_weight  =   $data['service_weight'];
            $req->axle_load_laden_front  =   $data['axle_load_laden_front'];
            $req->axle_load_unladen_front =   $data['axle_load_unladen_front'];
            $req->tyre_type =   $data['tyre_type'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->tread_front = $data['tread_front'];
            $req->tread_rear = $data['tread_rear'];
            $req->fork_tilt_angle = $data['fork_tilt_angle'];
            $req->height = $data['height'];
            $req->free_lifting_height = $data['free_lifting_height'];
            $req->lifting_height = $data['lifting_height'];
            $req->max_height_extended = $data['max_height_extended'];
            $req->height_of_overhead_guard = $data['height_of_overhead_guard'];
            $req->seat_height_relating_to_sip = $data['seat_height_relating_to_sip'];
            $req->overall_length_with_fork = $data['overall_length_with_fork'];
            $req->overall_length_without_fork = $data['overall_length_without_fork'];
            $req->overall_width = $data['overall_width'];
            $req->fork_dimension = $data['fork_dimension'];
            $req->fork_carriage = $data['fork_carriage'];
            $req->distance_across_fork_arm = $data['distance_across_fork_arm'];
            $req->fork_sideshifting = $data['fork_sideshifting'];
            $req->distance_between_support_arm = $data['distance_between_support_arm'];
            $req->reach_distance = $data['reach_distance'];
            $req->ground_clearance = $data['ground_clearance'];
            $req->right_angle_stacking1000x1200mm = $data['right_angle_stacking1000x1200mm'];
            $req->right_angle_stacking800x1200mm = $data['right_angle_stacking800x1200mm'];
            $req->min_outside_turning_radius = $data['min_outside_turning_radius'];
            $req->reach_speed = $data['reach_speed'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->battery_type  =   $data['battery_type'];
            $req->battery_weight =   $data['battery_weight'];
            $req->battery_capacity =   $data['battery_capacity'];
            $req->battery_box_dimension = $data['battery_box_dimension'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->lifting_motor_rating = $data['lifting_motor_rating'];
            $req->steering_motor_rating = $data['steering_motor_rating'];
            $req->drive_motor_control_mode = $data['drive_motor_control_mode'];
            $req->lifting_motor_control_mode = $data['lifting_motor_control_mode'];
            $req->steering_motor_control_mode = $data['steering_motor_control_mode'];
            $req->transmission_box = $data['transmission_box'];
            $req->service_break_type = $data['service_break_type'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];
            // $req->reach_speed = $data['reach_speed'];


            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 11) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->type_of_load = $data['type_of_load'];
            $req->type_of_pallet =   $data['type_of_pallet'];
            $req->size_of_pallet  =   $data['size_of_pallet'];
            $req->pallet_unit_load  =   $data['pallet_unit_load'];
            $req->floor_dimension  =   $data['floor_dimension'];
            $req->aisle_width_available  =   $data['aisle_width_available'];
            $req->warehouse_clear_height   =   $data['warehouse_clear_height'];
            $req->equipment_to_be_used  =   $data['equipment_to_be_used'];
            $req->equipment_width =   $data['equipment_width'];
            $req->straddle_width =   $data['straddle_width'];
            $req->floor_layout  =   $data['floor_layout'];
            $req->section_details  =   $data['section_details'];

            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 12) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->power_mode = $data['power_mode'];
            $req->driving_mode = $data['driving_mode'];
            $req->front_overhang = $data['front_overhang'];
            $req->wheelbase = $data['wheelbase'];
            $req->axle_load_laden_front = $data['axle_load_laden_front'];
            $req->axle_load_unladen_front = $data['axle_load_unladen_front'];
            $req->tyre_type = $data['tyre_type'];
            $req->wheel_number = $data['wheel_number'];
            $req->tread_front = $data['tread_front'];
            $req->tread_rear = $data['tread_rear'];
            $req->mast_tilt_angle = $data['mast_tilt_angle'];
            $req->height = $data['height'];
            $req->free_lifting_height = $data['free_lifting_height'];
            $req->lifting_height = $data['lifting_height'];
            $req->max_height_extended = $data['max_height_extended'];
            $req->height_of_overhead_guard = $data['height_of_overhead_guard'];
            $req->seat_height_relating_to_sip = $data['seat_height_relating_to_sip'];
            $req->towing_coupling_height = $data['towing_coupling_height'];
            $req->overall_length_with_fork = $data['overall_length_with_fork'];
            $req->overall_length_without_fork = $data['overall_length_without_fork'];
            $req->fork_dimension = $data['fork_dimension'];
            $req->fork_carriage = $data['fork_carriage'];
            $req->distance_across_fork_arm = $data['distance_across_fork_arm'];
            $req->ground_clearance_at_the_mast = $data['ground_clearance_at_the_mast'];
            $req->ground_clearance_center_of_wheelbase = $data['ground_clearance_center_of_wheelbase'];
            $req->right_angle_stacking1000x1200mm = $data['right_angle_stacking1000x1200mm'];
            $req->right_angle_stacking800x1200mm = $data['right_angle_stacking800x1200mm'];
            $req->min_outside_turning_radius = $data['min_outside_turning_radius'];
            $req->travel_speed = $data['travel_speed'];
            $req->lift_speed = $data['lift_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->max_drawbar_pull = $data['max_drawbar_pull'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->acceleration_time = $data['acceleration_time'];
            
            $req->battery_type = $data['battery_type'];
            $req->battery_capacity = $data['battery_capacity'];
            $req->battery_weight = $data['battery_weight'];
            $req->drive_motor_rating = $data['drive_motor_rating'];
            $req->lifting_motor_rating = $data['lifting_motor_rating'];
            $req->drive_motor_control_mode = $data['drive_motor_control_mode'];
            $req->lifting_motor_control_mode = $data['lifting_motor_control_mode'];
            $req->service_break_type = $data['service_break_type'];
            $req->parking_break_type = $data['parking_break_type'];
            $req->operating_pressure_for_attachment = $data['operating_pressure_for_attachment'];
            $req->engine_model = $data['engine_model'];
            $req->engine_rated_power = $data['engine_rated_power'];
            $req->max_torque_rated_speed = $data['max_torque_rated_speed'];
            $req->fuel_consumption = $data['fuel_consumption'];
            $req->gearbox = $data['gearbox'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
           
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif ($cate == 13) {

            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if (!empty($data['manufacturer_y'])) {
                $req->manufacturer_y = $data['manufacturer_y'];
            }
            $req->model = $data['model'];
            $req->capacity = $data['capacity'];
            $req->load_center_for_rated_capacity = $data['load_center_for_rated_capacity'];
            $req->max_handling_layers = $data['max_handling_layers'];
            $req->length_of_container_lifted = $data['length_of_container_lifted'];
            $req->max_rotary_lock_height = $data['max_rotary_lock_height'];
            $req->min_rotary_lock_height = $data['min_rotary_lock_height'];
            $req->lifting_speed = $data['lifting_speed'];
            $req->lowering_speed = $data['lowering_speed'];
            $req->mast_tilt = $data['mast_tilt'];
            $req->travel_speed = $data['travel_speed'];
            $req->min_turning_radius = $data['min_turning_radius'];
            $req->max_gradeability = $data['max_gradeability'];
            $req->overall_length = $data['overall_length'];
            $req->overall_width = $data['overall_width'];
            $req->overall_height = $data['overall_height'];
            $req->wheelbase = $data['wheelbase'];
            $req->tread = $data['tread'];
            $req->min_under_clearance = $data['min_under_clearance'];
            $req->lateral_displacement_of_spreader = $data['lateral_displacement_of_spreader'];
            $req->engine_manufacturer = $data['engine_manufacturer'];
            $req->engine_model = $data['engine_model'];
            $req->number_of_wheels = $data['number_of_wheels'];
            $req->engine_rated_power = $data['engine_rated_power'];
            $req->max_torque_rated_speed = $data['max_torque_rated_speed'];
            $req->fuel_consumption = $data['fuel_consumption'];
            $req->gearbox = $data['gearbox'];
            $req->tyre_type = $data['tyre_type'];
            $req->tyre_size_front = $data['tyre_size_front'];
            $req->tyre_size_rear = $data['tyre_size_rear'];

            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }
            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product Add MHE BAZAR Team Contact you Shortly');
        } elseif($cate == 18){
            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
            if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->manufacturer = $data['manufacturer'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }

            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product updated MHE BAZAR Team Contact you Shortly');
        
        }elseif($cate == 19) {
            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            $req->sub_id = $data['scategory'];
           if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
            $req->capacity = $data['capacity'];
            $req->overall_length = $data['overall_length'];
            $req->self_weight = $data['self_weight'];
            $req->overall_height = $data['overall_height'];
            $req->material = $data['material'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                 $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }

            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product updated MHE BAZAR Team Contact you Shortly');
        
        }elseif($cate == 20) {
            $req = allpro::find($request->id);
            $req->cate_id = $data['category'];
            if(!$userid==5){
            $req->apporv = 2;
           }
            $req->price = $data['price'];
            $req->title = $data['title'];
            $req->description = $data['description'];
            $req->ldescription = $data['ldescription'];
             $req->model = $data['model'];
            if ($request->hasfile('image')) {
                $newImg = $request->image->getClientOriginalName();
                $request->image->move('css/asset/image', $newImg);
                 $req->img1 = $newImg;
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = $image->getClientOriginalName();
                    $image->move('css/asset/image', $name);
                }
                $data1[] = $name;
                $req->img2 = json_encode($data1);
            }

            $req->save();
            return redirect()->back()->with('success',  $request->name . '  your Product updated MHE BAZAR Team Contact you Shortly');
        
        }else {
            return redirect()->back()->with('warining', 'Please add Product');
        }

        return redirect()->back()->with('success', 'your Product Details Insert');
    }



    // Fetch records
    public function pcateg($id, Request $request)
    {

        // Fetch Product Category by Category
        $pcate['data'] = Subcate::orderby("title", "asc")
            ->select('id', 'title')
            ->where('cate_id', $id)
            ->get();

        return response()->json($pcate);
    }


    public function setpass(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password), 'email_verified_at' => date('Y-m-d H:i:s')]);
        if (!$user) {
            return back()->withInput()->with('error', 'something Error');
        }
        return redirect('/user/account')->with('success', 'Your password has been set!');
    }


    public function listproduct($id)
    {


       allpro::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully form Contact form');
    }
}
