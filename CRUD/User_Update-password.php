<?php require_once('../controller/header_controller.php');
require_once('../model/User.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_update.css">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <script src="./js/redirect.js"></script>
    <title>Battle Paint | User update</title>
</head>

<body>
    <!-- Header -->
    <?php include($header);
    $user = new user;
    $question = $user->GetByUsername($_SESSION['username']);
    while ($row = mysqli_fetch_array($question)) { ?>
        <main class="main">
            <section>
                <section class="register">

                <div class="register__block one">
                        <img src="../source/img/svg/logoBattlePaint1.svg" alt="logoBattlePaint" class="header__logo"> <br><br>

                        <div class="line"></div>
                        <div class="info__user">
                            <div class="username">
                                <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                                <h3><?php echo $row['username']; ?></h3>
                            </div>
                            <div class="username">
                                <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                                <h3><?php echo $row['id']; ?></h3>
                            </div>
                        </div>
                        <div class="acount">
                            <h3>ACCOUNT</h3>
                        </div>
                        <div class="line"></div>
                        <div class="update_info">
                            <img src="../source/img/svg/update.svg" alt="update" class="icon_update">
                            <a href="" class="link_update">Update info</a>
                        </div>
                        <div class="my_nft">
                            <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
                            <a href="../view/user.php" class="link_update">My NFTs</a>
                        </div>
                        <div class="my_balance">
                            <img src="../source/img/svg/buy.svg" alt="balance" class="icon_update">
                            <a href="../view/converter_user.php" class="link_update">Balance</a>
                        </div>
                        <div class="logout">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <input type="submit" name='log-out' class="log-out__btn" value="Logout">
                            </form>
                            <?php

                            if (isset($_POST['log-out'])) {
                                session_destroy();

                                echo "<script>window.location.href = '../index.php';</script>";
                            }



                            ?>

                        </div>

                    </div>

                    <div class="register__block two">
                        <div class="register__title">
                            <h2>Update info</h2>
                        </div>
                        <div class="user_update">

                            <!-- group username -->
                            <div class="register__group" id="register__username">
                                <label for="username" class="register__block--label">Username</label>
                                <div id="group__input" class="group__input">
                                    <h4 class="respuesta"><?php echo $row['username']; ?></h4>
                                    <a href="../CRUD/User_Update-username.php" class="icon" title="edit"> <i class="edit fa-solid fa-pen-to-square"></i> </a>
                                </div>
                                <p class="register__input--error" id="register__input--error">Username must be 4 to 15 characters (only a-z, 0-9, _).</p>
                            </div>

                            <!-- group email -->
                            <div class="register__group" id="register__email">
                                <label for="email" class="register__block--label">Email</label>
                                <div id="group__input" class="group__input">
                                    <h4 class="respuesta"><?php echo $row['email']; ?></h4>
                                    <a href="../CRUD/User_Update-email.php" class="icon" title="edit"> <i class="edit fa-solid fa-pen-to-square"></i> </a>
                                </div>
                                <p class="register__input--error" id="register__input--error">Mail can only contain letters, numbers, dots, hyphens and underscores.</p>
                            </div>
                        </div>
                        <div class="user_update2">

                            <!-- group password -->
                            <div class="register__group" id="register__username">
                                <label for="" class="register__block--label">Password</label>
                                <div id="group__input">
                                    <!-- form password -->
                                    <form method="POST" class="form__edit" id="form__edit">
                                        <div class="edit__group input" id="group__name">
                                            <label for="name" class="group__input-username">Password:</label>
                                            <div class="form__group-input">
                                                <input type="password" id="name" name="name" class="input__crud" placeholder="New password">
                                                <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                                            </div>
                                        </div>

                                        <!-- error message -->
                                        <div class="register__message" id="register__message">
                                            <p><i class="fa-solid fa-triangle-exclamation"></i> <b>¡Error!</b> Invalid user.</p>
                                        </div>

                                        <div class="edit__group submit">
                                            <input type="submit" class="btn-edit" name="btn-edit" id="btn-edit" value="Editar">
                                            <a href="../view/User_Update.php" class="volver">Volver</a>
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['password'])) {

                                        $errores = array();
                                        if (isset($_POST['btn-edit'])) {
                                            $password = $_POST['password'];
                                            if (strlen($password) < 3) {

                                                array_push($errores, "Error 067:La contraseña debe ser mayor o igual a 3 digitos.");
                                            } else {
                                                $sesion = $_SESSION['username'];

                                                $update = $user->UpdatePassword($password, $sesion);
                                                if ($update == true) {
                                                    echo '<meta http-equiv="refresh" content="0;url=../view/User_Update.php">';
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- group wallet -->
                            <div class="register__group" id="register__password">
                                <label for="username" class="register__block--label">Binance Email</label>
                                <div id="group__input" class="group__input">
                                    <h4 class="respuesta"><?php echo $row['binance']; ?></h4>
                                    <a href="../CRUD/User_Update-binance.php" class="icon" title="edit"> <i class="edit fa-solid fa-pen-to-square"></i> </a>
                                </div>
                                <p class="register__input--error" id="register__input--error">The password must be from 4 to 15 digits.</p>
                            </div>
                        <?php }; ?>
                        </div>

                    </div>

                </section>
            </section>
            <form action="" method="post" class="form__hidden">
                <input type="text" name="new_username" id="new_username">
                <input type="text" name="new_email" id="new_email">
                <input type="text" name="new_password" id="new_password">
            </form>
            </div>
            <?php


            if (isset($_POST['new_username']) && isset($_POST['new_email']) && isset($_POST['new_password'])) {

                $_SESSION['username'] = $_POST['new_username'];
                $_SESSION['email'] = $_POST['new_email'];
                $_SESSION['password'] = $_POST['new_password'];
            }





            ?>

            <!-- <script src="./js/redirect.js"></script> -->
            <script src="../js/validations_crud/user_update-password.js"></script>
            <!-- <script src="../js/update-validations.js"></script> -->
            <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
        </main>
</body>

</html>