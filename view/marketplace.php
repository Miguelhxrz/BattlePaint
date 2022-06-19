<?php 
    require_once('../controller/header_controller.php');
    require_once('../controller/marketplace-controller.php');

    $nft = new Nft();

    $nfts = $nft->showNFTS();
?>
      
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/marketplace.css">
    <script src="../js/redirect.js"></script>
    <script src="../js/marketplace.js"></script>
    <title>Battle Paint | Marketplace</title>
</head>

<body>

    <?php include($header);?>

    <main class="container">

        <section class="notice__container">
            <article class="notice__article">
                <div class="controls__container">
                    <div class="control"></div>
                    <div class="control"></div>
                    <div class="control"></div>
                </div>
            </article>

        </section>

        <section class="filter__container">

            <form action="POST" name='filter__form' class="filter__form">

                <section class="filter__search filter">

                    <input type="text" class="search" placeholder="Search..." name="es_search">

                </section>

                <section class="filter__rank filter">

                    <h3 class="form__title">Rank:</h3>

                    <input type="checkbox" name="rank-s" id="rank-s">
                    <label for="rank-s">
                        <div class="rank__check"></div>
                        <p class="rank s">S</p>
                    </label>

                    <input type="checkbox" name="rank-a" id="rank-a">
                    <label for="rank-a">
                        <div class="rank__check"></div>
                        <p class="rank a">A</p>
                    </label>

                    <input type="checkbox" name="rank-b" id="rank-b">
                    <label for="rank-b">
                        <div class="rank__check"></div>
                        <p class="rank b">B</p>
                    </label>

                </section>

                <section class="filter__level">

                    <h3 class="form__title">Level:</h3>
                    <input type="number" name="level" id="level" placeholder="30">

                </section>

                <section class="filter__level">

                    <h3 class="form__title">Battles:</h3>
                    <input type="number" name="level" id="level" placeholder="30">

                </section>

                <section class="filter__price">

                    <h3 class="form__title">Price:</h3>
                    <label for="from__price">From
                        <input type="number" name="from__price" id="level" placeholder="30">
                    </label>

                    <label for="from__price">To
                        <input type="number" name="to__price"   id="level" placeholder="30">
                    </label>
                    
                </section>

                <input type="submit" value="Search" class="filter__search-btn">

            </form>

        </section>

        <section class="nft__container">
            <?php foreach ( $nfts as $nft ) { ?>
                
                <article class="nft__card">
                
                    <form action="./character_view.php" method="post" class="form__hidden">
                        <input type="hidden" name="nft_token" value="<?php echo $nft['token']  ?>">
                    </form>
                    
                    <figure class="nft__img">
                        <img src="<?php echo $nft['img_c'] ?>" alt="nft_img">
                    </figure>
                    
                    <div class="nft__rank">
                        <h4><?php echo $nft['rank'] ?></h4>
                    </div>
                    
                    <div class="nft__name ">
                        <h3><?php echo $nft['name'] ?></h3>
                    </div>
                    
                    <div class="nft__price">
                        <article class="price">
                            <h4>Price PB:</h4>
                            <div class="price__pay">
                                <img src="../source/img/paint-backets2.png" alt="paint bucket icon">
                                <h4><?php echo $nft['price'] ?></h4>
                            </div>
                        </article>
                    
                        <article class="price">
                            <h4>Price USD:</h4>
                            <div class="price__pay">
                                <img src="../source/img/usd.png" alt="paint bucket icon">
                                <h4><?php 
                                    $pb = intval($nft['price']);
                                    $usd = 50;
                                    
                                    $price_usd = $pb * $usd;
                                     
                                    echo $price_usd;
                                    ?></h4>
                            </div>
                        
                        </article>
                    
                    </div>
                
                </article>
            <?php } ?> 

        </section>
        <section class="return__container">
            <a href="../index.php">
                <img src="../source/img/svg/home.svg" alt="" title="return home">
            </a>
        </section>
    </main>
</body>

</html>