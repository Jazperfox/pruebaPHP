<?php
include 'conexion.php';
$id = $_POST['id'];
$sql = "DELETE FROM Productos WHERE id = ?";
$params = array($id);
$stmt = sqlsrv_query($conn, $sql, $params);
echo $stmt ? "OK" : "ERROR";
?>
