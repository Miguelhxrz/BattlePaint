<?php 

  require_once( '../model/User.php' );

  require_once( '../model/Nft.php' );
  
  $nft =  new Nft();

  $user = new User();
  
  $user_conf = $user->userByUsername( $_SESSION['username'] );
  
  $user_id = $user->GetId( $_SESSION['username'] );

  $balance = $user->GetBalance( $_SESSION['username'] );

  $inventory = $user->getInventory( $user_id );

  $nfts_inventory = array();

  // var_dump($inventory);
  
  foreach( $inventory as $item){

    array_push($nfts_inventory,$nft->NFTSByToken( $item ));

  }


  // var_dump($nfts_inventory[0]);


/*   if( !empty( $_POST['buy_price'] ) && !empty( $_POST['buy_token'] ) ){

    $nft_price = $_POST['buy_price'];

    $nft_token =$_POST['buy_token'];

    $balance = intval($balance);

    $nft_price = intval($nft_price);

    $new_balance = $user->Buy($_SESSION['username'], $balance, $nft_price );

    $result = $user->AddInventory( $user_id, $nft_token );

    $delete = $nft->NFTBuy( $nft_token );

  } */









?>