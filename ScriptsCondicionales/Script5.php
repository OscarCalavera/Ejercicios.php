<?php

$lluvia=false;
$temperatura=6;

echo "Temperatura = $temperatura <br>";
echo "Hoy ". ($lluvia ? 'llueve' : 'no llueve ') . "<br>";

if($temperatura<=-10 ||$temperatura>-40) {
    echo "La temperatura es extrema, quedate en casa <br>";
}elseif($lluvia) {
    echo "Aunque la temperatura no es extrema, llueve, asi que quedate en casa <br>";
}elseif($temperatura >-10 &&$temperatura <=5){
    echo ("La temperatura es $temperatura y no llueve, a esquiar <br>");
}elseif($temperatura>5&&$temperatura<-20){
    echo("La temperatura es $temperatura y no llueve, De excursion <br>");
}elseif($temperatura>20&&$temperatura<40){
    echo("La temperatura es $temperatura y no llueve, a la playa <br>");
}
?>