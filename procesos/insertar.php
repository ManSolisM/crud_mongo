<?php session_start();

include "../clases/Conexion.php";
include "../clases/Crud.php";

$Crud = new Crud();

$datos = array(
    "mascota" => $_POST['mascota'],
    "edad" => $_POST['edad'],
    "especie" => $_POST['especie'],
    "raza" => $_POST['raza'],
    "nombre_dueño" => $_POST['nombreDueño']
);

$respuesta = $Crud->insertarDatos($datos);

// Con este código, atrapamos el error sin que el programa se rompa
if (is_object($respuesta)) { 
    // Si es un objeto, todo salió bien
    $_SESSION['mensaje_crud'] = 'insert';
    header("location:../index.php");
} else {
    // Si NO es un objeto, es el mensaje de error. Lo mostramos en pantalla.
    echo "El programa falló por esta razón: <br>";
    print_r($respuesta);
}
?>