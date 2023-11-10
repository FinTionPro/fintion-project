<?php
// Incluye el archivo de conexión a la base de datos
include('config/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Verifica que los campos no estén vacíos
    if (empty($nombre) || empty($email) || empty($password)) {
        echo "Todos los campos son obligatorios.";
    } else {

        // Inserta el usuario en la base de datos
        $sql = "INSERT INTO usuario (nombre, email, contrasena) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nombre, $email, $password);

        if ($stmt->execute()) {
            echo "Usuario registrado correctamente.";
            header("Location: ../templates/login.html");
        } else {
            echo "Error al registrar el usuario: " . $stmt->error;
        }

        // Cierra la conexión a la base de datos
        $stmt->close();
    }

    $conn->close();
}
?>
