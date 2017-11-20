<?php

require_once '../modelo/modeloAgenda.php';

$idEliminar = $_GET['idEliminar'];

$eliminar = new eliminarContacto();
$eliminar->delete_contacto($idEliminar);

$agenda = new Agenda();

$pd = $agenda->listaAgenda();

require_once("../vista/vistaAgenda.php");
?>