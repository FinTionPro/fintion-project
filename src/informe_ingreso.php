<?php
require("../src/config/conexion.php");

$query = "SELECT categoria_ingresos.nombre as categoria_nombre, ingresos.monto, ingresos.descripcion, ingresos.fecha
          FROM ingresos
          INNER JOIN categoria_ingresos ON ingresos.id_categoria_ingreso = categoria_ingresos.id";
$result = $conn->query($query);

$totalIngresos = 0;  // Inicializar la variable para almacenar el total de ingresos

if ($result->num_rows > 0) {
    echo "<ul class='list-group list-group-flush'>";
    while ($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>" . $row["categoria_nombre"] . " - " . $row["monto"] . " - " . $row["descripcion"] . " - " . $row["fecha"] . "</li>";

        // Sumar el monto al total
        $totalIngresos += $row["monto"];
    }
    echo "</ul>";
} else {
    echo "<p>No hay datos disponibles</p>";
}

$conn->close();
?>
