<?php
//Generar un numero aleatorio entre -10 y 10
$numero = rand(-10,10);
//Mostrar el numero generado por el comando
echo "Numero generado: $numero\n";
//Condicional para verificar si el numero es positivo, negativo o cero
if ($numero > 0) {
    echo "El numero es positivo.";
} elseif ($numero == 0) {
    echo "El numero es cero.";
} else {
    echo "El numero es negativo.";
} 
?>