<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro-bs4/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 08:16:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/faviicon-32x32.jpeg') }}">
    <link rel="icon" type="image/png" href="{{ url('img/faviicon-32x32.jpeg') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        MHE Bazar Dashboard All Vendor
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="canonical" href="" />
    <meta itemprop="name" content="MHE Bazar">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{ url('css/asset/admin/assets/css/font-awesome.min.css') }}">
    <link href="{{ url('css/asset/admin/assets/css/material-dashboard.min6c54.css?v=2.2.2') }}" rel="stylesheet" />
    <link href="{{ url('css/asset/admin/assets/demo/demo.css') }}" rel="stylesheet" />
<style>
     .table .disabled-sorting:after,  .table .disabled-sorting:before {
    display: none!important;
}
    </style>
</head>

<body class="">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="wrapper ">

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
                        <a class="navbar-brand" href="javascript:;">Meta Data</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">

                        @include('layouts.inc.navbar')
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-icon card-header-rose">
                                        <div class="card-icon">
                                            <i class="material-icons">assignment</i>
                                        </div>
                                        <h4 class="card-title ">All Vendor</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatables"
                                                class="table table-striped table-no-bordered table-hover"
                                                cellspacing="0" width="100%" style="width:100%">
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <th style="width:60px;">ID</th>
                                                        <th class="disabled-sorting">Name</th>
                                                       <th class="disabled-sorting">Brand Name</th>
                                                        <th class="disabled-sorting">Products Count</th> 
                                                        <th class="disabled-sorting text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no=1;@endphp
                                                    @foreach ($maincate as $blog)
                                                   
                                                        <tr>

                                                            <td>
                                                                {{ $no++ }}
                                                            </td>
                                                            <td>
                                                                <a>{{ $blog->userData->name }}</a>
                                                              
                                                            </td>
                                                            <td>
                                                                <a>{{ $blog->brandname }}</a>
                                                              
                                                            </td>
                                                           
                                                             <td class="text-center">{{$blog->product_count}}</td> 
                                                            <td class="td-actions text-right">
                                                                <button type="button" rel="tooltip" title=""
                                                                    class="btn btn-primary btn-link btn-sm"
                                                                    data-original-title="Show Products">
                                                                    <a href="{{ route('dashboard.userproduct', ['id' => $blog->userid]) }}"> 
                                                                    <i class="material-icons">edit</i>
                                                                    </a>
                                                                    
                                                                </button>
                                                                <button type="button" rel="tooltip" title=""
                                                                    class="btn btn-primary btn-link btn-sm"
                                                                    data-original-title="Edit Profile">
                                                                    <a href="{{ route('dashboard.vendoredit', $blog->userid) }}"> 
                                                                        <i class="material-icons">assignmentind</i>
                                                                    </a>                                                                    
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>






            @include('layouts.inc.footer')
        </div>
    </div>


    <script src="{{ url('css/asset/admin/assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ url('css/asset/admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ url('css/asset/admin/assets/js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ url('css/asset/admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/moment.min.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/sweetalert2.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/jquery.validate.min.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/bootstrap-selectpicker.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/jquery.dataTables.min.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/jasny-bootstrap.min.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/fullcalendar.min.js') }}"></script>

    <script src="..{{ url('css/asset/admin/assets/js/plugins/jquery-jvectormap.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/nouislider.min.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/core.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/arrive.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

    <script async defer src="{{ url('css/asset/admin/assets/js/buttons.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/chartist.min.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/plugins/bootstrap-notify.js') }}"></script>

    <script src="{{ url('css/asset/admin/assets/js/material-dashboard.min6c54.js?v=2.2.2') }}" type="text/javascript">
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();

                    }

                });

        });


        $(document).ready(function() {
            $(".alert").delay(5000).slideUp(300);
        });
    </script>

    @if (Session::has('success'))
        <script type="text/javascript">
            swal({
                title: 'Success!',
                text: "{{ Session::get('success') }}",
                timer: 5000,
                type: 'success'
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "INPUT",
                    searchPlaceholder: "Search records",
                }
            });

            var table = $('#datatables').DataTable();

            // Edit record

            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');

                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });

            // Delete a record

            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');

                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record

            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
        });
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7973675fab632965","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro-bs4/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 08:17:07 GMT -->

</html>
