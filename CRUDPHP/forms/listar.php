<?php
include 'menu.php';
?>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="../css/respuestas.css">
	</head>
	<body>
	<h3 class="tablatitulo">LISTADO DE REGISTROS</h3>

	<table class="tabla">
		<caption class="ttitulo">Lista de usuarios</caption>
		<thead class="ttitulo">
			<tr>
			<th>ID</th>
			<th>Apellido</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Foto</th>
			<th>Pin</th>
			<th>Clave</th>
			</tr>
		</thead>
	<?php 

$base = "gestionsubir";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "SELECT * FROM personas ";

$consulta = mysqli_query($Conexion,$cadena);

while(  $registro = mysqli_fetch_row($consulta)   ){
	echo "<tr class='trmain'>";
	echo "<th>".$registro[0]."</th><th>".$registro[1]."</th><th>".$registro[2]."</th><th>".$registro[3]."</th><th><img src='data:image/jpeg;base64,".base64_encode($registro[6])."' width='200px'/></th><th>".$registro[5]."</th><th>".$registro[4]."</th>";
	echo "</tr>";
}
 ?>
    </table>
	</body>
</html>

