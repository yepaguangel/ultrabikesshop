<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo')</title>

    
    {!!Html::style('css/materialize.min.css')!!}
    {!!Html::style('css/headerstyle.css')!!}
    {!!Html::style('css/menunav.css')!!}
    {!!Html::style('css/global-style.css')!!}
    {!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}

    @section('head')

    <link rel="stylesheet" href="css/bannerstyle.css">
    <link rel="stylesheet" href="css/product-style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/carru-topventas.css">
    <link rel="stylesheet" href="css/filter-style.css">
    <link rel="stylesheet" href="css/modal-style.css">

    @show

    {!!Html::style('css/animate.css')!!}
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css" media="screen">
    .row {
        margin-bottom: 0px !important
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        margin: 0 0
    }

    body {
        overflow-x: hidden;
        width: 100%;
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }
    </style>
</head>

<body class="grey darken-4">
    <main>
        <div class="barnav">
            <nav class="nav-extended notbg">
                <div class="nav-wrapper navmenu">
                    <div class="container">
                        <a href="#!" class="brand-logo">
                            <img class="svg" src="img/ultra-bkikes-shop-logo.svg" alt="Ultra Bikes Shop Logo">
                        </a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse left menubtn"><i class="material-icons ctrlnav">menu</i></a>
                        <div class="col s12 contactheader">
                            <div class="right-align col s12">
                                <ul class="right date-contact">
                                    <li class="right shopbtntop hide-on-med-and-down"><a class="btn-floating btn-flat dropdown-button shoppingbtn" data-beloworigin="true" href='#' data-activates='shoppingbtn'><i class="material-icons left">shopping_cart</i></a></li>
                                    <li class="right  hide-on-med-and-down"><a href="sass"><i class="material-icons left">perm_phone_msg</i>Jorge Corona 3185239686</a></li>
                                </ul>
                                <!-- Dropdown Structure -->
                                <ul id='shoppingbtn' class='dropdown-content'>
                                    <li><a href="#!">Llantas Vitoria X2</a></li>
                                    <li><a href="#!">Llantas Vitoria X2</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#!"><i class="material-icons">attach_money</i>180.000</a></li>
                                    <li><a href="carrito"><i class="material-icons">view_list</i>Listar Productos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col s12 navbar">
                            <ul class="right hide-on-med-and-down">
                                <div class="col s12">
                                    <li><a href="./">TIENDA</a></li>
                                    <li><a href="ofertas">OFERTAS</a></li>
                                    <li><a href="conocenos">CONOCE MÁS</a></li>
                                    <li><a href="contactenos">CONTÁCTENOS</a></li>
                                    <li><a href="micuenta">MI CUENTA</a></li>
                                    <li class="right shopmenu"></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="side-nav" id="mobile-demo">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img class="hoverable" src="img/ub-sidenav.jpg">
                            </div>
                            <a href="#!user"><img class="circle" src="img/new-user.png"></a>
                            <a href="#!name"><span class="white-text name">John Doe</span></a>
                            <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                        </div>
                    </li>
                    <li><a href="./"><i class="material-icons">directions_bike</i>TIENDA</a></li>
                    <li><a href="ofertas"><i class="material-icons">local_offer</i>Ofertas</a></li>
                    <li><a href="carrito"><i class="material-icons">shopping_cart</i>Ver Carrito</a></li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li><a class="subheader">Ultra Bikes Shop</a></li>
                    <li><a class="waves-effect" href="conocenos">Conoce Más</a></li>
                    <li><a class="waves-effect" href="contactenos">Contáctenos</a></li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li><a class="subheader">PQR</a></li>
                    <li><a class="waves-effect" href="#!">Jorge Corona 3185239686</a></li>
                </ul>
            </nav>
        </div>
        <div class="row" style="background-color: #fff">
            @yield('content')    
        </div>
    </main>

    @section('footer')
    <footer class="page-footer grey darken-4 white-text" style="position: relative;background-image: url('img/bg-opaque-min.png');background-repeat: no-repeat;z-index: 6">
        <div class="row" style="position: absolute;width: 100%;top: -120px">
            <div class="col s12" style="height: 120px;background-image: url('img/border.png');background-size: cover;background-position: center">
            </div>
        </div>
        <div class="container">
            <div class="row center">
                <div class="col s12">
                    <img src="img/ultra-bikes-shop-logo-footer.png" alt="" style="width: 300px">
                    <h4 style="font-weight: bold" class="space">3185239698</h4>
                    <div class="row center">
                        <div class="col s12 m6 l4" style="float: none;display: inline-block;">
                            <div class="col s5" style="padding: 9px 0 0">
                                <div class="divider"></div>
                            </div>
                            <div class="col s2 center">
                                <div class="point"></div>
                            </div>
                            <div class="col s5" style="padding: 9px 0 0">
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>
                    <p class="grey-text text-lighten-4 flow-text" style="margin:0 0 20px !important">Jorge A. Corona Parra
                        <br>NIT: 14396380-4</p>
                    <div class="row center">
                        <div class="col s12 m6 l4" style="float: none;display: inline-block;">
                            <div class="col s5" style="padding: 9px 0 0">
                                <div class="divider"></div>
                            </div>
                            <div class="col s2 center">
                                <div class="point"></div>
                            </div>
                            <div class="col s5" style="padding: 9px 0 0">
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>
                    <p class="grey-text text-lighten-4 flow-text" style="margin:0 0 0px !important">Dirección de Correspondencia</p>
                    <p style="margin: 0 0;font-weight: lighter;font-size: 1.2em">Cll 77C Sur 45-37 Apto 503 Sabaneta (ANT)</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center tooltipped" data-position="top" data-delay="25" data-tooltip="Siguenos en:">
                <a class="grey-text text-lighten-4 icon-red" href="#!"><img class="svg" src="img/facebook.svg" alt="facebook"></a>
                <a class="grey-text text-lighten-4 icon-red" href="#!"><img class="svg" src="img/google-plus.svg" alt="Google plus"></a>
                <a class="grey-text text-lighten-4 icon-red" href="#!"><img class="svg" src="img/twitter.svg" alt="twitter"></a>
                <a class="grey-text text-lighten-4 icon-red" href="#!"><img class="svg" src="img/instagram.svg" alt="instagram"></a>
            </div>
        </div>
    </footer>

    @show

    {!!Html::script('js/jquery-2.1.1.min.js')!!}
    {!!Html::script('js/materialize.min.js')!!}
    {!!Html::script('js/global-svg.js')!!}
    {!!Html::script('js/navmenu.js')!!}
       
    @section('scripts')
    <script src="js/home.js"></script>
    <script src="js/bannerslider.js"></script>
    <script src="js/grid-product.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/modal-script.js"></script>
    <script src="js/modal-video.js"></script>
    <script src="js/filter.js"></script> 
    @show
</body>

</html>