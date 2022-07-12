<?php
include 'conexion.php';
//include 'index.html';
//include 'registro.html';

/*
Puedo escribir en la base de datos con lo siguiente
$insert = mysqli_query($conexion,"INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `dni_usuario`, `telefono`, `correo`, `usuario`, `contrasenia`) VALUES (5, 'Mario', 'Quinto', '45657489', '11897521', 'mq@gmail.com', 'Mario123', '25489678');");
echo "<pre>";
var_dump($insert);
echo "<pre>";
if(!$insert) {
    var_dump(mysqli_error($conexion));
    exit;
}
*/

$nombre = $_GET['nombre'];
echo $nombre;

$apellido = $_GET['apellido'];
$dni_usuario = $_GET['dni_usuario'];
$telefono = $_GET['telefono'];
$correo = $_GET['correo'];
$usuario = $_GET['usuario'];
$contrasenia = $_GET['contrasenia'];


//Trabajpo$sqlinsert = "INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `dni_usuario`, `telefono`, `correo`, `usuario`, `contrasenia`) VALUES (NULL, '$nombre', '$apellido', '$dni_usuario', '$telefono', '$correo', '$usuario', '$contrasenia');";
$sqlinsert = "INSERT INTO usuarios (id_usuario, nombre, apellido, dni_usuario, telefono, correo, usuario, contrasenia)  VALUES (NULL, '$nombre', '$apellido', '$dni_usuario', '$telefono', '$correo', '$usuario', '$contrasenia')";
$insert = mysqli_query($conexion,$sqlinsert);
//"INSERT INTO personas (id_usuario, nombre, apellido, dni_usuario, telefono, correo, usuario, contraseña) VALUES (3, 'Mario', 'Quinto', '45657489', '11897521', 'mq@gmail.com', 'Mario123', '25489678')");
echo "<pre>";
var_dump($insert);
echo "<pre>";
if(!$insert) {
    var_dump(mysqli_error($conexion));
    exit;
}


