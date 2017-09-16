@extends('web.layouts.master')

@section('content')

<?php $general = App\General::where('id',1)->first(); ?>

<style type="text/css">
  .interactive-slider-v2.img-v3 {
    background: url({{ asset('storage/'.$general->principal_background) }}) no-repeat;
background-size: cover !important;
background-position: center center !important;
}

@media only screen and (max-width: 767px) {
  .interactive-slider-v2.img-v3 {
    height: 100vh !important;
  }
}
</style>

<div class="interactive-slider-v2 interactive-slider-v3433-md img-v3" id="inicio">
 <div class="container" id="text-mid-c">
  <p class="letra"><b>{{ $general->principal_titulo }}</b></p>
  <p class="roboto">{!! nl2br($general->principal_subtitulo) !!}</p>
</div>
</div>
<div class="container content-md" style="position:relative;" id="sobre-mi">
 <div style="position:absolute;" class="scroll-down respo-center-sl" id="inicio">
  <p class="page-scroll scroll-down-style"  id="sobre-mi"><a href="#sobre-mi" id="scroll-quienes-somos">  <span class="bold-scroll">SCROLL </span><br><span style="font-size: 39px !important;font-weight: 100;margin-left: 24px;position: absolute;top: 26px;"> |</span> </a></p>
</div>
<div class="row top-top-cd">
  <p class="sobre-mi responsive-7">Sobre <br> <span>mí</span></p>
  <div class="col-md-6 overflow-h javier-miyasato javier-top-padd">
   <img class="img-responsive wow animated fadeInUp img-query" data-wow-duration="1.5s" src="{{asset('storage/'.$general->nosotros_imagen)}}" alt="" >
 </div>
 <div class="col-md-6 md-margin-bottom-40 text-edit center-media-q">
  <h2 class="title-v2">
    <span class="amarillo miya-title">{{ $general->nosotros_titulo }}</span>
  </h2>
  <br>
  <p class="negro">
    {!! nl2br($general->nosotros_cuerpo) !!}
  </p>
</div>
</div>
</div>

<div  id="experiencias">
  @include('web.modulo.masonry')
</div>

<div style="background-color:#efefef"  id="testimonios">
  <div class="container content-md" style="position:relative;overflow: hidden;">
   <div class="row top-top-cd">
    <p class="col-md-12 testimonios" style="text-align: left !important;">testi <br> <span style="padding-left:73px;">monios</span></p>
    <div class="col-md-12" data-wow-delay="0.2s">
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">


        <div class="carousel-inner text-center over-flow-as margin-top-test-as" style="margin-top: 100px;">
          <img src="img/comillas_izq.png" alt="" class="izquierda-comi" style="width: 140px;position: absolute;left: 0;top: 50px;">
          <?php $count = 0 ?>
          @foreach(App\Testimonio::where('estado',1)->orderBy('orden','asc')->get() as $testimonio)
          <?php
          if ($count == 0) {
            $active = 'active';
          }
          else{
            $active = '';
          }
          ?>
          <div class="item {{$active}}">

            <blockquote>
              <div class="row row-relative-test">
                <div class="col-sm-12">
                  <p class="text-test-img-center-" style="padding-top: 45px;left: -23px;">{!! $testimonio->cuerpo !!}.</p>
                </div>
                <div class="center-text-test-">
                 <img src="img/imagen_testimonial.png" alt="">
                 <p class="gas-text-center">{{$testimonio->nombre}} <br> <span class="span-text-center">
                  {{$testimonio->ocupacion}}
                </span></p>
              </div>
            </div>
          </blockquote>

        </div>
        <?php $count = $count + 1 ?>
        @endforeach

        <img src="img/comillas_der.png" alt="" class="derecha-comi" style="width: 140px;position: absolute;right: 0px;bottom: 70px;">
      </div>

      <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
      <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
    </div>
  </div>
</div>
</div>
</div>

@stop

