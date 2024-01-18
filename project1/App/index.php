
<?php require_once("models/connection.php");?>
<?php include('views/header.php');?>
<br>
<a href="?page=dish">Dish</a>
<a href="?page=ingredient">Ingredient</a>
<a href="?page=dish-ingredient">Dish Ingredient</a>
<a href="?page=supplier">Supplier</a>
<br>
<br>

    <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 1);

  
    
    include_once("controllers/controller.php");



        
    ?>
<br>
<?php include('views/footer.php');?>