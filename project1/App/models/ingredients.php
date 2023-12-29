<?php 
require_once("connection.php");

class IngredientsModel{
  public $connect;

  public function __construct(){
    $createConnection = new Connection();
    $db = $createConnection->connectDB();
    $this->connect = $db;
  }

  public function showAllIngredient(){
    if($this->connect){
      $stmt = $this->connect->prepare("SELECT * FROM Ingredient");
      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt = null;
      // for json return use json_encode
      // return json_encode($results);

      return $results;
    }
    return false;
  }

  public function insertIngredient($name, $type, $price_per_kg, $supplier_id){
    if($this->connect){
      try{

        $stmt = $this->connect->prepare("INSERT INTO `Ingredient` ( `name`, `type`, `price_per_kg`, `supplier_id`) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $type);
        $stmt->bindParam(3, $price_per_kg);
        $stmt->bindParam(4, $supplier_id);
        $stmt->execute();
  
  
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

// if want to return it in json format
// $model = new IngredientsModel();
// $ingredientsJson = $model->showAllIngredient();
// echo $ingredientsJson;


?>