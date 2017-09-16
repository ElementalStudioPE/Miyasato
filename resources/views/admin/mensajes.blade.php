@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="">
		<h2 class="titulo-seccion">Mensajes</h2>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
		<thead>
			<tr role="row">
				<th style="width: 92px;">Nombre</th>
				<th style="width: 61px;">Thumbnail</th>
				<th style="width: 575px;">Descripcion</th>
				<th style="width: 92px;">Tags</th>
				<th style="width: 69px;">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr role="row">
			    <td>
					<div class="readmore" style="max-height: none;">Proyecto 1</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/bJoSmpxWO4WKp7JCQ2Rj.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Diseñamos estrategias orientadas a resultados concretos. Buscamos elaborar planes de acción que nos permitan crear/fortalecer el alcance de tu marca con la comunidad de usuarios. Nuestra misión es  ...</div>
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Social Media, Diseño</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/dw82lWN89kKcBPPcEyFf.png" style="width:100px">
				</td>
				<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
					<a href="javascript:;" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
						<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Eliminar</span>
					</a>
					<a href="https://ess.pe/admin/servicios/3/edit" title="Editar" class="btn btn-sm btn-primary pull-right edit">
						<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
					</a>
				</td>
			</tr>
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
			height: 450,
			minHeight: null,
			maxHeight: null,
			focus: false 
		});
		$('.regresar-agregar').click(function(){
			$('.lista').hide();
			$('.agregar').show();
		});
		$('.regresar-lista').click(function(){
			$('.lista').show();
			$('.agregar').hide();
		});
	});
</script>
@stop