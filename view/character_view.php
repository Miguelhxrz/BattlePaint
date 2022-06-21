<?php 
  require_once('../controller/header_controller.php');

  require_once('../controller/character_view-controller.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/character_view.css">
  <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
  <script src="../js/character_view.js"></script>
  <script src="../js/modal_nft.js"></script>
  <title>Battle Paint | Marketplace</title>
</head>
<body>
  
  <?php include($header) ?>

  <main class="container">

      <section class="character__container">
        <article class="character__container--before">
          <?php foreach ( $nfts as $nft ) { ?>
          <img src=" <?php echo $nft['img_p'] ?>" alt="" class="character__img">

          <article class="character__stats">
            <h5 class="character__name">Nft information</h5>
            <div class="character__data">

              <h6 class="nft_name-title">Name: </h6>
              <h6 class="nft_name-title answer"> <?php echo $nft['name'] ?></h6>
              
              <h6 class="nft_name-title">Power: </h6>
              <h6 class="nft_name-title answer"> <?php echo $nft['power'] ?></h6>

              <h6 class="nft_name-title">Class: </h6>
              <h6 class="nft_name-title answer"> <?php echo $nft['class'] ?></h6>

              <h6 class="nft_name-title">Rank: </h6>
              <h6 class="nft_name-title answer" id="nft__rank"> <?php echo $nft['rank'] ?></h6>

              <h6 class="nft_name-title">Owner: </h6>
              <h6 class="nft_name-title answer"> <?php echo $nft['owner'] ?></h6>

              <h6 class="nft_name-title">Token: </h6>
              <h6 class="nft_name-title answer"> <?php echo $nft['token'] ?></h6>

            </div>
          </article>
          <article class="character__container--after"></article>
        </article>
      </section>

      <article class="actions">
        <button class="modal__cta--btn"> Buy <?php echo $nft['price'] ?> <img src="../source/img/svg/paint-backets.svg" alt="paint buckets icon"></button>
      </article>
      <?php 
      }
      ?>
  </main>
  <footer>

  </footer>

  <section class="modal" id="modal">
    <article class="modal__container">
        <form action="" method="" class="modal-form" id="modal-form">
          <img class="modal__close" src="../source/img/close.png" alt="close">
          <p class="modal__title">BUY NFT</p>
          
          <div class="img">
            <img class="modal__image--nft" src="../source/img/Characters/test5.png" alt="PP">
          </div>

          <div class="price">
            <img class="modal__image" src="../source/img/svg/paint-backets.svg" alt="PB">
            <p class="modal__price">1200</p>
          </div>

          <input class="modal__convert--button" type="submit" value="BUY">
        </form>
    </article>
  </section>
</body>
</html>