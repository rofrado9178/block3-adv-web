<?php 

      if($_SERVER['REQUEST_METHOD'] === "GET" || $_SERVER['REQUEST_METHOD'] === 'POST'){

            include_once("controllers/ingredientController.php");
            include_once("controllers/supplierController.php");
            include_once("controllers/dishController.php");
            include_once("controllers/dishIngredientController.php");
      }

?>