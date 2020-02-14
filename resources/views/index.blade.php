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
    <header class="header-section set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/header-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="main-menu">
                        <nav class="inner-main-navbar mobile-menu">
                            <ul>
                               <li><a href="./blogg"><i class="fa fa-home" >    Home</i></a></li>
                                <li><a href="./about"><i class="fa fa-clock-o"></i> Contact Me</a></li>
                                <li><a href="./konsul"><i class="fa fa-envelope-o"></i>   Konsultasi</a></li>
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
            <div class="single-slider-item set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/ibu.jpg')}}">
                <div class="container">
                    <h2>Pakar Gizi Ibu Hamil & Menyusui</h2>
                    <p>
                   <h5>Gizi Seimbang untuk Ibu Hamil dan Menyusui.</h5>
                    </p>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/hero-slider/ll.jpg')}}">
                <div class="container">
                    <h2>Pakar Gizi Ibu Hamil</h2>
                    <p>
                    <h6>Kebutuhan nutrien meningkat selama hamil. Namun tidak semua kebutuhan nutrien meningkat secara proporsional. .</h6>
                            </p>
                    <a href="contact" class="primary-btn">Konsultasi</a>

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
    <footer class="footer-section set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/yoga-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-classes">
                          <strong>Category</strong><br><br>
                        <a href="./blog">
                        <img src="{{ asset('assets/frontend/yogastudio/img/cat.png')}}" style="width: 160px; height: 152px;" alt="Pengaduan"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-classes">
                         <strong>Artikel</strong><br><br>
                        <a href="./article">
                        <img src="{{ asset('assets/frontend/yogastudio/img/ico.png')}}" style="width: 160px; height: 152px;" alt="Pengaduan"></a>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="single-classes">
                        <strong>Konsultasi</strong><br><br>
                        <a href="./konsul">
                        <img src="http://rsudalihsan.jabarprov.go.id/themes/default//images/pengaduan.png" style="width: 160px; height: 152px;" alt="Pengaduan"></a>

            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Yoga Classes Section End -->

    <!-- Client Section Begin -->
    <section class="client-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    {{-- <div class="client-left-img">
                        <img src="{{ asset ('assets/frontend/yogastudio/img/hero-slider/banner.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="client-says">
                        <div class="section-title">
                            <span>Your inner Chi</span>
                             <a href="./blog" class="primary-btn blog-btn">Masuk Forum</a>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->

    <!-- Call To Action Section Begin -->
    {{-- <section class="callto-section set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/callto-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="callto-text">
                        <div class="client-left-img">
                        <img src="{{ asset ('assets/frontend/yogastudio/img/hero-slider/banner.jpg')}}" alt="">
                    </div>
                        <div class="col-lg-6 offset-lg-1">
                    <div class="client-says">
                        <div class="section-title">
                             <a href="./tanya " class="primary-btn blog-btn">Masuk Forum</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Call To Action End -->


    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg " data-setbg="{{ asset('assets/frontend/yogastudio/img/footer-bg.jpg')}}">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-text">
                            <a href="./home.html" class="logo"><img src="{{ asset('assets/frontend/yogastudio/img/hero-slider/image.png')}}" alt="" width="120px"></a>
                            <p>“Gizi seimbang sangat penting bagi ibu karena ibu akan memproduksi ASI sebagai makanan satu-satunya bayi hingga usia enam bulan,”.</p>
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
