<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Normalize.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <script src="./js/redirect.js"></script>
    <title>Battle Paint | Login</title>
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
                        <a href="points.php" title="Points">
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
                        <a href="marketplace.php" title="Connect">
                            <span class="neon1"></span>
                            <span class="neon2"></span>
                            <span class="neon3"></span>
                            <span class="neon4"></span> Marketplace
                        </a>
                    </li>

                </div>
            </ul>
        </nav>

    </header>

    <main class="container">
        <form action="" class="login__container">

            <h3 class="form__title">Login</h3>

            <label for="username" class="login__username--label"> Username </label>
            <input type="text" name="username" id="username" placeholder="Username" class="login__block--input">


            <br><br>

            <label for="password" class="login__password--label"> Password </label>
            <input type="password" name="password" id="password" placeholder="Password" class="login__block--input"> <br><br>

            <div class="login__block--cta">
                <input type="submit" value=" LOGIN " class="login__block--button">
            </div>
            <p class="login__register">You don't have an account yet? <a href="register_page.php"> Resgister now</a></p>
        </form>
    </main>

</body>

</html>