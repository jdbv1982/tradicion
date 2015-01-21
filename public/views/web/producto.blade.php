@extends('web/menu')

@section('sub-content')
    <div class="contenido">
    	<div class="Producto">
    		<div class="row imagen-producto"  id="img-producto">
	    		{{ HTML::image($producto->urlimage, null, ["width"=>"400px", "height"=>"550px"]) }}
	    		<div class="Producto-img-pie" id="img-pie">{{ $producto->pieimagen }}</div>
	    	</div>
	    	<div class="row contenido-producto">
	    	<div class="titulo" id="producto-titulo">{{ $producto->titulo}}</div>
	    	<div class="Producto-descripcion" id="producto-descripcion">
	    		{{ $producto->descripcion }}
	    	</div>
	    	<div class="subtitulo" id="p-subtitulo">
	    		{{$producto->subtitulo}}
	    	</div>
	    	<div class="text-justify" id="p-subdescripcion">
	    		{{ $producto->subdescripcion }}
	    	</div>
	    	</div>
    	</div>

    	<div class="Acta">
    		<div class="Acta-titulo" id="a-titulo">{{ $producto->tituloacta }}</div>
    		<div class="Acta-row" id="aleft">
    			{{ $producto->contenidoacta1 }}
    		</div>
    		<div class="Acta-row" id="aright">
    			{{ $producto->contenidoacta2 }}
    		</div>
    	</div>
    </div>
@stop
