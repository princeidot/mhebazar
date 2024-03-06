<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="" />
    <meta name="description" content="" />
    <link rel="canonical" href="https://www.mhebazar.in/login" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>User Dashboard </title>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <!--LISTING CONFIG-->
    <style>
        /*this Page */
        .bgcolor {
            background-color: #EEEEEE;
        }

        .tabuser {
            padding: 30px;
        }

        .bgcolor .tabuser .title {
            font-size: 30px;
            margin-bottom: 40px;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background: #51A045;
        }

        .nav-pills .nav-link {
            background: #fafafa;
        }

        .bgcolor .tabuser .align-items-start .dashbtn {
            color: black !important;
            padding: 16px 15px 17px 10px !important;
        }

        .bgcolor .tabuser .cont {
            padding: 20px 20px 20px 24px;
            background: #EEEEEE;
        }

        #myaccount .left_pane a:first-child {
            border-top: 1px solid #eee;
        }

        .user-content {
            width: 800px;
            min-height: 165px;
        }

        .right {
            float: right;
        }

        #user_info_forms,
        #user_info_form {
            display: none
        }

        table.before tr td:nth-child(2):before {
            content: ':-';
            display: inline-block;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            font-synthesis: weight style;
            font-stretch: normal;
            font-size-adjust: none;
            font-language-override: normal;
            font-kerning: auto;
            font-feature-settings: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-right: 30px
        }

        .title span a+a {
            margin-left: 10px;
        }

        .bilink {
            animation: blinker 1.5s linear infinite;
            margin-left: 100px;
            font-size: 15px;
            color: red;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        @media screen and (max-width: 768px) {
            .nav-sm-column {
                flex-direction: column !important;
            }
        }

        table>thead>tr>th,
        table>tbody>tr>th,
        table>tfoot>tr>th,
        table>thead>tr>td,
        table>tbody>tr>td,
        table>tfoot>tr>td {
            padding: 8px 10px;
        }

        table>tbody>tr>th,
        table>tfoot>tr>th,
        table>tbody>tr>td,
        table>tfoot>tr>td {
            vertical-align: top;
        }

        .btn {
            padding: 0.375rem 0.75rem;
        }
                /*upload Image*/
          .avatar-upload {
    position: relative;
   
  }
  .avatar-upload .avatar-edit {
    position: absolute;
    left: 250px;
    z-index: 1;
    top: 170px;
  }
  .avatar-upload .avatar-edit input {
    display: none;
  }
  .avatar-upload .avatar-edit input + label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #FFFFFF;
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    font-weight: normal;
    transition: all 0.2s ease-in-out;
  }
  .avatar-upload .avatar-edit input + label:hover {
    background: #f1f1f1;
    border-color: #d6d6d6;
  }
  .avatar-upload .avatar-edit input + label:after {
    content: "\f040";
    font-family: 'FontAwesome';
    color: #757575;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    text-align: center;
    margin: auto;
  }
  .avatar-upload .avatar-preview {
    width: 192px;
    height: 192px;
    position: relative;
    border-radius: 100%;
    border: 6px solid #F8F8F8;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
  }
  .avatar-upload .avatar-preview > div {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
  .container2 .btn {
      position: absolute;
      top: 90%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
    
      color: white;
      font-size: 16px;

      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
  }
  #image {
    display: block;
    /* This rule is very important, please don't ignore this */
    max-width: 100%;
}
    </style>
</head>

<body>



    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')

    <main class="main">
        <section class="bgcolor">
            <div class="container pt-5 pb-5">
                <div class="tabuser bg-white">
                    <div class="title">Welcome To your profile {{ ucfirst(Auth::user()->name) }}
                        @if ($post->mno == null)
                            <span class="bilink text-center col-6">Please Update Mobile No</span>
                        @endif
                        <span class="right"><a href="{{ route('sell') }}" class="back-btn btn btn-primary text-white"
                                style="font-size:14px;">List Your Product</a><a href="{{ route('sell.old') }}"
                                class="back-btn btn btn-primary text-white" style="font-size:14px;">Sell Your Old
                                Product</a></span>
                    </div>
                     @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    <div class="row">

    
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills nav-sm-column" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active dashbtn" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true">My Profile</button>
                                <button class="nav-link dashbtn" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">My Orders</button>
                                <button class="nav-link dashbtn" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">My Purchase List</button>
                                <button class="nav-link dashbtn" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false">Address Book</button>
                            </div>
                            <div class="tab-content cont" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">

                                    <div class="user-content">
                                        <p style="font-size: 15px;">Personal Information <span class="right">
                                                <input type=button name=type id='bt3' value='Edit'
                                                    onclick="setVisibility('user_info_form','user_info');";>


                                            </span></p>
                                        <div class="information">
                                            <div class="" id="user_info_form">
                                                <form action="{{ route('store') }}" method="post" class="avatar-upload">
                                                    @csrf
                                                    <table>
                                                        <tr>
                                                            <td style="width:20%">Name</td>
                                                            <td style="width:80%"><input type="text" name="name"
                                                                    autocomplete="off" value={{ Auth::user()->name }}>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%">Email</td>
                                                            <td style="width:80%"><input type="email" name="email"
                                                                    autocomplete="off" value={{ $post->email }}></td>

                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%">Phone No.</td>
                                                            <td style="width:80%"><input type="text"
                                                                    name="mno" autocomplete="off"
                                                                    value={{ $post->mno }}></td>

                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%">GST Number</td>
                                                            <td style="width:80%"><input type="text"
                                                                    name="gst" autocomplete="off"
                                                                    value={{ $post->gst }}></td>
                                                            <input type="hidden" name="userid"
                                                                value="{{ Auth::user()->id }}">
                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%">Profile Image</td>
                                                            <td style="width:80%">
                                                                <div class="avatar-edit">
                                                                    <input type='file' id="imageUpload"
                                                                        accept=".png, .jpg, .jpeg" name="imageUpload"
                                                                        class=" imageUpload" />
                                                                    <input type="hidden" name="base64image"
                                                                        name="base64image" id="base64image">
                                                                    <label for="imageUpload"></label>
                                                                </div>
                                                                <div class="avatar-preview container2">
                                                                    @php
                                                                        if (!empty($post->profile) && $post->profile != '' && file_exists(public_path('profile/' . $post->profile))) {
                                                                            $image = $post->profile;
                                                                        } else {
                                                                            $image = 'default.png';
                                                                        }
                                                                        $url = url('public/profile/' . $image);
                                                                        $imgs = "background-image:url($url)";

                                                                    @endphp
                                                                    <div id="imagePreview"
                                                                        style="{{ $imgs }};">


                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @if(!$vendor == 0)
                                                        <tr>
                                                            <td style="width:20%">Company Name</td>
                                                            <td style="width:80%">
                                                                <input type="text"
                                                                    name="cname" autocomplete="off"
                                                                    value={{ $post->cname }}>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td> <button type="submit">Update</button></td>
                                                        </tr>

                                                    </table>

                                                </form>
                                            </div>
                                            <div class="" id="user_info" style="display:flex;">

                                                <table class="before w-75">
                                                    <tr>
                                                        <td style="width:20%">Name</td>
                                                        <td style="width:80%">{{ ucwords(Auth::user()->name) }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td style="width:20%">Email</td>
                                                        <td style="width:80%">{{ ucwords($post->email) }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td style="width:20%">Phone No.</td>
                                                        <td style="width:80%">{{ ucwords($post->mno) }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td style="width:20%">GST Number</td>
                                                        <td style="width:80%">{{ ucwords($post->gst) }}</td>

                                                    </tr>
                                                    @if(!$vendor == 0)
                                                     <tr>
                                                        <td style="width:20%">Company Name</td>
                                                        <td style="width:80%">{{ $post->cname }}</td>

                                                    </tr>
                                                    @endif

                                                </table>
                                                <div class="logo client w-25">
                                                    <p style="font-size:15px;" class="pb-2">Profile Image</p>

                                                    <img src="{{url('public/profile/' . $image)}}">
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="user-content">
                                        <div class="row">


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <div class="user-content">
                                        <div class="row">


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <div class="user-content">
                                        <p style="font-size: 15px;">Address<span class="right">
                                                <input type=button name=type id='bt1' value='Edit'
                                                    onclick="setVisibilitys('user_info_forms','user_infos');";></p>
                                        <div class="information">
                                            <div class="" id="user_infos">
                                                @if ($post->address == null)
                                                    <form action="{{ route('add') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Full Name</td>
                                                                    <td><input type="text" name="name"
                                                                            autocomplete="off"
                                                                            placeholder="Full Name">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pin Code</td>
                                                                    <td><input type="text" name="pcode"
                                                                            autocomplete="off" placeholder="Pin Code">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:25%">Flat, House no., Building,
                                                                        Company, Apartment</td>
                                                                    <td><input type="text" name="address"
                                                                            autocomplete="off"
                                                                            placeholder="Flat, House no., Building, Company, Apartment">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:25%">Area, Street, Sector, Village
                                                                    </td>
                                                                    <td><input type="text" name="address2"
                                                                            autocomplete="off"
                                                                            placeholder="Area, Street, Sector, Village">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:25%">Landmark</td>
                                                                    <td><input type="text" name="landmark"
                                                                            autocomplete="off" placeholder="Landmark">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:25%">City</td>
                                                                    <td><input type="text" name="city"
                                                                            autocomplete="off" placeholder="City">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:25%">State</td>
                                                                    <td><input type="text" name="state"
                                                                            autocomplete="off" placeholder="state">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Country</td>
                                                                    <td>India</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Phone No</td>
                                                                    <td> <input type="text" name="mno"
                                                                            placeholder="Phone" autocomplete="off"
                                                                            required placeholder="Phone No."> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alternate Phone No</td>
                                                                    <td>
                                                                        <input type="text" name="alternate_phone"
                                                                            autocomplete="off"
                                                                            placeholder="Alternate Phone"
                                                                            maxlength="10">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>GSTIN</td>
                                                                    <td>
                                                                        <input type="text" name="gstno"
                                                                            autocomplete="off"
                                                                            placeholder="GSTIN Number" maxlength="15">
                                                                    </td>
                                                                </tr>
                                                                @if(!$vendor == 0)
                                                                <tr>
                                                                    <td>Banner</td>
                                                                    <td>
                                                                       <input type="file" class="form-control" id="images" name="images[]" multiple>
                                                                     <div id="preview"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Vendor Description</td>
                                                                    <td>
                                                                        <textarea name="descp" rows="6" cols="70">{{$post->descp}}</textarea>
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                <tr>
                                                                    <td> <button type="submit">Update</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                @else
                                                    <table class="before">
                                                        <tbody>
                                                            <tr>
                                                                <td>Full Name</td>
                                                                <td>{{ $post->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pin Code</td>
                                                                <td>{{ $post->pcode }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">Flat, House no., Building,
                                                                    Company,
                                                                    Apartment</td>
                                                                <td>{{ $post->address }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">Area, Street, Sector, Village
                                                                </td>
                                                                <td>{{ $post->address2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">Landmark</td>
                                                                <td>{{ $post->landmark }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">City</td>
                                                                <td>{{ $post->city }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">State</td>
                                                                <td>{{ $post->state }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Country</td>
                                                                <td>India</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone No</td>
                                                                <td> {{ $post->mno }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alternate Phone No</td>
                                                                <td>
                                                                    {{ $post->alternate_phone }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>GSTIN</td>
                                                                <td>
                                                                    {{ $post->gst }}
                                                                </td>
                                                            </tr>
                                                             @if (!$vendor == 0)
                                                            <tr>
                                                                    <td>Vendor Description</td>
                                                                    <td>
                                                                        <textarea name="descp" rows="6" cols="70">{{$post->descp}}</textarea>
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                        </tbody>
                                                    </table>
                                                @endif
                                            </div>
                                            <div class="" id="user_info_forms">
                                                <form action="{{ route('add') }}" method="post" class="avatar-upload" enctype="multipart/form-data">
                                                    @csrf
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>Full Name</td>
                                                                <td><input type="text" name="name"
                                                                        autocomplete="off" placeholder="Full Name"
                                                                        value="{{ $post->name }}">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pin Code</td>
                                                                <td><input type="text" name="pcode"
                                                                        autocomplete="off" placeholder="Pin Code"
                                                                        value="{{ $post->pcode }}">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">Flat, House no., Building,
                                                                    Company, Apartment</td>
                                                                <td><input type="text" name="address"
                                                                        autocomplete="off"
                                                                        placeholder="Flat, House no., Building, Company, Apartment"
                                                                        value="{{ $post->address }}">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">Area, Street, Sector, Village
                                                                </td>
                                                                <td><input type="text" name="address2"
                                                                        autocomplete="off"
                                                                        placeholder="Area, Street, Sector, Village"
                                                                        value="{{ $post->address2 }}">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">Landmark</td>
                                                                <td><input type="text" name="landmark"
                                                                        autocomplete="off" placeholder="Landmark"
                                                                        value="{{ $post->landmark }}">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">City</td>
                                                                <td><input type="text" name="city"
                                                                        autocomplete="off" placeholder="City"
                                                                        value="{{ $post->city }}"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:25%">State</td>
                                                                <td><input type="text" name="state"
                                                                        autocomplete="off" placeholder="state"
                                                                        value="{{ $post->state }}"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Country</td>
                                                                <td>India</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone No</td>
                                                                <td> <input type="text" name="mno"
                                                                        placeholder="Phone" autocomplete="off"
                                                                        required placeholder="Phone No."
                                                                        value="{{ $post->mno }}"> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alternate Phone No</td>
                                                                <td>
                                                                    <input type="text" name="alternate_phone"
                                                                        autocomplete="off"
                                                                        placeholder="Alternate Phone" maxlength="10"
                                                                        value="{{ $post->alternate_phone }}">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>GSTIN</td>
                                                                <td>
                                                                    <input type="text" name="gst"
                                                                        autocomplete="off" placeholder="GSTIN Number"
                                                                        maxlength="15" value="{{ $post->gst }}">
                                                                </td>
                                                            </tr>
                                                            @if(!$vendor == 0)
                                                            <tr>
                                                                    <td>Banner</td>
                                                                    <td>
                                                                       <input type="file" class="form-control" id="images" name="images[]" multiple>
                                                                     <div id="preview"></div>
                                                                    </td>
                                                                </tr>
                                                                
                                                               <tr>
                                                                    <td>Vendor Description</td>
                                                                    <td>
                                                                        <textarea name="descp" rows="6" cols="70">{{$post->descp}}</textarea>
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                            <tr>
                                                                <td> <button type="submit">Update</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

     <div class="modal fade bd-example-modal-lg imagecrop" id="model" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-11">
                                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary crop" id="crop">Crop</button>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.frontened.abovefooter')

    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <script>
        var $modal = $('.imagecrop');
        var image = document.getElementById('image');
        var cropper;
        $("body").on("change", ".imageUpload", function(e){
            var files = e.target.files;
            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 1,
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });
        $("body").on("click", "#crop", function() {
            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });
            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                     var base64data = reader.result;
                     $('#base64image').val(base64data);
                     document.getElementById('imagePreview').style.backgroundImage = "url("+base64data+")";
                     $modal.modal('hide');
                }
            });
        })

    </script>
    <script language="JavaScript">
        function setVisibility(id1, id2) {
            if (document.getElementById('bt3').value == 'Edit') {
                document.getElementById('bt3').value = 'Cancel';
                document.getElementById(id1).style.display = 'inline';
                document.getElementById(id2).style.display = 'none';
            } else {
                document.getElementById('bt3').value = 'Edit';
                document.getElementById(id1).style.display = 'none';
                document.getElementById(id2).style.display = 'flex';
            }
        }


        function setVisibilitys(id3, id4) {
            if (document.getElementById('bt1').value == 'Edit') {
                document.getElementById('bt1').value = 'Cancel';
                document.getElementById(id3).style.display = 'inline';
                document.getElementById(id4).style.display = 'none';
            } else {
                document.getElementById('bt1').value = 'Edit';
                document.getElementById(id3).style.display = 'none';
                document.getElementById(id4).style.display = 'inline';
            }
        }
    </script>
<script>
    $(document).ready(function () {
        $('#images').on('change', function () {
            displayImages(this);
        });
    });

    function displayImages(input) {
        $('#preview').empty();

        if (input.files && input.files.length > 0) {
            for (let i = 0; i < input.files.length; i++) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').append('<img src="' + e.target.result + '" class="img-thumbnail mr-2 mb-2" width="100">');
                };

                reader.readAsDataURL(input.files[i]);
            }
        }
    }
</script>

</body>

</html>
