<?php
    // Crear un array asociativo con los nombres de 5 productos y sus precios
    $productos = [
        "Manzana" => 1.20,
        "Banana" => 0.80,
        "Cereza" => 2.50,
        "Durazno" => 1.50,
        "Fresa" => 3.00
    ];

    // Mostrar la tabla original
    echo "<div class='titulo'>Tabla Original</div>";
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th></tr>"; // Cabeceras de la tabla
    foreach ($productos as $producto => $precio) {
        echo "<tr><td>$producto</td><td>€" . number_format($precio, 2) . "</td></tr>";
    }
    echo "</table>";

    // Ordenar el array por precio en orden ascendente
    asort($productos);

    // Mostrar la tabla ordenada
    echo "<div class='titulo'>Tabla Ordenada por Precio</div>";
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th></tr>"; // Cabeceras de la tabla
    foreach ($productos as $producto => $precio) {
        echo "<tr><td>$producto</td><td>€" . number_format($precio, 2) . "</td></tr>";
    }
    echo "</table>";
    ?>