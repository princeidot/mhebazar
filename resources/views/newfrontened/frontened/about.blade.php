<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Get Complete Material Handling Solutions at MHE Bazar - Buy, Sell or Rent Now!" />
    <meta name="description"
        content="MHE Bazar offers a one-stop solution for material handling equipment needs. Buy or rent new/used equipment or get spare parts/services on our multi-vendor platform at competitive prices." />
    <link rel="canonical" href="https://www.mhebazar.in/about-us" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Get Complete Material Handling Solutions at MHE Bazar - Buy, Sell or Rent Now!</title>
    
     <meta property="og:url" content="https://www.mhebazar.in/about-us" />
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
    <meta property="og:title" content="Get Complete Material Handling Solutions at MHE Bazar - Buy, Sell or Rent Now!" />
    
      @include('layouts.headtag')
    <style>
        .info-member{
            float:left
        }
        .icon {
   
    float: right;
    margin-top: 5px;
    font-size: 34px;
    color: #0A66C2;
}
.play-btn {
    width: 100px;
    height: 100px;
    background: radial-gradient(rgba(52, 127, 192, 1) 60%, rgba(81, 160, 69, 1) 62%);
    border-radius: 50%;
    position: relative;
    display: block;
    box-shadow: 0px 0px 25px 3px rgba(52, 127, 192, 0.8);
}
 /* triangle */
        .play-btn::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-40%) translateY(-50%);
            transform: translateX(-40%) translateY(-50%);
            transform-origin: center center;
            width: 0;
            height: 0;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-left: 25px solid #fff;
            z-index: 100;
            -webkit-transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
            transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        /* pulse wave */
        .play-btn:before {
            content: "";
            position: absolute;
            width: 150%;
            height: 150%;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation: pulsate1 2s;
            animation: pulsate1 2s;
            -webkit-animation-direction: forwards;
            animation-direction: forwards;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: steps;
            animation-timing-function: steps;
            opacity: 1;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, .75);
            top: -30%;
            left: -30%;
            background: rgba(198, 16, 0, 0);
        }

        @-webkit-keyframes pulsate1 {
            0% {
                -webkit-transform: scale(0.6);
                transform: scale(0.6);
                opacity: 1;
                box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0;
                box-shadow: none;

            }
        }

        @keyframes  pulsate1 {
            0% {
                -webkit-transform: scale(0.6);
                transform: scale(0.6);
                opacity: 1;
                box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
            }

            100% {
                -webkit-transform: scale(1, 1);
                transform: scale(1);
                opacity: 0;
                box-shadow: none;

            }
        }
    
    

.img-des img{
    height:160px;
    width:250px;
    
}


        .course-outer {
            min-width: 280px;
            max-width: 280px;
            width: 280px;
            height: 333px;
            margin: 20px auto;
            border-radius: 10px;
            position: relative;
        }

        .course-inner {
            background-color: #FFFFFF;
            box-shadow: 0 3px 6px rgb(0 0 0 / 26%);
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: 10px;
            color: #3455A5;
            transition: all .3s ease-in;
        }

        .hero-course-wrapper {
            height: 333px;
        }

        .course-des {
            padding-left: 15px;
            padding-top: 17px;
        }

        .course-des h2 {
            font-size: 18px;
            width: 95%;
            line-height: 1.4;
            margin-bottom: 10px;
            color: #191919;
        }

        .course-des p {
            font-size: 13px;
            width: 95%;
            line-height: 1.4;
            max-height: 50px;
            overflow: hidden;
            color: #707070;
            --max-lines: 3;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: var(--max-lines);
        }

        .hero-call-btn {
            position: absolute;
            left: 50%;
            top: 90%;
            transform: translate(-50%, -50%);
            width: 90%;
        }

        .btn-icon-right {
            position: absolute;
            top: 50%;
            left: 90%;
            transform: translate(-50%, -50%);
        }

        .hero-btn-right-icon {
            background: #032d60;
            color: #ffffff;
            position: relative;
            border-radius: 10px;
            text-align: left;
            width: 95%;
        }

        /*End Slider*/
              .hero-btn-right-icon.btn:hover {
                color: #fff;
                        }
         .head-main h1{
           font-size: 33px;
           line-height: 50px;
           font-weight: bold;   
                }
              .head-main h1 span{
              font-size: 20px;
              line-height: 26px;
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
                        <li><a class="font-xs color-gray-500" href="{{ url('') }}">Home</a></li>
                        <li><a class="font-xs color-gray-1000">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="head-main">
                            <h1><span class="color-gray-500 mb-10">About </span> <br>MHE Bazar</h1>
                            <div class="box-button-slider">
                                <div class="swiper-button-next swiper-button-next-group-1"></div>
                                <div class="swiper-button-prev swiper-button-prev-group-1"></div>
                            </div>
                        </div>

                        <div class="row mt-20">

                            <div class="col-lg-6">
                                <p class="font-md color-brand-3 mb-15">MHE Bazar is an online platform that
                                    provides a One-Stop Solution for complete material handling equipment needs. Whether
                                    you are looking to buy or rent new or used equipment or need spare parts or
                                    services, MHE Bazar has you covered. Our website is a B2B and B2C multi-vendor
                                    e-commerce portal that allows sellers to showcase their products and services, and
                                    buyers to find what they need at competitive prices.</p>
                                <p class="font-md color-brand-3 mb-15">The portal is having the complete
                                    solution for MHE like:</p>
                                <ul class="list-services mt-20">
                                    <li class="hover-up">New Material Handling Equipment</li>
                                    <li class="hover-up">Used/Refurbished Material Handling Equipment</li>
                                    <li class="hover-up">Material Handling Equipment on Rent</li>
                                    <li class="hover-up">Lithium-Ion Battery</li>
                                    <li class="hover-up">Forklift Attachments</li>
                                    <li class="hover-up">All Brands Spare Parts</li>
                                    <li class="hover-up">Service of all Material Handling Equipment</li>
                                    <li class="hover-up">Training</li>
                                </ul>
                                <p class="font-md color-brand-3 mb-15">MHE Bazar is part of Greentech India
                                    Material Handling LLP (GTIMH), a company dedicated
                                    to providing top-quality solutions for material handling in various industries. One
                                    of
                                    our most popular offerings is the Lithium-Ion Conversion Kit for Lead-Acid
                                    Batteries.
                                    This product allows you to upgrade your lead-acid batteries to more efficient and
                                    cost-effective lithium-ion batteries, offering superior performance, a longer
                                    lifespan,
                                    fast charging, more productivity, and requiring less maintenance.</p>
                                <p class="font-md color-brand-3 mb-15">
                                    In addition to the conversion kit, we also offer a wide range of high-quality
                                    lithium-ion batteries that are optimized for use in a variety of material handling
                                    equipment, including forklifts, scissors lifts, reach trucks, BOPTs, stackers, golf
                                    carts, cranes, and electric street sweepers. So, far MHE Bazar has successfully
                                    converted and installed a Li-ion conversion kit for all almost brands covering all
                                    types of MHEs.<br>

                                    We are committed to helping our customers save money and improve their operations
                                    through the use of advanced technology, and our lithium-ion solutions play a crucial
                                    role in supporting India's goal of achieving net-zero emissions by 2070.
                                </p>
                            </div>
                            <div class="col-lg-6">

                                <div class="box-swiper">
                                    <div class="swiper-container swiper-group-1">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <img
                                                    src="{{ url('css/newassets/imgs/page/uploadimage/about-1.webp') }}"alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img
                                                    src="{{ url('css/newassets/imgs/page/uploadimage/about-2.webp') }}"alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img
                                                    src="{{ url('css/newassets/imgs/page/uploadimage/about-3.webp') }}"alt="">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="box-contact-support pt-80 pb-50 pl-50 pr-50 background-gray-50 mt-50 mb-90">
                            <div class="row">
                                <div class="col-lg-6 mb-30 text-center text-lg-start">
                                    <h4 class="mb-5 text-center">Vision</h4>
                                    <ul class="font-md color-brand-3 list-dot">
                                        <li>To be the leading provider of material handling solutions in India.</li>
                                        <li>To be the best overall partner supplier for all our clients.
                                        </li>
                                        <li>To empower every employee to reach their full potential.
                                        </li>
                                        <li>To maintain sustained profitability through honesty, integrity, and ethical
                                            practices.
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 mb-30 text-center text-lg-start">
                                    <h4 class="mb-5 text-center">Mission</h4>
                                    <ul class="font-md color-brand-3 list-dot">
                                        <li>To provide comprehensive solutions for all material handling needs,
                                            including
                                            equipment, accessories, spare parts, service, attachments, and training</li>
                                        <li>To foster a culture of excellence, urgency, and customer focus through the
                                            delivery
                                            of value, innovative solutions, and exceptional service.</li>
                                        <li>To continuously strive to be the best in all that we do, with a passion and
                                            determination to succeed.</li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                        <h5 class="color-gray-500 mb-10">Behind The Brands</h5>
                        <h2 class="mb-30">Leadership Team
                        </h2>
                        <div class="row mb-30">

                            <div class="col-md-3">
                                <div class="img-des">
                                    <img src="{{ url('img/ulhas-m-3.webp') }}" class="rounded"
                                        alt="Ulhas Makeshwar">
                                </div>
                                <div class="info-member">
                                    <h5>Mr. Ulhas Makeshwar</h5>
                                    <p>Advisor</p>
                                </div>
                                <div class="icon"><a href="https://www.linkedin.com/in/ulhas-makeshwar-77b0a450/"
                                        target="_blank"><img src="{{url('css/newassets/imgs/template/icons/linkedin.svg')}}"></a></div>

                            </div>
                            <div class="col-md-9">
                                <div class="c-ip-reviews__content-wrap">
                                    <div class="font-md color-brand-3 mb-15">One
                                        of our
                                        esteemed Advisor at MHE Bazar. With a BE in mechanical engineering and advanced
                                        degrees
                                        in business management and marketing, Mr. Makeshwar brings a wealth of knowledge
                                        and
                                        expertise to our team.

                                        <br> With 19 years of experience in the industry, including 16 years
                                        specifically in the
                                        material handling field, Mr. Makeshwar has a deep understanding of the needs and
                                        challenges faced by our clients. He has played a key role in establishing two
                                        highly
                                        successful material handling brands in India: Hyundai Material Handling Products
                                        and BYD
                                        Material Handling Products.

                                        <br>Mr. Makeshwar's expertise in business development, sales, and marketing
                                        makes him a
                                        valuable asset to our team, and we are proud to have him as a partner at MHE
                                        Bazar. His
                                        passion for the material handling industry and commitment to delivering the best
                                        solutions for our clients are evident in all that he does.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-50">

                            <div class="col-md-3">
                                <div class="img-des">
                                    <img src="{{ url('img/Manik-thapar.webp') }}" class="rounded" alt="Manik Thapar" style=" object-fit: cover;">
                                </div>
                                <div class="info-member">
                                    <h5>Mr. Manik Thapar</h5>
                                    <p>Advisor</p>
                                </div>
                                <div class="icon"><a href="https://www.linkedin.com/in/manik-thapar-23201771/"
                                        target="_blank"><img src="{{url('css/newassets/imgs/template/icons/linkedin.svg')}}"></a></div>
                            </div>
                            <div class="col-md-9">
                                <div class="c-ip-reviews__content-wrap">
                                    <div class="font-md color-brand-3 mb-15">
                                        One of our valued Advisor at MHE Bazar. Mr. Thapar brings a unique blend of technical
                                        expertise and business acumen to our team, with a BE in Mechanical and Automotive
                                        Engineering and an MBA.

                                        <br> With over nine years of experience in the material handling industry, Mr.
                                        Thapar
                                        has a proven track record in business development, sales, and marketing. He has
                                        played a
                                        crucial role in establishing two successful material handling brands in India:
                                        Hyundai
                                        Material Handling Products and BYD Material Handling Products.

                                        <br>At MHE Bazar, Mr. Thapar is known for his ability to identify opportunities
                                        for
                                        growth and innovation, and for his dedication to delivering the best solutions
                                        for our
                                        clients. His deep understanding of the material handling industry, combined with
                                        his
                                        expertise in business strategy and development, makes him a valuable asset to
                                        our team.
                                        We are grateful to have him as a partner at MHE Bazar.

                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                </div>
            </div>
           
        </section>
        <section class="section-box box-newsletter" style="background:#0E224D url('img/video-thumbnail.webp') no-repeat right 10px bottom 0px; background-size: 750px;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
              <h3 class="color-white"><span class="color-warning">Lithium-ion Battery</span> Operated Pallet Truck for Zero Emission</h3>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
              <div class="box-form-newsletter mt-15">
                <a class="play-btn" href="#ModalQuickview" data-bs-toggle="modal" id="submit"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
        
            <section>
            <div class="container deal-block">
                <div class="head-main mt-20">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <h3 class="mb-5">Register for our training programs</h3>
                          
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="box-button-slider">
                                <div class="swiper-button-next swiper-button-next-group-4">
                                </div>
                                <div class="swiper-button-prev swiper-button-prev-group-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container swiper-group-4">
                    
                    <div class="swiper-wrapper pt-5">
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Construction Safety training ')" class="course-inner"
                                    >
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/construction-safety-audit-thumbnail.jpg') }}"
                                                alt="construction-safety-audit-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Construction Safety</h2>
                                            <p >Construction is one of the areas of employment where hazardous conditions
                                                are part of the everyday working environment.</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right">
                                                    <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></button></p>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Electrical Safety training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/electrical-high-voltage-safety-thumbnail.jpg') }}"
                                                alt="electrical-high-voltage-safety-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Electrical Safety</h2>
                                            <p>The majority of us use electricity every day on the job and this
                                                familiarity
                                                can create a false sense of security. Let us bear in mind that
                                                electricity
                                                is always a potential </p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"> <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Fire Safety training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/fire-safety-thumbnail.jpg') }}"
                                                alt="fire-safety-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Fire Safety</h2>
                                            <p>Fire safety training educates a set of practices &amp; procedures to
                                                minimize
                                                the destruction caused by fire hazards. </p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"> <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Chemical Safety training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/chemical-safety-thumbnail.jpg') }}"
                                                alt="chemical-safety-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Chemical Safety</h2>
                                            <p>Disaster in a chemical industry is very rare, but negligence could result
                                                in
                                                devastating consequences.</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"> <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Hand Tool Safety training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/hand-tool-safety-thumbnail.jpg') }}"
                                                alt="hand-tool-safety-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Hand Tool Safety</h2>
                                            <p>Use of tools makes many tasks easier. However, the same tools that assist
                                                us,
                                                if improperly used or maintained, can create significant hazards in our
                                                work
                                                areas.</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"><img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Working at height training ')" class="course-inner"
                                    tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/working-at-height-thumbnail.jpg') }}"
                                                alt="working-at-height-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Working at Height</h2>
                                            <p>From use of simple stepladders to safety harnesses, there is an imminent
                                                risk
                                                of a fall which may cause personal injury while performing work at
                                                height.
                                            </p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"><img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Confined Space Entry Safety training ')"
                                    class="course-inner" tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/confined-space-entry-thumbnail.jpg') }}"
                                                alt="confined-space-entry-thumbnail" class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Confined Space Entry</h2>
                                            <p>It is critically important that the people involved in making confined
                                                space
                                                entries are qualified and experienced and therefore trained in the
                                                associated hazards,</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right"><img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="course-outer">
                                <a href="#GetQuote" data-bs-toggle="modal" id="submit"
                                    onclick="myFunction(' Controlling Infections in Workplace Safety training ')"
                                    class="course-inner" tabindex="0">
                                    <div class="hero-course-wrapper">
                                        <div class="img-container">
                                            <img src="{{ url('img/tranning/controlling-infections-in-workplace-and-covid-19-precautions-thumbnail.jpg') }}"
                                                alt="controlling-infections-in-workplace-and-covid-19-precautions-thumbnail"
                                                class="img-fluid">
                                        </div>
                                        <div class="course-des">
                                            <h2>Controlling Infections in Workplace &amp; COVID 19 Precautions</h2>
                                            <p>With the wild spread of the pandemic COVID-19, safety has now reached the
                                                pinnacle of priority for every individual.</p>
                                        </div>
                                        <p class="hero-call-btn text-center"><button class="hero-btn-right-icon btn"
                                                tabindex="0">Register Now<span class="btn-icon-right">
                                                   <img src="{{url('css/newassets/imgs/template/icons/arrow-white.svg')}}"></span></button></p>
                                        <div class="course-category">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </section>
        
        
        @include('layouts.frontened.abovefooter')
       
        <div class="modal fade" id="ModalQuickview" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-30">
                        <div class="row">
                            <iframe id="sampleVideo" width="100%" height="515"
                                src="{{ url('css/asset/video/Greentech-Electric-Hand-Pallet-Truck.mp4') }}"
                                frameborder="0" allowfullscreen controlsList="nodownload" allow="autoplay"
                                autoplay="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')
<script>
 $(document).ready(function(){
    $('#ModalQuickview').on('hide.bs.modal', function () {
      // Get the iframe
      var iframe = document.getElementById('sampleVideo');
      // Get the video element inside the iframe
      var video = iframe.contentWindow.document.querySelector('video');
      // Pause the video
      video.pause();
    });
 });
 </script>
</body>


</html>
