<?php require_once('../controller/header_controller.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/character_view.css">
  <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
  <script src="../js/redirect.js"></script>
  <title>Battle Paint | Marketplace</title>
</head>
<body>
  
  <?php include($header) ?>

  <main class="container">

    <section class="character__container">
      <img src="../source/img/shadow.png" alt="" class="character__img">
      <article class="character__stats">
        <h5 class="character__name">Nft-name</h5>
        <div class="character__data">

          <h6 class="nft_name-title">Name: </h6>
          <h6 class="nft_name-title answer"> <?php echo $_SESSION['nft_name'] ?></h6>
          
          <h6 class="nft_name-title">Power: </h6>
          <h6 class="nft_name-title answer"> <?php echo $_SESSION['nft_power'] ?></h6>

          <h6 class="nft_name-title">Class: </h6>
          <h6 class="nft_name-title answer"> <?php echo $_SESSION['nft_class'] ?></h6>

          <h6 class="nft_name-title">Rank: </h6>
          <h6 class="nft_name-title answer"> <?php echo $_SESSION['nft_rank'] ?></h6>

          <h6 class="nft_name-title">Owner: </h6>
          <h6 class="nft_name-title answer"> <?php echo $_SESSION['nft_owner'] ?></h6>

          <h6 class="nft_name-title">Token: </h6>
          <h6 class="nft_name-title answer"> <?php echo $_SESSION['nft_token'] ?></h6>

        </div>
      </article>
      
    </section>
    <article class="actions">
        <button> Buy <?php echo $_SESSION['nft_price'] ?> <img src="../source/img/svg/paint-backets.svg" alt="paint buckets icon"></button>
      </article>
  </main>
  <footer>

  </footer>
</body>
</html>