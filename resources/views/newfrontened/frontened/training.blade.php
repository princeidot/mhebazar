<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="Expert Training in Material Handling Equipment | Enhance Your Skills with MHEBazar" />
    <meta name="description"
        content="Looking to advance your skills in Material Handling Equipment? Look no further than MHEBazar's expert training programs. Boost your knowledge and career prospects." />
    <link rel="canonical" href="https://www.mhebazar.in/training" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Expert Training in Material Handling Equipment | Enhance Your Skills with MHEBazar</title>
    @include('layouts.headtag')
    <meta property="og:image" content="{{url('img/mhe-logo1.png')}}" />
    <style>
        p {
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 40px;
        }

        h2 {
            font-size: 33px;
        }

       

       

        .over-txt {
            position: absolute;
            top: 50%;
            left: 30%;
            transform: translate(-18%, -170%);
        }

        .over-txt h2 {
            text-align: center;
            font-size: 48px;
            color: white;
        }

        .cta.blue {
            background: #004fbc;
            border: 2px solid transparent;
            color: #fff;
        }

        .cta {
            cursor: pointer;
            padding: 12px 32px;
            position: relative;
            text-align: center;
            -webkit-transition: border .2s linear, background-color .2s linear;
            -o-transition: border .2s linear, background-color .2s linear;
            transition: border .2s linear, background-color .2s linear;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            display: inline-block;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            letter-spacing: .5px;
            transform: translate(160%, 25%);
        }

        /*Slider*/
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
        .btn:hover {
    color: #fff;
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
                        <li><a class="font-xs color-gray-500">Training</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="overview ">
            <div class="container">
                <div class="center-block">
                    <h1 class="title mb-1">Material Handling Equipment Training</h1>
                    <p class="font-md color-brand-3">The MHE Bazar is an online platform that specializes in forklift operator training
                        and other industrial training. It provides a comprehensive range of courses and certifications
                        for those who want to pursue a career in the industrial sector. The MHE Bazar has experienced
                        trainers who use the latest technology and techniques to provide quality training to their
                        students. Their courses are designed to equip students with the knowledge and skills necessary
                        for success in the industrial sector. </p>
                    <p class="font-md color-brand-3">The MHE Bazar also provides additional resources, such as job placement services, so that
                        students can easily find employment after completing their course. With its comprehensive range
                        of courses, The MHE Bazar is an ideal choice for those who want to specialize in forklift
                        operator training or any other industrial training.
                    </p>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container">
                <div class="pb-3">
                    <h2 class="">Operator Training</h2>
                </div>
                <div class="description">
                    <p class="font-md color-brand-3">Forklifts and other material handling equipment (MHE) play an integral role in a variety of
                        industries, from manufacturing and logistics to construction and warehousing. However,
                        operating these heavy machines requires proper training to ensure safety in the workplace.
                        Forklift operators have a lot of responsibilities and are exposed to hazardous working
                        conditions, making training in safety skills essential. MHE Bazar is a renowned training
                        partner for Forklift Operators from across India, providing comprehensive training courses
                        to improve the overall health and safety of their clients.</p>
                    <ul class="list-services mt-20">
                        <li class="hover-up">Comprehensive safety training</li>
                        <li class="hover-up"> Experienced trainers</li>
                        <li class="hover-up"> Customized programs</li>
                        <li class="hover-up"> Flexible delivery </li>
                        <li class="hover-up"> Cost-effective solutions</li>

                    </ul>

                    <div class="row">
                        <div class="col-md-7">
                            <p class="font-md color-brand-3"> MHE Bazar is committed to providing the best quality education to their clients about
                                health
                                issues related to operating Forklifts and other MHEs. The training courses offered by
                                MHE Bazar
                                cover a range of topics, including how to operate forklifts effectively, avoid hazards,
                                and
                                identify risks associated with operating MHEs. The training programs are designed to be
                                hands-on
                                and interactive, ensuring that participants learn the practical skills required to
                                operate these
                                machines safely.
                            </p>
                            <p class="font-md color-brand-3">
                                One of the primary goals of MHE Bazar is to improve the safety of workers who operate
                                Forklifts
                                and other MHEs. This is achieved through a combination of classroom instruction and
                                practical
                                training. The trainers at MHE Bazar are experienced professionals who have a deep
                                understanding
                                of the hazards associated with operating MHEs. They use their expertise to teach
                                participants
                                how to recognize and avoid these hazards, as well as how to respond appropriately in
                                case of an
                                emergency.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ url('img/tranning/operator-training.webp') }}" style="height:240px;">
                        </div>
                    </div>

                    <p class="font-md color-brand-3">
                        The training programs offered by MHE Bazar are tailored to meet the specific needs of their
                        clients. Whether the client is a small business or a large corporation, MHE Bazar can provide
                        customized training programs that meet their unique needs. The trainers work closely with the
                        clients to understand their operations and identify the specific hazards that their workers may
                        face while operating MHEs. This approach ensures that the training is relevant and effective,
                        and helps to minimize the risk of accidents in the workplace.
                    </p>
                    <p class="font-md color-brand-3">
                        Training for Forklift Operators and other MHE operators is a significant investment of time,
                        effort, and money. However, it is essential to ensure the safety of workers and the smooth
                        operation of businesses. MHEBazar recognizes this and offers flexible training programs that can
                        be tailored to fit the clients' budget and schedule. They also offer a range of training
                        delivery options, including on-site training, online training, and classroom training, making it
                        easy for their clients to access the training they need.
                    </p>
                    <p class="font-md color-brand-3">
                        MHEBazar is a leading training partner for Forklift Operators from across India, providing
                        comprehensive training courses that focus on safety skills, including operating forklifts
                        effectively. They aim to improve the overall health and safety of their clients by providing the
                        best quality education about health issues that involve Forklifts and other MHEs. The trainers
                        at MHE Bazar are experienced professionals who work closely with their clients to provide
                        customized training programs that meet their specific needs. They offer flexible training
                        delivery options and work within the clients' budget and schedule, making it easy for them to
                        access the training they need.
                    </p>


                </div>
                <div class="callaction">
                    <img src="{{ url('img/service-background.webp') }}" style="-webkit-filter: brightness(50%);">

                </div>
                <div class="container" style="  position: relative;">
                    <div class="over-txt">
                        <h2>Want to register for training programs by MHEBazar?</h2>
                        <a href="#myModal" data-bs-toggle="modal" id="submit"
                            onclick="myFunction(' Training')" class="cta blue">Register Now</a>
                    </div>
                </div>
            </div>

        </section>


        <section class="pt-5">
            <div class="container">
                <div class="pb-3">
                    <h2 class="">Workplace Safety Training
                    </h2>
                </div>
                <div class="description">
                    <p class="font-md color-brand-3">Workplace safety is a critical concern for employers across all industries. To reduce the risk of
                        accidents and injuries in the workplace, employers need to provide their employees with safety
                        training. Safety training ensures that employees are aware of the potential hazards in their
                        work environment and know how to protect themselves from harm. MHEBazar is a leading provider of
                        workplace safety training, offering comprehensive training programs that cover a range of topics
                        related to workplace safety.</p>
                  <ul class="list-services mt-20">
                        <li class="hover-up">Customized safety training</li>
                        <li class="hover-up">Experienced trainers</li>
                        <li class="hover-up">Practical approach</li>
                        <li class="hover-up">Convenient online delivery</li>
                        <li class="hover-up">Comprehensive coverage</li>
                    </ul>


                    </ul>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ url('img/tranning/workplace-safety-training.webp') }}">
                        </div>
                        <div class="col-md-7">
                            <p class="font-md color-brand-3">
                                MHEBazar recognizes the importance of workplace safety and provides customized training
                                programs
                                that are tailored to meet the specific needs of their clients. They understand that
                                different
                                industries and work environments have unique hazards and risks, and their training
                                programs are
                                designed to address these specific risks. MHEBazar's training programs cover a wide
                                range of
                                topics,
                                including the safe operation of machinery, the handling of hazardous materials, fire
                                safety, and
                                emergency response.
                            </p>
                            <p class="font-md color-brand-3">
                                MHEBazar's workplace safety training is delivered by experienced professional trainers
                                who have
                                a
                                deep understanding of workplace hazards and risks. They use their expertise to provide
                                practical
                                and
                                hands-on training that prepares employees to deal with potential hazards in their work
                                environment.
                                MHEBazar's trainers also provide guidance on how to identify potential hazards and how
                                to take
                                appropriate action to prevent accidents and injuries.
                            </p>
                            
                        </div>
                    </div>
    <p class="font-md color-brand-3">
                                One of the significant advantages of MHEBazar's workplace safety training is that it is
                                available
                                online. The online training programs are accessible to employees at their convenience,
                                eliminating
                                the need for them to attend traditional classroom training sessions. This flexibility
                                allows
                                employees to complete the training at their own pace, without having to take time away
                                from
                                work.
                            </p>
                    <p class="font-md color-brand-3">
                        MHEBazar's training platform, Business Health & Safety (BHS), offers an alternative to
                        traditional
                        simulation-based work programs. The platform is designed to be used in conjunction with
                        employees'
                        regular work activities, reducing their exposure to hazards and other risks associated with
                        working
                        in industry or in an office environment. The training platform provides employees with tips on
                        how
                        to deal with hazardous situations at work and offers a checklist for the safe handling of
                        dangerous
                        tools, devices, or materials at work sites.
                    </p>

                    <p class="font-md color-brand-3">
                        In conclusion, MHEBazar is a leading provider of workplace safety training, offering
                        comprehensive
                        training programs that cover a range of topics related to workplace safety. Their customized
                        training programs are tailored to meet the specific needs of their clients and are delivered by
                        experienced professional trainers who have a deep understanding of workplace hazards and risks.
                        Their training platform, BHS, offers an alternative to traditional simulation-based work
                        programs,
                        allowing employees to receive training while performing their regular work activities. The
                        online
                        training programs are flexible and accessible to employees at their convenience, ensuring that
                        they
                        receive the training they need to stay safe in the workplace.
                    </p>

                </div>
            </div>
        </section>

        <section class="pt-5">
            <div class="container">
                <div class="pb-3">
                    <h2 class="">Industrial Training</h2>
                </div>
                <div class="description">
                    <P class="font-md color-brand-3">At MHEBazar, we take pride in our commitment to providing top-quality industrial training that
                        helps individuals advance their careers and achieve their professional goals. We understand that
                        industrial training is a crucial step in the career development journey, which is why we offer a
                        comprehensive training program that is tailored to the specific needs and requirements of our
                        clients.</P>

                    <ul class="list-services mt-20">
                        <li class="hover-up">Practical industry experience</li>
                        <li class="hover-up">Comprehensive training program</li>
                        <li class="hover-up">Real-world scenarios</li>
                        <li class="hover-up">Develop technical skills</li>
                        <li class="hover-up">Become competent professionals</li>


                    </ul>
                    <div class="row">
                        <div class="col-md-7">
                            <p class="font-md color-brand-3">Our industrial training program is designed to provide participants with a managed and
                                practical
                                training experience that is delivered within a specific time frame. This allows
                                participants to
                                gain
                                the necessary knowledge and experience to become successful professionals in their
                                chosen field.
                                Our
                                program is structured in a way that provides a perfect balance between theory and
                                practical
                                training, enabling participants to develop their technical skills and knowledge while
                                also
                                gaining
                                hands-on experience in their chosen field.
                            </p>
                            <p class="font-md color-brand-3">
                                Our trainers are experienced professionals who have a deep understanding of the industry
                                and the
                                skills and knowledge required to succeed. They bring a wealth of real-world experience
                                to the
                                training sessions, allowing participants to learn from their expertise and gain valuable
                                insights
                                into the industry. We believe that learning from experienced professionals is the key to
                                success,
                                which is why we invest heavily in our trainers to ensure that they are up-to-date with
                                the
                                latest
                                industry trends and best practices.
                            </p>
                            
                        </div>
                        <div class="col-md-5">
                            <img src="{{ url('img/tranning/industrial-training.webp') }}">
                        </div>
                    </div>
                    <p class="font-md color-brand-3">
                                Our industrial training program is delivered in a convenient online format that allows
                                participants
                                to access the training from anywhere, at any time. This makes it easier for individuals
                                to fit
                                the
                                training into their busy schedules and ensures that they can access the training they
                                need to
                                advance their careers.
                            </p>
                    <p class="font-md color-brand-3">Our industrial training program is designed to provide participants with a managed and practical
                        training experience that is delivered within a specific time frame. This allows participants to
                        gain
                        the necessary knowledge and experience to become successful professionals in their chosen field.
                        Our
                        program is structured in a way that provides a perfect balance between theory and practical
                        training, enabling participants to develop their technical skills and knowledge while also
                        gaining
                        hands-on experience in their chosen field.
                    </p>
                    <p class="font-md color-brand-3">
                        Our trainers are experienced professionals who have a deep understanding of the industry and the
                        skills and knowledge required to succeed. They bring a wealth of real-world experience to the
                        training sessions, allowing participants to learn from their expertise and gain valuable
                        insights
                        into the industry. We believe that learning from experienced professionals is the key to
                        success,
                        which is why we invest heavily in our trainers to ensure that they are up-to-date with the
                        latest
                        industry trends and best practices.
                    </p>
                    <p class="font-md color-brand-3">
                        One of the unique features of our industrial training program is the emphasis we place on
                        practical
                        training. We understand that practical training is essential for individuals to become competent
                        and
                        confident professionals in their chosen field. That is why our program includes practical
                        training
                        sessions that allow participants to apply what they have learned in real-world scenarios. This
                        hands-on experience enables participants to become more confident and competent, which is
                        essential
                        for success in any industry.
                    </p>

                    <p class="font-md color-brand-3">
                        At MHEBazar, we believe in providing comprehensive coverage to ensure that participants receive
                        a
                        well-rounded and thorough training experience. We cover all the essential aspects of industrial
                        training, including safety measures, technical skills, and best practices. This ensures that
                        participants are equipped with the knowledge and skills they need to succeed in their chosen
                        field.
                    </p>
                    <p class="font-md color-brand-3">
                        If you are looking for top-quality industrial training that is tailored to your specific needs,
                        MHEBazar is the perfect partner for you. We are committed to providing a comprehensive training
                        program that is delivered by experienced professionals and is designed to help you achieve your
                        professional goals. With our practical approach and convenient online delivery, you can be
                        assured
                        that you will receive the training you need to succeed in your chosen field.

                    </p>

                </div>
            </div>
        </section>
        <section>
            <div class="container deal-block">
                <div class="head-main">
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
                                <a href="#myModal" data-bs-toggle="modal" id="submit"
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
                                <a href="#myModal" data-bs-toggle="modal" id="submit"
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
                                <a href="#myModal" data-bs-toggle="modal" id="submit"
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
                                <a href="#myModal" data-bs-toggle="modal" id="submit"
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
                                <a href="#myModal" data-bs-toggle="modal" id="submit"
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
                                <a href="#myModal" data-bs-toggle="modal" id="submit"
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
                                <a href="#myModal" data-bs-toggle="modal" id="submit"
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
                                <a href="#myModal" data-bs-toggle="modal" id="submit"
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
    </main>

    <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content apply-job-form">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                    style="top: 10px;right: 10px;position: absolute;z-index: 123;"></button>
                <div class="modal-body p-30">
                    <h4 class="mb-15 text-center" id="modal_body"> </h4>
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
                                        <input type="text" class="form-control" name="email"
                                            placeholder="Email" />
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

                            <input type="hidden" name="pname" value="" id="pname" />
                            <button type="submit" class="btn btn-cart">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')
    <script type="text/javascript">
        function myFunction(data) {

            var str = " Get Quote of " + data;
            $("#modal_body").html(str);
            document.getElementById("pname").value = data +'(Training)';
        }
    </script>
</body>


</html>
