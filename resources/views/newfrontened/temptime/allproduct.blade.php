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
    @php
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    @endphp
    @if (strpos($actual_link, '=') !== false)
        <meta name="robots" content="noindex">
    @else
        <link rel="canonical" href="https://www.mhebazar.in/allproduct" />
    @endif
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>All Product</title>

    <style>
        .list-nav-arrow li a {
            background: none;
            padding: 0px;
            font-size: 15px;
            width: 223px;
        }

        .list-nav-arrow li a::after {
            content: "";
            width: 100%;
            height: 1px;
            background-color: #DDE4F0;
            left: 0;
            position: relative;
            display: block;
            top: 10px;

        }

        .sidebar-border .sidebar-content {
            padding: 15px;
        }

        .hide {
            display: none;
        }
    </style>
</head>

<body>



    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')



    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ url('') }}">Home</a></li>
                        <li><a class="font-xs color-gray-500" href="">All Product</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="banner-ads-top mb-30"><a><img
                                    src="{{ url('css/newassets/imgs/page/shop/banner.png') }}" alt="Ecom"></a></div>
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a
                                        class="btn btn-filter font-sm color-brand-3 font-medium"
                                        href="#ModalFiltersForm" data-bs-toggle="modal">All Fillters</a></div>
                                <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Showing
                                        1&ndash;{{ $cateproduct->count() }} results</span>

                                    <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Sort
                                            by:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <form method="GET">

                                                <select name="sort"
                                                    class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                    onchange="this.form.submit()">


                                                    <option value="desc"
                                                        @if (request()->sort == 'desc') selected @endif>Latest
                                                        products</option>
                                                    <option value="asc"
                                                        @if (request()->sort == 'asc') selected @endif>Oldest
                                                        products</option>

                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="d-inline-block">
                                        <a class="view-type-grid mr-5 active" title="Grid View" id="gridview"></a>
                                        <a class="view-type-list" title="list View" id="listview"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20" id="grid-view">
                            @foreach ($cateproduct as $cate)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card-grid-style-3">
                                        <div class="card-grid-inner">
                                            @php
                                              
                                                    if (!$cate->subcategory == null) {
                                                    $urlcategory = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->subcategory->title)));
                                                } else {
                                                    $urlcategory = strtolower(str_replace(' ', '-', $categoryname->name));
                                                }
                                                

                                                if( $cate->vendor == null){
                                                    $vname='mhe-bazar';
                                                }else {
                                                    $vname=strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '',$cate->vendor->name)));
                                                }

                                                if(!$cate->capacity == null){
                                               $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($cate->title)))) . '-' . strtolower(str_replace(' ', '-',rtrim($cate->capacity))).'-' .strtolower(str_replace(' ', '-',rtrim($cate->model))) . '-' . $cate->id;
                                                }
                                                else{
                                            $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($cate->title)))) . '-' . strtolower(str_replace(' ', '-', rtrim($cate->model))) . '-' .$cate->id;
                                               }
                                            @endphp
                                            <div class="image-box">
                                                {{-- <span class="label bg-brand-2">-17%</span> --}}

                                                <a
                                                    href="{{ route('allproduct',['slug'=>$urlcategory, 'category'=>$urltitle]); }}">
                                                    <img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                        alt="{{ $cate->img1 }}"></a>
                                            </div>
                                            <div class="info-right">
                                                <a class="font-xs color-gray-500">{{ $cate->category->name }}</a><br>
                                                <a class="color-brand-3 font-sm-bold"
                                                    href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">{{ $cate->title }}</a>
                                                  @if (!$cate->price == null)
                                                    <div class="price-info">
                                                        <strong class="font-lg-bold color-brand-3 price-main">Rs.
                                                            {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $cate->price) }}</strong>

                                                    </div>
                                                @else
                                                    <div class="price-info">
                                                        <strong class="font-lg-bold color-brand-3 price-main">Rs. <span
                                                                id="blurtext">********</span> </strong>

                                                    </div>
                                                @endif

                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                        href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">View
                                                        Details</a></div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="row mt-20 display-list hide" id="list-view">
                            
                            @foreach ($cateproduct as $cate)
                                @php
                                    if ($cate->cid == 1) {
                                        $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->title))) . '/' . $cate->pid;
                                    } else {
                                        $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->title)));
                                    }

                                @endphp
                                <div class="col-lg-12">
                                    <div class="card-grid-style-3">
                                        <div class="card-grid-inner">

                                            <div class="image-box">

                                                <a
                                                    href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                    <img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                        alt="{{ $cate->img1 }}"></a>
                                            </div>
                                            <div class="info-right"><span
                                                    class="font-xs color-gray-500">{{ $cate->category->name }}</span><br><a
                                                    href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                    <h4 class="color-brand-3">{{ $cate->title }}</h4>
                                                </a>
                                                @if (!$cate->price == null)
                                                    <div class="price-info">
                                                        <strong class="font-lg-bold color-brand-3 price-main">Rs.
                                                            {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $cate->price) }}</strong>

                                                    </div>
                                                @else
                                                    <div class="price-info">
                                                        <strong class="font-lg-bold color-brand-3 price-main">Rs. <span
                                                                id="blurtext">********</span> </strong>

                                                    </div>
                                                @endif
                                                <div class="pt-20" style="font-size:13px;">
                                                    {!! Str::words("$cate->description", 50, ' ...') !!}
                                                </div>

                                                <div class="mt-20"><a class="btn btn-cart"
                                                        href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">View
                                                        Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        


                        <div class="box-slider-item">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Other Categories</h5>
                            </div>
                            <div class="content-slider mb-50">
                                @foreach ($allcategory->take(12) as $dcategory)
                                    @php
                                        if ($dcategory->id == 9) {
                                            $urltitle = 'electric-pallet-truck';
                                        } else {
                                            $urltitle = strtolower(str_replace(' ', '-', $dcategory->name));
                                        }
                                    @endphp
                                    <a class="btn btn-border mr-5"
                                        href="{{ url($urltitle) }}">{{ $dcategory->name }}</a>
                                @endforeach


                            </div>
                            <div class="banner-right text-center mb-30">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.frontened.abovefooter')
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')
    <script>
        $(document).ready(function() {
            $("#gridview").click(function() {
                $("#grid-view").removeClass("hide");
                $("#list-view").addClass("hide");
                $("#gridview").addClass("active");
                $("#listview").removeClass("active");
            });

            $("#listview").click(function() {
                $("#list-view").removeClass("hide");
                $("#grid-view").addClass("hide");
                $("#gridview").removeClass("active");
                $("#listview").addClass("active");
            });


        });
    </script>
</body>


</html>
