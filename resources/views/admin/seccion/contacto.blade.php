@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_contacto')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class='col-xs-12 col-sm-12 col-md-12 agregar' >
		<div class="">
			<h2 class="titulo-seccion">Contacto</h2>
		</div>
	</div>
	<div class='col-xs-12 col-sm-6 col-md-8 agregar' >
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Iframe Mapa</h4>
				<textarea class="form-control" name="contacto_mapa" style="min-height: 100px;">{{ $general->contacto_mapa }}</textarea>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Texto Uno</h4>
				<textarea id="summernote" name="contacto_texto_1" class="form-control">{{ $general->contacto_texto_1 }}</textarea>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Texto Dos</h4>
				<textarea id="summernote" name="contacto_texto_2" class="form-control">{{ $general->contacto_texto_2 }}</textarea>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Texto Tres</h4>
				<textarea id="summernote" name="contacto_texto_3" class="form-control">{{ $general->contacto_texto_3 }}</textarea>
			</div>
		</div>
	</div>
	<div class='col-xs-12 col-sm-6 col-md-4 agregar' >
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN</div>
				<div class="imagen-cuerpo">
					@if($general->contacto_logo != '')
					<img src="{{asset('storage/'.$general->contacto_logo)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="contacto_logo">Seleccionar archivo</label></a>
					<input type="file" name="contacto_logo" id="contacto_logo" class="input-file">
				</div>
			</div>
			</div>
		</div>
		<div class="box-accion">
			<button>Actualizar</button>
		</div>
	</div>
	</form>
		@stop