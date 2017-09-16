@extends('admin.layouts.master')


@section('content')
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_portafolios_add')}}">
	@if($portafolio != '')
	<input type="hidden" name="id" value="{{ $portafolio->id }}">
	@endif
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class='col-xs-12 col-sm-12 col-md-12 agregar'>
		<div class="">
			<h2 class="titulo-seccion">Experiencias&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.portafolios')}}" class="btn btn-success regresar-lista">&nbsp;Regresar a la lista</a></h2>
			<br>
		</div>
	</div>
	<div class='col-xs-12 col-sm-6 col-md-8 agregar'>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Estado</h4>
				<div style="padding: 0 10px 10px 10px;">
					<select class="form-control" required="true" name="estado">
						@if($portafolio != '')
							@if($portafolio->estado == 1)
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
			<div class="panel-content panel-ess">
				<h4>Número de orden</h4>
				<div>
					@if($portafolio != '')
					<input type="text" name="orden" placeholder="Orden" class="form-control" required="true" value="{{$portafolio->orden}}">
					@else
					<input type="text" name="orden" placeholder="Orden" class="form-control" required="true">
					@endif
				</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Nombre proyecto</h4>
				<div>
					@if($portafolio != '')
					<input type="text" name="titulo" placeholder="Nombre" class="form-control" required="true" value="{{$portafolio->titulo}}">
					@else
					<input type="text" name="titulo" placeholder="Nombre" class="form-control" required="true">
					@endif
				</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Descripción Previa</h4>
				@if($portafolio != '')
				<textarea class="form-control" id="summernote" name="descripcion_preview">{{$portafolio->descripcion_preview}}</textarea>
				@else
				<textarea class="form-control" id="summernote" name="descripcion_preview"></textarea>
				@endif
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Descripción Completa</h4>
				@if($portafolio != '')
				<textarea class="form-control" id="summernote-2" name="descripcion_modal" style="min-height: 150px;">{{$portafolio->descripcion_modal}}</textarea>
				@else
				<textarea class="form-control" id="summernote-2" name="descripcion_modal" style="min-height: 150px;"></textarea>
				@endif
			</div>
		</div>
	</div>
	<div class='col-xs-12 col-sm-6 col-md-4 agregar'>
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
					<div class="imagen-titulo">IMAGEN PREVIEW</div>
					<div class="imagen-cuerpo">
						@if($portafolio != '')
						@if($portafolio->imagen_preview != '')
						<img src="{{asset('storage/'.$portafolio->imagen_preview)}}" class="img-responsive" style="max-height: 200px;">
						@endif
						@endif
						<br>
						<a class="btn btn-label"><label for="imagen_preview">Seleccionar archivo</label></a>
						<input type="file" name="imagen_preview" id="imagen_preview" class="input-file">
					</div>
				</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
					<div class="imagen-titulo">IMAGEN MODAL</div>
					<div class="imagen-cuerpo">
						@if($portafolio != '')
						@if($portafolio->imagen_modal != '')
						<img src="{{asset('storage/'.$portafolio->imagen_modal)}}" class="img-responsive" style="max-height: 200px;">
						@endif
						@endif
						<br>
						<a class="btn btn-label"><label for="imagen_modal">Seleccionar archivo</label></a>
						<input type="file" name="imagen_modal" id="imagen_modal" class="input-file">
					</div>
				</div>
			</div>
		</div>
		<div class="box-accion">
			@if($portafolio != '')
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
		@if($portafolio != '')
		<a href="{{route('admin.seccion.portafolios.add')}}?id={{$portafolio->id}}&accion=eliminar" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
			<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Eliminar</span>
		</a>
		@endif
	</div>
</form>
@stop