<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">




    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Old Urls</title>
    <style>
        .list-products-5 .card-grid-style-3 {
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 6px;
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

                        <li><a class="font-xs color-gray-500" href="">Old Urls</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="list-products-5 list-brand-2">
                            <div class="card-grid-style-3">
                                <div class="box-menu-category">
                                    <table>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Title</th>
                                            <th>Url</th>

                                        </tr>

                                        @foreach ($cateproduct as $cate)
                                        @php
                                if (!$cate->subcategory == null) {
                                                                $urlcategory = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->subcategory->title)));
                                                            } else {
                                                                $urlcategory = strtolower(str_replace(' ', '-', $cate->category->name));
                                                            }
                                                            if ($cate->vendor == null) {
                                                                $vname = 'mhe-bazar';
                                                            } else {
                                                                $vname = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->userData->brandname)));
                                                            }
                                                            if (!$cate->capacity == null) {
                                                                 $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($cate->title)))) . '-' . strtolower(str_replace(' ', '-',rtrim($cate->capacity))).'-' .strtolower(str_replace(' ', '-',rtrim($cate->model))) . '-' . $cate->id;
                                                            } else {
                                                                $urltitle = $vname . '-' . strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->title))) . '-' . strtolower(str_replace(' ', '-', $cate->model)) . '-' . $cate->id;
                                                            }
                                                 $maintile=strtolower($cate->title);
                                               $maintitle=ucwords($maintile);
                                                $vendorname=str_replace('-',' ',$vname);
                                                $mvtitle=ucwords($vendorname);
                                                
                                          $no=1;
                                               
                                            @endphp
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td> <ul class="list-nav-arrow"><li>{{$mvtitle}} {{ $maintitle }} {{$cate->capacity}} {{$cate->model}}</li></ul></td>
                                                <td>
                                                     @if($cate->old==null)
                                                    https://www.mhebazar.in/{{$urlcategory.'/'.str_replace('--', '-', $urltitle) }}
                                                    @else
                                                     https://www.mhebazar.in/used-mhe/{{$urlcategory.'/'.str_replace('--', '-', $urltitle) }}
                                                    @endif
                                                    </td>
                                            </tr>
                                        @endforeach



                                    </table>
                                  
                                </div>
                            </div>
        </section>
    </main>


    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')


    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')

</body>


</html>
