<?php 

session_start();

var_dump($_SESSION['username']);

if(empty($_SESSION['username']) && empty($_SESSION['id']) && empty($_SESSION['balance']) ){
  $username = 'Please login to continue!';
  $user_id = 'Please login to continue!';
  $user_balance = 'Please login to continue!';
}else {
  $username = $_SESSION['username'];
  $user_id = $_SESSION['id'];
  $user_balance = $_SESSION['balance'];
}




?>