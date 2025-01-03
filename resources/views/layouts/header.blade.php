<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Job board HTML-5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="public/assets/img/favicon.ico"
    />

    <!-- CSS here -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/price_rangs.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    
  </head>

  <body>
    <!-- Preloader Start -->
    {{-- <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <img src="{{asset('assets/img/logo/logo.png')}}" alt="" />
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Preloader Start -->
    <header>
      <!-- Header Start -->
      <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 col-md-2">
                <!-- Logo -->
                <div class="logo">
                  <a href="index.html"
                    ><img src="{{asset('assets/img/logo/logo.png')}}" alt=""
                  /></a>
                </div>
              </div>
              <div class="col-lg-9 col-md-9">
                <div class="menu-wrapper" style="justify-content: flex-end">
                  <!-- Main-menu -->
                  <div class="main-menu">
                    <nav class="d-none d-lg-block">
                        <ul id="navigation">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/jobfind') }}">Cari Pekerjaan</a></li>
                            <li><a href="{{ url('/savedJob') }}">Pekerjaan disimpan</a></li>
                            <li><a href="{{ url('/myApp') }}">Lamaran saya</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href=""></a></li>
                        </ul>
                        
                    </nav>
                  </div>
                  <!-- Header-btn -->
                </div>
              </div>
              <!-- Mobile Menu -->
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
    </header>