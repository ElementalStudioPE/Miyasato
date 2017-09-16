<!DOCTYPE html>
<html lang="en">
<head>
 <title>Javier Miyasato</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="">
 <!-- Favicon -->
 <link rel="shortcut icon" href="img/favicon.png">
 <!-- Web Fonts -->
<!--  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,‌​100italic,300,300ita‌​lic,400italic,500,50‌​0italic,700,700itali‌​c,900italic,900' rel='stylesheet' type='text/css'> -->
 <!-- CSS Global Compulsory -->
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <link rel="stylesheet" href="{{asset('css/fonts/stylesheet.css')}}">
 <!-- CSS Header and Footer -->
 <link rel="stylesheet" href="{{asset('css/header-v6.css')}}">
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
   .sobre-mi span{
    margin-left: -54px;
  }
</style>
</head>
<body class="header-fixed">

  @include('web.layouts.nav')

  @yield('content')

  @include('web.layouts.footer')

  @yield('modal')

</body>

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{asset('js/jquery-migrate.min.js')}}"></script>
<!-- JS Implementing js -->
<script type="text/javascript" src="{{asset('js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
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
<script type="text/javascript" src="{{asset('js/cube-portfolio-lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl-carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
 jQuery(document).ready(function() {
  App.init();
  new WOW().init();
  App.initCounter();
  App.initParallaxBg();
});
</script>

<script>
 $(document).ready(function(){
  $('#carousel-footer').owlCarousel({
   loop:true,
   margin:10,
   autoplay:true,
   responsiveClass:true,
   responsive:{
     0:{
       items:1,
       nav:false
     },
     600:{
       items:3,
       nav:false,
       slideBy: 3
     },
     1000:{
       items:5,
       nav:false,
       autoplayTimeout:4300,
       loop:false,
       slideBy: 5
     }
   }
 });
});
</script>


<script>
  $(document).ready(function(){
   $('#carousel-logos').owlCarousel({
     navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
     loop:true,
     margin:10,
     responsiveClass:true,
     responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:1,
        nav:true,
        loop:false
      }
    }
  });
 });
</script>
<script>
  $(function() {
    $('.page-scroll a').bind('click', function(event) {
      var $anchor = $(this);

      if (  $(window).width() < 767 ) {

        if ($anchor.attr('id') == 'a-inicio') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 18
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();

        }

        else if ($anchor.attr('id') == 'a-sobre-mi') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 76
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();

        }


        else if ($anchor.attr('id') == 'a-experiencias') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 84
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();

        }

        else if ($anchor.attr('id') == 'a-testimonios') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 75
          }, 1500, 'easeInOutExpo');
          $('.navbar-toggle').click();

        }

        else if ($anchor.attr('id') == 'a-contacto') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 87
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




        if ($anchor.attr('id') == 'a-sobre-mi') {
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 69
          }, 1500, 'easeInOutExpo');

        }

        else if ($anchor.attr('id') == 'a-experiencias') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 70
          }, 1500, 'easeInOutExpo');

        }

        else if ($anchor.attr('id') == 'a-testimonios') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 70
          }, 1500, 'easeInOutExpo');

        }


        else if ($anchor.attr('id') == 'a-contacto') {

          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 71
          }, 1500, 'easeInOutExpo');

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
</html>