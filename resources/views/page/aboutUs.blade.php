@extends('home.home')
@section('content')
    <!-- rts breadcrumb area start-->
    <div class="rts-bread-crumb-area bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inne">
                        <div class="title-area">
                            <h1 class="bread-title">About LeadTech Solution</h1>
                            <div class="inner-wrapper">
                                <a href="{{route('home')}}">Home</a>/
                                <a href="{{route('aboutUs')}}" class="active">About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <!-- about section one -->
    <div class="about-section-one inner-about rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-thumbnail-area">
                        <img src="{{asset('font/assets/images/about/01.png')}}" alt="thumbanil">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-p-right">
                        <div class="title-left-area">
                            <span class="pre-title-bg">About Us</span>
                            <h2 class="title">
                                Our Revolutionary <br>
                                AI-Powered Content <br>
                                Writing Platform
                            </h2>
                        </div>
                        <div class="inner-content">
                            <p class="disc-l">
                                Content is a valuable currency: the more you produce, the more you can attract
                                But creating new pieces of content requires a lot of time, energy, and creativity.
                                Founders need to focus on a hundred other aspects of growing their business
                                and not just creating content.
                            </p>
                            <div class="rating-area">
                                <div class="rating">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                </div>
                                <p class="disc">Based on 10,000+ reviews on</p>
                            </div>
                            <div class="brand-arae">
                                <img src="{{asset('font/assets/images/banner/brand/01.png')}}" alt="brand">
                                <img src="{{asset('font/assets/images/banner/brand/02.png')}}" alt="brand">
                                <img src="{{asset('font/assets/images/banner/brand/03.png')}}" alt="brand">
                                <img src="{{asset('font/assets/images/banner/brand/04.png')}}" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section one end -->

    <!-- favourite tools area -->
    <div class="favourite-tools-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <!-- <span class="pre-title-bg">Features</span> -->
                        <h2 class="title">
                            Generate AI Copy writing <br>
                            Favorite Tools
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--10 g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-case-area-wrapper">
                        <div class="icon">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#E6E5FF"></rect>
                                <path d="M22.7148 15.4336C28.75 15.7852 33.9648 21 34.3164 26.9766C34.375 27.7383 33.7891 28.4414 33.0273 28.5C32.9688 28.5 32.9688 28.5 32.9102 28.5C32.207 28.5 31.5625 27.9141 31.5625 27.1523C31.2109 22.5234 27.168 18.4805 22.5391 18.1875C21.7773 18.1875 21.1914 17.4844 21.25 16.7227C21.25 15.9609 21.9531 15.375 22.7148 15.4336ZM23.125 9.75C32.3828 9.75 40 17.3672 40 26.625C40 27.6797 39.1211 28.5 38.125 28.5C37.0703 28.5 36.25 27.6797 36.25 26.625C36.25 19.418 30.332 13.5 23.125 13.5C22.0703 13.5 21.25 12.6797 21.25 11.625C21.25 10.6289 22.0703 9.75 23.125 9.75ZM20.0781 23.0508C24.4727 23.9297 27.6953 28.3242 26.6406 33.1289C25.9961 36.293 23.418 38.8711 20.2539 39.5156C14.8047 40.6875 10 36.5273 10 31.3125V16.7812C10 16.0195 10.5859 15.4336 11.3477 15.4336H14.1602C14.9805 15.4336 15.5664 16.0195 15.5664 16.7812V31.2539C15.5664 32.7188 16.8555 34.0078 18.4375 34.0078C19.9609 34.0078 21.25 32.7773 21.25 31.2539C21.25 30.082 20.4297 29.0273 19.375 28.6758C18.8477 28.5 18.4375 28.0312 18.4375 27.3867V24.457C18.4375 23.5781 19.1992 22.875 20.0781 23.0508Z" fill="#3F3EED"></path>
                            </svg>
                        </div>
                        <a href="#">
                            <h5 class="title">Blog Content</h5>
                        </a>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="#">Try Blog Content <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-case-area-wrapper">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#FDEDE1"></rect>
                                <path d="M13.8125 11.625H22.543C23.5391 11.625 24.4766 12.0352 25.1797 12.7383L35.4922 23.0508C36.957 24.5156 36.957 26.918 35.4922 28.3828L27.6992 36.1758C26.2344 37.6406 23.832 37.6406 22.3672 36.1758L12.0547 25.8633C11.3516 25.1602 11 24.2227 11 23.2266V14.4375C11 12.9141 12.2305 11.625 13.8125 11.625ZM17.5625 20.0625C18.5586 20.0625 19.4375 19.2422 19.4375 18.1875C19.4375 17.1914 18.5586 16.3125 17.5625 16.3125C16.5078 16.3125 15.6875 17.1914 15.6875 18.1875C15.6875 19.2422 16.5078 20.0625 17.5625 20.0625Z" fill="#EBA43B"></path>
                            </svg>

                        </div>
                        <a href="#">
                            <h5 class="title">Sales Copy</h5>
                        </a>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="#">Try Blog Content <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-case-area-wrapper">
                        <div class="icon">

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="4" fill="#FFE6FE"></rect>
                                <path d="M10 15.375C10 13.3242 11.6406 11.625 13.75 11.625H36.25C38.3008 11.625 40 13.3242 40 15.375V34.125C40 36.2344 38.3008 37.875 36.25 37.875H13.75C11.6406 37.875 10 36.2344 10 34.125V15.375ZM15.625 19.125C16.6211 19.125 17.5 18.3047 17.5 17.25C17.5 16.2539 16.6211 15.375 15.625 15.375C14.5703 15.375 13.75 16.2539 13.75 17.25C13.75 18.3047 14.5703 19.125 15.625 19.125ZM36.25 17.25C36.25 16.4883 35.6055 15.8438 34.8438 15.8438H20.7812C19.9609 15.8438 19.375 16.4883 19.375 17.25C19.375 18.0703 19.9609 18.6562 20.7812 18.6562H34.8438C35.6055 18.6562 36.25 18.0703 36.25 17.25Z" fill="#E331D2"></path>
                            </svg>

                        </div>
                        <a href="#">
                            <h5 class="title">website copy</h5>
                        </a>
                        <p class="disc">
                            Write a first draft. The first draft should be written in long-form breaking.
                        </p>
                        <a href="#">Try Blog Content <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- favourite tools area end -->

    <!-- rts image area start -->
    <div class="rts-large-image-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="large-image-about-p">
                        <img src="{{asset('font/assets/images/about/02.png')}}" alt="about-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts image area end -->


    <!-- rts team area start -->
    <div class="rts-team-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <span class="pre-title-bg">Team</span>
                        <h2 class="title">
                            OpenUp Dedicated Team
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="team-area-ab-wrapper">
                        <div class="thumbnail">
                            <img src="{{asset('font/assets/images/team/01.jpg')}}" alt="team">
                        </div>
                        <div class="inner-content">
                            <a href="#">
                                <h5 class="title">Jenny Wilson</h5>
                            </a>
                            <span>CTO / Developer</span>
                            <div class="social-icon">
                                <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-behance"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="team-area-ab-wrapper">
                        <div class="thumbnail">
                            <img src="{{asset('font/assets/images/team/02.jpg')}}" alt="team">
                        </div>
                        <div class="inner-content">
                            <a href="#">
                                <h5 class="title">Olivia Rodrigo</h5>
                            </a>
                            <span>CTO / Developer</span>
                            <div class="social-icon">
                                <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-behance"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- rts team area ewnd -->


    <!-- rts testimonials area starts -->
    <div class="rts-testimonials-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <span class="pre-title-bg">Features</span>
                        <h2 class="title">
                            Trusted by 5,000+ teams <br>
                            agencies 1500+ <span class="gradient-about-title">5-star ratings.</span>
                        </h2>
                        <div class="rating-area-main-p">
                            <div class="rating-area">
                                <div class="rating">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                    <img src="{{asset('font/assets/images/banner/star.svg')}}" alt="start">
                                </div>
                                <p class="disc">Based on 10,000+ reviews on</p>
                            </div>
                            <p class="disc-5">USED BY THE WORLD'S BEST MARKETING TEAMS</p>
                            <div class="brand-arae">
                                <img src="{{asset('font/assets/images/banner/brand/01.png')}}" alt="brand">
                                <img src="{{asset('font/assets/images/banner/brand/02.png')}}" alt="brand">
                                <img src="{{asset('font/assets/images/banner/brand/03.png')}}" alt="brand">
                                <img src="{{asset('font/assets/images/banner/brand/04.png')}}" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single team area start -->
                    <div class="single-team-area">
                        <img src="{{asset('font/assets/images/team/brand/quote.png')}}" alt="" class="quote">
                        <div class="star">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="disc">
                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found Writesonic to be the best for writing complete blog posts.
                        </p>
                        <div class="authore-area">
                            <div class="author">
                                <img src="{{asset('font/assets/images/team/01.png')}}" alt="team">
                                <div class="info">
                                    <p>Samuel</p>
                                    <span>Blogger</span>
                                </div>
                            </div>
                            <img src="{{asset('font/assets/images/team/brand/01.png')}}" alt="">
                        </div>
                    </div>
                    <!-- single tream area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single team area start -->
                    <div class="single-team-area">
                        <img src="{{asset('font/assets/images/team/brand/quote.png')}}" alt="" class="quote">
                        <div class="star">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="disc">
                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found Writesonic to be the best for writing complete blog posts.
                        </p>
                        <div class="authore-area">
                            <div class="author">
                                <img src="{{asset('font/assets/images/team/01.png')}}" alt="team">
                                <div class="info">
                                    <p>Samuel</p>
                                    <span>Blogger</span>
                                </div>
                            </div>
                            <img src="{{asset('font/assets/images/team/brand/01.png')}}" alt="">
                        </div>
                    </div>
                    <!-- single tream area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single team area start -->
                    <div class="single-team-area">
                        <img src="{{asset('font/assets/images/team/brand/quote.png')}}" alt="" class="quote">
                        <div class="star">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="disc">
                            I have used some AI writing tools liked Rytr, Peppertype, and Jasper but I found Writesonic to be the best for writing complete blog posts.
                        </p>
                        <div class="authore-area">
                            <div class="author">
                                <img src="{{asset('font/assets/images/team/01.png')}}" alt="team">
                                <div class="info">
                                    <p>Samuel</p>
                                    <span>Blogger</span>
                                </div>
                            </div>
                            <img src="{{asset('font/assets/images/team/brand/01.png')}}" alt="">
                        </div>
                    </div>
                    <!-- single tream area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts testimonials area emd -->

    <!-- cta area start -->
    <!-- cta area start -->
    <div class="rts-cta-area rts-section-gapBottom  bg_faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-wrapper bg_image">
                        <div class="left">
                            <h3 class="title">
                                All set to level up <br>
                                your content game?
                            </h3>
                            <a href="{{route('aboutUs')}}" class="rts-btn btn-primary">Get Started Now</a>
                        </div>
                        <div class="right">
                            <img src="{{asset('font/assets/images/cta/02.png')}}" alt="cta-area">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
