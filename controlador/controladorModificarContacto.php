<?php

require_once("../modelo/modeloAgenda.php");
$modificar = new Modificar();

$update = $modificar->lista_modificar($_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], 
        $_POST['telefono'], $_POST['email1'], $_POST['email2'], $_POST['email3'], $_POST['grupo1'], 
        $_POST['grupo2'], $_POST['grupo3'],$_POST["contactos"]);

require_once("../controlador/controladorListarContactosModificar.php");
die();
?>