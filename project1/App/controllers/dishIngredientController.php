<?php   

include_once 'models/dishIngredients.php';
include_once 'models/dishs.php';
include_once 'models/ingredients.php';

Class DishIngredientsController{
  private $model;
  public $dishModel;
  public $ingredientModel;

  public function __construct(){
    $this->model = new DishIngredientsModel();
    $this->dishModel = new DishesModel();
    $this->ingredientModel = new IngredientsModel();
  
  }

  public function showDishIngredient(){
    $dishIngredients = $this->model->showAllDishIngredients();
    include("views/all-dishIngredients.php");
   
  }

  public function inputDishIngredient(){
    $dishes = $this->dishModel->showAllDishes();
    $ingredients = $this->ingredientModel->showAllIngredient();
    include("views/input-dishIngredient.php"); 
  }

public function addDishIngredient(){
    $dish_id = $_POST['dish_id'];
    $ingredient_id = $_POST['ingredient_id'];
    

    if(!$dish_id || !$ingredient_id ){
      echo "<p?> Missing Information </p>";
      $this->inputDishIngredient();
      return;
    }
    else if($this->model->insertDishIngredient($dish_id, $ingredient_id)){
      echo "Dish Ingredients Added";
     
    }
    else{
      echo "failed to input new Dish";
    }
   
     $this->showDishIngredient();

  }

}

$dishController = new DishIngredientsController();

if(isset($_POST["add-dishIngredient"])){
  $dishController->addDishIngredient();
}
else if(isset($_GET["show-dish-ingredients"])){
  $dishController->showDishIngredient();
}
// else if(isset($_GET["delete-ingredient"])){
//   $dishController->delete();
// }
// else if(isset($_POST["edit-dish-ingredient"])){
//   $dishController->edit();
// }
else{

    $dishController->inputDishIngredient();
  
}



?>