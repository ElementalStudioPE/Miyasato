@extends('web.layouts.master-blog')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=1577274335679526";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<style>
 #black-back-{
  background: black; 
}
@media screen and (max-width: 767px){
  #black-back- {
    background: #fff !important;
    border-bottom: 1px solid #e5e5e5;
  }
}
.cuerpo-noticia img{
  width: 100%;
  max-width: 100%;
}
a:hover,a:active,a:focus{
  color: #737373 !important;
}
</style>
<?php
    Jenssegers\Date\Date::setLocale('es');
    $categoriaNombre = 'Sin Categoría';
    $categoriaUrl = '#';
    $categoria = \DB::table('categories')->where('id',$noticia->category_id)->first();
    if ($categoria) {
      $categoriaNombre = $categoria->name;
      $categoriaUrl = route('web.blog','categoria_id='.$categoria->id);
    }
    $date = Jenssegers\Date\Date::parse($noticia->created_at)->format('F j, Y');
?>

<?php
  $autor = App\Autor::where('id',1)->first();
?>
<div class="container content-md" style="position:relative;padding-top: 100px;">
  <div class="row top-top-cd" id="hr-style">

   <div class="col-md-9 columns">
    <div class="owl-carousel owl-theme">
      <img src="{{asset('img/platos.png')}}" alt="">
    </div>
    <p class="fecha-publicacion">{{$date}}</p>
    <p class="titulo-style-blog1">{{$noticia->title}}</p>
    <a href="{{$categoriaUrl}}">
      <p class="texto-blog1" style="margin-bottom: 30px;display: inline-block;">Por <span style="font-weight: 700;">Javier Miyasato </span>en Categoría <span style="font-weight: 700;">{{$categoriaNombre}}</span></p>
    </a>
    <div class="thumbnail-noticia">
      <img src="{{ asset('storage/'.$noticia->image)}}" class="img-responsive">
    </div>
    <div class="cuerpo-noticia">
      {!! $noticia->body !!}
    </div>
    <br>
    <div class="autor">
      <div class="row">
       <div class="col-md-3 center-img-publ">
        <img src="{{asset('storage/'.$autor->image)}}" alt="" style="border-radius: 50%;margin-bottom: 21px;    width: 100%;
    max-width: 150px;">
        <p class="texto-blog1" style="padding-left: 8px;font-size: 15.2px;font-weight: 500;">{{$autor->nombre}}</p>
      </div>
      <div class="col-md-9" >
        <div class="informacion-autor" style="background: #efefef;padding: 40px 40px 40px 40px;">
          <p class="miya-coments">
            {{$autor->descripcion}}
          </p>
          <p style="color: black;">
            <a href="{{$autor->facebook_url}}" target="_blank"><i style="font-size: 18px;padding-right: 15px;" class="fa fa-facebook-official icon-social" aria-hidden="true"></i></a>
            <a href="{{$autor->instagram_url}}" target="_blank"><i style="font-size: 18px;padding-right: 15px;" class="fa fa-instagram icon-social" aria-hidden="true"></i></a>
            <a href="{{$autor->twitter_url}}" target="_blank"><i style="font-size: 18px;padding-right: 15px;" class="fa fa-twitter icon-social" aria-hidden="true"></i></a>
            <a href="{{$autor->pinterest_url}}" target="_blank"><i style="font-size: 18px;padding-right: 15px;" class="fa fa-pinterest-p icon-social" aria-hidden="true"></i></a>
            <a href="mailto:{{$autor->email}}"><i style="font-size: 18px;padding-right: 15px;" class="fa fa-envelope icon-social" aria-hidden="true"></i></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div style="padding-top: 35px;">
   <br>
   <p class="titulo-style-blog1" style="margin-top: 0px;">Deja un comentario</p>
   <br>
   <div class="fb-comments" data-href="{{ url()->current() }}" data-numposts="5"></div>

 </div>

</div>
<div class="col-md-3" id="entradas">
  <br><br>
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
@stop

@section('css')
<style type="text/css">
  .videoWrapper {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
  }
  .videoWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
</style>
@stop

@section('js')
<script type="text/javascript">
  $(document).ready(function(){

    $("iframe").each(function() {

      $(this).wrap('<div class="videoWrapper"></div>');

    });

  });
</script>
@stop