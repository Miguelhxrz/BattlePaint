<?php 

require_once('../model/db_connect.php');

class Nft {

  private $token;
  private $name;
  private $power;
  private $nft_class;
  private $nft_rank;
  private $owner;
  private $price;

  function __construct() {

    $db = new db_connect();
  
  }

  #setters
  
  function setToken($token) {
    $this->token = $token;
  }

  function setName($name) {
    $this->name = $name;
  }

  function setPower($power) {
    $this->power = $power;
  }

  function setClass($clas) {
    $this->nft_class = $clas;
  }

  function setRank($rank) {
    $this->nft_rank = $rank;
  }

  function setOwner($owner) {
    $this->owner = $owner;
  }

  function setPrice($price) {
    $this->price = $price;
  }


  #DataBase Methods

  function addNft() {

    $query = "INSERT INTO `nft`(`token`, `name`, `skin`, `class`, `rank`, `owner`, `price`) VALUES ('".$this->token."','".$this->name."','".$this->skin."','".$this->nft_class."','".$this->nft_rank."','".$this->owner."','".$this->price."')";

    $send = $this->db->sendQuery($query);

    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }

  function showNFTS () {

    $query = "SELECT * FROM `nft`";

    $send = $this->db->sendQuery($query);

    $nfts = array();
    
    if(mysqli_num_rows($send) > 0) {
      while($rows =  mysqli_fetch_array($send)) {
        array_push($nfts,$rows);
      }
      return $nfts;
    }else {
      return 0;
    }

  }

   function nftByOwner ( $owner ) {

    $query = "SELECT * FROM `nft` WHERE `owner` = '".$owner."'";

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

  function nftByPrice ( $price ) {

    $query = "SELECT * FROM `nft` WHERE `price` = '".$price."'";

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


  function nftByRank ( $rank ) {

    $query = "SELECT * FROM `nft` WHERE `rank` = '".$rank."'";

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

  function nftByBattles ( $battles ) {

    $query = "SELECT * FROM `nft` WHERE `owner` = '".$battles."'";

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

  function nftByLevel ( $level ) {

    $query = "SELECT * FROM `nft` WHERE `owner` = '".$level."'";

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