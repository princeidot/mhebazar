<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Buy Quality Used Material Handling Equipment - MHEBazar" />
    <meta name="description"
        content="Looking for reliable and affordable used MHE? Look no further than MHEBazar! Buy quality used material handling equipment and streamline your operations today." />
    <link rel="canonical" href="https://www.mhebazar.in/used-mhe" /> 
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Buy Quality Used Material Handling Equipment - MHEBazar</title>
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
    @include('layouts.headtag')
    <style>
        h1 {
            font-size: 40px;
        }

        p {
            margin-bottom: 1rem;
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
                        <li><a class="font-xs color-gray-500">Used MHE</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row mb-30">
                    <div class="center-block">
                        <h1 class="title mb-1">Used Material Handling Equipment</h1>
                        <p class="font-md color-brand-3">At our company, we understand that purchasing new material handling equipment
                            can
                            be a significant investment for your business. That's why we offer a wide selection of
                            quality
                            used MHEs at competitive prices to help you save money without sacrificing quality or
                            performance.</p>
                        <p class="mg-bm-50 font-md color-brand-3">

                            Our inventory includes various types of used forklifts, including electric, propane, diesel,
                            and
                            gas forklifts, each with different load capacities, lift heights, and features. We also
                            offer
                            used pallet jacks, order pickers, reach trucks, and other equipment to meet your specific
                            needs.
                        </p>
                        <p class="mg-bm-50 font-md color-brand-3">

                            When you buy used MHE from us, our team of skilled mechanics will thoroughly inspect the
                            machine, test its performance, and make any necessary repairs before delivering it to you.
                            We
                            stand behind our equipment and offer a warranty to ensure that you are satisfied with your
                            purchase.</p>
                        <p class="mg-bm-50 font-md color-brand-3">

                            We also buy used material handling equipment from companies that no longer need them or are
                            upgrading to newer models. Our team can evaluate the condition and market value of your used
                            equipment and offer you a competitive price for it.</p>
                        <p class="mg-bm-50 font-md color-brand-3">

                            At our company, we value customer satisfaction, and our team is always ready to help you
                            find
                            the right equipment for your business. By clicking on the "Get Quote" button, you can
                            provide us
                            with the necessary information about your requirement, and our sales representatives will
                            contact you promptly to provide you with a customized solution that meets your needs and
                            budget.
                        </p>
                        <p class="mg-bm-20 font-md color-brand-3">

                            If you're looking for reliable, high-quality used material handling equipment, look no
                            further
                            than our company. We offer competitive prices, expert advice, and excellent customer service
                            to
                            help you find the right equipment for your business.
                        </p>
                        
                        <div class="col-md-3 m-auto">
                            <a href="{{ route('register') }}" style="font-size:15px"
                                class="btn btn-cart text-center">Submit Used MHE Details</a>
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
                                        @php
                                            if (!$cate->subcategory == null) {
                                                    $urlcategory = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->subcategory->title)));
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
                                            <span class="label bg-brand-2">Used</span> 
                                          
                                            <a href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">
                                                <img src="{{ url('css/asset/image/' . $cate->img1) }}" alt="{{$cate->img1}}"></a>
                                        </div>
                                        <div class="info-right">
                                            {{-- <a class="font-xs color-gray-500">{{$categoryname->name}}</a> --}}
                                            <br>
                                                <a class="color-brand-3 font-sm-bold"
                                                href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">{{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</a>
                                            
                                            
                                            <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                    href="{{ route('usedmhe.product', ['title' => $urlcategory, 'slug' => $urltitle]) }}">View Details</a></div>
                                           
                                            
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
                        <form action="{{ route('rentaldata') }}" method="post">
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
                                        <input type="text" class="form-control" name="email" placeholder="Email" />
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
