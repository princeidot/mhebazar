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


<meta name="robots" content="noindex" />

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{ url('css/asset/admin/assets/css/font-awesome.min.css') }}">

    <link href="{{ url('css/asset/admin/assets/css/material-dashboard.min6c54.css?v=2.2.2') }}" rel="stylesheet" />

    <link href="{{ url('css/asset/admin/assets/demo/demo.css') }}" rel="stylesheet" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <style>
        .card.bg-rose,
        .card.card-chart .card-header-rose .card-icon,
        .card .card-header-rose .card-text,
        .card .card-header-rose:not(.card-header-icon):not(.card-header-text),
        .card.card-rotate.bg-rose .back,
        .card.card-rotate.bg-rose .front {

            background: linear-gradient(337deg, #ffffff, #ffffff) !important;
        }

        .card:hover [data-header-animation=true] {
            transform: translate3d(0, 0px, 0) !important;
        }

        #user_info_form,#user_info_form1,#user_info_form2,#user_info_form3 {
            display: none
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
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
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
                <div class="content">
                    <div class="container-fluid">
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons"></i>
                                        </div>
                                        <h4 class="card-title">Global Sales by Top Locations</h4>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="table-responsive table-sales">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="{{ url('css/asset/admin/assets/img/flags/US.png')}}"> <div>
                                                                </td>
                                                                <td>USA</td>
                                                                <td class="text-right">
                                                                    2.920
                                                                </td>
                                                                <td class="text-right">
                                                                    53.23%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="{{ url('css/asset/admin/assets/img/flags/DE.png')}}"> <div>
                                                                </td>
                                                                <td>Germany</td>
                                                                <td class="text-right">
                                                                    1.300
                                                                </td>
                                                                <td class="text-right">
                                                                    20.43%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="{{ url('css/asset/admin/assets/img/flags/AU.png')}}"><div>
                                                                </td>
                                                                <td>Australia</td>
                                                                <td class="text-right">
                                                                    760
                                                                </td>
                                                                <td class="text-right">
                                                                    10.35%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="{{ url('css/asset/admin/assets/img/flags/GB.png')}}"> <div>
                                                                </td>
                                                                <td>United Kingdom</td>
                                                                <td class="text-right">
                                                                    690
                                                                </td>
                                                                <td class="text-right">
                                                                    7.87%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="{{ url('css/asset/admin/assets/img/flags/RO.png')}}"> <div>
                                                                </td>
                                                                <td>Romania</td>
                                                                <td class="text-right">
                                                                    600
                                                                </td>
                                                                <td class="text-right">
                                                                    5.94%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="flag">
                                                                        <img src="{{ url('css/asset/admin/assets/img/flags/BR.png')}}"> <div>
                                                                </td>
                                                                <td>Brasil</td>
                                                                <td class="text-right">
                                                                    550
                                                                </td>
                                                                <td class="text-right">
                                                                    4.34%
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ml-auto mr-auto">
                                                <div id="worldMap" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">weekend</i>
                                        </div>
                                        <p class="card-category">Product Quote</p>
                                        <h3 class="card-title">{{ $product }}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">visibility</i>
                                            <a href="{{ route('dashboard.pqf') }}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">equalizer</i>
                                        </div>
                                        <p class="card-category">Rent & Buy Form</p>
                                        <h3 class="card-title">{{ $rentandbuy }}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">visibility</i>
                                            <a href="{{ route('dashboard.rbf') }}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">store</i>
                                        </div>
                                        <p class="card-category">Rental Form</p>
                                        <h3 class="card-title">{{ $rentalrequest }}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">visibility</i>
                                            <a href="{{ route('dashboard.rentf') }}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-info card-header-icon">
                                        <div class="card-icon">
                                            <i class="fa fa-file-text"></i>
                                        </div>
                                        <p class="card-category">Contact Form</p>
                                        <h3 class="card-title">{{ $contact }}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">visibility</i>
                                            <a href="{{ route('dashboard.cf') }}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-chart">

                                    <div class="card-header card-header-rose" data-header-animation="true">
                                        <span class="right">
                                            <input type=button class="btn btn-fill btn-rose" name=type id='bt3' value='Monthly Graph'
                                                onclick="setVisibility('user_info_form','user_info');";>
                                        </span>

                                        <div id="user_info_form">
                                            <div class="">
                                                {!! $chartqm->container() !!}
                                                {!! $chartqm->script() !!}
                                            </div>
                                        </div>
                                        <div id="user_info">
                                            {!! $chart->container() !!}
                                            {!! $chart->script() !!}
                                        </div>
                                    </div>


                                    <div class="card-body">

                                        <h4 class="card-title">Product Quote Form Data</h4>
                                        <p class="card-category">In Graph</p>
                                    </div>
                                    <div class="card-footer">
                                        {{-- <div class="stats">
                                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header card-header-rose" data-header-animation="true">
                                        <span class="right">
                                            <input type=button class="btn btn-fill btn-rose" name=type id='bt1' value='Monthly Graph'
                                                onclick="setVisibility('user_info_form1','user_info1');";>
                                        </span>
                                       
                                            <div id="user_info_form1">
                                            <div class="">
                                                {!! $chartqm1->container() !!}
                                                {!! $chartqm1->script() !!}
                                            </div>
                                        </div>
                                        <div id="user_info1">
                                            {!! $chart1->container() !!}
                                            {!! $chart1->script() !!}
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <h4 class="card-title">Rent And Buy Form</h4>
                                        <p class="card-category">In Graph</p>
                                    </div>
                                    <div class="card-footer">
                                        {{-- <div class="stats">
                                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header card-header-rose" data-header-animation="true">
                                       <input type=button class="btn btn-fill btn-rose" name=type id='bt2' value='Monthly Graph'
                                                onclick="setVisibility('user_info_form2','user_info2');";>
                                        


                                          <div id="user_info_form2">
                                            <div class="">
                                                {!! $chartqm2->container() !!}
                                                {!! $chartqm2->script() !!}
                                            </div>
                                        </div>
                                        <div id="user_info2">
                                            {!! $chart2->container() !!}
                                            {!! $chart2->script() !!}
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <h4 class="card-title">Rental Form</h4>
                                        <p class="card-category">In Graph</p>
                                    </div>
                                    <div class="card-footer">
                                        {{-- <div class="stats">
                                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-chart">
                                    <div class="card-header card-header-rose" data-header-animation="true">
                                         <input type=button class="btn btn-fill btn-rose" name=type id='bt4' value='Monthly Graph'
                                                onclick="setVisibility('user_info_form3','user_info3');";>
                                      

                                        
                                          <div id="user_info_form3">
                                            <div class="">
                                                {!! $chartqm3->container() !!}
                                                {!! $chartqm3->script() !!}
                                            </div>
                                        </div>
                                        <div id="user_info3">
                                            {!! $chart3->container() !!}
                                            {!! $chart3->script() !!}
                                        </div>



                                    </div>
                                    <div class="card-body">

                                        <h4 class="card-title">Contact Form</h4>
                                        <p class="card-category">In Graph</p>
                                    </div>
                                    <div class="card-footer">
                                        {{-- <div class="stats">
                                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <h3>Manage Listings</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-product">
                                    <div class="card-header card-header-image" data-header-animation="true">
                                        <a href="#pablo">
                                            <img class="img"
                                                src="{{ url('css/asset/admin/assets/img/card-2.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions text-center">
                                            <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn btn-default btn-link" rel="tooltip"
                                                data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-link" rel="tooltip"
                                                data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-link" rel="tooltip"
                                                data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">
                                            <a href="#pablo">Cozy 5 Stars Apartment</a>
                                        </h4>
                                        <div class="card-description">
                                            The place is close to Barceloneta Beach and bus stop just 2 min by walk and
                                            near to "Naviglio" where you can enjoy the main night life in Barcelona.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="price">
                                            <h4>$899/night</h4>
                                        </div>
                                        <div class="stats">
                                            <p class="card-category"><i class="material-icons">place</i> Barcelona,
                                                Spain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-product">
                                    <div class="card-header card-header-image" data-header-animation="true">
                                        <a href="#pablo">
                                            <img class="img"
                                                src="{{ url('css/asset/admin/assets/img/card-3.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions text-center">
                                            <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn btn-default btn-link" rel="tooltip"
                                                data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-link" rel="tooltip"
                                                data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-link" rel="tooltip"
                                                data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">
                                            <a href="#pablo">Office Studio</a>
                                        </h4>
                                        <div class="card-description">
                                            The place is close to Metro Station and bus stop just 2 min by walk and near
                                            to "Naviglio" where you can enjoy the night life in London, UK.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="price">
                                            <h4>$1.119/night</h4>
                                        </div>
                                        <div class="stats">
                                            <p class="card-category"><i class="material-icons">place</i> London, UK
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-product">
                                    <div class="card-header card-header-image" data-header-animation="true">
                                        <a href="#pablo">
                                            <img class="img"
                                                src="{{ url('css/asset/admin/assets/img/card-1.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-actions text-center">
                                            <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <button type="button" class="btn btn-default btn-link" rel="tooltip"
                                                data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-link" rel="tooltip"
                                                data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-link" rel="tooltip"
                                                data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </div>
                                        <h4 class="card-title">
                                            <a href="#pablo">Beautiful Castle</a>
                                        </h4>
                                        <div class="card-description">
                                            The place is close to Metro Station and bus stop just 2 min by walk and near
                                            to "Naviglio" where you can enjoy the main night life in Milan.
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="price">
                                            <h4>$459/night</h4>
                                        </div>
                                        <div class="stats">
                                            <p class="card-category"><i class="material-icons">place</i> Milan, Italy
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                {{-- <li class="button-container">
                    <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank"
                        class="btn btn-rose btn-block btn-fill">Buy Now</a>
                    <a href="https://demos.creative-tim.com/material-dashboard-pro/docs/2.1/getting-started/introduction.html"
                        target="_blank" class="btn btn-default btn-block">
                        Documentation
                    </a>
                    <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank"
                        class="btn btn-info btn-block">
                        Get Free Demo!
                    </a>
                </li>
                <li class="button-container github-star">
                    <a class="github-button" href="https://github.com/creativetimofficial/ct-material-dashboard-pro"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                    <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot;
                        45</button>
                    <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i>
                        &middot; 50</button>
                    <br>
                    <br>
                </li> --}}
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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

    <script src="{{ url('css/asset/admin/assets/js/material-dashboard.min6c54.js?v=2.2.2') }}" type="text/javascript">
    </script>

    <script language="JavaScript">
        function setVisibility(id1, id2) {
            if (document.getElementById('bt3').value == 'Monthly Graph' && document.getElementById('bt2').value == 'Monthly Graph') {
                document.getElementById('bt3').value = 'Back';
                 document.getElementById('bt2').value = 'Back';
                document.getElementById(id1).style.display = 'inline';
                document.getElementById(id2).style.display = 'none';
            } else {
                document.getElementById('bt3').value = 'Monthly Graph';
                document.getElementById('bt2').value = 'Monthly Graph';
                document.getElementById(id1).style.display = 'none';
                document.getElementById(id2).style.display = 'inline';
            }
            
        }


         function setVisibility(id1, id2) { 
            if (document.getElementById('bt1').value == 'Monthly Graph' && document.getElementById('bt4').value == 'Monthly Graph') {
                document.getElementById('bt1').value = 'Back';
                document.getElementById('bt4').value = 'Back';
                document.getElementById(id1).style.display = 'inline';
                document.getElementById(id2).style.display = 'none';
            } else {
                document.getElementById('bt1').value = 'Monthly Graph';
                document.getElementById('bt4').value = 'Monthly Graph';
                document.getElementById(id1).style.display = 'none';
                document.getElementById(id2).style.display = 'inline';
            }
        }

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
    @if (Session::has('warning'))
        <script type="text/javascript">
            swal({
                title: "Error!",
                text: "You Don't have acess this!",
                type: "error",
                confirmButtonText: "Cool"
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $().ready(function() {
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

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
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

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' +
                                new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $full_page_background.fadeOut('fast', function() {
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

                $('.switch-sidebar-image input').change(function() {
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

                $('.switch-sidebar-mini input').change(function() {
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


                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {


            $('#facebook').sharrre({
                share: {
                    facebook: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                click: function(api, options) {
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
                click: function(api, options) {
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
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('twitter');
                },
                template: '<i class="fab fa-twitter"></i> Twitter',
                url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
            });


            // Facebook Pixel Code Don't Delete
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
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
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
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
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

            md.initVectorMap();

        });
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7973675fab632965","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro-bs4/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 08:17:07 GMT -->

</html>
