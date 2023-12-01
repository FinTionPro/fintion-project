<?php
require("../src/config/conexion.php");

$query = "SELECT * FROM egresos ORDER BY id DESC LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["monto"];
} else {
    echo "<p>No hay datos disponibles</p>";
}

$conn->close();
?>
