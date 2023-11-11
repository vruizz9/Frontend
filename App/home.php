<?php
    //Validar datos de la db
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
    <CENTER>
        <h1>Home</h1>
    </CENTER>
    <a href="cerrar_sesion.php" class="btn btn-danger" style="width: 10%;display: flex;justify-content: center;margin: auto;color: #fff;background-color: #dc3545;border-color: #dc3545;">Log Out</a>
</body>
</html>

<?php }else {
    header('location: login.php');
} ?>