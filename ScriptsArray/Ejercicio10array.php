<?php
    // Crear un array asociativo con los nombres de 5 empleados y sus salarios
    $empleados = [
        "Carlos" => 2500,
        "Ana" => 3200,
        "Pedro" => 2800,
        "Lucía" => 3100,
        "Marcos" => 2900
    ];

    // Mostrar la tabla original
    echo "<div class='titulo'>Tabla Original</div>";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Salario</th></tr>"; // Cabeceras de la tabla
    foreach ($empleados as $nombre => $salario) {
        echo "<tr><td>$nombre</td><td>$salario</td></tr>";
    }
    echo "</table>";

    // Ordenar el array por nombre en orden ascendente
    ksort($empleados);

    // Mostrar la tabla ordenada
    echo "<div class='titulo'>Tabla Ordenada por Nombre</div>";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Salario</th></tr>"; // Cabeceras de la tabla
    foreach ($empleados as $nombre => $salario) {
        echo "<tr><td>$nombre</td><td>$salario</td></tr>";
    }
    echo "</table>";
    ?>