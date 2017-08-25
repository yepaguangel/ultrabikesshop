@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Conocenos
@stop

@section('head')
    <link rel="stylesheet" href="css/conocenos.css">
@stop

@section('content')
<div class="row grey darken-4" style="position: relative;">
    <div class="valign-wrapper center bgnosotros">
        <div class="parallax-container">
            <div class="parallax">
                <img src="img/bicilluviasalas.jpg" alt="banner ultra bikes shop">
            </div>
        </div>
        <div class="valign">
            <div class="container white-text">
                <h2>Nosotros</h2>
                <h1 style="font-size: 1.8rem">Conóce más de Ultra Bikes Shop</h1>
                <h3 class="flow-text">Partes y Accesorios Originales</h3>
            </div>
        </div>
        <div class="divider"></div>
    </div>
    <div class="row white space">
        <div class="container">
            <p class="flow-text">
                Somos una empresa que comercializa repuestos y accesorios para el mundo del ciclismo por medio de una tienda virtual, la cual tiene contacto con proveedores directos, con el fin de brindar precios muy competitivos, de las marcas más importantes y de mejor calidad del mercado, tales como Maxxis,Topeak, Schwalbe,Vittoria, Garneau, Lezyne, Exustar, Yakima,accesorios Giant y Liv …Entre muchas más.
            </p>
        </div>
    </div>
    <div class="row space" style="position: relative;z-index: 5">
        <div class="parallax-container" style="width: 100% !important;min-height: 400px !important;position: absolute !important;left:0 !important;top: 0 !important">
            <div class="parallax">
                <img src="img/ultra-bikes-shop-banner.jpg" alt="conoce mas de ultra bikes shop">
            </div>
        </div>
        <div class="col s12 m6 space white valign-wrapper" style="min-height: 400px;">
            <div class="valign" style="width: 100%">
                <div class="col s12 m12 l9 offset-l3" style="padding-right: 25px;box-sizing: border-box;">
                    <h4>Nosotros:</h4>
                    <p>
                        Somos una empresa que comercializa repuestos y accesorios para el mundo del ciclismo por medio de una tienda virtual, la cual tiene contacto con proveedores directos, con el fin de brindar precios muy competitivos, de las marcas más importantes y de mejor calidad del mercado, tales como Maxxis,Topeak, Schwalbe,Vittoria, Garneau, Lezyne, Exustar, Yakima,accesorios Giant y Liv …Entre muchas más. Les brindamos a nuestros clientes asesoría para satisfacer sus necesidades y modalidades de ciclismo, con el fin que realmente adquieran los artículos más adecuados, según sus requerimientos para que queden siempre satisfechos, brindado opciones entre calidad, marcas, características de los artículos y experiencia propia del uso y pruebas de los mismos.
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6"></div>
    </div>
    <div class="row space" style="position: relative;z-index: 5">
        <div class="parallax-container" style="width: 100% !important;min-height: 400px !important;position: absolute !important;left:0 !important;top: 0 !important">
            <div class="parallax">
                <img src="img/bg-ultrabikes.jpg" alt="conoce mas de ultra bikes shop">
            </div>
        </div>
        <div class="col s12 m6 space offset-m6 valign-wrapper" style="min-height: 400px;">
            <div class="valign white">
                <div class="col s12 m12 l9 left" style="padding-left: 25px;box-sizing: border-box;">
                    <blockquote>
                        <h4>Asesoría</h4>
                        <p>
                            Les brindamos a nuestros clientes asesoría para satisfacer sus necesidades y modalidades de ciclismo, con el fin que realmente adquieran los artículos más adecuados, según sus requerimientos para que queden siempre satisfechos, brindado opciones entre calidad, marcas, características de los artículos y experiencia propia del uso y pruebas de los mismos.
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col s12 m6"></div>
    </div>
    <div class="row space" style="position: relative;z-index: 5">
        <div class="parallax-container" style="width: 100% !important;min-height: 450px !important;position: absolute !important;left:0 !important;top: 0 !important">
            <div class="parallax">
                <img src="img/bikers.jpg" alt="conoce mas de ultra bikes shop">
            </div>
        </div>
        <div class="col s12 m6 space valign-wrapper" style="min-height: 450px;">
            <div class="valign white" style="width: 100% ">
                <div class="col s12 m12 l9 offset-l3" style="padding-right: 25px;box-sizing: border-box;">
                    <blockquote>
                        <h4>Compromiso</h4>
                        <p>
                            Nuestro compromiso es el servir con calidad, responsabilidad, honestidad, puntualidad, transparencia, eficiencia, efectividad y cumplimiento donde nuestros clientes pueden confiar plenamente en que recibirán su artículo de la marca original publicada, con las características ofrecidas, en el tiempo estimado, a un precio muy competitivo y que su dinero estará a salvo al momento de realizar el pago.
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col s12 m6"></div>
    </div>
</div>
@stop

@section('footer')
    @parent
@stop