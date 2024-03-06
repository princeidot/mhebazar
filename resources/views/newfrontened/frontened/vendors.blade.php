  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Vendors listing" />
    <meta name="description"
        content="Discover trusted MHE vendors offering competitive prices and premium quality products at MHEBazar. Elevate your operations today!" />
   <link rel="canonical" href="https://www.mhebazar.in/vendors-listing" /> 
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Vendors listing</title>
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
  @include('layouts.headtag')
    <style>
    
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
.card-vendor .card-top-vendor{
    height:90px;
}
.card-vendor .card-top-vendor .card-top-vendor-left img{
    max-height:60px;
}
h1{
        font-size: 33px;
        
}
@media (max-width: 767.98px){
    h1{
        font-size: 20px;
    line-height: 30px;
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
                        <li><a class="font-xs color-gray-500">Vendors listing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <section class="section-box shop-template mt-0">
        <div class="container">
          
          <div class="row align-items-center">
            <div class="col-lg-6 mb-30">
            <h1>Vendors at MHEBazar</h1>            
            </div>
            <div class="col-lg-6 mb-30 text-end"><a class="btn btn-buy w-auto font-sm-bold" href="{{route('register')}}">Become a vendor</a></div>
          </div>
          <div class="border-bottom pt-0 mb-30"></div>
          <div class="row">
            <div class="col-lg-9 order-first order-lg-last">
              {{-- <div class="box-filters mt-0 pb-5 border-bottom">
                <div class="row">
                  <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm" data-bs-toggle="modal">All Fillters</a></div>
                  <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span class="font-sm color-gray-900 font-medium border-1-right span">Showing 1&ndash;16 of 17 results</span>
                    <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Sort by:</span>
                      <div class="dropdown dropdown-sort border-1-right">
                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false">Latest added</button>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort" style="margin: 0px;">
                          <li><a class="dropdown-item active" href="#">Latest added</a></li>
                          <li><a class="dropdown-item" href="#">Oldest added</a></li>
                          <li><a class="dropdown-item" href="#">Comments added</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Show</span>
                      <div class="dropdown dropdown-sort border-1-right">
                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>30 items</span></button>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                          <li><a class="dropdown-item active" href="#">30 items</a></li>
                          <li><a class="dropdown-item" href="#">50 items</a></li>
                          <li><a class="dropdown-item" href="#">100 items</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="d-inline-block"><a class="view-type-grid mr-5 active" href="shop-vendor-list.html"></a><a class="view-type-list" href="#"></a></div>
                  </div>
                </div>
              </div> --}}
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-vendor">
                    <div class="card-top-vendor">
                      <div class="card-top-vendor-left">
                        <a href="{{route('vendorss',['slug' => 'mhe-bazar'])}}"><img src="{{url('img/mhe-logo1.png')}}" class="mt-2 mb-3" alt="MHE Bazar"></a>
                        
                      </div>
                      <div class="card-top-vendor-right"><a class="btn btn-gray" href="{{route('vendorss',['slug' => 'mhe-bazar'])}}">{{$mhe}} Items</a>
                        <p class="font-xs color-gray-500 mt-10"><a href="{{route('vendorss',['slug' => 'mhe-bazar'])}}">MHE Bazar</a> </p>
                      </div>
                    </div>
                    <div class="card-bottom-vendor">
                                          <p class="font-sm color-gray-500 mb-10"><a class="btn btn-cart"
                                                          href="{{route('contact')}}"
                                                          >Contact to
                                                         MHE Bazar</a></p>
                                          <p class="font-sm color-gray-500"><a class="btn btn-cart"
                                                          href="{{ route('vendorss', ['slug' => 'mhe-bazar']) }}">View
                                                          Products</a></p>
                                      </div>
                  </div>
                </div>
                @foreach ($vendor as $ven)
                @if (!$ven->total == 0)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-vendor">
                    <div class="card-top-vendor">
                      <div class="card-top-vendor-left m-auto">
                        {{-- <img src="assets/imgs/page/vendor/futur.png" alt="Ecom"> --}}
                        @if($ven->profile==null)
                        <div id="profileImage"><a href="{{route('vendorss',['slug' => strtolower(str_replace(' ','-',$ven->brandname))])}}" style="color:white">{{mb_substr($ven->brandname, 0, 1);}}</a></div>
                        @else
                        <a href="{{route('vendorss',['slug' => strtolower(str_replace(' ','-',$ven->brandname))])}}"><img src="{{ url('public/profile/' . $ven->profile) }}" alt="$ven->brandname"></a>
                        @endif                      
                      </div>
                      <div class="card-top-vendor-right"><a class="btn btn-gray" href="{{route('vendorss',['slug' => strtolower(str_replace(' ','-',$ven->brandname))])}}">{{$ven->total}} Items</a>
                        <p class="font-xs color-gray-500 mt-10"><a href="{{route('vendorss',['slug' => strtolower(str_replace(' ','-',$ven->brandname))])}}">{{$ven->brandname}}</a></p>
                      </div>
                    </div>
                    <div class="card-bottom-vendor">
                                                  <p class="font-sm color-gray-500 mb-10"><a class="btn btn-cart"
                                                          href="#GetQuote"
                                                          onclick="myFunction('{{ $ven->brandname }} (Vendor Details)')"
                                                          data-bs-toggle="modal">Contact to
                                                          {{ strtok($ven->brandname, ' ') }}</a></p>
                                                  <p class="font-sm color-gray-500"><a class="btn btn-cart"
                                                          href="{{ route('vendorss', ['slug' => strtolower(str_replace(' ', '-', $ven->brandname))]) }}">View
                                                          Products</a></p>
                                              </div>
                  </div>
                </div>
                @endif
                 
                @endforeach
                
                
              </div>
              
            </div>
            <div class="col-lg-3 order-last order-lg-first">
              <div class="sidebar-border">
                <div class="sidebar-head">
                  <h6 class="color-gray-900">Product Category</h6>
                </div>
                <div class="sidebar-content">
                  <ul class="list-nav-arrow">
                    @foreach ($category as $cate)
                    @if (!$cate->total==0)
                    @php
                                         if($cate->id==9)
                                         {
                                             $urlcategory='electric-pallet-truck';
                                         }else{
                                            $urlcategory=strtolower(str_replace(' ', '-',$cate->name));
                                         }
                                         @endphp
                      <li><a href="{{url($urlcategory)}}">{{$cate->name}}<span class="number">{{$cate->total}}</span></a></li>
                    @endif
                    
                    @endforeach
                    
                   
                  </ul>
                  
                </div>
              </div>
             
              <div class="box-slider-item">
                <div class="head pb-15 border-brand-2 mb-20">
                  <h5 class="color-gray-900">Make money with us</h5>
                </div>
                <div class="content-slider mb-50">
                  <div class="footer">
                    <ul class="menu-footer">
                      <li><a href="#">Open shop on Ecom</a></li>
                      <li><a href="#">Sell Your Services on Ecom</a></li>
                      <li><a href="#">Sell on Ecom Business</a></li>
                      <li><a href="#">Sell Your Apps on Ecom</a></li>
                      <li><a href="#">Become an Affilate</a></li>
                      <li><a href="#">Advertise Your Products</a></li>
                      <li><a href="#">Sell-Publish with Us</a></li>
                    </ul>
                  </div>
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
                      <h4 class="mb-15 text-center" id="modal_body"></h4>
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
                                            <input type="text" class="form-control" name="lcation" placeholder="Location" required="">
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

              var str = " Get Details of " + data;
              $("#modal_body").html(str);
              document.getElementById("pname").value = data;
          }
      </script>
</body>


</html>
