<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Contact MHEBazar for Material Handling Equipment Solutions | Reach Us Now" />
    <meta name="description"
        content="Trust MHEBazar for all your Material Handling Equipment needs. Our experienced team is always ready to assist you. Contact us today for a hassle-free experience." />
    <link rel="canonical" href="https://www.mhebazar.in/contact" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Contact MHEBazar for Material Handling Equipment Solutions | Reach Us Now</title>
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
    @include('layouts.headtag')
       <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body>



    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')


    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div mb-0">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{url('')}}">Home</a></li>
                        <li><a class="font-xs color-gray-500">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-0">
            <div class="container">
                <div class="box-contact">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <h1 class="font-46 color-brand-3 mt-60">Contact Us</h1>
                                <p class="font-sm color-gray-700 mb-30">We love to hear from you! Please let us know if
                                    you have any questions or concerns and we will get back to you soon. Thank You!</p>
                                <form class="form contact" action="{{route('cform')}}" id="contact-form" method="post">
                                                    @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="First name" required autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" title="Email" type="email" autocomplete="off" placeholder="Email" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="cname" placeholder="Company Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lcation" placeholder="Location" autocomplete="off" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control"  name="mno" id="mno" title="Phone Number" type="tel" placeholder="Phone number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="megg" id="megg" title="Message" placeholder="Message" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="pname" id="pname" value=""/>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="btn btn-buy w-auto" type="submit" value="Send message">
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div id="div1" class="show map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1041.6906186892131!2d77.24198158237067!3d28.575298637944854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce341b9ab9da3%3A0xc22e1d33ae9532bd!2sMHE%20Bazar!5e0!3m2!1sen!2sin!4v1701237348013!5m2!1sen!2sin"
                                    height="550" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div id="div2" class="hide map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.6497397685816!2d80.13698154825603!3d13.06118010385581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52619c1210b517%3A0x71d5ece8eb76a0e5!2s76%2C%20Poonamallee%20High%20Rd%2C%20Madhiravedu%2C%20Poonamallee%2C%20Chennai%2C%20Tamil%20Nadu%20600077!5e0!3m2!1sen!2sin!4v1701239156979!5m2!1sen!2sin"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div id="div3" class="hide map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1890.3837027004772!2d73.77827693841711!3d18.629528687295533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9bbf349f873%3A0x1b7ceb370f1b97f2!2sWalhekar%20Wadi%20Rd%20%26%20Kai%20Dhondu%20Chinchwade%20Rd%2C%20Chinchwad%20Gaon%2C%20Chinchwad%2C%20Pimpri-Chinchwad%2C%20Maharashtra%20411033!5e0!3m2!1sen!2sin!4v1701239197366!5m2!1sen!2sin"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-contact-address pt-80 pb-50">
                    <div class="row">
                        <div class="col-lg-3 mb-30">
                            <h3 class="mb-5">Visit our stores</h3>
                            <p class="font-sm color-gray-700 mb-30">Find us at these locations</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-30">
                                <h4>Registered Office:</h4>
                                <p class="font-sm color-gray-700 mb-10" style="width: 210px;text-align: justify;"><i class="fi-rr-map-marker mr-10"></i>E-228,
                                    Goyla Vihar, Block D, Lajpat Nagar I, Lajpat Nagar, New Delhi, Delhi 110024</p>
                                <p class="font-sm color-gray-700 mb-10"><i class="fi-rr-user mr-10"></i>Mr. Manik Thapar
                                </p>
                                <p class="font-sm color-gray-700 mb-10"><i class="fi-rr-call-outgoing mr-10"></i><a
                                        href="tel:+919289094445" style="color:#6B83B6">+91 928 909 4445</a></p>
                                <p class="font-sm color-gray-700"><i class="fi-rr-envelope-marker mr-10"></i><a
                                        href="mailto:sales.1@mhebazar.com"
                                        style="color:#6B83B6">sales.1@mhebazar.com</a></p>
                                <p class="pt-10"><a class="btn btn-buy w-auto" id="button1">View map</a></p>        
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="mb-30">
                                <h4>Corporate Office:</h4>
                                <p class="font-sm color-gray-700 mb-10" style="width: 220px;"><i class="fi-rr-map-marker mr-10"></i>Survey no.76/1A, Poonamallee High Road,
                                    Velappanchavadi, Chennai-600077</p>
                                    <p class="font-sm color-gray-700 mb-10"><i class="fi-rr-user mr-10"></i>Mr. Ulhas Makeshwar</p>
                                <p class="font-sm color-gray-700 mb-10"><i class="fi-rr-call-outgoing mr-10"></i><a href="tel:+919840088428" style="color:#6B83B6">+91 984 008 8428</a></p>
                                <p class="font-sm color-gray-700"><i class="fi-rr-envelope-marker mr-10"></i><a href="mailto:sales.2@mhebazar.com" style="color:#6B83B6">sales.2@mhebazar.com</a></p>
                                <p class="pt-10"><a class="btn btn-buy w-auto" id="button2">View map</a></p>
                            </div>
                           
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-30">
                                <h4>Branch Office:</h4>
                                <p class="font-sm color-gray-700 mb-10" style="width: 220px;"><i class="fi-rr-map-marker mr-10"></i>17/4, Aabasaheb Chinchwade Industrial Estate,
                                    Walhekarwadi Road, Chinchwade, Pune- 411033</p>
                                    <p class="font-sm color-gray-700 mb-10"><i class="fi-rr-user mr-10"></i>Mr. Sumedh Ramteke</p>
                                <p class="font-sm color-gray-700 mb-10"><i class="fi-rr-call-outgoing mr-10"></i><a href="tel:+917305950939" style="color:#6B83B6"> +91 730 5950 939</a></p>
                                <p class="font-sm color-gray-700"><i class="fi-rr-envelope-marker mr-10"></i><a href="mailto:sumedh.ramteke@mhebazar.com " style="color:#6B83B6"> sumedh.ramteke@mhebazar.com </a></p>    
                                <p class="pt-10"><a class="btn btn-buy w-auto" id="button3">View map</a></p>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-contact-support pt-80 pb-50 background-gray-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb-30 text-center text-lg-start">
                            <h3 class="mb-5">We‘d love to here from you</h3>
                            <p class="font-sm color-gray-700">Chat with our friendly team</p>
                        </div>
                        <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{url('css/newassets/imgs/page/contact/chat.svg')}}" alt="Ecom">
                            </div>
                            <h4 class="mb-5">Chat to sales</h4>
                            <p class="font-sm color-gray-700 mb-5">Speak to our team.</p><a
                                class="font-sm color-gray-900"
                                href="mailto:sales.1@mhebazar.com"><span>sales.1@mhebazar.com</span></a><br>
                                <a
                                class="font-sm color-gray-900"
                                href="mailto:sales.2@mhebazar.com"><span>sales.2@mhebazar.com</span></a>
                        </div>
                        <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{url('css/newassets/imgs/page/contact/call.svg')}}" alt="Ecom">
                            </div>
                            <h4 class="mb-5">Call us</h4>
                            <p class="font-sm color-gray-700 mb-5">Mon-Fri from 8am to 5pm</p><a
                                class="font-sm color-gray-900" href="tel:+919289094445">+91 9289094445</a><br>
                                <a
                                class="font-sm color-gray-900" href="tel:+919840088428">+91 9840088428</a>
                        </div>
                        <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{url('css/newassets/imgs/page/contact/map.svg')}}" alt="Ecom">
                            </div>
                            <h4 class="mb-5">Visit us</h4>
                            <p class="font-sm color-gray-700 mb-5">Visit our offices</p><span
                                class="font-sm color-gray-900">Delhi, Chennai, Pune</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.frontened.abovefooter')
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')

    <script>
        $(document).ready(function() {
            $("#button1").click(function() {
                $("#div1").removeClass("hide");
                $("#div2, #div3").addClass("hide");
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });

            $("#button2").click(function() {
                $("#div2").removeClass("hide");
                $("#div1, #div3").addClass("hide");
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });

            $("#button3").click(function() {
                $("#div3").removeClass("hide");
                $("#div1, #div2").addClass("hide");
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });
        });
    </script>

</body>


</html>
