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
                                <img src="{{ asset('assets/frontend/yogastudio/img/logo.png')}}" alt="">
                            </a>
                        </div>
                        <nav class="inner-main-navbar mobile-menu">
                            <ul>
                                <li><a href="./"><i class="fa fa-home"></i>Home</a></li>
                                 <li><a href="./tanya"><i class="fa fa-comments"></i>Forum</a></li>
                                 <li><a href="./about"><i class="fa fa-clock-o"></i>About Us</a></li>
                                <li><a href="./contact"><i class="fa fa-envelope-o"></i>Konsultasi</a></li>
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
    <section class="section m-b-4">

    <!--Section heading-->
    <h1 class="section-heading">Konsultasi</h1>
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

        <!--Second column-->
        <div class="col-md-7">

                
    <div class="card">
        <div class="card-block magazine-section">
            <h4 class="card-title"><i class="fa fa-question-circle "></i> Tanya Jawab<hr></h4>
                
                                        <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Suci tiarani</strong>, 
                                Mau tanya jadwal  dr tumbuh kembang .. sama bagaimana cara mendafatar nya ?                                    <br><small><i class="fa fa-clock-o"></i> 20 Jan 2020 06:02</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/301" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Fajar alamsyah winata</strong>, 
                                Untuk pengobatan dan perawatan apakah SKTM masih berlaku???                                    <br><small><i class="fa fa-clock-o"></i> 19 Jan 2020 20:14</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/300" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Ade </strong>, 
                                mau tanya kalau untuk daftar ke poliklinik BPJS mulai jam berapa ya ?\r\nkebetulan saya baru mau daftar jadi belum tau caranya. mohon penjelasannya                                    <br><small><i class="fa fa-clock-o"></i> 17 Jan 2020 21:13</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/296" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Ahmad Isya</strong>, 
                                mau tanya kalau Dr Agung Sp.PD poli penyakit dalam prakteknya hari apa saja ?  dan jam berapa ?                                    <br><small><i class="fa fa-clock-o"></i> 17 Jan 2020 21:06</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/295" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Eka pratiwi</strong>, 
                                Mau nanya takaran untuk tb vit 6 syrup, kmren di suruh beli ke apotik lain karna habis, tpi tdak di kasih anjuran brp ml, anak umur 16 bln, pengobatan menuju 3 bulan dngan bb 9,5kg                                    <br><small><i class="fa fa-clock-o"></i> 15 Jan 2020 09:45</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/290" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Mega halimatusyadiah</strong>, 
                                Mau tanya pak kalau daftar ke poli kandungan pakai bpjs lewat online gimana ia?tapi sebelumnya belum pernah berobat ini baru pertama kalu daftar nya ,,,apakah bisa langsung online ??                                    <br><small><i class="fa fa-clock-o"></i> 12 Jan 2020 11:10</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/289" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Fany</strong>, 
                                Biaya usg 4d berapa ya?                                     <br><small><i class="fa fa-clock-o"></i> 08 Jan 2020 23:06</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/282" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Rini</strong>, 
                                Mau tanya apakah ke poli kandungan reguler bisa pake bpjs?                                    <br><small><i class="fa fa-clock-o"></i> 08 Jan 2020 16:39</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/281" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>adelia novianti</strong>, 
                                maaf kenapa ya saya melakukan daftar online lewat sms dengan format yang sudah benar cuman balesan nya terimakasi atas saran dan keritiknya .itu gimana?                                    <br><small><i class="fa fa-clock-o"></i> 06 Jan 2020 12:39</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/280" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Yulia</strong>, 
                                Saya sudah melakukan daftar online untuk kontrol besok, saya tidak menggunakan BPJS.\r\nBalasan SMS yang betulnya seperti apa ya kalau daftar online non BPJS?                                    <br><small><i class="fa fa-clock-o"></i> 02 Jan 2020 08:38</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/275" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>femy</strong>, 
                                harga untuk konsultasi ke psikolog berapa ya                                    <br><small><i class="fa fa-clock-o"></i> 30 Dec 2019 15:39</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/269" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Agung Setiawan P</strong>, 
                                kalo mau daftar antrian ke rs al ihsan gimana caranya?                                    <br><small><i class="fa fa-clock-o"></i> 11 Dec 2019 15:19</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/249" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Achmad Fauzi</strong>, 
                                Assalamualaikum, saya mau operasi odontektomi menggunakan BPJS. Bagaimana langkah2nya ? apakah langsung datang kesana ? Makasih                                    <br><small><i class="fa fa-clock-o"></i> 06 Dec 2019 16:06</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/246" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Hari Susanto, SH</strong>, 
                                Ass.. Izin bertnya kalau untul biaya CT Scan Kepala, berapa biayanya..? trs jadwalnya kapan..?                                    <br><small><i class="fa fa-clock-o"></i> 05 Dec 2019 14:28</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/245" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Husni Fauzi</strong>, 
                                Mau bertanya apakah jika mau bertemu dengan dokter yang sudah memiliki janji sebelumnya harus daftar kembali?                                    <br><small><i class="fa fa-clock-o"></i> 04 Dec 2019 06:25</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/244" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Rini yulianti</strong>, 
                                AssalamuaLlaikum,selamat pagii\r\nMohon maaf mau bertanya kalau untUk medical chek up dokter jantUng jalur Umum berapa biaya nya??\r\nDan kalau untUk sekedar konsultasi dokter jantUng berapa biaya nya?? \r\nTerimakasih                                    <br><small><i class="fa fa-clock-o"></i> 04 Dec 2019 06:08</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/243" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>dedenabdulazis87@gmail.com</strong>, 
                                Assalamu\'alaikum\r\nMaaf klw pasilitas peminjaman kursi roda sebelah mana ea?\r\n\r\nDi tunggu jawaban nya                                     <br><small><i class="fa fa-clock-o"></i> 03 Dec 2019 15:02</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/242" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Irfan Ardiansyah</strong>, 
                                Assalammualaikum, mau tanya kalau untuk pendaftar baru itu dapet No. Medrek nya gimana ya? Atau lebih baik daftar langsung?. Mohon infonya. Terimakasih                                    <br><small><i class="fa fa-clock-o"></i> 03 Dec 2019 10:27</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/241" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Heru Purwantoro</strong>, 
                                SELAMAT SIANG                                    <br><small><i class="fa fa-clock-o"></i> 02 Dec 2019 13:35</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/240" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>vera</strong>, 
                                mau daftar online caranya gbagaimana?                                    <br><small><i class="fa fa-clock-o"></i> 02 Dec 2019 13:27</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/239" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Meliza</strong>, 
                                Boleh tanya berapa lama hasil CT scan bisa keluar sehingga bisa didiagnosa oleh dokter dan pasien bisa tau juga hasilnya. Ayah saya dari kamis pagi sudah CT Scan tp sampe sabtu siang ini blum kluar hasilnya. Mohon dibantu.                                    <br><small><i class="fa fa-clock-o"></i> 30 Nov 2019 12:41</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/237" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Anisya</strong>, 
                                Biaya persalinan normal oleh dokter kelas vip berapa ya? Minta rincian nya. Terimakasih                                    <br><small><i class="fa fa-clock-o"></i> 29 Nov 2019 09:46</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/236" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Kurniati</strong>, 
                                Kalau mau daftar online saya harus mengirim pesannya ke nomor mana                                    <br><small><i class="fa fa-clock-o"></i> 28 Nov 2019 09:07</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/235" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Nestaastia99.na@gmail.com</strong>, 
                                Hallo. Saya Nesta 20 tahun di Banjaran. Tapi nsultasi dengan psikolog berapa tarif nya ya?                                    <br><small><i class="fa fa-clock-o"></i> 27 Nov 2019 16:34</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/233" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                                <div class="single-news">

                        <div class="row">
                            <div class="col-md-3 col-xs-3">

                                <!--Image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="http://rsudalihsan.jabarprov.go.id/themes/default/img/chat-2-icon.png" style="width:80%;margin:5px;">
                                    <a>
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <!--Excerpt-->
                            <div class="col-md-9 col-xs-9">
                              
                                <strong>Elis</strong>, 
                                Selamat siang,saya pasien batu ginjal dengan ukuran batu 4mm, Boleh tau bagaimana proses dan  biaya laser untuk memecahkan batu nya ?\r\nAtas perhatiannya saya ucapkan Banyak Terima kasih                                     <br><small><i class="fa fa-clock-o"></i> 27 Nov 2019 13:20</small>
                                   
                                  <br>
                                <a class="btn btn-warning btn-sm" href="http://rsudalihsan.jabarprov.go.id/tanyajawab/detail/231" style="color:#fff">Lihat Jawaban</a>

                            </div>

                        </div>
                    </div>

                    
<nav>
     <ul class="pagination pagination-sm "><li class="active"><a href="#"><strong>1</strong></a></li><li><a href="http://rsudalihsan.jabarprov.go.id/tanyajawab?&amp;per_page=25" data-ci-pagination-page="2">2</a></li><li><a href="http://rsudalihsan.jabarprov.go.id/tanyajawab?&amp;per_page=25" data-ci-pagination-page="2" rel="next">&gt;</a></li></ul>            </nav>
                  



            
        </div>
    </div>

        </div>
        <!--/Second column-->

    </div>

</section>
    </section>
    <!-- Blog Section End -->


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
