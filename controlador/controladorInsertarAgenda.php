<?php

require_once("../modelo/modeloAgenda.php");
$agenda = new nuevoContacto();

/* echo 'Nombre:' ,$_POST['nombre'],'ape1:' , $_POST['apellido1']
  , 'ape2:' ,$_POST['apellido2'], 'tlf:' ,$_POST['telefono'], 'mail1:' ,$_POST['email1'], 'mail2:' ,$_POST['email2']
  , 'mail3:' ,$_POST['email3'], 'grupo1:' ,['grupo1'], 'grupo2:' ,$_POST['grupo2'], 'grupo3:' ,$_POST['grupo3']; */

$nombre = filter_input(INPUT_POST, 'nombre');
$apellido1 = filter_input(INPUT_POST, 'apellido1');
$apellido2 = filter_input(INPUT_POST, 'apellido2');
$telefono = filter_input(INPUT_POST, 'telefono');
$email1 = filter_input(INPUT_POST, 'email1');
$email2 = filter_input(INPUT_POST, 'email2');
$email3 = filter_input(INPUT_POST, 'email3');
$grupo1 = filter_input(INPUT_POST, 'grupo1');
$grupo2 = filter_input(INPUT_POST, 'grupo2');
$grupo3 = filter_input(INPUT_POST, 'grupo3');


$insertarContacto = $agenda->insertarContacto($nombre, $apellido1, $apellido2, $telefono, $email1, $email2, $email3, $grupo1, $grupo2, $grupo3);



require_once("../controlador/controladorAgenda.php");
?>
