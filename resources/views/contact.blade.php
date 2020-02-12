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

    
    <div class="row">

        <!--First column-->
        <div class="col-md-5">

            <!--Form with header-->
            <div class="card">
                
                <div class="card-block">
                    <!--Header-->
                       <h3><i class="fa fa-envelope"></i> Pertanyaan Anda ?</h3>                
                <form action="http://rsudalihsan.jabarprov.go.id/tanyajawab" class="form-vertical" method="post" accept-charset="utf-8">
                    <input type="hidden" name="ci_csrf_token" value="53207c1cda4a8bf3e280563ca058e472" style="display:none;">
                        <div class="form-group">
                            <label for="form3">Nama Lengkap</label>
                         <input type="text" class="form-control" required="" name="pengirim" id="pengirim" value="">
                             </div>
                     <div class="form-group">
                        <label for="form2">Email</label>
     <input type="email" class="form-control" required="" name="email" id="email" value="">
                </div>
                    <div class="form-group">
                        <label for="form2">Pesan</label>
      <textarea name="komen" required="" class="form-control" rows="6"></textarea>
                        </div>
                <div class="md-group">
                        <link type="text/css" rel="Stylesheet" href="http://rsudalihsan.jabarprov.go.id/assets/captcha/LBD_Layout.css">   
                       Ketik Kode Di Bawah InI: 
                <div class="LBD_CaptchaDiv" id="SampleCaptcha_CaptchaDiv" style="width:280px; height:50px;"><!--
                --><div class="LBD_CaptchaImageDiv" id="SampleCaptcha_CaptchaImageDiv" style="width:250px !important; height:50px !important;"><!--
                --><div class="LBD_CaptchaImageDiv" style="width:250px; height:40px;"><img class="LBD_CaptchaImage" id="SampleCaptcha_CaptchaImage" src="http://rsudalihsan.jabarprov.go.id/botdetect/captchahandler/index?get=image&amp;c=samplecaptcha&amp;t=7966c8e74c9e6cecd69596321c436381" alt="CAPTCHA"></div><!--
                --><a href="http://captcha.biz/php-captcha-info.html" target="_blank" title="What is BotDetect PHP CAPTCHA Library?" style="display: block !important; height: 10px !important; margin: 0 !important; padding: 0 !important; font-size: 9px !important; line-height: 9px !important; visibility: visible !important; font-family: Verdana, DejaVu Sans, Bitstream Vera Sans, Verdana Ref, sans-serif !important; vertical-align: middle !important; text-align: center !important; text-decoration: none !important; background-color: #f8f8f8 !important; color: #606060 !important;">What is BotDetect PHP CAPTCHA Library?</a><!--
                --></div><!--
                 --><div class="LBD_CaptchaIconsDiv" id="SampleCaptcha_CaptchaIconsDiv" style="width: 24px !important;"><!--
                 --><a class="LBD_ReloadLink" id="SampleCaptcha_ReloadLink" href="#" onclick="SampleCaptcha.ReloadImage(); this.blur(); return false;" title="Reload the CAPTCHA code" style="display: inline-block !important;"><img class="LBD_ReloadIcon" id="SampleCaptcha_ReloadIcon" src="http://rsudalihsan.jabarprov.go.id/assets/captcha/LBD_ReloadIcon.gif" alt="Reload the CAPTCHA code"></a><!--
                --><a class="LBD_SoundLink" id="SampleCaptcha_SoundLink" href="http://rsudalihsan.jabarprov.go.id/botdetect/captchahandler/index?get=sound&amp;c=samplecaptcha&amp;t=7966c8e74c9e6cecd69596321c436381" onclick="SampleCaptcha.PlaySound(); this.blur(); return false;" title="Speak the CAPTCHA code"><img class="LBD_SoundIcon" id="SampleCaptcha_SoundIcon" src="http://rsudalihsan.jabarprov.go.id/assets/captcha/LBD_SoundIcon.gif" alt="Speak the CAPTCHA code"></a><!--
            --><div class="LBD_Placeholder" id="SampleCaptcha_AudioPlaceholder">&nbsp;</div><!--
                --></div>
    <script src="http://rsudalihsan.jabarprov.go.id/assets/captcha/LBD_Scripts.js" type="text/javascript"></script>
    <script type="text/javascript">//<![CDATA[
      BotDetect.Init('SampleCaptcha', '7966c8e74c9e6cecd69596321c436381', 'CaptchaCode', true, true, true, true, 1200, 7200, 0);
    //]]></script>
    <input type="hidden" name="LBD_VCID_SampleCaptcha" id="LBD_VCID_SampleCaptcha" value="7966c8e74c9e6cecd69596321c436381">
            </div>
                        <input type="text" class="form-control" required="" name="CaptchaCode" id="CaptchaCode" style="text-transform: uppercase;">  
                         </div>
                        <br>
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
