<?php
// Datos de conexión
/*$serverName = "DESKTOP-ODSP222"; // o 127.0.0.1
$connectionOptions = array(
    "Database" => "Tienda",
    "Uid" => "jasperfox",       // Usuario de la base de datos
    "PWD" => "G@to61867011",    // Contraseña de la base de datos
    
);
*/
$serverName = "TiendaPrueba.mssql.somee.com"; // o 127.0.0.1
$connectionOptions = array(
    "Database" => "TiendaPrueba",
    "Uid" => "jazperfox1207_SQLLogin_1",       // Usuario de la base de datos
    "PWD" => "85imgujn7q",    // Contraseña de la base de datos
    
);

// Intentar la conexión
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
} 
?>
