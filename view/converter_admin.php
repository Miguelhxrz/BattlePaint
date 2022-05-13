<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/converter_admin.css">
    <link rel="shortcut icon" href="../source/img/logoBattlePaint1.png" type="image/x-icon">
    <script src="../js/redirect.js"></script>
    <title>Battle Paint | Balance</title>
</head>

<body>
    <header class="header">

        <a class="header__name" href="../index.php">
            <h1 class="header__name">Battle Paint</h1>
        </a>

        <nav class="menu__container">

            <ul class="menu">

                <div class="menu__select">

                    <li class="menu__item">
                        <a href="./marketplace.php" title="Buy">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Buy
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="./marketplace.php" title="Rent">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Rent
                        </a>
                    </li>

                    <li class="menu__item">
                        <a href="./points.php" title="Conversion">
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
                        <a href="./Login_Page.php" title="Connect">
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
        <form action="" class="register">
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
                    <a href="#" class="link_update">Update info</a>
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
                    <a href="report.php" class="link_update">Reports</a>
                </div>
                <div class="logout">
                    <img src="../source/img/svg/logout_white_24dp.svg" alt="logout" class="icon_logout">
                    <a href="../index.php" class="link_update">Logouts</a>
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
                                <div class="compra">
                                    <a href="./comprar_monedas.php">
                                        <h4>Buy</h4>
                                    </a>
                                    <img src="../source/img/svg/paint-backets.svg" class="moneda_4" alt="">
                                </div>
                            </div>
                        </article>

                        <article class="line_converter"></article>

                        <article class="container_converter">
                            <div class="converter">
                                <h3>Converter</h3>
                                <form action="">
                                    <label for="You send">
                                        You sent
                                        <div class="container_select">
                                            <input type="number" class="register__block--input">
                                            <select name="select_coin" id="rank" class="register__block--input">
                                                <option disabled>Select a coin</option>
                                                <option value="Paint Backets">Paint Backet<img src="" class="moneda_5" alt=""></option>
                                                <option value="Paint Points">Paint Points<img src="" class="moneda_6" alt=""></option>
                                            </select>
                                        </div>
                                    </label>

                                    <label for="You Got">
                                        You Got
                                        <div class="container_select">
                                            <input type="number" class="register__block--input">
                                            <select name="select_coin" class="register__block--input">
                                                <option disabled>Select a coin</option>
                                                <option value="Paint Backets">Paint Backets
                                                    <img src="../source/img/svg/paint-backets.svg" class="moneda_7" alt="">
                                                </option>
                                                <option value="Paint Points">Paint Points
                                                    <img src="../source/img/svg/paint-point.svg" class="moneda_8" alt="">
                                                </option>
                                            </select>
                                        </div>
                                    </label>
                                    <input type="submit" value="Converter" class="button_converter">
                            </div>
                        </article>

                    </section>

                </div>
            </div>
        </form>
        </div>
</body>

</html>