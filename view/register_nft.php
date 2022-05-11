<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/register_nft.css">
  <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
  <script src="../js/redirect.js"></script>
  <title>Battle Paint | Register NTF</title>
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
              <span class="neon4"></span>
              Buy
            </a>
          </li>

          <li class="menu__item">
            <a href="marketplace.php" title="Rent">
              <span class="neon1"></span>
              <span class="neon2"></span>
              <span class="neon3"></span>
              <span class="neon4"></span>
              Rent
            </a>
          </li>

          <li class="menu__item">
            <a href="points.php" title="Conversion">
              <span class="neon1"></span>
              <span class="neon2"></span>
              <span class="neon3"></span>
              <span class="neon4"></span>
              Points
            </a>
          </li>
        </div>

        <div class="menu__user">

          <li class="menu__item">
            <a href="#" title="Support">
              <span class="neon1"></span>
              <span class="neon2"></span>
              <span class="neon3"></span>
              <span class="neon4"></span>
              Support
            </a>
          </li>

          <li class="menu__item">
            <a href="Login_Page.php" title="Connect">
              <span class="neon1"></span>
              <span class="neon2"></span>
              <span class="neon3"></span>
              <span class="neon4"></span>
              Login
            </a>
          </li>

        </div>
      </ul>
    </nav>

  </header>


  <main class="main">

    <form action="" method="POST" class="register">
      <div class="register__title">
        <h2> NFTs Register </h2>
      </div>
      <div class="register_container">
        <div class="register__block one">
          <div class="register__block--son">
            <label for="name">Name</label>
            <input type="text" name="name" class="register__block--input"> <br><br>

            <label for="price">Price</label>
            <input type="number" name="price" class="register__block--input"> <br><br>

            <label for="owner">Owner</label>
            <input type="text" name="owner" class="register__block--input">
          </div>
        </div>

        <div class="register__block two">
          <div class="register__block--son">
            <label for="battle_power">Battle power</label>
            <input type="text" name="power" class="register__block--input"> <br><br>

            <label for="rank">Rank</label>
            <select name="rank" class="register__block--input">
              <option disabled>Select a rang</option>
              <option value="s">S</option>
              <option value="a">A</option>
              <option value="b">B</option>
            </select> <br><br>

            <label for="nft">
              <p>Imagen del NFT</p>
              <input type="file" name="nft_image" accept="image/png,image/jpeg" class="register__block--input">
            </label>
          </div>
        </div>
      </div>
      <div class="register__block--cta">
        <input type="submit" name="nft_register" value="Create NFT" class="register__block--button"> <br><br>
      </div>
    </form>
    </div>

    <script src="../js/register_nft-validations.js"></script>
    <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>

</html>