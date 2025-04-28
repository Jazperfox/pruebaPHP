<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$sql = "INSERT INTO Productos (nombre, descripcion, precio) VALUES (?, ?, ?)";
$params = array($nombre, $descripcion, $precio);
$stmt = sqlsrv_query($conn, $sql, $params);
echo $stmt ? "OK" : "ERROR";
?>
