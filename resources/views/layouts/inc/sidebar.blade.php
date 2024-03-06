<div class="sidebar" data-color="rose" data-background-color="black"
    data-image="{{ url('css/asset/admin/assets/img/sidebar-1.jpg') }}">

    <div class="logo"><a href="{{ route('dashboard') }}" class="simple-text logo-mini">
            MB
        </a>
        <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
            MHE Bazar
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ url('img/faviicon-32x32.jpeg') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        Admin
                        <!--{{ Auth::user()->name }}-->
                        {{-- <b class="caret"></b> --}}
                    </span>
                </a>
                {{-- <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            @if (Auth::user()->role_as == 1)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">image</i>
                        <p> All Form
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse {{ in_array(Route::currentRouteName(), ['dashboard.pqf', 'dashboard.rbf', 'dashboard.cf', 'dashboard.rentf']) ? 'show' : '' }}"
                        id="pagesExamples">
                        <ul class="nav">

                            <li class="nav-item {{ Request::is('dashboard/product-quote-form') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('dashboard.pqf') }}">
                                    <span class="sidebar-mini"> QF </span>
                                    <span class="sidebar-normal">Quote Form </span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('dashboard/rental-and-buy-form') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('dashboard.rbf') }}">
                                    <span class="sidebar-mini"> RBF </span>
                                    <span class="sidebar-normal"> Rent & Buy Form </span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('dashboard/rental-form') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('dashboard.rentf') }}">
                                    <span class="sidebar-mini"> RF </span>
                                    <span class="sidebar-normal"> Rental Form </span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('dashboard/conatct-form') ? 'active' : '' }}">
                                <a class="nav-link " href="{{ route('dashboard.cf') }}">
                                    <span class="sidebar-mini"> CF </span>
                                    <span class="sidebar-normal">Contact Form </span>
                                </a>
                            </li>
                            {{--  <li class="nav-item ">
                            <a class="nav-link" href="pages/login.html">
                                <span class="sidebar-mini"> LP </span>
                                <span class="sidebar-normal">  </span>
                            </a>
                        </li>
                       <li class="nav-item ">
                            <a class="nav-link" href="pages/register.html">
                                <span class="sidebar-mini"> RP </span>
                                <span class="sidebar-normal"> Register Page </span>
                            </a>
                        </li> 
                        <li class="nav-item ">
                            <a class="nav-link" href="pages/lock.html">
                                <span class="sidebar-mini"> LSP </span>
                                <span class="sidebar-normal"> Lock Screen Page </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="pages/user.html">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal"> User Profile </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="pages/error.html">
                                <span class="sidebar-mini"> E </span>
                                <span class="sidebar-normal"> Error Page </span>
                            </a>
                        </li> --}}
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">account_circle</i>
                        <p> Registerd User
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse {{ in_array(Route::currentRouteName(), ['dashboard.user','dashboard.vendor']) ? 'show' : '' }}" id="componentsExamples">
                        <ul class="nav">
                            {{-- <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                                <span class="sidebar-mini"> MLT </span>
                                <span class="sidebar-normal"> Multi Level Collapse
                                    <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="componentsCollapse">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#0">
                                            <span class="sidebar-mini"> E </span>
                                            <span class="sidebar-normal"> Example </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                            <li class="nav-item {{ Request::is('dashboard/user') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('dashboard.user') }}">
                                    <span class="sidebar-mini"> B </span>
                                    <span class="sidebar-normal"> User </span>
                                </a>
                            </li>
                           <li class="nav-item {{ Request::is('dashboard/allvendor') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('dashboard.vendor') }}">
                                    <span class="sidebar-mini"> AV </span>
                                    <span class="sidebar-normal"> All Vendor </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">person_add</i>
                        <p> Add Sub Admin
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse {{ in_array(Route::currentRouteName(), ['dashboard.adduser', 'adduser.create', 'adduser.index']) ? 'show' : '' }}"
                        id="formsExamples">
                        <ul class="nav">
                            <li class="nav-item {{ Request::is('dashboard/adduser/create') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('adduser.create') }}">
                                    <span class="sidebar-mini"> ASA </span>
                                    <span class="sidebar-normal"> Add Sub Admin</span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('dashboard/adduser') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('adduser.index') }}">
                                    <span class="sidebar-mini"> LSA </span>
                                    <span class="sidebar-normal"> List Sub ADmin </span>
                                </a>
                            </li>
                           {{-- <li class="nav-item ">
                                <a class="nav-link" href="forms/validation.html">
                                    <span class="sidebar-mini"> VF </span>
                                    <span class="sidebar-normal"> Validation Forms </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="forms/wizard.html">
                                    <span class="sidebar-mini"> W </span>
                                    <span class="sidebar-normal"> Wizard </span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </li>
            @endif
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#mapsExamples" aria-expanded="false">
                    <i class="material-icons">place</i>
                    <p> Add Product
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['saddproduct','viewallpro']) ? 'show' : '' }}" id="mapsExamples" >
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('subadmin/addproduct') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('saddproduct')}}">
                                <span class="sidebar-mini"> AP </span>
                                <span class="sidebar-normal"> Add Product </span>
                            </a>
                        </li>
                         @if (Auth::user()->role_as == 2)
                        <li class="nav-item ">
                            <a class="nav-link" href="">
                                <span class="sidebar-mini"> LOP </span>
                                <span class="sidebar-normal"> List OF Product </span>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item {{ Request::is('dashboard/allproductview') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('viewallpro')}}">
                                <span class="sidebar-mini"> AP </span>
                                <span class="sidebar-normal">All Product </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-background"></div>
</div>
