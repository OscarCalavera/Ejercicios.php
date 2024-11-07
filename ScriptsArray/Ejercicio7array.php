<?php
    // Crear un array asociativo vacío
    $paises = [];

    // Añadir tres pares de clave-valor al array
    $paises["España"] = "Madrid"; // Añade "España" como clave y "Madrid" como valor
    $paises["Francia"] = "París"; // Añade "Francia" como clave y "París" como valor
    $paises["Italia"] = "Roma";   // Añade "Italia" como clave y "Roma" como valor

    // Mostrar el array completo en una tabla HTML
    echo "<table>";
    echo "<tr><th>País</th><th>Capital</th></tr>"; // Cabeceras de la tabla
    foreach ($paises as $pais => $capital) {
        echo "<tr><td>$pais</td><td>$capital</td></tr>";
    }
    echo "</table>";
    ?>