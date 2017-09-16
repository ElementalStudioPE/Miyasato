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
<style type="text/css">
#black-back-{
  background: black; 
}
</style>
@if($categoria == '')
<div style="margin-top: 120px;">
   <div class="container" ><h1 style="font-weight: 700 !important;text-transform: uppercase;color: black;">BLOG</h1>
   </div>
</div>
@else

<div style="margin-top: 120px;">
   <div class="container" >
   <a href="{{route('web.blog.paginacion')}}"><h4>BLOG</h4></a><h1 style="font-weight: 700 !important;text-transform: uppercase;color: black;">{{ $categoria->name }}</h1>
   </div>
</div>
@endif



<div class="container">
   

     <div class="row top-top-cd" id="hr-style">

   <div class="col-md-9 columns">
    

    @foreach( $noticias as $noticia )
      <?php $date = Jenssegers\Date\Date::parse($noticia->created_at)->format('F j'); ?>
      <div class="col-md-6 overflow-h item-noticia">
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
      <div class="col-md-12 paginacion">
         {{ $noticias->links() }}
      </div>

</div>
<div class="col-md-3" id="entradas">
  <div style="margin-bottom: 40px;" >
    <p class="titulo-style-blog1" style="margin-bottom: 10px;">Post recientes</p>
    @foreach( App\Noticia::where('id','!=',$noticia->id)->orderBy('created_at','dessc')->take(4)->get() as $reciente )
    <a href="{{route('web.publicacion',$reciente->seo_title)}}"><p class="post-recientes-css">{{$reciente->title}}</p></a>
    <hr style="margin: 10px 0;">
    @endforeach
  </div>
  <!-- <div style="margin-bottom: 40px;">
    <p class="titulo-style-blog1" style="margin-bottom: 10px;">Archivo</p>
    <p class="post-recientes-css">December 2016</p>
    <hr style="margin: 10px 0;">
    <p class="post-recientes-css">November 2016</p>
    <hr style="margin: 10px 0;">
    <p class="post-recientes-css">October 2016</p>
    <hr style="margin: 10px 0;">
    <p class="post-recientes-css">September 2016</p>
    <hr style="margin: 10px 0;">
  </div> -->
  <div style="margin-bottom: 40px;">
    <p class="titulo-style-blog1" style="margin-bottom: 10px;">Categoría</p>
    @foreach( App\Categoria::all() as $category )
    <a href="{{route('web.blog','categoria_id='.$category->id)}}">
    <p class="post-recientes-css">
      {{$category->name}}
    </p>
    </a>
    <hr style="margin: 10px 0;">
    @endforeach
  </div>
</div>

</div>


</div>


<div class="container content-md" style="position:relative;" id="entradas">
   <div style="position:absolute;" class="scroll-down" id="inicio">
      <p class="page-scroll scroll-down-style"><a href="#entradas" id="span-entradas">  <span class="bold-scroll">SCROLL </span><br><span style="font-size: 39px !important;font-weight: 100;margin-left: 24px;position: absolute;top: 26px;"> |</span> </a></p>
   </div>
   <div class="row top-top-cd">
      
   </div>
</div>
@stop



@section('js')

<script type="text/javascript">
  equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
     $(container).each(function() {

       $el = $(this);
       $($el).height('auto')
       topPostion = $el.position().top;

       if (currentRowStart != topPostion) {
         for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
           rowDivs[currentDiv].height(currentTallest);
         }
         rowDivs.length = 0; // empty the array
         currentRowStart = topPostion;
         currentTallest = $el.height();
         rowDivs.push($el);
       } else {
         rowDivs.push($el);
         currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
      }
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
     });
    }

    $(window).load(function() {
      equalheight('.item-noticia');
    });


    $(window).resize(function(){
      equalheight('.item-noticia');
    });

</script>

@stop