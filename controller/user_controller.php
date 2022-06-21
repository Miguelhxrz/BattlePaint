<?php 

  require_once( '../model/User.php' );

  require_once( '../model/Nft.php' );

  $nft =  new Nft();

  $user = new User();

  $user_conf = $user->userByUsername( $_SESSION['username'] );




?>