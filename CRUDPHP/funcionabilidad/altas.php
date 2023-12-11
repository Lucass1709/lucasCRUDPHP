
<html lang="es">
	<head>
	<link rel="stylesheet" href="../css/altaBajaModificacion.css">
	</head>
</html>


<?php 



$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$cl = $_POST['clave'];
$pin = $_POST['pin'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion



if($foto != "none")
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "gestionsubir";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO personas(apellido, nombre, edad,foto,clave, pin) VALUES ('$ape','$nom','$ed','$contenido','$cl','$pin')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	print "se ha insertado un registro"."<br>";
	print "<a class='btn' href='../forms/form-altas.php'>Volver</a>
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
	print "NO se ha generado un registro"."<br>";
	print "<a class='btn' href='../forms/form-altas.php'>Volver</a>
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
}

}
else
print "No se puede subir el archivo";

 ?>
