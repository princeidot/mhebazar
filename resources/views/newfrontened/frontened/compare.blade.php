<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Compare" />

  <meta name='robots' content='noindex, nofollow' />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Compare</title>
    @include('layouts.headtag')
    <style>
        .hide {
            display: none;
        }

        #blurtext {
            color: transparent;
            text-shadow: 0 0 5px #000;
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
                        <li><a class="font-xs color-gray-500">Compare</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section-box shop-template">
            <div class="container">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                  @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="row mb-80">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-11">
                        <div class="box-compare-products">

                              @php
                                     $compareCount = count(session('compare', []));
                                 @endphp
                                 @if ($compareCount == 0)
                                    <h4 class="color-brand-3">No Product Selected </h4>
                                 @elseif ($compareCount == 1)
                                    <h4 class="color-brand-3">Please Select one more product </h4>
                                 @else
                            <div class="table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><span>Products</span></td>
                                            @foreach ($products as $cate)
                                                <td><img src="{{ url('css/asset/image/' . $cate->img1) }}"
                                                        alt="Ecom">
                                                    <h6><a class="text-brand-3" href="">{{ $cate->title }}</a>
                                                    </h6>
                                                </td>
                                            @endforeach


                                        </tr>

                                        <tr>
                                            <td><span>Capacity</span></td>
                                            @foreach ($products as $cate)
                                                <td><span>{{ $cate->capacity }}</span></td>
                                            @endforeach


                                        </tr>
                                        <tr>
                                            <td><span>Manufacturer</span></td>
                                            @foreach ($products as $cate)
                                                <td><span>{{ $cate->manufacturer }}</span></td>
                                            @endforeach

                                        </tr>
                                        <tr>
                                            <td><span>Model</span></td>
                                            @foreach ($products as $cate)
                                                <td><span>{{ $cate->model }}</span></td>
                                            @endforeach

                                        </tr>
                                        <tr>
                                            <td><span>Operator Type</span></td>
                                            @foreach ($products as $cate)
                                                <td><span>{{ $cate->operator_type }}</span></td>
                                            @endforeach

                                        </tr>
                                        <tr>
                                            <td><span>Mast Type</span></td>
                                            @foreach ($products as $cate)
                                                <td><span>{{ $cate->mast_type }}</span></td>
                                            @endforeach

                                        </tr>
                                        <tr>
                                            <td><span>Prise</span></td>
                                            @foreach ($products as $cate)
                                                @if (!$cate->price == null)
                                                    <td><span>Rs.
                                                            {{ preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i', "$1,", $cate->price) }}</span>
                                                    </td>
                                                @else
                                                    <td><span>Rs. <span id="blurtext">********</span></span></td>
                                                @endif
                                            @endforeach

                                        </tr>

                                        <tr>
                                            <td><span>Remove</span></td>
                                            @foreach ($products as $cate)
                                                <td>
                                                    <form action="{{ route('compare.remove', $cate->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-delete"></button>
                                                    </form>
                                                </td>
                                            @endforeach


                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </section>
        @include('layouts.frontened.abovefooter')
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')

</body>


</html>
