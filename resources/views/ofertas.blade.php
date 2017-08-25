@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Ofertas
@stop

@section('head')
    <link rel="stylesheet" href="css/filter-style.css"> 
    <link rel="stylesheet" href="css/bannerofertas.css">
    <link rel="stylesheet" href="css/product-style.css">
    <link rel="stylesheet" href="css/modal-style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
@stop

@section('content')
<div class="bannerofertas row">
    <div class="parallax-container">
        <div class="parallax">
            <img src="img/ofertas-ultrabikes-banner.jpg" alt="ultrabikes - ofertas">
        </div>
    </div>
    <div class="container valign-wrapper">
        <div class="valign">
            <div class="col s12 m6 center white-text valign-wrapper" style="height: 270px">
                <div class="valign">
                    <h1 class="flow-text">Ofertas Ultra Bikes</h1>
                    <h2>Llanta MTB Schwalbe HANS DAMPF 29*2.35 Evolution</h2>
                    <div class="divider"></div>
                    <a href="detalle-producto.html" class="btn-large waves-effect amber darken-4">Comprar</a>
                </div>
            </div>
            <div class="col s12 m6 center">
                <div class="cubeproduct center">
                    <div class="contimg center">
                        <img src="img/schwalbe-ans-dampf.jpg" alt="oferta 1" class="responsive-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row grey darken-4" style="padding: 20px 0 10px">
    <div id="shopfilter" class="carousel-fixed-item center animated fadeInUp">
        <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
        <div id="filternav" class="row menubanner scrollspy">
            <div class="container">
                <div class="card-panel left-align" style="position: relative;overflow:hidden;">
                    <div class="row filtermenu">
                        <div class="col s8 m9 contmenubanner" style="display: table-cell;overflow-x: auto;transition: all linear .2s;padding: 0 0">
                            <a class="waves-effect white black-text waves-orange btn" style="display: table-cell;">MTB</a>
                            <a class="waves-effect white black-text waves-orange btn" style="display: table-cell;">Ruta</a>
                            <a class="waves-effect white black-text waves-orange btn" style="display: table-cell;">Híbrida</a>
                            <a class="waves-effect white black-text waves-orange btn" style="display: table-cell;">DOWNHILL</a>
                            <a class="waves-effect white black-text waves-orange btn" style="display: table-cell;">BMX</a>
                            <a class="waves-effect white black-text waves-orange btn" style="display: table-cell;">ACCESORIOS</a>
                        </div>
                        <div class="col s4 m3 right-align btn-large-search" style="padding: 0 0">
                            <a href="#filternav" class="waves-effect waves-orange btn white black-text btn-search" style="text-align: right" type="submit" name="action">Buscar
                                    <i class="material-icons right flow-text">search</i>
                                </a>
                        </div>
                    </div>
                    <div class="row barsearch hide">
                        <div class="input-cont col s12 m12" style="float: left;transition: all linear .2s">
                            <div class="input-field col s12" style="padding: 0 0">
                                <i class="material-icons prefix" style="left: 10px">search</i>
                                <input class="autocomplete" id="autocomplete-input" type="text" style="margin:-8px 0 8px 0;padding: 0 40px;font-size: 1.5em;border-bottom: 0px;box-shadow: none">
                                <label for="autocomplete-input" class="hide-on-med-and-down" style="top: 0.4rem">Busqueda personalizada ejm: luces, llantas, medidores</label>
                                <label for="autocomplete-input" class="hide-on-large-only" style="top: 0.4rem">Ejm: luces, llantas, medidores</label>
                            </div>
                        </div>
                        <a class="btn-floating btn-flat search-close" style="position: absolute;top:10px;height: 40px;line-height: 40px;right: 20px"><i class="material-icons black-text">close</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="filterproducts" class="row filters scrollspy">
            <div class="container">
                <div class="col s12 m3 l3" style="padding: 0 0">
                    <a class="btnfilter waves-effect waves-light btn-large left btn-flat" style="padding-left: 8px;padding-right: 8px"><i class="material-icons left">filter_list</i>FILTRAR POR:</a>
                </div>
                <div class="col s12 m3 white-text">
                    <select>
                        <option value="" disabled selected>Marca</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <!-- <label class="left-align">Marca</label> -->
                </div>
                <div class="input-field col s12 m3 white-text" style="margin-top: 0">
                    <input placeholder="# de Referencia" id="referencia" type="text" class="validate">
                    <!-- <label for="first_name">First Name</label> -->
                    <!-- <label class="left-align">Referencia</label> -->
                </div>
                <div class="col s12 m3 white-text">
                    <select>
                        <option value="" disabled selected>Tamaño</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <!-- <label class="left-align">Tamaño</label> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row white" style="margin-bottom: 0px !important;padding:20px 0 80px">
    <div class="container">
        <div class="wall">
            <div class="card article">
                <div class="card-image" style="position: relative;">
                    <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                    <span class="new badge" data-badge-caption="" style="position: absolute;right: 9px;top: 9px;z-index: 10">29*2.0</span>
                    <img src="img/saguaro-300x300.png">
                    <span class="card-title">Llantas Vitoria X2</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Llantas Vitoria Saguaro X2, Llantas Downhill domina los terrenos mas extremos</p>
                    <br>
                    <h5>$180.000</h5>
                </div>
                <div class="card-action">
                    <a href="detalle-producto.html" class="waves-effect waves-light btn orange darken-3 white-text">Ver Detalles</a>
                    <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
                </div>
            </div>
            <div class="card article" style="width: 100% !important;width: 500px">
                <div class="card-image">
                    <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                    <span class="new badge" data-badge-caption="" style="position: absolute;right: 9px;top: 9px;z-index: 10">29*2.0</span>
                    <img src="img/rin-schwalbe-300x300.jpg">
                    <span class="card-title">Llantas Vitoria X2</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Llantas Vitoria Saguaro X2, Llantas Downhill domina los terrenos mas extremos</p>
                    <br>
                    <h5>$180.000</h5>
                </div>
                <div class="card-action">
                    <a href="detalle-producto.html" class="waves-effect waves-light btn orange darken-3 white-text">Ver Detalles</a>
                    <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
                </div>
            </div>
            <div class="card article">
                <div class="card-image">
                    <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                    <span class="new badge" data-badge-caption="" style="position: absolute;right: 9px;top: 9px;z-index: 10">250 PSI</span>
                    <img src="img/tmmb-2-300x300.jpg">
                    <span class="card-title">Llantas Vitoria X2</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Llantas Vitoria Saguaro X2, Llantas Downhill domina los terrenos mas extremos</p>
                    <br>
                    <h5>$180.000</h5>
                </div>
                <div class="card-action">
                    <a href="detalle-producto.html" class="waves-effect waves-light btn orange darken-3 white-text">Ver Detalles</a>
                    <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
                </div>
            </div>
            <div class="card article">
                <div class="card-image">
                    <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                    <img src="img/luz-infla-300x300.jpg">
                    <span class="card-title">Llantas Vitoria X2</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Llantas Vitoria Saguaro X2, Llantas Downhill domina los terrenos mas extremos</p>
                    <br>
                    <h5>$180.000</h5>
                </div>
                <div class="card-action">
                    <a href="detalle-producto.html" class="waves-effect waves-light btn orange darken-3 white-text">Ver Detalles</a>
                    <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
                </div>
            </div>
            <div class="card article">
                <div class="card-image">
                    <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                    <img src="img/Combo-luz-tms067-300x300.jpg">
                    <span class="card-title">Llantas Vitoria X2</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Llantas Vitoria Saguaro X2, Llantas Downhill domina los terrenos mas extremos</p>
                    <br>
                    <h5>$180.000</h5>
                </div>
                <div class="card-action">
                    <a href="detalle-producto.html" class="waves-effect waves-light btn orange darken-3 white-text">Ver Detalles</a>
                    <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
                </div>
            </div>
            <div class="card article">
                <div class="card-image">
                    <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                    <span class="new badge" data-badge-caption="" style="position: absolute;right: 9px;top: 9px;z-index: 10">29*2.0</span>
                    <img src="img/saguaro-300x300.png">
                    <span class="card-title">Llantas Vitoria X2</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Llantas Vitoria Saguaro X2, Llantas Downhill domina los terrenos mas extremos</p>
                    <br>
                    <h5>$180.000</h5>
                </div>
                <div class="card-action">
                    <a href="detalle-producto.html" class="waves-effect waves-light btn orange darken-3 white-text">Ver Detalles</a>
                    <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
                </div>
            </div>
            <div class="card article">
                <div class="card-image">
                    <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                    <span class="new badge" data-badge-caption="" style="position: absolute;right: 9px;top: 9px;z-index: 10">29*2.0</span>
                    <img src="img/saguaro-300x300.png">
                    <span class="card-title">Llantas Vitoria X2</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Llantas Vitoria Saguaro X2, Llantas Downhill domina los terrenos mas extremos</p>
                    <br>
                    <h5>$180.000</h5>
                </div>
                <div class="card-action">
                    <a href="detalle-producto.html" class="waves-effect waves-light btn orange darken-3 white-text">Ver Detalles</a>
                    <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
                </div>
            </div>
            <div class="card article">
                <div class="card-image">
                    <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                    <span class="new badge" data-badge-caption="" style="position: absolute;right: 9px;top: 9px;z-index: 10">29*2.0</span>
                    <img src="img/saguaro-300x300.png">
                    <span class="card-title">Llantas Vitoria X2</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Llantas Vitoria Saguaro X2, Llantas Downhill domina los terrenos mas extremos</p>
                    <br>
                    <h5>$180.000</h5>
                </div>
                <div class="card-action">
                    <a href="detalle-producto.html" class="waves-effect waves-light btn orange darken-3 white-text">Ver Detalles</a>
                    <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detalle del producto Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer" style="width: 70%">
    <div class="modal-content" style="padding: 10px">
        <div class="row">
            <div class="col s12 m4" style="padding: 0 0;height: 100%">
                <div id="carousel02" class="owl-carousel" data-slider-id="1">
                    <div><img src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></div>
                    <div><img src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></div>
                    <div><img src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></div>
                    <div><img src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></div>
                    <div><img src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></div>
                    <div><img src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></div>
                    <div><img src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></div>
                    <div><img src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></div>
                </div>
                <div class="col s12 loading" style="padding: 20px">
                    <div class="col s12 center">
                        <div class="preloader-wrapper small active">
                            <div class="spinner-layer spinner-blue">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="spinner-layer spinner-red">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="spinner-layer spinner-yellow">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <div class="spinner-layer spinner-green">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 carruselitem hide animated" style="padding: 0 0">
                    <div class="carousel owl-thumbs" data-slider-id="1" style="height: 80px">
                        <button class="owl-thumb-item carousel-item" style="width: 80px;height: 80px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></button>
                        <button class="owl-thumb-item carousel-item" style="width: 80px;height: 80px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></button>
                        <button class="owl-thumb-item carousel-item" style="width: 80px;height: 80px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></button>
                        <button class="owl-thumb-item carousel-item" style="width: 80px;height: 80px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></button>
                        <button class="owl-thumb-item carousel-item" style="width: 80px;height: 80px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></button>
                        <button class="owl-thumb-item carousel-item" style="width: 80px;height: 80px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></button>
                        <button class="owl-thumb-item carousel-item" style="width: 80px;height: 80px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></button>
                        <button class="owl-thumb-item carousel-item" style="width: 80px;height: 80px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></button>
                    </div>
                </div>
            </div>
            <div class="col s12 m8" style="padding: 0 0;min-height:58vh;overflow-y:auto;border-left: 1px solid #ccc">
                <div class="row">
                    <div class="col s12" style="padding-bottom: 10px">
                        <h3>Llantas Vitoria X2</h3>
                        <h6 class="flow-text">$180.000 Cop</h6>
                        <div class="divider"></div>
                    </div>
                    <div class="col s4 m2 left-align badgesfilter">
                        <span class="new badge grey dark-5" data-badge-caption="">29*20</span>
                        <span class="new badge grey dark-5" data-badge-caption="">MTB</span>
                        <span class="new badge grey dark-5" data-badge-caption="">RIGIDA</span>
                        <span class="new badge grey dark-5" data-badge-caption="">VITORIA</span>
                        <span class="new badge grey dark-5" data-badge-caption="">Llantas</span>
                        <span class="new badge grey dark-5" data-badge-caption="">Corasa</span>
                    </div>
                    <div class="col s12 m10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <blockquote cite="http://example.com/facts">
                            <p> <b>NOTA:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                            </p>
                        </blockquote>
                    </div>
                    <form class="product-option row">
                        <div class="col s4 m4 black-text">
                            <select>
                                <option value="" disabled selected>Tamaño</option>
                                <option value="1">29*20</option>
                                <option value="2">29*20</option>
                                <option value="3">29*20</option>
                            </select>
                            <!-- <label class="left-align">Referencia</label> -->
                        </div>
                        <div class="col s6 m6">
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="1" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ver Más</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Comprar Ya</a>
    </div>
</div>
<!-- CIERRA MODAL Y DETALLES DEL PRODUCTO -->

@stop

@section('footer')
    @parent
@stop