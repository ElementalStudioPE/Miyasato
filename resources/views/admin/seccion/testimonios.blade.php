@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="">
		<h2 class="titulo-seccion">Testimonios&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.testimonios.add')}}" class="btn btn-primary regresar-agregar">+&nbsp;Agregar nuevo</a></h2>
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
				<th style="width: 61px;">Ocupación</th>
				<th style="width: 575px;">Foto</th>
				<th style="width: 575px;">Testimonio</th>
				<th style="width: 69px;">Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach( App\Testimonio::orderBy('orden','asc')->get() as $testimonio )
			<tr role="row">
				<td>
					@if($testimonio->estado == 0)
					<div class="readmore" style="max-height: none;color: red;">No Activo</div>
					@else
					<div class="readmore" style="max-height: none;">Activo</div>
					@endif
				</td>
				<td>
					<div class="readmore" style="max-height: none;">{{ $testimonio->orden }}</div>
				</td>
			    <td>
					<div class="readmore" style="max-height: none;">{{ $testimonio->nombre }}</div>
				</td>
				<td>
					<div class="readmore" style="max-height: none;">{{ $testimonio->ocupacion }}</div>
				</td>
				<td>
					@if($testimonio->foto != '')
					<img src="{{asset('storage/'.$testimonio->foto)}}" class="img-responsive" style="width:100px">
					@endif
				</td>
				<td>
					<div class="readmore" style="max-height: none;">{!! $testimonio->cuerpo !!}</div>
				</td>
				<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
					<a href="{{route('admin.seccion.testimonios.add')}}?id={{$testimonio->id}}&accion=editar" title="Editar" class="btn btn-sm btn-primary pull-right edit">
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