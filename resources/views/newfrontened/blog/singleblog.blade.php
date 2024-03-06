<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="{{$blogs->description1}}" />
    <link rel="canonical" href="https://www.mhebazar.in/blog/{{$blogs->blog_url}}" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    
    <title>{{$blogs->blog_title}}</title>
    <meta name="title" content="{{$blogs->blog_title}}" />
    <style>
    h1{
    font-size: 32px;
    line-height: 41px;
    }
        .content-text li {
            list-style: disc outside none;
            margin-left: 2em;
            color: #0E224D;
            font-size: 16px;
            line-height: 24px;
        }

        .content-text ul {
            margin: 1em;
        }
        .box-slider-item.mb-30.sticky-top{
            top:100px;
            z-index:1;
        }
        .head.pb-15.border-brand-2 h5{
            font-size:18px;
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
                        <li><a class="font-xs color-gray-500" href="{{ route('blog') }}">Blog</a></li>
                        <li><a class="font-xs color-gray-500">{{ $blogs->blog_title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section-box shop-template mt-10 border-bottom   ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="row">
                            <div class="col-lg-12 mb-50 display-list"><a class="tag-dot font-xs"
                                    href="">{{ $blogs->category->name }}</a>
                                <h1 class="mt-15">{{ $blogs->blog_title }}</h1>
                                <div class="box-author mb-5 float-end">
                                    <span class="datepost color-gray-500 font-sm mr-30">{{ date('F Y', strtotime($blogs->updated_at)) }}</span>
                                    <span class="timeread color-gray-500 font-sm">{{ $blogs->reading_time }} Mins
                                        read</span>
                                </div>
                                <div class="image-feature"><img src="{{ url('css/asset/blogimg/' . $blogs->image1) }}"
                                        alt="{{ $blogs->image1 }}"></div>
                                <div class="content-text">
                                    {!! $blogs->description !!}
                                </div>
                                <div class="border-bottom-4 mb-20"></div>
                                <div class="row">
                                    <div class="col-lg-6">

                                    </div>
                                    <div class="col-lg-6 text-end">
                                        <div class="d-inline-block pt-5 pb-5">
                                            <div class="share-link"><span
                                                    class="font-md-bold color-brand-3 mr-15">Share</span>
                                                <a class="facebook hover-up"
                                                    href="https://www.facebook.com/sharer/sharer.php?u=https://www.mhebazar.in/blog/{{ $blogs->blog_url }}"
                                                    target="_blank"></a>
                                                <a class="twitter hover-up"
                                                    href="https://twitter.com/intent/tweet?text={{ $blogs->blog_title }}&amp;url=https://www.mhebazar.in/blog/{{ $blogs->blog_url }}"
                                                    target="_blank"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom-4 mt-20 mb-30"></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Product Categories</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    <li><a href="{{ route('battery') }}">Battery</a></li>
                                    <li><a href="{{ route('pallet') }}">Pallet</a></li>
                                    <li><a href="{{ route('hand-pallet-truck') }}">Pallet Truck</a></li>
                                    <li><a href="{{ route('mpt') }}">Manual Platform Trolly</a></li>
                                    <li><a href="{{ route('electric.ptruck') }}">Electric Pallet Truck (BOPT)</a></li>
                                    <li><a href="{{ route('stacker') }}">Stacker</a></li>
                                    <li><a href="{{ route('forklift') }}">Forklift</a></li>
                                    <li><a href="{{ route('reachtruck') }}">Reach Truck</a></li>
                                    <li><a href="{{ route('platformtruck') }}">Platform Truck</a></li>
                                    <li><a href="{{ route('twotruck') }}">Tow Truck</a></li>
                                </ul>
                                <div>
                                    <div class="collapse" id="moreMenu">
                                        <ul class="list-nav-arrow">
                                            <li><a href="{{ route('dock.leveller') }}">Dock Leveller</a></li>
                                            <li><a href="{{ route('sissorslift') }}">Scissors Lift</a></li>
                                            <li><a href="{{ route('rackingsystem') }}">Racking System</a></li>
                                            <li><a href="{{ route('orderpicker') }}">Order Picker</a></li>
                                            <li><a href="{{ route('vna') }}">VNA</a></li>
                                            <li><a href="{{ route('agv') }}">AGV</a></li>
                                            <li><a href="{{ route('containerhandler') }}">Container Handler</a></li>
                                            <li><a href="{{ route('safety') }}">Safety Solutions</a></li>
                                            <li><a href="{{ route('sparep') }}">Spare Parts</a></li>
                                            <li><a href="{{ route('ems') }}">Explosionproof MHE Solution</a></li>

                                        </ul>
                                    </div><a class="link-see-more mt-5" data-bs-toggle="collapse" href="#moreMenu"
                                        role="button" aria-expanded="false" aria-controls="moreMenu">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="box-slider-item mb-30 sticky-top">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Similar Category Product</h5>
                            </div>
                            <div class="content-slider">
                                <div class="box-swiper slide-shop">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                @foreach ($similiarproduct as $index => $cate)
                                                    @if ($index < 4)
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
                                                        <div
                                                            class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                            <div class="image-box mw-84">
                                                                @if (!$cate->old == null)
                                                                    <a
                                                                        href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                                    @else
                                                                        <a
                                                                            href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                                @endif
                                                                <img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                                    alt="{{ $cate->img1 }}"></a>
                                                            </div>
                                                            <div class="info-right">
                                                                @if (!$cate->old == null)
                                                                    <a class="color-brand-3 font-sm" href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                                    @else
                                                                    <a class="color-brand-3 font-sm" href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                                @endif
                                                                {{ $mvtitle }} {{ $maintitle }}
                                                                {{ $cate->capacity }}
                                                                {{ $cate->model }}</a>

                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        <div class="swiper-slide">
                                                @foreach ($similiarproduct as $index => $cate)
                                                    @if ($index >= 4)
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
                                                        <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                            <div class="image-box mw-84">
                                                                @if (!$cate->old == null)
                                                                    <a
                                                                        href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                                    @else
                                                                        <a
                                                                            href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                                @endif
                                                                <img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                                    alt="{{ $cate->img1 }}"></a>
                                                            </div>
                                                            <div class="info-right">
                                                                @if (!$cate->old == null)
                                                                    <a class="color-brand-3 font-sm" href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                                    @else
                                                                    <a class="color-brand-3 font-sm" href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                                @endif
                                                                {{ $mvtitle }} {{ $maintitle }}
                                                                {{ $cate->capacity }}
                                                                {{ $cate->model }}</a>

                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            


                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller">
                                    </div>
                                    <div
                                        class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


        <section class="section-box shop-template mt-30">
        <div class="container">
          <h3 class="color-brand-3">Related Blogs</h3>
          <div class="row mt-30">
            @if ($similiarblog->isEmpty())
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                <p>No Related Blog</p>
            </div>  
                    
            @else       

            @foreach ($similiarblog as $ablog)
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                <div class="card-grid-style-1">
                    <div class="image-box"><a href="{{ route('blog.single', $ablog->blog_url) }}">
                        <img src="{{ url('blogimg/' . $ablog->image1) }}" alt="{{$ablog->image1}}"></a>
                    </div>                
                    <a class="color-gray-1100" href="{{ route('blog.single', $ablog->blog_url) }}">
                    <h4 class="mb-10">{{ $ablog->blog_title }}</h4></a>
                    <div class="row mt-20">
                        <div class="col-12">
                            <span class="color-gray-500 font-xs">{{ $ablog->reading_time }}<span> Mins read</span></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @endif
        
            
            
          </div>
         
        </div>
      </section>


    </main>



    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')

</body>


</html>
