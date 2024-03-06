<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">

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

        .zoomContainer {
            z-index: 1
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
                        <li><a class="font-xs color-gray-500" href="">Home</a></li>
                        <li><a class="font-xs color-gray-500" href="{{url('usedmhe')}}">Used MHE</a></li>
                        <li><a class="font-xs color-gray-1000">{{ $pt->title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <section class="section-box shop-template">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="gallery-image">
                            <div class="galleries">
                                <div class="detail-gallery">
                                    {{-- <label class="label">-17%</label> --}}
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
                        <h3 class="color-brand-3 mb-25">{{ $pt->title }}</h3><span class="bytext">by</span>
                       
                            <a class="byAUthor" href="{{route('vendorss',['slug' => 'mhe-bazar'])}}">MHE Bazar</a>
                       
                      

                        <div class="rating mt-5"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ url('css/newassets/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>

                        <div class="border-bottom pt-20 mb-40"></div>
                        {{-- <div class="box-product-price">
                            <h3 class="color-brand-3 price-main d-inline-block mr-10">$2856.3</h3>
                        </div> --}}
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
                        <a href=""><span class="btn btn-compare mr-5 opacity-100 transform-none"></span>
                            <span class="font-md color-gray-900">Buy used product</span></a>
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
                        <li><a href="#tab-reviews" data-bs-toggle="tab" role="tab" aria-controls="tab-reviews"
                                aria-selected="true">Reviews (2)</a></li>
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
                                        <td>{{ ucwords( $pt->title) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer</td>
                                        <td>{{ $pt->yearmg }}</td>
                                    </tr>
                                    <tr>
                                        <td>Capacity</td>
                                        <td><?php $tags_array = explode(',', $pt->cpacity);
                                        
                                        //To replace the array brackets so that the plain string is displayed
                                        $tags_array = str_replace(['[{"tags":"', '"}]', '[{"tags":null}]'], '', $tags_array);
                                        $searchForValue = ',';
                                        
                                        foreach ($tags_array as $tagg) {
                                            echo $tagg;
                                        }
                                        ?></td>
                                    </tr>
                                    <tr>
                                        <td>Serial No.</td>
                                        <td>{{ $pt->serialno }}</td>
                                    </tr>
                                    <tr>
                                        <td>Mast</td>
                                        <td>{{$pt->mast}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hydraulic</td>
                                        <td> {{$pt->hydraulic}}</td>
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
                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews">
                            <div class="comments-area">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="mb-30 title-question">Customer questions &amp; answers</h4>
                                        <div class="comment-list">
                                            <div class="single-comment justify-content-between d-flex mb-30 hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center"><img
                                                            src="{{ url('css/newassets/imgs/page/product/author-2.png') }}"
                                                            alt="Ecom"><a class="font-heading text-brand"
                                                            href="#">Sienna</a></div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="font-xs color-gray-700">December 4, 2022 at
                                                                    3:12 pm</span></div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 100%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus, suscipit exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi dignissimos
                                                            sequi
                                                            repudiandae minus ab deleniti totam officia id incidunt?<a
                                                                class="reply" href="#"> Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single-comment justify-content-between d-flex mb-30 ml-30 hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center"><img
                                                            src="{{ url('css/newassets/imgs/page/product/author-3.png') }}"
                                                            alt="Ecom"><a class="font-heading text-brand"
                                                            href="#">Brenna</a></div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="font-xs color-gray-700">December 4, 2022 at
                                                                    3:12 pm</span></div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus, suscipit exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi dignissimos
                                                            sequi
                                                            repudiandae minus ab deleniti totam officia id incidunt?<a
                                                                class="reply" href="#"> Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-comment justify-content-between d-flex hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center"><img
                                                            src="{{ url('css/newassets/imgs/page/product/author-4.png') }}"
                                                            alt="Ecom"><a class="font-heading text-brand"
                                                            href="#">Gemma</a></div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="font-xs color-gray-700">December 4, 2022 at
                                                                    3:12 pm</span></div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus, suscipit exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi dignissimos
                                                            sequi
                                                            repudiandae minus ab deleniti totam officia id incidunt?<a
                                                                class="reply" href="#"> Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="mb-30 title-question">Customer reviews</h4>
                                        <div class="d-flex mb-30">
                                            <div class="product-rate d-inline-block mr-15">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <h6>4.8 out of 5</h6>
                                        </div>
                                        <div class="progress"><span>5 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress"><span>4 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress"><span>3 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 45%"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                        </div>
                                        <div class="progress"><span>2 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                        </div>
                                        <div class="progress mb-30"><span>1 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div><a class="font-xs text-muted" href="#">How are ratings
                                            calculated?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-vendor" role="tabpanel" aria-labelledby="tab-vendor">
                            <div class="vendor-logo d-flex mb-30"><img
                                    src="{{ url('css/newassets/imgs/page/product/futur.png') }}" alt="">
                                <div class="vendor-name ml-15">
                                    <h6><a href="shop-vendor-single.html">Futur Tech.</a></h6>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div><span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="contact-infor mb-50">
                                <li><img src="{{ url('css/newassets/imgs/page/product/icon-location.svg') }}"
                                        alt=""><strong>Address:</strong><span> 5171 W Campbell Ave undefined
                                        Kent, Utah 53127 United States</span></li>
                                <li><img src="{{ url('css/newassets/imgs/page/product/icon-contact.svg') }}"
                                        alt=""><strong>Contact Seller:</strong><span> (+91) -
                                        540-025-553</span></li>
                            </ul>
                            <div class="d-flex mb-25">
                                <div class="mr-30">
                                    <p class="color-brand-1 font-xs">Rating</p>
                                    <h4 class="mb-0">92%</h4>
                                </div>
                                <div class="mr-30">
                                    <p class="color-brand-1 font-xs">Ship on time</p>
                                    <h4 class="mb-0">100%</h4>
                                </div>
                                <div>
                                    <p class="color-brand-1 font-xs">Chat response</p>
                                    <h4 class="mb-0">89%</h4>
                                </div>
                            </div>
                            <p class="font-sm color-gray-500 mb-15">
                                Noodles &amp; Company is an American fast-casual restaurant that offers international
                                and American noodle dishes and pasta in addition to soups and salads. Noodles &amp;
                                Company was founded in 1995 by Aaron Kennedy and is headquartered in Broomfield,
                                Colorado. The company went public in 2013 and recorded a $457 million revenue in 2017.In
                                late 2018, there were 460 Noodles &amp; Company locations across 29 states and
                                Washington, D.C.
                            </p>
                            <p class="font-sm color-gray-500">Proin congue dapibus rhoncus. Curabitur ipsum orci,
                                malesuada in porttitor a, porttitor quis diam. Nunc at arcu ut turpis facilisis
                                volutpat. Proin tristique, mauris non gravida dignissim, purus mauris malesuada tellus,
                                in tincidunt orci enim eget ligula. Quisque bibendum, ipsum id malesuada placerat, purus
                                felis vehicula risus, vel fringilla justo erat ullamcorper ligula. Fusce congue
                                ullamcorper ligula, at commodo turpis molestie vel.</p>
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
                                                onclick="myFunction('{{ $part->name }}')"
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

                                        
                                            @foreach($all as $user)
                                                
                                                <div class="swiper-slide">
                                                    <div class="card-grid-style-3" style="width:100%">
                                                        <div class="card-grid-inner">
                                                            
                                                            <div class="image-box">
                                                                
                                                                <a href="{{route('usedmhe.product',['title' => strtolower(preg_replace('/-+/','-',preg_replace('/[^A-Za-z0-9\-]/','-',str_replace(' ','-',str_replace(')','',$user->title))))), 'id' => $user->id])}}"><img src="{{ url('css/asset/image/' . $user->img1) }}" alt=""></a>
                                                            </div>
                                                            <div class="info-right"><br>

                                                                <a class="color-brand-3 font-sm-bold" href="{{route('usedmhe.product',['title' => strtolower(preg_replace('/-+/','-',preg_replace('/[^A-Za-z0-9\-]/','-',str_replace(' ','-',str_replace(')','',$user->title))))), 'id' => $user->id])}}">{{$user->title}}</a>
                                                                
                                                                
                                                                
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="#GetQuote" onclick="myFunction('{{$user->title}}')" data-bs-toggle="modal">Get Quote</a></div>

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


</html>