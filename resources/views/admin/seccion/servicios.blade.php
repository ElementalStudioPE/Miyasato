@extends('admin.layouts.master')


@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="">
		<h2 class="titulo-seccion">Servicios&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-primary regresar-agregar">+&nbsp;Agregar nuevo</a></h2>
	</div>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
	<div class="panel">
		<div class="panel-content">
			<table id="dataTable" class="row table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
		<thead>
			<tr role="row">
				<th style="width: 92px;">Icono</th>
				<th style="width: 61px;">Nombre</th>
				<th style="width: 575px;">Descripcion</th>
				<th style="width: 92px;">Imagen</th>
				<th style="width: 69px;">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr role="row" class="odd">
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/bJoSmpxWO4WKp7JCQ2Rj.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Social Media &amp; MKT</div>
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Diseñamos estrategias orientadas a resultados concretos. Buscamos elaborar planes de acción que nos permitan crear/fortalecer el alcance de tu marca con la comunidad de usuarios. Nuestra misión es  ...</div>
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
			<tr role="row" class="even">
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/mpaNXQ2yF2UoKIxPR0RF.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Branding</div>
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Diseñamos y definimos la identidad de tu marca. Designamos los lineamientos gráficos que tu marca necesita para poder consolidarse en el mercado.</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/LJzUUZVFV5WhltxcvNvh.png" style="width:100px">
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
					<img src="https://ess.pe/storage/servicios/May2017/so4ggQa7ZRxtNGIDVqdk.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Marketing Digital</div>
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Hacemos un análisis completo de tu presencia en el ecosistema digital. Identificamos oportunidades de mejora y desarrollamos soluciones integrales. Esto nos permite determinar cuáles son las accione ...</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/XZFG91FRtbXxrZaRSKso.png" style="width:100px">
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
					<img src="https://ess.pe/storage/servicios/May2017/cFtCv4d6TANIQM9suZ75.png" style="width:100px">
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Diseño y Desarrollo web:</div>
				</td>
				<td>
					<div class="readmore" style="max-height: none;">Creamos plataformas interactivas con diseños únicos, eficientes, ligeros y de alto impacto. Todos estos factores nos permiten crear experiencias únicas con tus usuarios. Buscamos la manera más efi ...</div>
				</td>
				<td>
					<img src="https://ess.pe/storage/servicios/May2017/IkkHj8ZRLdVWmogHlYoC.png" style="width:100px">
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
		<h2 class="titulo-seccion">Servicios&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-success regresar-lista">&nbsp;Regresar a la ista</a></h2>
	</div>
</div>
<div class='col-xs-12 col-sm-6 col-md-8 agregar' style="display: none;">
	<div class="panel">
		<div class="panel-content">
			<h4>Texto Principal</h4>
			<div id="summernote">
				<p class="black-">Diseñamos estrategias orientadas a resultados concretos. Buscamos elaborar planes de acción que nos permitan crear/fortalecer el alcance de tu marca con la comunidad de usuarios. Nuestra misión es comunicar, interactuar e impresionar a tus clientes par generar mayor alcance e impacto. De esta manera estrechar lazos y vínculos.</p>
                <br><br>
                <p class="black-">
                  <i class="fa fa-long-arrow-right flecha-"></i> Gestión de Redes Sociales y 
                  Plataformas Digitales <br>
                  <i class="fa fa-long-arrow-right flecha-"></i> Inversión en Medios Digitales <br>
                  <i class="fa fa-long-arrow-right flecha-"></i> E-mail Marketing Analítica Digital y SEO <br>
                </p>
			</div>
		</div>
	</div>
	<div class="panel">
		<div class="panel-content">
			<div class="imagen-box">
				<h4>Ícono</h4>
				<div class="imagen-cuerpo">
					<img src="https://ess.pe/storage/servicios/May2017/bJoSmpxWO4WKp7JCQ2Rj.png" class="img-responsive" style="display: inline-block;">
					<button class="btn-label"><label for="imagen_hero">Seleccionar archivo</label></button>
					<input type="file" name="imagen_hero" id="imagen_hero" class="input-file" style="display: inline-block;margin-left: -142px;">
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
		min-height: 200px;
	}
</style>
@stop

@section('js')
<script type="text/javascript" src="{{asset('static-admin/assets/summernote/summernote.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#summernote').summernote({
			height: 250,
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