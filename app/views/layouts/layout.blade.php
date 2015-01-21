<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Un domingo de plaza en la ciudad de Tlacolula de Matamoros por el año 1880, la que fuera esposa de Don Rómulo Chagoya encontró a un niño huérfano llorando en el atrio de la iglesia. Sin lograr conocer su procedencia decidió adoptarlo y bautizarlo con el nombre de ‘Jorge Chagoya Sánchez ’.">
    <Meta Name="Keywords" Content="mezcal, mezcal oaxaca, tradicion chagoya, mezcales, el mejor mezcal">
    <link rel="icon" href="../../favicon.ico">
    <title>Tradicion Chagoya</title>
    @include('layouts/css')
    @yield('css')
</head>

<body>

    <div class="full-content">
    	@include('layouts/header')
            <div class="content">
        	       @yield('content')
            </div>
    	@include('layouts/footer')
    </div>

    @include('layouts.js')
    @yield('js')
</body>
</html>
