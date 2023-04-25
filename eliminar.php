<?php
include('connection.php');
$conn = connection();

// Verifica si se recibió el ID del registro que se quiere eliminar
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Crea la consulta SQL para eliminar el registro con el ID especificado
  $sql = "DELETE FROM universidades WHERE ID = '$id'";
  $query = mysqli_query($conn, $sql);

  // Verifica si la consulta se ejecutó correctamente y redirige a la página principal
  if ($query) {
    header('Location: index.php');
    exit();
  } else {
    echo 'Error al eliminar el registro';
  }
} else {
  echo 'ID de registro no especificado';
}
?>
