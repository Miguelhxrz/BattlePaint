<?php 

require_once('../controller/header_controller.php');

require_once('../controller/points-controller.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/points.css">
  <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
  <script src="./js/redirect.js"></script>
  <script src="../js/points.js"></script>
  <title>Battle Paint | Points</title>
</head>

<body>

  <?php include($header) ?>

  <main class="container">

    <section class="explain__container">
      <h3 class="explain__title">Paint - Buckets</h3>
      <p class="explain__utility"> The Paint Buckets is the main token in this game,<br> its function is its use as currency, for the purchase of characters. </p>
    </section>

    <section class="buy__container ">

      <article class="buy__card" id="modal__point">
        <img src="../source/img/svg/paint-backets.svg" alt="" class="buy__img">

        <img src="../source/img/card_text.png" alt="" class="buy__background--img">

        <h2 class="card__title">Panit - Bucket</h2>

        <div class="buy__price">
          <h5 class="title__price">Price</h5>
          <h5 class="price"><img src="../source/img/usd.png" alt="paint bucket icon">50</h5>
          <h5 class="price__amount">Amount</h5>
          <h5 class="amount"><img src="../source/img/paint-backets2.png" alt="paint bucket icon">1</h5>
        </div>


      </article>
    </section>



    <!-- modal points     -->
    <section class="modal1" id="modal1">
      <article class="modal__container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="modal-form" id="modal-form">
          <img class="modal__close" src="../source/img/close.png" alt="close">
          <p class="modal__title">Buy coins</p>
          <div class="container_buy">
            <div class="modal__container--son">
              <img class="modal__image" src="../source/img/svg/paint-backets.svg" alt="PP">
              <div class="modal__container--field">
                <label class="modal__container--label" for="input__quantity">Quantity</label>

                  <input type="hidden" name="buy_coins" id="toBuy">
                
                <input class="modal__input--quantity" type="number" name="input__quantity" id="input__quantity" min="1" max="100" require>
              </div>
            </div>

            <img src="../source/img/svg/change.svg" class="modal__converter" alt="">

            <div class="modal__container--son">
              <img class="modal__image" src="../source/img/usd.png" alt="PB">
              <p class="modal__convert" id="pice">0</p>
            </div>
          </div>

          <input class="modal__convert--button" type="submit" value="Buy" id="buy__button">
        </form>
      </article>
    </section>



  </main>
  <script src="../js/modal_point.js"></script>
</body>

</html>