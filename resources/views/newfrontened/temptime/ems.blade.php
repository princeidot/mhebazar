<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Explosion proof MHE Solution with MHEBazar -One Stop Solutions" />
    <meta name="description"
        content="Keep your operations safe with our explosion-proof MHE solutions. Designed to meet the strictest safety standards, they are perfect for hazardous environments." />
  <link rel="canonical" href="https://www.mhebazar.in/explosionproof-mhe-solution" /> 
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Explosion proof MHE Solution with MHEBazar -One Stop Solutions</title>
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
    @include('layouts.headtag')
    <style>
        h2 {
            font-size: 33px;
        }
        h1 {
            font-size: 40px;
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
                        <li><a class="font-xs color-gray-500">Explosionproof Mhe Solution</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section>
            <div class="container pb-5 pt-5">
                <div class="row">
                    <h1>Explosionproof Mhe Solution</h1>
                    <div class="col-md-9">
                        
                        <div class="content">
                            <p class="font-md color-brand-3">The MHE Bazar is a one-stop shop for all your explosion-proof material handling equipment
                                needs. We provide a wide range of solutions to meet the most demanding and hazardous
                                environments. From forklifts, and reach trucks to pallet trucks, we have it all.
                            </p>
                            <p class="font-md color-brand-3"> products are designed to meet the highest safety standards and are certified for use in
                                hazardous environments. With our Explosion Proof MHE Solutions, you can be sure that
                                your operations will be safe and efficient.
                            </p>
                            <p class="font-md color-brand-3"> Are you looking for more information about this product? If so, then you have come to
                                the right place. By clicking on the “Get Quote” button, you can send us your enquiry and
                                we will contact you soon to understand your application. We are committed to providing
                                the best customer service experience and helping our customers find the perfect product
                                for their needs.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="image">
                            <img src="{{ url('css/asset/image/explosion-proof-mhe-solution.webp') }}">
                        </div>
                    </div>
                    <div class="col-md-2 m-auto">
                        <a href="#GetQuote" data-bs-toggle="modal" class="btn btn-cart" id="submit"
                            style="font-size:15px">Inquire us</a>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.frontened.abovefooter')
    </main>

    <div class="modal fade" id="GetQuote" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content apply-job-form">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                    style="top: 10px;right: 10px;position: absolute;z-index: 123;"></button>
                <div class="modal-body p-30">
                    <h4 class="mb-15 text-center" id="modal_body"> Inquire us</h4>
                    <div class="row">
                        <form action="{{ url('get-quote') }}" method="post">
                            @csrf


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="fname form-control" type="text" name="name"
                                            placeholder="Full name" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="mno"
                                            placeholder="Phone number" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cname"
                                            placeholder="Company Name" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea rows="4" class="form-control" placeholder="Message" name="megg"></textarea>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="pname" value="Explosionproof MHE Solution" />
                            <button type="submit" class="btn btn-cart">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')

</body>


</html>
