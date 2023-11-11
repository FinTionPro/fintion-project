<?php
require("../src/config/conexion.php");

// Calcular el total acumulado de ingresos
$montoIngresos = $conn->query("SELECT COALESCE(SUM(monto), 0) AS total FROM ingresos")->fetch_assoc()["total"];

// Calcular el total acumulado de egresos
$montoEgresos = $conn->query("SELECT COALESCE(SUM(monto), 0) AS total FROM egresos")->fetch_assoc()["total"];

// Calcular la diferencia entre ingresos y egresos
$diferencia = $montoIngresos - $montoEgresos;

// Consulta SQL para obtener la diferencia entre ingresos y egresos por fecha
$query = "SELECT fecha, 
                 COALESCE(SUM(monto_ingresos), 0) AS total_ingresos, 
                 COALESCE(SUM(monto_egresos), 0) AS total_egresos
          FROM (
              SELECT fecha, monto AS monto_ingresos, 0 AS monto_egresos
              FROM ingresos
              UNION ALL
              SELECT fecha, 0 AS monto_ingresos, monto AS monto_egresos
              FROM egresos
          ) AS union_table
          GROUP BY fecha
          ORDER BY fecha";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $balanceMensual = 0;  // Inicializar el balance mensual

    echo "<table class='table table-bordered'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Fecha</th>";
    echo "<th>Total Ingresos</th>";
    echo "<th>Total Egresos</th>";
    echo "<th>Balance Diario</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        $fecha = $row["fecha"];
        $totalIngresos = $row["total_ingresos"];
        $totalEgresos = $row["total_egresos"];
        
        // Calcular el balance para esta fecha
        $balanceDiario = $totalIngresos - $totalEgresos;
        
        // Acumular el balance diario al balance mensual
        $balanceMensual += $balanceDiario;

        echo "<tr>";
        echo "<td>$fecha</td>";
        echo "<td>$totalIngresos</td>";
        echo "<td>$totalEgresos</td>";
        echo "<td>$balanceDiario</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

} else {
    echo "<p>No hay datos disponibles</p>";
}

$conn->close();
?>