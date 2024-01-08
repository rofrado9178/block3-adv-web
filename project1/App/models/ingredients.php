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
      $stmt = $this->connect->prepare("SELECT Ingredient.ingredient_id, Ingredient.name, Ingredient.type, Ingredient.price_per_kg, Supplier.supplier_id as supplier_id, Supplier.name as Supplier_name FROM Ingredient INNER JOIN Supplier ON Ingredient.supplier_id = Supplier.supplier_id ORDER BY Ingredient.ingredient_id DESC");
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
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $type, PDO::PARAM_STR);
        $stmt->bindParam(3, $price_per_kg, PDO::PARAM_INT);
        $stmt->bindParam(4, $supplier_id,PDO::PARAM_INT);
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

  public function deleteIngredient($id){
    if($this->connect){
      try{

        $stmt = $this->connect->prepare("DELETE FROM `Ingredient` WHERE `Ingredient`.`ingredient_id` = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = null;
      }
      catch(PDOException $e){
        $error = "Connection Error";
        $error .= $e->getMessage();
        include("views/error.php");
        exit();
      }
    }
  }

  public function editIngredient($id, $name, $type, $price_per_kg, $supplier_id){
    if($this->connect){
      try{
        
        $stmt = $this->connect->prepare("UPDATE `Ingredient` SET `name` = ?, `type` = ?, `price_per_kg` = ?, `supplier_id` = ? WHERE `Ingredient`.`ingredient_id` = ?");
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $type, PDO::PARAM_STR);
        $stmt->bindParam(3, $price_per_kg, PDO::PARAM_INT);
        $stmt->bindParam(4, $supplier_id,PDO::PARAM_INT);
        $stmt->bindParam(5, $id, PDO::PARAM_INT);
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

// if want to return it in json format
// $model = new IngredientsModel();
// $ingredientsJson = $model->showAllIngredient();
// echo $ingredientsJson;


?>