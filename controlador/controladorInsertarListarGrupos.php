<?php

require_once("../modelo/modeloAgenda.php");
$nuevo = new nuevoContacto();
$listadoGrupos = $nuevo->listaGrupo();
require_once("../vista/nuevoContacto.php");
?>
