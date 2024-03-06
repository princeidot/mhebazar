<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title"
        content="Best Price Very Narrow Aisle Truck in India | Buy Very Narrow Aisle Truck at MHEBazar" />
    <meta name="description"
        content="Maximize your storage capacity with MHE VNA (Very Narrow Aisle) trucks. Designed to operate in the tightest spaces, they offer exceptional maneuverability and efficiency. Order now for unparalleled material handling in narrow aisles." />
    <link rel="canonical" href="https://www.mhebazar.in/very-narrow-aisle-truck" /> 
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Best Price Very Narrow Aisle Truck in India | Buy Very Narrow Aisle Truck at MHEBazar</title>
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
    @include('layouts.headtag')
    <style>
        h1 {
            font-size: 40px;
        }

        p {
            margin-bottom: 1rem;
        }

        .content ul {
            columns: 3;
            list-style: auto;
            margin-left: 40px;
            margin-bottom: 20px;
            font-size: 13px;
        }
        #blurtext {
    color: transparent;
    text-shadow: 0 0 5px #000;
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
                        <li><a class="font-xs color-gray-500">Very Narrow Aisle Truck</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row mb-30">
                    <div class="center-block">
                        <h1 class="title mb-1">Very Narrow Aisle Truck</h1>
                        <div class="content">

                            <p>The MHE Bazar is a one-stop shop for all your material handling equipment needs. It
                                provides a wide range of products from forklifts to VNA (Very Narrow Aisle Truck) and
                                more. With the help of the MHE Bazar, you can find the right material handling equipment
                                for your warehouse or factory quickly and conveniently.

                            </p>
                            <p>VNA (Very Narrow Aisle Truck) is an important part of any warehouse or factory's material
                                handling system. These trucks are designed to navigate tight spaces, making it easier to
                                move materials around in confined areas. With VNA trucks, warehouses can increase their
                                efficiency and productivity while reducing costs associated with manual labor. The MHE
                                Bazar offers a wide range of VNA trucks that are perfect for any size operation.

                            </p>
                            <p>Are you looking for more information about this product? If so, then you have come to the
                                right place. By clicking on the “Get Quote” button, you can send us your enquiry and we
                                will contact you soon to understand your application. We are committed to providing the
                                best customer service experience and helping our customers find the perfect product for
                                their needs.

                            </p>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="row">
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
                                                    $urlcategory = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->subcategory->title)));
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
                                                <img src="{{ url('css/asset/image/' . $cate->img1) }}" alt="{{$cate->img1}}"></a>
                                        </div>
                                        <div class="info-right">
                                            <a class="font-xs color-gray-500">{{$cate->category->name}}</a><br>
                                                <a class="color-brand-3 font-sm-bold"
                                                href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">{{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</a>
                                            
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
                                                <a class="btn btn-cart" href="{{ route('allproduct', ['slug' => $urlcategory, 'category' => $urltitle]) }}">
                                                View Details</a></div>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                            




                        </div>
                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border mb-0">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Product Categories</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    @foreach ($allcategory as $category)
                                        @php
                                            if ($category->id == 9) {
                                                $url = 'electric-pallet-truck';
                                            } else {
                                                $url = strtolower(str_replace(' ', '-', $category->name));
                                            }

                                        @endphp
                                        <li><a href="{{ url($url) }}">{{ $category->name }}</a></li>
                                    @endforeach


                                </ul>

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
                        <form action="{{ url('getdata') }}" method="post">
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
    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')
    <script type="text/javascript">
        function myFunction(data) {

            var str = " Get Quote of " + data;
            $("#modal_body").html(str);
            document.getElementById("pname").value = data;
        }
    </script>
</body>


</html>
