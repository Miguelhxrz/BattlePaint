<?php
require_once('../controller/header_controller.php');
require_once('../controller/register_nft-controller.php');
?>
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

  <?php include($header); ?>

  <main class="main">

    <form action="<?=$_SERVER['PHP_SELF'] ?>" name='register_nft' method='POST' class="register" id="register" enctype="multipart/form-data">

      <section class="register__title">
        <h2> NFTs Register </h2>
      </section>

      <section class="register__block one">
        <!-- name -->
        <div class="register_group" id="register_nft_name">
          <label for="name" class="register__block--label">Name</label>
          <div>
            <input type="text" name="nft_name" id="name_nft" class="register__block--input" tabindex="1">
            <i class="form__validation--state fa-solid fa-circle-xmark"></i>
          </div>
          <p class="register__input--error" id="register__nft_name">The name must be from 8 to 15 characters, no special characters or numbers.</p>
        </div>

        <!-- power -->
        <div class="register_group" id="register_nft_power">
          <label for="battle_power" class="register__block--label">Battle power</label>
          <div>
            <input type="number" name="nft_power" id="power_nft" class="register__block--input" tabindex="2">
            <i class="form__validation--state fa-solid fa-circle-xmark"></i>
          </div>
          <p class="register__input--error" id="register__nft_power">You must enter a valid power of attorney.</p>
        </div>

        <!-- rank -->
        <div class="register_group" id="register_rank">
          <label for="rank">Choose rank</label>
          <select name="nft_rank" id="rank_nft" class="register__block--input" tabindex="3">
            <optgroup label="Select a rank">
              <option value="S">S</option>
              <option value="A">A</option>
              <option value="B">B</option>
            </optgroup>
          </select>
        </div>

        <!-- price -->
        <div class="register_group" id="register_nft_price">
          <label for="price" class="register__block--label">Price</label>
          <div>
            <input type="number" name="nft_price" id="price_nft" class="register__block--input" tabindex="4">
            <i class="form__validation--state fa-solid fa-circle-xmark"></i>
          </div>
          <p class="register__input--error" id="register__nft_price">The price must have a value greater than or equal to zero and contain only numbers and dots.</p>
        </div>
      </section>

      <section class="register__block two">


        <!-- owner -->
        <div class="register_group" id="register_nft_owner">
          <label for="owner" class="register__block--label">Owner</label>
          <div class="group__input">
            <input type="text" name="nft_owner" id="owner_nft" class="register__block--input" value="<?php echo $_SESSION['username'] ?>" readonly>
            <i class="form__validation--state fa-solid fa-circle-xmark"></i>
          </div>
          <p class="register__input--error" id="register__nft_owner">The owner must be 4 to 15 characters long, without special characters or numbers.</p>
        </div>

        <!-- id -->
        <div class="register_group" id="register_id">
          <label for="id" class="register__block--label">Assigned ID</label>
          <div>
            <input type="text" name="nft_id" id="id" readonly class="register__block--input">
          </div>
        </div>

        <!-- img presentation -->
        <div class="register_group" id="register_id">
          <label for="object_image" class="label-name">Presentation image</label>
          <div>
            <input type="file" name="nft_p_img" id='p_img' accept="image/png,image/jpeg" readonly tabindex="6">
          </div>
        </div>

        <!-- img card -->
        <div class="register_group" id="register_id">
          <label for="object_image" class="label-name">Card image</label>
          <div>
            <input type="file" name="nft_c_img" id='c_img' accept="image/png,image/jpeg" readonly tabindex="7">
          </div>
        </div>
      </section>

      <section class="register__block three">
        <!-- class -->
        <div class="register_group" id="register_class">
          <label for="class">choose class</label>
          <select name="nft_class" id="class_nft" tabindex="5">
            <optgroup label="Select a class">
              <option value="tank">Tank</option>
              <option value="shooter">Shooter</option>
              <option value="assassin">Assassin</option>
            </optgroup>
          </select>
        </div>
      </section>

      <div class="register__block--cta">
        <!-- error message -->
        <div class="register__message" id="register_message">
          <p><i class="fa-solid fa-triangle-exclamation"></i> <b>??Error!</b> Fill in all registration fields correctly.</p>
        </div>

        <input type="submit" name="btn_submit"  class="register__block--button" value="Register NFT" tabindex="8">
        <!-- registration complete -->
        <p class="register__complete" id="register_complete"><i class="fa-solid fa-check"></i> Registration successfully completed!</p>
      </div>
    </form>
    </div>

    <?php
       
    if(isset($_POST['nft_name'])) {

        $nft_id = $_POST['nft_id'];
        $nft_name = $_POST['nft_name'];
        $nft_power = $_POST['nft_power'];
        $nft_rank = $_POST['nft_rank'];
        $nft_price = $_POST['nft_price'];
        $nft_class = $_POST['nft_class'];
        $nft_owner = $_POST['nft_owner'];
        $nft_img_p = $_FILES['nft_p_img'];
        $nft_img_c = $_FILES['nft_c_img'];


        var_dump($nft_id);

    

        $nft = new Nft();

        $nft->setToken( $nft_id );
        $nft->setName( $nft_name );
        $nft->setPower( $nft_power );
        $nft->setClass( $nft_class );
        $nft->setRank( $nft_rank );
        $nft->setOwner( $nft_owner );
        $nft->setPrice( $nft_price );

        // Guardando la de presentacion
        $saveP = '../public/presentation_img/'.$nft_img_p['name'];
        move_uploaded_file($nft_img_p['tmp_name'],$saveP);
        
        // Guardando la de card
        $saveC = '../public/card_img/'.$nft_img_c['name'];
        move_uploaded_file($nft_img_c['tmp_name'],$saveC);
        
        $nft->setImgP($saveP);
        $nft->setImgC($saveC);

        $nft->addNft();

        $nft->addMarketPlace($nft_id);

        echo "<script>window.location.href = './marketplace.php'</script>";
    }





    ?>

    <script src="../js/register_nftcopy.js"></script>
    <script src="https://kit.fontawesome.com/095148edc4.js" crossorigin="anonymous"></script>
</body>

</html>