<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yoga Studio | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section set-bg" data-setbg="{{asset('assets/frontend/yogastudio/img/header-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="main-menu">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <nav class="inner-main-navbar mobile-menu">
                            <ul>
                            <li><a href="./blogg"><i class="fa fa-home" >    Home</i></a></li>
                                <li><a href="./tanya"><i class="fa fa-comments"></i>    Forum</a></li>
                                <li><a href="./about"><i class="fa fa-clock-o"></i>     About Us</a></li>
                                <li><a href="./contact.html"><i class="fa fa-envelope-o"></i>   Contact</a></li>
                            </ul>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Single Section Begin -->
    <section class="hero-single set-bg spad" data-setbg="{{asset('assets/frontend/yogastudio/img/footer-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-item">
                        <span class="tickler-text">Who we are</span>
                        <h1>About us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Single Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-lt">
                        <div class="section-title">
                            <span>Your inner Chi</span>
                            <h2>The very heart of yoga </h2>
                        </div>
                        <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. enean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis. Pellentesque placerat sit amet leo in vestibulum. Suspendisse quam neque, rutrum vel scelerisque</p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="about-img">
                        <img src="{{asset('assets/frontend/yogastudio/img/about-rt.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us section End -->


    <!-- About Counter Begin -->
    <div class="about-counter set-bg spad" data-setbg="{{asset('assets/frontend/yogastudio/img/counter-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="single-counter">
                        <i class="flaticon-001-meditation"></i>
                        <span class="counter-num counter">325</span>
                        <span>Active members</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="single-counter">
                        <i class="flaticon-011-hamsa"></i>
                        <span class="counter-num counter">7</span>
                        <span>Instructors</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="single-counter">
                        <i class="flaticon-010-chakra"></i>
                        <span class="counter-num counter">49</span>
                        <strong>k</strong>
                        <span>Ig follovers</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="single-counter">
                        <i class="flaticon-009-yoga-1"></i>
                        <span class="counter-num counter">15</span>
                        <span>Awards won</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Counter End -->

    <!-- About Team Section Begin -->
    <section class="about-team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Your inner Chi</span>
                        <h2>The team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-team-member">
                        <div class="team-pic">
                            <img src="{{asset('assets/frontend/yogastudio/img/team-member/member-1.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <span>Yoga master</span>
                            <h4>Maria Smith</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-team-member">
                        <div class="team-pic">
                            <img src="{{asset('assets/frontend/yogastudio/img/team-member/member-2.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <span>Pilates instructor</span>
                            <h4>Anna Michaels</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-team-member">
                        <div class="team-pic">
                            <img src="{{asset('assets/frontend/yogastudio/img/team-member/member-3.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <span>Yoga teacher</span>
                            <h4>Carla Williams</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Team Section End -->
    
    <!-- About Call To Action Begin -->
    <section class="about-callto-action set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/about-callto-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-call-to-text">
                        <h2>Begginers class start this month</h2>
                        <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. enean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo,</p>
                        <a href="#" class="primary-btn about-callto-btn">Join now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Call To Action End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="{{asset('assets/frontend/yogastudio/img/footer-bg.jpg')}}">
        <div class="container">
            <div class="contact-inner">
                <!-- <div class="contact-form">
                    <div class="section-title">
                        <span>Say hello</span>
                        <h2>Contact us</h2>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Mail">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                        <button type="submit" class="submit-btn">Send</button>
                    </form>
                </div> -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-text">
                            <a href="./home.html" class="logo"><img src="{{asset('assets/frontend/yogastudio/img/hero-slider/image.png')}}" alt=""></a>
                            <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. “True meditation is about being fully present with everything that is–including.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <div class="copyright text-white">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    
    <!-- Js Plugins -->
    <script src="{{asset('assets/frontend/yogastudio/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/yogastudio/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/yogastudio/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/frontend/yogastudio/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/yogastudio/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/frontend/yogastudio/js/main.js')}}"></script>
</body>

</html>