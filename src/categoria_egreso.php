<?php
require("config/conexion.php");

$query = "SELECT * FROM categoria_egresos";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<ul class='list-group list-group-flush'>";
    while ($row = $result->fetch_assoc()) {
        echo $row["nombre"] . " - " . $row["descripcion"];
    }
    echo "</ul>";
} else {
    echo "<p>No hay datos disponibles</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Usa el valor de id_usuario desde el archivo incluido
    $idUsuario = 1; // Puedes usar directamente $idUsuario en este archivo

    $categoria = $_POST["categoria-egreso"];
    $descripcion = $_POST["descripcion-egreso"];

    // Suponiendo que la estructura de la tabla incluye las columnas 'nombre' y 'descripcion'
    // Además, estamos usando prepared statements para prevenir SQL injection
    $query = "INSERT INTO categoria_egresos (nombre, descripcion, id_usuario) VALUES (?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($query);

    // Vincular parámetros
    $stmt->bind_param("ssi", $categoria, $descripcion, $idUsuario);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro agregado correctamente";
    } else {
        echo "Error al agregar el registro: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

$conn->close();
?>