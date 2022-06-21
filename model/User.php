<?php 

include('../model/db_connect.php');

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

    $query = "SELECT `id_nft` FROM `inventory`	WHERE ";

    $send = $this->db->sendQuery($query);

    $inventory = array();
    
    if(mysqli_num_rows($send) > 0) {

      while($rows =  mysqli_fetch_array($send)) {
        array_push($inventory,$rows);
      }

      return $inventory;

    }else {
      return 0;
    }

 
  }

  


  






}