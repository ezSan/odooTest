<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved</title>
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
    <main>
        <h2 class="savedTitle" id='savedTitle'>Publicaciones guardadas</h2>
        <div id="likeadasBox" class="likeadasBox">

        </div>

    </main>







    <script src="./scripts/menuBurger.js"></script>
    <script src="./scripts/like.js"></script>
    <script src="./scripts/saved.js"></script>
</body>

</html>