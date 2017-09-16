@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="">
		<h2 class="titulo-seccion">Experiencias&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.portafolios.add')}}" class="btn btn-primary regresar-agregar">+&nbsp;Agregar nuevo</a></h2>
		<br>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
		<thead>
			<tr role="row">
				<th style="width: 92px;">Estado</th>
				<th style="width: 92px;">Orden</th>
				<th style="width: 92px;">Nombre</th>
				<th style="width: 61px;">Imagen Preview</th>
				<th style="width: 575px;">Descripcion Preview</th>
				<th style="width: 575px;">Descripcion Modal</th>
				<th style="width: 69px;">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach( App\Portafolio::all() as $portafolio )
			<tr role="row">
				<td>
					@if($portafolio->estado == 0)
					<div class="readmore" style="max-height: none;color: red;">No Activo</div>
					@else
					<div class="readmore" style="max-height: none;">Activo</div>
					@endif
				</td>
				<td>
					<div class="readmore" style="max-height: none;">{{ $portafolio->orden }}</div>
				</td>
			    <td>
					<div class="readmore" style="max-height: none;">{{ $portafolio->titulo }}</div>
				</td>
				<td>
					@if($portafolio->imagen_preview != '')
					<img src="{{asset('storage/'.$portafolio->imagen_preview)}}" class="img-responsive" style="width:100px">
					@endif
				</td>
				<td>
					<div class="readmore" style="max-height: none;">{!! $portafolio->descripcion_preview !!}</div>
				</td>
				<td>
					<div class="readmore" style="max-height: none;">{!! $portafolio->descripcion_modal !!}</div>
				</td>
				<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
					<a href="{{route('admin.seccion.portafolios.add')}}?id={{$portafolio->id}}&accion=editar" title="Editar" class="btn btn-sm btn-primary pull-right edit">
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