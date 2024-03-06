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

    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Search</title>
    @include('layouts.headtag')
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

        #blurtext {
            color: transparent;
            text-shadow: 0 0 5px #000;
        }

        .hide {
            display: none;
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 0;
        }
        .sticky-top {
    top: 80px;
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
                        <li><a class="font-xs color-gray-500" href=""> Search</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-box shop-template mt-30">
            <div class="container">
                {{-- Alert Megg --}}
                @include('newfrontened.temptime.alert')
                {{-- End Alert --}}

                <h6 class="color-gray-900 pb-30"> Showing results for "{{ $query }}" in All Categories.</h6>
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="banner-ads-top mb-30"><a><img
                                    src="{{ url('css/newassets/imgs/page/uploadimage/1269-269-px-1.webp') }}" alt="banner"></a></div>
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a
                                        class="btn btn-filter font-sm color-brand-3 font-medium"
                                        href="#ModalFiltersForm" data-bs-toggle="modal">All Fillters</a></div>
                                <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Showing
                                        1&ndash;{{ $results->count() }} results</span>
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
                                    <!--<div class="d-inline-block"><span-->
                                    <!--        class="font-sm color-gray-500 font-medium">Show</span>-->
                                    <!--    <div class="dropdown dropdown-sort border-1-right">-->
                                    <!--        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"-->
                                    <!--            id="dropdownSort2" type="button" data-bs-toggle="dropdown"-->
                                    <!--            aria-expanded="false" data-bs-display="static"><span>30-->
                                    <!--                items</span></button>-->
                                    <!--        <ul class="dropdown-menu dropdown-menu-light"-->
                                    <!--            aria-labelledby="dropdownSort2">-->
                                    <!--            <li><a class="dropdown-item active" href="#">30 items</a></li>-->
                                    <!--            <li><a class="dropdown-item" href="#">50 items</a></li>-->
                                    <!--            <li><a class="dropdown-item" href="#">100 items</a></li>-->
                                    <!--        </ul>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="d-inline-block">
                                        <a class="view-type-grid mr-5 active" title="Grid View" id="gridview"></a>
                                        <a class="view-type-list" title="list View" id="listview"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20" id="grid-view">
                            @if (count($results) > 0)

                                @foreach ($results as $cate)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="card-grid-style-3">
                                            <div class="card-grid-inner">
                                                <div class="tools">
                                                    @if (Auth::check())
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('wishlist.add', ['productId' => $cate->id]) }}"
                                                            aria-label="Add To Wishlist"></a>
                                                    @else
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('register') }}"
                                                            aria-label="Add To Wishlist"></a>
                                                    @endif
                                                    <a class="btn btn-compare btn-tooltip mb-10"
                                                        href="{{ route('addToCompare', ['id' => $cate->id]) }}"
                                                        aria-label="Compare"></a>
                                                    @if (Auth::check())
                                                        <a class="btn btn-cartview btn-tooltip" aria-label="Add To Cart"
                                                            href="{{ route('cart.add', ['productId' => $cate->id]) }}"></a>
                                                    @else
                                                        <a class="btn btn-cartview btn-tooltip" aria-label="Add To Cart"
                                                            href="{{ route('register') }}"></a>
                                                    @endif
                                                </div>
                                                @php
                                                   if (!$cate->subcategory == null) {
                                                    $urlcategory = strtolower(str_replace(' ', '-',str_replace(array( '(', ')' ),'',$cate->subcategory->title)));
                                                } else {
                                                    $urlcategory = strtolower(str_replace(' ', '-', $cate->category->name));
                                                }
                                                if( $cate->vendor == null){
                                                    $vname='mhe-bazar';
                                                }else {
                                                    $vname=strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '',$cate->userData->brandname)));
                                                }
                                                 if(!$cate->capacity == null){
                                                $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->title))) . '-' .  strtolower(str_replace(' ', '-',$cate->capacity . '-' . $cate->model)) . '-' . $cate->id;
                                                     }
                                                else{
                                                 $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->title))) . '-' . strtolower(str_replace(' ', '-', $cate->model)) . '-' .$cate->id;

                                                       }
                                                       
                                                       $maintile=strtolower($cate->title);
                                               $maintitle=ucwords($maintile);
                                                $vendorname=str_replace('-',' ',$vname);
                                                $mvtitle=ucwords($vendorname);
                                                @endphp
                                                <div class="image-box">
                                                    @if($cate->old==null)
                                                                     
                                                                     <a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                                         @else
                                                                         
                                                                   <span class="label bg-brand-2">Used</span> 
                                                                     <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                                        @endif
                                                        <img
                                                            src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                            alt="{{ $cate->img1 }}"></a>
                                                </div>
                                                <div class="info-right">
                                                    <a
                                                        class="font-xs color-gray-500">{{ $cate->category->name }}</a><br>
                                                  @if($cate->old==null)
                                                                    <a class="color-brand-3 font-sm-bold" href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                                        @else
                                                                       <a class="color-brand-3 font-sm-bold" href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">  
                                                                        @endif
                                                          {{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</a>

                                                    @if (!$cate->price == null)
                                                        <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main">Rs.
                                                                {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $cate->price) }}</strong>
                                                            <!--<span class="color-gray-500 price-line">$3225.6</span>-->
                                                        </div>
                                                    @else
                                                        <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main">Rs.
                                                                <span id="blurtext">********</span> </strong>
                                                            <!--<span class="color-gray-500 price-line">$3225.6</span>-->
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
                            @else
                                 <h6 class="color-gray-900 pb-50 pb-30 text-center">No results found</h6>
                            @endif

                        </div>
                        <div class="row mt-20 display-list hide" id="list-view">
                            @if (count($results) > 0)
                                @foreach ($results as $cate)
                                    
                                    <div class="col-lg-12">
                                        <div class="card-grid-style-3">
                                            <div class="card-grid-inner">

                                                <div class="image-box">
                                                    @if($cate->old==null)
                                                   <a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                    @else
                                                    <span class="label bg-brand-2">Used</span> 
                                                    <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                    @endif
                                                        <img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                            alt="{{ $cate->img1 }}"></a>
                                                </div>
                                                <div class="info-right"><span
                                                        class="font-xs color-gray-500">{{ $cate->category->name }}</span><br>
                                                        @if($cate->old==null)
                                                   <a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                    @else
                                                   
                                                    <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                          @endif  
                                                        <h4 class="color-brand-3">{{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</h4>
                                                    </a>
                                                    @if (!$cate->price == null)
                                                        <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main">Rs.
                                                                {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $cate->price) }}</strong>

                                                        </div>
                                                    @else
                                                        <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main">Rs.
                                                                <span id="blurtext">********</span> </strong>

                                                        </div>
                                                    @endif
                                                    <div class="pt-20" style="font-size:13px;">
                                                        {!! Str::words("$cate->description", 50, ' ...') !!}
                                                    </div>

                                                    <div class="mt-20">
                                                         @if($cate->old==null)
                                                        <a class="btn btn-cart" href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                            @else
                                                        <a class="btn btn-cart" href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                            @endif
                                                            View etails</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                               <h6 class="color-gray-900 pb-50 pb-30 text-center">No results found</h6>

                            @endif
                        </div>

                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border mb-40 sticky-top">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">All Categories</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    @foreach ($allcategory->take(12) as $dcategory)
                                        @php
                                            if ($dcategory->id == 9) {
                                                $urltitle = 'electric-pallet-truck';
                                            } else {
                                                $urltitle = strtolower(str_replace(' ', '-', $dcategory->name));
                                            }
                                        @endphp
                                        <li><a href="{{ url($urltitle) }}">{{ $dcategory->name }}</a></li>
                                    @endforeach



                                </ul>

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
