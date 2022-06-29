<?php 

require_once('../model/Nft.php');

require_once('../model/User.php');

$nft = new Nft();

$user = new User();

if( empty($_SESSION['username']) || !isset($_SESSION['username']) ){
  
}else {
  $username =  $_SESSION['username'];
}



$balance = $user->GetBalance( $username );




if(strpos( $_SERVER["HTTP_REFERER"], 'user.php' ) === false ) {
  
  
 
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