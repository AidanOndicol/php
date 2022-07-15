<?php
include_once("funciones.php");
$l = $_REQUEST['l'];
$a = $_REQUEST['a'];

$rectangulo = new CRectangulo($l, $a);
$rectangulo->mostrarDatos();
?>