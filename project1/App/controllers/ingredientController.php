<?php 
include_once 'models/ingredients.php';
include_once 'models/suppliers.php';


Class IngredientController{
  private $model;
  public $ingredients;
  private $supplierModel;
  public $suppliers; 

  public function __construct(){
    $this->model = new IngredientsModel();
    $this->supplierModel = new SuppliersModel();
  }

  public function showIngredients(){
    $ingredients = $this->model->showAllIngredient();
    include("views/all-ingredients.php");
   
  }

  public function inputIngredient(){
    $suppliers = $this->supplierModel->showAllSuppliers();
    include("views/input-ingredient.php"); 
  }

  public function editIngredient(){
    $ingredients = $this->model->showAllIngredient();
    $suppliers = $this->supplierModel->showAllSuppliers();
    include("views/edit.php");
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

  public function delete(){
    $id = $_GET["delete"];
    if(!$id){
      echo "cannot delete data";
      $this->showIngredients();
      return;
    }
    $this->model->deleteIngredient($id);
    echo "You just delete data with id =  $id";
    $this->showIngredients();
  }

  public function edit(){
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price_per_kg = $_POST['price_per_kg'];
    $supplier_id = $_POST['supplier_id'];
    $id = $_POST['ingredient_id'];

    if(!$id || !$name || !$type || !$price_per_kg || !$supplier_id){
      echo "<p?> Missing Information </p>";
      $this->editIngredient();
      return;
    }
    else if($this->model->editIngredient($id,$name,$type,$price_per_kg,$supplier_id)){
      echo "<p> Ingredient Updated : $name , $type , $price_per_kg $";
      $this->showIngredients();
    }
    else{
      echo "failed to update ingredient";
    }
   
  }
 
}

$ingredientController = new IngredientController();





if(isset($_POST["add-ingredient"])){
  $ingredientController->addIngredient();
}
else if(isset($_GET["show-ingredient"])){
  $ingredientController->showIngredients();
}
else if(isset($_GET["delete"])){
  $ingredientController->delete();
}
else if(isset($_POST["edit-ingredient"])){
  $ingredientController->edit();
}
else{

    $ingredientController->inputIngredient();
    $ingredientController->editIngredient();
}

?>