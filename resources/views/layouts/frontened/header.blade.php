    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV4K7WG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

     <div class="topbar">
        <div class="container-topbar">
            <div class="menu-topbar-left d-none d-xl-block">
                <ul class="nav-small">
                    <li><a class="font-xs" href="{{route('about')}}">About Us</a></li>
                    <li><a class="font-xs" href="{{route('rental')}}">Rental</a></li>
                    <li><a class="font-xs" href="{{route('usedmhe')}}">Used MHE</a></li>
                    <li><a class="font-xs" href="{{route('attachments')}}">Attachments</a></li>

                </ul>
            </div>
            <div class="info-topbar text-center d-none d-xl-block"><a href="{{route('register')}}"><span class="font-xs color-brand-3">Register today and get Flat<span class="font-sm-bold color-success"> Rs. 1000 </span>off </span></a></div>
           <div class="menu-topbar-right"><span class="font-xs color-brand-3"> <div id="google_translate_button"></div></span>
                 
             </div>
                
                
            </div>
        </div>
    </div>
 <header class="header sticky-bar">
     <div class="container">
         <div class="main-header">
             <div class="header-left">
                 <div class="header-logo"><a class="d-flex justify-content-center" href="{{ url('') }}"><img alt="Mhe Bazar"
                             src="{{url('img/mhe-logo1.png')}}" style="width:50%"></a></div>
                 <div class="header-search">
                     <div class="box-header-search">
                         <form class="form-search" method="get" action="{{ route('search') }}" enctype="multipart/form-data">
                             @csrf
                             <div class="box-category">
                                 <select class="select-active select2-hidden-accessible" name="discount" id="discount">
                                     <option value="0">All categories</option>
                                     @foreach ($allcategory as $allcategorys)
                                             <option value="{{$allcategorys->id}}">{{$allcategorys->name}}</option> 
                                         @endforeach
                                 </select>
                             </div>
                             <div class="box-keysearch">
                                 <input class="form-control font-xs" type="text" id="searchbox" name="searchbox" value=""
                                     placeholder="Search for items" autocomplete="off">
                             </div>
                             <div id="searchrecord">

                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="header-nav">
                     <nav class="nav-main-menu d-none d-xl-block">
                         <ul class="main-menu">

                             <li><a href="{{route('sparep')}}">Spare Parts</a>
                                 
                             </li>
                             <li><a href="{{route('services')}}">Services</a>
                                 
                             </li>
                             
                            <li><a href="{{route('training')}}">Training</a></li>
                                     
                           
                             <li><a href="{{route('blog')}}">Blog</a></li>
                             <li><a href="{{route('contact')}}">Contact Us</a></li>
                         </ul>
                     </nav>
                     <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                             class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                 </div>
                 <div class="header-shop">
                     <div class="d-inline-block box-dropdown-cart"><span
                             class="font-lg icon-list icon-account"><span>Account</span></span>
                         <div class="dropdown-account">
                              @if (Auth::user())
                                     <ul>
                                          <li>
                                            @if(Auth::user()->role_as == 1)
                                             <a href="{{ route('dashboard') }}"
                                                 class="font-md-bold">Admin</a>
                                            @else
                                            <a href="{{ route('account') }}"
                                                 class="font-md-bold">{{ strtok(Auth::user()->name, ' ') }}</a>
                                            @endif    
                                            </li>
                                         <li><a href="">My Orders</a></li>
                                         <li><a href="">My Wishlist</a></li>
                                         <li><a href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}</a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                 class="d-none">
                                                 @csrf
                                             </form>
                                         </li>
                                     </ul>
                                 @else
                                     <ul>
                                         <li><a href="{{ route('login') }}">My Account</a></li>
                                         <li><a href="{{ route('register') }}">My Orders</a></li>
                                         <li><a href="{{ route('wishlist') }}">My Wishlist</a></li>
                                         <li><a href="{{ route('register') }}">Login / Signup</a></li>
                                     </ul>
                                 @endif
                         </div>
                     </div><a class="font-lg icon-list icon-wishlist"
                         href="{{ route('wishlist') }}"><span>Wishlist</span><span class="number-item font-xs">{{ $wishlistCount }}</span></a>
                     <div class="d-inline-block box-dropdown-cart"><span
                             class="font-lg icon-list icon-cart"><span>Cart</span><span
                                 class="number-item font-xs">{{$CartCount}}</span></span>
                         <div class="dropdown-cart">
                                 @if (count($cartItems) > 0)
                                     @foreach ($cartItems as $cartItem)
                                         <div class="item-cart mb-20">
                                             <div class="cart-image"><img
                                                     src="{{ url('css/asset/image/' . $cartItem->product->img1) }}"
                                                     alt="{{$cartItem->product->img1}}"></div>
                                             <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                                     href="">{{ $cartItem->product->title }}</a>
                                                 <p><span class="color-brand-2 font-sm-bold">{{ $cartItem->quantity }} x Rs {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $cartItem->product->price) }}</span></p>
                                             </div>
                                         </div>
                                     @endforeach
                                     <div class="border-bottom pt-0 mb-15"></div>
                                 <div class="cart-total">
                                    
                                     <div class="row mt-15">
                                         <div class="col-12 text-center"><a class="btn btn-cart w-auto"
                                                 href="{{route('cart')}}">View cart</a></div>
                                         {{-- <div class="col-6"><a class="btn btn-buy w-auto"
                                                 href="">Checkout</a></div> --}}
                                     </div>
                                 </div>
                                 @else
                                     <p class="text-center pb-10">No items in the cart</p>
                                 @endif
                             

                                 
                             </div>
                     </div>
                     <a class="font-lg icon-list icon-compare" href="{{route('compare')}}" title="Compare"><span>Compare</span><span
                                 class="number-item font-xs">
                                 @php
                                     $compareCount = count(session('compare', []));
                                 @endphp
                                 {{ $compareCount }}</span></a>
                 </div>
             </div>
         </div>
     </div>
 </header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="d-flex" href="{{ url('') }}">
                    <img alt="MHE Bazar" src="{{ url('img/mhe-logo1.png') }}" style="width:30%"></a></div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('sparep') }}">Spare Parts</a></li>
                           
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="{{route('training')}}">Training</a></li>
                            <li><a href="{{route('rental')}}">Rental</a></li>
                            <li><a href="{{route('usedmhe')}}">Used MHE</a></li>
                            <li><a href="{{route('attachments')}}">Attachments</a></li>

                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                   
                    @if (Auth::user())
                        <ul class="mobile-menu">
                            <li><a href="{{ route('account') }}"
                                    class="font-md-bold">{{ strtok(Auth::user()->name, ' ') }}</a></li>
                            <li><a href="">My Orders</a></li>
                            <li><a href="">My Wishlist</a></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    @else
                        <ul class="mobile-menu">
                            <li><a href="{{ route('login') }}">My Account</a></li>
                            <li><a href="{{ route('login') }}">My Orders</a></li>
                            <li><a href="{{ route('login') }}">My Wishlist</a></li>
                            <li><a href="{{ route('login') }}">Login / Signup</a></li>
                        </ul>
                    @endif
                </div>
               
                <div class="site-copyright color-gray-400 mt-30">Copyright 2024 &copy; MHE Bazar</a>
                </div>
            </div>
        </div>
    </div>
</div>
