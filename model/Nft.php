<?php 

require_once('../model/db_connect.php');

class Nft {

  private $token;
  private $name;
  private $skin;
  private $nft_class;
  private $nft_rank;
  private $owner;
  private $price;

  function __construct() {

    $db = new db_connect();
  
  }

  #setters
  
  private function setToken($token) {
    $this->token = $token;
  }

  private function setName($name) {
    $this->name = $name;
  }

  private function setSkin($skin) {
    $this->skin = $skin;
  }

  private function setClass($clas) {
    $this->nft_class = $clas;
  }

  private function setRank($rank) {
    $this->nft_rank = $rank;
  }

  private function setOwner($owner) {
    $this->owner = $owner;
  }

  private function setPrice($price) {
    $this->price = $price;
  }


  #DataBase Methods

  private function addNft() {

    $query = "INSERT INTO `nft`(`token`, `name`, `skin`, `class`, `rank`, `owner`, `price`) VALUES ('".$this->token."','".$this->name."','".$this->skin."','".$this->nft_class."','".$this->nft_rank."','".$this->owner."','".$this->price."')";

    $send = $this->db->sendQuery($query);

    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }

  private function showNFTS () {

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

  private function nftByOwner ( $owner ) {

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

  private function nftByPrice ( $price ) {

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


  private function nftByRank ( $rank ) {

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

  private function nftByBattles ( $battles ) {

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

  private function nftByLevel ( $level ) {

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