<?php
include_once 'conex.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
header("Access-Control-Allow-Origin: *");

$consulta = "SELECT * FROM servicios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;
