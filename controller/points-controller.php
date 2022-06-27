<?php

use LDAP\Result;

require_once('../model/User.php');
require_once('../model/coins.php');

$user = new User();

$coin = new Coin();

if( !empty( $_POST['input__quantity'] ) ) {

  $pb = intval($_POST['input__quantity']);

  $balance =  $user->GetBalance( $_SESSION['username'] );

  $balance = intval( $balance );

  $result = $user->BuyCoins( $_SESSION['username'], $balance, $pb);

  $userid = $user->GetId( $_SESSION['username'] );

    $coin->addCoin($userid, $pb);
}

?>