
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Bootstrap CSS -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">

<!-- <link rel="stylesheet" href="css/switcher.css"> -->

<link rel="stylesheet" href="{{ asset('assets/rs-plugin/css/settings.css') }}">
<!-- Jquery Fancybox CSS -->

<link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}" media="screen" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"  id="colors">

<title>Scissors Salon | HTML Template by Medialinkers</title>
</head>
<body>

<!--Header Start-->
<div class="custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
  <div class="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 navbar-light">
          <div class="atlanta_logo"><img alt="" class="logo-default" src="images/salon_logo.png"></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="navigation-wrap" id="filters">
            <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Menu</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a> </li>
                  <li class="nav-item"><a class="nav-link" href="{{URL::to('/about')}}">About</a></li>

                  <li class="nav-item"><a class="nav-link" href="{{URL::to('/services')}}">Services</a> <i class="fas fa-caret-down"></i>
                    <ul class="submenu">
                      <li><a href="{{URL::to('/services')}}">Services</a></li>
                      <li><a href="{{URL::to('/services_details')}}">Service Details</a></li>
                    </ul>
                  </li>

                  <li class="nav-item"><a class="nav-link" href="{{URL::to('/gallery')}}">Gallery</a> <i class="fas fa-caret-down"></i>
                    <ul class="submenu">
                      <li><a href="{{URL::to('/gallery')}}">Gallery Style 01</a></li>
                      <li><a href="{{URL::to('/gallery_02')}}">Gallery Style 02</a></li>
                      <li><a href="{{URL::to('/gallery_03')}}">Gallery Style 03</a></li>
                    </ul>
                  </li>

                  <li class="nav-item"><a class="nav-link" href="{{URL::to('/blog')}}">Blog</a> <i class="fas fa-caret-down"></i>
                    <ul class="submenu">
                      <li><a href="{{URL::to('/blog')}}">Blog</a></li>
                      <li><a href="{{URL::to('/blog_grid')}}">Blog Grid</a></li>
                      <li><a href="{{URL::to('/blog_list')}}">Blog List</a></li>
                      <li><a href="{{URL::to('/blog_details')}}">Blog Details</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="{{URL::to('/testimonials')}}">Testimonials</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{URL::to('/contact')}}">Contact</a></li>

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Header End--> 

@yield('content')

<!-- Footer Start -->
<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="footer_logo"><img alt="" class="footer-default" src="images/salon_logo.png"></div>
        <p>Lorem ipsum dolor sit amet, adipiscing elit. Sed tempor, urna eu scelerisque maximus, urna nibh semper lectus, ut interdum nunc ligula et magna. In ac mauris vehicula, vulputate sem at, placerat nisl. Etiam laoreet erat magna, at hendrerit lorem vulputate non. Nam facilisis congue convallis.</p>
      </div>
      <div class="col-lg-2 col-md-3">
        <h3>Quick links</h3>
        <ul class="footer-links">
          <li> <a href="{{URL::to('/')}}">Home</a></li>
          <li> <a href="{{URL::to('/about')}}">About</a></li>
          <li> <a href="{{URL::to('/services')}}">Services</a></li>
          <li> <a href="{{URL::to('/gallery')}}">Gallery</a></li>
          <li> <a href="{{URL::to('/blog')}}">Blog</a></li>
          <li> <a href="{{URL::to('/testimonials')}}">Testimonials</a></li>
          <li> <a href="{{URL::to('/contact')}}">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4">
        <h3>Opening Hours</h3>
        <ul class="unorderList hourswrp">
          <li>Monday <span>08:00 - 17:00</span></li>
          <li>Tuesday <span>08:00 - 17:00</span></li>
          <li>Wednesday <span>08:00 - 17:00</span></li>
          <li>Thursday <span>08:00 - 17:00</span></li>
          <li>Friday <span>08:00 - 17:00</span></li>
          <li>Saturday <span>08:00 - 17:00</span></li>
          <li>Sunday <span>Closed</span></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4 offset-1">
        <div class="footer_info">
          <h3>Get in Touch</h3>
          <ul class="footer-adress">
            <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>{{$settingProfile->address}}</span> </li>
            <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:{{$settingProfile->email}}"> {{$settingProfile->email}} </a></span> </li>
            <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:7704282433">{{$settingProfile->phone}}</a></span> </li>
          </ul>
          <div class="social-icons footer_icon">
            <ul>
              <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://www.youtube.com/"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->

<div class="copyright-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="copyright">Copyright  © 2020 Scissors Salon. All Rights Reserved.</div>
      </div>
      <div class="col-lg-6">
        <div class="credits">Site Credits: <a href="https://www.medialinkers.com/" target="_blank" rel="nofollow">MediaLinkers</a></div>
      </div>
    </div>
  </div>
</div>

<!-- Js --> 
<script src="{{ asset('assets/js/jquery.min.js')}}"></script> 
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('assets/js/popper.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script> 
<!-- Jquery Fancybox --> 
<script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script> 
<!-- general script file --> 
<script src="{{ asset('assets/js/owl.carousel.js')}}"></script> 
<script src="{{ asset('assets/js/script.js')}}"></script>
</body>

</html>