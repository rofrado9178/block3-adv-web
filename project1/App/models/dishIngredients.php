<?php 
require_once("connection.php");

class DishIngredientsModel{
    public $connect;

    public function __construct(){
    $createConnection = new Connection();
    $db = $createConnection->connectDB();
    $this->connect = $db;
  }

  public function showAllDishIngredients(){
    if($this->connect){
      $stmt = $this->connect->prepare("SELECT Dish_Ingredient.id, Dish.dish_id, Dish.name AS dish_name, Ingredient.ingredient_id, Ingredient.name AS ingredient_name FROM Dish_Ingredient JOIN Dish ON Dish_Ingredient.dish_id = Dish.dish_id JOIN Ingredient ON Dish_Ingredient.ingredient_id = Ingredient.ingredient_id ORDER BY Dish_Ingredient.id DESC;");
      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt = null;
      // for json return use json_encode
      // return json_encode($results);

      return $results;
    }
    return false;
  }

  public function selectSpecificDishIngredient($dish_id){
    if($this->connect){
      $stmt = $this->connect->prepare("SELECT Dish_Ingredient.id, Dish.dish_id, Dish.name AS dish_name, Ingredient.ingredient_id, Ingredient.name AS ingredient_name FROM Dish_Ingredient JOIN Dish ON Dish_Ingredient.dish_id = Dish.dish_id JOIN Ingredient ON Dish_Ingredient.ingredient_id = Ingredient.ingredient_id WHERE Dish.dish_id = ? ORDER BY Dish_Ingredient.id DESC;");
      $stmt->bindParam(1, $dish_id, PDO::PARAM_INT);
      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt = null;
      // for json return use json_encode
      // return json_encode($results);

      return $results;
    }
    return false;
  }

   public function insertDishIngredient( $dish_id, $ingredient_id){
    if($this->connect){
      try{
        
        $stmt = $this->connect->prepare("INSERT INTO `Dish_Ingredient` ( `dish_id`, `ingredient_id`) VALUES (?, ?)");
        $stmt->bindParam(1, $dish_id, PDO::PARAM_INT);
        $stmt->bindParam(2, $ingredient_id, PDO::PARAM_INT);
      
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