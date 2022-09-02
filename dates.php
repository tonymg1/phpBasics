<?php

#1 Establecer zona horaria
date_default_timezone_set("Europe/Madrid");

print "Fecha y hora actual: <br><br>";

$fecha_ib = date("Y-m-d G:i:s");
echo $fecha_ib;

?>