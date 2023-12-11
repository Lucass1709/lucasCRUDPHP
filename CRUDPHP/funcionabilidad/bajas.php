<html lang="es">
</html>


<?php 



$pin = $_POST['pin'];

$base = "gestionsubir";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}

$cadena= "DELETE FROM personas  WHERE pin = '$pin'";  

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha eliminado un registro"."<br>";
	echo "<a class='btn' href='../forms/form-bajas.php'>Volver</a>
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
			text-decoration:none;
		}
	</style>";

}
else{
	echo "NO se ha eliminado un registro"."<br>";
	echo "<a class='btn' href='../forms/form-bajas.php'>Volver</a>
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