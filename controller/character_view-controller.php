<?php 

  require_once('../model/Nft.php');

  $nft = new Nft();

  $token = $_POST['nft_token'];

  $nfts = $nft->NFTSByToken( $token );

?>