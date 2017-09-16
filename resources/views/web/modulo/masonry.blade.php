<style type="text/css">
	#grid-container .cbp-l-caption-desc span,#grid-container .cbp-l-caption-desc p{
		color: #fff !important;
	}
</style>
<div id="grid-container" class="cbp-l-grid-gallery">
	@foreach(App\Portafolio::where('estado',1)->orderBy('orden','asc')->get() as $portafolio)
	<a href="#" class="cbp-item cbp-caption" data-toggle="modal" data-target="#myModal{{$portafolio->id}}">
			<div class=" illustration web-design">	
				<div class="cbp-caption-defaultWrap">
					<img src="{{asset('storage/'.$portafolio->imagen_preview)}}" alt="">
					<p class="masonry-titulo-fle">{!! $portafolio->titulo !!} <span style="float:right;"><i class="fa fa-long-arrow-right flecha-derecha-masonry" aria-hidden="true"></i></span></p>
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignLeft">
						<div class="cbp-l-caption-body">
							<div class="cbp-l-caption-title titulo-hover-xa">{!! nl2br($portafolio->titulo) !!}</div>
							<div class="cbp-l-caption-desc titulo-hover-le">{!! nl2br($portafolio->descripcion_preview) !!}</div>
						</div>
					</div>
				</div>
			
		</div>
		</a>
		@endforeach
		
</div>


@section('modal')

@foreach(App\Portafolio::where('estado',1)->orderBy('orden','asc')->get() as $portafolio)
<div class="modal fade fade bs-example-modal-lg" id="myModal{{$portafolio->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-5">
          <img src="{{asset('storage/'.$portafolio->imagen_modal)}}" alt="" style="width: 100%;">
        </div>
        <div class="col-md-7" style="padding: 70px 70px 20px 52px;">
        <button type="button" class="close close-css" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <p class="popup-titulo">{!! $portafolio->titulo !!}</p>
          <p class="popup-contenido">{!! nl2br($portafolio->descripcion_modal) !!}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

@stop