<?php

date_default_timezone_set("Europe/Madrid");

$diaSemana = date("l");

#Condicional simple para el caso de que sea Lunes
print "Evaluación de que el día de la semana sea lunes <br>";
if ($diaSemana == "Monday"){
    echo "We are on Monday";
}
print "<br><br>";

#Condicional simple para el caso de sea octubre
print "Evaluación de que sea octubre <br>";
$diaMes = date("F");
if ($diaMes == "October"){
    echo "We are on October";
}
print "<br>";
echo "We are on ". $diaMes;
print "<br><br>";

#Condicioanl doble para evaluar los minutos
print "Minutos menos de 10 o más de 15 <br>";
$minutos = date("i");
if($minutos < 10){
    echo "the current time is less than 10";    
} else if($minutos > 15){
    echo "the current minute is more than 15";
} else{
    echo "does not meet any conditions";
};
print "<br><br>";

#Switch
print "Switch segú el día de la semana <br>";
$diaS = date("N");
switch($diaS){
    case "1":
    echo "la semana empieza hoy";
    break;

    case "2":
    echo "Hoy es martes";
    break;

    case "3":
    echo "Hoy es miercoles";
    break;

    case "4":
    echo "Hoy es martes";
    break;

    case "5":
    echo "¡Por fin es viernes!";
    break;
    
    case "6":
    echo "Sabado, sabadete";
    break;

    case "Tuesday":
    echo "Tranquilamente";
    break;
  
}


?>