<?php
echo "Tipos de datos <hr>\n";


echo "Datos escalares<br><br>";

echo "1. Booleanos<br>";
$cierto = True;
echo "Si es cierto: ".$cierto."<br><br>";

echo "2. Enteros<br>";
$entero = 5;
echo "Este es un número entero: ".$entero. "<br><br>";

echo "3 Realaes (float)<br>";
$real = 5.2;
echo "Este es un núnero real: ".$real."<br><br>";

echo "4 Cadenas<br>";
$cadena = "Hola";
echo "Esta es una cadena: ". $cadena. "<hr>\n<br>";



echo "Datos compuestos<br><br>";
echo "1. Arrays<br>";
$miArray = array("lenguaje1" => "Javascript", "lenguaje2 "=> "PHP", "lenguaje3 "=> "Python");
echo "Muestro los componentes de un array asociativo con var_dump<br>";
var_dump($miArray);
echo "<br><br>";

echo "2. Objetos<br>";

$desarrolladores = (object)["tipo1" => "frontend", "tipo2" => "backend", "tipo3" => "fullstack"];
echo "Esto es una variable objeto: ".$desarrolladores ->tipo1. "<br>";
echo "Esto es una variable objeto: ".$desarrolladores ->tipo2. "<br>";
echo "Esto es una variable objeto: ".$desarrolladores ->tipo3. "<br><br>";


echo "3 Callable: Pendiente de ver<br>";
echo "4 Iterables: Pendiente de ver<hr>\n<br>";

echo "Datos Especiales<br>";
echo "1 Resource: Pendiente de ver<br><br>";
echo "2 NULL<br>";
echo "Representa una variable sin valor. <ul>Existen 3 casos: <br><ul>";
echo "<li>Se le ha asignado NULL<br></li>";
echo "<li>No se le ha asignado valor todavía<br></li>";
echo "<li>Se ha destruido con unset()<br></li>";


?>