<?php
//Generar dos numeros aleatorios entre 0 y 20
$n1 = rand(0,20);
$n2 = rand(0,20);

//Muestra los numeros generados
echo "El primer numero es: $n1\n";
echo "El segundo numero es: $n2\n";

//Compara los numeros y muestra el mensaje correspondiente
if ($n1 > $n2) {
    echo "el primer numero es mayor que el segundo";
}
elseif($n1>$n2) {
    echo "el primer numero es menor que el segundo";
}
else{
    echo "son iguales";
}
?>