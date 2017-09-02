<!DOCTYPE html>
<html>

<head>
    <title>ULTRABIKES SHOP ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! Html::style('css/materialize.min.css') !!}
    {!! Html::style('css/owl.carousel.min.css') !!}
    {!! Html::style('css/tabs-vertical.css') !!}
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
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

    /*** ESTILOS CARRUSEL COLOR ***/
    .colorcarousel .itemcarru{
    	width: 80px;
    	height: 80px;
    }
    /** CIERRA ESTILOS CARRUSEL COLOR ***/

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

                <!-- INICIO FORM -->
                {!! Form::model($producto, ['route'=>['producto.update', $producto->id], 'method'=>'PUT']) !!}
                @include('admin.forms.formproducto')
                {!!Form::close()!!}
                <!-- FINAL FORM -->               
                
            </div>
        </div>
    </div>

    {!! Html::script('js/jquery-2.1.1.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    {!! Html::script('js/owl.carousel.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/tableToD3Chart.js"></script>-->
    <script type="text/javascript">
    $(document).ready(function($) {

        $('select').material_select();
        
        $('.collapsible').collapsible();
        $('.parallax').parallax();
        $('.scrollspy').scrollSpy();
        $('.modal').modal();

   

        //$('.collapsible-header').removeClass('white-text').addClass('active');
        $('.button-collapse').sideNav({
            menuWidth: 220, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });


        $('.newcategoryinpt').slideUp('fast');

        $('.newbtncategory').click(function(event) {
        	$('.newcategoryinpt').toggle('fast')
        });

        // ESXPANDIR COLLAPSIBLES 
        function expandAll(){
		  $(".collapsible-header").addClass("active");
		  $(".collapsible-body").css("display", "block");
		}

		function collapseAll(){
		  $(".collapsible-header").removeClass(function(){
		    return "active";
		  });
		  $(".collapsible-body").css("display", "none");
		}
        // CIERRA EXP COLLAPSIBLES 

     
        $('#carousel02').owlCarousel({
	        loop: false,
	        margin: 10,
	        autoplayHoverPause: true,
	        lazyLoad: true,
	        autoplay: false,
	        //thumbs: true,

	        // When only using images in your slide (like the demo) use this option to dynamicly create thumbnails without using the attribute data-thumb.
	        //thumbImage: false,

	        // Enable this if you have pre-rendered thumbnails in your html instead of letting this plugin generate them. This is recommended as it will prevent FOUC
	        //thumbsPrerendered: true,

	        // Class that will be used on the thumbnail container
	        //thumbContainerClass: 'owl-thumbs',

	        // Class that will be used on the thumbnail item's
	        //thumbItemClass: 'owl-thumb-item',
	        responsiveClass: true,
	        responsive: {
	            0: {
	                items: 1,
	                nav: false
	            },
	            600: {
	                items: 1,
	                nav: false
	            },
	            1000: {
	                items: 1,
	                nav: false,
	                loop: true
	            }
	        }

    	});

    	$('#carousel03').owlCarousel({
	        loop: true,
	        margin: 10,
	        autoplayHoverPause: true,
	        lazyLoad: true,
	        autoplay: true,
 			responsiveClass: true,
	        responsive: {
	            0: {
	                items: 2,
	                nav: false
	            },
	            600: {
	                items: 3,
	                nav: false
	            },
	            1000: {
	                items: 4,
	                nav: false,
	                loop: true
	            }
	        }

    	});

        

    });
    </script>
</body>

</html>