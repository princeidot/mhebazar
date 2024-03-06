<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
  
    @php
        if (!$pt->subcategory == null) {
            $urlcategory = strtolower(str_replace(' ', '-',str_replace(array( '(', ')' ),'',$pt->subcategory->title)));
        } else {
        
            $urlcategory = strtolower(str_replace(' ', '-', $pt->category->name));
        }
        if (!$pt->vendor == null) {
            $vname = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $pt->userData->brandname)));
        } else {
           
             $vname = 'mhe-bazar';
        }
        if (!$pt->capacity == null) {
      $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($pt->title)))) . '-' . strtolower(str_replace(' ', '-',rtrim($pt->capacity))).'-' .strtolower(str_replace(' ', '-',rtrim($pt->model))) . '-' . $pt->id;           }
         else{
          $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($pt->title)))) . '-' . strtolower(str_replace(' ', '-', rtrim($pt->model))) . '-' .$pt->id;
           }
            $maintile=strtolower($pt->title);
                                               $maintitle=ucwords($maintile);
                                                $vendorname=str_replace('-',' ',$vname);
                                                $mvtitle=ucwords($vendorname);
    @endphp
    @if($pt->old==null)
    <link rel="canonical"
       href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
       @else
         <link rel="canonical"
       href="{{ url('used-mhe/'.$urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
       @endif
        <title>Buy {{$mvtitle}} {{ $maintitle }} {{$pt->capacity}} {{$pt->model}} Online Best Price in India</title>
        <meta name="description" content="{{$pt->meta_desc}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}" />
    <meta property="og:image" content="{{ url('css/asset/image/' . $pt->img1) }}" />
    <meta property="og:title" content="Buy {{$mvtitle}} {{ $maintitle }} {{$pt->capacity}} {{$pt->model}} Online Best Price in India" />

    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
   @include('layouts.headtag')
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

        .zoomContainer {
            z-index: 1
        }

        #blurtext {

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

        .vendorimage {
            width: 30%;
            max-width: 115px;
            min-width: 115px;
        }
        #view-specification{
            cursor: pointer
        }
         #view-specification:hover{
            text-decoration:underline;
        }
         .course-outer {
            min-width: 280px;
            max-width: 280px;
            width: 280px;
            height: 333px;
            margin: 20px auto;
            border-radius: 10px;
            position: relative;
        }

        .course-inner {
            background-color: #FFFFFF;
            box-shadow: 0 3px 6px rgb(0 0 0 / 26%);
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: 10px;
            color: #3455A5;
            transition: all .3s ease-in;
        }

        .hero-course-wrapper {
            height: 333px;
        }

        .course-des {
            padding-left: 15px;
            padding-top: 17px;
        }

        .course-des h2 {
            font-size: 18px;
            width: 95%;
            line-height: 1.4;
            margin-bottom: 10px;
            color: #191919;
        }

        .course-des p {
            font-size: 13px;
            width: 95%;
            line-height: 1.4;
            max-height: 50px;
            overflow: hidden;
            color: #707070;
            --max-lines: 3;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: var(--max-lines);
        }

        .hero-call-btn {
            position: absolute;
            left: 50%;
            top: 90%;
            transform: translate(-50%, -50%);
            width: 90%;
        }

        .btn-icon-right {
            position: absolute;
            top: 50%;
            left: 90%;
            transform: translate(-50%, -50%);
        }

        .hero-btn-right-icon {
            background: #032d60;
            color: #ffffff;
            position: relative;
            border-radius: 10px;
            text-align: left;
            width: 95%;
        }

        /*End Slider*/
              .hero-btn-right-icon.btn:hover {
                color: #fff;
                        }
                    h1{
                             font-size: 32px;
                              line-height: 41px;
                              font-weight: bold;
                        }
                          .slick-list.draggable{
    height: auto!important;
  }
      .slider-nav-thumbnails {
            display: flex;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;            
            gap: 10px;        
        }

        /* Adjustments for mobile view */
        @media (max-width: 768px) {
            .slider-nav-thumbnails {
                flex-direction: row;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                gap: 5px;
                padding-bottom: 10px;
            }

            .item-thumb {
                flex: 0 0 auto;
                /* Reset the flex basis */
                width: auto;
                /* Reset width */
            }
        }

        .slick-list.draggable {
            height: auto !important;
        }

        @media(max-width: 449.98px) {
            .slider-nav-thumbnails .slick-slide .item-thumb {
                height: 109px;
                line-height: 100%;
                padding: 5px;
            }

            .slider-nav-thumbnails .slick-track .slick-slide {
                width: auto !important;
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
                        <li><a class="font-xs color-gray-500" href="{{ url('') }}">Home</a></li>
                        @php
                        if($pt->cate_id==9){
                         $urlcategory='electric-pallet-truck';
                             }elseif (!$pt->subcategory == null) {
                            $urlcategory = strtolower(str_replace(' ', '-', $pt->category->name)).'/'.strtolower(str_replace(' ', '-', str_replace(array( '(', ')' ),'',$pt->subcategory->title))).'-'.$pt->subcategory->id;
                        } else {
                        
                            $urlcategory = strtolower(str_replace(' ', '-', $pt->category->name));
                        }
                        
                        
                                            
                             $maintile=strtolower($pt->title);
                                               $ptmaintitle=ucwords($maintile);
                                               if($pt->userData==null){
                                               $ptmvtitle='MHE Bazar';
                                               }else{
                                                $vendorname=str_replace('-',' ',$pt->userData->brandname);
                                                $ptmvtitle=ucwords($vendorname);
                                                }
                        @endphp
                        <li><a class="font-xs color-gray-500" href="{{ url($urlcategory) }}">
                             @if(!$pt->subcategory == null) {{ $pt->subcategory->title }} @else{{$pt->category->name}}@endif
                             </a>
                        </li>
                        <li><a class="font-xs color-gray-1000">{{$ptmvtitle}} {{ $ptmaintitle }} {{$pt->capacity}} {{$pt->model}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">

                {{-- ------ Alert Megg -------- --}}

                @include('newfrontened.temptime.alert')

                {{-- ------- End Alert --------- --}}
                <div class="row">

                    <div class="col-lg-6">
                        <div class="gallery-image">
                            <div class="galleries">
                                <div class="detail-gallery">
                                    @if(!$pt->old==null)
                                    <label class="label">Used</label>
                                    @endif
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
                                                <div class="item-thumb"><img
                                                        src="{{ url('css/asset/image/' . $item) }}"
                                                        alt="product image"></div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="color-brand-3 mb-25">{{$ptmvtitle}} {{ $ptmaintitle }} {{$pt->capacity}} {{$pt->model}}</h1>
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4 col-sm-3 mb-mobile"><span
                                    class="bytext color-gray-500 font-xs font-medium">by</span>
                                @if ($pt->vendor == null)
                                    <a class="byAUthor" href="{{ route('vendorss', ['slug' => 'mhe-bazar']) }}">MHE
                                        Bazar</a>
                                @else
                                    <a class="byAUthor"
                                        href=" {{ route('vendorss', ['slug' => strtolower(str_replace(' ', '-', $pt->userData->brandname))]) }} ">
                                        {{ $pt->userData->brandname }}</a>
                                @endif
                                <div class="rating mt-5"><img
                                        src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img
                                        src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img
                                        src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img
                                        src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img
                                        src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
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
                                <h3 class="color-brand-3 price-main d-inline-block mr-10">Rs.
                                    {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $pt->price) }}
                                </h3>
                            </div>
                        @else
                            <div class="box-product-price">
                                <h3 class="color-brand-3 price-main d-inline-block mr-10">Rs. <span
                                        id="blurtext">********</span></h3>
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
                                        onclick="myFunction('{{$ptmvtitle}} {{ $ptmaintitle }} {{$pt->capacity}} {{$pt->model}} @if(!$pt->old == null) (Used) @endif')" data-bs-toggle="modal">Get
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
                                    <td>Model</td>
                                    <td>{{ $pt->model }}</td>
                                </tr>

                            </table>
                            <a id="view-specification" class="pt-10" style="float:right;">View More
                                Specification</a>


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
                                        <td>{{ ucwords($pt->title) }}</td>
                                    </tr>
                                    @if(!$pt->manufacturer == null)
                                    <tr>
                                        <td>Manufacturer</td>
                                        <td>{{ $pt->manufacturer }}</td>
                                    </tr>
                                    @endif
                                     
                                     @if(!$pt->capacity == null)
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
                                    @endif
                                    
                                      @if(!$pt->operator_type == null)
                                    <tr>
                                        <td>Operator Type</td>
                                        <td>{{ $pt->operator_type }}</td>
                                    </tr>
                                    @endif
                                    
                                    @if(!$pt->width_over_forks == null)
                                    <tr>
                                        <td>Width Over Forks</td>
                                        <td>
                                            
                                          <?php $tags_array = explode(',', $pt->width_over_forks);
                                        
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
                                    @endif
                                     
                                    <tr>
                                        <td>Model No</td>
                                        <td> <?php $tags_array = explode(',', $pt->model);
                                        
                                        //To replace the array brackets so that the plain string is displayed
                                        $tags_array = str_replace(['[{"tags":"', '"}]', '[{"tags":null}]'], '', $tags_array);
                                        $json1 = json_encode($tags_array);
                                        $new1 = str_replace(str_split('\\/:*?"<>|+-'), '', $json1);
                                        $name2 = str_replace('[', '', str_replace(']', '', $new1));
                                        $searchForValue = ',';
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
                            @if (!$pt->userData == null)
                                <div class="vendor-logo d-flex mb-30">
                                    <div class="vendorimage">
                                        @if ($pt->userData->profile == null)
                                            <div id="profileImage">{{ mb_substr($pt->userData->brandname, 0, 1) }}</div>
                                        @else
                                            <img src="{{ url('public/profile/' . $pt->userData->profile) }}"
                                                alt="">
                                        @endif
                                    </div>
                                    <div class="vendor-name ml-15 m-auto">
                                        <h6>
                                            <a
                                                href="{{ route('vendorss', ['slug' => strtolower(str_replace(' ', '-', $pt->userData->brandname))]) }}">{{ $pt->userData->brandname }}</a>
                                        </h6>

                                    </div>
                                </div>
                                <p class="font-sm color-gray-500 mb-15">
                                    {{$pt->userData->descp}}
                                </p>
                            @else
                                <div class="vendor-logo d-flex mb-30">
                                    <div class="vendorimage">
                                        <img src="{{ url('img/mhe-logo1.png') }}" alt="">
                                    </div>
                                    <div class="vendor-name ml-15 m-auto">
                                        <h6>
                                            <a class="byAUthor"
                                                href="{{ route('vendorss', ['slug' => 'mhe-bazar']) }}">MHE Bazar</a>
                                        </h6>
                                    </div>
                                </div>
                                <p class="font-sm color-gray-500 mb-15">
                                    MHE Bazar is part of Greentech India Material Handling LLP (GTIMH), a company
                                    dedicated to providing top-quality solutions for material handling in various
                                    industries. One of our most popular offerings is the Lithium-Ion Conversion Kit for
                                    Lead-Acid Batteries. This product allows you to upgrade your lead-acid batteries to
                                    more efficient and cost-effective lithium-ion batteries, offering superior
                                    performance, a longer lifespan, fast charging, more productivity, and requiring less
                                    maintenance.
                                    <br>
                                    In addition to the conversion kit, we also offer a wide range of high-quality
                                    lithium-ion batteries that are optimized for use in a variety of material handling
                                    equipment, including forklifts, scissors lifts, reach trucks, BOPTs, stackers, golf
                                    carts, cranes, and electric street sweepers. So, far MHE Bazar has successfully
                                    converted and installed a Li-ion conversion kit for all almost brands covering all
                                    types of MHEs.
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
                                                    @foreach ($similiar as $cate)
                                                        @php
                                                            if (!$cate->subcategory == null) {
                                                                $urlcategory = strtolower(str_replace(' ', '-',str_replace(array( '(', ')' ),'',$cate->subcategory->title)));
                                                            } else {
                                                                $urlcategory = strtolower(str_replace(' ', '-', $cate->category->name));
                                                            }
                                                            if ($cate->vendor == null) {
                                                                $vname = 'mhe-bazar';
                                                            } else {
                                                                $vname = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->userData->brandname)));
                                                            }
                                                            if (!$cate->capacity == null) {
                                                                 $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($cate->title)))) . '-' . strtolower(str_replace(' ', '-',rtrim($cate->capacity))).'-' .strtolower(str_replace(' ', '-',rtrim($cate->model))) . '-' . $cate->id;
                                                            } else {
                                                                $urltitle = $vname . '-' . strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->title))) . '-' . strtolower(str_replace(' ', '-', $cate->model)) . '-' . $cate->id;
                                                            }
                                                 $maintile=strtolower($cate->title);
                                               $maintitle=ucwords($maintile);
                                                $vendorname=str_replace('-',' ',$vname);
                                                $mvtitle=ucwords($vendorname);
                                                        @endphp

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
                                                                            aria-label="Add To Cart"
                                                                            href="{{ route('cart.add', ['productId' => $cate->id]) }}"></a>
                                                                    @else
                                                                        <a class="btn btn-cartview btn-tooltip"
                                                                            aria-label="Add To Cart"
                                                                            href="{{ route('register') }}"></a>
                                                                    @endif
                                                                </div>
                                                                <div class="image-box">
                                                                    @if($cate->old==null)
                                                                    
                                                                     <a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                                         @else
                                                                         
                                                                   <span class="label bg-brand-2">Used</span> 
                                                                     <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                                        @endif
                                                                        <img
                                                                            src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                                            alt="{{$cate->img1}}"></a>
                                                                </div>
                                                                <div class="info-right"><br>
                                                                     @if($cate->old==null)
                                                                    <a class="color-brand-3 font-sm-bold" href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                                        @else
                                                                       <a class="color-brand-3 font-sm-bold" href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">  
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
                                                                            onclick="myFunction('{{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}} @if(!$pt->old == null) (Used) @endif')"
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
                                            <a><img src="{{ url('img/spare-parts.webp') }}" alt="spare-parts"></a>
                                        </div>
                                        <div class="info-right text-center" style="height:104px;"><a
                                                class="color-brand-3 font-md-bold" href="#GetQuote"
                                                onclick="myFunction('{{ $part->name }} Spare Parts')"
                                                data-bs-toggle="modal">{{ $part->name }}</a>

                                            <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="#GetQuote"
                                                    onclick="myFunction('{{ $part->name }} Spare Parts')"
                                                    data-bs-toggle="modal">Get
                                                    Quote</a></div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="border-bottom pt-20 mb-40"></div>
                        @if($pt->cate_id==12)
                         <section class="section-box ">
                             <div class="container">
                <div class="head-main bd-gray-200">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5">
                            <h3 class="mb-5">FORKLIFT ATTACHMENTS</h3>
                            <p class="font-base color-gray-500">Special products in
                                this month.</p>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="box-button-slider">
                                <div class="swiper-button-next swiper-button-next-group-4">
                                </div>
                                <div class="swiper-button-prev swiper-button-prev-group-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tab-flash-all" role="tabpanel"
                        aria-labelledby="tab-all">
                        <div class="row">
                            <div class="swiper-container swiper-group-4">
                                <div class="swiper-wrapper pt-5">
                                    @foreach ($allfattachment as $attach)
                                        <div class="swiper-slide">
                                            <div class="col-lg-12">
                                                <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                                    <div class="card-grid-inner">

                                                        <div class="image-box"><a href=""><img
                                                                    src="{{ url('css/asset/image/' . $attach->img) }}"
                                                                    alt="{{ $attach->img }}"></a>
                                                        </div>

                                                        <div class="info-right text-center">
                                                            <a class="color-brand-3 font-sm-bold" href="#GetQuote"
                                                                data-bs-toggle="modal"
                                                                onclick="myFunction('{{ ucfirst($attach->name) }} (FORKLIFT ATTACHMENTS)')">{{ $attach->name }}</a>

                                                        </div>


                                                        <div class="mt-20 box-add-cart" style="display: block;">
                                                            <a class="btn btn-cart" href="#GetQuote"
                                                                onclick="myFunction('{{ ucfirst($attach->name) }} (FORKLIFT ATTACHMENTS)')"
                                                                data-bs-toggle="modal">Get
                                                                Quote</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                          </section>
                         <div class="border-bottom pt-20 mb-40"></div>
                         @endif
                         
                        <h4 class="color-brand-3">Recently viewed items</h4>
                        <div class="row mt-40">
                            @if ($recentProductsCount !== 0 && $recentProductsCount !== 1)
                                @foreach ($recentlyviewedproduct as $cate)
                                    @php
                                        if (!$cate->subcategory == null) {
                                           $urlcategory = strtolower(str_replace(' ', '-',str_replace(array( '(', ')' ),'',$cate->subcategory->title)));
                                        } else {
                                            $urlcategory = strtolower(str_replace(' ', '-', $cate->category->name));
                                        }
                                        if ($cate->vendor == null) {
                                            $vname = 'mhe-bazar';
                                        } else {
                                            $vname = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->userData->brandname)));
                                        }
                                        if (!$cate->capacity == null) {
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
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card-grid-style-2 card-grid-none-border hover-up">
                                            <div class="image-box">
                                                @if($cate->old==null)
                                                <a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                    @else
                                                
                                                <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                @endif    
                                                    <img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                        alt="{{ $cate->img1 }}"></a>
                                                            
                                            </div>
                                            <div class="info-right"><span class="font-xs color-gray-500">
                                                    <a
                                                        href="{{ url(strtolower(str_replace(' ', '-', $cate->category->name))) }}">{{ $cate->category->name }}</span></a><br>
                                                  @if($cate->old==null)
                                                <a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}"
                                                    class="color-brand-3 font-xs-bold">
                                                    @else
                                                     <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}" class="color-brand-3 font-xs-bold">
                                                @endif 
                                                    {{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</a>

                                                <div class="pt-10">
                                                    <a class="btn btn-gray" href="#GetQuote"
                                                        onclick="myFunction('{{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}} @if(!$pt->old == null) (Used) @endif')"
                                                        data-bs-toggle="modal">Get
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
                                            @foreach ($all as $cate)
                                                @php
                                                    if (!$cate->subcategory == null) {
                                                        $urlcategory = strtolower(str_replace(' ', '-',str_replace(array( '(', ')' ),'',$cate->subcategory->title)));
                                                    } else {
                                                        $urlcategory = strtolower(str_replace(' ', '-', $cate->category->name));
                                                    }
                                                    if ($cate->vendor == null) {
                                                        $vname = 'mhe-bazar';
                                                    } else {
                                                        $vname = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->userData->brandname)));
                                                    }
                                                    if (!$cate->capacity == null) {
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
                                                <div class="swiper-slide">
                                                    <div class="card-grid-style-3" style="width:100%">
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
                                                                            aria-label="Add To Cart"
                                                                            href="{{ route('cart.add', ['productId' => $cate->id]) }}"></a>
                                                                    @else
                                                                        <a class="btn btn-cartview btn-tooltip"
                                                                            aria-label="Add To Cart"
                                                                            href="{{ route('register') }}"></a>
                                                                    @endif
                                                                </div>
                                                            <div class="image-box">
                                                                @if(!$cate->old==null)
                                                                 <span
                                                                class="label bg-brand-2">used</span> 
                                                                <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                                @else
                                                                <a href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                                @endif    
                                                                    <img
                                                                        src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                                        alt="{{ $cate->img1 }}"></a>
                                                            </div>
                                                            <div class="info-right"><br>
                                                                 @if(!$cate->old==null)
                                                                 <a class="color-brand-3 font-sm-bold" href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                                     @else
                                                                <a class="color-brand-3 font-sm-bold"
                                                                    href="{{ url($urlcategory . '/' . str_replace('--', '-', $urltitle)) }}">
                                                                    @endif
                                                                    {{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</a>
                                                                    
                                                            @if(!$cate->price==null)
                                                            <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main">Rs. {{ preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,",$cate->price) }}</strong>
                                                            </div>
                                                            @else
                                                             <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main">Rs. <span id="blurtext">********</span> </strong>
                                                            </div>
                                                            @endif    
                                                                    
                                                                    
                                                                    
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
                                                                        onclick="myFunction(' {{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}} @if(!$pt->old == null) (Used) @endif')"
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
                        src="{{ url('css/newassets/imgs/page/uploadimage/lithiumbattery.webp') }}"
                        alt="Lithium-ion Battery"></a>
            </div>
        </div>
        
        <section>
            <div class="container deal-block">
                <div class="head-main mt-20">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <h3 class="mb-5">Register for our training programs</h3>
                          
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="box-button-slider">
                                <div class="swiper-button-next swiper-button-next-group-4">
                                </div>
                                <div class="swiper-button-prev swiper-button-prev-group-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container swiper-group-4">
                    
                    <div class="swiper-wrapper pt-5">
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Construction Safety training ')" class="course-inner"
                                    >
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/construction-safety-audit-thumbnail.jpg') }}"
                                                alt="construction-safety-audit-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Construction Safety</h2>
                                            <p >Construction is one of the areas of employment where hazardous conditions
                                                are part of the everyday working environment.</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right">
                                                    <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></button></p>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Electrical Safety training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/electrical-high-voltage-safety-thumbnail.jpg') }}"
                                                alt="electrical-high-voltage-safety-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Electrical Safety</h2>
                                            <p>The majority of us use electricity every day on the job and this
                                                familiarity
                                                can create a false sense of security. Let us bear in mind that
                                                electricity
                                                is always a potential </p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"> <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Fire Safety training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/fire-safety-thumbnail.jpg') }}"
                                                alt="fire-safety-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Fire Safety</h2>
                                            <p>Fire safety training educates a set of practices &amp; procedures to
                                                minimize
                                                the destruction caused by fire hazards. </p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"> <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Chemical Safety training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/chemical-safety-thumbnail.jpg') }}"
                                                alt="chemical-safety-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Chemical Safety</h2>
                                            <p>Disaster in a chemical industry is very rare, but negligence could result
                                                in
                                                devastating consequences.</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"> <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Hand Tool Safety training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/hand-tool-safety-thumbnail.jpg') }}"
                                                alt="hand-tool-safety-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Hand Tool Safety</h2>
                                            <p>Use of tools makes many tasks easier. However, the same tools that assist
                                                us,
                                                if improperly used or maintained, can create significant hazards in our
                                                work
                                                areas.</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"><img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Working at height training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/working-at-height-thumbnail.jpg') }}"
                                                alt="working-at-height-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Working at Height</h2>
                                            <p>From use of simple stepladders to safety harnesses, there is an imminent
                                                risk
                                                of a fall which may cause personal injury while performing work at
                                                height.
                                            </p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"><img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Confined Space Entry Safety training ')"
                                    class="course-inner" tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/confined-space-entry-thumbnail.jpg') }}"
                                                alt="confined-space-entry-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Confined Space Entry</h2>
                                            <p>It is critically important that the people involved in making confined
                                                space
                                                entries are qualified and experienced and therefore trained in the
                                                associated hazards,</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"><img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Controlling Infections in Workplace Safety training ')"
                                    class="course-inner" tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/controlling-infections-in-workplace-and-covid-19-precautions-thumbnail.jpg') }}"
                                                alt="controlling-infections-in-workplace-and-covid-19-precautions-thumbnail"
                                                class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Controlling Infections in Workplace &amp; COVID 19 Precautions</h2>
                                            <p>With the wild spread of the pandemic COVID-19, safety has now reached the
                                                pinnacle of priority for every individual.</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right">
                                                   <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </section>
        
        
           @include('layouts.frontened.abovefooter')
      

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
                                            <input type="text" class="form-control" name="lcation"
                                                placeholder="Location" required/>
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
                                                <option label="Select Rent / Buy Used This Product" value=""
                                                    class="form-control"></option>

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
