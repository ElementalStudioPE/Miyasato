@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="">
		<h2 class="titulo-seccion">Categorias&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.categorias.add')}}" class="btn btn-primary regresar-agregar">+&nbsp;Agregar nuevo</a></h2>
		<br>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
		<thead>
			<tr role="row">
				<th style="width: 92px;">Nombre</th>
				<th style="width: 92px;">Slug</th>
				<th style="width: 69px;">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach( App\Categoria::orderBy('created_at','asc')->get() as $categoria )
			<tr role="row">
				<td>
					<div class="readmore" style="max-height: none;">{{ $categoria->name }}</div>
				</td>
			    <td>
					<div class="readmore" style="max-height: none;">{{ $categoria->slug }}</div>
				</td>
				<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
					<a href="{{route('admin.seccion.categorias.add')}}?id={{$categoria->id}}&accion=editar" title="Editar" class="btn btn-sm btn-primary pull-right edit">
						<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		</div>
	</div>
</div>
@stop