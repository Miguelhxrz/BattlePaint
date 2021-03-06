<?php require_once('../controller/header_controller.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Normalize.css">
    <link rel="stylesheet" href="../css/comprar_monedas.css">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <title>Battle Paint | Comprar Monedas</title>
</head>

<body>

    <?php include($header) ?>

    <main class="main">
        <form action="" class="login__container" id="login__container">

            <section class="register__title">
                <h2> Comprar Monedas </h2>
            </section>

            <section class="register__block one">
                <!-- Cantidad de monedas -->
                <div class="register__group" id="register__cantidad">
                    <label for="username" class="register__block--label"> Cantidad de Monedas </label>
                    <div class="group__input">
                        <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad" value="1" class="register__block--input">
                    </div>
                </div>

                <!-- Precio de la compra -->
                <div class="register__group" id="register__precio">
                    <label for="password" class="register__block--label"> Precio </label>
                    <div class="group__input">
                        <input type="text" name="Precio" id="Precio" placeholder="Precio" value="100" class="login__block--input">
                        <!-- <i class="form__validation--state fa-solid fa-circle-xmark"></i> -->
                    </div>
                </div>
            </section>

            <section class="register__block two">
                <div class="login__block--cta">
                    <input type="submit" value=" COMPRAR " class="login__block--button">
                </div>
            </section>
        </form>
    </main>

    <script src="../js/redirect.js"></script>
    <script src="../js/login_page.js"></script>
    <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>
</html>