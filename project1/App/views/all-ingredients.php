<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Ingredients</title>
</head>
<body>
  <?php 
  
  if($ingredients){
  
    foreach($ingredients as $item){
      echo "<p>Name: ", $item['name'] , "</p>";
      echo "<p>Type: ", $item['type'] , "</p>";
      echo "<p>Price/Kg: ", $item['price_per_kg'] , "</p>";
      echo "<br>";
      echo "<form method='GET'> <input type='submit' value='X'> <input type='hidden' name='delete' value='$item[ingredient_id]'> </form>";
    }
    
 
  }
   else{
      echo "no data";
  }

  
  ?>
<a href='../App/index.php'>Back</a>
<a href="../App/views/edit.php">Edit</a>
</body>
</html>