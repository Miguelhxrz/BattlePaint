<?php 

require_once('../model/db_connect.php');

class User {

  private $id;
  private $username;
  private $password;
  private $email;
  private $birth;
  private $gender;

  function __construct() {

    $db = new db_connect();
  
  }

  #setters

  private function setID( $id ) {
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

    $query = "INSERT INTO `nft`(`token`, `name`, `skin`, `class`, `rank`, `owner`, `price`) VALUES ('".$this->token."','".$this->name."','".$this->skin."','".$this->nft_class."','".$this->nft_rank."','".$this->owner."','".$this->price."')";

    $send = $this->db->sendQuery($query);

    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }

   function userByUsername ( $user ) {
    $query = "SELECT * FROM `users` WHERE `username` = '".$user."'";

    $send = $this->db->sendQuery($query);
    
    if(mysqli_num_rows($send) > 0) {

      while($rows =  mysqli_fetch_array($send)) {
        array_push($nfts,$rows);
      }

      return $nfts;

    }else {
      return 0;
    }


  }


  






}