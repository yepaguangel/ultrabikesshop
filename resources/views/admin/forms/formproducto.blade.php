<style type="text/css">
	.modal{
		top:0px !important;
	}
</style>

<div class="col s12 m12 l10 left card" style="padding: 0 0">
	<nav style="box-shadow: none">
		<div class="nav-wrapper white">
			<a href="#" class="brand-logo grey-text darken-4 flow-text" style="padding-left: 8px">
			
			</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li>
				<button id="registrarBtn" class="white-text darken-4 btn" type="submit">Guardar</buttton>
				</li>
				<li><a class="grey-text darken-4" href="badges.html"><i class="material-icons left">public</i>Publicar</a></li>
				<li>
				
				
				</li>
				<li><a class="grey-text darken-4" href="collapsible.html"><i class="material-icons left">delete</i>Eliminar</a></li>
			</ul>
		</div>
	</nav>
	<div class="fixed-action-btn toolbar" style="z-index: 1000">
	    <a class="btn-floating btn-large red">
	      <i class="large material-icons">mode_edit</i>
	    </a>
	    <ul>
	      <li class="waves-effect waves-light"><a href="#!" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Guardar"><i class="material-icons">save</i></a></li>
	      <li class="waves-effect waves-light"><a href="#!" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Publicar"><i class="material-icons">public</i></a></li>
	      <li class="waves-effect waves-light"><a href="#!" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Deshabilitar"><i class="material-icons">speaker_notes_off</i></a></li>
	      <li class="waves-effect waves-light"><a href="#!" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></li>
	    </ul>
	</div>
	<div class="col s12 m4">
		<div class="card">
    		<div id="carousel02" class="owl-carousel">
                <div>
                	<i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i>
                	{{ HTML::image('img/saguaro-300x300.png', 'Llanta vitoria saguaro') }}
                </div>
                <div><i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i>{{ Html::image('img/saguaro-300x300.png', 'Llanta vitoria saguaro') }}</div>
                <div><i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i><img src="../img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></div>
                <div><i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i>{{ Html::image('img/saguaro-300x300.png', 'Llanta vitoria saguaro') }}</div>
                <div><i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i><img src="../img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></div>
                <div><i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i>{{ Html::image('img/saguaro-300x300.png', 'Llanta vitoria saguaro') }}</div>
                <div><i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i><img src="../img/saguaro-300x300.png" alt="Llanta vitoria saguaro"></div>
                <div><i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i>{{ Html::image('img/saguaro-300x300.png', 'Llanta vitoria saguaro') }}</div>
            </div>
        	<label>Añade Imágenes de tus productos dando click sobre cada pestaña del carrusel</label>
        </div>
        <div class="file-field input-field col s12" style="float: none">
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text">
	      </div>
	    </div>
	     @include('admin.forms.modalimagenes')
	     <!--
       	<nav>
	    	<div class="nav-wrapper white col s12">
	    		<a href="#!">
					<input type="checkbox" id="test5" checked="checked" />
					<label for="test5">Habilitar Sugerencias</label>
				</a>
	    	</div>
	    </nav>
	    -->
	</div>
	<div class="col s12 m5 tabs-vertical">
		<a class="waves-effect waves-light btn" onClick="expandAll();"><i class="material-icons left">fullscreen</i>Expand All</a>
			<a class="waves-effect waves-light btn" onClick="collapseAll();"><i class="material-icons left">fullscreen_exit</i>Collapse All</a>
		<div class="card">                		
    		 <ul class="collapsible" data-collapsible="expandable">
			    <li>
			      <div class="collapsible-header"><i class="material-icons">bookmark</i>Referencia</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Referencia del Producto')!!}
						{!!Form::text('referencia',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header active"><i class="material-icons">photo</i>Nombre del Producto</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Nombre del Producto')!!}
						{!!Form::text('nombre',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">attach_money</i>Precio Almacen</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Digite el precio sin puntos ni comas')!!}
						{!!Form::text('precioalmacen',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">attach_money</i>Precio Público</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Digite el precio sin puntos ni comas')!!}
						{!!Form::text('preciopublico',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">check_box</i>Linea</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Linea')!!}
						{!!Form::text('linea',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			     <li>
			      <div class="collapsible-header"><i class="material-icons">check_box</i>Marca</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Marca')!!}
						{!!Form::text('marca',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			    <li class="disable">
			      <div class="collapsible-header"><i class="material-icons">invert_colors</i>Colores</div>
			      <div class="collapsible-body">
			      	<div id="carousel03" class="owl-carousel colorcarousel">
			      		<div class="itemcarru card center" style="padding: 0 0;position: relative;">
			      			<img src="../img/bomba-amarilla.jpg" alt="" class="responsive-img" style="position: absolute;left:0">
			      			<div class="file-field input-field center" style="display: inline-block;margin: 0 0;float: none;background-color: transparent;">
						      <div class="btn btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="subir imágen de color" style="min-width: 45px;display: inline-block;float: none">
						        <span>+</span>
						        <input type="file" multiple>
						      </div>
						      <div class="file-path-wrapper col s12" style="padding: 0 0;margin: 0 0">
						        <input class="file-path validate" type="text" placeholder="" style="height: inherit !important;font-size: .8em !important;margin-top:20px">
						      </div>
						    </div>
			      		</div>
			      		<div class="itemcarru card center" style="padding: 0 0;position: relative;">
			      			<div class="valign-wrapper" style="padding: 0 0;height: 100%;width: 100%">
			      				<div class="valign center" style="width: 100%">
			      					<a href="#" class="btn btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Añadir Color">+</a>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
			      	<label>Recomendación: tamaño de imágen min-max de 80px X 80px</label>
			      	<div class="col s12" style="border:1px dashed #f00;display: block;float: none">
			      		<label>NOTA YEISSON: La idea principal es que si no existe ningun otro color se muestre el btn de añadir color y si añaden otros colores este boton de añadir debe quedar de ultimo.</label>	
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">photo_size_select_small</i>Medidas</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		<label>Medidas Disponibles</label>
			      		<input type="text" name="" value="">
			      		<a href="#" class="btn btn-flat waves-effect waves-teal" style="text-transform: capitalize;padding-left: 8px;padding-right: 8px">+ Añadir medida</a>
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">store</i>Cantidad en Stock</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
						{!!Form::text('stock',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">description</i>Descripción</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Descripcion del Producto')!!}
						{!!Form::text('descripcion',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			     <li>
			      <div class="collapsible-header"><i class="material-icons">description</i>Oferta</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Oferta: Si=1 - No=0')!!}
						{!!Form::text('oferta',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">note_add</i>Anotaciones</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Palabras claves (separe por comas)')!!}
						{!!Form::text('anotaciones',null)!!}
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">play_circle_filled</i>Multimedia</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Multimedia (Codigo Youtube, Ej: watch?v=pFxUmqcdWD0)')!!}
						{!!Form::text('multimedia',null)!!}
			      	</div>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header active"><i class="material-icons">play_circle_filled</i>Categoria</div>
			      <div class="collapsible-body">
			      	<div class="input-field">
			      		{!!Form::label('Codigo de Categoria (Seleccione del Listado)')!!}
						{!!Form::text('idcategoria',null,array('required' => 'required'))!!}
			      	</div>
			      </div>
			    </li>
			 </ul>
        </div>
	</div>

	<div id="category" class="col s12 m3 scrollspy">
		<blockquote>
			<h4 class="flow-text">CATEGORÍAS</h4>
			<p>Filtra este producto por categorías o crea una propia categoría</p>
		</blockquote>
		<div class="card">
    		<div class="collection" style="max-height: 380px;overflow-y: auto">
    			@foreach($categorias as $categoria)
    				<a href="javascript:void(0)" onclick="agregarCateg('{{ $categoria->id}}')" class="collection-item">{{strtoupper($categoria->nombrecategoria)}}</a>
    			@endforeach
		    </div>
		    <div class="card-action">
		    	
		    	{{ link_to('admin/category/create', $title = 'Nueva Categoria', $attributes = ['class'=>'newbtncategory']) }}
		    </div>
	    </div>
	</div>
</div>
<script type="text/javascript">

	function agregarCateg(num){
		var x = document.getElementsByName("idcategoria")[0];
		x.value=num;
    }


</script>