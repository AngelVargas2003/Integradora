<?php
 require('verificarsessionemp.php')
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    
	<title>Consultas</title>

    <link rel="stylesheet" href="css/menuconsu.css">
	<link rel="stylesheet" href="css/tabla.css">
    <link rel="icon" href="img/VD2021.png" type="image/x-icon">

</head>
<body>
	<div id="app">
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<a href="cerrarsession.php"><h1>VIVA DENT    <img src="img/VD2021.png"></h1></a>
                
			</div>
			<nav class="menu">
				<a href="Inicio.html">Inicio</a>
				<a href="ReservarcitasA.php">Reservar Citas</a>
				<a href="newconsultas.php">Consultas</a>
				<a href="registroclientes.html">Registrarse</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>

<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			
			<a href="newclie.html">Clientes</a>
			<a href="conserv.html">Servicios</a>
			<a href="conemp.html">Empleados</a>
			<a href="conhorarios.html">Horarios</a>
			<a href="concitasgen.html">Citas en general del consultorio</a>
			<a href="conmago.html">Consultas del mes de agosto</a>
			<a href="convan.html">Citas de la Dra.Vanessa</a>
			
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>


</div>

<!-- VUE -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<!-- AXIOS -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
<script src='js/ifrmeTclientes.js'></script>


</body>
</html>