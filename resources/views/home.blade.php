<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CellarHub &mdash; Manage yours collection of wine bottles in cellars.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="wine, cellar, laravel, mysql, web system" />
    <meta name="description" content="Web system to assist the management of the collection of wine bottles in cellars."/>

    <link rel="icon" type="img" href="{{ mix('favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ mix('/css/jquery.fancybox.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ mix('/css/style.css') }}" type="text/css" media="all">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <a href="{{route('home')}}" class="mb-0"><img style="max-height: 150%; max-width: 150%;" src="images/CellarHub.png"></a>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li><a href=" {{route('login')}} " class="btn-white btn-small">Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
    
    <div class="site-blocks-cover overlay" style="background: url('/images/banner.jpg');" data-aos="fade" id="home-section">


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1>Welcome to CellarHub</h1>
            <p class="mb-5">Your web system manager of wine bottles in cellars.</p>
            
          </div>
        </div>
      </div>

      <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>

    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">About us</h2>
              <p class="lead">This is <strong>CellarHub</strong>, an open source and academic project developed by students of the Federal Institute of Rio Grande do Norte (IFRN) designed for the management of wine collections in wineries. The CellarHub is released under the <a href="https://github.com/guilhermecostam/CellarHub/blob/main/LICENSE">MIT</a> license. Have fun!</p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <a href="https://www.linkedin.com/in/guilhermecostam/" target="_blank">
                <img alt="LinkedIn" src="https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white" />
              </a>&nbsp;&nbsp;
              
              <a href="https://t.me/guilhermecostam" target="_blank">
                <img alt="Telegram" src="https://img.shields.io/badge/-Telegram-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white" />
              </a>&nbsp;&nbsp;
              
              <a href="mailto:guilhermecostadev@gmail.com" target="_blank">
                <img alt="Gmail" src="https://img.shields.io/badge/-Gmail-c14438?style=for-the-badge&logo=gmail&logoColor=white" />
              </a>&nbsp;&nbsp;

            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row pt-5 mt-9 text-center">
          <div class="col-md-12">
            <p>
              {{ date('Y') }} &copy; CellarHub. All rights reserved
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->
  
  <script src="{{ mix('/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ mix('/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ mix('/js/jquery-ui.js') }}"></script>
  <script src="{{ mix('/js/popper.min.js') }}"></script>
  <script src="{{ mix('/js/bootstrap.min.js') }}"></script>
  <script src="{{ mix('/js/owl.carousel.min.js') }}"></script>
  <script src="{{ mix('/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ mix('/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ mix('/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ mix('/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ mix('/js/aos.js') }}"></script>
  <script src="{{ mix('/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ mix('/js/jquery.sticky.js') }}"></script>

  
  <script src="{{ mix('/js/main.js') }}"></script>
    
  </body>
</html>