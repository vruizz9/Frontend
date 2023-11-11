<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style2.css?v=<?php echo(rand()); ?>">
    <link rel="icon" href="Images/logo.svg">
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
    <section id="main">
        <section>
            <div class="presentation">
                <div class="image">
                    <img src="Images/img5.png" alt="Dogs">
                </div>
                <!-- categorias de productos que se pueden encontrar -->
                <div class="categories">
                    <div>
                        <p>TOYS</p>
                        <p>DOG FOOD</p>
                    </div>
                    <div>
                        <p>ACCESSORIES</p>
                        <p>HYGIENE PRODUCTS</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- información de los productos -->
        <section>
            <div class="grid-container">
                <div class="info-products">
                    <div class="grid-item" style="background-image: url(Images/Frame1.png)">
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        <div class="content">
                            <a href="#">Mordedor Juguete Para Perros<br>$13.600</a>
                        </div>
                    </div>
                    <div class="grid-item" style="background-image: url(Images/Frame2.png)">
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        <div class="content">
                            <a href="#">Plato Mascotas Antireflujo<br>$21.800</a>
                        </div>
                    </div>
                    <div class="grid-item" style="background-image: url(Images/Frame3.png)">
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        <div class="content">
                            <a href="#">Cama Mediana Para Mascota<br>$36.900</a>
                        </div>
                    </div>
                    <div class="grid-item" style="background-image: url(Images/Frame4.png)">
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        <div class="content">
                            <a href="#">Alimento Pedigree Sano Crecimiento - Cachorro<br>$14.900</a>
                        </div>
                    </div>
                </div>
                <div class="info-products">
                    <p>Mordedor Juguete Para Perros<br><span>$13.600</span></p>
                    <p>Plato Mascotas Antireflujo<br><span>$21.800</span></p>
                    <p>Cama Mediana Para Mascota<br><span>$36.900</span></p>
                    <p>Alimento Pedigree Sano Crecimiento - Cachorro<br><span>$14.900</span></p>
                </div>
                <div class="info-products">
                    <div class="grid-item" style="background-image: url(Images/Frame5.png)">
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        <div class="content">
                            <a href="#">Corta Uñas Pinzas Tijeras Para Mascotas<br>$15.900</a>
                        </div>
                    </div>
                    <div class="grid-item" style="background-image: url(Images/Frame6.png)">
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        <div class="content">
                            <a href="#">Alimento Dog Chow Salud Visible - Adulto(Razas:Mediana y Grande) Bolsa 8kg<br>$112.900</a>
                        </div>
                    </div>
                    <div class="grid-item" style="background-image: url(Images/Frame7.png)">
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        <div class="content">
                            <a href="#">Plato Mascotas Interactivo<br>$35.000</a>
                        </div>
                    </div>
                    <div class="grid-item" style="background-image: url(Images/Frame8.png)">
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        <div class="content">
                            <a href="#">Nex Gard M (4;1 - 10 Kg) * 1 Tab<br>$37.500</a>
                        </div>
                    </div>
                </div>
                <div class="info-products">
                    <p>Corta Uñas Pinzas Tijeras Para Mascotas<br><span>$15.900</span></p>
                    <p>Alimento Dog Chow Salud Visible - Adulto(Razas:Mediana y Grande) Bolsa 8kg<br><span>$112.900</span></p>
                    <p>Plato Mascotas Interactivo<br><span>$35.000</span></p>
                    <p>Nex Gard M (4;1 - 10 Kg) * 1 Tab<br><span>$37.500</span></p>
                </div>
            </div>
        </section>
    </section>
</body>
</html>