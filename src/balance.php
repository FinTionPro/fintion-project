<?php
require("../src/config/conexion.php");

// Obtener el monto de ingreso del último registro
$queryIngresos = "SELECT monto FROM ingresos ORDER BY id DESC LIMIT 1";
$resultIngresos = $conn->query($queryIngresos);
$rowIngresos = $resultIngresos->fetch_assoc();
$ingresos = ($resultIngresos->num_rows > 0) ? $rowIngresos["monto"] : 0;

// Obtener el monto de egreso del último registro
$queryEgresos = "SELECT monto FROM egresos ORDER BY id DESC LIMIT 1";
$resultEgresos = $conn->query($queryEgresos);
$rowEgresos = $resultEgresos->fetch_assoc();
$egresos = ($resultEgresos->num_rows > 0) ? $rowEgresos["monto"] : 0;

// Calcular el balance
$balance = $ingresos - $egresos;

echo $balance;

$conn->close();
?>
