


  <?php 
  
  if($dishes){
  
    foreach($dishes as $dish){
      echo "<article>";
      echo "<p>Id: ", $dish['dish_id'] , "</p>";
      echo "<p>Name: ", $dish['name'] , "</p>";
      echo "<p>Type: ", $dish['type'] , "</p>";
      // echo "<form method='GET'> <input type='submit' value='X'> <input type='hidden' name='delete' value='$dish[dish_id]'> </form>";
      echo "</article>";
    }
    
 
  }
   else{
      echo "no data";
  }

  
  ?>

<a href='../App/index.php'>Back</a>

