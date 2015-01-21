@extends('layouts/layout')

@section('content')
<div class="despedida text-center">
	<div class="despedida-mensaje">{{ trans('salir.despedida') }}</div>
	<div class="despedida-imagen">
		{{ HTML::image("/images/general/detallech.png", null, ["width"=>"20%"]) }}
	</div>
</div>

@stop
