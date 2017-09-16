@extends('admin.layouts.master')


@section('content')
<?php $general = App\General::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_principal')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="">
		<h2 class="titulo-seccion">Principal</h2>
		<br>
	</div>
</div>

<div class='col-xs-12 col-sm-6 col-md-8'>
	<div class="panel">
		<div class="panel-content panel-ess">
			<h4>Título Principal</h4>
			<textarea id="principal_titulo" class="form-control" name="principal_titulo">{{ $general->principal_titulo }}</textarea>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8'>
	<div class="panel">
		<div class="panel-content panel-ess">
			<h4>Subtítulo Principal</h4>
			<textarea id="principal_subtitulo" class="form-control" name="principal_subtitulo">{{ $general->principal_subtitulo }}</textarea>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4'>
	<div class="panel">
		<div class="panel-content panel-ess">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN</div>
				<div class="imagen-cuerpo">
					@if($general->principal_background != '')
					<img src="{{asset('storage/'.$general->principal_background)}}" class="img-responsive">
					@endif
					<br>
					<a class="btn-label"><label for="principal_background">Seleccionar archivo</label></a>
					<input type="file" name="principal_background" id="principal_background" class="input-file">
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