<?php 

  require_once( '../model/User.php' );

  require_once( '../model/Nft.php' );
  
  $nft =  new Nft();

  $user = new User();
  
  $user_conf = $user->userByUsername( $_SESSION['username'] );
  
  $user_id = $user->GetId( $_SESSION['username'] );

  $balance = $user->GetBalance( $_SESSION['username'] );

  $inventory = $user->getInventory( $user_id );

  

  if( !empty($inventory) ) {
  
    $nfts_inventory = array();
  
    foreach( $inventory as $item){

      array_push($nfts_inventory,$nft->NFTSByToken_inventory( $item ));

    }

  }


  if( !empty( $_POST['buy_price'] ) && !empty( $_POST['buy_token'] ) ){

    $nft_price = $_POST['buy_price'];

    $nft_token = $_POST['buy_token'];

    $balance = intval($balance);

    $nft_price = intval($nft_price);

    #Se actualiza el dinero del user
    $new_balance = $user->Buy($_SESSION['username'], $balance, $nft_price );

    $verify = $nft->VerifyNFTInventory( $nft_token );
    
    if( $verify === 0 ) {

      $result = $user->AddInventory( $user_id, $nft_token );

      $change_owner = $nft->UpdateOwner( $_SESSION['username'], $nft_token );

      $delete = $nft->NFTBuy( $nft_token );
    
    }else {

      $nft->UpdateInventory( $user_id, $nft_token);

      $change_owner = $nft->UpdateOwner( $_SESSION['username'], $nft_token );

      $delete = $nft->NFTBuy( $nft_token );

    }


  }









?>