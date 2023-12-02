<?php
session_start();

include('config/conexion.php');

// Definir una variable para almacenar el ID del usuario
$idUsuarioLogueado = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["usuario"];
    $contrasena = $_POST["contraseña"];

    $sql = "SELECT id, nombre FROM usuario WHERE nombre = ? AND contrasena = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre_usuario, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Las credenciales son válidas, obtén el ID del usuario
        $row = $result->fetch_assoc();
        $idUsuarioLogueado = $row["id"];

        // Puedes utilizar $idUsuarioLogueado en otras partes de tu código

        // Redirecciona a la página de inicio
        header("Location: ../templates/home.php");
        exit();
    } else {
        echo "Credenciales inválidas. Inténtalo de nuevo.";
    }

    // Cierra la conexión a la base de datos
    $stmt->close();
    $conn->close();
}

?>
