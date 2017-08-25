<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	@foreach($productos as $producto)
	<li>{{$producto->nombre}}</li>
	@endforeach
 </ul>
</body>
</html>