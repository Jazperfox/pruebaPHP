<?php
include 'conexion.php';
$sql = "SELECT * FROM Productos";
$stmt = sqlsrv_query($conn, $sql);
$resultado = array();
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $resultado[] = $row;
}
echo json_encode($resultado);
?>
