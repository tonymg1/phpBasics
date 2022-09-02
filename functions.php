<?php
#función suma de dos números
echo "Función suma de dos números. Resultado de sumar 3 y 7: ";
function suma($a,$b){
    return $a+$b;
}
echo suma(3,7)."<br><br>";


#función que multiplica dos números
echo "Función que multiplica dos números. Resultado de multiplicar 3 y 7: ";
function multiplica($a,$b){
    return $a*$b;
}
echo multiplica(3,7)."<br><br>";

#función que divide dos números
echo "Función que multiplica dos números. Resultado de dividir 3 y 7: ";
function divide($a,$b){
    return $a/$b;
}
echo divide(3,7)."<br><br>";

#función que resta dos números
echo "Función en la que con dos números realizas el tipo de operación deseada. En este caso, muestra el resultado de sumar 3 y 7: ";

function opera($a,$b, $signo){
    if ($signo == "+"){
        return $a+$b;
    } else if ($signo == "*"){
        return $a*$b;
    } else if ($signo == "/"){
        return $a/$b;
    } else {
        return "la operación no está disponible";
    }
};

echo opera(3,7,"+");

?>