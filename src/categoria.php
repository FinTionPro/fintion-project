<?php
require("config/conexion.php");

$query = "SELECT * FROM categoria_ingresos";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<ul class='list-group list-group-flush'>";
    while ($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>" . $row["nombre"] . " - " . $row["descripcion"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No hay datos disponibles</p>";
}

$conn->close();
?>