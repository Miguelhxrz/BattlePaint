<?php 
  require_once( '../model/User.php' );
session_start();

function getHeader(){
  if(empty($_SESSION['username'])){
    return ('../partials/header_no-user.php');
  }
  elseif ($_SESSION['username'] === "admin123") {
    return  ('../partials/header_admin.php');
  }
  elseif (!empty($_SESSION['username']) && $_SESSION['username'] !== "admin") {
    return ('../partials/header_user.php');
  }
  
}

$header = getHeader();

$user = new User();
$username = $_SESSION [ 'username' ];

$user_conf = $user->userByUsername( $_SESSION['username'] );


?>