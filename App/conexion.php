<?php
    //Variables para conexión a bd
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "login_register";
    $conexion = mysqli_connect($host, $user, $pass, $db);

    //Mensaje de error
    if (!$conexion) {
        echo "Conexión fallida";
    }
?>