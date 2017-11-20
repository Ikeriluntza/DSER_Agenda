<?php

require_once("../modelo/modeloAgenda.php");
$agenda = new Agenda();
$pd = $agenda->listaAgenda();
require_once("../vista/vistaAgenda.php");
?>
