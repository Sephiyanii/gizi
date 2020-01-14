<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pakar Gizi Ibu Hamil&Menyusui</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/yogastudio/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/yogastudio/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/yogastudio/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/yogastudio/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/yogastudio/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/yogastudio/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">/index#
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/counte-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="main-menu">
                        <nav class="inner-main-navbar mobile-menu">
                            <ul>
                                <li><a href="./index">Home</a></li>
                                <li><a href="./blog">Blog</a></li>
                                <li><a href="./about-us.html">About us</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Slider Section Begin -->
    <section class="hero-slider">
        <div class="slider-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/hero-slider/ll.jpg')}}">
                <div class="container">
                    <h2>Pakar Gizi Ibu Hamil & Menyusui</h2>
                    <p>
                   <h5>Gizi Seimbang untuk Ibu Hamil dan Menyusui.</h5>
                    </p>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/hero-slider/pp.jpeg')}}">
                <div class="container">
                    <h2>Pakar Gizi Ibu Hamil</h2>
                    <p>
                    <h6>Kebutuhan nutrien meningkat selama hamil. Namun tidak semua kebutuhan nutrien meningkat secara proporsional. .</h6>
                            </p>
                    <a href="#" class="primary-btn">Read More</a>

                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{asset('assets/frontend/yogastudio/img/hero-slider/img.jpg')}}">
                <div class="container">
                    <h2>Pakar Gizi Ibu Menyusui</h2>
                    <p>
                    <h6>Kebutuhan nutrisi selama laktasi didasarkan pada kandungan nutrisi air susu ibu dan jumlah nutrisi penghasil susu.</h6>
                    </p>
                    <a href="#" class="primary-btn">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider Section End -->

    <!-- Yoga Classes Section Begin -->
    <section class="yoga-classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="home-title">
                        <span class="tickler-text">Who we are</span>
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-classes">
                         <img src="{{ asset('assets/frontend/yogastudio/img/hero-slider/kk.jpg')}}" alt="">
                        <h3>Menjaga Kesehatan Kandungan</h3>
                        <p>Memiliki seorang anak merupakan dambaan bagi pasangan suami istri pada umumnya. Bagi para wanita yang sedang hamil, akan lebih baik apabila selalu mengetahui perkembangan calon buah hati Anda.</p>
                   <a href="./blog" class="primary-btn blog-btn">Lihat Blog</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-classes">
                        <img src="{{ asset('assets/frontend/yogastudio/img/hero-slider/images.jpeg')}}" alt="" width="500px">
                        <h3> makanan sehat untuk ibu Hamil </h3>
                        <p>Pola makan saat hamil merupakan hal yang harus diperhatikan untuk menjaga kesehatan ibu dan bayi. </p>
                                       <a href="./blogg" class="primary-btn blog-btn">Lihat Blog</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-classes">
                        <img src="{{ asset('assets/frontend/yogastudio/img/hero-slider/jk.jpg')}}" alt="" width="500px">
                        <h3>Gizi Untuk Bayi</h3>
                        <p>Nutrisi untuk bayi dimulai dengan ASI (air susu ibu), yang khusus dibuat untuk bayi Anda. </p>
                     <a href="./blog" class="primary-btn blog-btn">Lihat Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Yoga Classes Section End -->

    <!-- Yoga Name Section Begin -->
    <section class="different-yoga set-bg spad" data-setbg="{{ asset ('assets/frontend/yogastudio/img/yoga-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="home-title">
                        <span>Your inner Chi</span>
                        <h2>&#34;True meditation is about being fully present with everything that is–including discomfort and challenges. It is not an escape from life.&#34;
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="yoga-name-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-yoga-name">
                        <div class="yoga-pic">
                            <img src="{{ asset('assets/frontend/yogastudio/img/yoga-1.jpg')}}" alt="">
                        </div>
                        <div class="yoga-text">
                            <span>Your inner Chi</span>
                            <h4>Aenean quis velit lacinia <br/>pulvinar.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-yoga-name">
                        <div class="yoga-pic">
                            <img src="img/yoga-2.jpg" alt="">
                        </div>
                        <div class="yoga-text">
                            <span>Your inner Chi</span>
                            <h4>Velit pulvinar, pelle <br/>neque .</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-yoga-name">
                        <div class="yoga-pic">
                            <img src="img/yoga-3.jpg" alt="">
                        </div>
                        <div class="yoga-text">
                            <span>Your inner Chi</span>
                            <h4>Quis velit pulvinar, pellen <br/>tesque.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Yoga Name Section End -->

    <!-- Client Section Begin -->
    <section class="client-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="client-left-img">
                        <img src="{{ asset ('assets/frontend/yogastudio/img/hero-slider/img.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="client-says">
                        <div class="section-title">
                            <span>Your inner Chi</span>
                            <h2>What our clients say</h2>
                        </div>
                        <div class="client-items owl-carousel">
                            <div class="single-client-item">
                                <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. “True meditation is about being fully present with everything that is–including discomfort and challenges. It is not an escape from life.</p>
                                <h5>Mark Smith, <span>Client</span></h5>
                            </div>
                            <div class="single-client-item">
                                <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. “True meditation is about being fully present with everything that is–including discomfort and challenges. It is not an escape from life.</p>
                                <h5>Mark Smith, <span>Client</span></h5>
                            </div>
                            <div class="single-client-item">
                                <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. “True meditation is about being fully present with everything that is–including discomfort and challenges. It is not an escape from life.</p>
                                <h5>Mark Smith, <span>Client</span></h5>
                            </div>
                            <div class="single-client-item">
                                <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. “True meditation is about being fully present with everything that is–including discomfort and challenges. It is not an escape from life.</p>
                                <h5>Mark Smith, <span>Client</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto-section set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/callto-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="callto-text">
                        <h2>Pakar Gizi Ibu Hamil & Menyusui</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->


    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/footer-bg.jpg')}}">
        <div class="container">
            {{-- <div class="contact-inner">
                <div class="contact-form">
                    <div class="section-title">
                        <span>Hallo</span>
                        <h2>Contact us</h2>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Mail">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                        <button type="submit" class="submit-btn">Send</button>
                    </form>
                </div> --}}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-text">
                            <a href="./home.html" class="logo"><img src="{{ asset('assets/frontend/yogastudio/img/hero-slider/image.png')}}" alt="" width="120px"></a>
                            <p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. “True meditation is about being fully present with everything that is–including.</p>
                            <ul>
                                <li><a href="https://www.instagram.com/sephiyanisyaa/"><i class="fa fa-instagram"></i> Sephiyanisyaa</a></li>

                            </ul>
                            <div class="copyright text-white">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | @Sephiyanisyaa
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
    <script src="{{ asset('assets/frontend/yogastudio/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/yogastudio/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/yogastudio/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('assets/frontend/yogastudio/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/yogastudio/js/circle-progress.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/yogastudio/js/main.js')}}"></script>
</body>

</html>
