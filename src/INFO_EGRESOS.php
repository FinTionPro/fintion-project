<?php
require("../src/config/conexion.php");

$query = "SELECT categoria_egresos.nombre as categoria_nombre, egresos.monto, egresos.descripcion, egresos.fecha
          FROM egresos
          INNER JOIN categoria_egresos ON egresos.id_categoria_egreso = categoria_egresos.id";
$result = $conn->query($query);

$totalEgresos = 0;  // Inicializar la variable para almacenar el total de egresos

if ($result->num_rows > 0) {
    echo "<ul class='list-group list-group-flush'>";
    while ($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>" . $row["categoria_nombre"] . " - " . $row["monto"] . " - " . $row["descripcion"] . " - " . $row["fecha"] . "</li>";

        // Sumar el monto al total
        $totalEgresos += $row["monto"];
    }
    echo "</ul>";
} else {
    echo "<p>No hay datos disponibles</p>";
}


$conn->close();
?>
