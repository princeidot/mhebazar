<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="MHE BAZAR Contact Thank you" />
    <meta name="description"
        content="Trust MHEBazar for all your Material Handling Equipment needs. Our experienced team is always ready to assist you. Contact us today for a hassle-free experience." />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Thank You</title>
    <style>
                .main-content__checkmark {
            font-size: 1rem;
            line-height: 1;
            color: #24b663;
            border-radius: 50%;
            border: 1px solid;
            padding:5px;
        }

        .page,
        .social-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
        }

        .social-button {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            outline: none;
            width: 64px;
            height: 64px;
            text-decoration: none;
            border-radius: 100%;
            background: #fff;
            text-align: center;
        }

        .social-button::after {
            content: '';
            position: absolute;
            top: -1px;
            left: 50%;
            display: block;
            width: 0;
            height: 0;
            border-radius: 100%;
            transition: 0.3s;
        }

        .social-button:focus,
        .social-button:hover {
            color: #fff;
        }
        .social-button:hover span img{
            filter: brightness(0) invert(1);
        }
        .social-button:focus::after,
        .social-button:hover::after {
            width: calc(100% + 2px);
            height: calc(100% + 2px);
            margin-left: calc(-50% - 1px);
        }

        .social-button span,
        .social-button svg {
            position: relative;
            z-index: 1;
            transition: 0.3s;
        }

        .social-button span {
            font-size: 25.6px;
        }

        .social-button svg {
            height: 40%;
            width: 40%;
        }

        .social-button--mail {
            color: #0072c6;
        }

        .social-button--mail::after {
            background: #0072c6;
        }

        .social-button--facebook {
            color: #3b5999;
        }

        .social-button--facebook::after {
            background: #3b5999;
        }

        .social-button--linkedin {
            color: #0077b5;
        }

        .social-button--linkedin::after {
            background: #0077b5;
        }


        .social-button--github {
            color: #6e5494;
        }

        .social-button--github::after {
            background: #6e5494;
        }

        .social-button--codepen {
            color: #212121;
        }

        .social-button--codepen::after {
            background: #212121;
        }

        .social-button--steam {
            color: rgb(255, 0, 0);
        }

        .social-button--steam::after {
            background: rgb(255, 0, 0);
        }

        .social-button--snapchat {
            color: rgb(255, 0, 0);
        }

        .social-button--snapchat::after {
            background: rgb(255, 0, 0);
        }

        .social-button--twitter {
            color: #55acee;
        }

        .social-button--twitter::after {
            background: #55acee;
        }

        .social-button--instagram {
            color: #e4405f;
        }

        .social-button--instagram::after {
            background: #e4405f;
        }

        .social-button--pinterest {
            color: #E60023;
        }

        .social-button--pinterest::after {
            background: #E60023;
        }


        .social.bgcolor {
            padding: 35px;
            border-radius: 10px;
            /* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
        }

        .page .btn-blue {
            border-radius: 3px;

            padding: 5px 15px;
        }
         .bgcolor {
            background-color: #EEEEEE;
        }
        .tabuser {
    padding: 30px;
}
        </style>
</head>

<body>


        @include('layouts.frontened.header')

        @include('layouts.frontened.sidebar')


        <main class="main">

        <section class="bgcolor pt-10 pb-10">
            <div class="container pt-5 pb-5">
                <div class="tabuser bg-white">
                    <div class="title text-center">

                        <h3 class="mb-3" style="font-size:1em"> <span><i class="fi-rr-check main-content__checkmark"
                                    id="checkmark"></i></span> Submitted!</h3>
                    </div>
                    <div class="main-content text-center">

                        <p class="main-content__body mb-30" style="font-size:17px">Thank you for your interest in our
                            products, we look forward to helping you optimize your operations.
                        </p>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="social bgcolor">
                                    <div class="title pb-30">
                                        Follow us
                                    </div>
                                    <div class="social-buttons pt-5">
                                        <a title="Facebook" href="https://www.facebook.com/mhebazar.in/" target="_blank"
                                            class="social-button social-button--facebook" aria-label="Facebook">

                                            <span class="fa fa-facebook icon-social"><img src="{{url('css/newassets/imgs/template/icons/facebook.svg')}}"></span>
                                        </a>
                                        <a title="Linkedin" href="https://www.linkedin.com/company/mhe-bazar/"
                                            target="_blank" class="social-button social-button--linkedin"
                                            aria-label="LinkedIn">
                                            <span class="fa fa-linkedin icon-social"><img src="{{url('css/newassets/imgs/template/icons/linkedin.svg')}}"></span>
                                        </a>
                                        <a title="Youtube" href="https://www.youtube.com/@mhebazar7425" target="_blank"
                                            class="social-button social-button--snapchat" aria-label="youtube">
                                            <span class="fa fa-youtube-play icon-social"><img src="{{url('css/newassets/imgs/template/youtube.svg')}}" style="width:30px;opacity: 0.7;"></span>
                                        </a>
                                        <a title="Instagram" href="https://www.instagram.com/mhebazar.in/"
                                            target="_blank" class="social-button social-button--instagram"
                                            aria-label="instagram">
                                            <span class="fa fa-instagram icon-social"><img src="{{url('css/newassets/imgs/template/icons/instagram.svg')}}"></span>
                                        </a>
                                        <a title="Twitter" href="https://twitter.com/Greentech_MH" target="_blank"
                                            class="social-button social-button--twitter" aria-label="twitter">
                                            <span class="fa fa-twitter icon-social"><img src="{{url('css/newassets/imgs/template/icons/twitter.svg')}}"></span>
                                        </a>
                                        <a title="Pinterest" href="https://in.pinterest.com/greentechindiamh/"
                                            target="_blank" class="social-button social-button--pinterest"
                                            aria-label="pinterest">
                                            <span class="fa fa-pinterest icon-social"><img src="{{url('css/newassets/imgs/template/square-pinterest.svg')}}" style="width:30px;opacity: 0.7;"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="social bgcolor">
                                    <div class="title">
                                        Explore
                                    </div>
                                    <div class="pt-5">
                                        <a href="{{ route('about') }}" class="btn btn-brand-3 btn-arrow-right">
                                            About Us
                                        </a>
                                        @if (Auth::user())
                                            <a href="{{ route('sell.old') }}" class="btn btn-brand-3 btn-arrow-right">
                                                Sell Old MHE
                                            </a>
                                        @else
                                            <a href="{{ route('register') }}" class="btn btn-brand-3 btn-arrow-right">
                                                Sell Old MHE
                                            </a>
                                        @endif
                                        <a href="{{ route('rental') }}" class="btn btn-brand-3 btn-arrow-right">
                                            Rental MHE Plans
                                        </a>



                                    </div>
                                    <div class="page pt-2">
                                        <a href="https://wa.me/917305950939" class="btn btn-brand-3 btn-arrow-right" target="_blank">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Talk to an Expert
                                        </a>
                                    </div>
                                </div>
                            </div>
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
