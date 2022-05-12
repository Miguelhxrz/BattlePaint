<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/register_nft.css">
  <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
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
    
    <form action="" class="register" id="register">
      
      <section class="register__title">
        <h2> NFTs Register </h2>
      </section>
      
      <section class="register__block one">
        <!-- name -->
        <div class="register__group" id="register__name">
          <label for="name" class="register__block--label">Name</label>
          <div id="group__input">
            <input type="text" name="name" id="name" class="register__block--input">
            <i class="form__validation--state fa-solid fa-circle-xmark"></i>
          </div>
          <p class="register__input--error" id="register__input--error">The name must be from 4 to 15 characters, no special characters or numbers.</p>
        </div>

        <!-- power -->
        <div class="register__group" id="register__power">
          <label for="battle_power" class="register__block--label">Battle power</label>
          <div id="group__input">
            <input type="text" name="power" id="power" class="register__block--input">
            <i class="form__validation--state fa-solid fa-circle-xmark"></i>
          </div>
          <p class="register__input--error" id="register__input--error">The power of attorney must be 4 to 15 characters long, without special characters or numbers.</p>
        </div>
        
        <!-- rank -->
        <div class="register__group" id="register__rank">
          <label for="rank">Rank</label>
          <select name="rank" id="rank" class="register__block--input">
              <option disabled>Select a rang</option>
              <option value="s">S</option>
              <option value="a">A</option>
              <option value="b">B</option>
            </select>
          </div>
      </section>

      <section class="register__block two">
        <!-- price -->
        <div class="register__group" id="register__price">
          <label for="price" class="register__block--label">Price</label>
          <div id="group__input">
            <input type="number" name="price" id="price" class="register__block--input">
            <i class="form__validation--state fa-solid fa-circle-xmark"></i>
          </div>
          <p class="register__input--error" id="register__input--error">The price must have a value greater than or equal to zero and contain only numbers and dots.</p>
        </div>

        <!-- owner -->
        <div class="register__group" id="register__owner">
          <label for="owner" class="register__block--label">Owner</label>
          <div class="group__input">
            <input type="text" name="owner" id="owner" class="register__block--input">
            <i class="form__validation--state fa-solid fa-circle-xmark"></i>
          </div>
          <p class="register__input--error" id="register__input--error">The owner must be 4 to 15 characters long, without special characters or numbers.</p>
        </div>

        <!-- image -->
        <div class="register__group" id="register__image">
          <label for="nft">
              <p>Imagen del NFT</p>
              <input type="file" name="nft_image" id="nft_image" accept="image/png,image/jpeg" class="register__block--input">
            </label>
          </div>
      </section>
      
      <section class="register__block three">
        <!-- class -->
        <div class="register__group" id="register__class">
          <label for="class">Class</label>
          <select name="class" id="class">
            <option value="tank">Tank</option>
            <option value="shooter">Shooter</option>
            <option value="assassin">Assassin</option>
          </select>
        </div>
      </section>
      
      <div class="register__block--cta">
        <!-- error message -->
        <div class="register__message" id="register__message">
          <p><i class="fa-solid fa-triangle-exclamation"></i> <b>¡Error!</b> Fill in all registration fields correctly.</p>
        </div>
        
        <button onclick="registerData()" class="register__block--button">Create NFT</button>
          <!-- registration complete -->
          <p class="register__complete" id="register__complete"><i class="fa-solid fa-check"></i> Registration successfully completed!</p>
        </div>
      </form>
    </div>

    <script src="../js/redirect.js"></script>
    <script src="../js/register_nft.js"></script>
    <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>

</html>