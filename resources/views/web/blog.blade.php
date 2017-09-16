@extends('web.layouts.master-blog')
@section('content')
<?php

Jenssegers\Date\Date::setLocale('es'); 

$blog = App\Blog::where('id',1)->first();
$noticia = App\Noticia::where('id',$blog->post_id)->first();
if (!$noticia) {
   $noticia = App\Noticia::where('status','ACTIVO')->orderBy('created_at','desc')->first();
}

$date = Jenssegers\Date\Date::parse($noticia->created_at)->format('F j');

?>
<style type="text/css">
   .interactive-slider-v4.img-v456 {
    background: url({{asset('storage/'.$noticia->image)}}) no-repeat !important;
background-size: cover !important;
background-position: center center !important;
}
</style>

@if($categoria == '')
<div class="interactive-slider-v4 interactive-slider-v2-md img-v456" id="inicio">
   <div class="container container666" id="text-mid-c">
      <p class="roboto" style="font-size: 20px;color: white !important;margin-bottom: 4px;text-transform: uppercase;">{{$date}}</p>
      <p class="letra letra666" style="line-height: 65px;color: white !important;max-width: 700px;"><b>{{$noticia->title}}</b></p>
      <p class="roboto principal-descripcion" style="font-size: 22px;color: white !important;padding-bottom: 35px;max-width: 500px;">{{$noticia->excerpt}}</p>
      <a href="{{route('web.publicacion',$noticia->seo_title)}}" class="btn-u" style="letter-spacing:3px;background: transparent;border: solid 1px white;color: white;    font-family: 'gaspo_slabregular', Arial, sans-serif;padding: 8px 29px;">LEER MÁS</a>
   </div>
</div>
@else
<style type="text/css">
#black-back-{
  background: black; 
}
</style>
<div style="margin-top: 120px;">
   <div class="container" >
   <h4>Categoría</h4><h1 style="font-weight: 700 !important;text-transform: uppercase;color: black;">{{ $categoria->name }}</h1>
   </div>
</div>
@endif

<div class="container content-md" style="position:relative;" id="entradas">
   <div style="position:absolute;" class="scroll-down" id="inicio">
      <p class="page-scroll scroll-down-style"><a href="#entradas" id="span-entradas">  <span class="bold-scroll">SCROLL </span><br><span style="font-size: 39px !important;font-weight: 100;margin-left: 24px;position: absolute;top: 26px;"> |</span> </a></p>
   </div>
   <div class="row top-top-cd">
      @foreach( $noticias as $noticia )
      <?php $date = Jenssegers\Date\Date::parse($noticia->created_at)->format('F j'); ?>
      <div class="col-md-4 overflow-h">
         <a href="{{route('web.publicacion',$noticia->seo_title)}}">
            <img class="img-responsive wow animated fadeInUp" data-wow-duration="1.5s" src="{{asset('storage/'.$noticia->image)}}" alt="" style="padding-left: 0px;">
         </a>
         <p class="fecha-style" style="text-transform: uppercase;">{{$date}}</p>
         <a href="{{route('web.publicacion',$noticia->seo_title)}}">
            <p class="titulo-style-blog">{{$noticia->title}}</p>
         </a>
         <p class="texto-blog">{{$noticia->excerpt}}</p>
         <a href="{{route('web.publicacion',$noticia->seo_title)}}">
            <p class="leer-mas">Leer más <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-left: 65%;"></i></p>
         </a>
      </div>
      @endforeach
      <div class="col-md-12" style="padding-top: 60px;text-align: center;">
         @if($categoria != '')
         <a href="{{ route('web.blog.paginacion','categoria_id='.$categoria->id) }}" class="btn-u" style="letter-spacing:3px;text-align: center;font-family: 'gaspo_slabregular', Arial, sans-serif;padding: 10px 35px;">CARGAR MÁS</a>
         @else
         <a href="{{ route('web.blog.paginacion') }}" class="btn-u" style="letter-spacing:3px;text-align: center;font-family: 'gaspo_slabregular', Arial, sans-serif;padding: 10px 35px;">CARGAR MÁS</a>
         @endif
      </div>
   </div>
</div>
@stop