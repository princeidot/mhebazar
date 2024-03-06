<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Server Error 500" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
   
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Server Error 500 </title>

</head>

<body>

    <div id="loading" style="display:none">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <div class="preloader-dots"></div>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')


    <main class="main">
       

        <section class="section-box shop-template mt-50">
            <div class="container">
                <div class="text-center">
                    <div class="image-404"> <img src="{{url('css/newassets/imgs/page/account/404.png')}}" alt="404"></div>
                    <h3>500 - Server Error</h3>
                    <p class="font-md-bold color-gray-600">Looks like, Server Error</p>
                    <div class="mt-15"> <a class="btn btn-buy w-auto arrow-back mr-25" href="{{url('')}}">Back to Homepage</a><a class="btn btn-buy w-auto arrow-back" href="{{ URL::previous() }}">Back to Previous Page</a></div>
                
                </div>
            </div>
        </section>

        @include('layouts.frontened.abovefooter')
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')


</body>


</html>
