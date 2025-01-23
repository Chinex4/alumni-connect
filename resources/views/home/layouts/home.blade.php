<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta Data -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> {{ $title ?? 'AlumniConnect' }} </title>

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@heischinex" />
    <meta name="twitter:creator" content="@heischinex" />
    <meta name="twitter:url" content="http://twitter.com/" />
    <meta name="twitter:title" content="Your home page title, max 140 char" />
    <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char " />
    <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/images/twittercardimg/twittercard-144-144.png" />
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title" />
    <meta property="og:url" content="http://your domain here.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Your site name here" />
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website" />
    <!-- 'article' for single page  -->
    <meta property="og:image" content="assets/images/opengraph/fbphoto-476-476.png" />
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends here -->

    <!-- desktop bookmark -->
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png" />


    <!-- Dependency Styles -->
    <link id="style-bundle" rel="stylesheet" href="assets/vendors/css/bundle.css" type="text/css" />

    <!-- Site Stylesheet -->
    <link id="cbx-style" rel="stylesheet" href="assets/css/style-default.css" type="text/css" />
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet" />

    @vite('resources/css/app.css')

</head>

<body id="home-v1" class="home-page-one" data-style="default">
    <a href="#" class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <div id="main_content" class="main-content">


        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
        <header class="site-header header-fixed" data-responsive-width="991">
            <div class="container">
                <div class="header-inner">
                    <nav id="site-navigation" class="main-nav">
                        <div class="site-logo">
                            <a href="{{ route('index') }}" class="logo">
                                <h1 class="text-5xl font-bold text-blue-600">AlumniConnect</h1>
                            </a>

                            <div class="burger-menu">
                                <span class="bar-one"></span>
                                <span class="bar-two"></span>
                                <span class="bar-three"></span>
                            </div>
                        </div>
                        <!-- /.site-logo -->

                        <div class="menu-wrapper main-nav-container canvas-menu-wrapper" id="mega-menu-wrap">
                            <div class="canvas-header">
                                <div class="mobile-offcanvas-logo">
                                    <a href="{{ route('index') }}" class="logo">
                                        <h1 class="text-4xl font-bold text-blue-600">AlumniConnect</h1>
                                    </a>
                                </div>

                                <div class="close-menu" id="page-close-main-menu">
                                    <i class="fas fa-times"></i>
                                </div>
                            </div>

                            <ul class="codeboxr-main-menu">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('event') }}">Event</a></li>
                                
                                <li class="has-submenu menu-item-depth-0">
                                    <a href="#">Pages</a>

                                    <ul class="sub-menu">
                                        
                                        <li><a href="{{ route('committee') }}">Committee</a></li>
                                        <li><a href="{{ route('directory') }}">Directory</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        <li><a href="{{ route('career') }}">Career</a></li>
                                        <li>
                                            <a href="{{ route('typography') }}">Typography</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.menu-wrapper -->
                    </nav>
                    <!-- /.site-nav -->
                </div>
                <!-- /.header-inner -->
            </div>
            <!-- /.container-full -->
        </header>
        <!-- /.site-header -->

        <main>
            {{ $slot }}
        </main>



        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
        <footer id="footer-area">
            <!-- Footer Widget Start -->
            <div class="footer-widget section-padding">
                <div class="container">
                    <div class="row md:justify-around">
                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-widget-wrap">
                                <div class="widgei-body">
                                    <div class="footer-about">
                                        <a href="{{ route('index') }}" class="logo">
                                            <h1 class="text-5xl font-bold text-white">AlumniConnect</h1>
                                        </a>
                                        <p>
                                            AlumniConnect is a dynamic platform that bridges the gap between past,
                                            present, and future graduates. Our mission is to empower alumni by fostering
                                            connections, sharing knowledge, and creating opportunities for
                                            collaboration.
                                        </p>
                                        <a href="#">Phone: +234 704 993 8128</a><br />
                                        <a href="#">Email: support@alumniconnect.com.ng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-widget-wrap">
                                <h4 class="widget-title">Get In Touch</h4>
                                <div class="widgei-body">
                                    <p>
                                        We are legend Lorem ipsum dolor sitmet, nsecte
                                        ipisicing eit, sed
                                    </p>
                                    <div class="newsletter-form">
                                        <form id="cbx-subscribe-form">
                                            <input name="email" type="email" placeholder="Enter Your Email"
                                                id="subscribe" required />
                                            <button type="submit">
                                                <i class="far fa-paper-plane"></i>
                                            </button>

                                            <p id="cbx-subscribe-form-error"></p>
                                        </form>
                                    </div>
                                    <div class="footer-social-icons">
                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->


                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Bottom Start -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-lg-12">
                            <div class="footer-bottom-text">
                                <p>© {{ date('Y') }} AlumniConnect, All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom End -->
        </footer>



    </div>
    <!-- /#site -->


    <!-- Dependency Scripts -->
    <script id="script-bundle" src="assets/vendors/js/bundle.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from codeboxr.net/themedemo/AlumniConnect/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 20:33:55 GMT -->

</html>
