<?php
require("../src/config/conexion.php");

$query = "SELECT * FROM presupuesto";
$result = $conn->query($query);

if($result->num_rows > 0){
    echo "<ul class='list-group list-group-flush'>";
    while($row = $result->fetch_assoc()){
        echo "<li class='list-group-item'>".$row["monto_egreso"]." - ".$row["fecha"]."</li>";      
    }
    echo "</ul>";
}else{
    echo "<p>No hay datos disponibles</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Usa el valor de id_usuario desde el archivo incluido
    $idUsuario = 1; // Puedes usar directamente $idUsuario en este archivo

    $monto = $_POST['monto'];
    $presupuesto_cumplido = 0;

    // Suponiendo que la estructura de la tabla incluye las columnas 'monto', 'categoria', 'descripcion', e 'id_usuario'
    // Además, estamos usando prepared statements para prevenir SQL injection
    $query = "INSERT INTO presupuesto (monto_egreso, presupuesto_cumplido, id_usuario) VALUES (?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($query);

    // Vincular parámetros
    // Vincular parámetros
    $stmt->bind_param("iss", $monto, $presupuesto_cumplido, $idUsuario);


    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro agregado correctamente";
        header("Location: ../templates/presupuesto.php");
        exit();
    } else {
        echo "Error al agregar el registro: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}
$conn->close();
?>