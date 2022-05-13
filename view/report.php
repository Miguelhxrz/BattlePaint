<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/report.css">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <title>Battle Paint | Reports</title>
</head>

<body>
    <header class="header">

        <h1 class="header__name">Battle Paint</h1>

        <nav class="menu__container">

            <ul class="menu">

                <div class="menu__select">

                    <li class="menu__item">
                        <a href="marketplace.php" title="Buy">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Buy
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="marketplace.php" title="Rent">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Rent
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="points.php" title="Conversion">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Points
                        </a>
                    </li>
                </div>

                <div class="menu__user">

                    <li class="menu__item">
                        <a href="#" title="Support">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Support
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="Login_Page.php" title="Connect">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Login
                        </a>
                    </li>

                </div>
            </ul>
        </nav>

    </header>
    <main class="main">

        <form action="">
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
                        <a href="admin_update.php" class="link_update">Update info</a>
                    </div>
                    <div class="my_nft">
                        <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
                        <a href="admin.php" class="link_update">My NFTs</a>
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
                        <a href="#" class="link_update">Reports</a>
                    </div>
                    <div class="logout">
                        <img src="../source/img/svg/logout_white_24dp.svg" alt="logout" class="icon_logout">
                        <a href="../index.php" class="link_update">Logouts</a>
                    </div>

                </div>

                <div class="register__block two">
                    <div class="register__title">
                        <h2>Reports</h2>
                    </div>
                    <div class="user_update">
                        <div class="register__block--son">
                            <div class="register__block--cta">
                                <input type="submit" value="usuarios registrados" class="register__block--button"> <br><br>
                            </div>

                            <div class="register__block--cta">
                                <input type="submit" value="NFTs registradas" class="register__block--button"> <br><br>
                            </div>
                            <div class="register__block--cta">
                                <input type="submit" value="Monedas compradas" class="register__block--button"> <br><br>
                            </div>
                        </div>

                    </div>
                </div>
                </div>

            </section>
        </form>
        </div>
</body>

</html>