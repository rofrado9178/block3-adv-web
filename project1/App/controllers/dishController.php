<?php   

include_once 'models/dishs.php';

Class DishController{
  private $model;

  public function __construct(){
    $this->model = new DishesModel();
  
  }

  public function showDishes(){
    $dishes = $this->model->showAllDishes();
    include("views/all-dishes.php");
   
  }

  public function inputDish(){
 
    include("views/input-dish.php"); 
  }

public function addDish(){
    $name = $_POST['name'];
    $type = $_POST['type'];
    


    if(!$name || !$type ){
      echo "<p?> Missing Information </p>";
      $this->inputDish();
      return;
    }
    else if($this->model->insertDish($name , $type)){
      echo "<p> Dish Added  : Name: $name , Type: $type";
     
    }
    else{
      echo "failed to input new Dish";
    }
   
     $this->showDishes();

  }

}

$dishController = new DishController();

if(isset($_REQUEST['page']) && $_REQUEST['page'] === 'dish'){

if(isset($_POST["add-dish"])){
  $dishController->addDish();
}
else if(isset($_GET["show-dish"])){
  $dishController->showDishes();
}
// else if(isset($_GET["delete-dish"])){
//   $dishController->delete();
// }
// else if(isset($_POST["edit-dish"])){
//   $dishController->edit();
// }
else{

    $dishController->inputDish();
  
}

}



?>