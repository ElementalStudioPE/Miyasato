@extends('admin.layouts.master')

@section('content')
<div class='col-xs-12 col-sm-12 col-md-12 lista'>
    <div class="">
        <h2 class="titulo-seccion">Noticias&nbsp;&nbsp;&nbsp;<a href="{{route('admin.seccion.noticias.add')}}" class="btn btn-primary regresar-agregar">+&nbsp;Agregar nuevo</a></h2>
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
                <th style="width: 142px;">Título</th>
                <th style="width: 142px;">Categoría</th>
                <th style="width: 90px;">Imagen</th>
                <th style="width: 300px;">Resumen</th>
                <th style="width: 150px;">Fecha</th>
                <th style="width: 69px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( App\Noticia::orderBy('created_at','asc')->get() as $noticia )
            <tr role="row">
                <td>
                    @if($noticia->status == 'NOACTIVO')
                    <div class="readmore" style="max-height: none;color: red;">NO ACTIVO</div>
                    @else
                    <div class="readmore" style="max-height: none;">ACTIVO</div>
                    @endif
                </td>
                <td>
                    <div class="readmore" style="max-height: none;">{{ $noticia->title }}</div>
                </td>
                <?php
                    $categoriaNombre = 'Sin Categoría';
                    $categoria = \DB::table('categories')->where('id',$noticia->category_id)->first();
                    if ($categoria) {
                        $categoriaNombre = $categoria->name;
                    }
                ?>
                <td>
                    <div class="readmore" style="max-height: none;">{{ $categoriaNombre }}</div>
                </td>
                <td>
                    @if($noticia->image != '')
                    <img src="{{asset('storage/'.$noticia->image)}}" class="img-responsive" style="width:100px">
                    @endif
                </td>
                <td>
                    <div class="readmore" style="max-height: none;">{{ $noticia->excerpt }}</div>
                </td>
                <td>
                    <div class="readmore" style="max-height: none;">{{ Jenssegers\Date\Date::parse($noticia->created_at)->format('Y-m-d') }}</div>
                </td>
                <td class="no-sort no-click" id="bread-actions" style="width: 160px;padding-top: 20px;">
                    <a href="{{route('admin.seccion.noticias.add')}}?id={{$noticia->id}}&accion=editar" title="Editar" class="btn btn-sm btn-primary pull-right edit">
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