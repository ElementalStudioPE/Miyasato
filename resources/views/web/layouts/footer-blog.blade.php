<?php $blog = App\Blog::where('id',1)->first(); ?>
<div id="contacto" style="background-color:#101010;">
   <div class="container content-md" id="width-perso">
      <div class="row">
         <div class="col-md-3 padding-footer-top overflow-h">
            @if($blog->logo_footer != '')
            <img src="{{asset('storage/'.$blog->logo_footer)}}" class="img-responsive" style="max-width: 70px;">
            @else
            <img src="{{asset('img/jm_logo_responsive.png')}}" alt="img-responsive" style="max-width: 70px;">
            @endif
            <p class="footer-text-blog">{{ $blog->texto_footer }}</p>
         </div>
         <div class="col-md-3 padding-footer-top">
            <p class="titulo-footer-text">
               Entradas recientes
            </p>
             @foreach( App\Noticia::where('id','!=',$noticia->id)->orderBy('created_at','dessc')->take(2)->get() as $reciente )
            <a href="{{route('web.publicacion',$reciente->seo_title)}}">
            <p class="titulo-text-2">
               {{$reciente->title}}
            </p>
            </a>
            @endforeach
         </div>
         <div class="col-md-3 padding-footer-top">
            <p class="titulo-footer-text">
               Categorías
            </p>
            @foreach( App\Categoria::take(5)->get() as $categoria )
            <a href="{{route('web.blog','categoria_id='.$categoria->id)}}">
            <p class="titulo-text-20">
               {{$categoria->name}}
               <span class="n-footer">{{ App\Noticia::where('status','ACTIVO')->where('category_id',$categoria->id)->count() }}</span>
            </p>
            </a>
            @endforeach
         </div>
         <div class="col-md-3 padding-footer-top">
         <p class="titulo-footer-text">
               Instagram
            </p>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-6">
                  <a href="https://www.instagram.com/javiermiyasato" target="_blank">
                     <img src="{{asset('storage/'.$blog->instagram_foto_1)}}" alt="" class="insta-footer-img" style="float: right;">
                  </a>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-6 padd-30a">
                  <a href="https://www.instagram.com/javiermiyasato" target="_blank">
                     <img src="{{asset('storage/'.$blog->instagram_foto_2)}}" alt="" class="insta-footer-img" style="margin-left: -25px;">
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-6">
                  <a href="https://www.instagram.com/javiermiyasato" target="_blank">
                     <img src="{{asset('storage/'.$blog->instagram_foto_3)}}" alt="" class="insta-footer-img" style="float: right;">
                  </a>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-6 padd-30a">
                  <a href="https://www.instagram.com/javiermiyasato" target="_blank">
                     <img src="{{asset('storage/'.$blog->instagram_foto_4)}}" alt="" class="insta-footer-img" style="margin-left: -25px;">
                  </a>
               </div>
            </div>

         </div>
      </div>
   </div>
</div>
<div class="color-black-bac">
<div class="container content-md padd-top-45">
<div class="row">
         <div class="col-md-12" style="    text-align: center;">
            <a href="https://www.instagram.com/javiermiyasato/" target="_blank">
            <img src="{{asset('img/insta_normal.png')}}"  style="    width: 40px;"></a>
            <p class="footer-text-foo">All Rights Reserved. Developed by Elemental Studio</p>
         </div>
      </div>
   </div>
</div>