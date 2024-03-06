<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="{{url('css/asset/admin/assets/css/font-awesome.min.css')}}">

<link href="{{url('css/asset/admin/assets/css/material-dashboard.min6c54.css')}}" rel="stylesheet" />

<link href="{{url('css/asset/admin/assets/demo/demo.css')}}" rel="stylesheet" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    


<div class="wrapper">
@include('layouts.inc.sidebar')
   <div class="main-panel">

      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card ">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons"></i>
                    </div>
                    <h4 class="card-title">Global Sales by Top Locations</h4>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="table-responsive table-sales">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/US.png" < div>
                                </td>
                                <td>USA</td>
                                <td class="text-right">
                                  2.920
                                </td>
                                <td class="text-right">
                                  53.23%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/DE.png" < div>
                                </td>
                                <td>Germany</td>
                                <td class="text-right">
                                  1.300
                                </td>
                                <td class="text-right">
                                  20.43%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/AU.png" < div>
                                </td>
                                <td>Australia</td>
                                <td class="text-right">
                                  760
                                </td>
                                <td class="text-right">
                                  10.35%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/GB.png" < div>
                                </td>
                                <td>United Kingdom</td>
                                <td class="text-right">
                                  690
                                </td>
                                <td class="text-right">
                                  7.87%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/RO.png" < div>
                                </td>
                                <td>Romania</td>
                                <td class="text-right">
                                  600
                                </td>
                                <td class="text-right">
                                  5.94%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../assets/img/flags/BR.png" < div>
                                </td>
                                <td>Brasil</td>
                                <td class="text-right">
                                  550
                                </td>
                                <td class="text-right">
                                  4.34%
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-6 ml-auto mr-auto">
                        <div id="worldMap" style="height: 300px;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-rose" data-header-animation="true">
                    <div class="ct-chart" id="websiteViewsChart"></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom"
                        title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom"
                        title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Website Views</h4>
                    <p class="card-category">Last Campaign Performance</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-success" data-header-animation="true">
                    <div class="ct-chart" id="dailySalesChart"></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom"
                        title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom"
                        title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Daily Sales</h4>
                    <p class="card-category">
                      <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today
                      sales.
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-info" data-header-animation="true">
                    <div class="ct-chart" id="completedTasksChart"></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom"
                        title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom"
                        title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Completed Tasks</h4>
                    <p class="card-category">Last Campaign Performance</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">weekend</i>
                    </div>
                    <p class="card-category">Bookings</p>
                    <h3 class="card-title">184</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons text-danger">warning</i>
                      <a href="#pablo">Get More Space...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">equalizer</i>
                    </div>
                    <p class="card-category">Website Visits</p>
                    <h3 class="card-title">75.521</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">local_offer</i> Tracked from Google Analytics
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Revenue</p>
                    <h3 class="card-title">$34,245</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Followers</p>
                    <h3 class="card-title">+245</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">update</i> Just Updated
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h3>Manage Listings</h3>
            <br>
            <div class="row">
              <div class="col-md-4">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="../assets/img/card-2.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom"
                        title="View">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom"
                        title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom"
                        title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Cozy 5 Stars Apartment</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio"
                      where you can enjoy the main night life in Barcelona.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$899/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="../assets/img/card-3.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom"
                        title="View">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom"
                        title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom"
                        title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Office Studio</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where
                      you can enjoy the night life in London, UK.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$1.119/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> London, UK</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="../assets/img/card-1.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom"
                        title="View">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom"
                        title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom"
                        title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Beautiful Castle</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where
                      you can enjoy the main night life in Milan.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$459/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com/">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com/">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
</div>




<script src="{{url('css/asset/admin/assets/js/core/jquery.min.js')}}"></script>
<script src="{{url('css/asset/admin/assets/js/core/popper.min.js')}}"></script>
<script src="{{url('css/asset/admin/assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{url('css/asset/admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/moment.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/sweetalert2.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/jquery.validate.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/bootstrap-selectpicker.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/jquery.dataTables.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/jasny-bootstrap.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/fullcalendar.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/jquery-jvectormap.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/nouislider.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/core.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/arrive.min.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<script async defer src="{{url('css/asset/admin/assets/js/buttons.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/chartist.min.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/plugins/bootstrap-notify.js')}}"></script>

<script src="{{url('css/asset/admin/assets/js/material-dashboard.min6c54.js?v=2.2.2')}}" type="text/javascript"></script>
<script src="{{url('css/asset/admin/assets/demo/jquery.sharrre.js')}}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7973675fab632965","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>
</html>
