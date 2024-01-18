<h2>Edit Ingredient</h2>
<form method="POST" >
     <?php if($ingredients){
    echo "<select name='ingredient_id'>";
        foreach($ingredients as $item){
            echo 
            " <option value=",$item['ingredient_id'],">",$item['ingredient_id'].". ".$item['name'],"</option>"; 
        }
    echo "</select>";
    }?>
    <input type="text" name="name" placeholder="Name" >
    <select name="type" id="">
        <option value="Meat">Meat</option>
        <option value="Vegetable">Vegetable</option>
        <option value="Seafood">Seafood</option>
        <option value="Fruit">Fruit</option>
        <option value="Dairy">Dairy</option>
    </select>
    
    <?php if($suppliers){
    echo "<select name='supplier_id'>";
        foreach($suppliers as $supplier){
            echo 
            " <option value=",$supplier['supplier_id'],">",$supplier['name'],"</option>"; 
        }
    echo "</select>";
    }?>
    <input type="number" name="price_per_kg" placeholder="new price">
    <input type="submit" name="edit-ingredient" value="Update">
    <input type="reset" name="reset" value="Reset">
</form>