<!DOCTYPE html>
<html>

<head>
    <title>ULTRABIKES SHOP ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../css/owl-carousel.min.css"> -->
    <link href="css/c3.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
    <style type="text/css" media="screen">
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        overflow: hidden;
    }

    main {
        flex: 1 0 auto;
    }

    .row {
        margin-bottom: 0px
    }
    </style>
</head>

<body>
    <div class="main">
        <div class="row">
            <nav style="position: relative;z-index: 1000">
                <div class="nav-wrapper grey darken-4">
                    <a href="#!" class="brand-logo"> <img src="../img/ultra-bkikes-shop-logo.svg" style="width: 200px" alt="faroweb.com.co"></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
                        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
                        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </nav>
            <div class="row" style="height: calc(100vh - 60px);overflow-y: auto">
                <div class="left col s12 m12 l2" style="max-width: 215px;position: relative;">
                    <ul id="slide-out" class="side-nav fixed grey darken-4" style="top: 65px;max-width: 210px;overflow-y: auto;height: calc(100% - 60px)">
                        <li>
                            <div class="userView">
                                <div class="background">
                                    <img src="../img/ub-sidenav.jpg">
                                </div>
                                <a href="#!user"><img class="circle" src="img/myprofile.png"></a>
                                <a href="#!name"><span class="white-text name"><font><font>Armando Rubio</font></font></span></a>
                                <a href="#!email"><span class="white-text email"><font><font>info@faroweb.com.co</font></font></span></a>
                            </div>
                        </li>
                        <!--<li><a href="#!">Estadisticas Generales</a></li>-->
                        <li><a href="./" class="white-text">Dashboard</a></li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a class="collapsible-header white-text active">Páginas<i class="material-icons white-text">arrow_drop_down</i></a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="home.php">Home</a></li>
                                            <li><a href="ofertas.php">Ofertas</a></li>
                                            <li><a href="conoce-mas.php">Conoce Más</a></li>
                                            <li><a href="contacto.php">Contacto</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a class="collapsible-header white-text">Componentes<i class="material-icons white-text">arrow_drop_down</i></a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="home.php">Header</a></li>
                                            <li><a href="home.php">Slider Home</a></li>
                                            <li><a href="ofertas.php">Algunos Tips</a></li>
                                            <li><a href="conoce-mas.php">Preguntas Frecuentes</a></li>
                                            <li><a href="home.php">Footer</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="productos.php" class="white-text">Productos</a></li>
                        <li><a href="crear-oferta.php" class="white-text">Crear Oferta</a></li>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
                <div class="col s12 m12 l10 left">
                	<div class="col s12">
                		<blockquote>
                			<h1 class="flow-text">Página Inicio</h1>
                			<p>Cada bloque contiene un editor para modificar los textos en las subseccion de la pagina de inicio</p>
                		</blockquote>
                	</div>
                	<div class="col s12">
                		<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">Más productos, partes y accesorios para tu byke Aquí </span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="Más productos, partes y accesorios para tu byke Aquí">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">TOP VENTAS</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="TOP VENTAS">
									<label>Title</label>
								</div>
								<div class="input-field">
									<input type="text" value="Checa lo mas vendido por nuestra tienda Ultra Bikes Shop">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="Compartimos la pasión y alegría que produce el correr sobre dos ruedas por eso cuando compras en Ultra Bikes creamos la confianza y seguridad que buscas para tu bici">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">ALGUNOS TIP´S</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="ALGUNOS TIP´S">
									<label>Title</label>
								</div>
								<div class="input-field">
									<input type="text" value="Empieza tu marcha, pero antes te compartimos aquí algunos consejos para estar al día con tu bicicleta">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">comment</i><span class="truncate">¿PREGUNTAS FRECUENTES?</span></div>
							<div class="collapsible-body">
								<div class="input-field">
									<input type="text" value="¿PREGUNTAS FRECUENTES?">
									<label>Title</label>
								</div>
								<div class="input-field">
									<input type="text" value="¿Cuáles son las condiciones de envío?">
									<label>Mini parrafo</label>
								</div>
								<a class="waves-effect waves-light btn">Guardar</a>
							</div>
						</li>
					</ul>
					<a href="#" class="btn waves-effect waves-teal">Salvar Todo</a>
                	</div>
                    
					
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/tableToD3Chart.js"></script>-->
    <script type="text/javascript">
    $(document).ready(function($) {

        $('.collapsible').collapsible();


        //$('.collapsible-header').removeClass('white-text').addClass('active');
        $('.button-collapse').sideNav({
            menuWidth: 220, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });

    });
    </script>
</body>

</html>