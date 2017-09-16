@extends('admin.layouts.master')


@section('content')
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_testimonios_add')}}">
@if($testimonio != '')
<input type="hidden" name="id" value="{{ $testimonio->id }}">
@endif
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class='col-xs-12 col-sm-12 col-md-12 agregar'>
	<div class="">
		<h2 class="titulo-seccion">Testimonios&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.testimonios')}}" class="btn btn-success regresar-lista">&nbsp;Regresar a la lista</a></h2>
		<br>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8 agregar'>
	<div class="panel">
		<div class="panel-content">
			<h4>Estado</h4>
			<div style="padding: 0 10px 10px 10px;">
				<select class="form-control input-admin" required="true" name="estado">
					@if($testimonio != '')
						@if($testimonio->estado == 1)
						<option value="1" selected="true">Activo</option>
						<option value="0">Inactivo</option>
						@else
						<option value="1">Activo</option>
						<option value="0" selected="true">Inactivo</option>
						@endif
					@else
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>
					@endif
				</select>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Nombre</h4>
			<div>
				@if($testimonio != '')
				<input type="text" name="nombre" placeholder="Nombre" class="form-control input-admin" required="true" value="{{$testimonio->nombre}}">
				@else
				<input type="text" name="nombre" placeholder="Nombre" class="form-control input-admin" required="true">
				@endif
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Ocupación</h4>
			<div>
				@if($testimonio != '')
				<input type="text" name="ocupacion" placeholder="Nombre" class="form-control input-admin" required="true" value="{{$testimonio->ocupacion}}">
				@else
				<input type="text" name="ocupacion" placeholder="Nombre" class="form-control input-admin" required="true">
				@endif
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Testimonio</h4>
			@if($testimonio != '')
			<textarea id="summernote" name="cuerpo">{{$testimonio->cuerpo}}</textarea>
			@else
			<textarea id="summernote" name="cuerpo"></textarea>
			@endif
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 agregar'>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">FOTO (150x150px)</div>
				<div class="imagen-cuerpo">
					@if($testimonio != '')
					@if($testimonio->foto != '')
					<img src="{{asset('storage/'.$testimonio->foto)}}" class="img-responsive" style="max-height: 200px;">
					@endif
					@endif
					<br>
					<a class="btn btn-label"><label for="foto">Seleccionar archivo</label></a>
					<input type="file" name="foto" id="foto" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="box-accion">
		@if($testimonio != '')
		<button type="submit">Guardar</button>
		@else
		<button type="submit">Agregar</button>
		@endif
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
	<h4 class="text-right">Esta acción es irreversible</h4>
	@if($testimonio != '')
	<a href="{{route('admin.seccion.testimonios.add')}}?id={{$testimonio->id}}&accion=eliminar" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
						<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Eliminar</span>
					</a>
					@endif
</div>
</form>
@stop


@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/summernote/summernote.css')}}">
<style type="text/css">
	#summernote{
		min-height: 200px;
	}
</style>
@stop

@section('js')
<script type="text/javascript" src="{{asset('static-admin/assets/summernote/summernote.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#summernote').summernote({
			height: 200,
			minHeight: null,
			maxHeight: null,
			focus: false 
		});
		$('#summernote-2').summernote({
			height: 450,
			minHeight: null,
			maxHeight: null,
			focus: false 
		});
		// $('.regresar-agregar').click(function(){
		// 	$('.lista').hide();
		// 	$('.agregar').show();
		// });
		// $('.regresar-lista').click(function(){
		// 	$('.lista').show();
		// 	$('.agregar').hide();
		// });
	});
</script>
@stop