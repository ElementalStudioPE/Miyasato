@extends('admin.layouts.master')


@section('content')
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_categorias_add')}}">
@if($categoria != '')
<input type="hidden" name="id" value="{{ $categoria->id }}">
@endif
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class='col-xs-12 col-sm-12 col-md-12 agregar'>
	<div class="">
		<h2 class="titulo-seccion">Categorias&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.categorias')}}" class="btn btn-success regresar-lista">&nbsp;Regresar a la lista</a></h2>
		<br>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8 agregar'>
	<div class="panel">
		<div class="panel-content">
			<h4>Nombre</h4>
			<div>
				@if($categoria != '')
				<input type="text" name="name" placeholder="Nombre" class="form-control input-admin" required="true" value="{{$categoria->name}}">
				@else
				<input type="text" name="name" placeholder="Nombre" class="form-control input-admin" required="true">
				@endif
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<h4>Slug</h4>
			<div>
				@if($categoria != '')
				<input type="text" name="slug" placeholder="Nombre" class="form-control input-admin" required="true" value="{{$categoria->slug}}">
				@else
				<input type="text" name="slug" placeholder="Nombre" class="form-control input-admin" required="true">
				@endif
			</div>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 agregar'>
	<div class="box-accion">
		@if($categoria != '')
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
	@if($categoria != '')
	<a href="{{route('admin.seccion.categorias.add')}}?id={{$categoria->id}}&accion=eliminar" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
						<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Eliminar</span>
					</a>
					@endif
</div>
</form>
@stop