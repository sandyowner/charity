<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Charity</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{url('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><a href="{{url('/')}}"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item {{ (\Request::segment(1)=='')?'active':'' }}">
                     <a class="nav-link" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item {{ (\Request::segment(1)=='about')?'active':'' }}">
                     <a class="nav-link" href="{{url('/about')}}">About</a>
                  </li>
                  <li class="nav-item {{ (\Request::segment(1)=='donate')?'active':'' }}">
                     <a class="nav-link" href="{{url('/donate')}}">Donate</a>
                  </li>
                  <li class="nav-item {{ (\Request::segment(1)=='news')?'active':'' }}">
                     <a class="nav-link" href="{{url('/news')}}">News</a>
                  </li>
                  <li class="nav-item {{ (\Request::segment(1)=='/')?'active':'' }}">
                     <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                  </li>
                  <li class="nav-item {{ (\Request::segment(1)=='mission')?'active':'' }}">
                     <a class="nav-link" href="{{url('/mission')}}">Our Mission</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div class="search_icon"><a href="#"><img src="{{url('images/search-icon.png')}}"></a></div>
                  <button class="donate_btn" type="submit">Donate Now</button>
               </form>
            </div>
         </nav>
      </div>
      @yield('content')
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="footer_logo"><img src="{{url('images/footer-logo.png')}}"></div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">NAVIGATION</h4>
                  <div class="footer_menu_main">
                     <div class="footer_menu_left">
                        <div class="footer_menu">
                           <ul>
                              <li><a href="{{url('index')}}">Home</a></li>
                              <li><a href="{{url('donate')}}">Donate</a></li>
                              <li><a href="{{url('contact')}}">Contact us</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="footer_menu_right">
                        <div class="footer_menu">
                           <ul>
                              <li><a href="{{url('about')}}">About</a></li>
                              <li><a href="{{url('news')}}">News</a></li>
                              <li><a href="{{url('mission')}}">Our Mission</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">NEWS</h4>
                  <p class="footer_text">Generators on the Internet</p>
                  <p class="footer_text">Tend to repeat predefined</p>
                  <p class="footer_text">Chunks as necessary, making</p>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">address</h4>
                  <p class="footer_text">Ave NW, Washington</p>
                  <p class="footer_text">+01 1234567890</p>
                  <p class="footer_text">demo@gmail.com</p>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-3">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="{{url('images/fb-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{url('images/twitter-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{url('images/linkedin-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{url('images/instagram-icon.png')}}"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-8 col-md-8 col-lg-9">
                     <input type="text" class="address_text" placeholder="Enter your Enail" name="text">
                     <button type="button" class="get_bt">SUBSCRIBE</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{url('js/jquery.min.js')}}"></script>
      <script src="{{url('js/popper.min.js')}}"></script>
      <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{url('js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>

