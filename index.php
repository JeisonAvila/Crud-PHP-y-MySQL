<?php
include ('connection.php');
$conn = connection();
$sql = "SELECT * FROM universidades";
$query = mysqli_query($conn, $sql);

$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error en la consulta SQL: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" rel="stylesheet">
    <title>Crud Con PHP </title>
    
    

</head>
<body>
    
    <div class = "users-form">
    
        <h1>Crear Registro</h1>
        <form action="insertar.php" method = "POST">
        
        <input type="text" name="id" placeholder="ID">
        <input type="text" name="clave" placeholder="Clave">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="categoria" placeholder="Categoria">
        <input type="text" name="web" placeholder="Web">
        <input type="text" name="rector" placeholder="Rector">
        <input type="text" name="telefono" placeholder="Telefono">
        <input type="text" name="ciudad" placeholder="ciudad">
        <input type="text" name="numCarreras" placeholder="Numero Carreras">
        <input type="text" name="numSedes" placeholder="Numero Sedes">
        

        <input type="submit" value="Agregar Registro">
    </form>

</div>
<div class = "user_table">
    <h2>Registros</h2>
    
    <table>
        <thead>
            <tr>
             <th>id</th>
             <th>clave</th>
             <th>nombre</th>
             <th>categoria</th>
             <th>web</th>
             <th>rector</th>
             <th>telefono</th>
             <th>ciudad</th>
             <th>Numero de Carreras</th>
             <th>Numero de Sedes</th>
            
            <th></th>
            <th></th>
            
        </tr>
    </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)):?>
                <tr>
        <th><?=$row['id']?></th>
        <th><?=$row['clave']?></th>
        <th><?=$row['nombre']?></th>
        <th><?=$row['categoria']?></th>
        <th><?=$row['web']?></th>
        <th><?=$row['rector']?></th>
        <th><?=$row['telefono']?></th>
        <th><?=$row['ciudad']?></th>
        <th><?=$row['numCarreras']?></th>
        <th><?=$row['numSedes']?></th>
        

        <th><a href="editar.php?id= <?=$row['id']?>" class = "users-table--edit">Editar</a></th>
        <th><a href="eliminar.php?id= <?=$row['id']?>" class = "users-table--delete">Eliminar</a></th>
    </tr>
    <?php endwhile; ?>
        
    </tbody>
    </table>
</div>
   
</body>
</html>