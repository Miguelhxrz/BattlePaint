<?php 

require_once('../model/db_connect.php');

class User {

  private $id;
  private $username;
  private $password;
  private $email;
  private $birth;
  private $gender;

   #database
   private $db;
  
   #constructor
   function __construct() {
    
    $this->db= new db_connect();
   }

  #setters

  function setID( $id ) {
    $this->id = $id;
  }
  
   function setUsername($user) {
    $this->username = $user;
  }

   function setPassword($pass) {
    $this->password = $pass;
  }

   function setEmail($email) {
    $this->email = $email;
  }

   function setBirth($birth) {
    $this->birth = $birth;
  }

   function setGender($gender) {
    $this->gender = $gender;
  }

  #DataBase Methods

   function addUser() {

    $query = "INSERT INTO `users`(`id`, `username`, `password`, `email`, `birth`, `gender`) VALUES ('".$this->id."','".$this->username."','".$this->password."','".$this->email."','".$this->birth."','".$this->gender."')";

    $send = $this->db->sendQuery($query);
    
    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }

  function VerifyUserDb( $username ) {

    $query = "SELECT `username` FROM `users` WHERE `username` = '".$username."'";

    $send = $this->db->sendQuery($query);

    $users = array();

    if(mysqli_num_rows($send) > 0) {

      while($rows =  mysqli_fetch_array($send)) {
        array_push($users,$rows);
      }

      return count($users);

    }else {
      return 0;
    }

  }

  
  function VerifyPasswordDb( $password ) {

    $query = "SELECT `password` FROM `users` WHERE `password` = '".$password."'";

    $send = $this->db->sendQuery($query);

    $pass = array();

    if(mysqli_num_rows($send) > 0) {

      while($rows =  mysqli_fetch_array($send)) {
        array_push($pass,$rows);
      }

      return count($pass);

    }else {
      return 0;
    }

  }

  function GetByUsername($username){
    $query_send = "SELECT `username`,`id`, `password`, `email`, `binance` FROM `users` WHERE  `username` = '$username'";

    $question = $this->db->sendQuery($query_send);

    return $question;
  }
  

  function Login( $username, $password ) {

    $check_username = $this->VerifyUserDb( $username );
    $check_password = $this->VerifyPasswordDb( $password );

    if( $check_username === 1 && $check_password === 1 ) {

      return "<script> window.location.href = './marketplace.php'; </script>";

    }else if( $check_username === 1 && $check_password === 0 ) {

      return "ERROR: Contraseña erronea";

    }else if( $check_username === 0 && $check_password === 1 ) {

      return "ERROR: Username erroneo";

    }else if( $check_username === 0 && $check_password === 0 ) {

      return "ERROR: Username y password erroneos";

    }

  }


   function userByUsername ( $user ) {
    $query = "SELECT * FROM `users` WHERE `username` = '".$user."'";

    $send = $this->db->sendQuery($query);

    $users = array();
    
    if(mysqli_num_rows($send) > 0) {

      while($rows =  mysqli_fetch_array($send)) {
        array_push($users,$rows);
      }

      return $users;

    }else {
      return 0;
    }


  }

  function UserInventory ( $user_id ) {

    $query = "SELECT `id_nft` FROM `inventory` WHERE `id_user` = '".$user_id."'";

    $send = $this->db->sendQuery($query);

    $inventory = array();
    
    if(mysqli_num_rows($send) > 0) {

      while($rows =  mysqli_fetch_array($send)) {
        $inventory = $rows;
      }

      return $inventory;

    }else {
      return 0;
    }

 
  }

  

  function UpdatePassword($password,$session){
    $query_send = "UPDATE `users` SET `password` = '$password'  WHERE  `username` = '$session'";

    $question = $this->db->sendQuery($query_send);

    return $question;
  }

  function GetId ( $username ) {

    $query = "SELECT `id` FROM `users` WHERE `username` = '".$username."'";
    
    $send = $this->db->sendQuery($query);

    $id = array();
    
    if(mysqli_num_rows($send) > 0) {

      while($rows =  mysqli_fetch_array($send)) {
        array_push($id,$rows);
      }

      return $id[0]['id'];

    }else {
      return 0;
    }

  }


  function GetBalance( $username ) {

    $query = "SELECT `balance` FROM `users` WHERE `username` = '".$username."'";
    
    $send = $this->db->sendQuery($query);

    $balance = array();
    
    if(mysqli_num_rows($send) > 0) {

      while($rows =  mysqli_fetch_array($send)) {
        array_push($balance,$rows);
      }

      return $balance[0]['balance'];

    }else {
      return 0;
    }


    }

  function Buy ( $username, $balance, $price ) {

    $new_balance = $balance - $price;

    $query = "UPDATE `users` SET `balance`= $new_balance WHERE `username` = '".$username."'";

    $send = $this->db->sendQuery($query);
    
    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }

  function BuyCoins ( $username, $balance, $price ) {

    $new_balance = $balance + $price;

    $query = "UPDATE `users` SET `balance`= $new_balance WHERE `username` = '".$username."'";

    $send = $this->db->sendQuery($query);
    
    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }
  
  
  function AddInventory ( $user_id, $nft_token ){

    $query = "INSERT INTO `inventory`(`id_user`, `id_nft`) VALUES ('".$user_id."','".$nft_token."')";

    $send = $this->db->sendQuery($query);
    
    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }


  function getInventory( $user_id ) {

    $query = "SELECT `id_nft` FROM `inventory` WHERE `id_user` = '".$user_id."'";
    
    $send = $this->db->sendQuery($query);

    $items = array();
    
    if(mysqli_num_rows($send) > 0) {
      while($rows =  mysqli_fetch_array($send)) {
        array_push($items,$rows['id_nft']);
      }
      return $items;
  
    }else {
  
      return 0;
  
    }

  }

  function QuitNft ( $nft_token ) {

    $query = "INSERT INTO `marketplace`(`nft_token`) VALUES ('".$nft_token."')";

    $send = $this->db->sendQuery($query);
    
    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }


  }

  function SellNFT ( $id_nft ) {

    $query = "INSERT INTO `marketplace`(`nft_token`) VALUES ('".$id_nft."')";

    $send = $this->db->sendQuery($query);
    
    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }



  }


  function UpdateEmail($email,$session){
    $query_send = "UPDATE `users` SET `email` = '$email'  WHERE  `username` = '$session'";

    $question = $this->db->sendQuery($query_send);

    return $question;
  }

  function UpdateBinance($binance,$session){
    $query_send = "UPDATE `users` SET `binance` = '$binance'  WHERE  `username` = '$session'";

    $question = $this->db->sendQuery($query_send);

    return $question;
  }

  function UpdateUsername($username,$session){
    $query_send = "UPDATE `users` SET `username` = '$username' WHERE  `username` = '$session'";

    $question = $this->db->sendQuery($query_send);

    return $question;
  }

  function AllUsers(){
    $query_send = "SELECT `id`, `username`, `password`, `email`, `birth`, `gender`, `fecha`  FROM `users`  ORDER BY `fecha` DESC";
        
    $question = $this->db->sendQuery($query_send);
  
    $result = array();
  
    if(mysqli_num_rows($question) > 0){
      while($rows = mysqli_fetch_array($question)){
        array_push($result, $rows);
      }
      return $result;
      }else {
        return 0;
      }
  
  }


}

