<?php
/* usamos el método: mysqli_connect(recibe 4 parametros)

*/
echo "hola BD";
$conexion = mysqli_connect("localhost", "root", "", "clasesondemand");

//true o false

if(mysqli_connect_errno()){
    echo "error";
}else{
    echo "se conecto de forma correcta";
}
/*
$consultas = mysqli_query( $conexion, "select * from usuarios");
$listadoArray = mysqli_fetch_assoc($consultas);

if(!$listadoArray) {
    var_dump(mysqli_error($conexion));
    exit;
}

echo $listadoArray['apellido'];
*/


// $consultas = mysqli_query($conexion, "select * from usuarios");
// echo "<pre>";
// var_dump($consultas);
// echo "<pre>";

