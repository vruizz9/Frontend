<?php
    session_start();

    include_once('conexion.php');

    //Validación de usuario y contraseña
    if (isset($_POST['user']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $User = validate($_POST['user']);
        $Password = validate($_POST['password']);

        if (empty($User)) {
            header("Location: login.php?error=User is required");
            exit();
        }elseif (empty($Password)) {
            header("Location: login.php?error=Password is required");
            exit();
        }else{

            //Variables que guardaran los datos de la db
            $sql = "SELECT * FROM users WHERE user ='$User'";
            $query = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($query) == 1) {
                $userQ = mysqli_fetch_assoc($query);

                $id = $userQ['id'];
                $user = $userQ['user'];
                $password = $userQ['password'];
                $name = $userQ['name'];

                //Validar coincidencia de contraseñas 
                if ($User === $user) {
                    if (password_verify($Password, $password)){
                        $_SESSION['id'] = $id;
                        $_SESSION['user'] = $user;
                        $_SESSION['name'] = $name;

                        echo "<script>
                            alert('Bienvenido $name');
                            location.href = 'home.php.'
                        </script>";
                    }else {
                        header("Location: login.php?error=The user or password is incorrect.");
                        exit();
                    }
                }else {
                    header("Location: login.php?error=The user or password is incorrect.");
                    exit();
                }

            }else {
                header("Location: login.php?error=The user or password is incorrect.");
                exit();
            }

        }
    }else{
        header("Location: login.php");
        exit();
    }
?>