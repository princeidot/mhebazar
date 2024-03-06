  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="msapplication-TileColor" content="#0E0E0E">
      <meta name="template-color" content="#0E0E0E">
      @if($idvendor == null)
        <title>Vendors listing MHE Bazar</title>
        <meta name="description" content="MHE Bazar is part of Greentech India Material Handling LLP (GTIMH), a company dedicated to providing top-quality solutions for material handling in various industries." />
        <link rel="canonical" href="https://www.mhebazar.in/vendors-listing/mhe-bazar" /> 
      @else
     <title>Vendors listing {{$idvendor->brandname}}</title>
      <meta name="description" content="{{$idvendor->descp}}" />
        <link rel="canonical" href="https://www.mhebazar.in/vendors-listing/{{strtolower(str_replace(' ','-',$idvendor->brandname))}}" /> 
        @endif
      <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
      <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
      <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
      @if($idvendor == null)
      <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
      @else
        <meta property="og:image" content="{{ url('public/profile/' . $idvendor->profile) }}" />
      @endif
      @include('layouts.headtag')
    <style>
    .box-info-vendor .info-vendor{
        width:80%;
    }
        #blurtext{
            color: transparent;
    text-shadow: 0 0 5px #000;
        }
         #profileImage {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background: linear-gradient(#5CA131, #018CFC);
  font-size: 35px;
  color: #fff;
  text-align: center;
  line-height: 70px;
      margin-left: 9px;
    margin-bottom: 5px;
  
}
 .hide {
            display: none;
        }
         .box-info-vendor .avarta {
              z-index: 1;
          }
          .info-vendor h1{
          font-size: 32px;
          line-height: 41px;
        }
          @media only screen and (max-width: 768px){
                .info-vendor h1{
                     font-size: 22px;
                     line-height: 31px;
                }
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
                          <li><a class="font-xs color-gray-500" href="{{ route('vendorsl') }}">Vendors listing</a></li>
                          <li><a class="font-xs color-gray-500"> @if($idvendor == null)MHE Bazar @else {{ $idvendor->brandname }} @endif</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <section class="section-box shop-template mt-30">
              <div class="container">
                  <div class="d-flex box-banner-vendor">
                      <div class="vendor-left w-75">
                          <div class="banner-vendor">
                              <div class="content-slider">
                                  <div class="box-swiper slide-shop">
                                      <div class="swiper-container swiper-featured">
                                          <div class="swiper-wrapper">
                                              @if ($idvendor == null)
                                                  <div class="swiper-slide">
                                                      <img src="{{ url('css/asset/banner/mhe-1.webp') }}" alt="mhe-1.webp">
                                                  </div>
                                                  <div class="swiper-slide">
                                                      <img src="{{ url('css/asset/banner/mhe2.webp') }}" alt="mhe-2.webp">
                                                  </div>
                                                  <div class="swiper-slide">
                                                      <img src="{{ url('css/asset/banner/mhe3.webp') }}" alt="mhe-3.webp">
                                                  </div>
                                                  <div class="swiper-slide">
                                                      <img src="{{ url('css/asset/banner/mhe4.webp') }}" alt="mhe-4.webp">
                                                  </div>
                                              @else
                                                  @foreach ($allproducts as $item)
                                                  @if(!$item->userData->banner==null)
                                                      @php
                                                          $mu = json_decode($item->userData->banner);
                                                      @endphp

                                                      @foreach ($mu as $mu1)
                                                          <div class="swiper-slide">
                                                              <img src="{{ url('css/asset/banner/' . $mu1) }}"
                                                                  alt="$mu1">
                                                          </div>
                                                      @endforeach

                                                      @else
                                                      <div class="swiper-slide">
                                                              <img src="{{ url('css/newassets/imgs/page/vendor/featured.png') }}"
                                                                  alt="">
                                                          </div>
                                                      @endif
                                                      
                                                  @endforeach
                                              @endif

                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-flex box-info-vendor">
                                  <div class="avarta">
                                    @if($idvendor == null)
                                    <img class="mb-5" src="{{url('img/mhe-logo1.png')}}" alt="MHE Bazar">
                                    @elseif($idvendor->profile==null)
                                     <div id="profileImage">{{mb_substr($idvendor->brandname, 0, 1);}}</div>
                                     @else
                                     <img src="{{ url('public/profile/' . $idvendor->profile) }}" alt="{{$idvendor->brandname}}">
                                    @endif
                                    <a class="btn btn-buy font-xs">{{$allproducts->count()}} Products</a></div>
                                  <div class="info-vendor">
                                     
                                      <h1 class="mb-5">@if($idvendor == null)MHE Bazar @else {{ $idvendor->brandname }} @endif</h1>
                                      
                                  </div>
                                  <!--<div class="vendor-contact">-->
                                  <!--    <div class="row">-->
                                  <!--        <div class="col-xl-7 col-lg-12">-->
                                  <!--            <div class="d-inline-block font-md color-gray-500 location mb-10">5171 W-->
                                  <!--                Campbell Ave undefined Kent, Utah 53127 United States</div>-->
                                  <!--        </div>-->
                                  <!--        <div class="col-xl-5 col-lg-12">-->
                                  <!--            <div class="d-inline-block font-md color-gray-500 phone">(+91) --->
                                  <!--                540-025-124553<br>(+91) - 540-025-235688</div>-->
                                  <!--        </div>-->
                                  <!--    </div>-->
                                  <!--</div>-->
                              </div>
                          </div>
                      </div>
                      <div class="vendor-right">
                          <div class="box-featured-product">
                              <div class="item-featured">
                                  <div class="featured-icon"><img src="{{url('css/newassets/imgs/page/product/delivery.svg')}}"
                                          alt="Ecom"></div>
                                  <div class="featured-info"><span class="font-sm-bold color-gray-1000">Worldwide Delivery</span>
                                      <p class="font-sm color-gray-500 font-medium">MHEBazar delivers products globally.</p>
                                  </div>
                              </div>
                              <div class="item-featured">
                                  <div class="featured-icon"><img src="{{url('css/newassets/imgs/page/product/support.svg')}}"
                                          alt="Ecom"></div>
                                  <div class="featured-info"><span class="font-sm-bold color-gray-1000">Support 24/7</span>
                                      <p class="font-sm color-gray-500 font-medium">Reach our experts today!</p>
                                  </div>
                              </div>
                              <div class="item-featured">
                                  <div class="featured-icon"><img src="{{url('css/newassets/imgs/page/product/return.svg')}}"
                                          alt="Ecom"></div>
                                  <div class="featured-info"><span class="font-sm-bold color-gray-1000">First Purchase Discount</span>
                                      <p class="font-sm color-gray-500 font-medium">Up to 10% discount</p>
                                  </div>
                              </div>
                             
                          </div>
                      </div>
                  </div>
                  <div class="border-bottom mb-20 border-vendor"></div>
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="box-filters mt-0 pb-5 border-bottom">
                              <div class="row">
                                  <div class="col-xl-4 col-lg-4 mb-10 text-lg-start text-center"><a
                                          class="btn btn-filter font-sm color-brand-3 font-medium d-none"
                                          href="#ModalFiltersForm" data-bs-toggle="modal">All Fillters</a>
                                          <span class="font-sm color-gray-900 font-medium border-1-right span">Showing
                                          1&ndash;{{$allproducts->count()}} results</span></div>
                                  <div class="col-xl-8 col-lg-8 mb-10 text-lg-end text-center">
                                      <div class="d-inline-block"><span
                                              class="font-sm color-gray-500 font-medium">Sort by:</span>
                                          <div class="dropdown dropdown-sort border-1-right">
                                              <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                  id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                  aria-expanded="false">Latest products</button>
                                              <ul class="dropdown-menu dropdown-menu-light"
                                                  aria-labelledby="dropdownSort" style="margin: 0px;">
                                                  <li><a class="dropdown-item active" href="#">Latest
                                                          products</a></li>
                                                  <li><a class="dropdown-item" href="#">Oldest products</a></li>
                                                  <li><a class="dropdown-item" href="#">Comments products</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                      
                                      <div class="d-inline-block">
                                          <a class="view-type-grid mr-5 active" title="Grid View" id="gridview"></a>
                                        <a class="view-type-list" title="list View" id="listview"></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        <div class="list-products-5 mt-20" id="grid-view">
                             @foreach ($allproducts as $cate)
                           
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
                                                    $urlcategory = strtolower(str_replace(' ', '-', $cate->category->name));
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
                                            <a class="font-xs color-gray-500">{{$cate->category->name}}</a><br>
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
                          
                             @endforeach
                            
                        </div>
                        <div class="row mt-20 display-list hide" id="list-view">
                            @foreach ($allproducts as $cate)
                               
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
                                                    <img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                        alt="{{ $cate->img1 }}"></a></div>
                                            <div class="info-right"><span
                                                    class="font-xs color-gray-500">{{ $cate->category->name }}</span><br>
                                                     @if(!$cate->old==null)
                                                 <a class="color-brand-3 font-sm-bold"
                                                href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                 @else
                                                 <a class="color-brand-3 font-sm-bold"
                                                href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                 @endif
                                                   <h4 class="color-brand-3"> {{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</h4>
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
                                                
                                                <div class="mt-20"><a class="btn btn-cart" href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">View
                                                        Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                          
                          
                          <div class="mt-20">
                              
                          </div>
                      </div>
                  </div>
              </div>
          </section>
        
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
