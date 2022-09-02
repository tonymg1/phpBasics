<?php
#abs
$absoluto = abs(-9);
echo "El valor absoluto de un número se realiza con el método abs(): ".$absoluto."<br><br>";
#Redondeo al número entero más alto
$redondeoArriba = ceil(4.3);
echo "El número 4.3 será redondeado al entero siguiente con el método ceil(): ".$redondeoArriba. "<br><br>";

#El valor más alto de una serie de valores
$maximo = max(4, 6, 9, 3);
echo "El número máximo de una serie de valores se obtienecon el método max(). En este caso: ".$maximo."<br><br>";

#El valor más alto de una serie de valores
$minimo = min(4, 6, 9, 3);
echo "El número máximo de una serie de valores se obtienecon el método min(). En este caso: ".$minimo."<br><br>";


$aleatoria  = rand(1,10);
echo "El siguiente número se ha obtenido con el método rand() para que sea aleatorio entre 1 y 10: ".$aleatoria;


?>