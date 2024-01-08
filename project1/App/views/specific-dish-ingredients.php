
  <?php 
  
  if($ingredients){

  
    foreach($ingredients as $item){
      echo "<p>Id: ", $item['id'] , "</p>";
      echo "<p>Dish Name: ", $item['dish_name'] , "</p>";
      echo "<p>Ingredient name: ", $item['ingredient_name'] , "</p>";
      // echo "<form method='GET'> <input type='submit' value='X'> <input type='hidden' name='delete' value='$item[id]'> </form>";
      echo "<br>";
    }
    
 
  }
   else{
      echo "no data";
  }

  
  ?>
<a href='../App/index.php'>Back</a>