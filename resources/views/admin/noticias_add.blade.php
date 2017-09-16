@extends('admin.layouts.master')


@section('content')
<form class="contact_form" name="formulario" enctype="multipart/form-data" method="POST" action="{{action('Admin\MainController@post_noticias_add')}}">
    @if($noticia != '')
    <input type="hidden" name="id" value="{{ $noticia->id }}">
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class='col-xs-12 col-sm-12 col-md-12 agregar'>
        <div class="">
            <h2 class="titulo-seccion">Experiencias&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.noticias')}}" class="btn btn-success regresar-lista">&nbsp;Regresar a la lista</a></h2>
            <br>
        </div>
    </div>
    <div class='col-xs-12 col-sm-6 col-md-8 agregar'>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Estado</h4>
                <div style="padding: 0 10px 10px 10px;">
                    <select class="form-control" required="true" name="status">
                        @if($noticia != '')
                            @if($noticia->status == 'ACTIVO')
                            <option value="ACTIVO" selected="true">ACTIVO</option>
                            <option value="NOACTIVO">NO ACTIVO</option>
                            @else
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="NOACTIVO" selected="true">NO ACTIVO</option>
                            @endif
                        @else
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="NOACTIVO">NO ACTIVO</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Título</h4>
                <div>
                    @if($noticia != '')
                    <input type="text" name="title" placeholder="Título" class="form-control" required="true" value="{{$noticia->title}}">
                    @else
                    <input type="text" name="title" placeholder="Título" class="form-control" required="true">
                    @endif
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Categoría</h4>
                <div style="padding: 0 10px 10px 10px;">
                    <select class="form-control" required="true" name="category_id">
                        @if($noticia != '')
                            @foreach(\DB::table('categories')->get() as $category)
                                @if($category->id == $noticia->category_id)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @endforeach
                        @else
                            @foreach(\DB::table('categories')->get() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Resumen</h4>
                @if($noticia != '')
                <textarea class="form-control" name="excerpt">{{$noticia->excerpt}}</textarea>
                @else
                <textarea class="form-control" name="excerpt"></textarea>
                @endif
            </div>
        </div>
        <div class="panel">
            <div class="panel-content panel-ess">
                <h4>Cuerpo</h4>
                @if($noticia != '')
                <textarea class="form-control" id="summernote" name="body" style="min-height: 150px;">{{$noticia->body}}</textarea>
                @else
                <textarea class="form-control" id="summernote" name="body" style="min-height: 150px;"></textarea>
                @endif
            </div>
        </div>
    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 agregar'>
        <div class="panel">
            <div class="panel-content panel-ess">
                <div class="imagen-box">
                    <div class="imagen-titulo">IMAGEN</div>
                    <div class="imagen-cuerpo">
                        @if($noticia != '')
                        @if($noticia->image != '')
                        <img src="{{asset('storage/'.$noticia->image)}}" class="img-responsive" style="max-height: 200px;">
                        @endif
                        @endif
                        <br>
                        <a class="btn btn-label"><label for="image">Seleccionar archivo</label></a>
                        <input type="file" name="image" id="image" class="input-file">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-accion">
            @if($noticia != '')
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
        @if($noticia != '')
        <a href="{{route('admin.seccion.noticias.add')}}?id={{$noticia->id}}&accion=eliminar" title="Eliminar" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
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
            height: 450,
            minHeight: null,
            maxHeight: null,
            focus: false 
        });
    });
</script>
@stop