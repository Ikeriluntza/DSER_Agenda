<?php

require_once("../modelo/modeloAgenda.php");
$consultar = new nuevoContacto();

if (isset($_POST['nombre']) 
        && isset($_POST['apellido1']) 
        && isset($_POST['apellido2']) 
        && isset($_POST['grupo'])) {
    
    $p_Nombre = $_POST['nombre'];
    $p_Apellido1 = $_POST['apellido1'];
    $p_Apellido2 = $_POST['apellido2'];
    $p_Grupo = $_POST['grupo'];
} else {
    $p_Nombre = "";
    $p_Apellido1 = "";
    $p_Apellido2 = "";
    $p_Grupo = "";
}
$pd = $consultar->lista_consultar($p_Nombre, $p_Apellido1, $p_Apellido2, $p_Grupo);

require_once("../vista/vistaAgenda.php");
?>

