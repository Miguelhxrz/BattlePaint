<?php 
    require_once('../controller/header_controller.php');

    require_once('../controller/user_controller.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="shortcut icon" href="../source/img/logoBattlePaint1.png" type="image/x-icon">
    <script src="../js/redirect.js"></script>
    <title>Battle Paint | User Page</title>
</head>

<body>
    <?php include($header) ?>

    <main class="main">
        <section class="register">
            <div class="register__block one">
                <img src="../source/img/svg/logoBattlePaint1.svg" alt="logoBattlePaint" class="header__logo"> <br><br>

                <div class="line"></div>
                <div class="info__user">
                    <?php foreach( $user_conf as $user) {?>
                    <div class="username">
                        <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                        <h3><?php echo $user['username'] ?></h3>
                    </div>
                    <div class="username">
                        <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                        <h3><?php echo $user['id'] ?></h3>
                    </div>
                    <div class="username">
                        <img src="../source/img/paint-backets2.png" alt="user" class="icon_pb">
                        <h3><?php echo $user['balance'] ?></h3>
                    </div>
                </div>
                <?php } ?>
                <div class="acount">
                    <h3>ACCOUNT</h3>
                </div>
                <div class="line"></div>
                <div class="update_info">
                    <img src="../source/img/svg/update.svg" alt="update" class="icon_update">
                    <a href="./User_Update.php" class="link_update">Update info</a>
                </div>
                <div class="my_nft">
                    <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
                    <a href="./user.php" class="link_update">My NFTs</a>
                </div>
                <div class="my_balance">
                    <img src="../source/img/svg/buy.svg" alt="balance" class="icon_update">
                    <a href="./converter_user.php" class="link_update">Balance</a>
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
                <div class="register__title">
                    <h2>My NFTs</h2>
                </div>
                <div class="user_update">

                    <section class="nft__container">

                        <article class="nft__card">
                            <figure class="nft__img">
                                <img src="../source/img/Characters/test3.png" alt="Shanna">
                            </figure>
                            <div class="nft__rank a">
                                <h4>A</h4>
                            </div>
                            <div class="nft__name a">
                                <h3>Shanna</h3>
                            </div>
                            <div class="nft__price">
                                <article class="price">
                                    <h4>Price PB:</h4>
                                    <div class="price__pay">
                                        <img src="../source/img/paint-backets2.png" alt="paint bucket icon">
                                        <h4>????</h4>
                                    </div>
                                </article>
                                <article class="price">
                                    <h4>Price USD:</h4>
                                    <div class="price__pay">
                                        <img src="../source/img/usd.png" alt="paint bucket icon">
                                        <h4>????</h4>
                                    </div>
                                </article>
                            </div>
                        </article>
                </div>
            </div>
        </section>
        </div>
</body>

</html>