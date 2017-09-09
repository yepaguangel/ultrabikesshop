@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Página no encontrada
@stop

@section('head')
@stop

@section('header')@stop

@section('content')

    <div class="row">
        <div class="parallax-container" style="position: absolute;left: 0;top:0;width: 100%;height: 100%;min-height: 100vh;z-index: 0">
            <div class="parallax">
                <img src="img/oops-not-found.jpg" alt="ops pagina no encontrada - ultrabikes">
            </div>
        </div>
        <div class="row" style="position: relative">
            <div class="col s12 m6 white valign-wrapper" style="height: 100vh;min-height: 400px;overflow-y: auto;z-index: 10">
                <div class="valign" style="width: 100%">
                    <div class="col s12 m12 l7 offset-l5">
                        <img src="img/ultra-bikes-shop-logo-footer.png" alt="" style="width: 300px;position: absolute;top: 20px;left:0;right: 0;margin:auto">
                        <blockquote>
                            <h1><b>O</b>ops!</h1>
                        </blockquote>
                        <h2 class="flow-text">Lo sentimos estaremos temporalmente offline</h2>
                        <p>
                            Para mejorar nuestro servicio hemos decidido actualizar nuestro portal muy pronto estaremos de regreso
                        </p>
                        <h4 class="flow-text"><b>Contáctenos </b></h4>
                        <div class="divider"></div>
                        <h5 class="flow-text">Jorge Corona Parra</h5>
                        <h4 class="flow-text">Cel: 318-523-9686</h4>
                        <h6>ultrabikes2.0@gmail.com</h6>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@stop

@section('footer')
@stop