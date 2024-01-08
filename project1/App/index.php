
<?php require_once("models/connection.php");?>
<?php include('views/header.php');?>
<br>
    <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      include_once("controllers/ingredientController.php");
      include_once("controllers/supplierController.php");
      include_once("controllers/dishController.php");

        
    ?>
<br>
<?php include('views/footer.php');?>