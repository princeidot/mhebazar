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
    <link rel="canonical" href="https://www.mhebazar.in/user/sell/new" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Dashboard Sell Your Product </title>
    




<!--LISTING CONFIG-->
<style>
    .btn{
        padding:0.375rem 0.75rem;
    }
        table > thead > tr > th, table > tbody > tr > th, table > tfoot > tr > th, table > thead > tr > td, table > tbody > tr > td, table > tfoot > tr > td {
    padding: 8px 10px;
}
table > tbody > tr > th, table > tfoot > tr > th, table > tbody > tr > td, table > tfoot > tr > td {
    vertical-align: top;
}
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

    .back-btn {
        font-size: 15px;
        color: white !important;
    }

    .myDiv {
        display: none;

    }

    div.images-preview-div:first-of-type img {
        padding-left: 10px;
    }


    table.product tr th,
    table.product tr td {
        border: 1px solid black;
        text-align: center;
    }

    table.product tbody tr td img {
        width: 20%;
        height: 10%;

    }

    .upload__img-box {
        width: 200px;
        padding: 0 10px;
        margin-bottom: 12px;
    }



    .upload__img-wrap {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
    }

    .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
    }

    .title span a+a {
        margin-left: 10px;
    }

    .swal-button {
        font-size: 14px !important
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
                    <div class="title">Sell Your Product<span class="right"><a href="{{ route('sell.old') }}"
                                class="back-btn btn btn-primary">List old Product</a><a href="{{ route('account') }}"
                                class="back-btn btn btn-primary">Back to Dashboard</a></span></div>
                    <div class="row">


                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active dashbtn" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true">Add Product</button>
                                <button class="nav-link dashbtn" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">View Product</button>
                                <button class="nav-link dashbtn d-none" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">test</button>
                                <button class="nav-link dashbtn d-none" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false">test2</button>
                            </div>
                            <div class="tab-content cont" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">

                                    <div class="user-content">
                                        <p style="font-size: 15px;">Add Product

                                        </p>

                                        @if (count($errors) > 0)
                                            @foreach ($errors->all() as $error)
                                                <div class="alert alert-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif

                                        <div class="information">
                                            <div class="" id="user_info_form">
                                                1
                                            </div>
                                            <div class="" id="user_info">

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
                                                                            {{ $department->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Select Product Category*
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
                                                    </tbody>
                                                </table>
                                                <div id="show1" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Voltage (V)</td>
                                                                    <td><input type="text" name="voltage"
                                                                            class="form-control @error('voltage') is-invalid @enderror"
                                                                            value="{{ old('voltage') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity (AH)</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Weight</td>
                                                                    <td><input type="text" name="battery_weight"
                                                                            class="form-control @error('battery_weight') is-invalid @enderror"
                                                                            value="{{ old('battery_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Size (LxWxH in mm)</td>
                                                                    <td><input type="text" name="fork_dimensions"
                                                                            class="form-control @error('fork_dimensions') is-invalid @enderror"
                                                                            value="{{ old('fork_dimensions') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td>
                                                                        <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>


                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>
                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>


                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" name="category"
                                                                            class="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" name="scategory"
                                                                            class="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>

                                                <div id="show2" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operator Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Width Over Forks</td>
                                                                    <td><input type="text" name="width_over_forks"
                                                                            class="form-control @error('width_over_forks') is-invalid @enderror"
                                                                            value="{{ old('width_over_forks') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Width</td>
                                                                    <td><input type="text" name="fork_width"
                                                                            class="form-control @error('fork_width') is-invalid @enderror"
                                                                            value="{{ old('fork_width') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Length</td>
                                                                    <td><input type="text" name="fork_length"
                                                                            class="form-control @error('fork_length') is-invalid @enderror"
                                                                            value="{{ old('fork_length') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Min Height (Fork Lower)</td>
                                                                    <td><input type="text" name="min_height"
                                                                            class="form-control @error('min_height') is-invalid @enderror"
                                                                            value="{{ old('min_height') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Height</td>
                                                                    <td><input type="text" name="lift_height"
                                                                            class="form-control @error('lift_height') is-invalid @enderror"
                                                                            value="{{ old('lift_height') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max Lift Height</td>
                                                                    <td><input type="text" name="max_lift_height"
                                                                            class="form-control @error('max_lift_height') is-invalid @enderror"
                                                                            value="{{ old('max_lift_height') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Single Fork Width</td>
                                                                    <td><input type="text" name="single_fork_width"
                                                                            class="form-control @error('single_fork_width') is-invalid @enderror"
                                                                            value="{{ old('single_fork_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Type</td>
                                                                    <td><input type="text" name="wheel_type"
                                                                            class="form-control @error('wheel_type') is-invalid @enderror"
                                                                            value="{{ old('wheel_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Weight</td>
                                                                    <td><input type="text" name="service_weight"
                                                                            class="form-control @error('service_weight') is-invalid @enderror"
                                                                            value="{{ old('service_weight') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length</td>
                                                                    <td><input type="text" name="overall_length"
                                                                            class="form-control @error('overall_length') is-invalid @enderror"
                                                                            value="{{ old('overall_length') }}"></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Height</td>
                                                                    <td><input type="text" name="overall_height"
                                                                            class="form-control @error('overall_height') is-invalid @enderror"
                                                                            value="{{ old('overall_height') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Turning Radius</td>
                                                                    <td><input type="text" name="turning_radius"
                                                                            class="form-control @error('turning_radius') is-invalid @enderror"
                                                                            value="{{ old('turning_radius') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Material</td>
                                                                    <td><input type="text" name="material"
                                                                            class="form-control @error('material') is-invalid @enderror"
                                                                            value="{{ old('material') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td>
                                                                        <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>


                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>


                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" name="category"
                                                                            class="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" name="scategory"
                                                                            class="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="show3" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operator Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Width Over Forks</td>
                                                                    <td><input type="text" name="width_over_forks"
                                                                            class="form-control @error('width_over_forks') is-invalid @enderror"
                                                                            value="{{ old('width_over_forks') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mast Type</td>
                                                                    <td><input type="text" name="mast_type"
                                                                            class="form-control @error('mast_type') is-invalid @enderror"
                                                                            value="{{ old('mast_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Load Center for Rated Capacity</td>
                                                                    <td><input type="text"
                                                                            name="load_center_for_rated_capacity"
                                                                            class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                            value="{{ old('load_center_for_rated_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Base</td>
                                                                    <td><input type="text" name="wheel_base"
                                                                            class="form-control @error('wheel_base') is-invalid @enderror"
                                                                            value="{{ old('wheel_base') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Type</td>
                                                                    <td><input type="text" name="wheel_type"
                                                                            class="form-control @error('wheel_type') is-invalid @enderror"
                                                                            value="{{ old('wheel_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Number of Wheels (x=driven) Drive/Load</td>
                                                                    <td><input type="text" name="number_of_wheels"
                                                                            class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                            value="{{ old('number_of_wheels') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Height</td>
                                                                    <td><input type="text" name="lift_height"
                                                                            class="form-control @error('lift_height') is-invalid @enderror"
                                                                            value="{{ old('lift_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Extended Height</td>
                                                                    <td><input type="text"
                                                                            name="max_extended_height"
                                                                            class="form-control @error('max_extended_height') is-invalid @enderror"
                                                                            value="{{ old('max_extended_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mast Lowered Height</td>
                                                                    <td><input type="text"
                                                                            name="mast_lowered_height"
                                                                            class="form-control @error('mast_lowered_height') is-invalid @enderror"
                                                                            value="{{ old('mast_lowered_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lowered Fork Height</td>
                                                                    <td><input type="text"
                                                                            name="lowered_fork_height"
                                                                            class="form-control @error('lowered_fork_height') is-invalid @enderror"
                                                                            value="{{ old('lowered_fork_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Dimensions (LxWxH)</td>
                                                                    <td><input type="text" name="fork_dimensions"
                                                                            class="form-control @error('fork_dimensions') is-invalid @enderror"
                                                                            value="{{ old('fork_dimensions') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length</td>
                                                                    <td><input type="text" name="overall_length"
                                                                            class="form-control @error('overall_length') is-invalid @enderror"
                                                                            value="{{ old('overall_length') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Width</td>
                                                                    <td><input type="text" name="overall_width"
                                                                            class="form-control @error('overall_width') is-invalid @enderror"
                                                                            value="{{ old('overall_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Turning Radius</td>
                                                                    <td><input type="text" name="turning_radius"
                                                                            class="form-control @error('turning_radius') is-invalid @enderror"
                                                                            value="{{ old('turning_radius') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Min. Aisle Width</td>
                                                                    <td><input type="text" name="min_aisle_width"
                                                                            class="form-control @error('min_aisle_width') is-invalid @enderror"
                                                                            value="{{ old('min_aisle_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Min. Ground Clearance</td>
                                                                    <td><input type="text"
                                                                            name="min_ground_clearance"
                                                                            class="form-control @error('min_ground_clearance') is-invalid @enderror"
                                                                            value="{{ old('min_ground_clearance') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Travel Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="travel_speed"
                                                                            class="form-control @error('travel_speed') is-invalid @enderror"
                                                                            value="{{ old('travel_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lift_speed"
                                                                            class="form-control @error('lift_speed') is-invalid @enderror"
                                                                            value="{{ old('lift_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lowering Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lowering_speed"
                                                                            class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                            value="{{ old('lowering_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gradient (Laden/Unladen)</td>
                                                                    <td><input type="text" name="gradient"
                                                                            class="form-control @error('gradient') is-invalid @enderror"
                                                                            value="{{ old('gradient') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Motor</td>
                                                                    <td><input type="text" name="drive_motor"
                                                                            class="form-control @error('drive_motor') is-invalid @enderror"
                                                                            value="{{ old('drive_motor') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Motor</td>
                                                                    <td><input type="text" name="lift_motor"
                                                                            class="form-control @error('lift_motor') is-invalid @enderror"
                                                                            value="{{ old('lift_motor') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Steering Motor</td>
                                                                    <td><input type="text" name="steering_motor"
                                                                            class="form-control @error('steering_motor') is-invalid @enderror"
                                                                            value="{{ old('steering_motor') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Type</td>
                                                                    <td><input type="text" name="battery_type"
                                                                            class="form-control @error('battery_type') is-invalid @enderror"
                                                                            value="{{ old('battery_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Capacity</td>
                                                                    <td><input type="text" name="battery_capacity"
                                                                            class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                            value="{{ old('battery_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Controler</td>
                                                                    <td><input type="text" name="controler"
                                                                            class="form-control @error('controler') is-invalid @enderror"
                                                                            value="{{ old('controler') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Weight</td>
                                                                    <td><input type="text" name="battery_weight"
                                                                            class="form-control @error('battery_weight') is-invalid @enderror"
                                                                            value="{{ old('battery_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Weight (Incl. Battery)</td>
                                                                    <td><input type="text" name="service_weight"
                                                                            class="form-control @error('service_weight') is-invalid @enderror"
                                                                            value="{{ old('service_weight') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td>

                                                                        <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="show4" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operator Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Base</td>
                                                                    <td><input type="text" name="wheel_base"
                                                                            class="form-control @error('wheel_base') is-invalid @enderror"
                                                                            value="{{ old('wheel_base') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Platform Size</td>
                                                                    <td><input type="text" name="platform_size"
                                                                            class="form-control @error('platform_size') is-invalid @enderror"
                                                                            value="{{ old('platform_size') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Platform Height</td>
                                                                    <td><input type="text" name="platform_height"
                                                                            class="form-control @error('platform_height') is-invalid @enderror"
                                                                            value="{{ old('platform_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Handle Height</td>
                                                                    <td><input type="text" name="handle_height"
                                                                            class="form-control @error('handle_height') is-invalid @enderror"
                                                                            value="{{ old('handle_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length</td>
                                                                    <td><input type="text" name="overall_length"
                                                                            class="form-control @error('overall_length') is-invalid @enderror"
                                                                            value="{{ old('overall_length') }}"></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Height</td>
                                                                    <td><input type="text" name="overall_height"
                                                                            class="form-control @error('overall_height') is-invalid @enderror"
                                                                            value="{{ old('overall_height') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Width</td>
                                                                    <td><input type="text" name="overall_width"
                                                                            class="form-control @error('overall_width') is-invalid @enderror"
                                                                            value="{{ old('overall_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Type</td>
                                                                    <td><input type="text" name="wheel_type"
                                                                            class="form-control @error('wheel_type') is-invalid @enderror"
                                                                            value="{{ old('wheel_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td> <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>


                                                <div id="show5" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operator Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Base</td>
                                                                    <td><input type="text" name="wheel_base"
                                                                            class="form-control @error('wheel_base') is-invalid @enderror"
                                                                            value="{{ old('wheel_base') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Battery Weight</td>
                                                                    <td><input type="text" name="battery_weight"
                                                                            class="form-control @error('battery_weight') is-invalid @enderror"
                                                                            value="{{ old('battery_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Weight</td>
                                                                    <td><input type="text" name="service_weight"
                                                                            class="form-control @error('service_weight') is-invalid @enderror"
                                                                            value="{{ old('service_weight') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyres</td>
                                                                    <td><input type="text" name="tyres"
                                                                            class="form-control @error('tyres') is-invalid @enderror"
                                                                            value="{{ old('tyres') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Size (Front)</td>
                                                                    <td><input type="text" name="tyre_size_front"
                                                                            class="form-control @error('tyre_size_front') is-invalid @enderror"
                                                                            value="{{ old('tyre_size_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Size (Rear)</td>
                                                                    <td><input type="text" name="tyre_size_rear"
                                                                            class="form-control @error('tyre_size_rear') is-invalid @enderror"
                                                                            value="{{ old('tyre_size_rear') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Number of Wheels (x=driven) Drive/Load</td>
                                                                    <td><input type="text" name="number_of_wheels"
                                                                            class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                            value="{{ old('number_of_wheels') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Track Width, Front / Rear</td>
                                                                    <td><input type="text" name="track_width"
                                                                            class="form-control @error('track_width') is-invalid @enderror"
                                                                            value="{{ old('track_width') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length</td>
                                                                    <td><input type="text" name="overall_length"
                                                                            class="form-control @error('overall_length') is-invalid @enderror"
                                                                            value="{{ old('overall_length') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Width</td>
                                                                    <td><input type="text" name="overall_width"
                                                                            class="form-control @error('overall_width') is-invalid @enderror"
                                                                            value="{{ old('overall_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Compartment (WxL)</td>
                                                                    <td><input type="text"
                                                                            name="battery_compartment"
                                                                            class="form-control @error('battery_compartment') is-invalid @enderror"
                                                                            value="{{ old('battery_compartment') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Turning Radius</td>
                                                                    <td><input type="text" name="turning_radius"
                                                                            class="form-control @error('turning_radius') is-invalid @enderror"
                                                                            value="{{ old('turning_radius') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Platform Size</td>
                                                                    <td><input type="text" name="platform_size"
                                                                            class="form-control @error('platform_size') is-invalid @enderror"
                                                                            value="{{ old('platform_size') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Platform Height</td>
                                                                    <td><input type="text" name="platform_height"
                                                                            class="form-control @error('platform_height') is-invalid @enderror"
                                                                            value="{{ old('platform_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Towing Height</td>
                                                                    <td><input type="text" name="towing_height"
                                                                            class="form-control @error('towing_height') is-invalid @enderror"
                                                                            value="{{ old('towing_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Travel Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="travel_speed"
                                                                            class="form-control @error('travel_speed') is-invalid @enderror"
                                                                            value="{{ old('travel_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gradient (Laden/Unladen)</td>
                                                                    <td><input type="text" name="gradient"
                                                                            class="form-control @error('gradient') is-invalid @enderror"
                                                                            value="{{ old('gradient') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Brake Type</td>
                                                                    <td><input type="text"
                                                                            name="service_brake_type"
                                                                            class="form-control @error('service_brake_type') is-invalid @enderror"
                                                                            value="{{ old('service_brake_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Parking Brake Type</td>
                                                                    <td><input type="text"
                                                                            name="parking_brake_type"
                                                                            class="form-control @error('parking_brake_type') is-invalid @enderror"
                                                                            value="{{ old('parking_brake_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Motor Rating</td>
                                                                    <td><input type="text"
                                                                            name="drive_motor_rating"
                                                                            class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('drive_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive</td>
                                                                    <td><input type="text" name="drive"
                                                                            class="form-control @error('drive') is-invalid @enderror"
                                                                            value="{{ old('drive') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Type</td>
                                                                    <td><input type="text" name="battery_type"
                                                                            class="form-control @error('battery_type') is-invalid @enderror"
                                                                            value="{{ old('battery_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Capacity</td>
                                                                    <td><input type="text" name="battery_capacity"
                                                                            class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                            value="{{ old('battery_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Charger Capacity</td>
                                                                    <td><input type="text" name="charger_capacity"
                                                                            class="form-control @error('charger_capacity') is-invalid @enderror"
                                                                            value="{{ old('charger_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Control</td>
                                                                    <td><input type="text" name="drive_control"
                                                                            class="form-control @error('drive_control') is-invalid @enderror"
                                                                            value="{{ old('drive_control') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td><input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>

                                                <div id="show6" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
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
                                                                    <td><input type="text"
                                                                            name="rated_towing_ability"
                                                                            class="form-control @error('rated_towing_ability') is-invalid @enderror"
                                                                            value="{{ old('rated_towing_ability') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Max Towing Capacity</td>
                                                                    <td><input type="text"
                                                                            name="max_towing_capacity"
                                                                            class="form-control @error('max_towing_capacity') is-invalid @enderror"
                                                                            value="{{ old('max_towing_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <td>Operating Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr> --}}
                                                                <tr>
                                                                    <td>Turning Radius</td>
                                                                    <td><input type="text" name="turning_radius"
                                                                            class="form-control @error('turning_radius') is-invalid @enderror"
                                                                            value="{{ old('turning_radius') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Travel Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="travel_speed"
                                                                            class="form-control @error('travel_speed') is-invalid @enderror"
                                                                            value="{{ old('travel_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length</td>
                                                                    <td><input type="text" name="overall_length"
                                                                            class="form-control @error('overall_length') is-invalid @enderror"
                                                                            value="{{ old('overall_length') }}"></td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Height</td>
                                                                    <td><input type="text" name="overall_height"
                                                                            class="form-control @error('overall_height') is-invalid @enderror"
                                                                            value="{{ old('overall_height') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Width</td>
                                                                    <td><input type="text" name="overall_width"
                                                                            class="form-control @error('overall_width') is-invalid @enderror"
                                                                            value="{{ old('overall_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Motor Rating</td>
                                                                    <td><input type="text"
                                                                            name="drive_motor_rating"
                                                                            class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('drive_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gradient (Laden/Unladen)</td>
                                                                    <td><input type="text" name="gradient"
                                                                            class="form-control @error('gradient') is-invalid @enderror"
                                                                            value="{{ old('gradient') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Type</td>
                                                                    <td><input type="text" name="battery_type"
                                                                            class="form-control @error('battery_type') is-invalid @enderror"
                                                                            value="{{ old('battery_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Capacity</td>
                                                                    <td><input type="text" name="battery_capacity"
                                                                            class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                            value="{{ old('battery_capacity') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Battery Weight</td>
                                                                    <td><input type="text" name="battery_weight"
                                                                            class="form-control @error('battery_weight') is-invalid @enderror"
                                                                            value="{{ old('battery_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Controler</td>
                                                                    <td><input type="text" name="controler"
                                                                            class="form-control @error('controler') is-invalid @enderror"
                                                                            value="{{ old('controler') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Weight (Incl. Battery)</td>
                                                                    <td><input type="text" name="service_weight"
                                                                            class="form-control @error('service_weight') is-invalid @enderror"
                                                                            value="{{ old('service_weight') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td> <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>

                                                <div id="show7" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operator Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Static Load</td>
                                                                    <td><input type="text" name="static_load"
                                                                            class="form-control @error('static_load') is-invalid @enderror"
                                                                            value="{{ old('static_load') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dynamic Load (Dynamic load is the Static load in
                                                                        motion.)</td>
                                                                    <td><input type="text" name="dynamic_load"
                                                                            class="form-control @error('dynamic_load') is-invalid @enderror"
                                                                            value="{{ old('dynamic_load') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Working Range Above</td>
                                                                    <td><input type="text"
                                                                            name="working_range_above"
                                                                            class="form-control @error('working_range_above') is-invalid @enderror"
                                                                            value="{{ old('working_range_above') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Working Range Below</td>
                                                                    <td><input type="text"
                                                                            name="working_range_below"
                                                                            class="form-control @error('working_range_below') is-invalid @enderror"
                                                                            value="{{ old('working_range_below') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Platform Length</td>
                                                                    <td><input type="text" name="platform_length"
                                                                            class="form-control @error('platform_length') is-invalid @enderror"
                                                                            value="{{ old('platform_length') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Platform Width</td>
                                                                    <td><input type="text" name="platform_width"
                                                                            class="form-control @error('platform_width') is-invalid @enderror"
                                                                            value="{{ old('platform_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lip Length</td>
                                                                    <td><input type="text" name="lip_length"
                                                                            class="form-control @error('lip_length') is-invalid @enderror"
                                                                            value="{{ old('lip_length') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lip width</td>
                                                                    <td><input type="text" name="lip_width"
                                                                            class="form-control @error('lip_width') is-invalid @enderror"
                                                                            value="{{ old('lip_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lip Extention</td>
                                                                    <td><input type="text" name="lip_extention"
                                                                            class="form-control @error('lip_extention') is-invalid @enderror"
                                                                            value="{{ old('lip_extention') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lip Operation</td>
                                                                    <td><input type="text" name="lip_operation"
                                                                            class="form-control @error('lip_operation') is-invalid @enderror"
                                                                            value="{{ old('lip_operation') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pit Length</td>
                                                                    <td><input type="text" name="pit_length"
                                                                            class="form-control @error('pit_length') is-invalid @enderror"
                                                                            value="{{ old('pit_length') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pit Width</td>
                                                                    <td><input type="text" name="pit_width"
                                                                            class="form-control @error('pit_width') is-invalid @enderror"
                                                                            value="{{ old('pit_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pit Height</td>
                                                                    <td><input type="text" name="pit_height"
                                                                            class="form-control @error('pit_height') is-invalid @enderror"
                                                                            value="{{ old('pit_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lifting Cylinder No.</td>
                                                                    <td><input type="text"
                                                                            name="lifting_cylinder_no"
                                                                            class="form-control @error('lifting_cylinder_no') is-invalid @enderror"
                                                                            value="{{ old('lifting_cylinder_no') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Motor Rating</td>
                                                                    <td><input type="text" name="motor_rating"
                                                                            class="form-control @error('motor_rating') is-invalid @enderror"
                                                                            value="{{ old('motor_rating') }}">
                                                                    </td>
                                                                </tr>




                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td> <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </form>
                                                </div>

                                                <div id="show8" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operator Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Platform Length</td>
                                                                    <td><input type="text" name="platform_length"
                                                                            class="form-control @error('platform_length') is-invalid @enderror"
                                                                            value="{{ old('platform_length') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Platform Width</td>
                                                                    <td><input type="text" name="platform_width"
                                                                            class="form-control @error('platform_width') is-invalid @enderror"
                                                                            value="{{ old('platform_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max Lift Height</td>
                                                                    <td><input type="text" name="max_lift_height"
                                                                            class="form-control @error('max_lift_height') is-invalid @enderror"
                                                                            value="{{ old('max_lift_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Hydraulic Cylinder No.</td>
                                                                    <td><input type="text"
                                                                            name="hydraulic_cylinder_no"
                                                                            class="form-control @error('hydraulic_cylinder_no') is-invalid @enderror"
                                                                            value="{{ old('hydraulic_cylinder_no') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Floor Lock No.</td>
                                                                    <td><input type="text" name="floor_lock_no"
                                                                            class="form-control @error('floor_lock_no') is-invalid @enderror"
                                                                            value="{{ old('floor_lock_no') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Floor Lock Type</td>
                                                                    <td><input type="text" name="floor_lock_type"
                                                                            class="form-control @error('floor_lock_type') is-invalid @enderror"
                                                                            value="{{ old('floor_lock_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Number of Wheels </td>
                                                                    <td><input type="text"
                                                                            name="number_of_wheels"
                                                                            class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                            value="{{ old('number_of_wheels') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Type</td>
                                                                    <td><input type="text" name="wheel_type"
                                                                            class="form-control @error('wheel_type') is-invalid @enderror"
                                                                            value="{{ old('wheel_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Dimensions</td>
                                                                    <td><input type="text"
                                                                            name="wheel_dimensions"
                                                                            class="form-control @error('wheel_dimensions') is-invalid @enderror"
                                                                            value="{{ old('wheel_dimensions') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Platform Extention</td>
                                                                    <td><input type="text"
                                                                            name="platform_extention"
                                                                            class="form-control @error('platform_extention') is-invalid @enderror"
                                                                            value="{{ old('platform_extention') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td><input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="show9" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required> </textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operator Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Width Over Forks</td>
                                                                    <td><input type="text"
                                                                            name="width_over_forks"
                                                                            class="form-control @error('width_over_forks') is-invalid @enderror"
                                                                            value="{{ old('width_over_forks') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Load Center for Rated Capacity</td>
                                                                    <td><input type="text"
                                                                            name="load_center_for_rated_capacity"
                                                                            class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                            value="{{ old('load_center_for_rated_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Travel Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="travel_speed"
                                                                            class="form-control @error('travel_speed') is-invalid @enderror"
                                                                            value="{{ old('travel_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lift_speed"
                                                                            class="form-control @error('lift_speed') is-invalid @enderror"
                                                                            value="{{ old('lift_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lowering Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lowering_speed"
                                                                            class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                            value="{{ old('lowering_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gradient (Laden/Unladen)</td>
                                                                    <td><input type="text" name="gradient"
                                                                            class="form-control @error('gradient') is-invalid @enderror"
                                                                            value="{{ old('gradient') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Type</td>
                                                                    <td><input type="text" name="battery_type"
                                                                            class="form-control @error('battery_type') is-invalid @enderror"
                                                                            value="{{ old('battery_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Weight</td>
                                                                    <td><input type="text" name="battery_weight"
                                                                            class="form-control @error('battery_weight') is-invalid @enderror"
                                                                            value="{{ old('battery_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Capacity</td>
                                                                    <td><input type="text"
                                                                            name="battery_capacity"
                                                                            class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                            value="{{ old('battery_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Weight (Incl. Battery)</td>
                                                                    <td><input type="text" name="service_weight"
                                                                            class="form-control @error('service_weight') is-invalid @enderror"
                                                                            value="{{ old('service_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheelbase</td>
                                                                    <td><input type="text" name="wheelbase"
                                                                            class="form-control @error('wheelbase') is-invalid @enderror"
                                                                            value="{{ old('wheelbase') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Width</td>
                                                                    <td><input type="text" name="overall_width"
                                                                            class="form-control @error('overall_width') is-invalid @enderror"
                                                                            value="{{ old('overall_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length</td>
                                                                    <td><input type="text" name="overall_length"
                                                                            class="form-control @error('overall_length') is-invalid @enderror"
                                                                            value="{{ old('overall_length') }}">
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Height</td>
                                                                    <td><input type="text" name="lift_height"
                                                                            class="form-control @error('lift_height') is-invalid @enderror"
                                                                            value="{{ old('lift_height') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Fork Lowering Height</td>
                                                                    <td><input type="text"
                                                                            name="fork_lowering_height"
                                                                            class="form-control @error('fork_lowering_height') is-invalid @enderror"
                                                                            value="{{ old('fork_lowering_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Dimensions (LxWxH)</td>
                                                                    <td><input type="text" name="fork_dimensions"
                                                                            class="form-control @error('fork_dimensions') is-invalid @enderror"
                                                                            value="{{ old('fork_dimensions') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ground Clearance</td>
                                                                    <td><input type="text"
                                                                            name="ground_clearance"
                                                                            class="form-control @error('ground_clearance') is-invalid @enderror"
                                                                            value="{{ old('ground_clearance') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Turning Radius</td>
                                                                    <td><input type="text" name="turning_radius"
                                                                            class="form-control @error('turning_radius') is-invalid @enderror"
                                                                            value="{{ old('turning_radius') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type of Drive Motor</td>
                                                                    <td><input type="text"
                                                                            name="type_of_drive_motor"
                                                                            class="form-control @error('type_of_drive_motor') is-invalid @enderror"
                                                                            value="{{ old('type_of_drive_motor') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyres</td>
                                                                    <td><input type="text" name="tyres"
                                                                            class="form-control @error('tyres') is-invalid @enderror"
                                                                            value="{{ old('tyres') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Size (Drive)</td>
                                                                    <td><input type="text" name="tyre_size_drive"
                                                                            class="form-control @error('tyre_size_drive') is-invalid @enderror"
                                                                            value="{{ old('tyre_size_drive') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Size (Load)</td>
                                                                    <td><input type="text" name="tyre_size_load"
                                                                            class="form-control @error('tyre_size_load') is-invalid @enderror"
                                                                            value="{{ old('tyre_size_load') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Support Rollers</td>
                                                                    <td><input type="text" name="support_rollers"
                                                                            class="form-control @error('support_rollers') is-invalid @enderror"
                                                                            value="{{ old('support_rollers') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Number of Wheels </td>
                                                                    <td><input type="text"
                                                                            name="number_of_wheels"
                                                                            class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                            value="{{ old('number_of_wheels') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Motor Rating </td>
                                                                    <td><input type="text"
                                                                            name="lift_motor_rating"
                                                                            class="form-control @error('lift_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('lift_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Motor Rating</td>
                                                                    <td><input type="text"
                                                                            name="drive_motor_rating"
                                                                            class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('drive_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Control</td>
                                                                    <td><input type="text" name="drive_control"
                                                                            class="form-control @error('drive_control') is-invalid @enderror"
                                                                            value="{{ old('drive_control') }}">
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td> <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="show10" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required> </textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operator Type</td>
                                                                    <td><input type="text" name="operator_type"
                                                                            class="form-control @error('operator_type') is-invalid @enderror"
                                                                            value="{{ old('operator_type') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Width Over Forks</td>
                                                                    <td><input type="text"
                                                                            name="width_over_forks"
                                                                            class="form-control @error('width_over_forks') is-invalid @enderror"
                                                                            value="{{ old('width_over_forks') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Load Center for Rated Capacity</td>
                                                                    <td><input type="text"
                                                                            name="load_center_for_rated_capacity"
                                                                            class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                            value="{{ old('load_center_for_rated_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Power Mode</td>
                                                                    <td><input type="text" name="power_mode"
                                                                            class="form-control @error('power_mode') is-invalid @enderror"
                                                                            value="{{ old('power_mode') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Driving Mode</td>
                                                                    <td><input type="text" name="driving_mode"
                                                                            class="form-control @error('driving_mode') is-invalid @enderror"
                                                                            value="{{ old('driving_mode') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Front Overhang</td>
                                                                    <td><input type="text" name="front_overhang"
                                                                            class="form-control @error('front_overhang') is-invalid @enderror"
                                                                            value="{{ old('front_overhang') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheelbase</td>
                                                                    <td><input type="text" name="wheelbase"
                                                                            class="form-control @error('wheelbase') is-invalid @enderror"
                                                                            value="{{ old('wheelbase') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Weight</td>
                                                                    <td><input type="text" name="service_weight"
                                                                            class="form-control @error('service_weight') is-invalid @enderror"
                                                                            value="{{ old('service_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Axle Load (Laden-Front/Rear)</td>
                                                                    <td><input type="text"
                                                                            name="axle_load_laden_front"
                                                                            class="form-control @error('axle_load_laden_front') is-invalid @enderror"
                                                                            value="{{ old('axle_load_laden_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Axle Load (Unladen-Front/Rear)</td>
                                                                    <td><input type="text"
                                                                            name="axle_load_unladen_front"
                                                                            class="form-control @error('axle_load_unladen_front') is-invalid @enderror"
                                                                            value="{{ old('axle_load_unladen_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Type</td>
                                                                    <td><input type="text" name="tyre_type"
                                                                            class="form-control @error('tyre_type') is-invalid @enderror"
                                                                            value="{{ old('tyre_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Size (Front)</td>
                                                                    <td><input type="text" name="tyre_size_front"
                                                                            class="form-control @error('tyre_size_front') is-invalid @enderror"
                                                                            value="{{ old('tyre_size_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Size (Rear)</td>
                                                                    <td><input type="text" name="tyre_size_rear"
                                                                            class="form-control @error('tyre_size_rear') is-invalid @enderror"
                                                                            value="{{ old('tyre_size_rear') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Number of Wheels</td>
                                                                    <td><input type="text"
                                                                            name="number_of_wheels"
                                                                            class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                            value="{{ old('number_of_wheels') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tread Front</td>
                                                                    <td><input type="text" name="tread_front"
                                                                            class="form-control @error('tread_front') is-invalid @enderror"
                                                                            value="{{ old('tread_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tread Rear</td>
                                                                    <td><input type="text" name="tread_rear"
                                                                            class="form-control @error('tread_rear') is-invalid @enderror"
                                                                            value="{{ old('tread_rear') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Tilt Angle (Forward/Backward)</td>
                                                                    <td><input type="text" name="fork_tilt_angle"
                                                                            class="form-fork_tilt_angle @error('fork_tilt_angle') is-invalid @enderror"
                                                                            value="{{ old('fork_tilt_angle') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Height (Mast Lowered)</td>
                                                                    <td><input type="text" name="height"
                                                                            class="form-control @error('height') is-invalid @enderror"
                                                                            value="{{ old('height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Free Lifting Height</td>
                                                                    <td><input type="text"
                                                                            name="free_lifting_height"
                                                                            class="form-control @error('free_lifting_height') is-invalid @enderror"
                                                                            value="{{ old('free_lifting_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lifting Height</td>
                                                                    <td><input type="text" name="lifting_height"
                                                                            class="form-control @error('lifting_height') is-invalid @enderror"
                                                                            value="{{ old('lifting_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Height Extended</td>
                                                                    <td><input type="text"
                                                                            name="max_height_extended"
                                                                            class="form-control @error('max_height_extended') is-invalid @enderror"
                                                                            value="{{ old('max_height_extended') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Height of Overhead Guard</td>
                                                                    <td><input type="text"
                                                                            name="height_of_overhead_guard"
                                                                            class="form-control @error('height_of_overhead_guard') is-invalid @enderror"
                                                                            value="{{ old('height_of_overhead_guard') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Seat Height Relating to SIP (to Ground)</td>
                                                                    <td><input type="text"
                                                                            name="seat_height_relating_to_sip"
                                                                            class="form-control @error('seat_height_relating_to_sip') is-invalid @enderror"
                                                                            value="{{ old('seat_height_relating_to_sip') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length (With Fork)</td>
                                                                    <td><input type="text"
                                                                            name="overall_length_with_fork"
                                                                            class="form-control @error('overall_length_with_fork') is-invalid @enderror"
                                                                            value="{{ old('overall_length_with_fork') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length (Without Fork)</td>
                                                                    <td><input type="text"
                                                                            name="overall_length_without_fork"
                                                                            class="form-control @error('overall_length_without_fork') is-invalid @enderror"
                                                                            value="{{ old('overall_length_without_fork') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Width</td>
                                                                    <td><input type="text" name="overall_width"
                                                                            class="form-control @error('overall_width') is-invalid @enderror"
                                                                            value="{{ old('overall_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Dimension (LxWxH)</td>
                                                                    <td><input type="text" name="fork_dimension"
                                                                            class="form-control @error('fork_dimension') is-invalid @enderror"
                                                                            value="{{ old('fork_dimension') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Carriage (according to ISO2328)</td>
                                                                    <td><input type="text" name="fork_carriage"
                                                                            class="form-control @error('fork_carriage') is-invalid @enderror"
                                                                            value="{{ old('fork_carriage') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Distance Across Fork Arm (Min./Max.)</td>
                                                                    <td><input type="text"
                                                                            name="distance_across_fork_arm"
                                                                            class="form-control @error('distance_across_fork_arm') is-invalid @enderror"
                                                                            value="{{ old('distance_across_fork_arm') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Sideshifting</td>
                                                                    <td><input type="text"
                                                                            name="fork_sideshifting"
                                                                            class="form-control @error('fork_sideshifting') is-invalid @enderror"
                                                                            value="{{ old('fork_sideshifting') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Distance between Support Arm</td>
                                                                    <td><input type="text"
                                                                            name="distance_between_support_arm"
                                                                            class="form-control @error('distance_between_support_arm') is-invalid @enderror"
                                                                            value="{{ old('distance_between_support_arm') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Reach Distance</td>
                                                                    <td><input type="text" name="reach_distance"
                                                                            class="form-control @error('reach_distance') is-invalid @enderror"
                                                                            value="{{ old('reach_distance') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ground Clearance</td>
                                                                    <td><input type="text"
                                                                            name="ground_clearance"
                                                                            class="form-control @error('ground_clearance') is-invalid @enderror"
                                                                            value="{{ old('ground_clearance') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Right Angle Stacking Aisle Width for Pallet
                                                                        1000x1200mm Crossways</td>
                                                                    <td><input type="text"
                                                                            name="right_angle_stacking1000x1200mm"
                                                                            class="form-control @error('right_angle_stacking1000x1200mm') is-invalid @enderror"
                                                                            value="{{ old('right_angle_stacking1000x1200mm') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Right Angle Stacking Aisle Width for Pallet
                                                                        800x1200mm Crossways</td>
                                                                    <td><input type="text"
                                                                            name="right_angle_stacking800x1200mm"
                                                                            class="form-control @error('right_angle_stacking800x1200mm') is-invalid @enderror"
                                                                            value="{{ old('right_angle_stacking800x1200mm') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Min. Outside Turning Radius</td>
                                                                    <td><input type="text"
                                                                            name="min_outside_turning_radius"
                                                                            class="form-control @error('min_outside_turning_radius') is-invalid @enderror"
                                                                            value="{{ old('min_outside_turning_radius') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Travel Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="travel_speed"
                                                                            class="form-control @error('travel_speed') is-invalid @enderror"
                                                                            value="{{ old('travel_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lift_speed"
                                                                            class="form-control @error('lift_speed') is-invalid @enderror"
                                                                            value="{{ old('lift_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lowering Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lowering_speed"
                                                                            class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                            value="{{ old('lowering_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Reach Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="reach_speed"
                                                                            class="form-control @error('reach_speed') is-invalid @enderror"
                                                                            value="{{ old('reach_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Gradeability (Laden/Unladen)</td>
                                                                    <td><input type="text"
                                                                            name="max_gradeability"
                                                                            class="form-control @error('max_gradeability') is-invalid @enderror"
                                                                            value="{{ old('max_gradeability') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Type</td>
                                                                    <td><input type="text" name="battery_type"
                                                                            class="form-control @error('battery_type') is-invalid @enderror"
                                                                            value="{{ old('battery_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Capacity</td>
                                                                    <td><input type="text"
                                                                            name="battery_capacity"
                                                                            class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                            value="{{ old('battery_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Weight</td>
                                                                    <td><input type="text" name="battery_weight"
                                                                            class="form-control @error('battery_weight') is-invalid @enderror"
                                                                            value="{{ old('battery_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Box Dimension (LxWxH)</td>
                                                                    <td><input type="text"
                                                                            name="battery_box_dimension"
                                                                            class="form-control @error('battery_box_dimension') is-invalid @enderror"
                                                                            value="{{ old('battery_box_dimension') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Motor Rating</td>
                                                                    <td><input type="text"
                                                                            name="drive_motor_rating"
                                                                            class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('drive_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lifting Motor Rating</td>
                                                                    <td><input type="text"
                                                                            name="lifting_motor_rating"
                                                                            class="form-control @error('lifting_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('lifting_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Steering Motor Rating</td>
                                                                    <td><input type="text"
                                                                            name="steering_motor_rating"
                                                                            class="form-control @error('steering_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('steering_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Motor Control Mode</td>
                                                                    <td><input type="text"
                                                                            name="drive_motor_control_mode"
                                                                            class="form-control @error('drive_motor_control_mode') is-invalid @enderror"
                                                                            value="{{ old('drive_motor_control_mode') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lifting Motor Control Mode</td>
                                                                    <td><input type="text"
                                                                            name="lifting_motor_control_mode"
                                                                            class="form-control @error('lifting_motor_control_mode') is-invalid @enderror"
                                                                            value="{{ old('lifting_motor_control_mode') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Steering Motor Control Mode</td>
                                                                    <td><input type="text"
                                                                            name="steering_motor_control_mode"
                                                                            class="form-control @error('steering_motor_control_mode') is-invalid @enderror"
                                                                            value="{{ old('steering_motor_control_mode') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Transmission Box</td>
                                                                    <td><input type="text"
                                                                            name="transmission_box"
                                                                            class="form-control @error('transmission_box') is-invalid @enderror"
                                                                            value="{{ old('transmission_box') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Break Type</td>
                                                                    <td><input type="text"
                                                                            name="service_break_type"
                                                                            class="form-control @error('service_break_type') is-invalid @enderror"
                                                                            value="{{ old('service_break_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Parking Break Type</td>
                                                                    <td><input type="text"
                                                                            name="parking_break_type"
                                                                            class="form-control @error('parking_break_type') is-invalid @enderror"
                                                                            value="{{ old('parking_break_type') }}">
                                                                    </td>
                                                                </tr>




                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td><input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="show11" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required> </textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type of load</td>
                                                                    <td><input type="text" name="type_of_load"
                                                                            class="form-control @error('type_of_load') is-invalid @enderror"
                                                                            value="{{ old('type_of_load') }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type of Pallet</td>
                                                                    <td><input type="text" name="type_of_pallet"
                                                                            class="form-control @error('type_of_pallet') is-invalid @enderror"
                                                                            value="{{ old('type_of_pallet') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Size of Pallet</td>
                                                                    <td><input type="text" name="size_of_pallet"
                                                                            class="form-control @error('size_of_pallet') is-invalid @enderror"
                                                                            value="{{ old('size_of_pallet') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pallet Unit Load</td>
                                                                    <td><input type="text"
                                                                            name="pallet_unit_load"
                                                                            class="form-control @error('pallet_unit_load') is-invalid @enderror"
                                                                            value="{{ old('pallet_unit_load') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Floor Dimension</td>
                                                                    <td><input type="text" name="floor_dimension"
                                                                            class="form-control @error('floor_dimension') is-invalid @enderror"
                                                                            value="{{ old('floor_dimension') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Aisle Width Available</td>
                                                                    <td><input type="text"
                                                                            name="aisle_width_available"
                                                                            class="form-control @error('aisle_width_available') is-invalid @enderror"
                                                                            value="{{ old('aisle_width_available') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Warehouse Clear Height</td>
                                                                    <td><input type="text"
                                                                            name="warehouse_clear_height"
                                                                            class="form-control @error('warehouse_clear_height') is-invalid @enderror"
                                                                            value="{{ old('warehouse_clear_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Equipment to be Used (Required from Prospect)
                                                                    </td>
                                                                    <td><input type="text"
                                                                            name="equipment_to_be_used"
                                                                            class="form-control @error('equipment_to_be_used') is-invalid @enderror"
                                                                            value="{{ old('equipment_to_be_used') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Equipment Width (Required from Prospect)</td>
                                                                    <td><input type="text" name="equipment_width"
                                                                            class="form-control @error('equipment_width') is-invalid @enderror"
                                                                            value="{{ old('equipment_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Straddle Width</td>
                                                                    <td><input type="text" name="straddle_width"
                                                                            class="form-control @error('straddle_width') is-invalid @enderror"
                                                                            value="{{ old('straddle_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Floor Layout (Auto-Cad Drawing Required from
                                                                        Prospect)</td>
                                                                    <td><input type="text" name="floor_layout"
                                                                            class="form-control @error('floor_layout') is-invalid @enderror"
                                                                            value="{{ old('floor_layout') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Section Details</td>
                                                                    <td><input type="text" name="section_details"
                                                                            class="form-control @error('section_details') is-invalid @enderror"
                                                                            value="{{ old('section_details') }}">
                                                                    </td>
                                                                </tr>




                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td><input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>

                                                <div id="show12" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required> </textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Load Center FOr Retes Capacity</td>
                                                                    <td><input type="text"
                                                                            name="load_center_for_rated_capacity"
                                                                            class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                            value="{{ old('load_center_for_rated_capacity') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Power Mode</td>
                                                                    <td><input type="text" name="power_mode"
                                                                            class="form-control @error('power_mode') is-invalid @enderror"
                                                                            value="{{ old('power_mode') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Driving Mode</td>
                                                                    <td><input type="text" name="driving_mode"
                                                                            class="form-control @error('driving_mode') is-invalid @enderror"
                                                                            value="{{ old('driving_mode') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fornt Over Hang</td>
                                                                    <td><input type="text" name="front_overhang"
                                                                            class="form-control @error('front_overhang') is-invalid @enderror"
                                                                            value="{{ old('front_overhang') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Wheel Base</td>
                                                                    <td><input type="text" name="wheelbase"
                                                                            class="form-control @error('wheelbase') is-invalid @enderror"
                                                                            value="{{ old('wheelbase') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Axle Load Laden Front</td>
                                                                    <td><input type="text"
                                                                            name="axle_load_laden_front"
                                                                            class="form-control @error('axle_load_laden_front') is-invalid @enderror"
                                                                            value="{{ old('axle_load_laden_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Axle Load Unladen Front</td>
                                                                    <td><input type="text"
                                                                            name="axle_load_unladen_front"
                                                                            class="form-control @error('axle_load_unladen_front') is-invalid @enderror"
                                                                            value="{{ old('axle_load_unladen_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Type</td>
                                                                    <td><input type="text" name="tyre_type"
                                                                            class="form-control @error('tyre_type') is-invalid @enderror"
                                                                            value="{{ old('tyre_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>wheel number</td>
                                                                    <td><input type="text" name="wheel_number"
                                                                            class="form-control @error('wheel_number') is-invalid @enderror"
                                                                            value="{{ old('wheel_number') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tread Front</td>
                                                                    <td><input type="text" name="tread_front"
                                                                            class="form-control @error('tread_front') is-invalid @enderror"
                                                                            value="{{ old('tread_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tread Rear</td>
                                                                    <td><input type="text" name="tread_rear"
                                                                            class="form-control @error('tread_rear') is-invalid @enderror"
                                                                            value="{{ old('tread_rear') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mast Tilt Angle</td>
                                                                    <td><input type="text" name="mast_tilt_angle"
                                                                            class="form-control @error('mast_tilt_angle') is-invalid @enderror"
                                                                            value="{{ old('mast_tilt_angle') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>height</td>
                                                                    <td><input type="text" name="height"
                                                                            class="form-control @error('height') is-invalid @enderror"
                                                                            value="{{ old('height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Free Lifting Height</td>
                                                                    <td><input type="text"
                                                                            name="free_lifting_height"
                                                                            class="form-control @error('free_lifting_height') is-invalid @enderror"
                                                                            value="{{ old('free_lifting_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lifting Height</td>
                                                                    <td><input type="text" name="lifting_height"
                                                                            class="form-control @error('lifting_height') is-invalid @enderror"
                                                                            value="{{ old('lifting_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max Height Extended</td>
                                                                    <td><input type="text"
                                                                            name="max_height_extended"
                                                                            class="form-control @error('max_height_extended') is-invalid @enderror"
                                                                            value="{{ old('max_height_extended') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Height of Overhead Guard</td>
                                                                    <td><input type="text"
                                                                            name="height_of_overhead_guard"
                                                                            class="form-control @error('height_of_overhead_guard') is-invalid @enderror"
                                                                            value="{{ old('height_of_overhead_guard') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Seat Height Relating to SIP (to Ground)</td>
                                                                    <td><input type="text"
                                                                            name="seat_height_relating_to_sip"
                                                                            class="form-control @error('seat_height_relating_to_sip') is-invalid @enderror"
                                                                            value="{{ old('seat_height_relating_to_sip') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Towing Coupling Height</td>
                                                                    <td><input type="text"
                                                                            name="towing_coupling_height"
                                                                            class="form-control @error('towing_coupling_height') is-invalid @enderror"
                                                                            value="{{ old('towing_coupling_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length (With Fork)</td>
                                                                    <td><input type="text"
                                                                            name="overall_length_with_fork"
                                                                            class="form-control @error('overall_length_with_fork') is-invalid @enderror"
                                                                            value="{{ old('overall_length_with_fork') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length (Without Fork)</td>
                                                                    <td><input type="text"
                                                                            name="overall_length_without_fork"
                                                                            class="form-control @error('overall_length_without_fork') is-invalid @enderror"
                                                                            value="{{ old('overall_length_without_fork') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Dimension (LxWxH)</td>
                                                                    <td><input type="text" name="fork_dimension"
                                                                            class="form-control @error('fork_dimension') is-invalid @enderror"
                                                                            value="{{ old('fork_dimension') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fork Carriage (according to ISO2328)</td>
                                                                    <td><input type="text" name="fork_carriage"
                                                                            class="form-control @error('fork_carriage') is-invalid @enderror"
                                                                            value="{{ old('fork_carriage') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Distance Across Fork Arm (Min./Max.)</td>
                                                                    <td><input type="text"
                                                                            name="distance_across_fork_arm"
                                                                            class="form-control @error('distance_across_fork_arm') is-invalid @enderror"
                                                                            value="{{ old('distance_across_fork_arm') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ground Clearance (at Mast)</td>
                                                                    <td><input type="text"
                                                                            name="ground_clearance_at_the_mast"
                                                                            class="form-control @error('ground_clearance_at_the_mast') is-invalid @enderror"
                                                                            value="{{ old('ground_clearance_at_the_mast') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ground Clearance (Center of Wheelbase)</td>
                                                                    <td><input type="text"
                                                                            name="ground_clearance_center_of_wheelbase"
                                                                            class="form-control @error('ground_clearance_center_of_wheelbase') is-invalid @enderror"
                                                                            value="{{ old('ground_clearance_center_of_wheelbase') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Right Angle Stacking Aisle Width for Pallet
                                                                        1000x1200mm Crossways</td>
                                                                    <td><input type="text"
                                                                            name="right_angle_stacking1000x1200mm"
                                                                            class="form-control @error('right_angle_stacking1000x1200mm') is-invalid @enderror"
                                                                            value="{{ old('right_angle_stacking1000x1200mm') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Right Angle Stacking Aisle Width for Pallet
                                                                        800x1200mm Crossways</td>
                                                                    <td><input type="text"
                                                                            name="right_angle_stacking800x1200mm"
                                                                            class="form-control @error('right_angle_stacking800x1200mm') is-invalid @enderror"
                                                                            value="{{ old('right_angle_stacking800x1200mm') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Min. Outside Turning Radius</td>
                                                                    <td><input type="text"
                                                                            name="min_outside_turning_radius"
                                                                            class="form-control @error('min_outside_turning_radius') is-invalid @enderror"
                                                                            value="{{ old('min_outside_turning_radius') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Travel Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="travel_speed"
                                                                            class="form-control @error('travel_speed') is-invalid @enderror"
                                                                            value="{{ old('travel_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lift Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lift_speed"
                                                                            class="form-control @error('lift_speed') is-invalid @enderror"
                                                                            value="{{ old('lift_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lowering Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lowering_speed"
                                                                            class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                            value="{{ old('lowering_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Drawbar Pull (Laden)</td>
                                                                    <td><input type="text"
                                                                            name="max_drawbar_pull"
                                                                            class="form-control @error('max_drawbar_pull') is-invalid @enderror"
                                                                            value="{{ old('max_drawbar_pull') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Gradeability (Laden/Unladen)</td>
                                                                    <td><input type="text"
                                                                            name="max_gradeability"
                                                                            class="form-control @error('max_gradeability') is-invalid @enderror"
                                                                            value="{{ old('max_gradeability') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Acceleration Time (10m) (Laden/Unladen)</td>
                                                                    <td><input type="text"
                                                                            name="acceleration_time"
                                                                            class="form-control @error('acceleration_time') is-invalid @enderror"
                                                                            value="{{ old('acceleration_time') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Type</td>
                                                                    <td><input type="text" name="battery_type"
                                                                            class="form-control @error('battery_type') is-invalid @enderror"
                                                                            value="{{ old('battery_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Battery Capacity</td>
                                                                    <td><input type="text"
                                                                            name="battery_capacity"
                                                                            class="form-control @error('battery_capacity') is-invalid @enderror"
                                                                            value="{{ old('battery_capacity') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Battery Weight</td>
                                                                    <td><input type="text" name="battery_weight"
                                                                            class="form-control @error('battery_weight') is-invalid @enderror"
                                                                            value="{{ old('battery_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Motor Rating</td>
                                                                    <td><input type="text"
                                                                            name="drive_motor_rating"
                                                                            class="form-control @error('drive_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('drive_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lifting Motor Rating</td>
                                                                    <td><input type="text"
                                                                            name="lifting_motor_rating"
                                                                            class="form-control @error('lifting_motor_rating') is-invalid @enderror"
                                                                            value="{{ old('lifting_motor_rating') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Drive Motor Control Mode</td>
                                                                    <td><input type="text"
                                                                            name="drive_motor_control_mode"
                                                                            class="form-control @error('drive_motor_control_mode') is-invalid @enderror"
                                                                            value="{{ old('drive_motor_control_mode') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lifting Motor Control Mode</td>
                                                                    <td><input type="text"
                                                                            name="lifting_motor_control_mode"
                                                                            class="form-control @error('lifting_motor_control_mode') is-invalid @enderror"
                                                                            value="{{ old('lifting_motor_control_mode') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Service Break Type</td>
                                                                    <td><input type="text"
                                                                            name="service_break_type"
                                                                            class="form-control @error('service_break_type') is-invalid @enderror"
                                                                            value="{{ old('service_break_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Parking Break Type</td>
                                                                    <td><input type="text"
                                                                            name="parking_break_type"
                                                                            class="form-control @error('parking_break_type') is-invalid @enderror"
                                                                            value="{{ old('parking_break_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Operating Pressure for Attachment</td>
                                                                    <td><input type="text"
                                                                            name="operating_pressure_for_attachment"
                                                                            class="form-control @error('operating_pressure_for_attachment') is-invalid @enderror"
                                                                            value="{{ old('operating_pressure_for_attachment') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Engine Model</td>
                                                                    <td><input type="text" name="engine_model"
                                                                            class="form-control @error('engine_model') is-invalid @enderror"
                                                                            value="{{ old('engine_model') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Engine Rated Power/Rated Speed</td>
                                                                    <td><input type="text"
                                                                            name="engine_rated_power"
                                                                            class="form-control @error('engine_rated_power') is-invalid @enderror"
                                                                            value="{{ old('engine_rated_power') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Torque/Rated Speed</td>
                                                                    <td><input type="text"
                                                                            name="max_torque_rated_speed"
                                                                            class="form-control @error('max_torque_rated_speed') is-invalid @enderror"
                                                                            value="{{ old('max_torque_rated_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fuel Consumption</td>
                                                                    <td><input type="text"
                                                                            name="fuel_consumption"
                                                                            class="form-control @error('fuel_consumption') is-invalid @enderror"
                                                                            value="{{ old('fuel_consumption') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gearbox</td>
                                                                    <td><input type="text" name="gearbox"
                                                                            class="form-control @error('gearbox') is-invalid @enderror"
                                                                            value="{{ old('gearbox') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td><input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="show13" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required> </textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Capacity*</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Load Center for Rated Capacity</td>
                                                                    <td><input type="text"
                                                                            name="load_center_for_rated_capacity"
                                                                            class="form-control @error('load_center_for_rated_capacity') is-invalid @enderror"
                                                                            value="{{ old('load_center_for_rated_capacity') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Handling Layers</td>
                                                                    <td><input type="text"
                                                                            name="max_handling_layers"
                                                                            class="form-control @error('max_handling_layers') is-invalid @enderror"
                                                                            value="{{ old('max_handling_layers') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Length of Container Lifted</td>
                                                                    <td><input type="text"
                                                                            name="length_of_container_lifted"
                                                                            class="form-control @error('length_of_container_lifted') is-invalid @enderror"
                                                                            value="{{ old('length_of_container_lifted') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Rotary Lock Height</td>
                                                                    <td><input type="text"
                                                                            name="max_rotary_lock_height"
                                                                            class="form-control @error('max_rotary_lock_height') is-invalid @enderror"
                                                                            value="{{ old('max_rotary_lock_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Min. Rotary Lock Height</td>
                                                                    <td><input type="text"
                                                                            name="min_rotary_lock_height"
                                                                            class="form-control @error('min_rotary_lock_height') is-invalid @enderror"
                                                                            value="{{ old('min_rotary_lock_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lifting Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lifting_speed"
                                                                            class="form-control @error('lifting_speed') is-invalid @enderror"
                                                                            value="{{ old('lifting_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lowering Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="lowering_speed"
                                                                            class="form-control @error('lowering_speed') is-invalid @enderror"
                                                                            value="{{ old('lowering_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mast Tilt (Forward/Backward)</td>
                                                                    <td><input type="text" name="mast_tilt"
                                                                            class="form-control @error('mast_tilt') is-invalid @enderror"
                                                                            value="{{ old('mast_tilt') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Travel Speed (Laden/Unladen)</td>
                                                                    <td><input type="text" name="travel_speed"
                                                                            class="form-control @error('travel_speed') is-invalid @enderror"
                                                                            value="{{ old('travel_speed') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Min. Turning Radius</td>
                                                                    <td><input type="text"
                                                                            name="min_turning_radius"
                                                                            class="form-control @error('min_turning_radius') is-invalid @enderror"
                                                                            value="{{ old('min_turning_radius') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Max. Gradeability (Laden/Unladen)</td>
                                                                    <td><input type="text"
                                                                            name="max_gradeability"
                                                                            class="form-control @error('max_gradeability') is-invalid @enderror"
                                                                            value="{{ old('max_gradeability') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Length</td>
                                                                    <td><input type="text" name="overall_length"
                                                                            class="form-control @error('overall_length') is-invalid @enderror"
                                                                            value="{{ old('overall_length') }}">
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Width</td>
                                                                    <td><input type="text" name="overall_width"
                                                                            class="form-control @error('overall_width') is-invalid @enderror"
                                                                            value="{{ old('overall_width') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Overall Height (Mast)</td>
                                                                    <td><input type="text" name="overall_height"
                                                                            class="form-control @error('overall_height') is-invalid @enderror"
                                                                            value="{{ old('overall_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Base</td>
                                                                    <td><input type="text" name="wheelbase"
                                                                            class="form-control @error('wheelbase') is-invalid @enderror"
                                                                            value="{{ old('wheelbase') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tread (Forward/Backward)</td>
                                                                    <td><input type="text" name="tread"
                                                                            class="form-control @error('tread') is-invalid @enderror"
                                                                            value="{{ old('tread') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Min. Under Clearance</td>
                                                                    <td><input type="text"
                                                                            name="min_under_clearance"
                                                                            class="form-control @error('min_under_clearance') is-invalid @enderror"
                                                                            value="{{ old('min_under_clearance') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lateral Displacement of Spreader</td>
                                                                    <td><input type="text"
                                                                            name="lateral_displacement_of_spreader"
                                                                            class="form-control @error('lateral_displacement_of_spreader') is-invalid @enderror"
                                                                            value="{{ old('lateral_displacement_of_spreader') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Engine Manufacturer</td>
                                                                    <td><input type="text"
                                                                            name="engine_manufacturer"
                                                                            class="form-control @error('engine_manufacturer') is-invalid @enderror"
                                                                            value="{{ old('engine_manufacturer') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Engine Model</td>
                                                                    <td><input type="text" name="engine_model"
                                                                            class="form-control @error('engine_model') is-invalid @enderror"
                                                                            value="{{ old('engine_model') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Wheel Number (Front/Rear)</td>
                                                                    <td><input type="text"
                                                                            name="number_of_wheels"
                                                                            class="form-control @error('number_of_wheels') is-invalid @enderror"
                                                                            value="{{ old('number_of_wheels') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Engine Rated Power/Rated Speed</td>
                                                                    <td><input type="text"
                                                                            name="engine_rated_power"
                                                                            class="form-control @error('engine_rated_power') is-invalid @enderror"
                                                                            value="{{ old('engine_rated_power') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max. Torque/Rated Speed</td>
                                                                    <td><input type="text"
                                                                            name="max_torque_rated_speed"
                                                                            class="form-control @error('max_torque_rated_speed') is-invalid @enderror"
                                                                            value="{{ old('max_torque_rated_speed') }}">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Fuel Consumption</td>
                                                                    <td><input type="text"
                                                                            name="fuel_consumption"
                                                                            class="form-control @error('fuel_consumption') is-invalid @enderror"
                                                                            value="{{ old('fuel_consumption') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gearbox</td>
                                                                    <td><input type="text" name="gearbox"
                                                                            class="form-control @error('gearbox') is-invalid @enderror"
                                                                            value="{{ old('gearbox') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Type</td>
                                                                    <td><input type="text" name="tyre_type"
                                                                            class="form-control @error('tyre_type') is-invalid @enderror"
                                                                            value="{{ old('tyre_type') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Size Front</td>
                                                                    <td><input type="text" name="tyre_size_front"
                                                                            class="form-control @error('tyre_size_front') is-invalid @enderror"
                                                                            value="{{ old('tyre_size_front') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tyre Size Rear</td>
                                                                    <td><input type="text" name="tyre_size_rear"
                                                                            class="form-control @error('tyre_size_rear') is-invalid @enderror"
                                                                            value="{{ old('tyre_size_rear') }}">
                                                                    </td>
                                                                </tr>





                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td> <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="show18" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required> </textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Manufacturer Company Name*</td>
                                                                    <td><input type="text" name="manufacturer"
                                                                            class="form-control @error('manufacturer') is-invalid @enderror"
                                                                            value="{{ old('manufacturer') }}"
                                                                            required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td> <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>
                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">
                                                                            <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="show19" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required> </textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Load Bearing Capacity</td>
                                                                    <td><input type="text" name="capacity"
                                                                            class="form-control @error('capacity') is-invalid @enderror"
                                                                            value="{{ old('capacity') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Length (mm)</td>
                                                                    <td><input type="text" name="overall_length"
                                                                            class="form-control @error('overall_length') is-invalid @enderror"
                                                                            value="{{ old('overall_length') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Weight (mm)</td>
                                                                    <td><input type="text" name="self_weight"
                                                                            class="form-control @error('self_weight') is-invalid @enderror"
                                                                            value="{{ old('self_weight') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Height (mm) </td>
                                                                    <td><input type="text" name="overall_height"
                                                                            class="form-control @error('overall_height') is-invalid @enderror"
                                                                            value="{{ old('overall_height') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Material </td>
                                                                    <td><input type="text" name="material"
                                                                            class="form-control @error('material') is-invalid @enderror"
                                                                            value="{{ old('material') }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td> <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required required
                                                                            placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                        <input id="scategory" class="scategory"
                                                                            name="scategory" type="hidden"
                                                                            value="">

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                 <div id="show20" class="myDiv">
                                                    <form method="post" action="{{ route('addproduct') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Product Name*
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="title"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            value="{{ old('title') }}" required
                                                                            onkeypress="return((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));">
                                                                        <label style="color:red;float:right;">No
                                                                            Special Characters</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Short Description*</td>
                                                                    <td>
                                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                                                            value="{{ old('description') }}" rows="4" style="font-size: 100%;" required
                                                                            placeholder="Minimum 100 words"></textarea>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Long Description*</td>
                                                                    <td>
                                                                        <textarea name="ldescription" class="form-control @error('ldescription') is-invalid @enderror"
                                                                            value="{{ old('ldescription') }}" rows="4" style="font-size: 100%;" required> </textarea>
                                                                    </td>

                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>Model*</td>
                                                                    <td><input type="text" name="model"
                                                                            class="form-control @error('model') is-invalid @enderror"
                                                                            value="{{ old('model') }}" required>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cover Image*</td>
                                                                    <td> <input type="file" name="image"
                                                                            class="form-control image" required
                                                                            id="image">
                                                                        <label for="image">(Image dimensions
                                                                            1080px*1080px)</label>
                                                                        <div class="preview" class="pt-2"
                                                                            style="width:50%"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Multiple Image</td>
                                                                    <td>

                                                                        <div class="upload__box">
                                                                            <div class="upload__btn-box">


                                                                                <input type="file" multiple=""
                                                                                    name="images[]"
                                                                                    data-max_length="20"
                                                                                    class="upload__inputfile form-control"
                                                                                    id="images">
                                                                                <label for="images">(All Images
                                                                                    dimensions 1080px*1080px)</label>

                                                                            </div>
                                                                            <div class="upload__img-wrap"
                                                                                name="images"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:30%">
                                                                        Basic Price*
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" name="price"
                                                                            class="form-control @error('price') is-invalid @enderror"
                                                                            value="" required placeholder="Only Numeric values">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="category" class="category"
                                                                            name="category" type="hidden"
                                                                            value="">
                                                                       

                                                                        <button type="submit"> Submit</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="user-content">
                                        <div class="row">
                                            <table class="product" id="empTable">
                                                <tbody>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Image</th>
                                                        <th>Approve</th>
                                                        <th>Remark</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    @foreach ($product as $prod)
                                                        <tr>
                                                            <td> {{ $loop->iteration }}</td>
                                                            <td>{{ $prod->title }}</td>
                                                            <td>{{ $prod->name }}</td>
                                                            <td style="width:20%"><img
                                                                    src="{{ url('css/asset/image/' . $prod->img1) }}">
                                                            </td>
                                                            <td>
                                                                @if ($prod->apporv == 2)
                                                                    Not Approve by MHE Bazar
                                                                @else
                                                                    Approve
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $prod->remark }}
                                                            </td>
                                                            <td>
                                                                <ul class="list-inline m-0">

                                                                    <li class="list-inline-item">
                                                                        <button
                                                                            class="btn btn-sm rounded-0"
                                                                            type="button" title="Edit"><a
                                                                                href="{{ route('editproduct', $prod->id) }}"><i
                                                                                    class="fi-rr-edit-alt"></i></a></button>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <form
                                                                            action="{{ route('product.delete', $prod->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <input name="_method" type="hidden"
                                                                                value="DELETE">
                                                                            <button type="submit"
                                                                                class="btn btn-delete deleteUser btn-sm rounded-0 "
                                                                                type="button" title="Delete"></button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    test
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <div class="user-content">
                                        <p style="font-size: 15px;">Address<span class="right">
                                                <input type=button name=type id='bt1' value='Edit'
                                                    onclick="setVisibilitys('user_info_forms','user_infos');";></p>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        @include('layouts.frontened.abovefooter')
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('#empTable').on('click', '.deleteUser', function() {
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
        // Delete record
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
        $(document).ready(function() {


            // Department Change
            $('#sel_depart').change(function() {
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

                    success: function(response) {

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
                fileReader.onload = function(event) {
                    $('.preview').html('<img src="' + event.target.result + '" width="300" height="auto"/>');
                };
                fileReader.readAsDataURL(fileInput.files[0]);
            }
        }
        $(".image").change(function() {
            imagePreview(this);
        });
    </script>
    <script>
        $(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function() {
                $(this).on('change', function(e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {

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
                                reader.onload = function(e) {
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

            $('body').on('click', ".upload__img-close", function(e) {
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
        $(document).ready(function() {
            $('#sel_emp').change(function() {
                var demovalue = $(this).val();
                $('.scategory').val(demovalue);
            })
        })

        $("#sel_emp").attr('required', 'required');
    </script>
</body>


</html>
