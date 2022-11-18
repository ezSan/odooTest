<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM publicaciones";
$query = mysqli_query($con, $sql);
/* $row = mysqli_fetch_array($query) */
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">


    <title>UsuarioAutorizado</title>
</head>

<body>
    <header>


        <a href="publicaciones.php">
            <img src="./assets/quilsoft.jpg" href="publicaciones.php" class="logo">
        </a>


        <div class="burgerBox">
            <img src="./assets/burger.svg" alt="burguerMenu" id="burgerButton" class="burgerButton">
        </div>


        <nav class="navLinks" id="navLinks">
            <a class="headerLinksHovered">Personal Information</a>
            <a href="create.php" class="headerLinksHovered">Crear publicación + </a>
            <a class="headerLinksHovered" href="saved.php">♥ Saved</a>
        </nav>

    </header>

    <main id="main">

        <form class='formPrincipal' action="" method="get">
            <a name='anchor'></a>
            <input type="text" placeholder="Busca tu publicación aquí" class="mainInputNotBorder" name="busqueda">
            </input>
            <!-- <input type="image" src="./assets/lupa.svg" class="lupa" name="enviar" /> -->
            <input type="submit" name="enviar" class="butonWithBgImg" />
        </form>

        <?php

        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];

            $consulta = $con->query("SELECT * FROM publicaciones WHERE provincia LIKE '%$busqueda%'");

            while ($row = $consulta->fetch_array()) {


                echo $row['provincia'] . '<br>';
            }




        }


        ?>





        <section class="publicaciones">

            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>

            <article class="article">

                <h4 class="publicationH4Title">
                    <?php
                echo $row['lugar']
                        ?>
                </h4>

                <h5 class="subtitle">
                    <?php
                echo $row['provincia']
                        ?>
                </h5>




                <img src="<?php
                echo substr($row['imagen'], 2)
                    ?>" class="articleImage">
                <p>
                    <?php
                echo $row['contenido']
                        ?>
                </p>

                <button id="<?php
                echo $row['id']
                    ?>" class="btnLike">
                    <img src="./assets/like.svg" class="likeArticle" />
                </button>
                <button class="shareBtn">
                    <a href="https://twitter.com/intent/tweet?text=[Argentina]&url=[url]&hashtags=[Trekking]"
                        target="_blank">
                        <img src="./assets/twitter.png" class="shareImg">
                    </a>
                </button>
                <button class="shareBtn">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=['https://www.quilsoft.com/']"
                        target="_blank">
                        <img src="./assets/facebook.png" class="shareImg">
                    </a>
                </button>
                <button class="shareBtn">
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=['https://www.quilsoft.com/']"
                        target="_blank">
                        <img src="./assets/linkedin.png" class="shareImg">
                    </a>
                </button>
            </article>

            <?php
            }
            ?>



        </section>


    </main>
    <footer>
        <div class="footerSearch">
            <a href='#anchor'>

                <img src="./assets/pinkLupa.svg">
            </a>

            <p>Search</p>


        </div>

        <div class="footerSave">
            <a href="saved.php">

                <img src="./assets/like.svg">
            </a>
            <p>Saved</p>
        </div>
    </footer>



    <script src="./scripts/menuBurger.js"></script>
    <script src="./scripts/like.js"></script>
</body>

</html>