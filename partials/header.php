<?php 
    session_start();
    var_dump($_SESSION['username'])

?>

<header class="header">

<a class="header__name" href="../index.php">
    <h1 class="header__name">Battle Paint</h1>
</a>


<nav class="menu__container">

    <ul class="menu">

        <div class="menu__select">

            <li class="menu__item">
                <a href="#" title="Buy">
                    <span class="neon1"></span>
                    <span class="neon2"></span>
                    <span class="neon3"></span>
                    <span class="neon4"></span> Buy
                </a>
            </li>

            

            <li class="menu__item">
                <a href="points.php" title="Points">
                    <span class="neon1"></span>
                    <span class="neon2"></span>
                    <span class="neon3"></span>
                    <span class="neon4"></span> Paints
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
                <a href="login_page.php" title="Connect">
                    <span class="neon1"></span>
                    <span class="neon2"></span>
                    <span class="neon3"></span>
                    <span class="neon4"></span>
                    <img src="../source/img/svg/user.svg" alt="User" class="icon_logout">
                </a>
            </li>

        </div>
    </ul>
</nav>

</header>