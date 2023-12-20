<?php 
include_once 'models/ingredients.php';


Class IngredientController{
  private $model;
  public $ingredients; 

  public function __construct(){
    $this->model = new IngredientsModel();
  }

  public function showIngredients(){
    $ingredients = $this->model->showAllIngredient();
    include("views/all-ingredients.php");
  }

  public function inputIngredient(){
    include("views/input-ingredient.php");
  }

  public function addIngredient(){
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price_per_kg = $_POST['price_per_kg'];
    $supplier_id = $_POST['supplier_id'];

    if(!$name || !$type || !$price_per_kg || !$supplier_id){
      echo "<p?> Missing Information </p>";
      $this->inputIngredient();
      return;
    }
    else if($this->model->insertIngredient($name,$type,$price_per_kg,$supplier_id)){
      echo "<p> Ingredient added : $name , $type , $price_per_kg $";
    }
    else{
      echo "failed to input ingredient";
    }
    $this->showIngredients();

  }
 
}

$ingredientController = new IngredientController();

if(isset($_POST["submit"])){
  $ingredientController->addIngredient();
}
else{
    $ingredientController->inputIngredient();
}

?>