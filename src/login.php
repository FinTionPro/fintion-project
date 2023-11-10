<?php
session_start();

include('config/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["usuario"];
    $contrasena = $_POST["contraseña"];

    $sql = "SELECT id, nombre FROM usuario WHERE nombre = ? AND contrasena = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre_usuario, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Las credenciales son válidas, inicia sesión
        $row = $result->fetch_assoc();
        $_SESSION["id"] = $row["id"];
        $_SESSION["nombre_usuario"] = $row["nombre_usuario"];
        
        header("Location: ../templates/home.html");
    } else {
        echo "Credenciales inválidas. Inténtalo de nuevo.";
    }

    // Cierra la conexión a la base de datos
    $stmt->close();
    $conn->close();
}
?>
