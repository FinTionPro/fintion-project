<?php
session_start();

// Incluye el archivo de conexión a la base de datos
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["usuario"];
    $contrasena = $_POST["contraseña"];

    // Realiza una consulta SQL para verificar las credenciales
    $sql = "SELECT id, nombre FROM usuarios WHERE nombre = ? AND contrasena = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre_usuario, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Las credenciales son válidas, inicia sesión
        $row = $result->fetch_assoc();
        $_SESSION["id"] = $row["id"];
        $_SESSION["nombre_usuario"] = $row["nombre_usuario"];
        
        header("Location: home.php"); // Redirige a la página de inicio de sesión exitoso
    } else {
        // Credenciales inválidas, muestra un mensaje de error
        echo "Credenciales inválidas. Inténtalo de nuevo.";
    }

    // Cierra la conexión a la base de datos
    $stmt->close();
    $conn->close();
}
?>
