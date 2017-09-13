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

                @foreach($imagenesProd as $imgpro)
                <div id="{{$imgpro->id}}">
                	<i class="material-icons btn btn-flat waves-effect btn-floating hoverable" style="line-height:40px;position: absolute;right: 8px;top:8px;font-size: 2em">close</i>
                	{{ HTML::image('filegallery/'.$imgpro->claveimg.'.'.$imgpro->extension, $imgpro->descrip) }}
                	<label>{{$imgpro->descrip}}</label>
                </div>
                @endforeach

            </div>
            {{ Form::hidden('imagen', $producto->imagen, array('id'=>'imagen')) }}
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
    		 <ul class="collapsible" data-collapsible="accordion">
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
			      	
			      	<div id="inputs" class="row">
				      	<div class="input-field col s12 m12">
				      		<label>Color</label>
				      		<input type="text" name="txtTexCol" id="txtTexCol" value="">
				      	</div>
				      	<a href="#" class="btn btn-flat waves-effect waves-teal" onClick="addColor()" style="text-transform: capitalize;padding-left: 8px;padding-right: 8px">+ Añadir Color</a>
			      	</div>
			      	<div class="row">
			      		<ul class="collection" id="collec2"></ul>
			      	</div>
			      	{!!Form::hidden('color',null, array('id'=>'color'))!!}
			      	
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">photo_size_select_small</i>Medidas</div>
			      <div class="collapsible-body">
			      	<div id="inputs" class="row">
				      	<div class="input-field col s12 m6">
				      		<label>Medida</label>
				      		<input type="text" name="txtTexMed" id="txtTexMed" value="">
				      	</div>
				      	<div class="input-field col s12 m6">
				      		<label>Precio</label>
				      		<input type="text" name="txtPreMed" id="txtPreMed" value="">
				      	</div>
				      	<a href="#" class="btn btn-flat waves-effect waves-teal" onClick="addMedida()" style="text-transform: capitalize;padding-left: 8px;padding-right: 8px">+ Añadir medida</a>
			      	</div>
			      	<div class="row">
			      		<ul class="collection" id="colec1"></ul>
			      	</div>
			      	{!!Form::hidden('tamano',null, array('id'=>'tamano'))!!}
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
						{!!Form::textarea('descripcion',null,array('class'=>'form-control', 'rows' => 10, 'cols' => 40, 'required' => 'required'))!!}
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
						{!!Form::textarea('anotaciones',null, array('class'=>'form-control', 'rows' => 10, 'cols' => 40)) !!}
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
			    	<div class="collapsible-header"><i class="material-icons">card_membership</i>Flete</div>
			      	<div class="collapsible-body">
				    	<div class="input-field">
						    {{ Form::select('flete', ['Disandina', 'Schwalbe', 'Medio', 'Economico', 'Gratis']) }}
					    </div>
				    </div>
			    </li>

			 </ul>
			  {{ Form::hidden('idcategoria', null, array('id'=>'idcategoria')) }}
        </div>
	</div>

	<div id="category" class="col s12 m3 scrollspy">
		<blockquote>
			<h4 class="flow-text">CATEGORÍAS</h4>
			<p>Filtra este producto por categorías o crea una propia categoría</p>
		</blockquote>
		<div class="card">

		    <ul class="collection" style="max-height: 380px;overflow-y: auto">
    			@foreach($categorias as $categoria)
    			<li class="collection-item">

    				@if (verArray($categoria, $producto->idcategoria))
    				 	<input type="checkbox" checked="checked" id="test{{$categoria->id}}" class="options" value="{{$categoria->id}}" onclick="agregarCateg('{{ $categoria->id}}')" />
    				@else
    					<input type="checkbox" id="test{{$categoria->id}}" class="options" value="{{$categoria->id}}" onclick="agregarCateg('{{ $categoria->id}}')" />
    				@endif
			      
			      	<label for="test{{$categoria->id}}">{{strtoupper($categoria->nombrecategoria)}}</label>
			</li>
    			@endforeach
		    </ul>
		    <div class="card-action">
		    	
		    	{{ link_to('admin/category/create', $title = 'Nueva Categoria', $attributes = ['class'=>'newbtncategory']) }}
		    </div>
	    </div>

	</div>
</div>
<script type="text/javascript">
	listarColor();
	listarMedida();

	function agregarCateg(num){
		var values = $('input:checkbox:checked.options').map(function () {
		  return this.value;
		}).get();
		$('#idcategoria').val(values);
    }

	$(document).ready(function($) {
		$('#carousel02').on('click', '.owl-item', function(e) {
			//REMOVEMOS ITEM DEL CARRUSEL
			var carousel = $('#carousel02').data('owl.carousel');
			e.preventDefault();
			$("#carousel02").trigger('remove.owl.carousel', [$(this).index()]).trigger('refresh.owl.carousel');
			//REMOVEMOS ITEM DEL CAMPO DE TEXTO OCULTO 
			var id = $("#carousel02 .owl-item.active div").attr('id');
			var y = $('#imagen').val().split(',');
			y.splice( $.inArray(id, y), 1 );
			$('#imagen').val(y);
			Materialize.toast('Imagen eliminada del producto, Cod: '+id, 2000);
        });

    });

    function listarMedida()
    {

		$("ul#colec1").empty();
    	var arrayText = [];
		if( $('#tamano').val() !== '') arrayText = JSON.parse( $('#tamano').val() );
		jQuery.each(arrayText, function(i, val) {
		   	$("ul#colec1").append('<li class="collection-item">'+ val.med +' + '+ val.pre +'<a href="#" onClick="deleteMedida('+ i +')" class="secondary-content"><i class="material-icons">delete</i></a></li>');
		});
    }

	function addMedida(){
		if( $('#txtPreMed').val()!=='' && $('#txtTexMed').val()!=='' )
		{
			var arrayText = [];
			if( $('#tamano').val() !== '') arrayText = JSON.parse( $('#tamano').val() );
			var data = {};
			data.med = $('#txtTexMed').val();
			data.pre = $('#txtPreMed').val();
			arrayText.push(data);
			$('#tamano').val( JSON.stringify(arrayText) );
		}
		$('#txtPreMed, #txtTexMed').val('');
		listarMedida();
	}

	function deleteMedida(indexArray)
	{
		var arrayText = JSON.parse( $('#tamano').val() );
		var deleteItem = arrayText.splice(indexArray,1);
		$('#tamano').val( JSON.stringify(arrayText) );
		listarMedida();
	}

	//---------------------

	function listarColor()
    {

		$("ul#collec2").empty();

    	var arrayText = [];
		if( $('#color').val() !== '') arrayText = JSON.parse( $('#color').val() );
		jQuery.each(arrayText, function(i, val) {
		   	$("ul#collec2").append('<li class="collection-item">'+ val.color + '<a href="#" onClick="deleteColor('+ i +')" class="secondary-content"><i class="material-icons">delete</i></a></li>');
		});
    }

	function addColor(){
		if( $('#txtTexCol').val()!=='' )
		{
			var arrayText = [];
			if( $('#color').val() !== '') arrayText = JSON.parse( $('#color').val() );
			var data = {};
			data.color = $('#txtTexCol').val();
			arrayText.push(data);
			$('#color').val( JSON.stringify(arrayText) );
		}
		$('#txtTexCol').val('');
		listarColor();
	}

	function deleteColor(indexArray)
	{
		var arrayText = JSON.parse( $('#color').val() );
		var deleteItem = arrayText.splice(indexArray,1);
		$('#color').val( JSON.stringify(arrayText) );
		listarColor();
	}
	</script>