<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                            <a href="index.html" class="logo"><img src="assets/images/logo.png" alt="logo"></a>
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
                                    <ul class="sub">
                                        <li><a href="index.html">Creative Agency</a></li>
                                        <li><a href="corporate.html">Corporate</a></li>
                                        <li><a href="creative-portfolio.html">Creative Portfolio</a></li>
                                        <li><a href="freelancer.html">Freelancer</a></li>
                                        <li><a href="photographer.html">Photographer</a></li>
                                        <li><a href="projects-grid.html">Creative Grid</a></li>
                                        <li><a href="classic-menu.html">Classic Menu</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Portfolio</a>
                                    <ul class="sub">
                                        <li><a href="roll-showcase.html">Roll Showcase</a></li>
                                        <li><a href="cross-showcase.html">Cross Showcase</a></li>
                                        <li><a href="fullscreen-showcase.html">Fulllscreen Showcase</a></li>
                                        <li><a href="letterflow-showcase.html">Letter Showcase</a></li>
                                        <li><a href="half-showcase.html">Half Showcase</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="menu-item-has-children"><a href="#">Journal</a>
                                    <ul class="sub">
                                        <li class="current-menu-item"><a href="news-classic.html">Journal
                                                Classic</a></li>
                                        <li><a href="news-list.html">Journal List</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-4 col-md-5 right-area">
                        <ul>
                            <li><span class="title">Brief us</span></li>
                            <li><a href="mailto:hello@flencreative.com" target="_blank">hello@flencreative.com</a>
                            </li>
                            <li><a href="tel:34937606800" target="_blank">Tel. +34 937 606 800</a></li>
                        </ul>
                        <ul>
                            <li><span class="title">Our Office</span></li>
                            <li>
                                <p>1788 Morningview Lane, 10013<br> New York</p>
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
                            <a href="single-news.html">
                                <h6 class="text-anime title">Unleashing the Digital Transformation Power: Amplify
                                    Your Online Presence with Digital Agencies</h6>
                            </a>
                            <div class="spacer-30"></div>
                            <div class="date text-anime">MAY 20, 2022</div>
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
<script src="assets/js/map.js"></script>
<script src="assets/js/main.js"></script>



</body>
</html>
