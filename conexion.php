<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertar</title>
<link rel="icon" href="1.png">
<link rel="stylesheet" href="stylooMaquetado5.css">
</head>

<div id="contenedor">
	<header>
	<center><img id="log"src="1.png"></center>
	</header>
		
	<nav>
	<a href="index.html">INICIO</a>
	<a href="galeria.html">GALERIA</a>
	<a href="sucursales.html">SUCURSALES</a>
	<a href="contacto.html">CONTACTO</a>
	</nav>
	
	
<section>
	
<h1><center>¡El mejor futbolista viste Adidas...!</center></h1>
<center><img id="m"src="17.jpg"></center>
	
</section>	
	
<footer>
	
	<div id="mex">México Nuestros datos© 2021 adidas Mexico S.A. de C.V.</div>
	
	<img id="men"src="6.png"></div>

	</footer>
<center>
<body>

<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="adidas_bd";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die ("error con la conexion");

$nombre= $_POST["nombre"];
$telefono= $_POST["telefono"];
$correo= $_POST["correo"];
$comentario= $_POST["comentario"];

$insertar = "INSERT into adidas VALUES ('$nombre', '$telefono', '$correo', '$comentario')";

$resultado = mysqli_query($conexion, $insertar);
die ("¡Los datos se insertaron correctamente!");

mysqli_close($conexion);
echo ("Los datos se insertaron correctamente");
	
?>
	</center>

</div>
</body>
</html>