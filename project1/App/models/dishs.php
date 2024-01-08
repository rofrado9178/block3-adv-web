<?php 
require_once("connection.php");

class DishesModel{
    public $connect;

    public function __construct(){
    $createConnection = new Connection();
    $db = $createConnection->connectDB();
    $this->connect = $db;
  }

  public function showAllDishes(){
    if($this->connect){
      $stmt = $this->connect->prepare("SELECT * FROM Dish ORDER BY dish_id DESC");
      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt = null;
      // for json return use json_encode
      // return json_encode($results);

      return $results;
    }
    return false;
  }

   public function insertDish($name, $type){
    if($this->connect){
      try{
        
        $stmt = $this->connect->prepare("INSERT INTO `Dish` ( `name`, `type`) VALUES (?, ?)");
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $type, PDO::PARAM_STR);
      
        $stmt->execute();
        $stmt = null;
  
  
        return true;
      }
      catch(PDOException $e){
        $error = "Connection Error";
        $error .= $e->getMessage();
        include("views/error.php");
        exit();
      }
    }
    return false;
  }

}


?>