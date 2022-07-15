<?php
include_once("funciones.php");
$n=$_POST['n'];
$t=$_POST['t'];
$s=$_POST['s'];
$f=sueldo($n, $t, $s);
echo $f;
?>