<?php require_once('../controller/header_controller.php');
require_once('../model/User.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_update.css">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <script src="./js/redirect.js"></script>
    <title>Battle Paint | User update</title>
</head>

<body>
    <!-- Header -->
     <!-- Header -->
     <?php foreach( $user_conf as $user) {?>
           
           <header class="header">
           
           <a class="header__name" href="../index.php">
             <h1 class="header__name">Battle Paint</h1>
           </a>
           
           <nav class="menu__container">
             <ul class="menu">
               <div class="menu__select">
                 <li class="menu__item">
                   <a href="../view/marketplace.php" title="Buy">
                     <span class="neon1"></span>
                     <span class="neon2"></span>
                     <span class="neon3"></span>
                     <span class="neon4"></span> Buy
                   </a>
                 </li>
           
                 
           
                 <li class="menu__item">
                   <a href="../view/points.php" title="Conversion">
                     <span class="neon1"></span>
                     <span class="neon2"></span>
                     <span class="neon3"></span>
                     <span class="neon4"></span> Points
                   </a>
                 </li>
               </div>
           
               <div class="menu__user">
                 <li class="menu__item_admin">
                   <a href="../view/points.php"><img src="../source/img/paint-backets2.png" alt="paint-backets" class="logo_admin"></a>
                   <h5 class="menu__texts"><?php echo $user['balance']; ?></h5>
                 </li>
           
                 <li class="menu__item_admin" >
                   <a href="../view/user.php"><img src="../source/img/svg/user.svg" alt="Logo Admin" class="logo_admin"></a>
                   <h5 class="menu__texts"><?php echo $user['username'];}?></h5>
                 </li>
               </div>
             </ul>
           </nav>
           </header>
    <?php
    $user = new user;
    $question = $user->GetByUsername($_SESSION['username']);
    while ($row = mysqli_fetch_array($question)) { ?>
        <main class="main">
            <section>
                <section class="register">

                <section class="register__block one">
          <img src="../source/img/svg/logoBattlePaint1.svg" alt="logoBattlePaint" class="header__logo"> <br><br>
          <div class="line"></div>
          <div class="info__user">
            <?php foreach ($user_conf as $user) { ?>
              <div class="username">
                <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                <h3><?php echo $user['username'] ?></h3>
              </div>
              <div class="username">
                <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                <h3><?php echo $user['id'] ?></h3>
              </div>
              
          </div>
        <?php } ?>

        <div class="acount">
          <h3>ACCOUNT</h3>
        </div>

        <div class="line"></div>
        <div class="update_info">
          <img src="../source/img/svg/update.svg" alt="update" class="icon_update">
          <a href="../view/admin_update.php" class="link_update">Update info</a>
        </div>

        <div class="my_nft">
          <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
          <a href="../view/admin.php" class="link_update">My NFTs</a>
        </div>


        <div class="register_nft">
          <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
          <a href="../view/register_nft.php" class="link_update">NFT registration</a>
        </div>

        <div class="report">
          <img src="../source/img/svg/buy.svg" alt="nft" class="icon_update">
          <a href="../view/report.php" class="link_update">Reports</a>
        </div>

        <div class="logout">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="submit" name='log-out' class="log-out__btn" value="Logout">
          </form>
          <?php

          if (isset($_POST['log-out'])) {

            session_destroy();

            echo "<script>window.location.href = './index.php';</script>";
          }



          ?>

        </div>
        </section>

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
                                    <a href="../CRUD/admin_Update-password.php" class="icon" title="edit"> <i class="edit fa-solid fa-pen-to-square"></i> </a>
                                </div>
                                <p class="register__input--error" id="register__input--error">Username must be 4 to 15 characters (only a-z, 0-9, _).</p>
                            </div>

                            <!-- group email -->
                            <div class="register__group" id="register__email">
                                <label for="email" class="register__block--label">Email</label>
                                <div id="group__input" class="group__input">
                                    <h4 class="respuesta"><?php echo $row['email']; ?></h4>
                                    <a href="../CRUD/admin_Update-email.php" class="icon" title="edit"> <i class="edit fa-solid fa-pen-to-square"></i> </a>
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
                                            <p><i class="fa-solid fa-triangle-exclamation"></i> <b>??Error!</b> Invalid user.</p>
                                        </div>

                                        <div class="edit__group submit">
                                            <input type="submit" class="btn-edit" name="btn-edit" id="btn-edit" value="Editar">
                                            <a href="../view/admin_update.php" class="volver">Volver</a>
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['name'])) {

                                        $errores = array();
                                        if (isset($_POST['btn-edit'])) {
                                            $password = $_POST['name'];
                                            if (strlen($password) < 3) {

                                                array_push($errores, "Error 067:La contrase??a debe ser mayor o igual a 3 digitos.");
                                            } else {
                                                $sesion = $_SESSION['username'];

                                                $update = $user->UpdatePassword($password, $sesion);
                                                if ($update == true) {
                                                    echo '<meta http-equiv="refresh" content="0;url=../view/admin_update.php">';
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                        <?php }; ?>
                        </div>

                    </div>
                </section>
            </section>

            <script src="../js/validations_crud/user_update-email.js"></script>
            <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
        </main>
</body>

</html>