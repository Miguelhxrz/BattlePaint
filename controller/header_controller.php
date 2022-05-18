<?php 

session_start();

function getHeader(){
  if(empty($_SESSION['username'])){
    return ('../partials/header_no-user.php');
  }
  elseif ($_SESSION['username'] === "admin") {
    return  ('../partials/header-admin.php');
  }
  elseif (!empty($_SESSION['username']) && $_SESSION['username'] !== "admin") {
    return ('../partials/header_user.php');
  }
  
}

$header = getHeader();



?>