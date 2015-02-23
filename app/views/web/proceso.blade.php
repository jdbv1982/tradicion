@extends('web/menu')

@section('sub-content')
<div class="contenido">
	<div class="Proceso">
		<div class="Proceso-modal">
			@include('web/animacion')

			<div class="menu-proceso-phone">
				<div valor="1" class="Proceso-item-menu">{{ HTML::image('images/general/proceso/proceso1.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
				<div valor="2" class="Proceso-item-menu">{{ HTML::image('images/general/proceso/proceso2.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
				<div valor="3" class="Proceso-item-menu">{{ HTML::image('images/general/proceso/proceso3.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
				<div valor="4" class="Proceso-item-menu">{{ HTML::image('images/general/proceso/proceso4.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
				<div valor="5" class="Proceso-item-menu">{{ HTML::image('images/general/proceso/proceso5.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
				<div valor="6" class="Proceso-item-menu">{{ HTML::image('images/general/proceso/proceso6.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
				<div valor="7" class="Proceso-item-menu">{{ HTML::image('images/general/proceso/proceso7.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
				<div valor="8" class="Proceso-item-menu">{{ HTML::image('images/general/proceso/proceso8.jpg', null, ["width"=>"40px", "height"=>"62px"]) }}</div>
			</div>


			<div class="Proceso-detalle">
				<div class="detalle-row-left" id="proceso-img">
					{{ HTML::image('images/general/proceso/proceso1.jpg') }}
				</div>
				<div class="detalle-row-right" id="proceso-modal-contenido">
					<div class="titulo" id="proceso-modal-titulo">LA MATERIA PRIMA: LOS MAGUEYES</div>
					<div class="text-justify" id="proceso-modal-texto">
						<p>
							Existen más de 150 especies de maguey exclusivas del territorio mexicano, de las cuales, más de 30 pueden utilizarse para hacer mezcal, siendo Oaxaca el estado con la mayor concentración y variedad de las mismas. En Oaxaca se suele intercalar los cultivos de maíz, calabazas y frijoles y magueyes; ya que así la tierra se mantiene mineralizada y en estado óptimo para la siembra.
						</p>

						<p>
							Para la elaboración de los mezcales Tradición Chagoya, se utiliza exclusivamente el maguey Espadín, el cual tarda diez años en madurar, y es una de las variedades más finas y nobles de esta planta, características que lo han convertido en el maguey emblemático de Oaxaca.
						</p>
					</div>
					<div class="Proceso-modal-img">
						{{ HTML::image('images/general/detallech.png') }}
					</div>
				</div>
			</div>
		</div>

		<div class="Proceso-contenido">
		<div class="Proceso-row row-left">
			<p class="Proceso-titulo">{{ trans('proceso.titulo') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-titulo')}}</p>
			<p class="Proceso-titulo">{{ trans('proceso.botella') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-botella')}}</p>
		</div>
		<div class="Proceso-row row-right">
			<p class="Proceso-titulo">{{ trans('proceso.titulo1') }}</p>

			<p class="Proceso-subtitulo">{{ trans('proceso.titulo1_1') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-titulo1_1') }}</p>

			<p class="Proceso-subtitulo">{{ trans('proceso.titulo1_2') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-titulo1_2') }}</p>

			<p class="Proceso-subtitulo">{{ trans('proceso.titulo1_3') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-titulo1_3') }}</p>

			<p class="Proceso-subtitulo">{{ trans('proceso.titulo1_4') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-titulo1_4') }}</p>

			<p class="Proceso-subtitulo">{{ trans('proceso.titulo1_5') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-titulo1_5') }}</p>

			<p class="Proceso-subtitulo">{{ trans('proceso.titulo1_6') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-titulo1_6') }}</p>

			<p class="Proceso-subtitulo">{{ trans('proceso.titulo1_7') }}</p>
			<p class="text-justify">{{ trans('proceso.descripcion-titulo1_7') }}</p><br>

		</div>
		</div>
	</div>
</div>
@stop
