<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Empower Your Material Handling Expertise: Insights from Mhe Bazar's Blog" />
    <meta name="description" content="Unlock the secrets of efficient material handling with Mhe Bazar's blog, featuring expert insights, best practices, and industry updates to elevate your operational efficiency. From equipment maintenance to workflow optimization, stay ahead of the curve with our informative articles." />
    <link rel="canonical" href="https://www.mhebazar.in/blog" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Empower Your Material Handling Expertise: Insights from Mhe Bazar's Blog</title>

</head>

<body>



    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')


    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div mb-0">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ url('') }}">Home</a></li>
                        <li><a class="font-xs color-gray-500">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-0 text-lg-start text-center">
                                    <h5 class="color-brand-3 text-uppercase">Blogs</h5>
                                </div>
                                <div class="col-xl-10 col-lg-9 mb-0 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium span">
                                        Showing 1&ndash;{{$blogs->count()}} results</span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    @foreach ($blogs as $ablog)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="{{ route('blog.single', $ablog->blog_url) }}"></a><img
                                        src="{{ url('css/asset/blogimg/' . $ablog->image1) }}" alt="{{$ablog->image1}}"></div>
                                <a class="tag-dot font-xs" href="#">{{$ablog->category->name}}</a>
                                <a class="color-gray-1100" href="{{ route('blog.single', $ablog->blog_url) }}">
                                    <h4>{{ $ablog->blog_title }}</h4>
                                </a>
                                <div class="mt-20">
                                 <span class="color-gray-500 font-xs"><span class="mr-20">Read Time:</span>  {{ $ablog->reading_time }} Minutes</span>
                                  
                                </div>
                            </div>
                        </div>
                    @endforeach


                    

                </div>
                <div class="nav-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </section>

    </main>



    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')

</body>


</html>
