@extends('web/menu')

@section('sub-content')
<div class="contenido">
	<div class="Producto">
		<div class="row imagen-producto"  id="img-producto">
			<div class="Producto-titulo" id="producto-titulo">{{ $producto->titulo}}</div>
			{{ HTML::image($producto->urlimage, null, ["width"=>"400px", "height"=>"550px"]) }}
			<div class="Producto-img-pie text-center" id="img-pie">{{ $producto->pieimagen }}</div>
		</div>
		<div class="row contenido-producto">
			<div class="text-justify" id="producto-descripcion">
				{{ $producto->descripcion }}
			</div>
			<div class="subtitulo" id="p-subtitulo">
				{{$producto->subtitulo}}
			</div>
			<div class="text-justify" id="p-subdescripcion">
				{{ $producto->subdescripcion }}
			</div>
			@if($producto->tituloacta |= "")
			<div class="Acta">
				<div class="cerrado text-left" id="a-titulo">{{ $producto->tituloacta }}</div>
				<div id="aleft">
					{{ $producto->contenidoacta1 }}
				</div>
				<div id="aright">
					{{ $producto->contenidoacta2 }}
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@stop
