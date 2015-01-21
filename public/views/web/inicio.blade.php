@extends('web/menu')

@section('sub-content')
<div class="contenido">
    <div class="Inicio-row">
        <div class="Inicio-row-titulo text-center">
            AUTÉNTICO MEZCAL CON TRADICIÓN DESDE 1893
        </div>
            <div class="Inicio-row-generacion text-center">
                <p>JORGE CHAGOYA SÁNCHEZ <br> 1875 - 1915 </p>
                {{ HTML::image('/images/general/generaciones/marco1ppal.jpg', null, ["width"=>"100px", "height"=>"100px"]) }}
            </div>
            <div class="Inicio-row-generacion text-center">
                <p>ERNESTO CHAGOYA LLAGUNO <br>1900 - 1975 </p>
                {{ HTML::image('/images/general/generaciones/marco2ppal.jpg', null, ["width"=>"100px", "height"=>"100px"]) }}
            </div>
            <div class="Inicio-row-generacion text-center">
                <p>PORFIRIO CHAGOYA HERNÁNDEZ <br>1924 - 1993 </p>
                {{ HTML::image('/images/general/generaciones/marco3ppal.jpg', null, ["width"=>"100px", "height"=>"100px"]) }}
            </div>
            <div class="Inicio-row-generacion text-center">
                <p>PORFIRIO RAYMUNDO CHAGOYA MÉNDEZ <br>1948 - Presente</p>
                {{ HTML::image('/images/general/generaciones/marco4ppal.jpg', null, ["width"=>"100px", "height"=>"100px"]) }}
            </div>
            <div class="Inicio-row-generacion text-center">
               <p>EXPENDIO TRADICION <br>2013 </p>
                {{ HTML::image('/images/general/generaciones/marco5ppal.jpg', null, ["width"=>"100px", "height"=>"100px"]) }}
            </div>
    </div>
    <div class="Inicio-row text-center">
        {{ HTML::image('/images/general/generaciones/imagenppal.jpg', null, ["width"=>"400px", "height"=>"375px"] )}}
    </div>
    <div class="Inicio-row text-center">
            <div class="img-head">
                {{ HTML::image('/images/general/ppaldetalleup.jpg', null, ["width"=>"484px", "height"=>"64px"] )}}
            </div>
                <div class="descripcion text-justify">
                    {{ trans('contenido.inicio-descripcion') }}
                </div>
                <div class="img-footer">
                {{ HTML::image('/images/general/ppaldetalledown.jpg', null, ["width"=>"484px", "height"=>"64px"] )}}
                </div>
    </div>
    <div class="Inicio-row text-center">
                {{ HTML::image('/images/general/productos/licor-cafe-huatulco.jpg', null, ["width"=>"50px", "height"=>"300px"] )}}
    </div>


</div>


@stop
