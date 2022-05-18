<?php $username = $_SESSION['username']; ?>
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
          <li class="menu__item_admin" >
            <a href="./admin.php"><img src="../source/img/svg/admin.svg" alt="Logo Admin" class="logo_admin"></a>
            <h5><?php echo $username  ?></h5>
          </li>
        </div>
      </ul>
    </nav>
  </header>