<?php 

require_once('../model/Nft.php');

require_once('../model/User.php');

$nft = new Nft();

$user = new User();

$token = $_POST['nft_token'];

$username =  $_SESSION['username'];

$owner = $_POST['nft_owner'];

$balance = $user->GetBalance( $username );

$nfts = $nft->NFTSByToken( $token );

// var_dump($nfts);

// echo "<h2>".$nfts['name']."</h2>";

$price_nft = intval($nft->GetPriceToken( $token ));

?>