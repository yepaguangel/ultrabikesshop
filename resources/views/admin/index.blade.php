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
                
                 @include('admin.forms.formmenuadmin')
                 
                <div class="col s12 m12 l10 left">
                    <div class="col s12 m7" style="height: 100%;">
                        <div class="card blue">
                            <div class="card-content white-text">
                                <p>
                                    Este cuadro representa la metrica de mayor relevancia para el producto o servicio con mayores visitas, clicks o interes de contacto
                                </p>
                            </div>
                            <div class="card-tabs">
                                <ul class="tabs tabs-fixed-width">
                                    <li class="tab"><a class="onetab active" href="#test4">Categorías</a></li>
                                    <li class="tab"><a class="twotab" href="#test5">Productos</a></li>
                                    <li class="tab"><a class="thretab" href="#test6">Comentarios</a></li>
                                </ul>
                            </div>
                            <div class="card-content grey lighten-4" style="padding: 8px">
                                <div id="test4">
                                    <div style="display: inline-block;width: 100% !important">
                                        <div class="col m6" style="padding: 0 0">
                                            <h1 class="flow-text truncate" style="margin:0 0">Categorías mas aceptadas</h1>
                                            <table id="chart-data" class="table responsive-table" tabindex="0">
                                                <caption>Top Categorias</caption>
                                                <tr>
                                                    <th scope="col">Categorias</th>
                                                    <th scope="col">Visitas</th>
                                                    <th scope="col">Ventas</th>
                                                    <th scope="col">Contácto</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MTB</th>
                                                    <td>15</td>
                                                    <td>13</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">RUTA</th>
                                                    <td>8</td>
                                                    <td>10</td>
                                                    <td>22</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">HYBRIDA</th>
                                                    <td>10</td>
                                                    <td>5</td>
                                                    <td>14</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">DOWNHILL</th>
                                                    <td>100</td>
                                                    <td>50</td>
                                                    <td>24</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">BMX</th>
                                                    <td>80</td>
                                                    <td>50</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ACCESORIOS</th>
                                                    <td>30</td>
                                                    <td>35</td>
                                                    <td>12</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col m6" style="padding: 0 0;position: relative;">
                                            <div id="chart1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="test5">
                                    <div style="display: inline-block;width: 100% !important">
                                        <div class="col m6" style="padding: 0 0">
                                            <h1 class="flow-text truncate" style="margin:0 0">10 Productos mas Vendidos</h1>
                                            <table id="chart-datatwo" class="table responsive-table" tabindex="0">
                                                <caption>Top Producto</caption>
                                                <tr>
                                                    <th scope="col">Producto</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Precio Unit</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="center">Llantas MX</th>
                                                    <td class="center">2</td>
                                                    <td>180.000</td>
                                                    <td>360.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Luces HD</th>
                                                    <td class="center">4</td>
                                                    <td>80.000</td>
                                                    <td>320.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Coraza Pirelli</th>
                                                    <td class="center">2</td>
                                                    <td>90.000</td>
                                                    <td>180.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Marco XS</th>
                                                    <td class="center">1</td>
                                                    <td>250.000</td>
                                                    <td>250.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Frenos Yokurama</th>
                                                    <td class="center">8</td>
                                                    <td>50.000</td>
                                                    <td>400.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ACCESORIOS</th>
                                                    <td class="center">30</td>
                                                    <td>35</td>
                                                    <td>12</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Reflectivos</th>
                                                    <td class="center">3</td>
                                                    <td>85.000</td>
                                                    <td>255.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Galapago</th>
                                                    <td class="center">6</td>
                                                    <td>40.000</td>
                                                    <td>240.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Coraza Generica</th>
                                                    <td class="center">2</td>
                                                    <td>90.000</td>
                                                    <td>180.000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Neumatico XS</th>
                                                    <td class="center">8</td>
                                                    <td>80.000</td>
                                                    <td>640.000</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col m6" style="padding: 0 0">
                                            <div class="charttwo animated zoomOut" id="chart2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="test6">
                                	<div class="col s12">
                                		<span class="new badge grey" data-badge-caption="Visitante"></span>
	                                	<span class="new badge green" data-badge-caption="Usuario"></span>
	                                	<span class="new badge red" data-badge-caption="Cliente"></span>	
                                	</div>
                                	
                                	
                                	<ul class="collection with-header">
                                		<li class="collection-header"><h4>Más Comentado</h4></li>
                                		<li class="collection-item avatar">
									      <i class="material-icons circle">person</i>
									      <span class="title">Marcos</span>
									      <p>Llantas mx SWD<br>
									         <span class="truncate">Excelente servicio y muy rapida su entrega lo recomiendo 100% a todos tienes toda la variedad que estaba buscando para mi bicicleta ahora me siento mas segura por que encontre todos los repuestos en ultra bikes shop.</span>
									      </p>
									      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
									    </li>
									    <li class="collection-item avatar">
									      <i class="material-icons circle">person</i>
									      <span class="title">Apolo</span>
									      <p>Luces HID<br>
									         <span class="truncate">Excelente servicio y muy rapida su entrega lo recomiendo 100% a todos tienes toda la variedad que estaba buscando para mi bicicleta ahora me siento mas segura por que encontre todos los repuestos en ultra bikes shop.</span>
									      </p>
									      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
									    </li>
									    <li class="collection-item avatar">
									      <i class="material-icons circle green">person</i>
									      <span class="title">Fanny</span>
									      <p>Corasa Downhill<br>
									         <span class="truncate">Excelente servicio y muy rapida su entrega lo recomiendo 100% a todos tienes toda la variedad que estaba buscando para mi bicicleta ahora me siento mas segura por que encontre todos los repuestos en ultra bikes shop.</span>
									      </p>
									      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
									    </li>
									    <li class="collection-item avatar">
									      <i class="material-icons circle red">person</i>
									      <span class="title">Betty</span>
									      <p>Inflador de Llantas<br>
									         <span class="truncate">Excelente servicio y muy rapida su entrega lo recomiendo 100% a todos tienes toda la variedad que estaba buscando para mi bicicleta ahora me siento mas segura por que encontre todos los repuestos en ultra bikes shop.</span>
									      </p>
									      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
									    </li>
                                	</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m5" style="padding: 0 0">
                        <div id="expandable" class="section scrollspy" style="padding-top:0">
                            <div class="row">
                                <div class="col s12" style="padding: 0 0">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li>
                                            <div class="collapsible-header active"><i class="material-icons">local_atm</i>Estimado en Ventas</div>
                                            <div class="collapsible-body">
                                                <table class="responsive-table" tabindex="0">
                                                    <tr>
                                                        <th>Categorias</th>
                                                        <th>Valor</th>
                                                    </tr>
                                                    <tr>
                                                        <th>MTB</th>
                                                        <th>35.5%</th>
                                                    </tr>
                                                    <tr>
                                                        <th>RUTA</th>
                                                        <th>34.7%</th>
                                                    </tr>
                                                    <tr>
                                                        <th>HYBRIDA</th>
                                                        <th>27.1</th>
                                                    </tr>
                                                    <tr>
                                                        <th>DOWNHILL</th>
                                                        <th>35.5%</th>
                                                    </tr>
                                                    <tr>
                                                        <th>BMX</th>
                                                        <th>34.7%</th>
                                                    </tr>
                                                    <tr>
                                                        <th>ACCESORIOS</th>
                                                        <th>27.1</th>
                                                    </tr>
                                                </table>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header"><i class="material-icons">view_list</i>Listado de Productos</div>
                                            <div class="collapsible-body no-padding">
                                                <div class="input-field col s12" style="padding-bottom: 0;padding-top: 0">
                                                  <i class="material-icons prefix" style="margin-top: 10px">search</i>
                                                  <input type="text" id="autocomplete-input" class="autocomplete">
                                                  <label for="autocomplete-input">Buscar</label>
                                                </div>
                                                <div class="col s12 card" style="margin-top: 0;overflow-x: auto">
                                                    <table class="responsive-table" tabindex="0">
                                                        <tr>
                                                            <th>Ref</th>
                                                            <th>Produto</th>
                                                            <th>U Disponibles</th>
                                                            <th>Valor</th>
                                                        </tr>
                                                        <tr>   
                                                            <th>3B6876QO</th>
                                                            <th><span class="truncate">Llanta pistera BLT</span></th>
                                                            <th>8</th>
                                                            <th>35.5%</th>
                                                        </tr>
                                                        <tr>
                                                            <th>3B6876QO</th>
                                                            <th><span class="truncate">Rin cruzado</span></th>
                                                            <th>10</th>
                                                            <th>34.7%</th>
                                                        </tr>
                                                        <tr>
                                                            <th>3B6876QO</th>
                                                            <th><span class="truncate">Galapago</span></th>
                                                            <th>20</th>
                                                            <th>27.1</th>
                                                        </tr>
                                                        <tr>
                                                            <th>3B6876QO</th>
                                                            <th><span class="truncate">Corasa Mountain</span></th>
                                                            <th>15</th>
                                                            <th>35.5%</th>
                                                        </tr>
                                                        <tr>
                                                            <th>3B6876QO</th>
                                                            <th><span class="truncate">Luces</span></th>
                                                            <th>30</th>
                                                            <th>34.7%</th>
                                                        </tr>
                                                        <tr>
                                                            <th>3B6876QO</th>
                                                            <th><span class="truncate">Inflador</span></th>
                                                            <th>40</th>
                                                            <th>27.1</th>
                                                        </tr>
                                                    </table>    
                                                    <div class="card-action" style="padding-left: 0;padding-right: 0">
                                                        <!--
                                                        <a href="#" class="btn btn-flat tooltipped" style="padding-left: 8px;padding-right: 8px" data-position="top" data-delay="50" data-tooltip="Subir CSV"><i class="material-icons left">file_upload</i>Actualizar Productos</a>
                                                        -->
                                                        {{Form::open(['route'=>'file.store', 'method'=>'POST', 'files'=>true])}}
                                                        <input type="file" class="form-control" name="file" >
                                                        <button type="submit" class="btn btn-primary">Subir</button>
                                                        {{Form::close()}}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header"><i class="material-icons">person</i>Usuarios Activos</div>
                                            <div class="collapsible-body">
                                            	<table class="responsive-table" tabindex="0">
                                                    <tr>
                                                        <th>Usuario</th>
                                                        <th>Correo</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Claudia</th>
                                                        <th>clda@sporting.com.co</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Simon</th>
                                                        <th>sion@bikemountain.co</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Fernando</th>
                                                        <th>fernandobiker@gmail.com</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Francisco</th>
                                                        <th>kiko@labika.com</th>
                                                    </tr>
                                                    <tr>
                                                        <th>david</th>
                                                        <th>alamonte@gmail.com</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Cristina</th>
                                                        <th>extrema@yahoo.es</th>
                                                    </tr>

                                                </table>
                                                <ul class="pagination">
												    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
												    <li class="active"><a href="#!">1</a></li>
												    <li class="waves-effect"><a href="#!">2</a></li>
												    <li class="waves-effect"><a href="#!">3</a></li>
												    <li class="waves-effect"><a href="#!">4</a></li>
												    <li class="waves-effect"><a href="#!">5</a></li>
												    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
												  </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/tableToD3Chart.js"></script>
    <script type="text/javascript">
    $(document).ready(function($) {

        $('.collapsible').collapsible();


        $('.button-collapse').sideNav({
            menuWidth: 220, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
        /*
        $(".collection-item").click(function (e) {
        	var li = e.target.parentNode;
    		alert(li.id);
    	});
*/		
		var clase = $(".collection-item");
 
	    clase.each(function(index, element)
		{
		   $(element).attr("id", "id-" + (index + 1));
		});

        $(".collection-item[id]").click(function() {
		  //console.log("Has pulsado el elemento: " + $(this).attr('id'));
		  $(this).find('span').toggleClass('truncate');
		});


        $("#chart1").tableToD3Chart({
            chartDataTable: "#chart-data",
            chartType: "donut"
        });

        
        $('ul.tabs').tabs({
        	onShow: function(tab) {
        		//console.log('cambian');

	            $("#chart1").tableToD3Chart({
		                chartDataTable: "#chart-data",
		                chartType: "donut"
		            });
		       
	            $("#chart2").tableToD3Chart({
		                chartDataTable: "#chart-datatwo",
		                chartType: "donut"
		            });
	        	
        	}
        });
   

    });
    </script>
</body>

</html>