<?php
// Conexión a la base de datos MySQL
//$conn = mysqli_connect("localhost", "root","", "crud_php");
include('connection.php');
$conn = connection();


// Recibir los datos enviados por el formulario
//if (isset($_POST['submit'])) {
$id=@$_POST["ID"];
$clave = @$_POST['Clave'];
$nombre = @$_POST['Nombre'];
$categoria = @$_POST['Categoria'];
$web = @$_POST['Web'];
$rector = @$_POST['rector'];
$telefono = @$_POST['telefono'];
$ciudad = @$_POST['ciudad'];
$numCarreras = @$_POST['numCarreras'];
$numSedes = @$_POST['numSedes'];
//};
// Consulta SQL para actualizar el registro en la tabla

$sql="UPDATE universidades SET Clave='$clave', Nombre='$nombre', Categoria='$categoria', Web='$web', Rector='$rector',Telefono='$telefono',Ciudad='$ciudad', Numero Carreras ='$numCarreras',Numero Sedes='$numSedes' WHERE id='$id'";
$query=mysqli_query($conn, $sql);



if($query){
    Header("Location: index.php");
}
?>  