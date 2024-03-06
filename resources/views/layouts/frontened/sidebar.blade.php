<div class="sidebar-left"><a class="btn btn-open" href="#"></a>
  
    <ul class="menu-texts menu-close">
        <li class="has-children"><a href="{{ route('battery') }}"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/battery.webp')}}" alt="battery-icon"></span><span
                    class="text-link">Battery</span></a>
            <ul class="sub-menu">
                <a href="{{ route('battery') }}"><span class="pl-20 subtitle">Battery</span></a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '1')
                        <li><a
                                href="{{ route('battery.category', strtolower(str_replace(' ', '-', $other->title)) . '-' . $other->id) }}">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </li>
        <li class="has-children"><a href="{{route('pallet')}}"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/pallet.webp')}}" alt="pallet"></span><span
                    class="text-link">Pallet</span></a>
            <ul class="sub-menu">
                <a href="{{route('pallet')}}"><span class="pl-20 subtitle">Pallet</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '19')
                        <li><a
                                href="{{ route('pallet.product', strtolower(str_replace(' ', '-', $other->title)) . '-' . $other->id) }}">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </li>
        <li class="has-children">
            <a href="{{ route('hand-pallet-truck') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/pallet-truck.webp')}}" alt="Pallet Truck"></span>
                <span class="text-link">Pallet Truck</span></a>
            <ul class="sub-menu">
                <a href="{{route('hand-pallet-truck')}}"><span class="pl-20 subtitle">Pallet Truck</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '2')
                        <li><a href="{{ route('hand.product', strtolower(str_replace(' ', '-', $other->title)) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
         <li><a href="{{ route('mpt') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/manual-platform-trolly.webp')}}" alt="Manual Platform Trolly"></span><span class="text-link">Manual
                    Platform Trolly</span></a>
           
        </li>
         <li><a href="{{ route('electric.ptruck') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/electric-pallet-truck-bopt.webp')}}" alt="Electric Pallet Truck"></span><span
                    class="text-link">Electric Pallet Truck (BOPT)</span></a>
            
        </li>
        <li class="has-children"><a href="{{ route('stacker') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/stacker.webp')}}" alt="Stacker"></span><span
                    class="text-link">Stacker</span></a>
            <ul class="sub-menu">
                <a href="{{route('stacker')}}"><span class="pl-20 subtitle">Stacker</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '3')
                        <li><a href="{{ route('stacker.product', strtolower(str_replace(' ', '-', $other->title)) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
       <li class="has-children"><a href="{{ route('forklift') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/forklift.webp')}}" alt="Forklift"></span><span
                    class="text-link">Forklift</span></a>
            <ul class="sub-menu">
                <a href="{{route('forklift')}}"><span class="pl-20 subtitle">Forklift</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '12')
                        <li><a href="{{ route('forklift.product', strtolower(str_replace(' ', '-', str_replace('(', '', str_replace(')', '', $other->title)))) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('reachtruck') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/reach-truck.webp')}}" alt="Reach Truck"></span><span
                    class="text-link">Reach Truck</span></a>
            <ul class="sub-menu">
                <a href="{{route('reachtruck')}}"><span class="pl-20 subtitle">Reach Truck</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '10')
                        <li><a href="{{ route('reachtruck.product', strtolower(str_replace(' ', '-', str_replace('(', '', str_replace(')', '', $other->title)))) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('platformtruck') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/platform-truck.webp')}}" alt="Platform Truck"></span><span
                    class="text-link">Platform Truck</span></a>
            <ul class="sub-menu">
                <a href="{{route('platformtruck')}}"><span class="pl-20 subtitle">Platform Truck</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '5')
                        <li><a href="{{ route('platformtruck.product', strtolower(str_replace(' ', '-', str_replace('(', '', str_replace(')', '', $other->title)))) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li class="has-children"><a href="{{ route('twotruck') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/tow-truck.webp')}}" alt="Tow Truck"></span><span class="text-link">Tow
                    Truck</span></a>
            <ul class="sub-menu">
                <a href="{{route('twotruck')}}"><span class="pl-20 subtitle">Tow Truck</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '6')
                        <li><a href="{{ route('twotruck.product', strtolower(str_replace(' ', '-', str_replace('(', '', str_replace(')', '', $other->title)))) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </li>
        <li class="has-children"><a href="{{ route('dock.leveller') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/dock-leveler.webp')}}" alt="Dock Leveller"></span><span
                    class="text-link">Dock Leveller</span></a>
            <ul class="sub-menu">
                <a href="{{route('dock.leveller')}}"><span class="pl-20 subtitle">Dock Leveller</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '7')
                        <li><a href="{{ route('dock.product', strtolower(str_replace(' ', '-', str_replace('(', '', str_replace(')', '', $other->title)))) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
       
        
        <li class="has-children"><a href="{{ route('sissorslift') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/scissors-lift.webp')}}" title="Scissors Lift" alt="Scissors Lift"></span><span
                    class="text-link">Scissors Lift</span></a>
            <ul class="sub-menu">
                <a href="{{route('sissorslift')}}"><span class="pl-20 subtitle">Scissors Lift</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '8')
                        <li><a href="{{ route('sissorslift.product', strtolower(str_replace(' ', '-', str_replace('(', '', str_replace(')', '', $other->title)))) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li class="has-children"><a href="{{route('rackingsystem')}}"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/racking-system.webp')}}" Title="Racking System" alt="racking-system"></span><span
                    class="text-link">Racking System</span></a>
            <ul class="sub-menu">
                <a href="{{route('rackingsystem')}}"><span class="pl-20 subtitle">Racking System</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '11')
                        <li><a
                                href="{{route('rackingsystem.product',strtolower(str_replace(' ', '-',$other->title)). '-' . $other->id)}}">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </li>
        <li class="has-children"><a href="{{route('orderpicker')}}" Title="Order Picker"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/order-picker.webp')}}" alt="order-picker.webp" Title="Order Picker"></span><span
                    class="text-link">Order Picker</span></a>
                    @foreach($head as $cate1)
           @if(empty($cate1->cate_id == '15'))
           
           
           @else
            <ul class="sub-menu">
                @foreach ($head as $other)
                    @if ($other->cate_id == '15')
                        <li><a
                                href="">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
           @endif
           @endforeach
        </li>
        <li class=""><a href="{{route('vna')}}"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/vna.webp')}}" Title="VNA" alt="vna.webp"></span><span
                    class="text-link">VNA </span></a>
                    @foreach($head as $cate1)
           @if(empty($cate1->cate_id == '16'))
           
           
           @else
            <ul class="sub-menu">
                @foreach ($head as $other)
                    @if ($other->cate_id == '16')
                        <li><a
                                href="">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
             @endif
           @endforeach
        </li>
        <li class=""><a href="{{route('agv')}}"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/agv.webp')}}" Title="AGV" alt="agv.webp"></span><span
                    class="text-link">AGV </span></a>
                    @foreach($head as $cate1)
           @if(empty($cate1->cate_id == '17'))
           
           
           @else
            <ul class="sub-menu">
                @foreach ($head as $other)
                    @if ($other->cate_id == '17')
                        <li><a href="{{route('agv')}}">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
             @endif
           @endforeach
        </li>
        <li class="has-children"><a href="{{ route('containerhandler') }}"><span class="img-link"><img
                        src="{{url('css/newassets/imgs/icon/container-handler.webp')}}" Title="Container Handler" alt="Container Handler"></span><span
                    class="text-link">Container Handler</span></a>
            <ul class="sub-menu">
                <a href="{{route('containerhandler')}}"><span class="pl-20 subtitle">Container Handler</span</a>
                @foreach ($head as $other)
                    @if ($other->cate_id == '13')
                        <li><a href="{{ route('containerhandler.product', strtolower(str_replace(' ', '-', str_replace('(', '', str_replace(')', '', $other->title)))) . '-' . $other->id) }}"
                                class="desktop-categoryLink">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
         <li class=""><a href="{{route('safety')}}" Title="Safety Solutions"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/safety-solutions.webp')}}" Title="Safety Solutions" alt="safety-solutions.webp"></span><span
                    class="text-link">Safety Solutions </span></a>
                    @foreach($head as $cate1)
           @if(empty($cate1->cate_id == '20'))
           
           
           @else
            <ul class="sub-menu">
                @foreach ($head as $other)
                    @if ($other->cate_id == '20')
                        <li><a
                                href="">{{ $other->title }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
             @endif
           @endforeach
        </li>
       <li class=""><a href="{{route('sparep')}}"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/spares.webp')}}" alt="spares.webp" title="Spare Parts"></span><span
                    class="text-link">Spare Parts </span></a>
           <!--         @foreach($head as $cate1)-->
           <!--@if(empty($cate1->cate_id == '18'))-->
           
           
           <!--@else-->
           <!-- <ul class="sub-menu">-->
               
           <!--             <li><a-->
           <!--                     href="{{route('sparep')}}">Spare Parts</a>-->
           <!--             </li>-->
                  

           <!-- </ul>-->
           <!--  @endif-->
           <!--@endforeach-->
        </li>
          <li class=""><a href="{{route('ems')}}"><span class="img-link">
                    <img src="{{url('css/newassets/imgs/icon/Explosionproof-MHE-Solution.png')}}" alt="Explosionproof-MHE-Solution.png" title="Explosionproof MHE Solution"></span><span
                    class="text-link">Explosionproof MHE Solution </span></a>
                    </li>
    </ul>
</div>
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


                            <li><a href="{{route('blog')}}">Blog</a</li>
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
