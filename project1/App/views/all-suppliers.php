<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Ingredients</title>
</head>
<body>
  <?php 
  
  if($suppliers){
  
    foreach($suppliers as $supplier){
      echo "<p>Name: ", $supplier['name'] , "</p>";
      echo "<p>Address: ", $supplier['address'] , "</p>";
      echo "<p>City: ", $supplier['city'] , "</p>";
      echo "<p>Province: ", $supplier['province'] , "</p>";
      echo "<p>Postal Code: ", $supplier['postal_code'] , "</p>";
      echo "<p>Contact Person: ", $supplier['contact_person'] , "</p>";
      echo "<p>Contact Number: ", $supplier['contact_number'] , "</p>";
      echo "<br>";
    
    }
    
 
  }
   else{
      echo "no data";
  }

  
  ?>
<a href='../App/index.php'>Back</a>
<a href=""></a>

</body>
</html>