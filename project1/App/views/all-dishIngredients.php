


  <?php 
  
  if($dishIngredients){

  
    foreach($dishIngredients as $item){
      echo "<article>";
      echo "<p>Id: ", $item['id'] , "</p>";
      echo "<p>Dish Name: ", $item['dish_name'] , "</p>";
      echo "<p>Ingredient name: ", $item['ingredient_name'] , "</p>";
      // echo "<form method='GET'> <input type='submit' value='X'> <input type='hidden' name='delete' value='$item[id]'> </form>";
      echo "</article>";
    }
    
 
  }
   else{
      echo "no data";
  }

  
  ?>
</article>
<a href='../App/index.php'>Back</a>