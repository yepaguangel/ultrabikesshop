@extends('layouts.principal')

@section('titulo')
    Ultrabikes Shop - Tienda
@stop

@section('head')
    @parent
@stop

@section('content')
<div class="row contentbanner">
    <div class="nav-content bgbanner">
        <div class="carousel carousel-slider center">
            <div id="shopfilter" class="carousel-fixed-item center animated fadeInUp">
                <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
                <div id="filternav" class="row menubanner scrollspy">
                    <div class="container">
                        <div class="card-panel left-align" style="position: relative;overflow:hidden">
                            <div class="row filtermenu">
                                <div class="col s8 m9 contmenubanner" style="display: table-cell;overflow-x: auto;transition: all linear .2s;padding: 0 0">
                                    @foreach($categoriaLimit as $catlim)
                                    {{ link_to('categoria/'. $catlim->id.'/'.$catlim->nombrecategoria, $title =  $catlim->nombrecategoria, $attributes = ['class'=>'waves-effect white black-text waves-orange btn']) }}
                                    @endforeach
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
                                <option value="" disabled selected>Precio</option>
                                <option value="1">Precio Menor</option>
                                <option value="2">Precio Mayor</option>
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
            <div class="carousel-item red white-text valign-wrapper" href="#1">
                <div class="parallax-container radial-mask">
                    <div class="parallax"><img src="img/6.jpg"></div>
                </div>
                <div class="valign-wrapper" style="height: 100%;position: relative;">
                    <div class="valign center col s12">
                        <div class="container">
                            <h1 class="hide">ULTRA BIKES SHOP</h1>
                            <h2 style="font-weight: lighter;" class="hide white-text flow-text">Todo en accesorios y repuestos para bicicletas, con nuestra <br> tienda online encuentras todo más fácil y rápido desde donde estés</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item amber white-text valign-wrapper" href="#2">
                <div class="parallax-container radial-mask">
                    <div class="parallax"><img src="img/bg-ultrabikes.jpg"></div>
                </div>
                <div class="valign-wrapper" style="height: 100%;position: relative;">
                    <div class="valign right-align col s12">
                        <div class="container">
                            <h3 class="hide">LLEGA MÁS LEJOS</h3>
                            <h4 style="font-weight: lighter;" class="hide white-text flow-text">
                                        Contamos con el respaldo y cobertura de grandes marcas.
                                    </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item green white-text valign-wrapper" href="#3">
                <div class="parallax-container radial-mask">
                    <div class="parallax"><img src="img/ciclismo-ultrabikes.jpg"></div>
                </div>
                <div class="valign-wrapper" style="height: 100%;position: relative;">
                    <div class="valign center col s12">
                        <div class="container">
                            <h3 class="hide">ENVIOS DENTRO Y FUERA DEL PAÍS</h3>
                            <h4 style="font-weight: lighter;" class="hide white-text flow-text">
                                        No importa que tan lejos estes ultra bikes shop llega donde estes
                                    </h4>
                            <br>
                            <a href="" class="btn waves-effect waves-light btn-large orange darken-4">¡Tienda Ruta!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bannerfor blue white-text valign-wrapper" href="#4">
                <div class="parallax-container radial-mask">
                    <div class="parallax"><img src="img/bg-bannerutbs.jpg"></div>
                </div>
                <div class="valign-wrapper" style="height: 100%;position: relative;">
                    <div class="valign center col s12">
                        <div class="container">
                            <h3 class="hide">MOUNTAIN</h3>
                            <h4 style="font-weight: lighter;" class="hide white-text flow-text">
                                        Productos y accesorios para los apasionados por el ciclomontañismo extremo
                                    </h4>
                            <br>
                            <a href="" class="btn waves-effect waves-light btn-large orange darken-4">¡Tienda Mountain!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed-action-btn toolbar tabtop">
    <a class=" btn-floating btn-large halfway-fab waves-effect waves-light orange">
                <i class="material-icons">add</i>
            </a>
    <ul>
        <li class="hide-on-large-only"><a href="#filternav" class="waves-effect waves-light btn btn-search"><i class="material-icons left" style="margin:0 0">search</i>Buscar</a></li>
        <li class="hide-on-large-only"><a class="waves-effect waves-light btn btn-flat"><i class="material-icons left" style="margin-right: 0">shopping_cart</i>Ver Carrito</a></li>
        <li class="hide-on-med-and-down"><a href="#top-ventas" class="waves-effect waves-light btn"><i class="material-icons left">show_chart</i>Top Ventas</a></li>
        <li class="hide-on-med-and-down">
            <a class="waves-effect waves-light btn"><img class="left" style="width: 28px;margin-top: 13px" src="img/redes-icon/svg/004-facebook.svg" alt="ultra bikes shop instagram">Facebook</a>
        </li>
        <li class="hide-on-med-and-down">
            <a class="waves-effect waves-light btn"><img class="left" style="width: 28px;margin-top: 13px" src="img/redes-icon/svg/003-twitter.svg" alt="ultra bikes shop instagram">Twitter</a>
        </li>
        <li class="hide-on-med-and-down">
            <a class="waves-effect waves-light btn"><img class="left" style="width: 28px;margin-top: 13px" src="img/redes-icon/svg/002-google-plus.svg" alt="ultra bikes shop instagram">Google Plus</a>
        </li>
        <li class="hide-on-med-and-down">
            <a class="waves-effect waves-light btn"><img class="left" style="width: 28px;margin-top: 13px" src="img/redes-icon/svg/001-instagram.svg" alt="ultra bikes shop instagram">Instagram</a>
        </li>
    </ul>
</div>
<div class="container">
    <div id="spacefilter">
    </div>
    <div class="wall">
        @foreach($productos as $prodind)
            
        <div class="card article">
            <div class="card-image" style="position: relative;">
                <div class="hide">{{ $imagen = getImage($prodind->imagen) }}</div>
                <a class="waves-effect waves-light btn animated show-ray" href="#modal1">Vista Rapida</a>
                <span class="new badge" data-badge-caption="" style="position: absolute;right: 9px;top: 9px;z-index: 10">29*2.0</span>
                
                {{ Html::image('filegallery/'.$imagen->claveimg.'.'.$imagen->extension, $imagen->nombre) }}
                <span class="card-title">{{str_limit($prodind->nombre, $limit = 25, $end = '...')}}</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir al Carrito"><i class="material-icons">add_shopping_cart</i></a>
            </div>
            <div class="card-content">
                <p>{{str_limit($prodind->descrip, $limit = 20, $end = '...')}}</p>
                <br>
                <h5>${{$prodind->preciopublico}}</h5>
            </div>
            <div class="card-action">
                {{ link_to('detalleproducto/'.$prodind->id.'/'.str_slug($prodind->nombre, '-'), $title = 'Ver Detalle', $attributes = ['class'=>'waves-effect waves-light btn orange darken-3 white-text']) }}
                <a href="#" class="waves-effect waves-light btn orange darken-3 white-text">Comprar</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col s12 center">
            Más productos, partes y accesorios para tu bike
            <br>Aquí
            <br>
            <br>
            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
    </div>
    <div id="top-ventas" class="row scrollspy">
        <div class="col s12 space">
            <section>
                <h4>TOP VENTAS</h4>
                <p>Checa lo mas vendido por nuestra tienda Ultra Bikes Shop</p>
            </section>
        </div>
        <div class="col s12" style="position:relative;z-index: 8">
            <div id="carousel01" class="owl-carousel owl-theme">
                @foreach($masvendidos as $masv)
                    
                <div class="item card waves-effect waves-light itemtop">
                    <div class="card-image">
                        <div class="hide">{{ $imagen = getImage($masv->imagen) }}</div>
                        {{ Html::image('filegallery/'.$imagen->claveimg.'.'.$imagen->extension, $imagen->nombre) }}
                        <div class="fixed-action-btn vertical click-to-toggle">
                            <a class="btn-floating btn-large halfway-fab waves-effect waves-light red">
                                        <i class="material-icons">add</i>
                                    </a>
                            <ul>
                                <li>
                                {{ link_to('detalleproducto/'.$prodind->id, $title = 'Ver Detalle', $attributes = ['class'=>'btn-floating red tooltipped', 'data-position'=>'left', 'data-delay'=>'50', 'data-tooltip'=>'Añadir al carrito']) }}
                                <a class="btn-floating red tooltipped" ><i class="material-icons">shopping_cart</i></a>
                                </li>
                                <li><a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Ver Descripción"><i class="material-icons">info</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title flow-text">{{ str_limit($masv->nombre, $limit = 10, $end = '...') }}</span>
                        <p>${{$masv->preciopublico}}</p>
                    </div>
                </div>
                @endforeach
                
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
<div class="row bannertwo" style="margin: -40px 0 0 0 !important">
    <div class="parallax-container">
        <div class="parallax"><img src="img/ultra-bikes-shop-banner.jpg"></div>
    </div>
    <div class="container white-text" style="position: relative;z-index: 10">
        <div class="col s12 m6 l4 center items-option">
            <img class="svg" src="img/favorite.svg" alt="Pasión por el deporte - Ultra Bikes Shop">
            <p>
                Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici
            </p>
        </div>
        <div class="col s12 m6 l4 center items-option">
            <img class="svg" src="img/24-horas-a-su-servicio.svg" alt="24-horas-a-su-servicio - Ultra Bikes Shop">
            <p>
                No importa la hora no importa ni el lugar en Ultra Bikes Shop cuentas con una tienda en línea actualizada a su servicio las 24 Horas del día de domingo a domingo.
            </p>
        </div>
        <div class="col s12 m6 l4 center items-option">
            <img class="svg" src="img/seguridad-ssl.svg" alt="seguridad ssl - Ultra Bikes Shop">
            <p>
                Contamos con sistema de encriptación de datos privados brindamos la seguridad necesaria para que realices tus compras más cómodamente desde cualquier lugar
            </p>
        </div>
        <div class="col s12 m6 l4 center items-option">
            <img class="svg" src="img/preguntas-ultrabike.svg" alt="preguntas ultrabike - Ultra Bikes Shop">
            <p>
                Tienes alguna inquietud o sugerencia en Ultra Bikes Shop siempre estamos disponibles para escuchar en pro de mejorar nuestra calidad de atención y servicio a nuestros clientes o visitantes web
            </p>
        </div>
        <div class="col s12 m6 l4 center items-option">
            <img class="svg" src="img/encuentranos.svg" alt="cumplimos - Ultra Bikes Shop">
            <p>
                Cumplimiento y calidad, respetamos su elección y no cambiamos ni falseamos sus productos obtienes lo que compras en el tiempo establecido con la tecnología y calidad descrita en el detalle del producto
            </p>
        </div>
        <div class="col s12 m6 l4 center items-option">
            <img class="svg" src="img/buen-servicio.svg" alt="buen servicio - Ultra Bikes Shop">
            <p>
                En Ultra Bikes Shop un asesor siempre estará a la espera de su llamada o correo electrónico para asesorarte y ayudarte a encontrar más fácil lo que buscas
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="container center" style="padding: 80px 0">
        <h3>ALGUNOS TIP´S</h3>
        <p class="flow-text">Empieza tu marcha, pero antes te compartimos aquí algunos consejos para estar al día con tu bicicleta</p>
        <div class="row" style="padding: 20px 0">
            <div id="carousel03" class="owl-carousel">
                <div class="card waves-effect waves-teal">
                    <div class="card-content" style="padding: 0 0">
                        <a href="#modal2">
                                    <img src="img/video1.jpg" alt="tips ultra bikes shop">
                                </a>
                    </div>
                    <div class="card-action" style="padding: 0 0;background-color: transparent;">
                        <ul class="collection" style="background-color: transparent;border:none">
                            <li class="collection-item avatar left-align" style="padding:10px 5px;background-color: transparent;">
                                <a href="#modal2" style="margin:10px" class="left btn-floating"><i class="material-icons">play_arrow</i></a>
                                <p style="font-size: .9rem">
                                    Cómo Ajustar correctamente la altura del sillín.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card waves-effect waves-teal">
                    <div class="card-content" style="padding: 0 0">
                        <a href="#modal2">
                                    <img src="img/video1.jpg" alt="tips ultra bikes shop">
                                </a>
                    </div>
                    <div class="card-action" style="padding: 0 0;background-color: transparent;">
                        <ul class="collection" style="background-color: transparent;border:none">
                            <li class="collection-item avatar left-align" style="padding:10px 5px;background-color: transparent;">
                                <a href="#modal2" style="margin:10px" class="left btn-floating"><i class="material-icons">play_arrow</i></a>
                                <p style="font-size: .9rem">
                                    Cómo Ajustar correctamente la altura del sillín.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card waves-effect waves-teal">
                    <div class="card-content" style="padding: 0 0">
                        <a href="#modal2">
                                    <img src="img/video1.jpg" alt="tips ultra bikes shop">
                                </a>
                    </div>
                    <div class="card-action" style="padding: 0 0;background-color: transparent;">
                        <ul class="collection" style="background-color: transparent;border:none">
                            <li class="collection-item avatar left-align" style="padding:10px 5px;background-color: transparent;">
                                <a href="#modal2" style="margin:10px" class="left btn-floating"><i class="material-icons">play_arrow</i></a>
                                <p style="font-size: .9rem">
                                    Cómo Ajustar correctamente la altura del sillín.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card waves-effect waves-teal">
                    <div class="card-content" style="padding: 0 0">
                        <a href="#modal2">
                                    <img src="img/video1.jpg" alt="tips ultra bikes shop">
                                </a>
                    </div>
                    <div class="card-action" style="padding: 0 0;background-color: transparent;">
                        <ul class="collection" style="background-color: transparent;border:none">
                            <li class="collection-item avatar left-align" style="padding:10px 5px;background-color: transparent;">
                                <a href="#modal2" style="margin:10px" class="left btn-floating"><i class="material-icons">play_arrow</i></a>
                                <p style="font-size: .9rem">
                                    Cómo Ajustar correctamente la altura del sillín.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card waves-effect waves-teal">
                    <div class="card-content" style="padding: 0 0">
                        <a href="#modal2">
                                    <img src="img/video1.jpg" alt="tips ultra bikes shop">
                                </a>
                    </div>
                    <div class="card-action" style="padding: 0 0;background-color: transparent;">
                        <ul class="collection" style="background-color: transparent;border:none">
                            <li class="collection-item avatar left-align" style="padding:10px 5px;background-color: transparent;">
                                <a href="#modal2" style="margin:10px" class="left btn-floating"><i class="material-icons">play_arrow</i></a>
                                <p style="font-size: .9rem">
                                    Cómo Ajustar correctamente la altura del sillín.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card waves-effect waves-teal">
                    <div class="card-content" style="padding: 0 0">
                        <a href="#modal2">
                                    <img src="img/video1.jpg" alt="tips ultra bikes shop">
                                </a>
                    </div>
                    <div class="card-action" style="padding: 0 0;background-color: transparent;">
                        <ul class="collection" style="background-color: transparent;border:none">
                            <li class="collection-item avatar left-align" style="padding:10px 5px;background-color: transparent;">
                                <a href="#modal2" style="margin:10px" class="left btn-floating"><i class="material-icons">play_arrow</i></a>
                                <p style="font-size: .9rem">
                                    Cómo Ajustar correctamente la altura del sillín.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card waves-effect waves-teal">
                    <div class="card-content" style="padding: 0 0">
                        <a href="#modal2">
                                    <img src="img/video1.jpg" alt="tips ultra bikes shop">
                                </a>
                    </div>
                    <div class="card-action" style="padding: 0 0;background-color: transparent;">
                        <ul class="collection" style="background-color: transparent;border:none">
                            <li class="collection-item avatar left-align" style="padding:10px 5px;background-color: transparent;">
                                <a href="#modal2" style="margin:10px" class="left btn-floating"><i class="material-icons">play_arrow</i></a>
                                <p style="font-size: .9rem">
                                    Cómo Ajustar correctamente la altura del sillín.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card waves-effect waves-teal">
                    <div class="card-content" style="padding: 0 0">
                        <a href="#modal2">
                                    <img src="img/video1.jpg" alt="tips ultra bikes shop">
                                </a>
                    </div>
                    <div class="card-action" style="padding: 0 0;background-color: transparent;">
                        <ul class="collection" style="background-color: transparent;border:none">
                            <li class="collection-item avatar left-align" style="padding:10px 5px;background-color: transparent;">
                                <a href="#modal2" style="margin:10px" class="left btn-floating"><i class="material-icons">play_arrow</i></a>
                                <p style="font-size: .9rem">
                                    Cómo Ajustar correctamente la altura del sillín.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- MODAL VIDEO -->
    <div id="modal2" class="modal">
        <div class="video-container">
            <iframe id="videoyt" width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- CIERRA MODAL VIDEO -->
</div>
<div class="row space" style="position: relative;z-index: 0">
    <div class="container center">
        <h3 class="space">¿PREGUNTAS FRECUENTES?</h3>
        <h4 class="flow-text prefix">¿Cuáles son las condiciones de envío?</h4>
        <div id="carousel04" class="col s12 owl-carousel" style="margin-bottom: -100px">
            <div class="col s12" style="height: 450px">
                <div class="col m6 center hide-on-small-only">
                    <img src="img/212.png" alt="Condiciones de Envío" class="responsive-img">
                </div>
                <div class="col s12 m6 center valign-wrapper" style="height: 100%">
                    <div class="valign">
                        <p class="space">
                            Los despachos se realizan de lunes a viernes días hábiles, siempre y cuando la confirmación de la consignación se haya realizado antes de las 10:00 am.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12" style="height: 400px">
                <div class="col m6 center hide-on-small-only">
                    <img src="img/164.png" alt="Condiciones de Envío" class="responsive-img">
                </div>
                <div class="col s12 m6 center valign-wrapper" style="height: 100%">
                    <div class="valign">
                        <p class="space">
                            El tiempo estimado de entrega de los artículos es de 6 días hábiles, después de nosotros haber confirmado la transacción.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12" style="height: 400px">
                <div class="col m6 center hide-on-small-only">
                    <img src="img/199.png" alt="Condiciones de Envío" class="responsive-img">
                </div>
                <div class="col s12 m6 center valign-wrapper" style="height: 100%">
                    <div class="valign">
                        <p class="space">
                            En la mayoría de las ocasiones llega antes de los 6 días hábiles, pero esto es también una variable porque no es lo mismo realizar un despacho a un municipio principal que a uno secundario.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12" style="height: 400px">
                <div class="col m6 center hide-on-small-only">
                    <img src="img/212.png" alt="Condiciones de Envío" class="responsive-img">
                </div>
                <div class="col s12 m6 center valign-wrapper" style="height: 100%">
                    <div class="valign">
                        <p class="space">
                            Muy importante al momento de diligenciar el formulario de compra, estar seguro que los datos suministrados son los correctos, debido que con base a estos datos se realizará la factura y será el lugar de destino del artículo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row bannerthree">
    <div class="valign-wrapper" style="width: 100%;height: 350px;position: relative;">
        <div class="valign" style="width: 100%">
            <div class="row">
                <div class="container">
                    <div id="carousel05" class="owl-carousel space">
                        <div class="card">
                            <img src="img/garneau-1.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/giant.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/exustar.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/shimano.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/liv.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/schwalbe.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/vitoria.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/yakima.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/topeak.png" alt="" class="responsive-img">
                        </div>
                        <div class="card">
                            <img src="img/lezyne.png" alt="" class="responsive-img">
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