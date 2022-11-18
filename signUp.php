<?php
include("conexion.php");
$con = conectar();

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


$sql = "INSERT INTO usuarios VALUES(null,'$usuario', '$contraseña') ";
$query = mysqli_query($con, $sql);

if($query){
    
    Header("Location: index.php");
}

    ?>