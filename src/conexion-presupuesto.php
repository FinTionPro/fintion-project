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
$conn->close();
?>