<!DOCTYPE html>
<html>

<head>
    <title>ULTRABIKES SHOP ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
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

    .fullbar{
    	width: 80% !important
    }

    @media (max-width: 1310px){
    	.fullbar{
    		width: 70% !important;
    		float: left !important;
    	}
	}

	@media (max-width: 1100px){
    	.fullbar{
    		width: 60% !important;
    		float: left !important;
    	}
	}

    @media (max-width: 600px){
    	.nameproduct{
    		max-width: 180px !important;
    		font-size: .9em !important
    	}	
    	.fullbar{
    		width: 100% !important;
    		margin-top: 15px !important;
    		float: left !important;
    	}
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
                	<div class="col s12" style="display: inline-block;">
                		<div class="card-content">
							<blockquote>
								<h4>Tabla de Productos</h4>
							</blockquote>
							<div class="col s12" style="padding:0 0">
                            {{ link_to('admin/producto/create', $title = 'Crear Producto', $attributes = ['class'=>'btn waves-effect waves-teal right']) }}
								
								<a class="btn waves-effect waves-teal btn-flat right opentabsearch" href="#" style="margin: 1px 2px">Buscar <i class="material-icons right">search</i></a>
							 	<div class="input-field col s1 hide barsearchtab right" style="margin-top: -8px;padding:0 0;transition: all linear .2s">
							  	  <i class="material-icons prefix removebarsearch" style="margin-top: 7px">close</i>
							      <input type="text" id="autocomplete-input" class="autocomplete">
							      <label for="autocomplete-input">Buscar Por Nomber o Ref:</label>
							  	</div>
							</div>
					    </div>		
                	</div>
                	<div class="card col s12" style="overflow-x: auto" style="width: 100%">					    
					    <table class="bordered">
					        <thead>
					          <tr>
					          	<th class="center tooltipped" data-position="top" data-delay="50" data-tooltip="seleccionar todos"><input type="checkbox" id="all"/><label for="all"></label></th>
					          	<th>Referencia</th>
					            <th>Producto</th>
					            <th>En Stock</th>
					            <th>Precio</th>
					            <th>Actualizar</th>
                                <th>Eliminar</th>
					          </tr>
					        </thead>
                            @foreach($productos as $producto)
					        <tbody>
					          <tr>
					          	<td class="center">
                                    <input class="item" type="checkbox" id="test{{$producto->id}}" />
                                    <label for="test{{$producto->id}}"></label>
                                </td>
					            <td>{{$producto->referencia}}</td>
					            <td><span class="truncate nameproduct">{{$producto->nombre}}</span></td> 
					            <td><i class="material-icons">check</i></td>
					            <td>{{$producto->preciopublico}}</td>
					            <td>
                                {!!link_to_route('producto.edit', $title = 'Modificar', $parameters = $producto->id , $attributes = ['class'=>'btn waves-effect waves-teal'])!!}
                                </td>
                                <td>
                                    <a href="{{ route('producto.delete', $producto->id) }}" onclick="return confirm('Esta seguro de eliminar este producto?')"> <i class="material-icons">delete_forever</i></a>
                                </td>
					          </tr>
                            </tbody>
                            @endforeach
					    </table>
                        
                        {!! $productos->render() !!}
                	</div>    					
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/tableToD3Chart.js"></script>-->
    <script type="text/javascript">
    $(function(){
        $("#all").click(function () {
              $('.item').prop('checked', this.checked);
        });
    });

    $(document).ready(function($) {

        $('.collapsible').collapsible();


        //$('.collapsible-header').removeClass('white-text').addClass('active');
        $('.button-collapse').sideNav({
            menuWidth: 220, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });

        $('.opentabsearch').click(function(e) {
        	$(this).addClass('hide')
			$('.barsearchtab').removeClass('hide');
			setTimeout(function() {
				$('.barsearchtab').removeClass('col s1').addClass('fullbar');
				$('.barsearchtab input').focus();
			}, 200);
        });

        $('.removebarsearch').click(function(e) {
			$('.barsearchtab').removeClass('fullbar').addClass('col s1');
			setTimeout(function() {
				$('.barsearchtab').addClass('hide');
				$('.opentabsearch').removeClass('hide');
			}, 201);
        });


        

    });
    </script>
</body>

</html>