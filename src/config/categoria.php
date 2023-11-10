<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Manejar la conexión a la base de datos
    $servername = "tu_servidor";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "tu_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Obtener los valores del formulario
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];

    // Insertar la categoría en la base de datos
    $sql = "INSERT INTO categoria (nombre, descripcion) VALUES ('$categoria', '$descripcion')";
    if ($conn->query($sql) === TRUE) {
        echo "Categoría agregada con éxito";
    } else {
        echo "Error al agregar la categoría: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    echo "Acceso no autorizado";
}
?>  
