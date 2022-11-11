<?php 

function conectar(){
    $host="localhost";
    $user="root";
    $pass="123456789";

    $bd="odootest";

    $con=mysqli_connect($host, $user, $pass);
    
    mysqli_select_db($con,$bd);

    return $con;

}

?>