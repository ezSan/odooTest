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
    <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>OdooTest</title>
</head>

<body>

    <div>

        <div class="createPublication">

            <h3>Crear publicación</h3>


            <form class="styledForm" method="POST" action="postPublication.php">

                <label for="title" class="form-label">Titulo</label>
                <input type="text" name="titulo" id="title" placeholder="name@example.com">
                
                <label for="content" class="form-label">Contenido</label>
                <textarea name="contenido" id="content" rows="3"></textarea>
                
                <label for="file" >Inserte su imagen aquí</label>
                <input type="file" name="imagen" id="file">

                <label for="usuario" class="form-label">Autor</label>
                <input type="text" name="usuario" id="usuario" placeholder="Autor">


                <input type="submit" value="Crear publicacion" class="postButton"/>

            </form>

        </div>





        <!-- 
        <form action="postNewPublication.php" method="POST" enctype="multipart/form-data">

            <input type="text" name="usuario" placeholder="Usuario">
            <input type="text-area" name="contenido" placeholder="Contenido de la publicacion">
            <input type="file" name="imagen" placeholder="url de tu imagen">
            <input type="text" name="titulo" placeholder="Usuario">

            <input type="submit" value="Publicar" />

        </form> -->


    </div>

<!--     <div>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>

        <h2>
            <?php
            echo $row['titulo']

                ?>
        </h2>
        <h5>
            <?php
            echo $row['usuario']
                ?>
        </h5>
        <img href=<?php echo $row['imagen'] ?>/>
        <p>
            <?php
            echo $row['contenido']
                ?>
        </p>




        <?php
        }
        ?>
    </div> -->
</body>

</html>