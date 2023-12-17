<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("font/assets/images/fav.png")}}">
    <title>{{allsetting('site_name')}} :: {{$title}}</title>
    <!-- bootstrap min css -->
    <link rel="stylesheet preload" href="{{asset("font/assets/css/plugins/fontawesome-6.css")}}" as="style">
    <link rel="stylesheet preload" href="{{asset("font/assets/css/plugins/unicons.css")}}" as="style">
    <link rel="stylesheet preload" href="{{asset("font/assets/css/plugins/swiper.min.css")}}" as="style">
    <link rel="stylesheet preload" href="{{asset("font/assets/css/vendor/metismenu.css")}}" as="style">
    <link rel="stylesheet preload" href="{{asset("font/assets/css/vendor/bootstrap.min.css")}}" as="style">
    <!-- custom css style -->
    <link rel="stylesheet preload" href="{{asset("font/assets/css/style.css")}}" as="style">
</head>

<body>

<!-- rts header area start -->
<header class="header-one header--sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-main-wrapper">
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset("font/assets/images/logo/01.svg")}}" alt="logo">
                    </a>
                    <!-- nav -->
                    <div class="nav-area-main d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <nav>
                            <ul>

                                <li><a class="links-main" href="{{route('home')}}">Home</a></li>

                                <li><a class="links-main" href="{{route('aboutUs')}}">About Us</a></li>

                                <li class="has-dropdown mega-menu">
                                    <a class="links-main" href="#">Solutions</a>
                                    <div class="rts-mega-menu">
                                        <div class="wrapper">
                                            <div class="row g-0">
                                                <div class="col-lg-3">
                                                    <ul class="mega-menu-item">
                                                        <li>
                                                            <a href="about.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/01.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>About OpenUp</p>
                                                                    <span>Get know about openup </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="use-case.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/02.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Use Cases</p>
                                                                    <span>provide detailed explan</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="pricing.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/03.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Pricing</p>
                                                                    <span>Openup provide pro price</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="log-in.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/04.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Login</p>
                                                                    <span>Create content by ou</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul class="mega-menu-item">
                                                        <li>
                                                            <a href="blog.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/05.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Blog</p>
                                                                    <span>Read openup artical</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="case-details.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/06.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Use Cases Details</p>
                                                                    <span>provide detailed explan</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="pricing-two.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/07.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Pricing 2</p>
                                                                    <span>Openup provide pro price</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="registration.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/08.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Register</p>
                                                                    <span>Make your account</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul class="mega-menu-item">
                                                        <li>
                                                            <a href="blog-details.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/09.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Blog Details</p>
                                                                    <span>Read openup artical</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="use-case-2.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/10.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Use Cases 2</p>
                                                                    <span>provide detailed explan</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="pricing-three.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/11.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Pricing 3</p>
                                                                    <span>Openup provide pro price</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="reset.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/12.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Reset</p>
                                                                    <span>Rest your possword</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul class="mega-menu-item">
                                                        <li>
                                                            <a href="contact.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/13.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Contact</p>
                                                                    <span>Contact with openup</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="case-details-2.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/14.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Use Cases Details 2</p>
                                                                    <span>provide detailed explan</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="faq.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/15.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>FAQ</p>
                                                                    <span>Do you know openup</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">
                                                                <img src="{{asset("font/assets/images/mega-menu/16.svg")}}" alt="icon">
                                                                <div class="info">
                                                                    <p>Error</p>
                                                                    <span>Back to home</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li><a class="links-main" href="feature.html">Feature</a></li>
                                <li><a class="links-main" href="{{route('contactUs')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- nav end -->
                    <div class="button-area">
                        <a href="log-in.html" class="rts-btn btn-lonly mr--30">Sign in</a>
                        <a href="about.html" class="rts-btn btn-blur">Get Started</a>
                    </div>

                    <div class="menu-btn d-xl-none d-lg-none d-md-block d-sm-block" id="menu-btn">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                            <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                            <rect width="20" height="2" fill="#1F1F25"></rect>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- rts header area end -->

@yield('content')


<div class="rts-footer-area  bg-footer footer-one">
    <div class="container rts-section-gapTop pb--100 pb_sm--30">
        <div class="row">
            <div class="col-lg-12">
                <!-- footer main wrapper -->
                <div class="footer-one-main-wrapper">
                    <!-- single sized  footer  -->
                    <div class="footer-singl-wized left-logo">
                        <div class="head">
                            <a href="#">
                                <img src="{{asset("font/assets/images/logo/01.svg")}}" alt="logo">
                            </a>
                        </div>
                        <div class="body">
                            <p class="dsic">
                                Openup is an artificial intelligence trained to automate important tasks such writing optimized product descriptions.
                            </p>
                            <div class="social-style-two">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-discord"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class="footer-singl-wized">
                        <div class="head">
                            <h6 class="title">Company</h6>
                        </div>
                        <div class="body">
                            <ul class="menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class="footer-singl-wized">
                        <div class="head">
                            <h6 class="title">Use Cases</h6>
                        </div>
                        <div class="body">
                            <ul class="menu">
                                <li><a href="#">For Teams</a></li>
                                <li><a href="#">For Email Marketers</a></li>
                                <li><a href="#">For Blog Writers</a></li>
                                <li><a href="#">For social managers</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class="footer-singl-wized input-area">
                        <div class="head">
                            <h6 class="title">News & Update</h6>
                        </div>
                        <div class="body">
                            <form action="#">
                                <div class="input-area-fill">
                                    <input type="email" placeholder="Enter Your Email" required>
                                    <button> Subscribe</button>
                                </div>
                            </form>
                            <p class="disc">
                                Subscribe our newsletter for future updates. don’t worry we don’t spam your email address
                            </p>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                </div>
                <!-- footer main wrapper end -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- footer-copyright-area start -->
                <div class="copy-right-start-two">
                    <p><a href="https://reactheme.com/" target="_blank">Reactheme©</a> 2023. All Rights Reserved.</p>
                    <ul>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- footer-copyright-area end -->
            </div>
        </div>
    </div>
</div>
<!-- rts footer area end -->




<!-- rts backto top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
<!-- rts backto top end -->


<script src="{{asset("font/assets/js/vendor/jquery.min.js")}}" defer></script>
<script src="{{asset("font/assets/js/vendor/metismenu.js")}}" defer></script>
<script src="{{asset("font/assets/js/plugins/bootstrap.min.js")}}" defer></script>
<script src="{{asset("font/assets/js/plugins/swiper.js")}}" defer></script>
<script src="{{asset("font/assets/js/plugins/contact.form.js")}}" defer></script>
<script src="{{asset("font/assets/js/main.js")}}" defer></script>

</body>


<!-- Mirrored from themewant.com/products/html/openup/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 10:19:42 GMT -->
</html>
