<?php
require("../src/config/conexion.php");

$query = "SELECT * FROM ingresos ORDER BY id DESC LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["monto"];
} else {
    echo "<p>No hay datos disponibles</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Usa el valor de id_usuario desde el archivo incluido
    $idUsuario = 1; // Puedes usar directamente $idUsuario en este archivo

    $monto = $_POST['monto'];
    $categoria = $_POST["categoria"];
    $descripcion = $_POST["descripcion"];

    // Suponiendo que la estructura de la tabla incluye las columnas 'monto', 'categoria', 'descripcion', e 'id_usuario'
    // Además, estamos usando prepared statements para prevenir SQL injection
    $query = "INSERT INTO ingresos (monto, id_categoria_ingreso, descripcion, id_usuario) VALUES (?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($query);

    // Vincular parámetros
    // Vincular parámetros
    $stmt->bind_param("issi", $monto, $categoria, $descripcion, $idUsuario);


    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro agregado correctamente";
        header("Location: ../templates/home.php");
        exit();
    } else {
        echo "Error al agregar el registro: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

$conn->close();
?>
