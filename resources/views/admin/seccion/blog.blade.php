@extends('admin.layouts.master')


@section('content')
<?php $blog = App\Blog::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_blog')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class='col-xs-12 col-sm-12 col-md-12 agregar' >
		<div class="">
			<h2 class="titulo-seccion">Información Blog</h2>
			<br>
		</div>
	</div>
	<div class='col-xs-12 col-sm-6 col-md-8 agregar' >
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>TEXTO FOOTER</h4>
				<textarea class="form-control" name="texto_footer" style="min-height: 100px;">{{ $blog->texto_footer }}</textarea>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN INSTAGRAM FOOTER</div>
				<div class="imagen-cuerpo">
					@if($blog->instagram_foto_1 != '')
					<img src="{{asset('storage/'.$blog->instagram_foto_1)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="instagram_foto_1">Seleccionar archivo</label></a>
					<input type="file" name="instagram_foto_1" id="instagram_foto_1" class="input-file">
				</div>
			</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN INSTAGRAM FOOTER</div>
				<div class="imagen-cuerpo">
					@if($blog->instagram_foto_2 != '')
					<img src="{{asset('storage/'.$blog->instagram_foto_2)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="instagram_foto_2">Seleccionar archivo</label></a>
					<input type="file" name="instagram_foto_2" id="instagram_foto_2" class="input-file">
				</div>
			</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN INSTAGRAM FOOTER</div>
				<div class="imagen-cuerpo">
					@if($blog->instagram_foto_3 != '')
					<img src="{{asset('storage/'.$blog->instagram_foto_3)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="instagram_foto_3">Seleccionar archivo</label></a>
					<input type="file" name="instagram_foto_3" id="instagram_foto_3" class="input-file">
				</div>
			</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN INSTAGRAM FOOTER</div>
				<div class="imagen-cuerpo">
					@if($blog->instagram_foto_4 != '')
					<img src="{{asset('storage/'.$blog->instagram_foto_4)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="instagram_foto_4">Seleccionar archivo</label></a>
					<input type="file" name="instagram_foto_4" id="instagram_foto_4" class="input-file">
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class='col-xs-12 col-sm-6 col-md-4 agregar' >
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
				<div class="imagen-titulo">LOGO FOOTER</div>
				<div class="imagen-cuerpo" style="background: #ededed;">
					@if($blog->logo_footer != '')
					<img src="{{asset('storage/'.$blog->logo_footer)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="logo_footer">Seleccionar archivo</label></a>
					<input type="file" name="logo_footer" id="logo_footer" class="input-file">
				</div>
			</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Noticia Destacada</h4>
				<div style="padding: 0 10px 10px 10px;">
					<select class="form-control" required="true" name="post_id">
						@foreach( App\Noticia::orderBy('created_at','desc')->get() as $noticia )
							@if($noticia->id == $blog->post_id)
							<option value="{{$noticia->id}}" selected="true">{{$noticia->title}}</option>
							@else
							<option value="{{$noticia->id}}">{{$noticia->title}}</option>
							@endif
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<div class="box-accion">
			<button>Actualizar</button>
		</div>
	</div>
</form>
@stop