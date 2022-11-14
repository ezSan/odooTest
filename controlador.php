<?php

if (!empty($_POST["loginBtn"])) {
    if (empty($_POST["usuario"]) and empty($_POST["contraseña"])) {
        echo "LOS CAMPOS ESTAN VACIOS";
    } else {
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];        

        $sql = conectar()->query("SELECT * from usuarios where usuario='$usuario' and contraseña='$contraseña'");

        if ($datos = $sql->fetch_object()) {
            header("location:publicaciones.php");
        } else {
            echo "ACCESO DENEGADO";
        }

    }

}

?>