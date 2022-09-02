<?php
#For
print "Resultado de for: <br>";
for($i = 1; $i <= 5; $i++){
    echo $i . " ";
}
print "<br><br>";


#ForEach
print "Resultado de forEach método 1: <br>";
$miArray = array(1,2,3,4,5);
foreach ($miArray as &$valor){
    $valor = $valor * 2;
    echo $valor. " ";
    unset($valor); //Este no lo entiendo bien
}
print "<br><br>";

#While
print "Resultado de while: <br>";
$i = 1;

while($i <5){
    echo $i++. " ";

}

//Hay otro ejemplo que utiliza endwhile, pero en este no funciona
print "<br><br>";

print "Resultado de do while: <br>";
$i = 1;
do{
    echo $i++." ";

} while ($i <5)
?>