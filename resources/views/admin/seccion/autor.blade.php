@extends('admin.layouts.master')


@section('content')
<?php $autor = App\Autor::where('id',1)->first(); ?>
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\SeccionController@post_autor')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class='col-xs-12 col-sm-12 col-md-12 agregar' >
		<div class="">
			<h2 class="titulo-seccion">Autor</h2>
		</div>
	</div>
	<div class='col-xs-12 col-sm-6 col-md-8 agregar' >
		<div class="panel">
            <div class="panel-content panel-ess">
                <h4>Nombre</h4>
                <input type="text" name="nombre" placeholder="Nombre" class="form-control" required="true" value="{{$autor->nombre}}">
            </div>
        </div>
		<div class="panel">
			<div class="panel-content panel-ess">
				<h4>Descripción</h4>
				<textarea class="form-control" name="descripcion" style="min-height: 100px;">{{ $autor->descripcion }}</textarea>
			</div>
		</div>
		<div class="panel">
            <div class="panel-content panel-ess">
                <h4>Facebook</h4>
                <input type="text" name="facebook_url" placeholder="Facebook URL" class="form-control" required="true" value="{{$autor->facebook_url}}">
            </div>
        </div>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Instagram</h4>
                <input type="text" name="instagram_url" placeholder="Instagram URL" class="form-control" required="true" value="{{$autor->instagram_url}}">
            </div>
        </div>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Twitter</h4>
                <input type="text" name="twitter_url" placeholder="Twitter URL" class="form-control" required="true" value="{{$autor->twitter_url}}">
            </div>
        </div>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Pinterest</h4>
                <input type="text" name="pinterest_url" placeholder="Pinterest URL" class="form-control" required="true" value="{{$autor->pinterest_url}}">
            </div>
        </div>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Email</h4>
                <input type="text" name="email" placeholder="Email" class="form-control" required="true" value="{{$autor->email}}">
            </div>
        </div>
	</div>
	<div class='col-xs-12 col-sm-6 col-md-4 agregar' >
		<div class="panel">
			<div class="panel-content panel-ess">
				<div class="imagen-box">
					<div class="imagen-titulo">IMAGEN</div>
					<div class="imagen-cuerpo">
						@if($autor->image != '')
						<img src="{{asset('storage/'.$autor->image)}}" class="img-responsive">
						@endif
						<br>
						<a class="btn-label"><label for="image">Seleccionar archivo</label></a>
						<input type="file" name="image" id="image" class="input-file">
					</div>
				</div>
			</div>
		</div>
		<div class="box-accion">
			<button>Actualizar</button>
		</div>
	</div>
</form>
@stop