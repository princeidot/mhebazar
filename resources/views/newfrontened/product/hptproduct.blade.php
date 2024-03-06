<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    @php
        if ($cate->cate_id == 9) {
            $urlcategory = 'electric-pallet-truck';
        } else {
            $urlcategory = strtolower(str_replace(' ', '-', $cate->name));
        }
        if ($pt->cate_id == 1) {
            $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $pt->title))) . '/' . $pt->id;
        } else {
            $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $pt->title)));
        }
    @endphp
     <!--<link rel="canonical"-->
     <!--   href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">-->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}" />
    <meta property="og:image" content="{{ url('css/asset/image/' . $pt->img1) }}" />
    <meta property="og:title" content="{{$pt->title}}" />
    
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>{{ $pt->title }}</title>
    <style>
        .product-specification {
            width: 100%;
            border: 1px dashed #c7c7c7;
        }

        .product-specification tr:nth-child(2n) {
            background: #f1f1f1;
        }

        .product-specification tr td {
            border-bottom: 1px dashed #c4c4c4;
            border-right: 1px dashed #c4c4c4;
            padding: 10px 15px;
            vertical-align: top;
        }

        .product-specification tr {
            border-top: 1px dashed #e3e3e3
        }
        .zoomContainer{
            z-index:1
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

        }
        .vendorimage{
                width: 30%;
    max-width: 115px;
    min-width: 115px;
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
                        <li><a class="font-xs color-gray-500" href="{{url('')}}">Home</a></li>
                        @php 
                        if($cate->id==9){
                          $urlcategory='electric-pallet-truck';
                          }else{
                            $urlcategory=strtolower(str_replace(' ', '-',$cate->name));
                            }
                                         @endphp
                        <li><a class="font-xs color-gray-500" href="{{url($urlcategory)}}">{{ $cate->name }}</a></li>
                        <li><a class="font-xs color-gray-1000">{{ $pt->title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                
                 {{-------- Alert Megg ----------}}
                 
                  @include('newfrontened.temptime.alert')
                 
                {{--------- End Alert -----------}}
                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="gallery-image">
                            <div class="galleries">
                                <div class="detail-gallery">
                                    <label class="label">-17%</label>
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10"><img
                                                src="{{ url('css/asset/image/' . $pt->img1) }}" alt="product image">
                                        </figure>
                                        @if (!$pt->img2 == null)
                                            @php
                                                $mu = json_decode($pt->img2);
                                            @endphp
                                            @foreach ($mu as $item)
                                                <figure class="border-radius-10"><img
                                                        src="{{ url('css/asset/image/' . $item) }}" alt="product image">
                                                </figure>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="slider-nav-thumbnails">
                                    <div>
                                        <div class="item-thumb"><img src="{{ url('css/asset/image/' . $pt->img1) }}"
                                                alt="product image"></div>
                                    </div>
                                    @if (!$pt->img2 == null)
                                        @php
                                            $mu = json_decode($pt->img2);
                                        @endphp
                                        @foreach ($mu as $item)
                                            <div>
                                                <div class="item-thumb"><img src="{{ url('css/asset/image/' . $item) }}"
                                                        alt="product image"></div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="color-brand-3 mb-25">{{ $pt->title }}</h3>
                      <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-sm-3 mb-mobile"><span
                            class="bytext color-gray-500 font-xs font-medium">by</span>
                            @if ($vendor == null)
                            <a class="byAUthor" href="{{ route('vendorss', ['slug' => 'mhe-bazar']) }}">MHE Bazar</a>
                            @else
                            <a class="byAUthor"
                                href=" {{ route('vendorss', ['slug' => strtolower(str_replace(' ', '-', $vendor->name))]) }} ">
                                {{ $vendor->name }}</a>
                             @endif
                            <div class="rating mt-5"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-9 text-start text-sm-end">
                                <a class="mr-20" href="{{ route('wishlist.add', ['productId' => $pt->id]) }}"><span
                                        class="btn btn-wishlist mr-5 opacity-100 transform-none"></span><span
                                        class="font-md color-gray-900">Add to Wishlist</span></a><a
                                    href="{{ route('addToCompare', ['id' => $pt->id]) }}"><span
                                        class="btn btn-compare mr-5 opacity-100 transform-none"></span><span
                                        class="font-md color-gray-900">Add to Compare</span></a>
                            </div>
                        </div>

                        <div class="border-bottom pt-20 mb-40"></div>
                          @if (!$pt->price == null)
                         <div class="box-product-price">
                            <h3 class="color-brand-3 price-main d-inline-block mr-10">Rs. {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $pt->price) }}</h3>
                        </div> 
                        @else
                        <div class="box-product-price">
                            <h3 class="color-brand-3 price-main d-inline-block mr-10">Rs. <span id="blurtext">********</span></h3>
                        </div> 
                        @endif
                        <div class="product-description mt-20 color-gray-900">{!! $pt->description !!}</div>
                        <div class="buy-product mt-20">
                            {{-- <p class="font-sm mb-20">Quantity</p> --}}
                            <div class="box-quantity">
                                {{-- <div class="input-quantity">
                                    <input class="font-xl color-brand-3" type="text" value="1"><span
                                        class="minus-cart"></span><span class="plus-cart"></span>
                                </div> --}}
                                <div class="button-buy"><a class="btn btn-buy" href="#GetQuote"
                                        onclick="myFunction('{{ $pt->title }}')" data-bs-toggle="modal">Get
                                        Quote</a></div>
                            </div>
                        </div>
                        <div class="border-bottom pt-30 mb-20"></div><a class="mr-30" href="#Rentbuy"
                            data-bs-toggle="modal"><span
                                class="btn btn-wishlist mr-5 opacity-100 transform-none"></span><span
                                class="font-md color-gray-900">Rent this instead</span></a>
                        
                        <div class="mt-20">
                            <span class="font-md color-gray-900">Product Specifications</span>
                            <table class="product-specification">
                                <tr>
                                    <td>Manufacturer</td>
                                    <td>{{ $pt->manufacturer }}</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>{{ $pt->capacity }}</td>
                                </tr>

                                <tr>
                                    <td>Modal</td>
                                    <td>{{ $pt->model }}</td>
                                </tr>

                            </table>
                            <a id="view-specification" class="pt-10" style="float:right;">View More Specification</a>


                        </div>
                    </div>
                </div>
                <div class="border-bottom pt-20 mb-40"></div>
            </div>
        </section>
        <section class="section-box shop-template">
            <div class="container">
                <div class="pt-30 mb-10">
                    <ul class="nav nav-tabs nav-tabs-product" role="tablist">
                        <li><a class="active" href="#tab-description" data-bs-toggle="tab" role="tab"
                                aria-controls="tab-description" aria-selected="true">Description</a></li>
                        <li><a href="#tab-specification" data-bs-toggle="tab" role="tab"
                                aria-controls="tab-specification" aria-selected="true">Specification</a></li>
                        <!--<li><a href="#tab-reviews" data-bs-toggle="tab" role="tab" aria-controls="tab-reviews"-->
                        <!--        aria-selected="true">Reviews (2)</a></li>-->
                        <li><a href="#tab-vendor" data-bs-toggle="tab" role="tab" aria-controls="tab-vendor"
                                aria-selected="true">Vendor</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab-description" role="tabpanel"
                            aria-labelledby="tab-description">
                            <div class="display-text-short">
                                {!! $pt->ldescription !!}
                            </div>
                            <div class="mt-20 text-center"><a
                                    class="btn btn-border font-sm-bold pl-80 pr-80 btn-expand-more">More Details</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-specification" role="tabpanel"
                            aria-labelledby="tab-specification">
                            <h5 class="mb-25">Specification</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <td> Type Of Product</td>
                                        <td>{{ ucwords($name) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer</td>
                                        <td>{{ $pt->manufacturer }}</td>
                                    </tr>
                                    <tr>
                                        <td>Capacity</td>
                                        <td><?php $tags_array = explode(',', $pt->capacity);
                                        
                                        //To replace the array brackets so that the plain string is displayed
                                        $tags_array = str_replace(['[{"tags":"', '"}]', '[{"tags":null}]'], '', $tags_array);
                                        $searchForValue = ',';
                                        
                                        foreach ($tags_array as $tagg) {
                                            echo $tagg;
                                        }
                                        ?></td>
                                    </tr>
                                    <tr>
                                        <td>Operator Type</td>
                                        <td>{{ $pt->operator_type }}</td>
                                    </tr>
                                    <tr>
                                        <td>Width Over Forks</td>
                                        <td><?php $tags_array = explode(',', $pt->width_over_forks);
                                        
                                        //To replace the array brackets so that the plain string is displayed
                                        $tags_array = str_replace(['[{"tags":"', '"}]', '[{"tags":null}]'], '', $tags_array);
                                        
                                        $json = json_encode($tags_array);
                                        $new = str_replace(str_split('\\/:*?"<>|+-'), '', $json);
                                        $name1 = str_replace('[', '', str_replace(']', '', $new));
                                        $searchForValue = ',';
                                        ?>
                                            @if (strpos($name1, $searchForValue) !== false)

                                                <select name="wof" id="wof" style="width: 112px;">
                                                    @foreach ($tags_array as $tagg)
                                                        <option value="{{ $tagg }}">
                                                            {{ $tagg }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <?php echo $name1; ?>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Model No</td>
                                        <td> <?php $tags_array = explode(',', $pt->model);
                                        
                                        //To replace the array brackets so that the plain string is displayed
                                        $tags_array = str_replace(['[{"tags":"', '"}]', '[{"tags":null}]'], '', $tags_array);
                                        $json1 = json_encode($tags_array);
                                        $new1 = str_replace(str_split('\\/:*?"<>|+-'), '', $json1);
                                        $name2 = str_replace('[', '', str_replace(']', '', $new1));
                                        ?>


                                            @if (strpos($name2, $searchForValue) !== false)

                                                <select name="model" id="model" style="width: 112px;">
                                                    @foreach ($tags_array as $tagg)
                                                        <option value="{{ $tagg }}">
                                                            {{ $tagg }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <?php echo $name2; ?>
                                            @endif


                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <!--<div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews">-->
                        <!--    <div class="comments-area">-->
                        <!--        <div class="row">-->
                        <!--            <div class="col-lg-8">-->
                        <!--                <h4 class="mb-30 title-question">Customer questions &amp; answers</h4>-->
                        <!--                <div class="comment-list">-->
                        <!--                    <div class="single-comment justify-content-between d-flex mb-30 hover-up">-->
                        <!--                        <div class="user justify-content-between d-flex">-->
                        <!--                            <div class="thumb text-center"><img-->
                        <!--                                    src="{{ url('css/newassets/imgs/page/product/author-2.png') }}"-->
                        <!--                                    alt="Ecom"><a class="font-heading text-brand"-->
                        <!--                                    href="#">Sienna</a></div>-->
                        <!--                            <div class="desc">-->
                        <!--                                <div class="d-flex justify-content-between mb-10">-->
                        <!--                                    <div class="d-flex align-items-center"><span-->
                        <!--                                            class="font-xs color-gray-700">December 4, 2022 at-->
                        <!--                                            3:12 pm</span></div>-->
                        <!--                                    <div class="product-rate d-inline-block">-->
                        <!--                                        <div class="product-rating" style="width: 100%"></div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <p class="mb-10 font-sm color-gray-900">-->
                        <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
                        <!--                                    Delectus, suscipit exercitationem accusantium obcaecati quos-->
                        <!--                                    voluptate nesciunt facilis itaque modi commodi dignissimos-->
                        <!--                                    sequi-->
                        <!--                                    repudiandae minus ab deleniti totam officia id incidunt?<a-->
                        <!--                                        class="reply" href="#"> Reply</a>-->
                        <!--                                </p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div-->
                        <!--                        class="single-comment justify-content-between d-flex mb-30 ml-30 hover-up">-->
                        <!--                        <div class="user justify-content-between d-flex">-->
                        <!--                            <div class="thumb text-center"><img-->
                        <!--                                    src="{{ url('css/newassets/imgs/page/product/author-3.png') }}"-->
                        <!--                                    alt="Ecom"><a class="font-heading text-brand"-->
                        <!--                                    href="#">Brenna</a></div>-->
                        <!--                            <div class="desc">-->
                        <!--                                <div class="d-flex justify-content-between mb-10">-->
                        <!--                                    <div class="d-flex align-items-center"><span-->
                        <!--                                            class="font-xs color-gray-700">December 4, 2022 at-->
                        <!--                                            3:12 pm</span></div>-->
                        <!--                                    <div class="product-rate d-inline-block">-->
                        <!--                                        <div class="product-rating" style="width: 80%"></div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <p class="mb-10 font-sm color-gray-900">-->
                        <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
                        <!--                                    Delectus, suscipit exercitationem accusantium obcaecati quos-->
                        <!--                                    voluptate nesciunt facilis itaque modi commodi dignissimos-->
                        <!--                                    sequi-->
                        <!--                                    repudiandae minus ab deleniti totam officia id incidunt?<a-->
                        <!--                                        class="reply" href="#"> Reply</a>-->
                        <!--                                </p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="single-comment justify-content-between d-flex hover-up">-->
                        <!--                        <div class="user justify-content-between d-flex">-->
                        <!--                            <div class="thumb text-center"><img-->
                        <!--                                    src="{{ url('css/newassets/imgs/page/product/author-4.png') }}"-->
                        <!--                                    alt="Ecom"><a class="font-heading text-brand"-->
                        <!--                                    href="#">Gemma</a></div>-->
                        <!--                            <div class="desc">-->
                        <!--                                <div class="d-flex justify-content-between mb-10">-->
                        <!--                                    <div class="d-flex align-items-center"><span-->
                        <!--                                            class="font-xs color-gray-700">December 4, 2022 at-->
                        <!--                                            3:12 pm</span></div>-->
                        <!--                                    <div class="product-rate d-inline-block">-->
                        <!--                                        <div class="product-rating" style="width: 80%"></div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <p class="mb-10 font-sm color-gray-900">-->
                        <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
                        <!--                                    Delectus, suscipit exercitationem accusantium obcaecati quos-->
                        <!--                                    voluptate nesciunt facilis itaque modi commodi dignissimos-->
                        <!--                                    sequi-->
                        <!--                                    repudiandae minus ab deleniti totam officia id incidunt?<a-->
                        <!--                                        class="reply" href="#"> Reply</a>-->
                        <!--                                </p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="col-lg-4">-->
                        <!--                <h4 class="mb-30 title-question">Customer reviews</h4>-->
                        <!--                <div class="d-flex mb-30">-->
                        <!--                    <div class="product-rate d-inline-block mr-15">-->
                        <!--                        <div class="product-rating" style="width: 90%"></div>-->
                        <!--                    </div>-->
                        <!--                    <h6>4.8 out of 5</h6>-->
                        <!--                </div>-->
                        <!--                <div class="progress"><span>5 star</span>-->
                        <!--                    <div class="progress-bar" role="progressbar" style="width: 50%"-->
                        <!--                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>-->
                        <!--                </div>-->
                        <!--                <div class="progress"><span>4 star</span>-->
                        <!--                    <div class="progress-bar" role="progressbar" style="width: 25%"-->
                        <!--                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
                        <!--                </div>-->
                        <!--                <div class="progress"><span>3 star</span>-->
                        <!--                    <div class="progress-bar" role="progressbar" style="width: 45%"-->
                        <!--                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>-->
                        <!--                </div>-->
                        <!--                <div class="progress"><span>2 star</span>-->
                        <!--                    <div class="progress-bar" role="progressbar" style="width: 65%"-->
                        <!--                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>-->
                        <!--                </div>-->
                        <!--                <div class="progress mb-30"><span>1 star</span>-->
                        <!--                    <div class="progress-bar" role="progressbar" style="width: 85%"-->
                        <!--                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>-->
                        <!--                </div><a class="font-xs text-muted" href="#">How are ratings-->
                        <!--                    calculated?</a>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="tab-pane fade" id="tab-vendor" role="tabpanel" aria-labelledby="tab-vendor">
                             @if(!$pt->userData == null)
                            <div class="vendor-logo d-flex mb-30">
                                <div class="vendorimage">
                                @if ($pt->userData->profile == null)
                                    <div id="profileImage">{{ mb_substr($pt->userData->name, 0, 1) }}</div>
                                @else
                                    <img src="{{ url('public/profile/'.$pt->userData->profile) }}" alt="">
                                @endif
                                </div>
                                <div class="vendor-name ml-15 m-auto">
                                    <h6>
                                        <a href="{{ route('vendorss', ['slug' => strtolower(str_replace(' ', '-', $pt->userData->name))]) }}">{{ $pt->userData->name }}</a>
                                    </h6>
                                   
                                </div>
                            </div>                           
                            <p class="font-sm color-gray-500 mb-15">
                                Dummy Text
                            </p>
                            @else
                            <div class="vendor-logo d-flex mb-30">
                                 <div class="vendorimage">
                                    <img src="{{ url('img/mhe-logo1.png') }}" alt="">
                                </div>
                                <div class="vendor-name ml-15 m-auto">
                                    <h6>
                                       <a class="byAUthor" href="{{ route('vendorss', ['slug' => 'mhe-bazar']) }}">MHE Bazar</a>
                                    </h6>
                                </div>
                            </div>                           
                            <p class="font-sm color-gray-500 mb-15">
                               MHE Bazar is part of Greentech India Material Handling LLP (GTIMH), a company dedicated to providing top-quality solutions for material handling in various industries. One of our most popular offerings is the Lithium-Ion Conversion Kit for Lead-Acid Batteries. This product allows you to upgrade your lead-acid batteries to more efficient and cost-effective lithium-ion batteries, offering superior performance, a longer lifespan, fast charging, more productivity, and requiring less maintenance.
<br>
In addition to the conversion kit, we also offer a wide range of high-quality lithium-ion batteries that are optimized for use in a variety of material handling equipment, including forklifts, scissors lifts, reach trucks, BOPTs, stackers, golf carts, cranes, and electric street sweepers. So, far MHE Bazar has successfully converted and installed a Li-ion conversion kit for all almost brands covering all types of MHEs.
                            </p>
                           @endif
                        </div>
                        <div class="border-bottom pt-30 mb-50"></div>

                        <div class="head-main">
                            <h3 class="mb-5">Related Products</h3>
                            <div class="box-button-slider">
                                <div class="swiper-button-next swiper-button-next-group-1"></div>
                                <div class="swiper-button-prev swiper-button-prev-group-1"></div>
                            </div>
                        </div>
                        <div class="list-products-5">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-group-1">
                                    <div class="swiper-wrapper pt-5">
                                        <div class="swiper-slide">
                                            <div class="row m-1">
                                                @if ($similiar->isEmpty())
                                                    <p>No similar products found.</p>
                                                @else
                                                    @foreach ($similiar as $user)
                                                        @php
                                                         if($cate->id==1){
                                          $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $user->title))).'/'.$user->id;
                                            }else{
                                            $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $user->title)));
                                            }
                                                            
                                                        @endphp

                                                        <div class="card-grid-style-3">
                                                            <div class="card-grid-inner">
                                                                {{-- <div class="tools">
                                                            <a class="btn btn-trend btn-tooltip mb-10"
                                                                href="#" aria-label="Trend"
                                                                data-bs-placement="left"></a><a
                                                                class="btn btn-wishlist btn-tooltip mb-10"
                                                                href="shop-wishlist.html"
                                                                aria-label="Add To Wishlist"></a><a
                                                                class="btn btn-compare btn-tooltip mb-10"
                                                                href="shop-compare.html" aria-label="Compare"></a><a
                                                                class="btn btn-quickview btn-tooltip"
                                                                aria-label="Quick view" href="#ModalQuickview"
                                                                data-bs-toggle="modal"></a>
                                                            </div> --}}
                                                                <div class="image-box">
                                                                    {{-- <span
                                                                class="label bg-brand-2">-17%</span> --}}
                                                                    <a
                                                                        href="{{ url(strtolower(str_replace(' ', '-', $cate->name) . '/' . str_replace('--', '-', $urltitle))) }}"><img
                                                                            src="{{ url('css/asset/image/' . $user->img1) }}"
                                                                            alt="Ecom"></a>
                                                                </div>
                                                                <div class="info-right"><br>

                                                                    <a class="color-brand-3 font-sm-bold"
                                                                        href="{{ url(strtolower(str_replace(' ', '-', $cate->name) . '/' . str_replace('--', '-', $urltitle))) }}">{{ $user->title }}</a>
                                                                    {{-- <div class="rating"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><span
                                                                    class="font-xs color-gray-500">(65)</span></div> --}}
                                                                    {{-- <div class="price-info"><strong
                                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                    class="color-gray-500 price-line">$3225.6</span>
                                                            </div> --}}
                                                                    {{-- <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                    href="shop-cart.html">Add To Cart</a></div> --}}
                                                                    <div class="mt-20 box-btn-cart"><a
                                                                            class="btn btn-cart" href="#GetQuote"
                                                                            onclick="myFunction('{{ ucfirst($user->title) }}')"
                                                                            data-bs-toggle="modal">Get
                                                                            Quote</a></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="border-bottom pt-20 mb-40"></div>
                          <h4 class="color-brand-3">MHE SPARE PARTS</h4>
                        <div class="list-products-5 mt-20">
                            @foreach ($spart as $part)
                                <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                  
                                    <div class="image-box">
                                        {{-- <span class="label bg-brand-2">-17%</span> --}}
                                        <a><img src="{{ url('img/spare-parts.webp') }}"
                                                alt="spare-parts"></a></div>
                                    <div class="info-right text-center" style="height:104px;"><a
                                            class="color-brand-3 font-md-bold" href="#GetQuote"
                                        onclick="myFunction('{{ $part->name }} Spare Parts')" data-bs-toggle="modal">{{$part->name}}</a>

                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="#GetQuote"
                                        onclick="myFunction('{{ $part->name }} Spare Parts')" data-bs-toggle="modal">Get
                                                Quote</a></div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        <div class="border-bottom pt-20 mb-40"></div>
                        <h4 class="color-brand-3">Recently viewed items</h4>
                        <div class="row mt-40">
                              @if($recentProductsCount !== 0 && $recentProductsCount !== 1)
                               @foreach($recentlyviewedproduct as $al)
                                @php
                                $title = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $al->title)));
                                 @endphp
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card-grid-style-2 card-grid-none-border hover-up">
                                    <div class="image-box">
                                         @if ($al->cate_id == 1)
                                        <a href="{{ url('battery/' . str_replace('--', '-', $title) . '/' . $al->aid) }}">
                                            @else
                                        <a href="{{ url(strtolower(str_replace(' ', '-', $al->name)) . '/' . str_replace('--', '-', $title)) }}">
                                            @endif
                                        <img src="{{ url('css/asset/image/' . $al->img1) }}"
                                                alt="{{$al->img1}}"></a>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">
                                        <a href="{{url(strtolower(str_replace(' ', '-', $al->name)))}}">{{$al->name}}</span><br>
                                        @if ($al->cate_id == 1)
                                        <a href="{{ url('battery/' . str_replace('--', '-', $title) . '/' . $al->aid) }}" class="color-brand-3 font-xs-bold">{{ $al->title }}</a>
                                        @else 
                                        <a href="{{ url(strtolower(str_replace(' ', '-', $al->name)) . '/' . str_replace('--', '-', $title)) }}" class="color-brand-3 font-xs-bold">  
                                            {{ $al->title }}</a>
                                            @endif
                                        <div class="pt-10">
                                       <a class="btn btn-gray" href="#GetQuote"
                                        onclick="myFunction('{{ $al->title }}')" data-bs-toggle="modal">Get
                                                Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                             @else
                            No Viewed Product
                            @endif
                        </div>
                        <div class="border-bottom pt-20 mb-40"></div>

                        <div class="head-main">
                            <h3 class="mb-5">Similiar Category</h3>
                            <p class="font-base color-gray-500">Different Products</p>
                            <div class="box-button-slider">
                                <div class="swiper-button-next swiper-button-next-group-6"></div>
                                <div class="swiper-button-prev swiper-button-prev-group-6"></div>
                            </div>
                        </div>
                        <div class="list-products-5">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-group-5">
                                    <div class="swiper-wrapper pt-5">

                                        @if ($all->isEmpty())
                                            <p>No similar products found.</p>
                                        @else
                                            @foreach ($all as $user)
                                                @php
                                                      if($cate->id==1){
                                          $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $user->title))).'/'.$user->id;
                                            }else{
                                            $urltitle = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $user->title)));
                                            }
                                                   
                                                @endphp
                                                <div class="swiper-slide">
                                                    <div class="card-grid-style-3" style="width:100%">
                                                        <div class="card-grid-inner">
                                                            {{-- <div class="tools">
                                                            <a class="btn btn-trend btn-tooltip mb-10"
                                                                href="#" aria-label="Trend"
                                                                data-bs-placement="left"></a><a
                                                                class="btn btn-wishlist btn-tooltip mb-10"
                                                                href="shop-wishlist.html"
                                                                aria-label="Add To Wishlist"></a><a
                                                                class="btn btn-compare btn-tooltip mb-10"
                                                                href="shop-compare.html" aria-label="Compare"></a><a
                                                                class="btn btn-quickview btn-tooltip"
                                                                aria-label="Quick view" href="#ModalQuickview"
                                                                data-bs-toggle="modal"></a>
                                                            </div> --}}
                                                            <div class="image-box">
                                                                {{-- <span
                                                                class="label bg-brand-2">-17%</span> --}}
                                                                <a
                                                                    href="{{ url(strtolower(str_replace(' ', '-', $cate->name) . '/' . str_replace('--', '-', $urltitle))) }}"><img
                                                                        src="{{ url('css/asset/image/' . $user->img1) }}"
                                                                        alt="{{ $user->img1 }}"></a>
                                                            </div>
                                                            <div class="info-right"><br>

                                                                <a class="color-brand-3 font-sm-bold"
                                                                    href="{{ url(strtolower(str_replace(' ', '-', $cate->name) . '/' . str_replace('--', '-', $urltitle))) }}">{{ $user->title }}</a>
                                                                {{-- <div class="rating"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><img
                                                                    src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                                    alt="Ecom"><span
                                                                    class="font-xs color-gray-500">(65)</span></div> --}}
                                                                {{-- <div class="price-info"><strong
                                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                    class="color-gray-500 price-line">$3225.6</span>
                                                            </div> --}}
                                                                {{-- <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                    href="shop-cart.html">Add To Cart</a></div> --}}
                                                                <div class="mt-20 box-btn-cart"><a
                                                                        class="btn btn-cart" href="#GetQuote"
                                                                        onclick="myFunction('{{ $user->title }}')"
                                                                        data-bs-toggle="modal">Get Quote</a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-20">
            <div class="text-center"><a href="#"><img
                        src="{{ url('css/newassets/imgs/page/uploadimage/lithiumbattery.webp') }}" alt="Lithium-ion Battery"></a>
            </div>
        </div>
        <section class="section-box mt-90 mb-50">
            <div class="container">
                <ul class="list-col-5">
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ url('css/newassets/imgs/template/delivery.svg') }}"
                                    alt="Ecom">
                            </div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                                <p class="font-sm color-gray-500">From all orders over $10</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ url('css/newassets/imgs/template/support.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                                <p class="font-sm color-gray-500">Shop with an expert</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ url('css/newassets/imgs/template/voucher.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                                <p class="font-sm color-gray-500">Refer a friend</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ url('css/newassets/imgs/template/return.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                                <p class="font-sm color-gray-500">Free return over $200</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ url('css/newassets/imgs/template/secure.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                                <p class="font-sm color-gray-500">100% Protected</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section-box box-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount
                        </h3>
                        <p class="font-lg color-white">Get E-mail updates about our latest shop and <span
                                class="font-lg-bold">special offers.</span></p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <div class="box-form-newsletter mt-15">
                            <form class="form-newsletter">
                                <input class="input-newsletter font-xs" value=""
                                    placeholder="Your email Address">
                                <button class="btn btn-brand-2">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="ModalFiltersForm" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <div class="modal-header">
                        <h5 class="modal-title color-gray-1000 filters-icon">Addvance Fillters</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-30">
                        <div class="row">
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Brands</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span
                                                class="text-small">Apple</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Samsung</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Baseus</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Remax</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Handtown</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Elecom</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Razer</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Auto Focus</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Nillkin</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Logitech</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">ChromeBook</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Special offers</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">On sale</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">FREE
                                                shipping</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Big deals</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Shop Mall</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-0 mt-40">Ready to ship in</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">1 business
                                                day</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span
                                                class="text-small">1&ndash;3 business days</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">in 1 week</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Shipping now</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Ordering options</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Accepts gift
                                                cards</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Customizable</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Can
                                                be gift-wrapped</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Installment
                                                0%</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-0 mt-40">Rating</h6>
                                <ul class="list-checkbox">
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(5
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(4
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(3
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(2
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ url('css/newassets/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(1
                                                star)</span></a></li>
                                </ul>
                            </div>
                            <div class="col-w-2">
                                <h6 class="color-gray-900 mb-0">Material</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Nylon (8)</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Tempered Glass
                                                (5)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Liquid
                                                Silicone Rubber (5)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Aluminium Alloy
                                                (3)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-20 mt-40">Product tags</h6>
                                <div><a class="btn btn-border mr-5" href="#">Games</a><a
                                        class="btn btn-border mr-5" href="#">Electronics</a><a
                                        class="btn btn-border mr-5" href="#">Video</a><a
                                        class="btn btn-border mr-5" href="#">Cellphone</a><a
                                        class="btn btn-border mr-5" href="#">Indoor</a><a
                                        class="btn btn-border mr-5" href="#">VGA Card</a><a
                                        class="btn btn-border mr-5" href="#">USB</a><a
                                        class="btn btn-border mr-5" href="#">Lightning</a><a
                                        class="btn btn-border mr-5" href="#">Camera</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto"
                            href="#">Apply Fillter</a><a class="btn font-sm-bold color-gray-500"
                            href="#">Reset Fillter</a></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="GetQuote" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        style="top: 10px;right: 10px;position: absolute;z-index: 123;"></button>
                    <div class="modal-body p-30">
                        <h4 class="mb-15 text-center" id="modal_body"> </h4>
                        <div class="row">
                            <form action="{{ url('get-quote') }}" method="post">
                                @csrf


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="fname form-control" type="text" name="name"
                                                placeholder="Full name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mno"
                                                placeholder="Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="cname"
                                                placeholder="Company Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control" placeholder="Message" name="megg"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="pname" value="" id="pname" />
                                <button type="submit" class="btn btn-cart">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Rentbuy" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        style="top: 10px;right: 10px;position: absolute;z-index: 123;"></button>
                    <div class="modal-body p-30">
                        <h4 class="mb-15 text-center">Rent & Buy this Product </h4>
                        <div class="row">
                            <form action="{{ route('rentdata') }}" method="post">


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="fname form-control" type="text" name="name"
                                                placeholder="Full name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                                  <div class="col-lg-12">
                                        <div class="form-group"> 
                                            <select required="required" class="form-control">
                                                <option label="Select Rent / Buy Used This Product"
                                                    value="" class="form-control"></option>

                                                <option value="1" class="form-control">Rent this Product
                                                </option>
                                                <option value="2" class="form-control">Buy Used Product
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mno"
                                                placeholder="Phone number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="cname"
                                                placeholder="Company Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control" placeholder="Message" name="megg"></textarea>
                                        </div>
                                    </div>
                      
                                </div>

                                <input type="hidden" name="pname" value="{{ $pt->title }}" />
                                <button type="submit" class="btn btn-cart">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')


    <script>
        $(document).ready(function() {
            var specificationClicked = false;

            $("#view-specification").click(function() {
                if (!specificationClicked) {
                    specificationClicked = true;
                    $('.nav-tabs-product a[href="#tab-specification"]').tab('show');
                    $('html, body').animate({
                        scrollTop: $(window).scrollTop() + 400
                    }, 1000);
                }
            });
        });
    </script>
    <script type="text/javascript">
        function myFunction(data) {

            var str = " Get Quote of " + data;
            $("#modal_body").html(str);
            document.getElementById("pname").value = data;
        }
    </script>
</body>

<!-- Mirrored from wp.alithemes.com/html/ecom/demo/shop-single-product-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 06:12:35 GMT -->

</html>
