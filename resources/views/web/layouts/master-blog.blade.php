<!DOCTYPE html>
<html lang="en">
<head>
 <title>Javier Miyasato</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="">
 <!-- Favicon -->
 <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
 <!-- CSS Global Compulsory -->
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <link rel="stylesheet" href="{{asset('css/fonts/stylesheet.css')}}">
 <!-- CSS Header and Footer -->
 <link rel="stylesheet" href="{{asset('css/header-v6.css')}}">
 <link rel="stylesheet" href="{{asset('css/footer-v6.css')}}">
 <!-- CSS Implementing Plugins -->
 <link rel="stylesheet" href="{{asset('css/animate.css')}}">
 <link rel="stylesheet" href="{{asset('css/line-icons.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
 <link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/custom-cubeportfolio.css')}}">
 <link rel="stylesheet" href="{{asset('css/animated-headline.css')}}">
 <!-- CSS Theme -->
 <link rel="stylesheet" href="{{asset('css/dark.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
 <link rel="stylesheet" href="{{asset('css/sky-forms.css')}}">
 <link rel="stylesheet" href="{{asset('css/custom-sky-forms.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


 <!-- CSS Customization -->
 <link rel="stylesheet" href="{{asset('css/custom.css')}}">
 <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
 <script src="{{asset('js/owl.carousel.min.js')}}"></script>
 <style type="text/css">
   .interactive-slider-v4.img-v456 {
    min-height: 100vh;
  }
  .interactive-slider-v2-md {
    padding: 180px 0 240px 0 !important; 
  }
  @media only screen and (max-width: 767px){
    .interactive-slider-v2.img-v3 {
      height: 100vh !important;
      background-position: left center !important;
      background-position-x: -140px !important;
      background-position-y: 10px !important;
    }
    li.menu-icons {
        display: none !important;
    }
  }
</style>
@yield('css')
</head>
<body class="header-fixed">

  @include('web.layouts.nav-blog')

  @yield('content')

  @include('web.layouts.footer-blog')




</body>

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{asset('js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- JS Implementing js -->
<script type="text/javascript" src="{{asset('js/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/smoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/animated-headline.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cube-portfolio-lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl-carousel.js')}}"></script>
<script type="text/javascript">
 jQuery(document).ready(function() {
  App.init();
  new WOW().init();
  App.initCounter();
  App.initParallaxBg();
});
</script>
<script>
  $(function() {
    $('.page-scroll a').bind('click', function(event) {
      var $anchor = $(this);

      if (  $(window).width() < 767 ) {

        if ($anchor.attr('id') == 'a-entradas' || $anchor.attr('id') == 'span-entradas') {
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 70
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();
        }
        else{
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
          }, 1500, 'easeInOutExpo');
        }

      }
      else{

        if ($anchor.attr('id') == 'a-entradas' || $anchor.attr('id') == 'span-entradas') {
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 70
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();
        }
        else{
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
          }, 1500, 'easeInOutExpo');

        }

      }

      event.preventDefault();
    });

  });
</script>
@yield('js')
</html>