@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="">
		<h2 class="titulo-seccion">Clientes&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-primary regresar-agregar">+&nbsp;Agregar nuevo</a></h2>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12'>
	<div class="panel">
		<div class="panel-content">
			<h4>Texto Descriptivo</h4>
			<div id="summernote">Somos una <b>Consultora de marketing digital y Branding</b> preocupados en convertirnos en tu aliado estratégico en el <b>Ecosistema Digital.</b></div>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
		<thead>
			<tr role="row">
				<th style="width: 92px;">Orden</th>
				<th style="width: 92px;">Imagen</th>
				<th style="width: 61px;">Fecha Creación</th>
				<th style="width: 69px;">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr role="row" class="odd">
				<td>
					<div class="readmore">01</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/dw82lWN89kKcBPPcEyFf.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">26-06-2017</div>
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
			<tr role="row" class="even">
				<td>
					<div class="readmore">01</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/LJzUUZVFV5WhltxcvNvh.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">26-06-2017</div>
				</td>
				<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
					<a href="javascript:;" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="4" id="delete-4">
						<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Eliminar</span>
					</a>
					<a href="https://ess.pe/admin/servicios/4/edit" title="Editar" class="btn btn-sm btn-primary pull-right edit">
						<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
					</a>
				</td>
			</tr>
			<tr role="row" class="odd">
				<td>
					<div class="readmore">01</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/XZFG91FRtbXxrZaRSKso.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">26-06-2017</div>
				</td>
				<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
					<a href="javascript:;" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="2" id="delete-2">
						<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Eliminar</span>
					</a>
					<a href="https://ess.pe/admin/servicios/2/edit" title="Editar" class="btn btn-sm btn-primary pull-right edit">
						<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
					</a>
				</td>
			</tr>
			<tr role="row" class="even">
				<td>
					<div class="readmore">01</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/IkkHj8ZRLdVWmogHlYoC.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">26-06-2017</div>
				</td>
				<td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
					<a href="javascript:;" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1">
						<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Eliminar</span>
					</a>
					<a href="https://ess.pe/admin/servicios/1/edit" title="Editar" class="btn btn-sm btn-primary pull-right edit">
						<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Editar</span>
					</a>
				</td>
			</tr>
		</tbody>
	</table>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 agregar' style="display: none;">
	<div class="">
		<h2 class="titulo-seccion">Clientes&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-success regresar-lista">&nbsp;Regresar a la ista</a></h2>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8 agregar' style="display: none;">
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<h4>Orden</h4>
				<div class="imagen-cuerpo">
					<select name="orden" class="form-control">
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
						<option>08</option>
						<option>09</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-4 agregar' style="display: none;">
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<div class="imagen-titulo">IMAGEN</div>
				<div class="imagen-cuerpo">
					<img src="https://ess.pe/storage/servicios/May2017/dw82lWN89kKcBPPcEyFf.png" class="img-responsive">
					<br>
					<button class="btn-label"><label for="imagen_hero">Seleccionar archivo</label></button>
					<input type="file" name="imagen_hero" id="imagen_hero" class="input-file">
				</div>
			</div>
		</div>
	</div>
	<div class="box-accion">
		<button>Agregar</button>
	</div>
</div>
@stop


@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('static-admin/assets/summernote/summernote.css')}}">
<style type="text/css">
	#summernote{
		min-height: 150px;
	}
</style>
@stop

@section('js')
<script type="text/javascript" src="{{asset('static-admin/assets/summernote/summernote.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#summernote').summernote({
			height: 150,
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