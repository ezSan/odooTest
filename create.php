<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM publicaciones";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query)
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <title>OdooTest</title>
</head>

<body>

    <div>

        <div class="createPublication">

            <h2 class="createTitleCentered">Crear publicación</h2>


            <form class="styledForm" method="POST" enctype="multipart/form-data" action="postPublication.php">

                
                <input type="text" name="lugar" id="title" placeholder="Nombre del lugar" class="inputText">
                <input type="text" name="provincia" id="provincia" placeholder="Provincia donde se encuentra" class="inputText">

                
                <textarea name="contenido" id="content" rows="3" placeholder="Escriba el contenido de su publicacion" class="inputText"></textarea>
                
                <label for="url" class="inputFileLabel">
                    <img class="camera" src="assets/camera.svg"/>
                    Click para subir imagen!
                    <input type="file" name="imagen" id="url" class="inputFile">
                </label>

                <input type="submit" value="Crear publicacion" class="postButton" />

            </form>

        </div>
    </div>

</body>

</html>