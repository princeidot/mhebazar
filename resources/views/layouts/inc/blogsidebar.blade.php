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
                <img src="{{ url('css/asset/admin/assets/img/faces/avatar.jpg') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        Blog
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

            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#mapsExamples" aria-expanded="false">
                    <i class="material-icons">place</i>
                    <p> Blog
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['admin.blog', 'admin.addblog', 'admin.listblog', 'admin.editblog']) ? 'show' : '' }}"
                    id="mapsExamples">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('dashboard/addblog') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.addblog') }}">
                                <span class="sidebar-mini"> AP </span>
                                <span class="sidebar-normal"> Add Blog </span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('dashboard/listblog') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.listblog') }}">
                                <span class="sidebar-mini"> LOP </span>
                                <span class="sidebar-normal"> List OF Blog </span>
                            </a>
                        </li>



                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#mapsExamples1" aria-expanded="false">
                    <i class="material-icons">uploadfile</i>
                    <p> Meta Description
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['meta.data', 'meta.dataedit', 'meta.notdata']) ? 'show' : '' }}"
                    id="mapsExamples1">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('dashboard/meta-data') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('meta.data') }}">
                                <span class="sidebar-mini"> LS </span>
                                <span class="sidebar-normal"> List Product </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('dashboard/meta-not-present') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('meta.notdata') }}">
                                <span class="sidebar-mini"> MOP </span>
                                <span class="sidebar-normal"> Meta not present </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" href="#mapsExamples2" aria-expanded="false">
                     <i class="material-icons">uploadfile</i>
                    <p> Category Content
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['footerlist','footerlists','footerliste','footerlistes']) ? 'show' : '' }}"
                    id="mapsExamples2">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('dashboard/footer-content/main-category') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('footerlist') }}">
                                <span class="sidebar-mini"> LMS </span>
                                <span class="sidebar-normal"> List Main Category </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('dashboard/footer-content/sub-category') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('footerlists') }}">
                                <span class="sidebar-mini"> LSC </span>
                                <span class="sidebar-normal"> List Sub Category </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            
            
        </ul>
    </div>
    <div class="sidebar-background"></div>
</div>
