<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flen.tavonline.co/flen/news-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 16:14:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flen - Agency & Portfolio Template</title>


    <!-- Fonts  -->
    <link rel="stylesheet" href="assets/fonts/Butler_Stencil_Webfont/stylesheet.css">
    <link rel="stylesheet" href="assets/fonts/the_secret/stylesheet.css">
    <link rel="stylesheet" href="assets/fonts/Butler_Webfont/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Font icons -->
    <link rel="stylesheet" href="assets/icon-fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/icon-fonts/remixicon/remixicon.css">

</head>


<body class="smooth-scroll">

    <div id="preloader" class="preloader">
        <div class="percentage">0%</div>
        <div class="progress"></div>
    </div>

    <div class="tavonline-overlay"></div>


    <div id="cursor">
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="ri-arrow-right-up-line"></i>
        <div class="cursor__bg"></div>
    </div>

    <div id="content-scroll" data-scrollbar>
        <div class="site-wrap" data-barba="wrapper">
            <main data-barba="container">


                <!-- HEADER
        ============================================= -->
                <header>
                    <div class="header-container">
                        <div class="row px-0 gx-0">
                            <div class="col-xl-2 col-md-6 col-6">
                                <a href="/" class="logo"><img src="assets/images/logo.png" alt="logo"></a>
                            </div>
                            <div class="col-xl-10 col-md-6 col-6">
                                <div class="burger-menu">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- OVERLAY MENU -->
                <div class="overlay-menu">
                    <div class="close">
                        <i class="ri-close-line"></i>
                    </div>
                    <div class="row overlay-wrap">
                        <div class="col-xl-8 col-md-7 left-area">
                            <nav>
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">Home</a>
                
                                    </li>
                                    <li><a href="{{ route('dashboard') }}">About</a></li>
                                    <li><a href="{{ route('dashboard') }}">Contact</a></li>
                                  

                                    @if (Route::has('login'))

                    @auth
                    </li> <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                        <li>   <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                
            @endif




                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-4 col-md-5 right-area">
                            <ul>
                                <li><span class="title">Brief us</span></li>
                                <li><a href="mailto:rme@gmail.com" target="_blank">rme@gmail.com</a>
                                </li>
                                <li><a href="tel:94754160000" target="_blank">Tel. +94 754 160 000</a></li>
                            </ul>
                            <ul>
                                <li><span class="title">Our Office</span></li>
                                <li>
                                    <p>Fort, Galle<br> Sri Lanka</p>
                                </li>
                            </ul>
                            <ul>
                                <li><span class="title">Follow us</span></li>
                                <li>
                                    <ul class="social-links">
                                        <li><a href="#" target="_blank">Behance</a></li>
                                        <li><a href="#" target="_blank">Dribbble</a></li>
                                        <li><a href="#" target="_blank">Instagram</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- PAGE CAPTION 
    ============================================= -->
                <div class="page-caption">
                    <canvas class="scene subpage scene--full" id="scene"></canvas>
                    <div class="spacer-300 spacer-md-200"></div>
                    <div class="container">
                        <h1 class="title text-anime">The rME</h1>
                        <div class="spacer-30 spacer-sm-15"></div>
                        <h6 class="text-anime sub-caption">Digital Pioneers |  ඩිජිටල් ප්‍රහාරයේ
                            බ්ලොග්ස්.</h6>
                    </div>
                </div>


                <!-- NEWS
            ============================================= -->
                <div class="news-type-2">
                    <div class="container">
                        <div class="spacer-150 spacer-md-75"></div>
                        <div class="row g-5">
                            <!-- a item -->
                            <div class="col-md-6 col-12">
                                <a href="single-news.html" class="news-image image-anime">
                                    <img src="../assets/images/news-1.jpg" alt="">
                                </a>
                                <div class="spacer-30"></div>
                                <div class="categories text-anime">
                                    <a href="#" class="subheading">WEBSITES</a>
                                    <a href="#" class="subheading">BLOGS</a>
                                    <a href="#" class="subheading">MARKETING</a>
                                </div>
                                <div class="spacer-15"></div>
                                <a href="/news">
                                    <h6 class="text-anime title">Unleashing the Digital Transformation Power: Amplify
                                        Your Online Presence with Digital Agencies</h6>
                                </a>
                                <div class="spacer-30"></div>
                                <div class="date text-anime">SEP 20, 2023</div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="spacer-150 spacer-md-60 spacer-sm-60"></div>
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <h3>Let’s create something<br> great together!</h3>
                            </div>
                            <div class="col-md-4 col-12 align-right button-wrapper">
                                <a href="#" class="flen-btn"><span data-hover="rme@gmail.com">rme@gmail.com</span></a>
                            </div>
                        </div>
                        <div class="spacer-30"></div>
                        <div class="row bottom-wrapper">
                            <div class="col-xl-4 col-md-12">
                                <p class="little">Copyright © 2023 rME</p>
                            </div>
                            <div class="col-xl-8 col-md-12 social-links">
                                <a href="#">Facebook</a>
                                <a href="#">Behance</a>
                                <a href="#">Dribbble</a>
                                <a href="#">Instagram</a>
                            </div>
                        </div>
                    </div>
                </footer>

            </main>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/webgl.js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC44qiQKRvAB1ETh4F1oQcSs9PIfLPbCQE&amp;sensor=false"></script>
    <!-- <script src="assets/js/map.js"></script> -->
    <script src="assets/js/main.js"></script>



</body>

</html>