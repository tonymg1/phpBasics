<?php

#Operadores aritméticos
$cinco = 5;
echo "Operadores aritméticos: <br><br>";
echo "El resultado de multiplicar 5 * 2 es: ". $cinco*2 ."<br><br>";

#Operadores de comparación
echo "Operadores de comparación: <br><br>";
$cinco = 5;
echo "La variable cinco es extacmente igual a 5. Devuelve :";
echo $cinco === 5;
print "<br>";
echo $cinco === "5";
echo "La variable cinco no es extacmente igual a 5 en string. No devuelve nada :";
print "<br><br>";

#Operadores lógicos
echo "Operadores lógicos (comparamos si 12 y 15 son mayores a 10) <br>";
$doce = 12;
$quince = 15;

if($doce < 10 && $quince < 10){
    echo "Valores menores a 10";
} else{
    echo "Valores mayores a 10";
}
print "<br><br>";
?>