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
  private $img_p;
  private $img_c;


  #data base
  private $db;


  function __construct() {

    $this->db = new db_connect();
  
  }

  #•-•-Setters•-•-
  
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

  function setImgP($imgp) {
    $this->img_p = $imgp;
  }

  function setImgC($imgc) {
    $this->img_c = $imgc;
  }

  #•-•-Getters•-•-

  function getToken() {
    return $this->token;
  }

  function getName() {
    return $this->name;
  }

  function getPower() {
    return $this->power;
  }

  function getClass() {
    return $this->nft_class;
  }

  function getRank() {
    return $this->nft_rank;
  }

  function getOwner() {
    return $this->owner;
  }

  function getPrice() {
    return $this->price;
  }


  #•-•-DataBase•-•-

  function addNft() {

    $query = "INSERT INTO `nft`(`token`, `name`, `power`, `class`, `rank`, `owner`, `price`, `img_c`, `img_p`) VALUES ('".$this->token."','".$this->name."','".$this->power."','".$this->nft_class."','".$this->nft_rank."','".$this->owner."','".$this->price."','".$this->img_c."','".$this->img_p."')";

    $send = $this->db->sendQuery($query);

    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }

  function addMarketPlace( $token ) {

    $query = "INSERT INTO `marketplace`(`nft_token`) VALUES ('".$token."')";

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


  function showNFTSMarket () {

    $query = "SELECT * FROM `marketplace` INNER JOIN nft ON  marketplace.nft_token = nft.token";

    $send = $this->db->sendQuery($query);
    
    $nfts = array();
    
    if(mysqli_num_rows($send) > 0) {
      while($rows =  mysqli_fetch_assoc($send)) {
        array_push($nfts,$rows);
      }
      return $nfts;
  
    }else {
  
      return 0;
  
    }

  }



  function NFTSByToken ( $token ) {

    $query = "SELECT * FROM `nft` WHERE `token` = '".str_replace(" ","",$token)."'";  

    $send = $this->db->sendQuery($query);

    $nfts = array();
    
    if(mysqli_num_rows($send) > 0) {
      while($rows =  mysqli_fetch_assoc($send)) {
        array_push($nfts,$rows);
      }
      return $nfts;
    }else {
      return 'Nope';
    }

  }


   function NFTSByName( $name ) {

    $query = "SELECT * FROM `nft` WHERE `name` = '".$name."'";

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


   function NFTSByOwner ( $owner ) {

    $query = "SELECT * FROM `nft` WHERE `owner` = '".$owner."'";

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


  function NFTSByPrice ( $price ) {

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


  function NFTSByRank ( $rank ) {

    $query = "SELECT * FROM `nft` WHERE `rank` = '".$rank."'";

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

  function GetPriceToken( $token ) {

    $query = "SELECT `price` FROM `nft` WHERE `token` = '".$token."'";

    $send = $this->db->sendQuery($query);

    $price = array();
    
    if(mysqli_num_rows($send) > 0) {
      while($rows =  mysqli_fetch_array($send)) {
        array_push($price,$rows);
      }
      return $price[0]['price'];
    }else {
      return 0;
    }


  }

  function NFTBuy( $token ) {

    $query = "DELETE FROM `marketplace` WHERE `nft_token` = '".$token."'";

    $send = $this->db->sendQuery($query);

    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }

  function NFTSByToken_inventory ( $token ) {

    $query = "SELECT * FROM `nft` WHERE `token` = '".$token."'";  

    $send = $this->db->sendQuery($query);

    $nfts = array();
    
    if(mysqli_num_rows($send) > 0) {
      while($rows =  mysqli_fetch_assoc($send)) {
        $nfts = $rows;
      }
      return $nfts;
    }else {
      return 0;
    }

  }


  function UpdateOwner ( $username, $nft_token ){

    $query = "UPDATE `nft` SET `owner` = '".$username."' WHERE `token` = '".$nft_token."'";

    $send = $this->db->sendQuery($query);

    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }





  }




}