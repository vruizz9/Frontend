<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style3.css?v=<?php echo(rand()); ?>" />
    <link rel="icon" href="Images/logo.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="functions.js?v=<?php echo(rand()); ?>"></script>
    <title>PetShop</title>
</head>
<body>
    <section>
        <!-- barra lateral de navegación apta para dispositivos tablets y moviles-->
        <nav id="sideNavigation" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php" target="_self">Home</a>
            <a href="#">Birds</a>
            <a href="#">Cats</a>
            <a href="petshop.php" target="_self">Dogs</a>
            <a href="#">Rodent</a>
            <a href="#">Rabbit</a>
            <a href="login.php" target="_self"><i class="fa-solid fa-user"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </nav>
        <nav class="topnav">
            <a href="#" onclick="openNav()">
              <i class="fas fa-bars"></i>
            </a>
        </nav>
        <!-- barra superior de navegacion apta para dispositivos desktop -->
        <nav class="navegacion">
            <ul>
                <img class="logo" src="Images/logo.svg" alt="logo">
                <li>
                    <a href="index.php" target="_self">Home</a>
                </li>
                <li>
                    <a href="#">Birds</a>
                </li>
                <li>
                    <a href="#">Cats</a>
                </li>
                <li>
                    <a href="petshop.php" target="_self">Dogs</a>
                </li>
                <li>
                    <a href="#">Rodent</a>
                </li>
                <li>
                    <a href="#">Rabbit</a>
                </li>
                <li>
                    <a href="login.php" target="_self"><i class="fa-solid fa-user"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            </ul>
       </nav>
    </section>
    <!-- sección de logueo para los usuarios registrados -->
    <section id="main">
        <div class="login">
            <div class="container">
                <i class="fa-solid fa-user"></i>
                <form action="inicio_sesion.php" method="POST">
                <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']?></p>
                <?php } ?>
                <input type="text" id="user" name="user" placeholder="User"><br><br>
                <input type="password" id="password" name="password" placeholder="Password"><br><br>
                <div class="btns">
                    <div class="remember-me">
                        <input type="checkbox" id="recordar" name="recordar">
                        <label for="recordar">Remember me</label>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit">Sign In</button>
                <p class="register">Don't have an account? <span><a href="register.php">Register here</a></span></p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>