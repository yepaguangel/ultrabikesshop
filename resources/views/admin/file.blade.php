<!DOCTYPE html>
<html>

<head>
    <title>ULTRABIKES SHOP ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! Html::style('css/materialize.min.css') !!}
    {!! Html::style('css/owl.carousel.min.css') !!}
    {!! Html::style('css/tabs-vertical.css') !!}
    <!--<link href="css/c3.css" rel="stylesheet">-->
</head>
<body>
    <div class="container">
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar archivos</div>
        <div class="panel-body">
          
          
            {{Form::open(['route'=>'file.store', 'method'=>'POST', 'files'=>true])}}
            <div class="form-group">
              <label class="col-md-4 control-label">Nuevo Archivo</label>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
  </div>
</div>
</body>

 