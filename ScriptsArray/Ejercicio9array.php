<?php
    // Crear un array asociativo con 4 marcas de autos y sus países de origen
    $autos = [
        "Toyota" => "Japón",
        "BMW" => "Alemania",
        "Ford" => "EEUU",
        "Renault" => "Francia"
    ];

    // Mostrar la tabla original
    echo "<div class='titulo'>Tabla Original</div>";
    echo "<table>";
    echo "<tr><th>Marca</th><th>País de Origen</th></tr>"; // Cabeceras de la tabla
    foreach ($autos as $marca => $pais) {
        echo "<tr><td>$marca</td><td>$pais</td></tr>";
    }
    echo "</table>";

    // Borrar uno de los pares del array
    unset($autos["Ford"]); // Borra "Ford"

    // Mostrar la tabla actualizada
    echo "<div class='titulo'>Tabla Actualizada</div>";
    echo "<table>";
    echo "<tr><th>Marca</th><th>País de Origen</th></tr>"; // Cabeceras de la tabla
    foreach ($autos as $marca => $pais) {
        echo "<tr><td>$marca</td><td>$pais</td></tr>";
    }
    echo "</table>";
    ?>