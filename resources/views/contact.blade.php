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
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/bootstrap.min.cs')}}s" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/font-awesome.min.cs')}}s" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/flaticon.cs')}}s" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/owl.carousel.min.cs')}}s" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/slicknav.min.cs')}}s" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/yogastudio/css/style.cs')}}s" type="text/css">
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
                            
                            </a>
                        </div>
                        <nav class="inner-main-navbar mobile-menu">
                            <ul>
                            <li><a href="./blogg"><i class="fa fa-home" >    Home</i></a></li>
                                <li><a href="./tanya"><i class="fa fa-comments"></i>    Forum</a></li>
                                <li><a href="./about"><i class="fa fa-clock-o"></i>     About Us</a></li>
                                <li><a href="./contact.html"><i class="fa fa-envelope-o"></i>   Contact</a></li>
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
    <section class="hero-single set-bg spad" data-setbg="{{ asset('assets/frontend/yogastudio/img/footer-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-item">
                        <span class="tickler-text">Say hello</span>
                        <h1>Contact Me</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Single Section End -->
    <!-- Contact Section Begin -->
    <section class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-lt">
                        <div class="section-title">
                            <span>Contact info</span>
                            <h2>Get in touch </h2>
                            <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. enean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti.</p>
                        </div>
                        <div class="address-details">
                            <h5>Information</h5>
                            <ul>
                                <li>Sephiyanisyaa</li>
                                <li>+6283824212387</li>
                                <li>sephiyanigabriela@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="yoga-schedule">
                        <div class="section-title">
                            <span>Hours</span>
                            <h2>Schedule</h2>
                        </div>
                        <ul>
                            <li><span>Monday</span><span class="time">10:30 - 19:00</span></li>
                            <li><span>Tuesday</span><span class="time">10:30 - 19:00</span></li>
                            <li><span>Wednesday</span><span class="time">10:30 - 19:00</span></li>
                            <li><span>Thursday</span><span class="time">10:30 - 19:00</span></li>
                            <li><span>Friday</span><span class="time">10:30 - 19:00</span></li>
                            <li><span>Saturday</span><span class="time">10:30 - 14:00</span></li>
                            <li><span>Sunday</span><span class="time">Closed</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Map Section Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24176.251535937678!2d-73.96828677849068!3d40.761333182809906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258c4d85a0d8d%3A0x11f877ff0b8ffe27!2sRoosevelt+Island!5e0!3m2!1sen!2sbd!4v1564859733175!5m2!1sen!2sbd" height="590" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Map Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="{{asset('assets/frontend/yogastudio/img/footer-bg.jpg')}}">
        <div class="container">
            <div class="contact-inner">
                <div class="contact-form">
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
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-text">
                            <a href="./home.html" class="logo"><img src="{{asset('assets/frontend/yogastudio/img/image.png')}}" alt=""></a>
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