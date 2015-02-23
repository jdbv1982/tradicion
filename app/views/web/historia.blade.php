@extends('web/menu')

@section('sub-content')
	<div class="Historia">
		<div class="menu-historia-phone">
			<div class="opcion">
				<div valor="2" class="menu-arbol btn-gen-phone">{{ HTML::image('/images/general/generaciones/marco1ppal.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
				<div valor="3" class="menu-arbol btn-gen-phone">{{ HTML::image('/images/general/generaciones/marco2ppal.jpg', null, ["width"=>"59px", "height"=>"62px"]) }}</div>
				<div valor="4" class="menu-arbol btn-gen-phone"> {{ HTML::image('/images/general/generaciones/marco3ppal.jpg', null, ["width"=>"47px", "height"=>"61px"]) }}</div>
				<div valor="5" class="menu-arbol btn-gen-phone">{{ HTML::image('/images/general/generaciones/marco4ppal.jpg', null, ["width"=>"54px", "height"=>"62px"]) }}</div>
				<div valor="6" class="menu-arbol btn-gen-phone">{{ HTML::image('/images/general/generaciones/marco5ppal.jpg', null, ["width"=>"44px", "height"=>"62px"]) }}</div>
			</div>
		</div>
		<div class="Historia-arbol Historia-row">
			{{ HTML::image('/images/general/arbolhis.jpg', null,["width"=>"200px", "height"=>"500px"] ) }}
			<div class="opcion">
				<div valor="6" class="menu-arbol menu-arbol-historia"></div>
				<div valor="5" class="menu-arbol menu-arbol-historia"></div>
				<div valor="4" class="menu-arbol menu-arbol-historia"></div>
				<div valor="3" class="menu-arbol menu-arbol-historia"></div>
				<div valor="2" class="menu-arbol menu-arbol-historia"></div>
			</div>
		</div>
		<div class="Historia-texto Historia-row">
			<div class="Historia-titulo" id="titulo"><div class="loader" id="imgloader"></div>LA TRADICIÓN</div>
			<div style="display:none" class="quintag" id="quintag">
				{{ HTML::image('/images/general/generaciones/marco5ppal.jpg', null, ["width"=>"25%", "height"=>"152px"]) }}
			</div>
			<div class="Historia-contenido" id="Historia-contenido">
			</div>
			<div class="Historia-img" style="display:none">
				{{ HTML::image('/images/general/historia/1g.png', null, ["width"=>"100%", "height"=>"152px"]) }}
			</div>
		</div>


	</div>
@stop
