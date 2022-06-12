<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDUCAMPUS | Home Page 1</title>

    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets_1/fonts/Lato-Medium.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets_1/fonts/Lato-Heavy.css') }}" rel='stylesheet' type='text/css'>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets_1/css/bootstrap.min.css') }}">

    <!-- Font awesome css -->
    <link rel="stylesheet" href="{{ asset('assets_1/css/font-awesome.min.css') }}">

    <!-- Stroke Font Icon css -->
    <link rel="stylesheet" href="{{ asset('assets_1/css/pe-icon-7-stroke.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('assets_1/css/animate.css') }}">

    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="{{ asset('assets_1/css/owl.carousel.css') }}">

    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets_1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_1/css/responsive.css"') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets_1/img/apple-touch-icon-precomposed.png') }}">
    <link type="{{ asset('image/png') }}" href="{{ asset('assets_1/img/fav-icon.png') }}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Linkon Miyan from rexord.com -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
</head>

<body>
<div id="preloader">
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
</div>

<header class="header_area">
    <div class="container">
        <div class="header_content">
            <div class="row">
                <div class="col-md-3 col-sm-2">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('assets_1/img/icon_cap.png') }}" alt="">Edu<span>campus</span></a>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-10 nav_area">
                    <nav class="main_menu">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="current_page_item"><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="alumni.html">Alumni</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <form action="index.html" class="header_search hidden-xs">
                        <input type="text" placeholder="Search">
                        <input type="submit" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="key_to_success_area">
    <div class="container">
        <div class="row">
            <div class="key_to_success">
                <div class="col-md-7">
                    <div class="key2seccess_txt">
                        <h2>Образование - это ключ к твоему успеху.</h2>
                        <p>Выберите по ссылке ниже онлайн-курсы, которые вы хотели бы Пройти в рамках своей образовательной программы
                            и которые Соответствуют вашему направлению.</p>
                        <a href="{{route('course.index')}}" class="rm_btn">Начать</a>
                    </div>
                </div>
                <div class="col-md-5 hidden-sm hidden-xs">
                    <div class="key2seccess_txt">
                        <img src="{{ asset('assets_1/img/kartinka2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_courses_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_heading">
                    <h1>Courses In Our University</h1>
                    <p>Check our main courses and coachings</p>
                </div>
            </div>
        </div>
        <div class="row all_our_courses">
            <div class="col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="{{ asset('assets_1/img/single_course_thumb_1.png') }}" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <img src="{{ asset('assets_1/img/icon_course_1.png') }}" alt="" class="course_icon">
                        <h2>Political Science</h2>
                        <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="{{ asset('assets_1/img/single_course_thumb_2.png') }}" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <img src="{{ asset('assets_1/img/icon_course_2.png') }}" alt="" class="course_icon">
                        <h2>literature</h2>
                        <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="{{ asset('assets_1/img/single_course_thumb_3.png') }}" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <img src="{{ asset('assets_1/img/icon_course_3.png') }}" alt="" class="course_icon">
                        <h2>advance mathematics</h2>
                        <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="{{ asset('assets_1/img/single_course_thumb_4.png') }}" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <img src="{{ asset('assets_1/img/icon_course_4.png') }}" alt="" class="course_icon">
                        <h2>micro biology</h2>
                        <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="{{ asset('assets_1/img/single_course_thumb_5.png') }}" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <img src="{{ asset('assets_1/img/icon_course_5.png') }}" alt="" class="course_icon">
                        <h2>global economic</h2>
                        <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single_our_course">
                    <div class="sing_course_thumb">
                        <img src="{{ asset('assets_1/img/single_course_thumb_6.png') }}" alt="">
                    </div>
                    <div class="sing_course_txt">
                        <img src="{{ asset('assets_1/img/icon_course_6.png') }}" alt="" class="course_icon">
                        <h2>computer science</h2>
                        <p>Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's time to put on makeup.</p>
                        <a href="#">Apply now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="search_courses_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_heading">
                    <h1>Search For Courses</h1>
                    <p>Fill the fields to seek for courses</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="course_search">
                    <form action="index.html">
                        <select name="">
                            <option value="">Category</option>
                            <option value="">Political Science</option>
                            <option value="">Literature</option>
                            <option value="">Advance Mathematics</option>
                            <option value="">Micro Biology</option>
                            <option value="">Global Economic</option>
                            <option value="">Computer Science</option>
                        </select>
                        <select name="">
                            <option value="">Duration</option>
                            <option value="">3 Yr</option>
                            <option value="">4 Yr</option>
                        </select>
                        <select name="">
                            <option value="">Level</option>
                            <option value="">Bachelor's Degree</option>
                            <option value="">Master’s Degree</option>
                        </select>
                        <select name="">
                            <option value="">Location</option>
                            <option value="">Texas</option>
                            <option value="">New York</option>
                        </select>
                        <input type="text" placeholder="Keywords">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<footer class="footer_area">
    <div class="footer_top">
        <div class="container">

            <div class="row">
                <div class="footer_widgets">
                    <div class="col-md-3 col-sm-6">
                        <div class="single_footer_widget">
                            <h2 class="widget_title">About us</h2>
                            <p>On my way to where the air is sweet. Can you tell me how to get how to get to Sesame Street! The first mate and his Skipper too will do their very best to make the others comfortable </p>
                            <ul class="footer_social">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_footer_widget">
                            <h2 class="widget_title">Latest posts</h2>
                            <ul class="latest_post">
                                <li>
                                    <img src="{{ asset('assets_1/img/latest_post_1.jpg') }}" alt="">
                                    <div class="latest_post_txt">
                                        <h4><a href="#">On your mark get set and go now</a></h4>
                                        <p>April 12, 2015</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets_1/img/latest_post_2.jpg') }}" alt="">
                                    <div class="latest_post_txt">
                                        <h4><a href="#">The ship set ground on the shore of this</a></h4>
                                        <p>April 12, 2015</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets_1/img/latest_post_3.jpg') }}" alt="">
                                    <div class="latest_post_txt">
                                        <h4><a href="#">This time there's no stopping us from away</a></h4>
                                        <p>April 12, 2015</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_footer_widget">
                            <h2 class="widget_title">latest tweets</h2>
                            <ul class="latest_tweet">
                                <li>Educamus is one of the excellent university template
                                    <a href="#">http://educampus/universitybest/</a>
                                    <span>1 hours ago</span>
                                </li>
                                <li>Educamus is one of the excellent university template
                                    <a href="#">http://educampus/universitybest/</a>
                                    <span>1 hours ago</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single_footer_widget">
                            <h2 class="widget_title">contact info</h2>
                            <ul class="footer_contact">
                                <li>09 Design Street,Downtown, Sydney, Australia</li>
                                <li>+01 123 456 78</li>
                                <li>+01 123 456 78</li>
                                <li>Info@educampus.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p>© 2015 educampus. All rights reserved</p>
                </div>
                <div class="col-sm-8">
                    <nav class="footer_menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery Latest version -->
<script src="{{ asset('assets_1/js/vendor/jquery.1.11.1.js') }}"></script>

<!-- Google Maps API -->
<script src="{{ asset('assets_1/https://maps.googleapis.com/maps/api/js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets_1/js/bootstrap.min.js') }}"></script>

<!-- jQuery Counterup and Waypoints -->
<script src="{{ asset('assets_1/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets_1/js/jquery.counterup.min.js') }}"></script>

<!-- jQuery easing -->
<script src="{{ asset('assets_1/js/jquery.easing.1.3.min.js') }}"></script>

<!-- jQuery owl carousel -->
<script src="{{ asset('assets_1/js/owl.carousel.min.js') }}"></script>

<!-- WOW Animation -->
<script src="{{ asset('assets_1/js/wow.min.js') }}"></script>

<!--Activating WOW Animation only for modern browser-->
<!--[if !IE]><!-->
<script type="text/javascript">new WOW().init();</script>
<!--<![endif]-->

<!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
<!--[if gte IE 9]-->
<script type="text/javascript">new WOW().init();</script>
<![endif]-->

<!--Opacity & Other IE fix for older browser-->
<!--[if lte IE 8]-->
<script type="text/javascript" src="{{ asset('assets_1/js/ie-opacity-polyfill.js') }}"></script>
<![endif]-->

<!-- jQuery main script -->
<script src="{{ asset('assets_1/js/main.js') }}"></script>
</body>
</html>
