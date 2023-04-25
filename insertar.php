<?php 
include ('connection.php');
$conn = connection();

// Genera un ID único para la nueva entrada
$id = "null";

$clave = @$_POST["clave"];
$nombre = @$_POST['nombre'];
$categoria = @$_POST['categoria'];
$web = @$_POST['web'];
$rector = @$_POST['rector'];
$telefono = @$_POST['telefono'];
$ciudad = @$_POST['ciudad'];
$numCarreras = @$_POST['numCarreras'];
$numSedes = @$_POST['numSedes'];

$sql = "INSERT INTO universidades (id, clave, nombre, categoria, web, rector, telefono, ciudad, numCarreras, numSedes) VALUES ('$id','$clave','$nombre','$categoria','$web','$rector','$telefono','$ciudad','$numCarreras,'$numSedes')";
$query = mysqli_query($conn, $sql);

if($query){
    header("Location: index.php");
    exit();
};

