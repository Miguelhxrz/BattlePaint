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
    <header class="header">
    
        <h1 class="header__name"><a href="../index.php">Battle Paint</a></h1>
        
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
                <a href="points.php" title="Points"> 
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
        
        <form action="" class="update" id="update">
            <section class="register">

                <div class="register__block one">
                <img src="../source/img/svg/logoBattlePaint2.svg" alt="logoBattlePaint" class="header__logo"> <br><br>
                
                <div class="line"></div>
                <div class="info__user">
                    <div class="username">
                    <img src="../source/img/svg/user.svg" alt="user" class="icon_user">
                    <h3>Username</h3>
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
                <div class="register_nft">
                  <img src="source/img/buy.svg" alt="nft" class="icon_update">
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
                  <div class="register__title">
                      <h2>Update info</h2>
                  </div>
                  <div class="user_update">
<!-- group username -->
<div class="register__group" id="register__username">
  <label for="username" class="register__block--label">Username</label>
  <div id="group__input">
      <input type="text" name="username" id="username" placeholder="Username" class="register__block--input">
      <i class="form__validation--state fa-solid fa-circle-xmark"></i>
  </div>
  <p class="register__input--error" id="register__input--error">Username must be 4 to 15 characters (only a-z, 0-9, _).</p>
</div>


              <!-- group email -->
              <div class="register__group" id="register__email">
                  <label for="email" class="register__block--label">Email</label>
                  <div id="group__input">
                      <input type="email" name="email" id="email" placeholder="Email" class="register__block--input">
                      <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                  </div>
                  <p class="register__input--error" id="register__input--error">Mail can only contain letters, numbers, dots, hyphens and underscores.</p>
              </div>

               <!-- group password -->                   
               <div class="register__group" id="register__password">
                  <label for="password" class="register__block--label">Password</label>
                  <div id="group__input">
                      <input type="password" name="password" id="password" placeholder="Password" class="register__block--input">
                      <i class="form__validation--state fa-solid fa-circle-xmark"></i>
                  </div>
                  <p class="register__input--error" id="register__input--error">The password must be from 4 to 15 digits.</p>
              </div>

                  </div>

                  

                  <!-- error message -->
              <div class="register__message" id="register__message">
                  <p><i class="fa-solid fa-triangle-exclamation"></i> <b>¡Error!</b> Fill in all registration fields correctly.</p>
              </div>

              <div class="register__block--cta">
                  <input type="submit" value="SAVE NEW CHANGES" class="register__block--button">
                  
                  <!-- registration complete -->
                  <p class="register__complete" id="register__complete"><i class="fa-solid fa-check"></i> Registration successfully completed!</p>
              </div>
              </div>

            </section>
        </form>
    </div>
    <script src="./js/redirect.js"></script>
    <script src="./js/admin_update-validations.js"></script>
    <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>

</html>