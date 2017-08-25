@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Detalle producto
@stop

@section('head')
    <link rel="stylesheet" href="css/detail-style.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/carru-topventas.css">
	<link rel="stylesheet" href="css/input-value.css">
@stop

@section('content')
<div class="row white">
    <div class="row" style="padding-bottom: 10px">
        <nav class="white routernav">
            <div class="nav-wrapper container" style="overflow-x: auto;overflow-y: hidden;white-space: nowrap;">
                <!--<div class="col s12" style="overflow-x: auto">-->
                <a href="#!" class="grey-text breadcrumb" style="display: inline-block !important;">Inicio</a>
                <a href="#!" class="grey-text breadcrumb" style="display: inline-block !important;">Accesorios</a>
                <a href="#!" class="grey-text breadcrumb" style="display: inline-block !important;">Vittoria Saguaro Rígida</a>
                <!-- </div> -->
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="col s12 m6 contentcarru">
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
            <div class="col s12 carruselitem animated" style="padding: 0 0">
                <div class="carousel owl-thumbs" data-slider-id="1" style="height: 120px">
                    <button class="owl-thumb-item carousel-item" style="width: 120px;height: 120px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></button>
                    <button class="owl-thumb-item carousel-item" style="width: 120px;height: 120px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></button>
                    <button class="owl-thumb-item carousel-item" style="width: 120px;height: 120px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></button>
                    <button class="owl-thumb-item carousel-item" style="width: 120px;height: 120px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></button>
                    <button class="owl-thumb-item carousel-item" style="width: 120px;height: 120px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></button>
                    <button class="owl-thumb-item carousel-item" style="width: 120px;height: 120px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></button>
                    <button class="owl-thumb-item carousel-item" style="width: 120px;height: 120px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></button>
                    <button class="owl-thumb-item carousel-item" style="width: 120px;height: 120px;padding:0 0;overflow:hidden"><img class="responsive-img" src="img/tmmb-2-300x300.jpg" alt="Llanta vitoria saguaro"></button>
                </div>
            </div>
        </div>
        <div class="col s12 m6 space">
            <h1 class="flow-text">
                        INFLADOR HYBRIDROCKET HP SILVER CON CO2 16G TOPEAK
                    </h1>
            <br>
            <h2 class="flow-text"><b>$157</b>,000</h2>
            <div class="divider"></div>
            <div class="col s12" style="padding:0 0">
                <ul class="collapsible" data-collapsible="accordion" style="box-shadow: none;border:none">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">verified_user</i>Tecnología*</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
                <div class="col s12" style="padding: 0px 0 30px">
                    <div class="col s12">
                        <label>Colores Disponibles</label>
                    </div>
                    <div class="col s3 color-item">
                        <input name="group1" type="radio" id="red" />
                        <label class="truncate" for="red">Sylver</label>
                        <div class="card white waves-effect waves-teal btn" id="red" style="padding: 0 0">
                            <img src="img/tmmb-2-300x300.jpg" class="responsive-img" alt="">
                        </div>
                    </div>
                    <div class="col s3 color-item">
                        <input name="group1" type="radio" id="yellow" />
                        <label class="truncate" for="yellow">Amarillo</label>
                        <div class="card white waves-effect waves-teal">
                            <img src="img/bomba-amarilla.jpg" class="responsive-img" alt="">
                        </div>
                    </div>
                    <div class="col s3 color-item">
                        <input name="group1" type="radio" id="green" />
                        <label class="truncate" for="green">Verde</label>
                        <div class="card white waves-effect waves-teal">
                            <img src="img/bomba-verde.jpg" class="responsive-img" alt="">
                        </div>
                    </div>
                    <div class="col s3 color-item">
                        <input name="group1" type="radio" id="brown" />
                        <label class="truncate" for="brown">Marrón</label>
                        <div class="card white waves-effect waves-teal">
                            <img src="img/bomba-brown.jpg" class="responsive-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="input-field col s12">
                    <select multiple>
                        <option value="" selected>29*95</option>
                        <option value="1">25*90</option>
                        <option value="2">30*140</option>
                        <option value="3">22*60</option>
                    </select>
                    <label>Selecciona los Tamaños Necesarios</label>
                </div>
                <div class="input-field col s12 card waves-effect waves-ligth">
                    <div class="col s5 m3 l5" style="border-right: 1px solid #ccc;padding: 0 0">
                        <h4 class="flow-text grey-text darken-1 truncate" style="line-height: 43px">Cantidad:</h4>
                    </div>
                    <div class="col s7 m9 l7 center">
                        <div class="value-button flow-text left" style="margin:0 0;line-height: 20px" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                        <input class="white center" type="number" id="number" value="1" />
                        <div class="value-button flow-text right" style="margin:0 0;line-height: 20px" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                    </div>
                </div>
                <div class="col s12" style="padding:20px 0 0">
                    <div class="col s7 m12 l6">
                        <h5 class="flow-text" style="line-height: 40px">Total: $157,000</h5>
                        <h6 style="margin-top: -5px;padding-left: 5px">IVA Incluido</h6>
                    </div>
                    <div class="col s5 m12 l6">
                        <div style="display: inline-block;" class="right">
                            <span class="hide-on-small-only left" style="line-height: 55px;margin-right: 8px">Añadir al Carrito</span>
                            <a class="btn-floating btn-large waves-effect waves-light red left"><i class="material-icons">add_shopping_cart</i></a>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <p style="font-size: 12px">Costo del envio $18.300= a todo destino nacional</p>
                </div>
                <div class="col s12">
                    <div class="divider">
                    </div>
                </div>
                <div class="col s12 space">
                    <div class="col s12 m6">
                        <a href="#" class="btn btn-large waves-effect waves-ligth btn-flat" style="width: 100%;text-transform: capitalize;padding-left: 5px;padding-right: 5px">
                                    Contáctar Vendedor
                                </a>
                    </div>
                    <div class="col s12 m6">
                        <a href="#" class="btn btn-large waves-effect waves-ligth center" style="width: 100%">
                                    <i class="material-icons hide-on-med-only left" style="margin-right: 4px !important">shop</i> <span class="truncate">Comprar</span>
                                </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col s12 space white">
    <div class="divider">
    </div>
</div>
<div class="row white" style="min-height: 100vh">
    <div class="container">
        <div class="tabs-detail tabs-vertical row card-panel grey lighten-5 z-depth-1" style="padding-left: 0;margin:0 0">
            <div class="col s12 m12 l3" style="height: 100%;padding:0 0">
                <ul class="tabs" style="height: 100%;min-height: 100%;display: block">
                    <li class="tab" style="padding: 0 0"><a href="#test1" class="waves-effect waves-teal" style="padding: 0 8px"><i class="material-icons left" style="display: inline-block;margin-top: 10px">assignment</i> <span class="left">Descripción</span></a></li>
                    <li class="tab" style="padding: 0 0"><a href="#test2" class="waves-effect waves-teal" style="padding: 0 8px"><i class="material-icons left" style="display: inline-block;margin-top: 10px">speaker_notes</i> <span class="left">Anotaciones</span></a></li>
                    <li class="tab" style="padding: 0 0"><a class="active waves-effect waves-teal" style="padding: 0 8px" href="#test3"><i class="material-icons left" style="display: inline-block;margin-top: 10px">video_library</i> <span class="left">Multimedia</span></a></li>
                    <li class="tab" style="padding: 0 0"><a class="waves-effect waves-teal" style="padding: 0 8px" href="#test4"><i class="material-icons left" style="margin-top: 10px;width: 23px">start</i> <span class="left">Valoraciones (0)</span></a></li>
                </ul>
            </div>
            <div class="col s12 m12 l9">
                <div id="test1" class="col s12">
                    <div class="col s12 space">
                        <h3 class="flow-text">Descripción del Producto</h3>
                        <div class="divider" style="margin-top: 10px"></div>
                    </div>
                    <p>
                        Mini bomba de carretera, inflador de CO2, o ambos. ¡La decisión es tuya! La tecnología HybridRocket combina la fiabilidad de una mini bomba con la capacidad rápida de llenado de neumáticos de un inflador de CO2 en una sola unidad. Diseñado para el conductor de carretera de alto rendimiento, el HybridRocket HP le permite reunirse rápidamente al grupo después de fijar un plano. La mini-bomba de tamaño y el inflador de CO2 integrado le permite elegir entre el bombeo, inflado con CO2 o una combinación de ambos. Su barril de aluminio CNC está optimizado para alta presión e infla hasta 160 psi / 11 bar. Una manguera extensible con SmartHead ™ ThreadLock acepta las válvulas Presta y Schrader.
                    </p>
                </div>
                <div id="test2" class="col s12">
                    <div class="col s12 space">
                        <h3 class="flow-text">Anotaciones</h3>
                        <div class="divider" style="margin-top: 10px"></div>
                    </div>
                    <p>
                        El cabezal de la bomba ThreadLock debe utilizarse con precaución en los tubos internos Presta y los neumáticos tubulares, ya que el núcleo de la válvula puede ser removido inadvertidamente cuando se desenrosca el cabezal de la bomba. Para reducir la posibilidad de extracción accidental del núcleo de la válvula, asegúrese de que ThreadLock esté instalado y retirado correctamente y en línea con el vástago de la válvula.
                        <br>
                        <br> * Utilice sólo Topeak 16g CO2 cartuchos.
                        <br>
                        <br> Incluye: 1 cartucho de CO2 con rosca de 16 g, tapones antipolvo, soporte de montaje desmontable (THR-HP1S-C)
                        <br>
                        <br> Disponible en color Silver.
                        <br>
                        <br> Peso: 97 g.
                        <br>
                        <br> Medidas 19*3.9*2.35 cm.
                        <br>
                        <br> Capacidad:160 PSI.
                        <br>
                        <br> Material: Aluminio.
                    </p>
                </div>
                <div id="test3" class="col s12">
                    <div class="col s12 space">
                        <h3 class="flow-text">Multimedia</h3>
                        <div class="divider" style="margin-top: 10px"></div>
                    </div>
                    <iframe id="videoyt" width="100%" height="300px" src="//www.youtube.com/embed/PRB3qh9IIFI?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    </p>
                </div>
                <div id="test4" class="col s12">
                    <div class="col s12 space">
                        <h3 class="flow-text">Sé el primero en valorar nuestro producto</h3>
                        <div class="divider" style="margin-top: 10px"></div>
                    </div>
                    <div class="col s12">
                        <blockquote>
                            <p>Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con *</p>
                        </blockquote>
                    </div>
                    <div class="col s12">
                        <div class="col s12 m6 l4">
                            <span>Tu Puntuación:</span>
                            <div>
                                <div class="rating"></div>
                            </div>
                        </div>
                        <div class="input-field col s12 m6 l8">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">Nombres:</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Comentarios o sugerencia</label>
                        </div>
                        <a href="#" class="btn waves-effect waves-teal">Enviar</a>
                    </div>
                </div>
            </div>
            <!-- col -->
        </div>
        <div class="col s12 card" style="position: relative;z-index: 10">
            <div id="top-ventas" class="row scrollspy">
                <div class="col s12 space">
                    <blockquote>
                        <h4>Articulos Relacionados</h4>
                        <p>Tal vés estas buscando algo mas para añadir a tu lista</p>
                    </blockquote>
                </div>
                <div class="col s12" style="padding: 0 0">
                    <div id="carousel01" class="owl-carousel owl-theme">
                        <div class="item card waves-effect waves-light itemtop" style="width: 100%">
                            <div class="card-image">
                                <img src="img/saguaro-300x300.png">
                                <div class="fixed-action-btn vertical click-to-toggle">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul>
                                        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Añadir al carrito"><i class="material-icons">shopping_cart</i></a></li>
                                        <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="truncate card-title flow-text">Llantas Vitoria X2</span>
                                <p>$180.000</p>
                            </div>
                        </div>
                        <div class="item card waves-effect waves-light itemtop" style="width: 100%">
                            <div class="card-image">
                                <img src="img/saguaro-300x300.png">
                                <div class="fixed-action-btn vertical click-to-toggle">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul>
                                        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Añadir al carrito"><i class="material-icons">shopping_cart</i></a></li>
                                        <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="truncate card-title flow-text">Llantas Vitoria X2</span>
                                <p>$180.000</p>
                            </div>
                        </div>
                        <div class="item card waves-effect waves-light itemtop" style="width: 100%">
                            <div class="card-image">
                                <img src="img/saguaro-300x300.png">
                                <div class="fixed-action-btn vertical click-to-toggle">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul>
                                        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Añadir al carrito"><i class="material-icons">shopping_cart</i></a></li>
                                        <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="truncate card-title flow-text">Llantas Vitoria X2</span>
                                <p>$180.000</p>
                            </div>
                        </div>
                        <div class="item card waves-effect waves-light itemtop" style="width: 100%">
                            <div class="card-image">
                                <img src="img/saguaro-300x300.png">
                                <div class="fixed-action-btn vertical click-to-toggle">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul>
                                        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Añadir al carrito"><i class="material-icons">shopping_cart</i></a></li>
                                        <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="truncate card-title flow-text">Llantas Vitoria X2</span>
                                <p>$180.000</p>
                            </div>
                        </div>
                        <div class="item card waves-effect waves-light itemtop" style="width: 100%">
                            <div class="card-image">
                                <img src="img/saguaro-300x300.png">
                                <div class="fixed-action-btn vertical click-to-toggle">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul>
                                        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Añadir al carrito"><i class="material-icons">shopping_cart</i></a></li>
                                        <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="truncate card-title flow-text">Llantas Vitoria X2</span>
                                <p>$180.000</p>
                            </div>
                        </div>
                        <div class="item card waves-effect waves-light itemtop" style="width: 100%">
                            <div class="card-image">
                                <img src="img/saguaro-300x300.png">
                                <div class="fixed-action-btn vertical click-to-toggle">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul>
                                        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Añadir al carrito"><i class="material-icons">shopping_cart</i></a></li>
                                        <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="truncate card-title flow-text">Llantas Vitoria X2</span>
                                <p>$180.000</p>
                            </div>
                        </div>
                        <div class="item card waves-effect waves-light itemtop" style="width: 100%">
                            <div class="card-image">
                                <img src="img/saguaro-300x300.png">
                                <div class="fixed-action-btn vertical click-to-toggle">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul>
                                        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Añadir al carrito"><i class="material-icons">shopping_cart</i></a></li>
                                        <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="truncate card-title flow-text">Llantas Vitoria X2</span>
                                <p>$180.000</p>
                            </div>
                        </div>
                        <div class="item card waves-effect waves-light itemtop" style="width: 100%">
                            <div class="card-image">
                                <img src="img/saguaro-300x300.png">
                                <div class="fixed-action-btn vertical click-to-toggle">
                                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul>
                                        <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Añadir al carrito"><i class="material-icons">shopping_cart</i></a></li>
                                        <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <span class="truncate card-title flow-text">Llantas Vitoria X2</span>
                                <p>$180.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    @parent
@stop

@section('scripts')
	<script src="js/init.js"></script>
	<script src="js/carru-detail.js"></script>
    <script src="js/detail-product.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.star.rating.min.js"></script>
@stop