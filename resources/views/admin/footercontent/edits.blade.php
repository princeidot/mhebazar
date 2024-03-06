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
        MHE Bazar Dashboard Edit Footer Content
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="canonical" href="" />
    <meta itemprop="name" content="MHE Bazar">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{ url('css/asset/admin/assets/css/font-awesome.min.css') }}">
    <link href="{{ url('css/asset/admin/assets/css/material-dashboard.min6c54.css?v=2.2.2') }}" rel="stylesheet" />
    <link href="{{ url('css/asset/admin/assets/demo/demo.css') }}" rel="stylesheet" />

</head>

<body class="">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="wrapper ">

        @include('layouts.inc.blogsidebar')

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
                        <a class="navbar-brand" href="javascript:;">Blog</a>
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
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-text">
                                        <div class="card-text">
                                            <h4 class="card-title">Edit Main Category Footer Content</h4>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <form method="post" enctype="multipart/form-data" action="{{route('footerlistus',$maincate->id)}}" class="form-horizontal">
                                            @csrf
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Category Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" class="form-control font-weight-bold" name="name" value="{{$maincate->title}}" disabled>

                                                    </div>
                                                </div>
                                            </div>

                                            
                                             <div class="row">
                                                <label class="col-sm-2 col-form-label">Meta Title</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" name="metatitle" class="form-control" value="{{$maincate->meta_title}}">
                                                    </div>
                                                </div>
                                            </div>
                                         

                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Meta Description</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" name="metadescription" class="form-control" value="{{$maincate->mta_des}}">
                                                    </div>
                                                </div>
                                            </div>



                                            
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Footer Content</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <textarea class="form-control" id="summary-ckeditor" rows="4" name="summary-ckeditor">{{$maincate->footer_content}}</textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-center">
                                                    <button type="submit" class="btn btn-success">Submit<div
                                                            class="ripple-container"></div></button>
                                                </div>
                                            </div>
                                        </form>
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
    <script src="{{ url('css/asset/admin/assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('css/asset/admin/assets/ckfinder/ckfinder.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
            extraPlugins: 'easyimage',
            removePlugins: 'image',
            filebrowserImageUploadUrl: 'public/blogimg/',
        });


  var input = document.getElementById("setcategory").value;
            $('#blog_category').val(input);

    </script>
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
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7973675fab632965","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro-bs4/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 08:17:07 GMT -->

</html>
