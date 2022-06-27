<?php 

require_once('../model/db_connect.php');

class Coin {

  #data base
  private $db;


  function __construct() {

    $this->db = new db_connect();
  
  }

  #•-•-DataBase•-•-

  function addCoin($userid, $coins) {

    $query = "INSERT INTO `coins`(`Id_user`, `monto`) VALUES ('".$userid."','".$coins."')";

    $send = $this->db->sendQuery($query);

    if(isset( $send )) {
      return 1;
    }else {
      return 0;
    }

  }

  function AllCoins(){
    $query_send = "SELECT `id`, `Id_user`, `monto`, `fecha`  FROM `coins`  ORDER BY `fecha` DESC";
        
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

?>