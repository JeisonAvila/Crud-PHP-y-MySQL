<?php 
    include('connection.php');
    $conn = connection();

    $id= @$_GET['id'];

    $sql="SELECT * FROM universidades WHERE id='$id'";
    $query=mysqli_query($conn, $sql);

    $row=mysqli_fetch_array($query);

   /* if (isset($_POST['submit'])) {
        $id=$_POST['id'];
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $web = $_POST['web'];
        $rector = $_POST['rector'];
        $telefono = $_POST['telefono'];
        $ciudad = $_POST['ciudad'];
        $numCarreras = $_POST['numCarreras'];
        $numSedes = $_POST['numSedes'];
        
    };
      */ 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilos.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head> 
    <body>
        <div class="users-form">
        <form action="editar_uni.php" method="@POST">
            <h1>Editar Registro</h1>

        <input type="hidden" name="id" value ="<?=$row['id']?>">   
        <input type="text" name="clave" placeholder="Clave" value="<?=$row['clave']?>">
        <input type="text" name="nombre" placeholder="Nombre"value="<?=$row['nombre']?>">
        <input type="text" name="categoria" placeholder="Categoria"value="<?=$row['categoria']?>">
        <input type="text" name="web" placeholder="Web"value="<?=$row['web']?>" >
        <input type="text" name="rector" placeholder="Rector" value="<?=$row['rector']?>">
        <input type="text" name="telefono" placeholder="Telefono" value="<?=$row['telefono']?>">
        <input type="text" name="ciudad" placeholder="Ciudad" value="<?=$row['ciudad']?>">
        <input type="text" name="numCarreras" placeholder="Numero Carreras" value="<?=$row['numCarreras']?>">
        <input type="text" name="numSedes" placeholder="Numero Sedes" value="<?=$row['numSedes']?>">
                
                <input type="submit" value="Actualizar">
                
                    
                
            </form>
        </div>
    </body>
</html>