<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pakar Gizi Ibu Hamil & Menyusui
    </title>

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
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/header-bg.png')}}">
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
                                <li><a href="./"><i class="fa fa-home"></i>Home</a></li>
                                 <li><a href="./about"><i class="fa fa-clock-o"></i>Contact Me</a></li>
                                <li><a href="./konsul"><i class="fa fa-envelope-o"></i>Konsultasi</a></li>
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
                        <span class="tickler-text">WELCOME</span>
                        <h1>Mari Konsultasi</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Single Section End -->
    <!-- Blog Section Begin -->

    <br><br>
     <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <h3 class="text-center">Konsultasi</h3>
    <!--Section sescription-->
    <p class="section-description m-b-5">Silakan untuk bertanya disini dengan mengisi form dibawah ini . kami akan membalas jawaban anda yang anda masukan.</p>

                    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Konsul Ibu Hamil</a></li>
    <li class="breadcrumb-item"><a href="/.konsul">Konsul Ibu Menyusui</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
     </ol>
    <div class="row">

        <!--First column-->
        <div class="col-md-5">

            <!--Form with header-->
            <div class="card">

                <div class="card-block">
                    <!--Header-->
                       <h3><i class="fa fa-envelope"></i> Pertanyaan Anda ?</h3>
                <form action="{{ route('Konsul.store') }}" method="post">
                    @csrf
                        <div class="form-group">
                    <label for="">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="">Pesan</label>
                    <input class="form-control" type="text" name="pesan">
                </div>

                    <div class="text-xs-center">
                <input type="submit" name="button" id="button" value="Kirim" class="btn btn-primary">

                    </div>
                    </form>

                </div>
            </div>


            <!--/Form with header-->
        </div>
        <!--/First column-->
        </div>
    </div>
            </div>
        </div>
        <!--/Second column-->
    </div>
  </div>
            </div>
        </div>
    </nav>
    </section>

    <!-- Blog Section End -->

    <br><br><br>

    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="{{ asset('assets/frontend/yogastudio/img/footer-bg.jpg')}}">
        <div class="container">
            {{-- <div class="contact-inner">
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
                </div> --}}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-text">
                            <a href="./home.html" class="logo"><img src="{{ asset('assets/frontend/yogastudio/img/hero-slider/image.png')}}" alt="" width="120px"></a>
                           <p>“Gizi seimbang sangat penting bagi ibu karena ibu akan memproduksi ASI sebagai makanan satu-satunya bayi hingga usia enam bulan,” </p>
                            <ul>
                                <li><a href="#"><i class="fa fa-instagram"></i> OnInsta Sephiyanisyaa</a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i> OnFace Sephiyanisya</a></li>
                            </ul>
                            <div class="copyright text-white">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Sephiyanisyaa <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
