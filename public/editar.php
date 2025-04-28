<?php
include 'conexion.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$sql = "UPDATE Productos SET nombre=?, descripcion=?, precio=? WHERE id=?";
$params = array($nombre, $descripcion, $precio, $id);
$stmt = sqlsrv_query($conn, $sql, $params);
echo $stmt ? "OK" : "ERROR";
?>
