<?php 

require_once('../model/Nft.php');

require_once('../model/User.php');

$nft = new Nft();

$user = new User();

$username =  $_SESSION['username'];

// var_dump($username);

// var_dump(strpos( $_SERVER["HTTP_REFERER"], 'user.php' ));


if(strpos( $_SERVER["HTTP_REFERER"], 'user.php' ) === false ) {
  
  $balance = $user->GetBalance( $username );
 
  $token = $_POST['nft_token'];
  
  $owner = $_POST['nft_owner'];
  
  $nfts = $nft->NFTSByToken( $token );

  $price_nft = intval($nft->GetPriceToken( $token ));
  
}else {

  $token = $_POST['nft_token-sell'];

  $owner = str_replace(" ","",$_POST['nft_owner-sell']);

  $nfts = $nft->NFTSByToken( $token );

  $price_nft = intval($nft->GetPriceToken( $token ));

}


?>