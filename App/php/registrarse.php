<?php
    session_start();

    include('conexion.php');
    if (isset($_POST['user']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['rpassword'])) {
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $User = validate($_POST['user']);
        $Name = validate($_POST['name']);
        $Password = validate($_POST['password']);
        $Rpassword = validate($_POST['rpassword']);

        $dataUser = 'user= ' . $User . '&name=' . $Name;

        //Validación de los datos
        if (empty($User)) {
            header("Location: register.php?error=User is required&$dataUser");
            exit();
        }elseif (empty($Name)) {
            header("Location: register.php?error=Name is required&$dataUser");
            exit();
        }elseif (empty($Password)) {
            header("Location: register.php?error=Password is required&$dataUser");
            exit();
        }elseif (empty($Rpassword)) {
            header("Location: register.php?error=Rpassword is required&$dataUser");
            exit();
        }elseif ($Password !== $Rpassword) {
            header("Location: register.php?error=The password does not match&$dataUser");
            exit();
        }else {
            //Hashing de contraseña
            $Password = password_hash($Password, PASSWORD_DEFAULT);

            $sql = "SELECT * FROM usuarios WHERE user = '$User'";
            $result = mysqli_query($conexion, $sql);

            //Validación de formularios 
            if (mysqli_num_rows($result) > 0) {
                header("Location: register.php?error=User already exists");
                exit();
            }else{
                //Insersión de datos nuevos a la bd
                $sql2 = "INSERT INTO usuarios(name, user, password) VALUES('$Name','$User','$Password')";
                $result2 = mysqli_query($conexion, $sql2);

                if ($result2) {
                    header("Location: register.php?success=User created successfully");
                    exit();
                }else {
                    header("Location: register.php?success=An error occurred");
                    exit();
                }
            }
        }
            
    }else{
        header("Location: register.php");
        exit();
    }
?>