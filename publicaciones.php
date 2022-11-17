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


        <img class="logo" src="./assets/quilsoft.jpg">


        <div class="burgerBox">
            <img src="./assets/burger.svg" alt="burguerMenu" id="burgerButton" class="burgerButton">
        </div>


        <nav class="navLinks" id="navLinks">
            <a class="headerLinksHovered">Personal Information</a>
            <a href="create.php" class="headerLinksHovered">Crear publicación + </a>
            <a class="headerLinksHovered">♥ Saved</a>
        </nav>

    </header>

    <main id="main">
        <div class="inputSearch">

            <img src="./assets/lupa.svg" width="20px">
            <input type="text" placeholder="Busca tu publicación aquí" class="mainInputNotBorder">
            </input>
        </div>

        <section class="publicaciones">

            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>

            <article class="article">
                <h4 class="publicationH4Title">
                    <?php
                echo $row['titulo']
                        ?>
                </h4>
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

            </article>

            <?php
            }
            ?>



        </section>


    </main>
    <footer>
        <div class="footerSearch">
            <img src="./assets/pinkLupa.svg">
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