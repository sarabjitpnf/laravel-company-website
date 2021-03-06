<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Sarbjit Singh" />
<!-- Document Title -->
<title>Company Portfolio - @yield('title')</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- FontsOnline -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700,800,900,300,100' rel='stylesheet' type='text/css'>

<!-- StyleSheets -->
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen" />

<!-- JavaScripts -->
<script src="{{asset('js/vendors/modernizr.js')}}"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- LOADER ===========================================-->
<div id="loader">
  <div class="loader">
    <div class="position-center-center">
      <div id="preloader6"> <span></span> <span></span> <span></span> <span></span> </div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->
<div id="wrap"> 
  
  <!-- Top bar -->
  <div class="container">
    <div class="row">
      <div class="col-md-2 noo-res"></div>
      <div class="col-md-10">
        <div class="top-bar">
          <div class="col-md-3">
            <ul class="social_icons">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-google"></i></a></li>
            </ul>
          </div>
          
          <!-- Social Icon -->
          <div class="col-md-9">
            <ul class="some-info font-montserrat">
              <li><i class="fa fa-phone"></i> +1 548-554-451</li>
              <li><i class="fa fa-envelope"></i> Example@domain.com</li>
              <li><i class="fa fa-weixin"></i> LiveChat</li>
              <li><i class="fa fa-question-circle"></i> Support</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header class="header coporate-header">
    <div class="sticky">
      <div class="container">
        <div class="logo"> <a href="index.html"><img src="images/logo.png" alt=""></a> </div>
        
        <!-- Nav -->
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li class="active"><a href="{{url('/')}}">HOME</a></li>
            <li><a href="{{url('/about')}}"> ABOUT </a></li>
            <li><a href="{{url('/services')}}"> SERVICES </a></li>
            <li><a href="{{url('/portfolio')}}"> PORTFOLIO </a></li>            
            <li><a href="{{url('/blog')}}"> BLOG </a></li>
            <li><a href="{{url('/contact')}}"> CONTACT</a></li>            
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- End Header --> 
  
  @yield('content')
  
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 padding-top-50"> 
          
          <!-- News Letter -->
          <div class="news-letter">
            <h6>News Letter</h6>
            <form>
              <input type="email" placeholder="Enter your email..." >
              <button type="submit"><i class="fa fa-envelope-o"></i></button>
            </form>
          </div>
        </div>
        
        <!-- Folow Us -->
        <div class="col-md-6 padding-top-50">
          <div class="news-letter">
            <h6>Follow us</h6>
            <ul class="social_icons pull-left margin-left-50 margin-top-10">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#."><i class="fa fa-skype"></i></a></li>
              <li><a href="#."><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer Info -->
    <div class="footer-info">
      <div class="container">
        <div class="row"> 
          
          <!-- About -->
          <div class="col-md-4"> <img class="margin-bottom-30" src="images/logo-footer.png" alt="" >
            <p>Aoluptas sit aspernatur aut odit aut fugit, sed elits quias consequuntur magni dolores eos qui ratione volust  luptatem sequi nesciunt. .</p>
            <ul class="personal-info">
              <li><i class="fa fa-map-marker"></i> 10th Floor,Washington Square Park, 
                NY, United States.</li>
              <li><i class="fa fa-envelope"></i> Support@domain.com</li>
              <li><i class="fa fa-phone"></i> (004)+ 124 45 78 678 </li>
            </ul>
          </div>
          
          <!-- Service provided -->
          <div class="col-md-4">
            <h6>Service provided</h6>
            <ul class="links">
              <li><a href="#.">SEO Services</a></li>
              <li><a href="#.">Pay per click</a></li>
              <li><a href="#.">Social Media</a></li>
              <li><a href="#.">Web Analytics</a></li>
              <li><a href="#.">Web Developement</a></li>
              <li><a href="#.">Content Management</a></li>
              <li><a href="#.">Blog Management</a></li>
              <li><a href="#.">Virtual Marketing</a></li>
              <li><a href="#.">Email Marketing</a></li>
              <li><a href="#.">Keyword Analytics</a></li>
            </ul>
          </div>
          
          <!-- Quote -->
          <div class="col-md-4">
            <h6>Get Free Quote</h6>
            <div class="quote">
              <form>
                <input class="form-control" type="text" placeholder="Name">
                <input class="form-control" type="text" placeholder="Phone No">
                <textarea class="form-control" placeholder="Messages"></textarea>
                <button type="submit" class="btn btn-orange">SEND NOW</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Rights -->
    <div class="rights">
      <div class="container">
        <p>Copyright © 2015 Infinity SEO Solution. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> ')}}
<script src="{{asset('js/vendors/jquery/jquery.min.js')}}"></script> 
<script src="{{asset('js/vendors/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/vendors/own-menu.js')}}"></script> 
<script src="{{asset('js/vendors/flexslider/jquery.flexslider-min.js')}}"></script> 
<script src="{{asset('js/vendors/jquery.isotope.min.js')}}"></script> 
<script src="{{asset('js/vendors/owl.carousel.min.js')}}"></script> 
<script src="{{asset('js/vendors/jquery.sticky.js')}}"></script>

@if($controller=="HomeController" and $action=="index")
<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script> 
@endif
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>