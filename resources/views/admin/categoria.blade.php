<!DOCTYPE html>
<html>

<head>
    <title>ULTRABIKES SHOP ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! Html::style('css/materialize.min.css') !!}
    {!! Html::style('css/c3.css') !!}
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
    .cajatexto{
        padding: 0 0;
        border:1px solid #ccc;
        margin-bottom: -4px;
        padding-left:10px;
        box-sizing: border-box;
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
								<h4>Listado Categoria</h4>
							</blockquote>
							<div class="col s12" style="padding:0 0">
								<a class="btn waves-effect waves-teal right categorybuild">Crear Categoría</a>
								<a class="btn waves-effect waves-teal btn-flat right opentabsearch" href="#" style="margin: 1px 2px">Buscar <i class="material-icons right">search</i></a>
							 	<div class="input-field col s1 hide barsearchtab right" style="margin-top: -8px;padding:0 0;transition: all linear .2s">
							  	  <i class="material-icons prefix removebarsearch" style="margin-top: 7px">close</i>
							      <input type="text" id="autocomplete-input" class="autocomplete">
							      <label for="autocomplete-input">Buscar Por Nomber o Ref:</label>
							  	</div>
							</div>
					    </div>		
                	</div>
                    <div class="col s12 buildinput">

                         {!! Form::open(['route'=>'categoria.store', 'method'=>'POST']) !!}
                            <div class="input-field col s12">
                                {!!Form::label('Nombre de la Categoria')!!}
                                {!!Form::text('nombrecategoria',null, array('class' => 'cajatexto'))!!}
                                <button type="submit" class="btn waves-effect">Crear</button>
                            </div>
                        {!!Form::close()!!}

                    </div>
                	<div class="card col s12" style="overflow-x: auto" style="width: 100%">					    
					    <table class="bordered">
					        <thead>
					          <tr>
					          	<th class="center tooltipped" data-position="top" data-delay="50" data-tooltip="seleccionar todos"><input type="checkbox" id="all"/><label for="all"></label></th>
					          	<th>Categoría</th>
					            <th>Productos en Stock</th>
					            
                                <th>Eliminar</th>
					          </tr>
					        </thead>

					        <tbody>
                                @foreach($categorias as $categoria)
					          <tr>
					          	<td class="center"><input class="item" type="checkbox" id="test2" /><label for="test2"></label></td>
                                <td>
                                {!! Form::model($categoria, ['route'=>['categoria.update', $categoria->id], 'method'=>'PUT']) !!}
                                {!!Form::label('Nombre Categoria')!!}
                                {!!Form::text('nombrecategoria',null)!!}
                                    <!--
                                    <input type="text" name="category" value="" style="padding: 0 0;border:1px solid #ccc;margin-bottom: -4px;padding-left:10px;box-sizing: border-box;">
                                    -->
                                    <button type="submit" class="btn-floating btn-flat waves-effect waves-teal right">
                                    <i class="material-icons grey-text">update</i>
                                    </button> 
                                    {!!Form::close()!!}             
                                </td>
					            <td>
                                <a class="truncate nameproduct btn-flat waves-effect" href="#modal1" onclick="abrirFrame('{{$categoria->id}}')">20 Productos en stock</a>
                                </td>                                
                                <td class="center">
                                {!! Form::open(['route'=>['categoria.destroy', $categoria->id], 'method'=>'DELETE', 'onsubmit' => 'return confirm("Esta Seguro de Eliminar Esta Categoria ?")']) !!}
                                <button type="submit" class="btn-floating btn-flat waves-effect waves-teal">
                                    <i class="material-icons grey-text">delete_forever</i>
                                </button>
                                {!!Form::close()!!}

                                </td>
					          </tr>
                              @endforeach
					         
					        </tbody>
					    </table>
                        <!--
            			<ul class="pagination right">
						    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
						    <li class="active"><a href="#!">1</a></li>
						    <li class="waves-effect"><a href="#!">2</a></li>
						    <li class="waves-effect"><a href="#!">3</a></li>
						    <li class="waves-effect"><a href="#!">4</a></li>
						    <li class="waves-effect"><a href="#!">5</a></li>
						    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
						</ul>
                        -->
                	</div>    					
                </div>
            </div>
        </div>
    </div>

     <!-- Modal Structure -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content" style="padding: 0 0">}
        
         <iframe id="frmList" src="" width="95%" frameborder="0" scrolling="auto" height="400"></iframe>
        <!--
         <ul class="collection with-header">
            <li class="collection-header"><h4>AQUI NOMBRE DE LA CATEGORÍA</h4></li>
            <li class="collection-item"><div>Llanta MTB Maxxis AGGRESSOR 26X2.30 AR 2C/EXO/TR/60TPI<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>LLANTA MTB SCHWALBE RACING RALPH EVOLUTION 27.5*2.10 Plegable<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>LLANTA SCHWALBE LLANTA SCHWALBE LAND CRUISER ACTIVE 27.5X2.10 Rígida<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>LLANTA SCHWALBE ONE 700*23c Plegable<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>Llanta MTB Maxxis AGGRESSOR 26X2.30 AR 2C/EXO/TR/60TPI<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>LLANTA MTB SCHWALBE RACING RALPH EVOLUTION 27.5*2.10 Plegable<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>LLANTA SCHWALBE LLANTA SCHWALBE LAND CRUISER ACTIVE 27.5X2.10 Rígida<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>LLANTA SCHWALBE ONE 700*23c Plegable<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
          </ul>
          -->
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
        </div>
      </div>

    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function($) {

        $('.collapsible').collapsible();
        $('.modal').modal();


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


        $(function(){
            $("#all").click(function () {
                  $('.item').prop('checked', this.checked);
            });
        });

        $('.buildinput').slideUp('fast');

        $('.categorybuild').click(function(event) {
            $('.buildinput').slideDown('fast');            
        });



    });

    function abrirFrame(idcat){
        $('#frmList').attr('src','http://localhost:8000/admin/producto/filtro/'+idcat);
        
    }

    </script>

</body>

</html>

<?php $message=Session::get('message')?>
@if ($message == 'store')
    <script>
        Materialize.toast('Nueva Categoria Creada!', 4000)
    </script>
@endif  