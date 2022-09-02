<?php
echo "Esto es una cadena de texo sin almacenar";
echo "<br><br>";

$cadena = "Esto es una cadena de texto almacenada en una variable";
echo $cadena;
echo "<br><br>";

echo "Concatenación de la variable cadena: ".$cadena;
echo "<br><br>";

$cambioCadena = str_replace("almacenada", "remplazada", $cadena);
echo $cambioCadena;
echo "<br><br>";

$cambioCadena2 = str_ireplace("Almacenada", "remplazada", $cadena);
echo $cambioCadena2;
echo "<br><br>";

echo str_repeat($cadena, 3);
echo "<br><br>";

echo strlen($cadena). ". Es la longitud de la cadena";
echo "<br><br>";

echo strpos($cadena, "variable"). ". Es la posicíon de 'variable'";
echo "<br><br>";

echo strtoupper($cadena);
echo "<br><br>";

echo strtolower($cadena);
echo "<br><br>";

echo substr($cadena, 0, 23);
echo "<br><br>";

?>