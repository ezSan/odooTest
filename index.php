<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <title>oDoo-Test</title>

    <?php 
    include("conexion.php");
    include("controlador.php");
    ?>


</head>
<body>

<img src="./assets/quilsoft.jpg" class="formatImg"/>



<form class="styledForm" method="POST">

<h1>Sign In</h1> 

    <h5>Email</h5>
    <input type="text" name="usuario" class="formInputNotBorder">
    <h5>Password</h5>
    <input type="password" name="contraseña" class="formInputNotBorder">

    <input type="submit" name="loginBtn" value="Sign In" class="loginButton">
</form>

<div class="loginFooterFixed">
    <p class="footerParagraphLeft">
       Forgot Password?
    </p>
    <p class="footerParagraphRight">
       Sign Up 
    </p>
</div>

</body>
</html>