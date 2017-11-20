<?php
require_once("../modelo/modeloAgenda.php");
$consultar = new Agenda();
$pd = $consultar->listaAgenda();
require_once("../vista/vistaModificarContacto.php");
?>