<?php require_once('../controller/header_controller.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Normalize.css">
    <link rel="stylesheet" href="../css/converter_admin.css">
    <link rel="shortcut icon" href="../source/img/logoBattlePaint1.png" type="image/x-icon">
    <script src="../js/redirect.js"></script>
    <title>Battle Paint | Balance</title>
</head>

<body>

    <?php include($header) ?>

    <main class="main">
        <section class="register">
            <div class="register__block one">
                <img src="../source/img/svg/logoBattlePaint1.svg" alt="logoBattlePaint" class="header__logo"> <br><br>

                <div class="line"></div>
                <div class="info__user">
                    <div class="username">
                        <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                        <h3>Username</h3>
                    </div>
                    <div class="username">
                        <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                        <h3>ID de usuario</h3>
                    </div>
                    <div class="username">
                        <img src="../source/img/paint-backets2.png" alt="user" class="icon_pb">
                        <h3>Balance</h3>
                    </div>
                </div>
                <div class="acount">
                    <h3>ACCOUNT</h3>
                </div>
                <div class="line"></div>
                <div class="update_info">
                    <img src="../source/img/svg/update.svg" alt="update" class="icon_update">
                    <a href="./admin_update.php" class="link_update">Update info</a>
                </div>
                <div class="my_nft">
                    <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
                    <a href="./admin.php" class="link_update">My NFTs</a>
                </div>
                <div class="my_balance">
                    <img src="../source/img/svg/buy.svg" alt="balance" class="icon_update">
                    <a href="./converter_admin.php" class="link_update">Balance</a>
                </div>
                <div class="register_nft">
                    <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
                    <a href="Register_Nft.php" class="link_update">NFT registration</a>
                </div>
                <div class="report">
                    <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
                    <a href="report.php" class="link_update">Reports</a>
                </div>
                <div class="logout">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <input type="submit" name='log-out' class="log-out__btn" value="Logout">
                    </form>
                    <?php 
                    
                    if(isset($_POST['log-out'])) {
                        session_destroy();

                        echo "<script>window.location.href = '../index.php';</script>";
                    }
            
                    
                    
                    ?>

                </div>
            </div>

            <div class="register__block two">
                <div class="user_update">

                    <section class="nft__container">
                        <article class="container_balance">
                            <div class="conta_balance">
                                <div class="balance">
                                    <div class="your_coins">
                                        <h3 class="your_coins">
                                            Your Coins
                                        </h3>
                                    </div>
                                    <div class="balance_a">
                                        <h4>10</h4>
                                        <img src="../source/img/svg/paint-backets.svg" class="moneda_1" alt="Paint Backets">
                                    </div>
                                    <div class="balance_b">
                                        <h4>1000</h4>
                                        <img src="../source/img/usd.png" alt="">
                                    </div>
                                </div>
                                <div class="valor">
                                    <h4>1 </h4><img src="../source/img/svg/paint-backets.svg" class="moneda_1" alt="">
                                    <h4> = 100</h4><img src="../source/img/svg/paint-point.svg" class="moneda_2" alt="">
                                </div>
                            </div>
                        </article>

                        <article class="line_converter"></article>

                        <article class="container_converter">
                            <div class="select_converter">
                                <div class="select_1">
                                    <a class="modal1__cta" id="" href="#">
                                        <h4>Converter PP to PB</h4>
                                    </a>
                                </div>
                                <div class="select_2">
                                    <a class="modal2__cta" id="" href="#">
                                        <h4>Converter PB to USD</h4>
                                    </a>
                                </div>
                            
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </section>
        </div>

        <!-- modal PP to PB -->
        <section class="modal1" id="modal1">
            <article class="modal__container">
                <form action="" method="" class="modal-form" id="modal-form">
                    <img class="modal__close" src="../source/img/close.png" alt="close">
                    <p class="modal__title">Convert PP to PB</p>
                    <div class="modal__container--son">
                        <img class="modal__image" src="../source/img/svg/paint-point.svg" alt="PP">
                        <div class="modal__container--field">
                            <label class="modal__container--label" for="input__quantity">Quantity</label>
                            <input class="modal__input--quantity" type="number" name="input__quantity" id="input__quantity1" min="1" max="100" require>
                        </div>
                    </div>

                    <hr>

                    <div class="modal__container--son">
                        <img class="modal__image" src="../source/img/svg/paint-backets.svg" alt="PB">
                        <p class="modal__convert">0</p>
                    </div>

                    <input class="modal__convert--button" type="submit" value="Convert">
                </form>
            </article>
        </section>

        <!-- modal PB to USD -->
        <section class="modal2" id="modal2">
            <article class="modal__container">
                <form action="" method="" class="modal-form" id="modal-form">
                    <img class="modal2__close" src="../source/img/close.png" alt="close">
                    <p class="modal__title">Convert PB to USD</p>
                    <div class="modal__container--son">
                        <img class="modal__image" src="../source/img/svg/paint-backets.svg" alt="PB">
                        <div class="modal__container--field">
                            <label class="modal__container--label" for="input__quantity">Quantity</label>
                            <input class="modal__input--quantity" type="number" name="input__quantity" id="input__quantity2" min="1" max="100" require>
                        </div>
                    </div>

                    <hr>

                    <div class="modal__container--son">
                        <img class="modal__image" src="../source/img/usd.png" alt="USD">
                        <p class="modal__convert2">0</p>
                    </div>

                    <input class="modal__convert--button2" type="submit" value="Convert">
                </form>
            </article>
        </section>



        <script src="../js/modal_converter.js"></script>



</body>

</html>