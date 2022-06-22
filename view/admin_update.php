<?php require_once('../controller/header_controller.php');
require_once('../model/User.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin_update.css">
  <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
  <title>Battle Paint | User update</title>
</head>

<body>

  <!-- Header -->
  <?php include($header);
  $user = new user;
  $question = $user->GetByUsername($username);
  while ($row = mysqli_fetch_array($question)) { ?>

    <main class="main">

      <form action="" class="update" id="update">
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
                <div id="group__input">
                  <h4 class="respuesta"><?php echo $row['username']; ?></h4>
                  <a href="../CRUD/admin_Update-username.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar contraseña"></a>
                </div>
                <p class="register__input--error" id="register__input--error">Username must be 4 to 15 characters (only a-z, 0-9, _).</p>
              </div>


              <!-- group email -->
              <div class="register__group" id="register__email">
                <label for="email" class="register__block--label">Email</label>
                <div id="group__input">
                  <h4 class="respuesta"><?php echo $row['email']; ?></h4>
                  <a href="../CRUD/admin_Update-email.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar email"></a>
                </div>
                <p class="register__input--error" id="register__input--error">Mail can only contain letters, numbers, dots, hyphens and underscores.</p>
              </div>

              <!-- group password -->
              <div class="register__group" id="register__password">
                <label for="password" class="register__block--label">Password</label>
                <div id="group__input">
                  <h4 class="respuesta"><?php echo $row['password']; ?></h4>
                  <a href="../CRUD/admin_Update-password.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar email"></a>
                </div>
                <p class="register__input--error" id="register__input--error">The password must be from 4 to 15 digits.</p>
              </div>


            <?php }; ?>
            </div>

          </div>

        </section>
      </form>
      </div>
      <script src="./js/redirect.js"></script>
      <script src="../js/update-validations.js"></script>
      <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>

</html>