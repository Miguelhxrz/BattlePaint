<?php 
  require_once('../model/Nft.php');

  $nft = new Nft();

  $nfts = array();

  if( isset( $_POST['search'] ) ) {

    $nft_filter_name = $_POST['es_search'];

    if( isset( $nft_filter_name ) && !empty( $nft_filter_name )){

        $nfts = $nft->NFTSByName( $nft_filter_name );

    }

}

  $nfts = $nft->showNFTSMarket();




?>