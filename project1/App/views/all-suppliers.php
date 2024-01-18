
  <?php 
  
  if($suppliers){
  
    foreach($suppliers as $supplier){
      echo "<article>";
      echo "<p>Name: ", $supplier['name'] , "</p>";
      echo "<p>Address: ", $supplier['address'] , "</p>";
      echo "<p>City: ", $supplier['city'] , "</p>";
      echo "<p>Province: ", $supplier['province'] , "</p>";
      echo "<p>Postal Code: ", $supplier['postal_code'] , "</p>";
      echo "<p>Contact Person: ", $supplier['contact_person'] , "</p>";
      echo "<p>Contact Number: ", $supplier['contact_number'] , "</p>";
      echo "</article>";
    
    }
    
 
  }
   else{
      echo "no data";
  }

  
  ?>

<a href='../App/index.php'>Back</a>


