
<?php
include_once 'conex.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
header("Access-Control-Allow-Origin: *");

$consulta = "SELECT citas.reg, clientes.nombre AS cliente, empleados.nombre As Doctor, citas.fechacit, citas.fechacon, citas.horacon, servicios.nombre As servicio FROM citas, clientes, empleados, servicios 
Where citas.cliente=clientes.id_cliente And citas.empleado=empleados.id_empleados And citas.servicio=servicios.id_servicio And citas.fechacon BETWEEN '2021-08-01' AND '2021-08-31'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;
