@extends('layouts/layout')

@section('content')
<div class="Edad text-center">
	<div class="Edad-pregunta">{{ trans('edad.pregunta') }}</div>
	<div class="Edad-respuesta borde-right"><a name="edad" href="{{route('SI')}}">{{ trans('edad.si') }}</a></div>
	<div class="Edad-respuesta"><a href="{{route('salir')}}">{{ trans('edad.no') }}</a></div>
	<div>
		{{ HTML::image("/images/general/detallech.png", null, ["width"=>"40%"]) }}
	</div>
</div>

@stop


