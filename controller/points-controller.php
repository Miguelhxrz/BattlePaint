<?php 

require_once('../model/User.php');

$user = new User();

if( !empty( $_POST['input__quantity'] ) ) {

  $pb = intval($_POST['input__quantity']);

  $balance =  $user->GetBalance( $_SESSION['username'] );

  $balance = intval( $balance );

  $result = $user->BuyCoins( $_SESSION['username'], $balance, $pb);

}

?>