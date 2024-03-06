<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="{{$categoryname->meta_title}}" />
    <meta name="description"
        content="{{$categoryname->mta_des}}" />
    @php
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    @endphp
    @if (strpos($actual_link, '=') !== false)
        <meta name="robots" content="noindex">
    @else
    
    <link rel="canonical" href="https://www.mhebazar.in/{{strtolower(str_replace(' ','-',str_replace(' (BOPT)','',$categoryname->name)))}}" />
    @endif
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>{{$categoryname->meta_title}}</title>
      <meta property="og:url" content="https://www.mhebazar.in/{{strtolower(str_replace(' ','-',$categoryname->name))}}" />
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
    <meta property="og:title" content="{{$categoryname->meta_title}}" />
    @include('layouts.headtag')
    <style>
        .list-nav-arrow li a {
            background: none;
            padding: 0px;
            font-size:15px;
            width:223px;
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
        #blurtext{
            color: transparent;
    text-shadow: 0 0 5px #000;
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
                        <li><a class="font-xs color-gray-500">{{ $categoryname->name }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-box shop-template mt-30">
            <div class="container">
                 <div class="col-md-12">
                        <div class="heading pb-20">
                            <h1 class="font-23 color-gray-900">{{ $categoryname->name }}</h1>
                        </div>
                 </div>
                  {{-- Alert Megg --}}
                 @include('newfrontened.temptime.alert')
                {{-- End Alert --}}
                <div class="row">
                   
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="banner-ads-top mb-30"><a><img
                                    src="{{ url('css/newassets/imgs/page/uploadimage/1269-269-px-1.webp') }}" alt="Ecom"></a></div>
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a
                                        class="btn btn-filter font-sm color-brand-3 font-medium d-none"
                                        href="#ModalFiltersForm" data-bs-toggle="modal">All Fillters</a></div>
                                <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Showing
                                        1&ndash;{{$cateproduct->count()}} results</span>
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
                          @if($cateproduct->count())
                          
                        <div class="row mt-20" id="grid-view">
                           
                             @foreach ($cateproduct as $cate)
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
                                                <a class="btn btn-cartview btn-tooltip"
                                                    aria-label="Add To Cart" href="{{ route('cart.add', ['productId' => $cate->id]) }}"></a>
                                                 @else 
                                                  <a class="btn btn-cartview btn-tooltip"
                                                    aria-label="Add To Cart" href="{{ route('register') }}"></a>
                                                  @endif
                                            </div>
                                       @php
                                              
                                                    if (!$cate->subcategory == null) {
                                                $urlcategory = strtolower(str_replace(' ', '-',str_replace(array( '(', ')' ),'',$cate->subcategory->title)));
                                                } else {
                                                    
                                                    $urlcategory = strtolower(str_replace(' ', '-',$cate->category->name));
                                                }
                                                

                                                if( $cate->vendor == null){
                                                    $vname='mhe-bazar';
                                                }else {
                                                    $vname=strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '',$cate->userData->brandname)));
                                                }

                                                if(!$cate->capacity == null){
                                               $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($cate->title)))) . '-' . strtolower(str_replace(' ', '-',rtrim($cate->capacity))).'-' .strtolower(str_replace(' ', '-',rtrim($cate->model))) . '-' . $cate->id;
                                                }
                                                else{
                                            $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($cate->title)))) . '-' . strtolower(str_replace(' ', '-', rtrim($cate->model))) . '-' .$cate->id;
                                               }
                                               $maintile=strtolower($cate->title);
                                               $maintitle=ucwords($maintile);
                                                $vendorname=str_replace('-',' ',$vname);
                                                $mvtitle=ucwords($vendorname);
                                               
                                               @endphp
                                        <div class="image-box">
                                            @if(!$cate->old==null)
                                    
                                           <span class="label bg-brand-2">Used</span> 
                                            <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                           @else
                                            <a href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                @endif
                                                <img
                                                    src="{{ url('css/asset/image/' . $cate->img1) }}" alt="{{$cate->img1}}"></a>
                                        </div>
                                        <div class="info-right">
                                            <a class="font-xs color-gray-500">{{$categoryname->name}}</a><br>
                                                 @if(!$cate->old==null)
                                                 <a class="color-brand-3 font-sm-bold"
                                                href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                 @else
                                                 <a class="color-brand-3 font-sm-bold"
                                                href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                 @endif
                                                {{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</a>
                                            
                                            @if(!$cate->price==null)
                                                <div class="price-info">
                                                <strong class="font-lg-bold color-brand-3 price-main">Rs. {{ preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,",$cate->price) }}</strong>
                                                <!--<span class="color-gray-500 price-line">$3225.6</span>-->
                                                </div>
                                                @else
                                                 <div class="price-info">
                                                <strong class="font-lg-bold color-brand-3 price-main">Rs. <span id="blurtext">********</span> </strong>
                                                <!--<span class="color-gray-500 price-line">$3225.6</span>-->
                                                </div>
                                                @endif
                                            <div class="mt-20 box-btn-cart">
                                                 @if(!$cate->old==null)
                                                 <a class="btn btn-cart"
                                                    href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                 @else
                                                <a class="btn btn-cart"
                                                    href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                @endif
                                                    View Details</a></div>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                            
                        </div>
                        <div class="row mt-20 display-list hide" id="list-view">
                            @foreach ($cateproduct as $cate)
                                @php
                                              
                                                    if (!$cate->subcategory == null) {
                                                   $urlcategory = strtolower(str_replace(' ', '-',str_replace(array( '(', ')' ),'',$cate->subcategory->title)));
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
                                                $maintile=strtolower($cate->title);
                                               $maintitle=ucwords($maintile);
                                                $vendorname=str_replace('-',' ',$vname);
                                                $mvtitle=ucwords($vendorname);
                                                
                                            @endphp
                                <div class="col-lg-12">
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
                                                <a class="btn btn-cartview btn-tooltip"
                                                    aria-label="Add To Cart" href="{{ route('cart.add', ['productId' => $cate->id]) }}"></a>
                                                 @else 
                                                  <a class="btn btn-cartview btn-tooltip"
                                                    aria-label="Add To Cart" href="{{ route('register') }}"></a>
                                                  @endif
                                            </div>
                                            <div class="image-box">
                                                @if(!$cate->old==null)
                                    
                                           <span class="label bg-brand-2">Used</span> 
                                            <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                           @else
                                            <a href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                @endif
                                                    <img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                        alt="{{ $cate->img1 }}"></a></div>
                                            <div class="info-right"><span
                                                    class="font-xs color-gray-500">{{ $categoryname->name }}</span><br>
                                                    
                                                   
                                                    @if(!$cate->old==null)
                                                 <a class="color-brand-3 font-sm-bold"
                                                href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                 @else
                                                 <a href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                 @endif
                                              
                                                        
                                                    <h4 class="color-brand-3">  {{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}    </h4>
                                                </a>
                                                @if(!$cate->price==null)
                                                <div class="price-info">
                                                <strong class="font-lg-bold color-brand-3 price-main">Rs. {{ preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,",$cate->price) }}</strong>
                                               
                                                </div>
                                                @else
                                                 <div class="price-info">
                                                <strong class="font-lg-bold color-brand-3 price-main">Rs. <span id="blurtext">********</span> </strong>
                                               
                                                </div>
                                                @endif
                                              <div class="pt-20" style="font-size:13px;">
                                                {!! Str::words("$cate->description", 50, ' ...') !!}
                                              </div>
                                                
                                                <div class="mt-20">
                                                   
                                                        
                                                       @if(!$cate->old==null)
                                                 <a class="btn btn-cart"
                                                    href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                 @else
                                                <a class="btn btn-cart"
                                                    href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                @endif 
                                                View Details</a>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                         @else
                         <div class="row mt-20">
                             <div class="col-lg-12">
                                     No Produts in this category
                             </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border mb-40">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Sub Categories</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    @foreach ($category as $subcategory)
                                        @if($categoryname->id==9)
                                         <li><a href="{{url('electric-pallet-truck')}}">{{ $subcategory->title }}<span
                                                    class="number">{{ $subcategory->total }}</span></a></li>
                                        @else
                                        <li><a href="{{url(strtolower(str_replace(' ', '-',$categoryname->name) .'/'. str_replace(' ','-',str_replace('(', '', str_replace(')', '',$subcategory->title))).'-'.$subcategory->id))}}">{{ $subcategory->title }}<span
                                                    class="number">@if($subcategory->total==null) 0 @else{{ $subcategory->total }}@endif</span></a></li>
                                            @endif
                                                    @endforeach

                                </ul>

                            </div>
                        </div>

                       
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
                            <a href="{{route('forklift')}}">
                            <div class="banner-right text-center mb-30">
                             
                            </div></a>
                            
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
