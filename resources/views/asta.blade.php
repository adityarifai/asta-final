<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Asta Multimedia Tama</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}" rel="icon">
  <link href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('regna/font/font.css')}}"/>
  <link href="{{ asset('regna/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  {{-- <link href="{{ asset('regna/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> --}}
  <link href="{{ asset('regna/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('regna/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('adminbite/assets/libs/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:900&display=swap" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
    <style type="text/css">


      @-webkit-keyframes Gradient {
        0% {
          background-position: 0% 50%
        }
        50% {
          background-position: 100% 50%
        }
        100% {
          background-position: 0% 50%
        }
      }

      @-moz-keyframes Gradient {
        0% {
          background-position: 0% 50%
        }
        50% {
          background-position: 100% 50%
        }
        100% {
          background-position: 0% 50%
        }
      }

      @keyframes Gradient {
        0% {
          background-position: 0% 50%
        }
        50% {
          background-position: 100% 50%
        }
        100% {
          background-position: 0% 50%
        }
      }




      @media screen and (min-width: 1200px) {
        .containerr {
          width: 1000px;
        }
        .homepage-offerings-menu-title{
          font-weight: 700;
          font-size: 16px;
          text-transform: uppercase;
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
        .homepage-offerings-menu-tagline{
          font-size: 26px;
          font-family:'Product Sans';
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
        .homepage-offerings-menu-tagline2{
          font-size: 26px;
          font-family:'Product Sans';
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
      }
      @media screen and (max-width: 1199px) {
        .containerr {
          width: 800px;
        }
        .homepage-offerings-menu-title{
          font-weight: 700;
          font-size: 18px;
          text-transform: uppercase;
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
        .homepage-offerings-menu-tagline{
          font-size: 23px;
          font-family:'Product Sans';
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
        .homepage-offerings-menu-tagline2{
          font-size: 23px;
          font-family:'Product Sans';
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
      }
      @media screen and (max-width: 900px) {
        .containerr {
          width: 700px;
        }
        .homepage-offerings-menu-title{
          font-weight: 700;
          font-size: 16px;
          text-transform: uppercase;
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
        .homepage-offerings-menu-tagline{
          font-size: 19px;
          font-family:'Product Sans';
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
        .homepage-offerings-menu-tagline2{
          font-size: 19px;
          font-family:'Product Sans';
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
      }
      @media screen and (max-width: 768px) {
        .containerr {
          /* max-width: 420px; */
          width: 85%;
        }
        .homepage-offerings-menu-title{
          font-weight: 700;
          font-size: 12px;
          text-transform: uppercase;
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
        .homepage-offerings-menu-tagline{
          font-size: 14px;
          font-family:'Product Sans';
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
        .homepage-offerings-menu-tagline2{
          font-size: 14px;
          font-family:'Product Sans';
          -webkit-transition-duration: 1s;
          transition-duration: 1s;
        }
      }
      .homepage-offerings{
        color: #ffffff;
        font-size: 0px;
        padding-bottom: 75px;
      }
      .homepage-offerings > div{
        display: inline-block;
      }
      .homepage-offerings-menu{
        text-align: left;
        flex-direction: column;
        display: inline-flex !important;
        padding: 20px 0;
        align-items: flex-start;
        justify-content: center;
        border: 2px solid #FCFCFC;
        background-color: rgba(0,0,0,0.34);
        /*-webkit-box-shadow: 8px 8px 12px -4px rgba(0,0,0,0.72);
        -moz-box-shadow: 8px 8px 12px -4px rgba(0,0,0,0.72);
        box-shadow: 8px 8px 12px -4px rgba(0,0,0,0.72);*/
      }
      .homepage-offerings-menu2{
        text-align: right;
        flex-direction: column;
        display: inline-flex !important;
        padding: 20px 0;
        align-items: flex-end;
        justify-content: center;
        border: 2px solid #FCFCFC;
        background-color: rgba(0,0,0,0.34);
        /*-webkit-box-shadow: 0px 8px 12px -4px rgba(0,0,0,0.72);
        -moz-box-shadow: 0px 8px 12px -4px rgba(0,0,0,0.72);
        box-shadow: 0px 8px 12px -4px rgba(0,0,0,0.72);*/
      }
      .homepage-offerings-menu:hover{
        color: #80CCCC;
        cursor: pointer;
        background-color: rgba(0,0,0,0.59);
      }
      .homepage-offerings-menu2:hover{
        color: #80CCCC;
        cursor: pointer;
        background-color: rgba(0,0,0,0.59);
      }
      .homepage-offerings-menu2:first-child{
        border-radius: 70px 0px 0px 70px;
        border-right: 0px;
      }
      .homepage-offerings-menu:last-child{
        border-radius: 0px 70px 70px 0px;
      }
      .homepage-offerings-menu:hover .homepage-offerings-menu-tagline{
        -ms-transform: translateX(15px);
        -webkit-transform: translateX(15px);
        transform: translateX(15px);
      }
      .homepage-offerings-menu2:hover .homepage-offerings-menu-tagline2{
        -ms-transform: translateX(-15px);
        -webkit-transform: translateX(-15px);
        transform: translateX(-15px);
      }
      .homepage-offerings-menu-tagline i{
        padding-left: 15px;
      }
      .no-margin {
        margin-left: 0px;
        margin-right: 0px;
      }
      .row {
        margin-right: -15px;
        margin-left: -15px;
      }
      .text-center {
        text-align: center;
      }
      .col-md-6 {
        width: 50%;
      }
      body {
        overflow-x: hidden;
      }
      .homepage-offerings-menu-tagline2 {
        display: inline-flex;
        text-align: right;
        text-indent: 40px;
        padding-right: 20px;
        margin-top: 20px;
        position: relative;
      }
      .homepage-offerings-menu-tagline {
        position: relative;
      }
      .homepage-offerings-menu-tagline2 i, .homepage-offerings-menu-tagline i {
        position: absolute;
        left: 0;
        top: 0%;
        transform: translateY(-50%) translateX(-10px);
      }
      .homepage-offerings-menu-tagline i {
        left: auto;
        right: 0;
        transform: translate(-20px, -50%);
      }
      .homepage-offerings-menu2 .homepage-offerings-menu-title {
        padding-right: 20px;
      }
      .homepage-offerings-menu .homepage-offerings-menu-tagline {
        padding-left: 20px;
        display: inline-flex;
      }
      .homepage-offerings-menu .homepage-offerings-menu-title {
        padding-left: 20px;
      }
      .homepage-offerings-menu .homepage-offerings-menu-tagline {
        margin-top: 20px;
      }
      @media screen and (min-width: 412px) {
        .homepage-offerings-menu-tagline2, .homepage-offerings-menu .homepage-offerings-menu-tagline {
          width: 100%;
        }
        .homepage-offerings-menu-tagline2 {
          justify-content: flex-end;
        }
        .homepage-offerings-menu-tagline2 i, .homepage-offerings-menu-tagline i {
          position: static;
          transform: none;
          line-height: 38px;
          height: 38px;
        }
      }
    </style>
  </head>

  <body>
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="{{ asset('regna/astafile/asta2.png')}}" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->
          <li><a href="#contact">Contact Us</a></li>
          @if(Auth::user())
          <li class="menu-has-children"><a href="#">Menu <i class="fa fa-chevron-down" style="padding-left: 5px;"></i></a>
            <ul>
              <li><a href="{{route('beranda')}}">Admin</a></li>
              <li><a href="{{route('logout')}}" class="btn-get-started"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-role="tile" class="slide bg-indigo fg-white">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"></li>
                </ul>
              </li>
              @csrf
            </form>
            @else()
            <li><a href="{{route('login')}}" class="btn-get-started">Login</a></li>
            @endif
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </header><!-- #header -->

  <!--==========================
    Hero Section
    ============================-->
    <section id="hero">
      <div class="hero-container">
        <h1>Welcome to Asta</h1>
        <h2 style="font-family:'Product Sans';">The multi company that provide broad benefits to many people</h2>
        <!-- <a href="#about" class="btn-get-started">Get Started</a> -->
        <div class="containerr">
          <div class="homepage-offerings row no-margin text-center">
            <div class="homepage-offerings-menu2 col-md-6" onclick="window.location.href='#';">
              <div class="homepage-offerings-menu-title">Our Product</div>
              <div class="homepage-offerings-menu-tagline2"><i class="fa fa-angle-left" aria-hidden="true"></i> Ticket Travel &amp; Reservations</div>
            </div>
            <div class="homepage-offerings-menu col-md-6" onclick="window.location.href='{{route('layanan')}}';">
              <div class="homepage-offerings-menu-title">Our Services</div>
              <div class="homepage-offerings-menu-tagline">
                Development &amp; Technology <i class="fa fa-angle-right" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #hero -->

    <main id="main">

    <!--==========================
      About Us Section
      ============================-->
      <section id="about">
        <div class="container">
          <div class="row about-container">

            <div class="col-lg-6 content order-lg-1 order-2">
              <h2 class="title">Few Words About Us</h2>
              <p>
                PT Asta Multimedia Tama merupakan sebuah perusahaan yang berbentuk perseroan terbatas yang didirikan pada tahun 2014, dihadapan Notaris Mustangin,SH.,M.Kn dengan disahkan secara hukum dan tertuang pada akte pendirian perusahaan No. 26 Tanggal 02 Juli 2014. Perusahaan yang bergerak dalam bidang pengadaan barang dan jasa yang telah memiliki akses yang luas. Adapun jasa yang kami tawarkan adalah :
              </p>

              <div class="icon-box wow fadeInUp">
                <div class="icon"><i class="fas fa-handshake"></i></div>
                <h4 class="title"><a href="">Organizing MICE</a></h4>
                <p class="description">Organizing Meeting, Incentive, Convention and Exhibition</p>
              </div>

              <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                <div class="icon"><i class="fas fa-suitcase-rolling"></i></div>
                <h4 class="title"><a href="">Travel Ecotourism</a></h4>
                <p class="description">Outbond - Travel Ecotourism and Adventure</p>
              </div>

              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                <div class="icon"><i class="fas fa-photo-video"></i></div>
                <h4 class="title"><a href="">Multimedia</a></h4>
                <p class="description">Film, Periklanan, Advertising, Pemotretan, Product Launching, Design Grafis, Percetakan, Multimedia Communication dan IT Solution</p>
              </div>

            </div>

            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
          </div>

        </div>
      </section><!-- #about -->

    <!--==========================
      Facts Section
      ============================-->
      <section id="facts">
        <div class="container wow fadeIn">
          <div class="section-header1">
            <h3 class="section-title1">Facts</h3>
            <p class="section-description1">Some facts from our company</p>
          </div>
          <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">3</span>
              <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">20</span>
              <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">4</span>
              <p>Hard Workers</p>
            </div>

          </div>

        </div>
      </section><!-- #facts -->

    <!--==========================
      Services Section
      ============================-->
      <section id="services">
        <div class="container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title">Services</h3>
            <p class="section-description">The services we offer are</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="box">
                <div class="icon"><a href=""><i class="far fa-handshake"></i></a></div>
                <h4 class="title"><a href="">MICE</a></h4>
                <p class="description">Organizing Meeting, Incentive, Convention and Exhibition</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
              <div class="box">
                <div class="icon"><a href=""><i class="fas fa-plane"></i></a></div>
                <h4 class="title"><a href="">Travel</a></h4>
                <p class="description">Outbond - Travel Ecotourism and Adventure</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
              <div class="box">
                <div class="icon"><a href=""><i class="fas fa-box-open"></i></a></div>
                <h4 class="title"><a href="">Product Launching</a></h4>
                <p class="description">Launching a new product can be an exciting time for any company</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="box">
                <div class="icon"><a href=""><i class="fab fa-artstation"></i></a></div>
                <h4 class="title"><a href="">Multimedia</a></h4>
                <p class="description">Graphic Design and Printing</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
              <div class="box">
                <div class="icon"><a href=""><i class="fas fa-project-diagram"></i></a></div>
                <h4 class="title"><a href="">IT solution</a></h4>
                <p class="description">IT Solution and Multimedia Communication</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
              <div class="box">
                <div class="icon"><a href=""><i class="fas fa-poll"></i></a></div>
                <h4 class="title"><a href="">Advertising</a></h4>
                <p class="description">Advertising Services</p>
              </div>
            </div>
          </div>

        </div>
      </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Chat To Action</h3>
            <p class="cta-text"> We offer services for you, just contact us to feel the <b>service.</b></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" target="_blank" href="https://wa.me/628978177037?text=Saya%20ingin%20bekerja%20sama%20dengan%20Asta%20Multimedia%20Tama"><i style="padding-right: 5px;" class="fab fa-whatsapp"></i> Chat Me</a>
          </div>
        </div>
      </div>
    </section><!-- #call-to-action -->
    <!--==========================
      Contact Section
      ============================-->
      <section id="contact">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Contact</h3>
            <p class="section-description">We are looking forward to grow your business with technology. If you have any question regarding your business, don’t hesitate to tell us!</p>
          </div>
        </div>

        <!-- Uncomment below if you wan to use dynamic maps -->
        <iframe src="https://maps.google.com/maps?width=100%&height=600&hl=en&coord=-6.239617873536601,106.81500971317291&q=Gedung%20GMT%2C%20Jl.%20Wijaya%20I%20No.5%2C%20RT.7%2FRW.4%2C%20Petogogan%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012170+(PT%20Asta%20Multimedia%20Tamausiness%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="container wow fadeInUp mt-5">
          <div class="row justify-content-center">

            <div class="col-lg-3 col-md-4">

              <div class="info" style="font-family:'Product Sans';">
                <div>
                  <i class="fa fa-map-marker"></i>
                  <p>Gedung GMT Lt 4<br>Jl. Wijaya I No.5, RT 7/RW 4<br> Petogogan, Kebayoran Baru<br>Jakarta Selatan, 12170</p>
                </div>

                <div>
                  <i class="fa fa-envelope"></i>
                  <p>asta.multimediatama@gmail.com</p>
                </div>

                <div>
                  <i class="fa fa-phone"></i>
                  <p>(021) 27513131</p>
                </div>
              </div>

              <div class="social-links">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
              </div>

            </div>

            <div class="col-lg-5 col-md-8">
              <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="{{route('pesan.save')}}" method="POST" role="form" class="contactForm">
                  @csrf
                  <div class="form-group">
                    <input type="text" name="pengirim" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="judul" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit" alt="alert" id="sa-success">Send Message</button></div>
                </form>
              </div>
            </div>

          </div>

        </div>
      </section><!-- #contact -->

    </main>

  <!--==========================
    Footer
    ============================-->
    <section id="footer">
    <footer id="footer">
      <div class="container">
        <div class="copyright">&copy; Copyright 2019 by <strong>Asta Multimedia Tama</strong>. All Rights Reserved </div>
        <div class="credits">Designed by <a href="#">Asta</a> </div>
        <div class="area" >
          <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div >
      </div>
    </footer>
    </section>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/36430e2ebf.js"></script>
    <script src="{{ asset('regna/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('regna/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset('regna/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('regna/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('regna/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('regna/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('regna/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('regna/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{ asset('regna/lib/superfish/superfish.min.js')}}"></script>

    <script src="{{ asset('adminbite/assets/libs/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script src="{{ asset('adminbite/assets/libs/sweetalert2/sweet-alert.init.js')}}"></script>


    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('regna/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('regna/js/main.js')}}"></script>


  </body>
  </html>