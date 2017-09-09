<!DOCTYPE html>
<html>
<head>
	<title>Login FaroCms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="../css/owl-carousel.min.css"> -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
	<style type="text/css" media="screen">
		 body {
		    display: flex;
		    min-height: 100vh;
		    flex-direction: column;
		  }

		  main {
		    flex: 1 0 auto;
		  }

		  .row{
		  	margin-bottom: 0px
		  }
	</style>
</head>
<body class="grey darken-4">
	<div class="row">
		<div class="parallax-container" style="position: absolute;width: 100%;height: 100%;left: 0;top:0">
      		<div class="parallax"><img src="../img/bg-bannerutbs.jpg"></div>
    	</div>
    	
		<div class="container valign-wrapper" style="min-height: 100vh">
			<div class="row valign center">
				<div class="col s12 m6" style="display: inline-block;float: none;min-width: 350px;max-width: 100%">
					<div class="card grey darken-4 hoverable">
			            <div class="card-content white-text">
			              <span class="card-title">
			          <img src="../img/ultra-bkikes-shop-logo.svg" alt="ultra bikes cms" style="max-width: 280px">
			              </span>
			              @include('alerts.error')
							{!! Form::open(['route'=>'login.store', 'method'=>'POST' ,'class'=>'row left-align']) !!}
							<div class="input-field col s12">
								{!!Form::label('Correo')!!}
								{!!Form::text('email',null,['class'=>'validate'])!!}
							</div>
							<div class="input-field col s12">
								{!!Form::label('Contraseña')!!}
								{!!Form::password('password',null,['class'=>'validate'])!!}
							</div>
							<div class="col s12">
								<button id="registrarBtn" class="waves-effect orange darken-1 btn" type="submit"> Ingresar </buttton>
							</div>
							{!!Form::close()!!}

							<!--
			              <form class="row left-align" action="login_submit" method="get" accept-charset="utf-8">
			              	<div class="input-field col s12">
								<input id="email" type="email" class="validate">
          						<label for="email" data-error="wrong" data-success="right">Email</label>
					        </div>
					        <div class="input-field col s12">
					          	<input id="password" type="password" class="validate">
          						<label for="password">Password</label>
					        </div>
			              </form>
			              -->
			              
			            </div>
			            <!--
			            <div class="card-action">
			              <a href="#">Reset password</a>
			              <a href="#" id="btnIngresar">Ingresar</a>
			            </div>
			            -->
			        </div>
				</div>
			</div>
		</div>
	</div>
	<script src="../js/jquery-2.1.1.min.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script type="text/javascript">
		$('.parallax').parallax();

		$('#btnIngresar').click(function(){
			if( $('#email').val() === '' ){ alert('Ingrese Usuario'); return false; }
			if( $('#password').val() === '' ){ alert('Ingrese Contraseña'); return false; }

			
		})
		@if(session()->has('message.color'))
		    var $toastContent = $('<span>{!! session('message.content') !!}</span>');
  			Materialize.toast($toastContent, 3000, '{{ session('message.color') }}');
		@endif
		
	</script>
</body>
</html>