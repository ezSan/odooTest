<?php 
    include("conexion.php");
    $con=conectar();


    
    $usuario=$_POST['usuario'];
    $contenido=$_POST['contenido'];
    $imagen=$_POST['imagen'];
    $titulo=$_POST['titulo'];

    $sql="INSERT INTO publicaciones VALUES('$usuario', '$contenido','$imagen', '$titulo')";
    $query= mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicación creada exitosamente!</title>
</head>
<body>
    <h2>Tu publicación se creó correctamente!!</h2>
</body>
</html>