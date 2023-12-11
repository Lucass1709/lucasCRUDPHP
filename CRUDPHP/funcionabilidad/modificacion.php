<html lang="es">
</html>


<?php 




$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$cl = $_POST['clave'];

$base = "gestionsubir";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}

$cadena = "UPDATE  personas SET nombre = '$nom', edad = '$ed', clave = '$cl' WHERE apellido = '$ape'";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha modificado un registro"."<br>";
	echo "<a class='btn' href='../forms/form-modificacion.php'>Volver</a>
	<style>
		body{
			display: flex;
			justify-content: center;
			margin: 0;
    		padding: 0;
    		background-color: #B9E6FF;
			margin: 220px;
			font-size: 30px;
		}
		.btn{
			color: black;
    		background-color: #B9E6FF;
			height: 30px;
		}
	</style>";

}else{
	echo "NO se ha modificado un registro"."<br>";
	echo "<a class='btn' href='../forms/form-modificacion.php'>Volver</a>
	<style>
		body{
			display: flex;
			justify-content: center;
			margin: 0;
    		padding: 0;
    		background-color:rgb(187, 79, 187);
			margin: 220px;
			font-size: 30px;
		}
		.btn{
			color: rgb(214, 135, 214);
    		background-color: black;
			height: 30px;
		}
	</style>";
	echo mysqli_error($Conexion);
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>