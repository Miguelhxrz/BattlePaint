<?php
  if(empty($_SESSION['username']) && empty($_SESSION['id']) && empty($_SESSION['balance']) ){
    $username = 'Please login to continue!';
    $user_id = 'Please login to continue!';
    $user_balance = 'Please login to continue!';
  }else {
    $username = $_SESSION['username'];
  }
?>

<?php
  // if (empty($_SESSION[]) && empty() && empty()) {

  // }
?>

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
        <a href="points.php" title="Conversion">
          <span class="neon1"></span>
          <span class="neon2"></span>
          <span class="neon3"></span>
          <span class="neon4"></span> Points
        </a>
      </li>
    </div>

    <div class="menu__user">
      <li class="menu__item_admin">
        <a href="./user.php"><img src="../source/img/paint-point2.png" alt="paint-backets" class="logo_admin pp"></a>
        <h5 class="menu__texts">PP</h5>
      </li>

      <li class="menu__item_admin">
        <a href="./user.php"><img src="../source/img/paint-backets2.png" alt="paint-backets" class="logo_admin"></a>
        <h5 class="menu__texts"> <?php echo $user_balance ?> </h5>
      </li>

      <li class="menu__item_admin" >
        <a href="./user.php"><img src="../source/img/svg/user.svg" alt="Logo Admin" class="logo_admin"></a>
        <h5 class="menu__texts"><?php echo $username ?></h5>
      </li>
    </div>
  </ul>
</nav>
</header>
