<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro-bs4/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 08:16:39 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/faviicon-32x32.jpeg') }}">
        <link rel="icon" type="image/png" href="{{ url('img/faviicon-32x32.jpeg') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            MHE Bazar Dashboard
        </title>

        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />


        <link rel="canonical" href="" />



        <meta itemprop="name" content="MHE Bazar">




        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="{{ url('css/asset/admin/assets/css/font-awesome.min.css') }}">

        <link href="{{ url('css/asset/admin/assets/css/material-dashboard.min6c54.css?v=2.2.2') }}" rel="stylesheet" />

        <link href="{{ url('css/asset/admin/assets/demo/demo.css') }}" rel="stylesheet" />

        <style>
            .modal {
                display: none;
                position: fixed;
                z-index: 8;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;

                background-color: rgba(0, 0, 0, 0.4);
            }

            .modal-content {
                margin: 80px auto;
                border: 1px solid #999;
                width: 80%;
            }

            .modal-content {
                position: relative;

                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;

                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;

                border-radius: 0.3rem;
                outline: 0;
            }

            .modal-backdrop {
                z-index: 1
            }

            .btnclose {
                float: right;
                padding-right: 16px;
                font-size: 35px;
            }

            button:focus {
                outline: unset;
            }

            .userifs tr,
            .userifs th {
                padding: 6px 8px;
                vertical-align: middle;
                border-color: #ddd;
            }

            .myDiv {
                display: none;
            }

            .upload__img-wrap {
                display: flex;
                flex-wrap: wrap;
                margin: 0 -10px;
            }

            .upload__img-box {
                width: 200px;
                padding: 0 10px;
                margin-bottom: 12px;
            }

            .img-bg {
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                position: relative;
                padding-bottom: 100%;
            }
        </style>

    </head>

    <body class="">


        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>

        <div class="wrapper ">
            @include('layouts.inc.sidebar')
            <div class="main-panel">

                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-minimize">
                                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                    <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                    <i
                                        class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                                </button>
                            </div>
                            {{-- <a class="navbar-brand" href="javascript:;">Extended Tables</a> --}}
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">

                            @include('layouts.inc.navbar')
                        </div>
                    </div>
                </nav>

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-rose card-header-icon">

                                        <div class="card-icon">
                                            <i class="material-icons">assignment</i>
                                        </div>
                                        <h4 class="card-title">Edit Product <a href="{{ url()->previous() }}"><button class="btn btn-danger btn-round" style="float:right">
                                                            <i class="material-icons">keyboard_arrow_left</i> Back
                                                            <div class="ripple-container"></div></button></a></h4>
                                         
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <input type="hidden" id="setcategory"
                                                value="{{ old('category', $product->cate_id) }}">

                                            @if($product->cate_id == 1)
                                            <div id="show1">
                                                <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:30%">
                                                                    Select category
                                                                </td>
                                                                <td>
                                                                    <select id='sel_depart' name='sel_depart'>
                                                                        <option value='0'>-- Select category--
                                                                        </option>

                                                                        <!-- Read Departments -->
                                                                        @foreach ($categ as $department)
                                                                        <option value='{{ $department->id }}'>
                                                                            {{ $department->name }}
                                                                        </option>
                                                                        @endforeach

                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr class="productcategory">
                                                                <td>
                                                                    Select Product Category
                                                                </td>
                                                                <td>
                                                                    <select id='sel_emp' name='sel_emp'
                                                                        onchange="myFuntion()" required>
                                                                        <option value='0' selected disabled>-- Select
                                                                            Product Category
                                                                            --</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:30%">
                                                                    Product Name
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="title"
                                                                        class="form-control @error('title') is-invalid @enderror"
                                                                        value="{{ old('title', $product->title) }}"
                                                                        required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Short Description</td>
                                                                <td>
                                                                    <textarea name="description"
                                                                        class="form-control @error('description') is-invalid @enderror"
                                                                        value="{{ old('description', $product->description) }}"
                                                                        rows="4" style="font-size: 100%;"
                                                                        required>{{ $product->description }}</textarea>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Long Description</td>
                                                                <td>
                                                                    <textarea name="ldescription"
                                                                        class="form-control @error('ldescription') is-invalid @enderror"
                                                                        value="{{ old('ldescription', $product->ldescription) }}"
                                                                        rows="4" style="font-size: 100%;"
                                                                        required>{{ $product->ldescription }}</textarea>
                                                                </td>
                                                            </tr>
 <tr>
                                                <td>Manufacturer Company Name</td>
                                                <td><input type="text" name="manufacturer"
                                                        class="form-control @error('manufacturer') is-invalid @enderror"
                                                        value="{{ old('manufacturer',$product->manufacturer) }}"></td>
                                            </tr>
                                            <tr>
                                                <td>Voltage (V)</td>
                                                <td><input type="text" name="voltage"
                                                        class="form-control @error('voltage') is-invalid @enderror"
                                                        value="{{ old('voltage',$product->voltage) }}"></td>
                                            </tr>
                                            <tr>
                                                <td>Capacity (AH)</td>
                                                <td><input type="text" name="capacity"
                                                        class="form-control @error('capacity') is-invalid @enderror"
                                                        value="{{ old('capacity',$product->capacity) }}"></td>
                                            </tr>
                                            <tr>
                                                <td>Battery Weight</td>
                                                <td><input type="text" name="battery_weight"
                                                        class="form-control @error('battery_weight') is-invalid @enderror"
                                                        value="{{ old('battery_weight',$product->battery_weight) }}">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Size (LxWxH in mm)</td>
                                                <td><input type="text" name="fork_dimensions"
                                                        class="form-control @error('fork_dimensions') is-invalid @enderror"
                                                        value="{{ old('fork_dimensions',$product->fork_dimensions) }}">
                                                </td>
                                            </tr>
                                                            <tr>
                                                                <td>Cover Image</td>
                                                                <td>
                                                                    <input type="file" name="image"
                                                                        class="form-control image">
                                                                    <div class="preview" class="pt-2" style="width:50%"></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Multiple Image</td>
                                                                <td>


                                                                    <div class="upload__box">
                                                                        <div class="upload__btn-box">


                                                                            <input type="file" multiple=""
                                                                                name="images[]" data-max_length="20"
                                                                                class="upload__inputfile form-control">

                                                                        </div>
                                                                        <div class="upload__img-wrap" name="images">
                                                                        </div>
                                                                    </div>


                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:30%">
                                                Basic Price
                                            </td>
                                                                <td>
                                                                    <input type="text" name="price"
                                                                        class="form-control @error('price') is-invalid @enderror"
                                                                        value="{{ old('price', $product->price) }}"
                                                                        required>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                    <input id="category" name="category"
                                                                        class="category" type="hidden"
                                                                        value="{{ old('category', $product->cate_id) }}">
                                                                    <input id="scategory" name="scategory"
                                                                        class="scategory" type="hidden"
                                                                        value="{{ old('scategory', $product->sub_id) }}">

                                                                    <button type="submit"> Update</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>

                                            @endif

                                            @if ($product->cate_id == 2)
                                            <div id="show2">
                                                <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:30%">
                                                                    Select category
                                                                </td>
                                                                <td>
                                                                    <select id='sel_depart' name='sel_depart'>
                                                                        <option value='0'>-- Select category--
                                                                        </option>

                                                                        <!-- Read Departments -->
                                                                        @foreach ($categ->skip(1) as $department)
                                                                        <option value='{{ $department->id }}'>
                                                                            {{ $department->name }}
                                                                        </option>
                                                                        @endforeach

                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr class="productcategory">
                                                                <td>
                                                                    Select Product Category
                                                                </td>
                                                                <td>
                                                                    <select id='sel_emp' name='sel_emp'
                                                                        onchange="myFuntion()" required>
                                                                        <option value='0' selected disabled>-- Select
                                                                            Product Category
                                                                            --</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:30%">
                                                                    Product Name
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="title"
                                                                        class="form-control @error('title') is-invalid @enderror"
                                                                        value="{{ old('title', $product->title) }}"
                                                                        required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Short Description</td>
                                                                <td>
                                                                    <textarea name="description"
                                                                        class="form-control @error('description') is-invalid @enderror"
                                                                        value="{{ old('description', $product->description) }}"
                                                                        rows="4" style="font-size: 100%;"
                                                                        required>{{ $product->description }}</textarea>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Long Description</td>
                                                                <td>
                                                                    <textarea name="ldescription"
                                                                        class="form-control @error('ldescription') is-invalid @enderror"
                                                                        value="{{ old('ldescription', $product->ldescription) }}"
                                                                        rows="4" style="font-size: 100%;"
                                                                        required>{{ $product->ldescription }}</textarea>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Manufacturer Company Name</td>
                                                                <td><input type="text" name="manufacturer"
                                                                        class="form-control @error('manufacturer') is-invalid @enderror"
                                                                        value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                                </td>
                                                            </tr>
                                                            @if (empty($product->manufacturer_y))
                                                            @else
                                                            <tr>
                                                                <td style="width:30%">
                                                                    Manufacturer Year
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="manufacturer_y"
                                                                        class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                        value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                                </td>
                                                            </tr>
                                                            @endif
                                                            <tr>
                                                                <td>Model</td>
                                                                <td><input type="text" name="model"
                                                                        class="form-control @error('model') is-invalid @enderror"
                                                                        value="{{ old('model', $product->model) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Capacity</td>
                                                                <td><input type="text" name="capacity"
                                                                        class="form-control @error('capacity') is-invalid @enderror"
                                                                        value="{{ old('capacity', $product->capacity) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Operator Type</td>
                                                                <td><input type="text" name="operator_type"
                                                                        class="form-control @error('operator_type') is-invalid @enderror"
                                                                        value="{{ old('operator_type', $product->operator_type) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Width Over Forks</td>
                                                                <td><input type="text" name="width_over_forks"
                                                                        class="form-control @error('width_over_forks') is-invalid @enderror"
                                                                        value="{{ old('width_over_forks', $product->width_over_forks) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fork Width</td>
                                                                <td><input type="text" name="fork_width"
                                                                        class="form-control @error('fork_width') is-invalid @enderror"
                                                                        value="{{ old('fork_width', $product->fork_width) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fork Length</td>
                                                                <td><input type="text" name="fork_length"
                                                                        class="form-control @error('fork_length') is-invalid @enderror"
                                                                        value="{{ old('fork_length', $product->fork_length) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Min Height (Fork Lower)</td>
                                                                <td><input type="text" name="min_height"
                                                                        class="form-control @error('min_height') is-invalid @enderror"
                                                                        value="{{ old('min_height', $product->min_height) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lift Height</td>
                                                                <td><input type="text" name="lift_height"
                                                                        class="form-control @error('lift_height') is-invalid @enderror"
                                                                        value="{{ old('lift_height', $product->lift_height) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Max Lift Height</td>
                                                                <td><input type="text" name="max_lift_height"
                                                                        class="form-control @error('max_lift_height') is-invalid @enderror"
                                                                        value="{{ old('max_lift_height', $product->max_lift_height) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Single Fork Width</td>
                                                                <td><input type="text" name="single_fork_width"
                                                                        class="form-control @error('single_fork_width') is-invalid @enderror"
                                                                        value="{{ old('single_fork_width', $product->single_fork_width) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Wheel Type</td>
                                                                <td><input type="text" name="wheel_type"
                                                                        class="form-control @error('wheel_type') is-invalid @enderror"
                                                                        value="{{ old('wheel_type', $product->wheel_type) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Service Weight</td>
                                                                <td><input type="text" name="service_weight"
                                                                        class="form-control @error('service_weight') is-invalid @enderror"
                                                                        value="{{ old('service_weight', $product->service_weight) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Overall Length</td>
                                                                <td><input type="text" name="overall_length"
                                                                        class="form-control @error('overall_length') is-invalid @enderror"
                                                                        value="{{ old('overall_length', $product->overall_length) }} ">
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Overall Height</td>
                                                                <td><input type="text" name="overall_height"
                                                                        class="form-control @error('overall_height') is-invalid @enderror"
                                                                        value="{{ old('overall_height', $product->overall_height) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Turning Radius</td>
                                                                <td><input type="text" name="turning_radius"
                                                                        class="form-control @error('turning_radius') is-invalid @enderror"
                                                                        value="{{ old('turning_radius', $product->turning_radius) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Material</td>
                                                                <td><input type="text" name="material"
                                                                        class="form-control @error('material') is-invalid @enderror"
                                                                        value="{{ old('material', $product->material) }} ">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cover Image</td>
                                                                <td>
                                                                    <input type="file" name="image"
                                                                        class="form-control image">
                                                                    <div class="preview" class="pt-2" style="width:50%"></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Multiple Image</td>
                                                                <td>


                                                                    <div class="upload__box">
                                                                        <div class="upload__btn-box">


                                                                            <input type="file" multiple=""
                                                                                name="images[]" data-max_length="20"
                                                                                class="upload__inputfile form-control">

                                                                        </div>
                                                                        <div class="upload__img-wrap" name="images">
                                                                        </div>
                                                                    </div>


                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:30%">
                                                Basic Price
                                            </td>
                                                                <td>
                                                                    <input type="text" name="price"
                                                                        class="form-control @error('price') is-invalid @enderror"
                                                                        value="{{ old('price', $product->price) }}"
                                                                        required>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                    <input id="category" name="category"
                                                                        class="category" type="hidden"
                                                                        value="{{ old('category', $product->cate_id) }}">
                                                                    <input id="scategory" name="scategory"
                                                                        class="scategory" type="hidden"
                                                                        value="{{ old('scategory', $product->sub_id) }}">

                                                                    <button type="submit"> Update</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                            @endif
                                            @if ($product->cate_id == 3)
                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description', $product->description) }}"
                                                                    rows="4" style="font-size: 100%;"
                                                                    required>{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription', $product->ldescription) }}"
                                                                    rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}"
                                                                    required></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operator Type</td>
                                                            <td><input type="text" name="operator_type"
                                                                    class="form-control @error('operator_type') is-invalid @enderror"
                                                                    value="{{ old('operator_type', $product->operator_type) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Width Over Forks</td>
                                                            <td><input type="text" name="width_over_forks"
                                                                    class="form-control @error('width_over_forks') is-invalid @enderror"
                                                                    value="{{ old('width_over_forks', $product->width_over_forks) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mast Type</td>
                                                            <td><input type="text" name="mast_type"
                                                                    class="form-control @error('mast_type') is-invalid @enderror"
                                                                    value="{{ old('mast_type', $product->mast_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Load Center for Rated Capacity</td>
                                                            <td><input type="text" name="load_center_for_rated_capacity"
                                                                    class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                    value="{{ old('load_center_for_rated_capacity', $product->load_center_for_rated_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Base</td>
                                                            <td><input type="text" name="wheel_base"
                                                                    class="form-control @error('wheel_base') is-invalid @enderror"
                                                                    value="{{ old('wheel_base', $product->wheel_base) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Type</td>
                                                            <td><input type="text" name="wheel_type"
                                                                    class="form-control @error('wheel_type') is-invalid @enderror"
                                                                    value="{{ old('wheel_type', $product->wheel_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of Wheels (x=driven) Drive/Load</td>
                                                            <td><input type="text" name="number_of_wheels"
                                                                    class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                    value="{{ old('number_of_wheels', $product->number_of_wheels) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lift Height</td>
                                                            <td><input type="text" name="lift_height"
                                                                    class="form-control @error('lift_height') is-invalid @enderror"
                                                                    value="{{ old('lift_height', $product->lift_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Extended Height</td>
                                                            <td><input type="text" name="max_extended_height"
                                                                    class="form-control @error('max_extended_height') is-invalid @enderror"
                                                                    value="{{ old('max_extended_height', $product->max_extended_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mast Lowered Height</td>
                                                            <td><input type="text" name="mast_lowered_height"
                                                                    class="form-control @error('mast_lowered_height') is-invalid @enderror"
                                                                    value="{{ old('mast_lowered_height', $product->mast_lowered_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lowered Fork Height</td>
                                                            <td><input type="text" name="lowered_fork_height"
                                                                    class="form-control @error('lowered_fork_height') is-invalid @enderror"
                                                                    value="{{ old('lowered_fork_height', $product->lowered_fork_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fork Dimensions (LxWxH)</td>
                                                            <td><input type="text" name="fork_dimensions"
                                                                    class="form-control @error('fork_dimensions') is-invalid @enderror"
                                                                    value="{{ old('fork_dimensions', $product->fork_dimensions) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length</td>
                                                            <td><input type="text" name="overall_length"
                                                                    class="form-control @error('overall_length') is-invalid @enderror"
                                                                    value="{{ old('overall_length', $product->overall_length) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Width</td>
                                                            <td><input type="text" name="overall_width"
                                                                    class="form-control @error('overall_width') is-invalid @enderror"
                                                                    value="{{ old('overall_width', $product->overall_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Turning Radius</td>
                                                            <td><input type="text" name="turning_radius"
                                                                    class="form-control @error('turning_radius') is-invalid @enderror"
                                                                    value="{{ old('turning_radius', $product->turning_radius) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Min. Aisle Width</td>
                                                            <td><input type="text" name="min_aisle_width"
                                                                    class="form-control @error('min_aisle_width') is-invalid @enderror"
                                                                    value="{{ old('min_aisle_width', $product->min_aisle_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Min. Ground Clearance</td>
                                                            <td><input type="text" name="min_ground_clearance"
                                                                    class="form-control @error('min_ground_clearance') is-invalid @enderror"
                                                                    value="{{ old('min_ground_clearance', $product->min_ground_clearance) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Travel Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="travel_speed"
                                                                    class="form-control @error('travel_speed') is-invalid @enderror"
                                                                    value="{{ old('travel_speed', $product->travel_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lift Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lift_speed"
                                                                    class="form-control @error('lift_speed') is-invalid @enderror"
                                                                    value="{{ old('lift_speed', $product->lift_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lowering Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lowering_speed"
                                                                    class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                    value="{{ old('lowering_speed', $product->lowering_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gradient (Laden/Unladen)</td>
                                                            <td><input type="text" name="gradient"
                                                                    class="form-control @error('gradient') is-invalid @enderror"
                                                                    value="{{ old('gradient', $product->gradient) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Motor</td>
                                                            <td><input type="text" name="drive_motor"
                                                                    class="form-control @error('drive_motor') is-invalid @enderror"
                                                                    value="{{ old('drive_motor', $product->drive_motor) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lift Motor</td>
                                                            <td><input type="text" name="lift_motor"
                                                                    class="form-control @error('lift_motor') is-invalid @enderror"
                                                                    value="{{ old('lift_motor', $product->lift_motor) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Steering Motor</td>
                                                            <td><input type="text" name="steering_motor"
                                                                    class="form-control @error('steering_motor') is-invalid @enderror"
                                                                    value="{{ old('steering_motor', $product->steering_motor) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Type</td>
                                                            <td><input type="text" name="battery_type"
                                                                    class="form-control @error('battery_type') is-invalid @enderror"
                                                                    value="{{ old('battery_type', $product->battery_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Capacity</td>
                                                            <td><input type="text" name="battery_capacity"
                                                                    class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                    value="{{ old('battery_capacity', $product->battery_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Controler</td>
                                                            <td><input type="text" name="controler"
                                                                    class="form-control @error('controler') is-invalid @enderror"
                                                                    value="{{ old('controler', $product->controler) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Weight</td>
                                                            <td><input type="text" name="battery_weight"
                                                                    class="form-control @error('battery_weight') is-invalid @enderror"
                                                                    value="{{ old('battery_weight', $product->battery_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Weight (Incl. Battery)</td>
                                                            <td><input type="text" name="service_weight"
                                                                    class="form-control @error('service_weight') is-invalid @enderror"
                                                                    value="{{ old('service_weight', $product->service_weight) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>

                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" name="category" class="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" name="scategory" class="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('scategory', $product->sub_id) }}">
                                                                <button type="submit"> Submit</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            @endif
                                            @if ($product->cate_id == 4)
                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}" required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description', $product->description) }}"
                                                                    rows="4" style="font-size: 100%;"
                                                                    required>{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription', $product->ldescription) }}"
                                                                    rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') iss-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}"
                                                                    required></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operator Type</td>
                                                            <td><input type="text" name="operator_type"
                                                                    class="form-control @error('operator_type') is-invalid @enderror"
                                                                    value="{{ old('operator_type', $product->operator_type) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Base</td>
                                                            <td><input type="text" name="wheel_base"
                                                                    class="form-control @error('wheel_base') is-invalid @enderror"
                                                                    value="{{ old('wheel_base', $product->wheel_base) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platform Size</td>
                                                            <td><input type="text" name="platform_size"
                                                                    class="form-control @error('platform_size') is-invalid @enderror"
                                                                    value="{{ old('platform_size', $product->platform_size) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Platform Height</td>
                                                            <td><input type="text" name="platform_height"
                                                                    class="form-control @error('platform_height') is-invalid @enderror"
                                                                    value="{{ old('platform_height', $product->platform_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Handle Height</td>
                                                            <td><input type="text" name="handle_height"
                                                                    class="form-control @error('handle_height') is-invalid @enderror"
                                                                    value="{{ old('handle_height', $product->handle_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length</td>
                                                            <td><input type="text" name="overall_length"
                                                                    class="form-control @error('overall_length') is-invalid @enderror"
                                                                    value="{{ old('overall_length', $product->overall_length) }}">
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Overall Height</td>
                                                            <td><input type="text" name="overall_height"
                                                                    class="form-control @error('overall_height') is-invalid @enderror"
                                                                    value="{{ old('overall_height', $product->overall_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Width</td>
                                                            <td><input type="text" name="overall_width"
                                                                    class="form-control @error('overall_width') is-invalid @enderror"
                                                                    value="{{ old('overall_width', $product->overall_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Type</td>
                                                            <td><input type="text" name="wheel_type"
                                                                    class="form-control @error('wheel_type') is-invalid @enderror"
                                                                    value="{{ old('wheel_type', $product->wheel_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            @endif
                                            @if ($product->cate_id == 5)
                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}" required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description') }}" rows="4"
                                                                    style="font-size: 100%;"
                                                                    required>{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription') }}" rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}"
                                                                    required></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operator Type</td>
                                                            <td><input type="text" name="operator_type"
                                                                    class="form-control @error('operator_type') is-invalid @enderror"
                                                                    value="{{ old('operator_type', $product->operator_type) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Base</td>
                                                            <td><input type="text" name="wheel_base"
                                                                    class="form-control @error('wheel_base') is-invalid @enderror"
                                                                    value="{{ old('wheel_base', $product->wheel_base) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Battery Weight</td>
                                                            <td><input type="text" name="battery_weight"
                                                                    class="form-control @error('battery_weight') is-invalid @enderror"
                                                                    value="{{ old('battery_weight', $product->battery_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Weight</td>
                                                            <td><input type="text" name="service_weight"
                                                                    class="form-control @error('service_weight') is-invalid @enderror"
                                                                    value="{{ old('service_weight', $product->service_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyres</td>
                                                            <td><input type="text" name="tyres"
                                                                    class="form-control @error('tyres') is-invalid @enderror"
                                                                    value="{{ old('tyres', $product->tyres) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Size (Front)</td>
                                                            <td><input type="text" name="tyre_size_front"
                                                                    class="form-control @error('tyre_size_front') is-invalid @enderror"
                                                                    value="{{ old('tyre_size_front', $product->tyre_size_front) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Size (Rear)</td>
                                                            <td><input type="text" name="tyre_size_rear"
                                                                    class="form-control @error('tyre_size_rear') is-invalid @enderror"
                                                                    value="{{ old('tyre_size_rear', $product->tyre_size_rear) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of Wheels (x=driven) Drive/Load</td>
                                                            <td><input type="text" name="number_of_wheels"
                                                                    class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                    value="{{ old('number_of_wheels', $product->number_of_wheels) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Track Width, Front / Rear</td>
                                                            <td><input type="text" name="track_width"
                                                                    class="form-control @error('track_width') is-invalid @enderror"
                                                                    value="{{ old('track_width', $product->track_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length</td>
                                                            <td><input type="text" name="overall_length"
                                                                    class="form-control @error('overall_length') is-invalid @enderror"
                                                                    value="{{ old('overall_length', $product->overall_length) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Width</td>
                                                            <td><input type="text" name="overall_width"
                                                                    class="form-control @error('overall_width') is-invalid @enderror"
                                                                    value="{{ old('overall_width', $product->overall_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Compartment (WxL)</td>
                                                            <td><input type="text" name="battery_compartment"
                                                                    class="form-control @error('battery_compartment') is-invalid @enderror"
                                                                    value="{{ old('battery_compartment', $product->battery_compartment) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Turning Radius</td>
                                                            <td><input type="text" name="turning_radius"
                                                                    class="form-control @error('turning_radius') is-invalid @enderror"
                                                                    value="{{ old('turning_radius', $product->turning_radius) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platform Size</td>
                                                            <td><input type="text" name="platform_size"
                                                                    class="form-control @error('platform_size') is-invalid @enderror"
                                                                    value="{{ old('platform_size', $product->platform_size) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platform Height</td>
                                                            <td><input type="text" name="platform_height"
                                                                    class="form-control @error('platform_height') is-invalid @enderror"
                                                                    value="{{ old('platform_height', $product->platform_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Towing Height</td>
                                                            <td><input type="text" name="towing_height"
                                                                    class="form-control @error('towing_height') is-invalid @enderror"
                                                                    value="{{ old('towing_height', $product->towing_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Travel Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="travel_speed"
                                                                    class="form-control @error('travel_speed') is-invalid @enderror"
                                                                    value="{{ old('travel_speed', $product->travel_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gradient (Laden/Unladen)</td>
                                                            <td><input type="text" name="gradient"
                                                                    class="form-control @error('gradient') is-invalid @enderror"
                                                                    value="{{ old('gradient', $product->gradient) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Brake Type</td>
                                                            <td><input type="text" name="service_brake_type"
                                                                    class="form-control @error('service_brake_type') is-invalid @enderror"
                                                                    value="{{ old('service_brake_type', $product->service_brake_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parking Brake Type</td>
                                                            <td><input type="text" name="parking_brake_type"
                                                                    class="form-control @error('parking_brake_type') is-invalid @enderror"
                                                                    value="{{ old('parking_brake_type', $product->parking_brake_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Motor Rating</td>
                                                            <td><input type="text" name="drive_motor_rating"
                                                                    class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('drive_motor_rating', $product->drive_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive</td>
                                                            <td><input type="text" name="drive"
                                                                    class="form-control @error('drive') is-invalid @enderror"
                                                                    value="{{ old('drive', $product->drive) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Type</td>
                                                            <td><input type="text" name="battery_type"
                                                                    class="form-control @error('battery_type') is-invalid @enderror"
                                                                    value="{{ old('battery_type', $product->battery_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Capacity</td>
                                                            <td><input type="text" name="battery_capacity"
                                                                    class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                    value="{{ old('battery_capacity', $product->battery_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charger Capacity</td>
                                                            <td><input type="text" name="charger_capacity"
                                                                    class="form-control @error('charger_capacity') is-invalid @enderror"
                                                                    value="{{ old('charger_capacity', $product->charger_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Control</td>
                                                            <td><input type="text" name="drive_control"
                                                                    class="form-control @error('drive_control') is-invalid @enderror"
                                                                    value="{{ old('drive_control', $product->drive_control) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </form>

                                            @endif
                                            @if ($product->cate_id == 6)

                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">

                                                @csrf
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description') }}" rows="4"
                                                                    style="font-size: 100%;"
                                                                    required>{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="" rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operator Type</td>
                                                            <td><input type="text" name="operator_type"
                                                                    class="form-control @error('operator_type') is-invalid @enderror"
                                                                    value="{{ old('operator_type') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rated Towing Ability</td>
                                                            <td><input type="text" name="rated_towing_ability"
                                                                    class="form-control @error('rated_towing_ability') is-invalid @enderror"
                                                                    value="{{ old('rated_towing_ability', $product->rated_towing_ability) }}"
                                                                    required></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Max Towing Capacity</td>
                                                            <td><input type="text" name="max_towing_capacity"
                                                                    class="form-control @error('max_towing_capacity') is-invalid @enderror"
                                                                    value="{{ old('max_towing_capacity', $product->max_towing_capacity) }}"
                                                                    required></td>
                                                        </tr>
                                                        {{-- <tr>
                                                                    <td>Operating Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type',$product->operator_type) }}"
                                                        required></td>
                                                        </tr> --}}
                                                        <tr>
                                                            <td>Turning Radius</td>
                                                            <td><input type="text" name="turning_radius"
                                                                    class="form-control @error('turning_radius') is-invalid @enderror"
                                                                    value="{{ old('turning_radius', $product->turning_radius) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Travel Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="travel_speed"
                                                                    class="form-control @error('travel_speed') is-invalid @enderror"
                                                                    value="{{ old('travel_speed', $product->travel_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length</td>
                                                            <td><input type="text" name="overall_length"
                                                                    class="form-control @error('overall_length') is-invalid @enderror"
                                                                    value="{{ old('overall_length', $product->overall_length) }}">
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Overall Height</td>
                                                            <td><input type="text" name="overall_height"
                                                                    class="form-control @error('overall_height') is-invalid @enderror"
                                                                    value="{{ old('overall_height', $product->overall_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Width</td>
                                                            <td><input type="text" name="overall_width"
                                                                    class="form-control @error('overall_width') is-invalid @enderror"
                                                                    value="{{ old('overall_width', $product->overall_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Motor Rating</td>
                                                            <td><input type="text" name="drive_motor_rating"
                                                                    class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('drive_motor_rating', $product->drive_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gradient (Laden/Unladen)</td>
                                                            <td><input type="text" name="gradient"
                                                                    class="form-control @error('gradient') is-invalid @enderror"
                                                                    value="{{ old('gradient', $product->gradient) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Type</td>
                                                            <td><input type="text" name="battery_type"
                                                                    class="form-control @error('battery_type') is-invalid @enderror"
                                                                    value="{{ old('battery_type', $product->battery_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Capacity</td>
                                                            <td><input type="text" name="battery_capacity"
                                                                    class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                    value="{{ old('battery_capacity', $product->battery_capacity) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Battery Weight</td>
                                                            <td><input type="text" name="battery_weight"
                                                                    class="form-control @error('battery_weight') is-invalid @enderror"
                                                                    value="{{ old('battery_weight', $product->battery_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Controler</td>
                                                            <td><input type="text" name="controler"
                                                                    class="form-control @error('controler') is-invalid @enderror"
                                                                    value="{{ old('controler', $product->controler) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Weight (Incl. Battery)</td>
                                                            <td><input type="text" name="service_weight"
                                                                    class="form-control @error('service_weight') is-invalid @enderror"
                                                                    value="{{ old('service_weight', $product->service_weight) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">


                                                                <button type="submit"> Submit</button>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </form>

                                            @endif
                                            @if ($product->cate_id == 7)

                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">

                                                @csrf

                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description', $product->description) }}"
                                                                    rows="4" style="font-size: 100%;"
                                                                    required></textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription', $product->ldescription) }}"
                                                                    rows="4" style="font-size: 100%;"></textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operator Type</td>
                                                            <td><input type="text" name="operator_type"
                                                                    class="form-control @error('operator_type') is-invalid @enderror"
                                                                    value="{{ old('operator_type', $product->operator_type) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Static Load</td>
                                                            <td><input type="text" name="static_load"
                                                                    class="form-control @error('static_load') is-invalid @enderror"
                                                                    value="{{ old('static_load', $product->static_load) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dynamic Load (Dynamic load is the Static load in
                                                                motion.)</td>
                                                            <td><input type="text" name="dynamic_load"
                                                                    class="form-control @error('dynamic_load') is-invalid @enderror"
                                                                    value="{{ old('dynamic_load', $product->dynamic_load) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Working Range Above</td>
                                                            <td><input type="text" name="working_range_above"
                                                                    class="form-control @error('working_range_above') is-invalid @enderror"
                                                                    value="{{ old('working_range_above', $product->working_range_above) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Working Range Below</td>
                                                            <td><input type="text" name="working_range_below"
                                                                    class="form-control @error('working_range_below') is-invalid @enderror"
                                                                    value="{{ old('working_range_below', $product->working_range_below) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platform Length</td>
                                                            <td><input type="text" name="platform_length"
                                                                    class="form-control @error('platform_length') is-invalid @enderror"
                                                                    value="{{ old('platform_length', $product->platform_length) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platform Width</td>
                                                            <td><input type="text" name="platform_width"
                                                                    class="form-control @error('platform_width') is-invalid @enderror"
                                                                    value="{{ old('platform_width', $product->platform_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lip Length</td>
                                                            <td><input type="text" name="lip_length"
                                                                    class="form-control @error('lip_length') is-invalid @enderror"
                                                                    value="{{ old('lip_length', $product->lip_length) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lip width</td>
                                                            <td><input type="text" name="lip_width"
                                                                    class="form-control @error('lip_width') is-invalid @enderror"
                                                                    value="{{ old('lip_width', $product->lip_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lip Extention</td>
                                                            <td><input type="text" name="lip_extention"
                                                                    class="form-control @error('lip_extention') is-invalid @enderror"
                                                                    value="{{ old('lip_extention', $product->lip_extention) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lip Operation</td>
                                                            <td><input type="text" name="lip_operation"
                                                                    class="form-control @error('lip_operation') is-invalid @enderror"
                                                                    value="{{ old('lip_operation', $product->lip_operation) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pit Length</td>
                                                            <td><input type="text" name="pit_length"
                                                                    class="form-control @error('pit_length') is-invalid @enderror"
                                                                    value="{{ old('pit_length', $product->pit_length) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pit Width</td>
                                                            <td><input type="text" name="pit_width"
                                                                    class="form-control @error('pit_width') is-invalid @enderror"
                                                                    value="{{ old('pit_width', $product->pit_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pit Height</td>
                                                            <td><input type="text" name="pit_height"
                                                                    class="form-control @error('pit_height') is-invalid @enderror"
                                                                    value="{{ old('pit_height', $product->pit_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lifting Cylinder No.</td>
                                                            <td><input type="text" name="lifting_cylinder_no"
                                                                    class="form-control @error('lifting_cylinder_no') is-invalid @enderror"
                                                                    value="{{ old('lifting_cylinder_no', $product->lifting_cylinder_no) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Motor Rating</td>
                                                            <td><input type="text" name="motor_rating"
                                                                    class="form-control @error('motor_rating') is-invalid @enderror"
                                                                    value="{{ old('motor_rating', $product->motor_rating) }}">
                                                            </td>
                                                        </tr>




                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            @endif
                                            @if ($product->cate_id == 8)

                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">

                                                @csrf

                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description') }}" rows="4"
                                                                    style="font-size: 100%;"
                                                                    required>{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="" rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operator Type</td>
                                                            <td><input type="text" name="operator_type"
                                                                    class="form-control @error('operator_type') is-invalid @enderror"
                                                                    value="{{ old('operator_type', $product->operator_type) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platform Length</td>
                                                            <td><input type="text" name="platform_length"
                                                                    class="form-control @error('platform_length') is-invalid @enderror"
                                                                    value="{{ old('platform_length', $product->platform_length) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platform Width</td>
                                                            <td><input type="text" name="platform_width"
                                                                    class="form-control @error('platform_width') is-invalid @enderror"
                                                                    value="{{ old('platform_width'), $product->platform_width }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max Lift Height</td>
                                                            <td><input type="text" name="max_lift_height"
                                                                    class="form-control @error('max_lift_height') is-invalid @enderror"
                                                                    value="{{ old('max_lift_height', $product->max_lift_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hydraulic Cylinder No.</td>
                                                            <td><input type="text" name="hydraulic_cylinder_no"
                                                                    class="form-control @error('hydraulic_cylinder_no') is-invalid @enderror"
                                                                    value="{{ old('hydraulic_cylinder_no', $product->hydraulic_cylinder_no) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Floor Lock No.</td>
                                                            <td><input type="text" name="floor_lock_no"
                                                                    class="form-control @error('floor_lock_no') is-invalid @enderror"
                                                                    value="{{ old('floor_lock_no', $product->floor_lock_no) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Floor Lock Type</td>
                                                            <td><input type="text" name="floor_lock_type"
                                                                    class="form-control @error('floor_lock_type') is-invalid @enderror"
                                                                    value="{{ old('floor_lock_type', $product->floor_lock_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of Wheels </td>
                                                            <td><input type="text" name="number_of_wheels"
                                                                    class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                    value="{{ old('number_of_wheels', $product->number_of_wheels) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Type</td>
                                                            <td><input type="text" name="wheel_type"
                                                                    class="form-control @error('wheel_type') is-invalid @enderror"
                                                                    value="{{ old('wheel_type', $product->wheel_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Dimensions</td>
                                                            <td><input type="text" name="wheel_dimensions"
                                                                    class="form-control @error('wheel_dimensions') is-invalid @enderror"
                                                                    value="{{ old('wheel_dimensions', $product->wheel_dimensions) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platform Extention</td>
                                                            <td><input type="text" name="platform_extention"
                                                                    class="form-control @error('platform_extention') is-invalid @enderror"
                                                                    value="{{ old('platform_extention', $product->platform_extention) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>

                                                        </tr>

                                                      
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </form>
                                            @endif
                                            @if ($product->cate_id == 9)

                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">

                                                @csrf

                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description', $product->description) }}"
                                                                    rows="4" style="font-size: 100%;"
                                                                    required>{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription', $product->ldescription) }}"
                                                                    rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operator Type</td>
                                                            <td><input type="text" name="operator_type"
                                                                    class="form-control @error('operator_type') is-invalid @enderror"
                                                                    value="{{ old('operator_type', $product->operator_type) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Width Over Forks</td>
                                                            <td><input type="text" name="width_over_forks"
                                                                    class="form-control @error('width_over_forks') is-invalid @enderror"
                                                                    value="{{ old('width_over_forks', $product->width_over_forks) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Load Center for Rated Capacity</td>
                                                            <td><input type="text" name="load_center_for_rated_capacity"
                                                                    class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                    value="{{ old('load_center_for_rated_capacity', $product->load_center_for_rated_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Travel Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="travel_speed"
                                                                    class="form-control @error('travel_speed') is-invalid @enderror"
                                                                    value="{{ old('travel_speed', $product->travel_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lift Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lift_speed"
                                                                    class="form-control @error('lift_speed') is-invalid @enderror"
                                                                    value="{{ old('lift_speed', $product->lift_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lowering Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lowering_speed"
                                                                    class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                    value="{{ old('lowering_speed', $product->lowering_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gradient (Laden/Unladen)</td>
                                                            <td><input type="text" name="gradient"
                                                                    class="form-control @error('gradient') is-invalid @enderror"
                                                                    value="{{ old('gradient', $product->gradient) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Type</td>
                                                            <td><input type="text" name="battery_type"
                                                                    class="form-control @error('battery_type') is-invalid @enderror"
                                                                    value="{{ old('battery_type', $product->battery_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Weight</td>
                                                            <td><input type="text" name="battery_weight"
                                                                    class="form-control @error('battery_weight') is-invalid @enderror"
                                                                    value="{{ old('battery_weight', $product->battery_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Capacity</td>
                                                            <td><input type="text" name="battery_capacity"
                                                                    class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                    value="{{ old('battery_capacity', $product->battery_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Weight (Incl. Battery)</td>
                                                            <td><input type="text" name="service_weight"
                                                                    class="form-control @error('service_weight') is-invalid @enderror"
                                                                    value="{{ old('service_weight', $product->service_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheelbase</td>
                                                            <td><input type="text" name="wheelbase"
                                                                    class="form-control @error('wheelbase') is-invalid @enderror"
                                                                    value="{{ old('wheelbase', $product->wheelbase) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Width</td>
                                                            <td><input type="text" name="overall_width"
                                                                    class="form-control @error('overall_width') is-invalid @enderror"
                                                                    value="{{ old('overall_width', $product->overall_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length</td>
                                                            <td><input type="text" name="overall_length"
                                                                    class="form-control @error('overall_length') is-invalid @enderror"
                                                                    value="{{ old('overall_length', $product->overall_length) }}">
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Lift Height</td>
                                                            <td><input type="text" name="lift_height"
                                                                    class="form-control @error('lift_height') is-invalid @enderror"
                                                                    value="{{ old('lift_height', $product->lift_height) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Fork Lowering Height</td>
                                                            <td><input type="text" name="fork_lowering_height"
                                                                    class="form-control @error('fork_lowering_height') is-invalid @enderror"
                                                                    value="{{ old('fork_lowering_height', $product->fork_dimensions) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fork Dimensions (LxWxH)</td>
                                                            <td><input type="text" name="fork_dimensions"
                                                                    class="form-control @error('fork_dimensions') is-invalid @enderror"
                                                                    value="{{ old('fork_dimensions', $product->fork_dimensions) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ground Clearance</td>
                                                            <td><input type="text" name="ground_clearance"
                                                                    class="form-control @error('ground_clearance') is-invalid @enderror"
                                                                    value="{{ old('ground_clearance', $product->ground_clearance) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Turning Radius</td>
                                                            <td><input type="text" name="turning_radius"
                                                                    class="form-control @error('turning_radius') is-invalid @enderror"
                                                                    value="{{ old('turning_radius', $product->turning_radius) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type of Drive Motor</td>
                                                            <td><input type="text" name="type_of_drive_motor"
                                                                    class="form-control @error('type_of_drive_motor') is-invalid @enderror"
                                                                    value="{{ old('type_of_drive_motor', $product->type_of_drive_motor) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyres</td>
                                                            <td><input type="text" name="tyres"
                                                                    class="form-control @error('tyres') is-invalid @enderror"
                                                                    value="{{ old('tyres', $product->tyres) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Size (Drive)</td>
                                                            <td><input type="text" name="tyre_size_drive"
                                                                    class="form-control @error('tyre_size_drive') is-invalid @enderror"
                                                                    value="{{ old('tyre_size_drive', $product->tyre_size_drive) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Size (Load)</td>
                                                            <td><input type="text" name="tyre_size_load"
                                                                    class="form-control @error('tyre_size_load') is-invalid @enderror"
                                                                    value="{{ old('tyre_size_load', $product->tyre_size_load) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Support Rollers</td>
                                                            <td><input type="text" name="support_rollers"
                                                                    class="form-control @error('support_rollers') is-invalid @enderror"
                                                                    value="{{ old('support_rollers', $product->support_rollers) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of Wheels </td>
                                                            <td><input type="text" name="number_of_wheels"
                                                                    class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                    value="{{ old('number_of_wheels', $product->number_of_wheels) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lift Motor Rating </td>
                                                            <td><input type="text" name="lift_motor_rating"
                                                                    class="form-control @error('lift_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('lift_motor_rating', $product->lift_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Motor Rating</td>
                                                            <td><input type="text" name="drive_motor_rating"
                                                                    class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('drive_motor_rating', $product->drive_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Control</td>
                                                            <td><input type="text" name="drive_control"
                                                                    class="form-control @error('drive_control') is-invalid @enderror"
                                                                    value="{{ old('drive_control', $product->drive_control) }}">
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </form>
                                            @endif
                                            @if ($product->cate_id == 10)
                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description', $product->description) }}"
                                                                    rows="4"
                                                                    style="font-size: 100%;">{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription', $product->ldescription) }}"
                                                                    rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operator Type</td>
                                                            <td><input type="text" name="operator_type"
                                                                    class="form-control @error('operator_type') is-invalid @enderror"
                                                                    value="{{ old('operator_type', $product->operator_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Width Over Forks</td>
                                                            <td><input type="text" name="width_over_forks"
                                                                    class="form-control @error('width_over_forks') is-invalid @enderror"
                                                                    value="{{ old('width_over_forks', $product->width_over_forks) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Load Center for Rated Capacity</td>
                                                            <td><input type="text" name="load_center_for_rated_capacity"
                                                                    class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                    value="{{ old('load_center_for_rated_capacity', $product->load_center_for_rated_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Power Mode</td>
                                                            <td><input type="text" name="power_mode"
                                                                    class="form-control @error('power_mode') is-invalid @enderror"
                                                                    value="{{ old('power_mode', $product->power_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Driving Mode</td>
                                                            <td><input type="text" name="driving_mode"
                                                                    class="form-control @error('driving_mode') is-invalid @enderror"
                                                                    value="{{ old('driving_mode', $product->driving_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Front Overhang</td>
                                                            <td><input type="text" name="front_overhang"
                                                                    class="form-control @error('front_overhang') is-invalid @enderror"
                                                                    value="{{ old('front_overhang', $product->front_overhang) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheelbase</td>
                                                            <td><input type="text" name="wheelbase"
                                                                    class="form-control @error('wheelbase') is-invalid @enderror"
                                                                    value="{{ old('wheelbase', $product->wheelbase) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Weight</td>
                                                            <td><input type="text" name="service_weight"
                                                                    class="form-control @error('service_weight') is-invalid @enderror"
                                                                    value="{{ old('service_weight', $product->service_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Axle Load (Laden-Front/Rear)</td>
                                                            <td><input type="text" name="axle_load_laden_front"
                                                                    class="form-control @error('axle_load_laden_front') is-invalid @enderror"
                                                                    value="{{ old('axle_load_laden_front', $product->axle_load_laden_front) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Axle Load (Unladen-Front/Rear)</td>
                                                            <td><input type="text" name="axle_load_unladen_front"
                                                                    class="form-control @error('axle_load_unladen_front') is-invalid @enderror"
                                                                    value="{{ old('axle_load_unladen_front', $product->axle_load_unladen_front) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Type</td>
                                                            <td><input type="text" name="tyre_type"
                                                                    class="form-control @error('tyre_type') is-invalid @enderror"
                                                                    value="{{ old('tyre_type', $product->tyre_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Size (Front)</td>
                                                            <td><input type="text" name="tyre_size_front"
                                                                    class="form-control @error('tyre_size_front') is-invalid @enderror"
                                                                    value="{{ old('tyre_size_front', $product->tyre_size_front) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Size (Rear)</td>
                                                            <td><input type="text" name="tyre_size_rear"
                                                                    class="form-control @error('tyre_size_rear') is-invalid @enderror"
                                                                    value="{{ old('tyre_size_rear', $product->tyre_size_rear) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Number of Wheels</td>
                                                            <td><input type="text" name="number_of_wheels"
                                                                    class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                    value="{{ old('number_of_wheels', $product->number_of_wheels) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tread Front</td>
                                                            <td><input type="text" name="tread_front"
                                                                    class="form-control @error('tread_front') is-invalid @enderror"
                                                                    value="{{ old('tread_front', $product->tread_front) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tread Rear</td>
                                                            <td><input type="text" name="tread_rear"
                                                                    class="form-control @error('tread_rear') is-invalid @enderror"
                                                                    value="{{ old('tread_rear', $product->tread_rear) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fork Tilt Angle (Forward/Backward)</td>
                                                            <td><input type="text" name="fork_tilt_angle"
                                                                    class="form-fork_tilt_angle @error('fork_tilt_angle') is-invalid @enderror"
                                                                    value="{{ old('fork_tilt_angle', $product->fork_tilt_angle) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Height (Mast Lowered)</td>
                                                            <td><input type="text" name="height"
                                                                    class="form-control @error('height') is-invalid @enderror"
                                                                    value="{{ old('height', $product->height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Free Lifting Height</td>
                                                            <td><input type="text" name="free_lifting_height"
                                                                    class="form-control @error('free_lifting_height') is-invalid @enderror"
                                                                    value="{{ old('free_lifting_height', $product->free_lifting_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lifting Height</td>
                                                            <td><input type="text" name="lifting_height"
                                                                    class="form-control @error('lifting_height') is-invalid @enderror"
                                                                    value="{{ old('lifting_height', $product->lifting_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Height Extended</td>
                                                            <td><input type="text" name="max_height_extended"
                                                                    class="form-control @error('max_height_extended') is-invalid @enderror"
                                                                    value="{{ old('max_height_extended', $product->max_height_extended) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Height of Overhead Guard</td>
                                                            <td><input type="text" name="height_of_overhead_guard"
                                                                    class="form-control @error('height_of_overhead_guard') is-invalid @enderror"
                                                                    value="{{ old('height_of_overhead_guard', $product->height_of_overhead_guard) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seat Height Relating to SIP (to Ground)</td>
                                                            <td><input type="text" name="seat_height_relating_to_sip"
                                                                    class="form-control @error('seat_height_relating_to_sip') is-invalid @enderror"
                                                                    value="{{ old('seat_height_relating_to_sip', $product->seat_height_relating_to_sip) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length (With Fork)</td>
                                                            <td><input type="text" name="overall_length_with_fork"
                                                                    class="form-control @error('overall_length_with_fork') is-invalid @enderror"
                                                                    value="{{ old('overall_length_with_fork', $product->overall_length_with_fork) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length (Without Fork)</td>
                                                            <td><input type="text" name="overall_length_without_fork"
                                                                    class="form-control @error('overall_length_without_fork') is-invalid @enderror"
                                                                    value="{{ old('overall_length_without_fork', $product->overall_length_without_fork) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Width</td>
                                                            <td><input type="text" name="overall_width"
                                                                    class="form-control @error('overall_width') is-invalid @enderror"
                                                                    value="{{ old('overall_width', $product->overall_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fork Dimension (LxWxH)</td>
                                                            <td><input type="text" name="fork_dimension"
                                                                    class="form-control @error('fork_dimension') is-invalid @enderror"
                                                                    value="{{ old('fork_dimension', $product->fork_dimension) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fork Carriage (according to ISO2328)</td>
                                                            <td><input type="text" name="fork_carriage"
                                                                    class="form-control @error('fork_carriage') is-invalid @enderror"
                                                                    value="{{ old('fork_carriage', $product->fork_carriage) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Distance Across Fork Arm (Min./Max.)</td>
                                                            <td><input type="text" name="distance_across_fork_arm"
                                                                    class="form-control @error('distance_across_fork_arm') is-invalid @enderror"
                                                                    value="{{ old('distance_across_fork_arm', $product->distance_across_fork_arm) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fork Sideshifting</td>
                                                            <td><input type="text" name="fork_sideshifting"
                                                                    class="form-control @error('fork_sideshifting') is-invalid @enderror"
                                                                    value="{{ old('fork_sideshifting', $product->fork_sideshifting) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Distance between Support Arm</td>
                                                            <td><input type="text" name="distance_between_support_arm"
                                                                    class="form-control @error('distance_between_support_arm') is-invalid @enderror"
                                                                    value="{{ old('distance_between_support_arm', $product->distance_between_support_arm) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Reach Distance</td>
                                                            <td><input type="text" name="reach_distance"
                                                                    class="form-control @error('reach_distance') is-invalid @enderror"
                                                                    value="{{ old('reach_distance', $product->reach_distance) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ground Clearance</td>
                                                            <td><input type="text" name="ground_clearance"
                                                                    class="form-control @error('ground_clearance') is-invalid @enderror"
                                                                    value="{{ old('ground_clearance', $product->ground_clearance) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Right Angle Stacking Aisle Width for Pallet
                                                                1000x1200mm Crossways</td>
                                                            <td><input type="text"
                                                                    name="right_angle_stacking1000x1200mm"
                                                                    class="form-control @error('right_angle_stacking1000x1200mm') is-invalid @enderror"
                                                                    value="{{ old('right_angle_stacking1000x1200mm', $product->right_angle_stacking1000x1200mm) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Right Angle Stacking Aisle Width for Pallet
                                                                800x1200mm Crossways</td>
                                                            <td><input type="text" name="right_angle_stacking800x1200mm"
                                                                    class="form-control @error('right_angle_stacking800x1200mm') is-invalid @enderror"
                                                                    value="{{ old('right_angle_stacking800x1200mm', $product->right_angle_stacking800x1200mm) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Min. Outside Turning Radius</td>
                                                            <td><input type="text" name="min_outside_turning_radius"
                                                                    class="form-control @error('min_outside_turning_radius') is-invalid @enderror"
                                                                    value="{{ old('min_outside_turning_radius', $product->min_outside_turning_radius) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Travel Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="travel_speed"
                                                                    class="form-control @error('travel_speed') is-invalid @enderror"
                                                                    value="{{ old('travel_speed', $product->travel_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lift Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lift_speed"
                                                                    class="form-control @error('lift_speed') is-invalid @enderror"
                                                                    value="{{ old('lift_speed', $product->lift_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lowering Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lowering_speed"
                                                                    class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                    value="{{ old('lowering_speed', $product->lowering_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Reach Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="reach_speed"
                                                                    class="form-control @error('reach_speed') is-invalid @enderror"
                                                                    value="{{ old('reach_speed', $product->reach_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Gradeability (Laden/Unladen)</td>
                                                            <td><input type="text" name="max_gradeability"
                                                                    class="form-control @error('max_gradeability') is-invalid @enderror"
                                                                    value="{{ old('max_gradeability', $product->max_gradeability) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Type</td>
                                                            <td><input type="text" name="battery_type"
                                                                    class="form-control @error('battery_type') is-invalid @enderror"
                                                                    value="{{ old('battery_type', $product->battery_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Capacity</td>
                                                            <td><input type="text" name="battery_capacity"
                                                                    class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                    value="{{ old('battery_capacity', $product->battery_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Weight</td>
                                                            <td><input type="text" name="battery_weight"
                                                                    class="form-control @error('battery_weight') is-invalid @enderror"
                                                                    value="{{ old('battery_weight', $product->battery_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Box Dimension (LxWxH)</td>
                                                            <td><input type="text" name="battery_box_dimension"
                                                                    class="form-control @error('battery_box_dimension') is-invalid @enderror"
                                                                    value="{{ old('battery_box_dimension', $product->battery_box_dimension) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Motor Rating</td>
                                                            <td><input type="text" name="drive_motor_rating"
                                                                    class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('drive_motor_rating', $product->drive_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lifting Motor Rating</td>
                                                            <td><input type="text" name="lifting_motor_rating"
                                                                    class="form-control @error('lifting_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('lifting_motor_rating', $product->lifting_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Steering Motor Rating</td>
                                                            <td><input type="text" name="steering_motor_rating"
                                                                    class="form-control @error('steering_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('steering_motor_rating', $product->steering_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Motor Control Mode</td>
                                                            <td><input type="text" name="drive_motor_control_mode"
                                                                    class="form-control @error('drive_motor_control_mode') is-invalid @enderror"
                                                                    value="{{ old('drive_motor_control_mode', $product->drive_motor_control_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lifting Motor Control Mode</td>
                                                            <td><input type="text" name="lifting_motor_control_mode"
                                                                    class="form-control @error('lifting_motor_control_mode') is-invalid @enderror"
                                                                    value="{{ old('lifting_motor_control_mode', $product->lifting_motor_control_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Steering Motor Control Mode</td>
                                                            <td><input type="text" name="steering_motor_control_mode"
                                                                    class="form-control @error('steering_motor_control_mode') is-invalid @enderror"
                                                                    value="{{ old('steering_motor_control_mode', $product->steering_motor_control_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission Box</td>
                                                            <td><input type="text" name="transmission_box"
                                                                    class="form-control @error('transmission_box') is-invalid @enderror"
                                                                    value="{{ old('transmission_box', $product->transmission_box) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Break Type</td>
                                                            <td><input type="text" name="service_break_type"
                                                                    class="form-control @error('service_break_type') is-invalid @enderror"
                                                                    value="{{ old('service_break_type', $product->service_break_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parking Break Type</td>
                                                            <td><input type="text" name="parking_break_type"
                                                                    class="form-control @error('parking_break_type') is-invalid @enderror"
                                                                    value="{{ old('parking_break_type', $product->parking_break_type) }}">
                                                            </td>
                                                        </tr>




                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>

                                            @endif
                                            @if ($product->cate_id == 11)
                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description', $product->description) }}"
                                                                    rows="4"
                                                                    style="font-size: 100%;">{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription') }}" rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type of load</td>
                                                            <td><input type="text" name="type_of_load"
                                                                    class="form-control @error('type_of_load') is-invalid @enderror"
                                                                    value="{{ old('type_of_load', $product->type_of_load) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type of Pallet</td>
                                                            <td><input type="text" name="type_of_pallet"
                                                                    class="form-control @error('type_of_pallet') is-invalid @enderror"
                                                                    value="{{ old('type_of_pallet', $product->type_of_pallet) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Size of Pallet</td>
                                                            <td><input type="text" name="size_of_pallet"
                                                                    class="form-control @error('size_of_pallet') is-invalid @enderror"
                                                                    value="{{ old('size_of_pallet', $product->size_of_pallet) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pallet Unit Load</td>
                                                            <td><input type="text" name="pallet_unit_load"
                                                                    class="form-control @error('pallet_unit_load') is-invalid @enderror"
                                                                    value="{{ old('pallet_unit_load', $product->pallet_unit_load) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Floor Dimension</td>
                                                            <td><input type="text" name="floor_dimension"
                                                                    class="form-control @error('floor_dimension') is-invalid @enderror"
                                                                    value="{{ old('floor_dimension', $product->floor_dimension) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Aisle Width Available</td>
                                                            <td><input type="text" name="aisle_width_available"
                                                                    class="form-control @error('aisle_width_available') is-invalid @enderror"
                                                                    value="{{ old('aisle_width_available', $product->aisle_width_available) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Warehouse Clear Height</td>
                                                            <td><input type="text" name="warehouse_clear_height"
                                                                    class="form-control @error('warehouse_clear_height') is-invalid @enderror"
                                                                    value="{{ old('warehouse_clear_height', $product->warehouse_clear_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Equipment to be Used (Required from Prospect)
                                                            </td>
                                                            <td><input type="text" name="equipment_to_be_used"
                                                                    class="form-control @error('equipment_to_be_used') is-invalid @enderror"
                                                                    value="{{ old('equipment_to_be_used', $product->equipment_to_be_used) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Equipment Width (Required from Prospect)</td>
                                                            <td><input type="text" name="equipment_width"
                                                                    class="form-control @error('equipment_width') is-invalid @enderror"
                                                                    value="{{ old('equipment_width', $product->equipment_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Straddle Width</td>
                                                            <td><input type="text" name="straddle_width"
                                                                    class="form-control @error('straddle_width') is-invalid @enderror"
                                                                    value="{{ old('straddle_width', $product->straddle_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Floor Layout (Auto-Cad Drawing Required from
                                                                Prospect)</td>
                                                            <td><input type="text" name="floor_layout"
                                                                    class="form-control @error('floor_layout') is-invalid @enderror"
                                                                    value="{{ old('floor_layout', $product->floor_layout) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Section Details</td>
                                                            <td><input type="text" name="section_details"
                                                                    class="form-control @error('section_details') is-invalid @enderror"
                                                                    value="{{ old('section_details', $product->section_details) }}">
                                                            </td>
                                                        </tr>




                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            @endif
                                            @if ($product->cate_id == 12)
                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description') }}" rows="4"
                                                                    style="font-size: 100%;"
                                                                    required>{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription') }}" rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }} ">
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Load Center FOr Retes Capacity</td>
                                                            <td><input type="text" name="load_center_for_rated_capacity"
                                                                    class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                    value="{{ old('load_center_for_rated_capacity', $product->load_center_for_rated_capacity) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Power Mode</td>
                                                            <td><input type="text" name="power_mode"
                                                                    class="form-control @error('power_mode') is-invalid @enderror"
                                                                    value="{{ old('power_mode', $product->power_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Driving Mode</td>
                                                            <td><input type="text" name="driving_mode"
                                                                    class="form-control @error('driving_mode') is-invalid @enderror"
                                                                    value="{{ old('driving_mode', $product->driving_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fornt Over Hang</td>
                                                            <td><input type="text" name="front_overhang"
                                                                    class="form-control @error('front_overhang') is-invalid @enderror"
                                                                    value="{{ old('front_overhang', $product->front_overhang) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Wheel Base</td>
                                                            <td><input type="text" name="wheelbase"
                                                                    class="form-control @error('wheelbase') is-invalid @enderror"
                                                                    value="{{ old('wheelbase', $product->wheelbase) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Axle Load Laden Front</td>
                                                            <td><input type="text" name="axle_load_laden_front"
                                                                    class="form-control @error('axle_load_laden_front') is-invalid @enderror"
                                                                    value="{{ old('axle_load_laden_front', $product->axle_load_laden_front) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Axle Load Unladen Front</td>
                                                            <td><input type="text" name="axle_load_unladen_front"
                                                                    class="form-control @error('axle_load_unladen_front') is-invalid @enderror"
                                                                    value="{{ old('axle_load_unladen_front', $product->axle_load_unladen_front) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Type</td>
                                                            <td><input type="text" name="tyre_type"
                                                                    class="form-control @error('tyre_type') is-invalid @enderror"
                                                                    value="{{ old('tyre_type', $product->tyre_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>wheel number</td>
                                                            <td><input type="text" name="wheel_number"
                                                                    class="form-control @error('wheel_number') is-invalid @enderror"
                                                                    value="{{ old('wheel_number', $product->wheel_number) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tread Front</td>
                                                            <td><input type="text" name="tread_front"
                                                                    class="form-control @error('tread_front') is-invalid @enderror"
                                                                    value="{{ old('tread_front', $product->tread_front) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tread Rear</td>
                                                            <td><input type="text" name="tread_rear"
                                                                    class="form-control @error('tread_rear') is-invalid @enderror"
                                                                    value="{{ old('tread_rear', $product->tread_rear) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mast Tilt Angle</td>
                                                            <td><input type="text" name="mast_tilt_angle"
                                                                    class="form-control @error('mast_tilt_angle') is-invalid @enderror"
                                                                    value="{{ old('mast_tilt_angle', $product->mast_tilt_angle) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>height</td>
                                                            <td><input type="text" name="height"
                                                                    class="form-control @error('height') is-invalid @enderror"
                                                                    value="{{ old('height', $product->height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Free Lifting Height</td>
                                                            <td><input type="text" name="free_lifting_height"
                                                                    class="form-control @error('free_lifting_height') is-invalid @enderror"
                                                                    value="{{ old('free_lifting_height', $product->free_lifting_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lifting Height</td>
                                                            <td><input type="text" name="lifting_height"
                                                                    class="form-control @error('lifting_height') is-invalid @enderror"
                                                                    value="{{ old('lifting_height', $product->lifting_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max Height Extended</td>
                                                            <td><input type="text" name="max_height_extended"
                                                                    class="form-control @error('max_height_extended') is-invalid @enderror"
                                                                    value="{{ old('max_height_extended', $product->max_height_extended) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Height of Overhead Guard</td>
                                                            <td><input type="text" name="height_of_overhead_guard"
                                                                    class="form-control @error('height_of_overhead_guard') is-invalid @enderror"
                                                                    value="{{ old('height_of_overhead_guard', $product->height_of_overhead_guard) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seat Height Relating to SIP (to Ground)</td>
                                                            <td><input type="text" name="seat_height_relating_to_sip"
                                                                    class="form-control @error('seat_height_relating_to_sip') is-invalid @enderror"
                                                                    value="{{ old('seat_height_relating_to_sip', $product->seat_height_relating_to_sip) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Towing Coupling Height</td>
                                                            <td><input type="text" name="towing_coupling_height"
                                                                    class="form-control @error('towing_coupling_height') is-invalid @enderror"
                                                                    value="{{ old('towing_coupling_height', $product->towing_coupling_height) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length (With Fork)</td>
                                                            <td><input type="text" name="overall_length_with_fork"
                                                                    class="form-control @error('overall_length_with_fork') is-invalid @enderror"
                                                                    value="{{ old('overall_length_with_fork', $product->overall_length_with_fork) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length (Without Fork)</td>
                                                            <td><input type="text" name="overall_length_without_fork"
                                                                    class="form-control @error('overall_length_without_fork') is-invalid @enderror"
                                                                    value="{{ old('overall_length_without_fork', $product->overall_length_without_fork) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fork Dimension (LxWxH)</td>
                                                            <td><input type="text" name="fork_dimension"
                                                                    class="form-control @error('fork_dimension') is-invalid @enderror"
                                                                    value="{{ old('fork_dimension', $product->fork_dimension) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fork Carriage (according to ISO2328)</td>
                                                            <td><input type="text" name="fork_carriage"
                                                                    class="form-control @error('fork_carriage') is-invalid @enderror"
                                                                    value="{{ old('fork_carriage', $product->fork_carriage) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Distance Across Fork Arm (Min./Max.)</td>
                                                            <td><input type="text" name="distance_across_fork_arm"
                                                                    class="form-control @error('distance_across_fork_arm') is-invalid @enderror"
                                                                    value="{{ old('distance_across_fork_arm', $product->distance_across_fork_arm) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ground Clearance (at Mast)</td>
                                                            <td><input type="text" name="ground_clearance_at_the_mast"
                                                                    class="form-control @error('ground_clearance_at_the_mast') is-invalid @enderror"
                                                                    value="{{ old('ground_clearance_at_the_mast', $product->ground_clearance_at_the_mast) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ground Clearance (Center of Wheelbase)</td>
                                                            <td><input type="text"
                                                                    name="ground_clearance_center_of_wheelbase"
                                                                    class="form-control @error('ground_clearance_center_of_wheelbase') is-invalid @enderror"
                                                                    value="{{ old('ground_clearance_center_of_wheelbase', $product->ground_clearance_center_of_wheelbase) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Right Angle Stacking Aisle Width for Pallet 1000x1200mm
                                                                Crossways</td>
                                                            <td><input type="text"
                                                                    name="right_angle_stacking1000x1200mm"
                                                                    class="form-control @error('right_angle_stacking1000x1200mm') is-invalid @enderror"
                                                                    value="{{ old('right_angle_stacking1000x1200mm', $product->right_angle_stacking1000x1200mm) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Right Angle Stacking Aisle Width for Pallet 800x1200mm
                                                                Crossways</td>
                                                            <td><input type="text" name="right_angle_stacking800x1200mm"
                                                                    class="form-control @error('right_angle_stacking800x1200mm') is-invalid @enderror"
                                                                    value="{{ old('right_angle_stacking800x1200mm', $product->right_angle_stacking800x1200mm) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Min. Outside Turning Radius</td>
                                                            <td><input type="text" name="min_outside_turning_radius"
                                                                    class="form-control @error('min_outside_turning_radius') is-invalid @enderror"
                                                                    value="{{ old('min_outside_turning_radius', $product->min_outside_turning_radius) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Travel Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="travel_speed"
                                                                    class="form-control @error('travel_speed') is-invalid @enderror"
                                                                    value="{{ old('travel_speed', $product->travel_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lift Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lift_speed"
                                                                    class="form-control @error('lift_speed') is-invalid @enderror"
                                                                    value="{{ old('lift_speed', $product->lift_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lowering Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lowering_speed"
                                                                    class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                    value="{{ old('lowering_speed', $product->lowering_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Drawbar Pull (Laden)</td>
                                                            <td><input type="text" name="max_drawbar_pull"
                                                                    class="form-control @error('max_drawbar_pull') is-invalid @enderror"
                                                                    value="{{ old('max_drawbar_pull', $product->max_drawbar_pull) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Gradeability (Laden/Unladen)</td>
                                                            <td><input type="text" name="max_gradeability"
                                                                    class="form-control @error('max_gradeability') is-invalid @enderror"
                                                                    value="{{ old('max_gradeability', $product->max_gradeability) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Acceleration Time (10m) (Laden/Unladen)</td>
                                                            <td><input type="text" name="acceleration_time"
                                                                    class="form-control @error('acceleration_time') is-invalid @enderror"
                                                                    value="{{ old('acceleration_time', $product->acceleration_time) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Type</td>
                                                            <td><input type="text" name="battery_type"
                                                                    class="form-control @error('battery_type') is-invalid @enderror"
                                                                    value="{{ old('battery_type', $product->battery_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Battery Capacity</td>
                                                            <td><input type="text" name="battery_capacity"
                                                                    class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                    value="{{ old('battery_capacity', $product->battery_capacity) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Battery Weight</td>
                                                            <td><input type="text" name="battery_weight"
                                                                    class="form-control @error('battery_weight') is-invalid @enderror"
                                                                    value="{{ old('battery_weight', $product->battery_weight) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Motor Rating</td>
                                                            <td><input type="text" name="drive_motor_rating"
                                                                    class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('drive_motor_rating', $product->drive_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lifting Motor Rating</td>
                                                            <td><input type="text" name="lifting_motor_rating"
                                                                    class="form-control @error('lifting_motor_rating') is-invalid @enderror"
                                                                    value="{{ old('lifting_motor_rating', $product->lifting_motor_rating) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Drive Motor Control Mode</td>
                                                            <td><input type="text" name="drive_motor_control_mode"
                                                                    class="form-control @error('drive_motor_control_mode') is-invalid @enderror"
                                                                    value="{{ old('drive_motor_control_mode', $product->drive_motor_control_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lifting Motor Control Mode</td>
                                                            <td><input type="text" name="lifting_motor_control_mode"
                                                                    class="form-control @error('lifting_motor_control_mode') is-invalid @enderror"
                                                                    value="{{ old('lifting_motor_control_mode', $product->lifting_motor_control_mode) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Break Type</td>
                                                            <td><input type="text" name="service_break_type"
                                                                    class="form-control @error('service_break_type') is-invalid @enderror"
                                                                    value="{{ old('service_break_type', $product->service_break_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parking Break Type</td>
                                                            <td><input type="text" name="parking_break_type"
                                                                    class="form-control @error('parking_break_type') is-invalid @enderror"
                                                                    value="{{ old('parking_break_type', $product->parking_break_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operating Pressure for Attachment</td>
                                                            <td><input type="text"
                                                                    name="operating_pressure_for_attachment"
                                                                    class="form-control @error('operating_pressure_for_attachment') is-invalid @enderror"
                                                                    value="{{ old('operating_pressure_for_attachment', $product->operating_pressure_for_attachment) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Engine Model</td>
                                                            <td><input type="text" name="engine_model"
                                                                    class="form-control @error('engine_model') is-invalid @enderror"
                                                                    value="{{ old('engine_model', $product->engine_model) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Engine Rated Power/Rated Speed</td>
                                                            <td><input type="text" name="engine_rated_power"
                                                                    class="form-control @error('engine_rated_power') is-invalid @enderror"
                                                                    value="{{ old('engine_rated_power', $product->engine_rated_power) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Torque/Rated Speed</td>
                                                            <td><input type="text" name="max_torque_rated_speed"
                                                                    class="form-control @error('max_torque_rated_speed') is-invalid @enderror"
                                                                    value="{{ old('max_torque_rated_speed', $product->max_torque_rated_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fuel Consumption</td>
                                                            <td><input type="text" name="fuel_consumption"
                                                                    class="form-control @error('fuel_consumption') is-invalid @enderror"
                                                                    value="{{ old('fuel_consumption', $product->fuel_consumption) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gearbox</td>
                                                            <td><input type="text" name="gearbox"
                                                                    class="form-control @error('gearbox') is-invalid @enderror"
                                                                    value="{{ old('gearbox', $product->gearbox) }}">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </form>
                                            @endif
                                            @if ($product->cate_id == 13)
                                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Select category
                                                            </td>
                                                            <td>
                                                                <select id='sel_depart' name='sel_depart'>
                                                                    <option value='0'>-- Select category--
                                                                    </option>

                                                                    <!-- Read Departments -->
                                                                    @foreach ($categ->skip(1) as $department)
                                                                    <option value='{{ $department->id }}'>
                                                                        {{ $department->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="productcategory">
                                                            <td>
                                                                Select Product Category
                                                            </td>
                                                            <td>
                                                                <select id='sel_emp' name='sel_emp'
                                                                    onchange="myFuntion()" required>
                                                                    <option value='0' selected disabled>-- Select
                                                                        Product Category
                                                                        --</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Product Name
                                                            </td>
                                                            <td>
                                                                <input type="text" name="title"
                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                    value="{{ old('title', $product->title) }}"
                                                                    required onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                            <label style="color:red;float:right;">No Special Characters</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Short Description</td>
                                                            <td>
                                                                <textarea name="description"
                                                                    class="form-control @error('description') is-invalid @enderror"
                                                                    value="{{ old('description') }}" rows="4"
                                                                    style="font-size: 100%;"
                                                                    required>{{ $product->description }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Long Description</td>
                                                            <td>
                                                                <textarea name="ldescription"
                                                                    class="form-control @error('ldescription') is-invalid @enderror"
                                                                    value="{{ old('ldescription') }}" rows="4"
                                                                    style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Manufacturer Company Name</td>
                                                            <td><input type="text" name="manufacturer"
                                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                                    value="{{ old('manufacturer', $product->manufacturer) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        @if (empty($product->manufacturer_y))
                                                        @else
                                                        <tr>
                                                            <td style="width:30%">
                                                                Manufacturer Year
                                                            </td>
                                                            <td>
                                                                <input type="text" name="manufacturer_y"
                                                                    class="form-control @error('manufacturer_y') is-invalid @enderror"
                                                                    value="{{ old('manufacturer_y', $product->manufacturer_y) }}">
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>Model</td>
                                                            <td><input type="text" name="model"
                                                                    class="form-control @error('model') is-invalid @enderror"
                                                                    value="{{ old('model', $product->model) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Capacity</td>
                                                            <td><input type="text" name="capacity"
                                                                    class="form-control @error('capacity') is-invalid @enderror"
                                                                    value="{{ old('capacity', $product->capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Load Center for Rated Capacity</td>
                                                            <td><input type="text" name="load_center_for_rated_capacity"
                                                                    class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                    value="{{ old('load_center_for_rated_capacity', $product->load_center_for_rated_capacity) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Handling Layers</td>
                                                            <td><input type="text" name="max_handling_layers"
                                                                    class="form-control @error('max_handling_layers') is-invalid @enderror"
                                                                    value="{{ old('max_handling_layers', $product->max_handling_layers) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Length of Container Lifted</td>
                                                            <td><input type="text" name="length_of_container_lifted"
                                                                    class="form-control @error('length_of_container_lifted') is-invalid @enderror"
                                                                    value="{{ old('length_of_container_lifted', $product->length_of_container_lifted) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Rotary Lock Height</td>
                                                            <td><input type="text" name="max_rotary_lock_height"
                                                                    class="form-control @error('max_rotary_lock_height') is-invalid @enderror"
                                                                    value="{{ old('max_rotary_lock_height', $product->max_rotary_lock_height) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Min. Rotary Lock Height</td>
                                                            <td><input type="text" name="min_rotary_lock_height"
                                                                    class="form-control @error('min_rotary_lock_height') is-invalid @enderror"
                                                                    value="{{ old('min_rotary_lock_height', $product->min_rotary_lock_height) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lifting Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lifting_speed"
                                                                    class="form-control @error('lifting_speed') is-invalid @enderror"
                                                                    value="{{ old('lifting_speed', $product->lifting_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lowering Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="lowering_speed"
                                                                    class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                    value="{{ old('lowering_speed', $product->lowering_speed) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mast Tilt (Forward/Backward)</td>
                                                            <td><input type="text" name="mast_tilt"
                                                                    class="form-control @error('mast_tilt') is-invalid @enderror"
                                                                    value="{{ old('mast_tilt', $product->mast_tilt) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Travel Speed (Laden/Unladen)</td>
                                                            <td><input type="text" name="travel_speed"
                                                                    class="form-control @error('travel_speed') is-invalid @enderror"
                                                                    value="{{ old('travel_speed', $product->travel_speed) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Min. Turning Radius</td>
                                                            <td><input type="text" name="min_turning_radius"
                                                                    class="form-control @error('min_turning_radius') is-invalid @enderror"
                                                                    value="{{ old('min_turning_radius', $product->min_turning_radius) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Gradeability (Laden/Unladen)</td>
                                                            <td><input type="text" name="max_gradeability"
                                                                    class="form-control @error('max_gradeability') is-invalid @enderror"
                                                                    value="{{ old('max_gradeability', $product->max_gradeability) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Length</td>
                                                            <td><input type="text" name="overall_length"
                                                                    class="form-control @error('overall_length') is-invalid @enderror"
                                                                    value="{{ old('overall_length', $product->overall_length) }}">
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Overall Width</td>
                                                            <td><input type="text" name="overall_width"
                                                                    class="form-control @error('overall_width') is-invalid @enderror"
                                                                    value="{{ old('overall_width', $product->overall_width) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Overall Height (Mast)</td>
                                                            <td><input type="text" name="overall_height"
                                                                    class="form-control @error('overall_height') is-invalid @enderror"
                                                                    value="{{ old('overall_height', $product->overall_height) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Base</td>
                                                            <td><input type="text" name="wheelbase"
                                                                    class="form-control @error('wheelbase') is-invalid @enderror"
                                                                    value="{{ old('wheelbase', $product->wheelbase) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tread (Forward/Backward)</td>
                                                            <td><input type="text" name="tread"
                                                                    class="form-control @error('tread') is-invalid @enderror"
                                                                    value="{{ old('tread', $product->tread) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Min. Under Clearance</td>
                                                            <td><input type="text" name="min_under_clearance"
                                                                    class="form-control @error('min_under_clearance') is-invalid @enderror"
                                                                    value="{{ old('min_under_clearance', $product->min_under_clearance) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lateral Displacement of Spreader</td>
                                                            <td><input type="text"
                                                                    name="lateral_displacement_of_spreader"
                                                                    class="form-control @error('lateral_displacement_of_spreader') is-invalid @enderror"
                                                                    value="{{ old('lateral_displacement_of_spreader', $product->lateral_displacement_of_spreader) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Engine Manufacturer</td>
                                                            <td><input type="text" name="engine_manufacturer"
                                                                    class="form-control @error('engine_manufacturer') is-invalid @enderror"
                                                                    value="{{ old('engine_manufacturer', $product->engine_manufacturer) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Engine Model</td>
                                                            <td><input type="text" name="engine_model"
                                                                    class="form-control @error('engine_model') is-invalid @enderror"
                                                                    value="{{ old('engine_model', $product->engine_model) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheel Number (Front/Rear)</td>
                                                            <td><input type="text" name="number_of_wheels"
                                                                    class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                    value="{{ old('number_of_wheels', $product->number_of_wheels) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Engine Rated Power/Rated Speed</td>
                                                            <td><input type="text" name="engine_rated_power"
                                                                    class="form-control @error('engine_rated_power') is-invalid @enderror"
                                                                    value="{{ old('engine_rated_power', $product->engine_rated_power) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Max. Torque/Rated Speed</td>
                                                            <td><input type="text" name="max_torque_rated_speed"
                                                                    class="form-control @error('max_torque_rated_speed') is-invalid @enderror"
                                                                    value="{{ old('max_torque_rated_speed', $product->max_torque_rated_speed) }}"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Fuel Consumption</td>
                                                            <td><input type="text" name="fuel_consumption"
                                                                    class="form-control @error('fuel_consumption') is-invalid @enderror"
                                                                    value="{{ old('fuel_consumption', $product->fuel_consumption) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gearbox</td>
                                                            <td><input type="text" name="gearbox"
                                                                    class="form-control @error('gearbox') is-invalid @enderror"
                                                                    value="{{ old('gearbox', $product->gearbox) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Type</td>
                                                            <td><input type="text" name="tyre_type"
                                                                    class="form-control @error('tyre_type') is-invalid @enderror"
                                                                    value="{{ old('tyre_type', $product->tyre_type) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Size Front</td>
                                                            <td><input type="text" name="tyre_size_front"
                                                                    class="form-control @error('tyre_size_front') is-invalid @enderror"
                                                                    value="{{ old('tyre_size_front', $product->tyre_size_front) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tyre Size Rear</td>
                                                            <td><input type="text" name="tyre_size_rear"
                                                                    class="form-control @error('tyre_size_rear') is-invalid @enderror"
                                                                    value="{{ old('tyre_size_rear', $product->tyre_size_rear) }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cover Image</td>
                                                            <td>
                                                                <input type="file" name="image"
                                                                    class="form-control image">
                                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multiple Image</td>
                                                            <td>

                                                                <div class="upload__box">
                                                                    <div class="upload__btn-box">


                                                                        <input type="file" multiple="" name="images[]"
                                                                            data-max_length="20"
                                                                            class="upload__inputfile form-control">

                                                                    </div>
                                                                    <div class="upload__img-wrap" name="images"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:30%">
                                                                Price
                                                            </td>
                                                            <td>
                                                                <input type="text" name="price"
                                                                    class="form-control @error('price') is-invalid @enderror"
                                                                    value="{{ old('price', $product->price) }}"
                                                                    required>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input id="category" class="category" name="category"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->cate_id) }}">
                                                                <input id="scategory" class="scategory" name="scategory"
                                                                    type="hidden"
                                                                    value="{{ old('category', $product->sub_id) }}">

                                                                <button type="submit"> Submit</button>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            @endif
                                            @if ($product->cate_id == 18)
                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width:30%">
                                                Select category
                                            </td>
                                            <td>
                                                <select id='sel_depart' name='sel_depart'>
                                                    <option value='0'>-- Select category--
                                                    </option>

                                                    <!-- Read Departments -->
                                                    @foreach ($categ->skip(1) as $department)
                                                        <option value='{{ $department->id }}'>
                                                            {{ $department->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="productcategory">
                                            <td>
                                                Select Product Category
                                            </td>
                                            <td>
                                                <select id='sel_emp' name='sel_emp' onchange="myFuntion()"
                                                    required>
                                                    <option value='0' selected disabled>-- Select
                                                        Product Category
                                                        --</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">
                                                Product Name*
                                            </td>
                                            <td>
                                                <input type="text" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    value="{{ old('title', $product->title) }}" required
                                                    onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                <label style="color:red;float:right;">No Special Characters</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Short Description</td>
                                            <td>
                                                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                    value="{{ old('description') }}" rows="4" style="font-size: 100%;" required>{{ $product->description }}</textarea>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Long Description</td>
                                            <td>
                                                <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                    value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                            </td>

                                        </tr>


                                        <tr>
                                            <td>Manufacturer Company Name*</td>
                                            <td><input type="text" name="manufacturer"
                                                    class="form-control @error('manufacturer') is-invalid @enderror"
                                                    value="{{ old('manufacturer') }}" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Cover Image</td>
                                            <td>
                                                <input type="file" name="image" class="form-control image">
                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Multiple Image</td>
                                            <td>
                                                <div class="upload__box">
                                                    <div class="upload__btn-box">


                                                        <input type="file" multiple="" name="images[]"
                                                            data-max_length="20"
                                                            class="upload__inputfile form-control">

                                                    </div>
                                                    <div class="upload__img-wrap" name="images"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">
                                                Basic Price
                                            </td>
                                            <td>
                                                <input type="text" name="price"
                                                    class="form-control @error('price') is-invalid @enderror"
                                                    value="{{ old('price', $product->price) }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="category" class="category" name="category"
                                                    type="hidden"
                                                    value="{{ old('category', $product->cate_id) }}">
                                                <input id="scategory" class="scategory" name="scategory"
                                                    type="hidden"
                                                    value="{{ old('category', $product->sub_id) }}">

                                                <button type="submit"> Submit</button>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        @endif

                        @if ($product->cate_id == 19)
                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width:30%">
                                                Select category
                                            </td>
                                            <td>
                                                <select id='sel_depart' name='sel_depart'>
                                                    <option value='0'>-- Select category--
                                                    </option>

                                                    <!-- Read Departments -->
                                                    @foreach ($categ->skip(1) as $department)
                                                        <option value='{{ $department->id }}'>
                                                            {{ $department->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="productcategory">
                                            <td>
                                                Select Product Category
                                            </td>
                                            <td>
                                                <select id='sel_emp' name='sel_emp' onchange="myFuntion()"
                                                    required>
                                                    <option value='0' selected disabled>-- Select
                                                        Product Category
                                                        --</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">
                                                Product Name
                                            </td>
                                            <td>
                                                <input type="text" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    value="{{ old('title', $product->title) }}" required
                                                    onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                <label style="color:red;float:right;">No Special Characters</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Short Description</td>
                                            <td>
                                                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                    value="{{ old('description') }}" rows="4" style="font-size: 100%;" required>{{ $product->description }}</textarea>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Long Description</td>
                                            <td>
                                                <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                    value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Load Bearing Capacity</td>
                                            <td><input type="text" name="capacity"
                                                    class="form-control @error('c   apacity') is-invalid @enderror"
                                                    value="{{ old('capacity', $product->capacity) }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Length (mm)</td>
                                            <td><input type="text" name="overall_length"
                                                    class="form-control @error('overall_length') is-invalid @enderror"
                                                    value="{{ old('overall_length', $product->overall_length) }}"
                                                    required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Weight (mm)</td>
                                            <td><input type="text" name="self_weight"
                                                    class="form-control @error('self_weight') is-invalid @enderror"
                                                    value="{{ old('self_weight', $product->self_weight) }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Height (mm)</td>
                                            <td><input type="text" name="overall_height"
                                                    class="form-control @error('overall_height') is-invalid @enderror"
                                                    value="{{ old('overall_height', $product->overall_height) }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Material</td>
                                            <td><input type="text" name="material"
                                                    class="form-control @error('material') is-invalid @enderror"
                                                    value="{{ old('material', $product->material) }}">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Cover Image</td>
                                            <td>
                                                <input type="file" name="image" class="form-control image">
                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Multiple Image</td>
                                            <td>
                                                <div class="upload__box">
                                                    <div class="upload__btn-box">


                                                        <input type="file" multiple="" name="images[]"
                                                            data-max_length="20"
                                                            class="upload__inputfile form-control">

                                                    </div>
                                                    <div class="upload__img-wrap" name="images"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">
                                                Basic Price
                                            </td>
                                            <td>
                                                <input type="text" name="price"
                                                    class="form-control @error('price') is-invalid @enderror"
                                                    value="{{ old('price', $product->price) }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="category" class="category" name="category"
                                                    type="hidden"
                                                    value="{{ old('category', $product->cate_id) }}">
                                                <input id="scategory" class="scategory" name="scategory"
                                                    type="hidden"
                                                    value="{{ old('category', $product->sub_id) }}">

                                                <button type="submit"> Submit</button>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        @endif
                        @if ($product->cate_id == 20)
                            <form method="post" action="{{ route('updateproduct', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width:30%">
                                                Select category
                                            </td>
                                            <td>
                                                <select id='sel_depart' name='sel_depart'>
                                                    <option value='0'>-- Select category--
                                                    </option>

                                                    <!-- Read Departments -->
                                                    @foreach ($categ->skip(1) as $department)
                                                        <option value='{{ $department->id }}'>
                                                            {{ $department->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="productcategory">
                                            <td>
                                                Select Product Category
                                            </td>
                                            <td>
                                                <select id='sel_emp' name='sel_emp' onchange="myFuntion()"
                                                    required>
                                                    <option value='0' selected disabled>-- Select
                                                        Product Category
                                                        --</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">
                                                Product Name
                                            </td>
                                            <td>
                                                <input type="text" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    value="{{ old('title', $product->title) }}" required
                                                    onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                <label style="color:red;float:right;">No Special Characters</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Short Description</td>
                                            <td>
                                                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                    value="{{ old('description') }}" rows="4" style="font-size: 100%;" required>{{ $product->description }}</textarea>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Long Description</td>
                                            <td>
                                                <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                    value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;">{{ $product->ldescription }}</textarea>
                                            </td>

                                        </tr>
                                        
                                       <tr>
                                            <td>Model</td>
                                            <td><input type="text" name="model"
                                                    class="form-control @error('model') is-invalid @enderror"
                                                    value="{{ old('model', $product->model) }}" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Cover Image</td>
                                            <td>
                                                <input type="file" name="image" class="form-control image">
                                                <div class="preview" class="pt-2" style="width:50%"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Multiple Image</td>
                                            <td>
                                                <div class="upload__box">
                                                    <div class="upload__btn-box">


                                                        <input type="file" multiple="" name="images[]"
                                                            data-max_length="20"
                                                            class="upload__inputfile form-control">

                                                    </div>
                                                    <div class="upload__img-wrap" name="images"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%">
                                                Basic Price
                                            </td>
                                            <td>
                                                <input type="text" name="price"
                                                    class="form-control @error('price') is-invalid @enderror"
                                                    value="{{ old('price', $product->price) }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="category" class="category" name="category"
                                                    type="hidden"
                                                    value="{{ old('category', $product->cate_id) }}">
                                                <input id="scategory" class="scategory" name="scategory"
                                                    type="hidden"
                                                    value="{{ old('category', $product->sub_id) }}">

                                                <button type="submit"> Submit</button>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        @endif
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal" id="myModal" aria-modal="true">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true" class="btnclose">&times;</span>
                        </button>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h4 class="card-title">User Details
                                            {{-- <small class="description">Horizontal Tabs</small> --}}
                                        </h4>
                                    </div>
                                    <div class="card-body ">
                                        <ul class="nav nav-pills nav-pills-warning" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#link1"
                                                    role="tablist">
                                                    Profile
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                                                    Vendor Product
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                                                    Options
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content tab-space">
                                            <div class="tab-pane active" id="link1">
                                                <div id="usershow">
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="link2">
                                                <div id="usershows">
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="link3">
                                                Completely synergize resource taxing relationships via premier niche
                                                markets. Professionally cultivate one-to-one customer service with
                                                robust
                                                ideas.
                                                <br>
                                                <br>Dynamically innovate resource-leveling customer service for state of
                                                the
                                                art customer service.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.inc.footer')
        </div>
        </div>

        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title"> Sidebar Filters</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger active-color">
                            <div class="badge-colors ml-auto mr-auto">
                                <span class="badge filter badge-purple" data-color="purple"></span>
                                <span class="badge filter badge-azure" data-color="azure"></span>
                                <span class="badge filter badge-green" data-color="green"></span>
                                <span class="badge filter badge-warning" data-color="orange"></span>
                                <span class="badge filter badge-danger" data-color="danger"></span>
                                <span class="badge filter badge-rose active" data-color="rose"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="header-title">Sidebar Background</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <div class="ml-auto mr-auto">
                                <span class="badge filter badge-black active" data-background-color="black"></span>
                                <span class="badge filter badge-white" data-background-color="white"></span>
                                <span class="badge filter badge-red" data-background-color="red"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger">
                            <p>Sidebar Mini</p>
                            <label class="ml-auto">
                                <div class="togglebutton switch-sidebar-mini">
                                    <label>
                                        <input type="checkbox">
                                        <span class="toggle"></span>
                                    </label>
                                </div>
                            </label>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger">
                            <p>Sidebar Images</p>
                            <label class="switch-mini ml-auto">
                                <div class="togglebutton switch-sidebar-image">
                                    <label>
                                        <input type="checkbox" checked="">
                                        <span class="toggle"></span>
                                    </label>
                                </div>
                            </label>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="header-title">Images</li>
                    <li class="active">
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="{{ url('css/asset/admin/assets/img/sidebar-1.jpg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="{{ url('css/asset/admin/assets/img/sidebar-2.jpg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="{{ url('css/asset/admin/assets/img/sidebar-3.jpg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="{{ url('css/asset/admin/assets/img/sidebar-4.jpg') }}" alt="">
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <script src="{{ url('css/asset/admin/assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ url('css/asset/admin/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ url('css/asset/admin/assets/js/core/bootstrap-material-design.min.js') }}"></script>
        <script src="{{ url('css/asset/admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/moment.min.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/sweetalert2.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/jquery.validate.min.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/bootstrap-selectpicker.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/jquery.dataTables.min.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/jasny-bootstrap.min.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/fullcalendar.min.js') }}"></script>

        <script src="..{{ url('css/asset/admin/assets/js/plugins/jquery-jvectormap.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/nouislider.min.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/core.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/arrive.min.js') }}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

        <script async defer src="{{ url('css/asset/admin/assets/js/buttons.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/chartist.min.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/plugins/bootstrap-notify.js') }}"></script>

        <script src="{{ url('css/asset/admin/assets/js/material-dashboard.min6c54.js?v=2.2.2') }}"
            type="text/javascript">
            </script>

        <script>
            $(document).ready(function () {
                $().ready(function () {
                    $sidebar = $('.sidebar');

                    $sidebar_img_container = $sidebar.find('.sidebar-background');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                            $('.fixed-plugin .dropdown').addClass('open');
                        }

                    }

                    $('.fixed-plugin a').click(function (event) {
                        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $('.fixed-plugin .active-color span').click(function () {
                        $full_page_background = $('.full-page-background');

                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-color', new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data-color', new_color);
                        }
                    });

                    $('.fixed-plugin .background-color .badge').click(function () {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('background-color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-background-color', new_color);
                        }
                    });

                    $('.fixed-plugin .img-holder').click(function () {
                        $full_page_background = $('.full-page-background');

                        $(this).parent('li').siblings().removeClass('active');
                        $(this).parent('li').addClass('active');


                        var new_image = $(this).find("img").attr('src');

                        if ($sidebar_img_container.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                            $sidebar_img_container.fadeOut('fast', function () {
                                $sidebar_img_container.css('background-image', 'url("' +
                                    new_image + '")');
                                $sidebar_img_container.fadeIn('fast');
                            });
                        }

                        if ($full_page_background.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                                'img').data('src');

                            $full_page_background.fadeOut('fast', function () {
                                $full_page_background.css('background-image', 'url("' +
                                    new_image_full_page + '")');
                                $full_page_background.fadeIn('fast');
                            });
                        }

                        if ($('.switch-sidebar-image input:checked').length == 0) {
                            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr(
                                'src');
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                                'img').data('src');

                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $full_page_background.css('background-image', 'url("' +
                                new_image_full_page + '")');
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                        }
                    });

                    $('.switch-sidebar-image input').change(function () {
                        $full_page_background = $('.full-page-background');

                        $input = $(this);

                        if ($input.is(':checked')) {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar_img_container.fadeIn('fast');
                                $sidebar.attr('data-image', '#');
                            }

                            if ($full_page_background.length != 0) {
                                $full_page_background.fadeIn('fast');
                                $full_page.attr('data-image', '#');
                            }

                            background_image = true;
                        } else {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar.removeAttr('data-image');
                                $sidebar_img_container.fadeOut('fast');
                            }

                            if ($full_page_background.length != 0) {
                                $full_page.removeAttr('data-image', '#');
                                $full_page_background.fadeOut('fast');
                            }

                            background_image = false;
                        }
                    });

                    $('.switch-sidebar-mini input').change(function () {
                        $body = $('body');

                        $input = $(this);

                        if (md.misc.sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            md.misc.sidebar_mini_active = false;

                            if ($(".sidebar").length != 0) {
                                var ps = new PerfectScrollbar('.sidebar');
                            }
                            if ($(".sidebar-wrapper").length != 0) {
                                var ps1 = new PerfectScrollbar('.sidebar-wrapper');
                            }
                            if ($(".main-panel").length != 0) {
                                var ps2 = new PerfectScrollbar('.main-panel');
                            }
                            if ($(".main").length != 0) {
                                var ps3 = new PerfectScrollbar('main');
                            }

                        } else {

                            if ($(".sidebar").length != 0) {
                                var ps = new PerfectScrollbar('.sidebar');
                                ps.destroy();
                            }
                            if ($(".sidebar-wrapper").length != 0) {
                                var ps1 = new PerfectScrollbar('.sidebar-wrapper');
                                ps1.destroy();
                            }
                            if ($(".main-panel").length != 0) {
                                var ps2 = new PerfectScrollbar('.main-panel');
                                ps2.destroy();
                            }
                            if ($(".main").length != 0) {
                                var ps3 = new PerfectScrollbar('main');
                                ps3.destroy();
                            }


                            setTimeout(function () {
                                $('body').addClass('sidebar-mini');

                                md.misc.sidebar_mini_active = true;
                            }, 300);
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function () {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function () {
                            clearInterval(simulateWindowResize);
                        }, 1000);

                    });
                });
            });
        </script>


        <script>
            $(document).ready(function () {


                $('#facebook').sharrre({
                    share: {
                        facebook: true
                    },
                    enableHover: false,
                    enableTracking: false,
                    enableCounter: false,
                    click: function (api, options) {
                        api.simulateClick();
                        api.openPopup('facebook');
                    },
                    template: '<i class="fab fa-facebook-f"></i> Facebook',
                    url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
                });

                $('#google').sharrre({
                    share: {
                        googlePlus: true
                    },
                    enableCounter: false,
                    enableHover: false,
                    enableTracking: true,
                    click: function (api, options) {
                        api.simulateClick();
                        api.openPopup('googlePlus');
                    },
                    template: '<i class="fab fa-google-plus"></i> Google',
                    url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
                });

                $('#twitter').sharrre({
                    share: {
                        twitter: true
                    },
                    enableHover: false,
                    enableTracking: false,
                    enableCounter: false,
                    buttons: {
                        twitter: {
                            via: 'CreativeTim'
                        }
                    },
                    click: function (api, options) {
                        api.simulateClick();
                        api.openPopup('twitter');
                    },
                    template: '<i class="fab fa-twitter"></i> Twitter',
                    url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
                });


                // Facebook Pixel Code Don't Delete
                ! function (f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function () {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window,
                    document, 'script', 'css/asset/admin/assets/js/fbevents.js');

                try {
                    fbq('init', '111649226022273');
                    fbq('track', "PageView");

                } catch (err) {
                    console.log('Facebook Track Error:', err);
                }

            });
        </script>
        <script>
            // Facebook Pixel Code Don't Delete
            ! function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window,
                document, 'script', 'css/asset/admin/assets/js/fbevents.js');

            try {
                fbq('init', '111649226022273');
                fbq('track', "PageView");

            } catch (err) {
                console.log('Facebook Track Error:', err);
            }
        </script>
        <noscript>
            <img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
        </noscript>
        <script>
            $(document).ready(function () {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();

                md.initVectorMap();

            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

        <script type="text/javascript">
            $('.show_confirm').click(function (event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();

                        }

                    });

            });


            $(document).ready(function () {
                $(".alert").delay(5000).slideUp(300);
            });
        </script>
        @if (Session::has('success'))
        <script type="text/javascript">
            swal({
                title: 'Success!',
                text: "{{ Session::get('success') }}",
                timer: 5000,
                type: 'success'
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        </script>
        @endif

        <script>
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                /* When click show user */
                $('body').on('click', '#show-user', function () {
                    var user_id = $(this).data('id');
                    $.ajax({
                        type: "post",
                        url: "{{ url('') }}/api/data/" + user_id,


                        success: function (response) {
                            console.log(response);
                            userdata = response;
                            $("#usershow").html("");
                            $("#usershow").append(
                                '<table class="userifs"><tr><th>Name:</th><td>' + response
                                    .name + '</td></tr>' +
                                '<tr><th>Email:</th><td>' + response.email + '</td></tr>' +
                                '<tr><th>Mobile No:</th><td>' + response.mno + '</td></tr>' +
                                '<tr><th>Alternate No.:</th><td>' + response.alternate_phone +
                                '</td></tr>' +
                                '<tr><th>Address:</th><td>' + response.address + response
                                    .address2 + '</td></tr>' +
                                '<tr><th>Landmark:</th><td>' + response.landmark +
                                '</td></tr>' +
                                '<tr><th>City:</th><td>' + response.city + '</td></tr>' +
                                '<tr><th>State:</th><td>' + response.state + '</td></tr>' +
                                '<tr><th>Pin Code:</th><td>' + response.pcode + '</td></tr>' +
                                '<tr><th>Gst:</th><td>' + response.gst + '</td></tr>' +

                                '</table>'

                            )
                        }
                    });
                });

            });
        </script>

        <script>
            $(document).ready(function () {


                $('#searchbox').keyup(function () {
                    var query = $(this).val();

                    if (query != '') {
                        var _token = $('input[name="_token"]').val();
                        var pro = $('select[name="discount"]').val();
                        $.ajax({
                            url: "{{ route('autocomplete.search') }}",
                            method: "POST",
                            data: {
                                query: query,
                                _token: _token,
                                pro: pro
                            },
                            success: function (data) {
                                $('#searchrecord').fadeIn();
                                $('#searchrecord').html(data);
                            }
                        });
                    } else {
                        $("#searchrecord").fadeOut();
                        $("#searchrecord").html("");
                    }

                });

                $(document).on('click', 'li', function () {
                    $('#search').val($(this).text());
                    $('#searchrecord').fadeOut();
                });

            });
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
                    document.getElementById(id2).style.display = 'inline';
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

        <script type='text/javascript'>
            $(document).ready(function () {

                $('.productcategory').hide();
                // Department Change
                $('#sel_depart').change(function () {
                    $('.productcategory').show();
                    var demovalue = $(this).val();
                    $('.category').val(demovalue);

                    $("div.myDiv").hide();
                    $("#show" + demovalue).show();
                    // Department id
                    var id = $(this).val();

                    // Empty the dropdown
                    $('#sel_emp').find('option').not(':first').remove();

                    // AJAX request 
                    $.ajax({
                        url: '../../getPcate/' + id,
                        type: 'get',
                        dataType: 'json',

                        success: function (response) {

                            var len = 0;
                            if (response['data'] != null) {
                                len = response['data'].length;
                            }

                            if (len > 0) {
                                // Read data and create <option >
                                for (var i = 0; i < len; i++) {

                                    var id = response['data'][i].id;
                                    var name = response['data'][i].title;

                                    var option = "<option value='" + id + "'>" + name + "</option>";

                                    $("#sel_emp").append(option);
                                }
                            }

                        }
                    });
                });

            });
        </script>



        <script>
            function imagePreview(fileInput) {
                if (fileInput.files && fileInput.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.onload = function (event) {
                        $('.preview').html('<img src="' + event.target.result + '" width="300" height="auto"/>');
                    };
                    fileReader.readAsDataURL(fileInput.files[0]);
                }
            }
            $(".image").change(function () {
                imagePreview(this);
            });
        </script>


        <script>
            $(document).ready(function () {
                ImgUpload();
            });

            function ImgUpload() {
                var imgWrap = "";
                var imgArray = [];

                $('.upload__inputfile').each(function () {
                    $(this).on('change', function (e) {
                        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                        var maxLength = $(this).attr('data-max_length');

                        var files = e.target.files;
                        var filesArr = Array.prototype.slice.call(files);
                        var iterator = 0;
                        filesArr.forEach(function (f, index) {

                            if (!f.type.match('image.*')) {
                                return;
                            }

                            if (imgArray.length > maxLength) {
                                return false
                            } else {
                                var len = 0;
                                for (var i = 0; i < imgArray.length; i++) {
                                    if (imgArray[i] !== undefined) {
                                        len++;
                                    }
                                }
                                if (len > maxLength) {
                                    return false;
                                } else {
                                    imgArray.push(f);

                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        var html =
                                            "<div class='upload__img-box'><div style='background-image: url(" +
                                            e.target.result + ")' data-number='" + $(
                                                ".upload__img-close").length + "' data-file='" + f
                                                .name +
                                            "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                        imgWrap.append(html);
                                        iterator++;
                                    }
                                    reader.readAsDataURL(f);
                                }
                            }
                        });
                    });
                });

                $('body').on('click', ".upload__img-close", function (e) {
                    var file = $(this).parent().data("file");

                    for (var i = 0; i < imgArray.length; i++) {
                        if (imgArray[i].name === file) {
                            imgArray.splice(i, 1);
                            break;
                        }
                    }
                    $(this).parent().parent().remove();
                    $('.upload__inputfile').on("change", 'upload__img-box');
                });
            }
        </script>
        <script>
            $(document).ready(function () {
                $('#sel_emp').change(function () {
                    var demovalue = $(this).val();
                    $('.scategory').val(demovalue);
                })
            })

            $("#sel_emp").attr('required', 'required');


            var input = document.getElementById("setcategory").value;
            $('#sel_depart').val(input);
        </script>

        <script defer
            src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
            integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
            data-cf-beacon='{"rayId":"7973675fab632965","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
            crossorigin="anonymous"></script>
    </body>

    <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro-bs4/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 08:17:07 GMT -->

</html>