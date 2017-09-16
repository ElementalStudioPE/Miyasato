@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_quienessomos')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="">
		<h2 class="titulo-seccion">Sobre mí</h2>
		<br>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8'>
	<div class="panel">
		<div class="panel-content panel-ess">
			<h4>Texto Principal</h4>
			<textarea id="summernote" name="nosotros_titulo" class="form-control">{{ $general->nosotros_titulo }}</textarea>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content panel-ess">
			<h4>Texto Descriptivo</h4>
			<textarea id="summernote-2" name="nosotros_cuerpo" class="form-control" style="min-height: 200px;">{{ $general->nosotros_cuerpo }}</textarea>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4'>
	<div class="panel">
		<div class="panel-content panel-ess">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN</div>
				<div class="imagen-cuerpo">
					@if($general->nosotros_imagen != '')
					<img src="{{asset('storage/'.$general->nosotros_imagen)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="nosotros_imagen">Seleccionar archivo</label></a>
					<input type="file" name="nosotros_imagen" id="nosotros_imagen" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="box-accion">
		<button type="submit">Actualizar</button>
	</div>
</div>
<form>
@stop