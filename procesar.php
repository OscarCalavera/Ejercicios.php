<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
echo "Nombre: " . $nombre . "<br>";
echo "Apellido: " . $apellido . "<br>";
echo var_dump ($nombre);


//Mensaje de Bienvenida
echo "BIENVENIDO $nombre $apellido <br>";


//Nombre y apellido del reves
$nombre_invertido = strrev($nombre);
$apellido_invertido = strrev($apellido);
echo "$nombre_invertido $apellido_invertido<br>";


//Letras del nombre, del apellido y las totales
$longitud_nombre = strlen($nombre);
$longitud_apellido = strlen($apellido);
$longitud_total = $longitud_nombre + $longitud_apellido;
echo "Numero de letras en el nombre: " . $longitud_nombre . "<br>";
echo "Numero de letras en el apellido: " . $longitud_apellido . "<br>";
echo "Total de letras: " . $longitud_total . "<br>";


//Nombre y apellido en mayusculas
echo "Nombre en mayusculas: " . strtoupper($nombre) . "<br>";
echo "Apellido en mayusculas: " . strtoupper($apellido) . "<br>";

//Primer y Ultimo caracter del nombre y apellido
echo "Primer caracter del nombre: " . $nombre[0] . "<br>";
echo  "Ultimo caracter del nombre: " . $nombre[$longitud_nombre - 1] . "<br>";
echo "Primer caracter del apellido: " . $apellido[0] . "<br>";
echo "Ultimo caracter del apellido: " . $apellido[$longitud_apellido - 1] . "<br>";

//Cambiar las vocales del nombre y del apellido por la U
$nombre_modificado = preg_replace('/[aeiouAEIOU]/', 'u', $nombre);
$apellido_modificado = preg_replace('/[aeiouAEIOU]/', 'u', $apellido);
echo "Nombre con vocales cambiadas por 'u': " . $nombre_modificado . "<br>";
echo "Apellido con vocales cambiadas por 'u': " . $apellido_modificado . "<br>";





}
?>