<?php
function connection(){
$host = "localhost";
$username = "root";
$password = "";
$dbname = "crud_php";

// Crear la conexión
$conn = mysqli_connect($host, $username, $password );

mysqli_select_db($conn, $dbname);
// Verificar si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";
return $conn;
}
?>