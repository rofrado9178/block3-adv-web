<link rel="stylesheet" href="views/css/style.css">

<?php require_once("models/connection.php");?>
<?php include('views/header.php');?>

<main>


<h1>Food Vendor Apps</h1>
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
</main>
<?php include('views/footer.php');?>