<!DOCTYPE html>
<html>

<head>
    <title>ULTRABIKES SHOP ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../css/owl-carousel.min.css"> -->
    <link href="css/c3.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">   
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
                    <div class="row">
                        <div class="panel-body">
                            {!! Form::open(['route'=> 'galeriaimg.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                            <div class="dz-message" style="height:120px; border:4px dashed blue;">
                            Arrastre sus Imagenes Aqui
                            </div>
                            <div class="dropzone-previews"></div>
                            <button type="submit" class="btn btn-success" id="submit">Guardar</button>
                            {!! Form::close() !!}
                        </div>

                    </div>
                    <div class="row">
                        @foreach($galimagenes as $img)
                        <div class=" col s6 m3 l3">
                            <div class="card">
                              <div class="card-image valign-wrapper" style="height:250px">
                                <div class="valign" style="width: 100%">
                                    {{ Html::image('filegallery/'. $img->claveimg .'.'. $img->extension, $img->nomoriginal, array('class' => 'responsive-img')) }}
                                </div>
                                <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">delete</i></a>
                              </div>
                              <div class="card-content">
                                {!!Form::label('Descripcion Imagen')!!}
                                <span class="card-title" contenteditable="true">
                                {!!Form::text('descrip',$img->descrip, array('id'=>'txt'.$img->id, 'onblur'=>'act('.$img->id.')'))!!}
                                <input type="hidden" name="token" value="{{csrf_token()}}" id="token">
                                </span>
                              </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                {!! $galimagenes->render() !!}

            </div>
        </div>
    </div>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/tableToD3Chart.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script type="text/javascript">
     function act(id){
        var URLdomain = window.location.host;

        var route = 'http://' + URLdomain + "/admin/galeriaimg/" + id;
        var txt = document.getElementById('txt'+id);
        var text = txt.value;
        var token = document.getElementById('token');

        if(text !== '')
        {
             $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN':token.value},
                data: {descrip:text},
                dataType: "json",
                method: "PUT",
                success: function(result)
                {
                    if (result.msg == 'ok')
                    {
                        console.log('Dato Actualizado')
                    }
                    else
                    {
                        alert('!Ups Lo Sentimos, Ocurrio un problema al actualizar datos');
                    }
                },
                fail: function(){
                },
                beforeSend: function(){
                }
            });
        }
       
    }


    $(document).ready(function($) {

        Dropzone.options.myDropzone = {
            maxFiles: 10,
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 100,
            createImageThumbnails: true,
            addRemoveLinks:true,
            acceptedFiles: ".jpeg,.jpg",
            autoDiscover: false,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("Hecho", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };



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