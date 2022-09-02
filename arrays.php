<?php
#Array compuesto por strings
echo "Esto es un array compuesto por strings. ";
$arrayStrings = array("html", "css", "javascript");
echo "Muestro los componentes del array con var_dump<br>";
var_dump($arrayStrings);
echo "<br><br>";

#Array compuesto por numeros enteros y reales
echo "Esto es un array compuesto por numeros enteros y reales. ";
$arrayNumeros = array(2, 3.4, 6,5.2);
echo "Muestro los componentes del array con var_dump<br>";
var_dump($arrayNumeros);
echo "<br><br>";

#Array multidimensional
$coches = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo "Esto es un array compuesto de dos dimensiones. ";
echo "Muestro los componentes del array con var_dump<br>";
var_dump($coches);
echo "<br><br>";

#Tamaño de un array
echo "Este es el tamaño del array compuesto por strings: ". sizeof($arrayStrings);
echo "<br><br>";


#Combinación de arrays
$a = array('enero', 'agosto');
$b = array("invierno", "verano");
$c = array_combine($a, $b);
echo "Esta es la combinación de dos arrays, resultado con print_r :  ";
print_r($c);
echo "<br><br>";

#Devolución del úlimo elemento de un array
echo "Devolución del último el elemento del array compuesto por strings: ";
echo end($arrayStrings);
echo "<br><br>";

#Añadir elementos a un array
echo "Añado php al array compuesto por strings: ";
array_push($arrayStrings, "php");
print_r($arrayStrings);
echo "<br><br>";

?>