<?php 
  require_once('../model/Nft.php');
  require_once('../model/User.php');

  $user = new User();

  $nft = new Nft();

  $nfts = array();

  if( isset( $_POST['search'] ) ) {

    $nft_filter_name = $_POST['es_search'];

    if( isset( $nft_filter_name ) && !empty( $nft_filter_name )){

        $nfts = $nft->NFTSByName( $nft_filter_name );

    }

}

  if(isset($_POST['sell_token']) && !empty($_POST['sell_token'])) {
    
    $user->SellNFT( $_POST['sell_token'] );

  }


  $nfts = $nft->showNFTSMarket();







?>