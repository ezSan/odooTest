<?php
include("conexion.php");
$con = conectar();


$contenido = $_POST['contenido'];
$lugar = $_POST['lugar'];
$provincia = $_POST['provincia'];

$nombre_imagen = $_FILES["imagen"]["name"];
$nombre_temporal = $_FILES["imagen"]["tmp_name"];
$tipo_archivo = $_FILES["imagen"]["type"];
$destino = "./assets/" . $nombre_imagen;


if ($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/ ") {
    move_uploaded_file($nombre_temporal, $destino);
    
} else {
    echo " Debes subir una imagen ";
    exit();

}


$sql = "INSERT INTO publicaciones VALUES(null,'$contenido','$destino', '$lugar', '$provincia')";
$query = mysqli_query($con, $sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <title>Publicación creada</title>
</head>

<body>

    <div class="createdScreen">
        <h2>Tu publicación se creó correctamente!!</h2>


        <a href="publicaciones.php">
            <input type="button" class="loginButton" value="Click para volver al inicio">
        </a>

    </div>
</body>

</html>