<?php
include 'conexion.php';


$insert = mysqli_query($conexion,"INSERT INTO usuarios (id_usuario, nombre, apellido, dni_usuario, telefono, correo, usuario, contraseña) VALUES (2, 'Carlos', 'Quiroz', '52369874', '1144785236', 'cq@gmail.com', 'carlos', '2585345678')");
echo "<pre>";
var_dump($insert);
echo "<pre>";
if(!$insert) {
    var_dump(mysqli_error($conexion));
    exit;
}