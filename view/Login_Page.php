<?php require_once('../controller/header_controller.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Normalize.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <title>Battle Paint | Login</title>
</head>

<body>
    <?php include($header) ?>
    <main class="main">
        <form action="" class="login__container" id="login__container">

            <section class="register__title">
                <h2> Login </h2>
            </section>

            <section class="register__block one">
                <!-- username -->
                <div class="register__group" id="register__username">
                    <label for="username" class="register__block--label"> Username </label>
                    <div class="group__input">
                        <input type="text" name="username" id="username" placeholder="Username" class="register__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                        <!-- <img class="form__validation--state"  alt="circle-xmark-solid"> -->
                    </div>
                    <p class="register__input--error">Username must be 6 to 16 characters (only a-z, 0-9, _).</p>
                </div>

                <!-- password -->
                <div class="register__group" id="register__password">
                    <label for="password" class="register__block--label"> Password </label>
                    <div class="group__input">
                        <input type="password" name="password" id="password" placeholder="Password" class="login__block--input">
                        <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="register__input--error">The password must be from 8 to 20 digits.</p>
                </div>
            </section>

            <section class="register__block two">
                <div class="login__block--cta">
                    <!-- error message -->
                    <div class="register__message" id="register__message">
                        <p><i class="fa-solid fa-triangle-exclamation"></i> ¡Access error!</p>
                    </div>

                    <input type="submit" value=" LOGIN " class="login__block--button">
                    <p class="login__register">You don't have an account yet? <a href="register_page.php"> Resgister now</a></p>
                </div>
            </section>
        </form>
    </main>

    <script src="../js/redirect.js"></script>
    <script src="../js/login_page.js"></script>
    <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>
</html>