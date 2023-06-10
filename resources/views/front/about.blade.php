@extends('layouts.app')
@section('content')
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-8">
               <h2 class="about_taital">about Chrity</h2>
               <p class="about_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youmany variations of passages of Lorem Ipsum 
                  available, but the majority have suffered 
                  alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you many
                  variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, byinjected humour, or randomised words which don't look even slightly believable. If you
               </p>
               <div class="readmore_bt"><a href="#">Read more</a></div>
            </div>
            <div class="col-sm-4">
               <div class="about_img"><img src="images/about-img.png"></div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
               <div class="footer_logo"><img src="images/footer-logo.png"></div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               <h4 class="footer_taital">NAVIGATION</h4>
               <div class="footer_menu_main">
                  <div class="footer_menu_left">
                     <div class="footer_menu">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="donate.html">Donate</a></li>
                           <li><a href="contact.html">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="footer_menu_right">
                     <div class="footer_menu">
                        <ul>
                           <li><a href="about.html">About</a></li>
                           <li><a href="news.html">News</a></li>
                           <li><a href="mission.html">Our Mission</a></li>
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
                        <li><a href="#"><img src="images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
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
@endsection