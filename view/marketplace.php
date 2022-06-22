<?php 
    require_once('../controller/header_controller.php');
    require_once('../controller/marketplace-controller.php');


    if( isset( $_POST['search'] ) ) {

        $nft_filter_name = $_POST['es_search'];

        if( isset( $nft_filter_name ) && !empty( $nft_filter_name )){

            $nfts = $nft->NFTSByName( $nft_filter_name );

        }
    
    }else {

        $nfts = $nft->showNFTS();

    }

?>
      
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../source/img/svg/logoBattlePaint1.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/marketplace.css">
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

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"name="filter" class="filter__form">

                <section class="filter__search filter">

                    <input type="text" class="search" placeholder="Search..." name="es_search">

                </section>


                <input type="submit" value="Search" name='search' class="filter__search-btn">

            </form>

        </section>

        <section class="nft__container">
            <?php foreach ( $nfts as $nft ) { ?>
                
                <article class="nft__card">
                
                    <form action="./character_view.php" method="POST" class="form__hidden">
                        <input type="hidden" name="nft_token" value="<?php echo $nft['token']  ?>">
                        <input type="hidden" name="nft_owner" value="<?php echo $nft['owner']  ?>">
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
            <?php 
            }
            
            ?> 

        </section>
        <section class="return__container">
            <a href="../index.php">
                <img src="../source/img/svg/home.svg" alt="" title="return home">
            </a>
        </section>
    </main>
</body>

</html>