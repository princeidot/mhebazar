<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Top-Quality Material Handling Equipment Spare Parts - Order Now | MHEBazar" />
    <meta name="description"
        content="Looking for top-quality spare parts for your material handling equipment? Look no further than MHEBazar! Order now for unbeatable quality and service." />
     <link rel="canonical" href="https://www.mhebazar.in/spare-parts" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Top-Quality Material Handling Equipment Spare Parts - Order Now | MHEBazar</title>
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
@include('layouts.headtag')
<style>
    .info-right p {
            font-size: 16px;
    line-height: 24px;
    font-weight: 400;
    color: #425A8B !important;
    }
    .sticky-top{
        top:90px;
    }
    .bg-electronic{
        background-image: url(css/newassets/imgs/page/uploadimage/1-mhe-bazar-amc-and-cmc-service.webp);
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
                        <li><a class="font-xs color-gray-500">Spare Parts</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <h1 class="text-center">Spare Parts</h1>
                     <p class="font-md color-brand-3">At MHEBazar we understand the importance of high-quality spare parts in
                        maintaining the performance and reliability of your material handling equipment. We take great
                        pride in offering you the finest quality genuine parts that are guaranteed to keep your
                        equipment running smoothly and efficiently.</p>
                    <p class="font-md color-brand-3 pb-10">

                        We understand that downtime can have a significant impact on your business operations and
                        profitability. That's why we're committed to providing you with the surest way to avoid
                        unplanned downtime and achieve peak operational reliability. Our genuine parts are designed and
                        manufactured with the latest technology, ensuring that you get the best possible performance and
                        reliability from your equipment.</p>
                    <p class="font-md color-brand-3 pb-10">

                        Our extensive range of spare parts covers a variety of equipment brands and models, and we
                        guarantee that our parts are identical to the ones used in the original manufacturing of your
                        equipment, meeting or exceeding OEM standards. We take pride in offering you only the highest
                        quality genuine parts that are designed to deliver superior performance, efficiency, and
                        durability.</p>
                    <p class="font-md color-brand-3 pb-10">

                        Our team of experts is always available to assist you in identifying the right spare part for
                        your equipment and answering any questions you may have about its maintenance and repair. We are
                        committed to providing you with the best possible service and support to ensure that your
                        equipment performs at its best, minimizing downtime and maximizing productivity and
                        profitability.</p>
                    <p class="font-md color-brand-3 pb-30">

                        At MHEBazar, we are dedicated to offering you only the highest quality genuine parts that are
                        designed to keep your material handling equipment running smoothly and efficiently. As an
                        engineer, you can trust us to provide you with the latest technology and the best possible spare
                        parts that meet or exceed OEM standards. With our genuine parts, you can be confident that your
                        equipment will continue to perform at its best, ensuring uninterrupted productivity and
                        profitability for your business.
                    </p>
                    <div class="col-lg-3">
                        <div class="sidebar-ads">
                            <div class="bg-electronic">
                               
                                <p class="font-16 color-brand-3">Elevate your MHE
                                            performance with our CMC and AMC services.</p>
                                            <span class="big-deal mt-5">Explore Now</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="banner-top-gray-100">
                            <div class="banner-ads-top mb-30"><a href="#"><img
                                        src="{{ url('css/newassets/imgs/page/uploadimage/1269-269-px-1.webp') }}" alt=""></a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        
                        <div class="row mt-20 display-list">
                             @foreach ($sparepart as $attch)
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        
                                        <div class="image-box m-auto"><img
                                                    src="{{ url('img/spare-parts.webp') }}" alt="Spare Part">
                                        </div>
                                        <div class="info-right"><a>
                                                <h4 class="color-brand-3">{{ $attch->name }}</h4>
                                            </a>
                                            <p class="pt-20 pb-10 font-md color-brand-3">
                                                    @php
                                                        $des = strip_tags($attch->descrip);
                                                    @endphp

                                                    {{ Illuminate\Support\Str::limit($des, 200, '') }}
                                                    @if (strlen($des) > 200)
                                                        <span id="dots{{ $attch->id }}">...</span>
                                                        <span class="hide"
                                                            id="more{{ $attch->id }}">{{ substr($des, 200) }}</span>
                                                    @endif
                                                </p>


                                                <div class="mt-20">
                                                     <a class="btn btn-cart"
                                                        onclick="toggleDescription({{ $attch->id }})"
                                                        id="myBtn{{ $attch->id }}">Read More</a>
                                                    <a class="btn btn-cart ml-30" href="#GetQuote" onclick="myFunction('{{ $attch->name }}(Spare Parts)')" 
                                                    data-bs-toggle="modal">Get Quote</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                        
                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border mb-0 sticky-top">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Product Categories</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    @foreach ($allcategory as $category)
                                        @php 
                                        if($category->id == 9) {
                                            $url='electric-pallet-truck';
                                        }else{
                                            $url=strtolower(str_replace(' ','-',$category->name));
                                        }
                                       
                                        @endphp
                                      <li><a href="{{url($url)}}">{{$category->name}}</a></li>  
                                    @endforeach
                                    
                                    
                                    </ul>
                                {{-- <div>
                                    <div class="collapse" id="moreMenu">
                                        <ul class="list-nav-arrow">
                                            <li><a href="shop-grid.html">Home theater<span
                                                        class="number">98</span></a></li>
                                            <li><a href="shop-grid.html">Cameras &amp; drones<span
                                                        class="number">124</span></a></li>
                                            <li><a href="shop-grid.html">PC gaming<span class="number">56</span></a>
                                            </li>
                                            <li><a href="shop-grid.html">Smart home<span class="number">87</span></a>
                                            </li>
                                            <li><a href="shop-grid.html">Networking<span class="number">36</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="link-see-more mt-5" data-bs-toggle="collapse" href="#moreMenu"
                                        role="button" aria-expanded="false" aria-controls="moreMenu">See More</a>
                                </div> --}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.frontened.abovefooter')
    </main>

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
    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')
        <script type="text/javascript">
        function myFunction(data) {

            var str = " Get Quote of " + data;
            $("#modal_body").html(str);
            document.getElementById("pname").value = data;
        }
    </script>
     <script>
        function toggleDescription(id) {
            var dots = document.getElementById("dots" + id);
            var moreText = document.getElementById("more" + id);
            var btnText = document.getElementById("myBtn" + id);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
</body>


</html>
