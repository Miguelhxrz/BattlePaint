<?php 
  require_once( '../model/User.php' );
session_start();

function getHeader(){
  if(empty($_SESSION['username'])){
    return ('../partials/header_no-user.php');
  }
  elseif ($_SESSION['username'] === "admin") {
    return  ('../partials/header_admin.php');
  }
  elseif (!empty($_SESSION['username']) && $_SESSION['username'] !== "admin") {
    return ('../partials/header_user.php');
  }
  
}

$header = getHeader();


if(isset($_SESSION [ 'username' ])){
  $user = new User();
  $user_conf = $user->userByUsername( $_SESSION['username'] );
}

?>