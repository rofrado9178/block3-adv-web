<br>
<br>
<a href="?page=ingredient&show-ingredient">Show All Ingredients</a>
<br>
<br>
<section>


<h2>Input Ingredient</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Name" >
    <select name="type" id="">
        <option value="Meat">Meat</option>
        <option value="Vegetable">Vegetable</option>
        <option value="Seafood">Seafood</option>
        <option value="Fruit">Fruit</option>
        <option value="Dairy">Dairy</option>
    </select>
    <input type="number" name="price_per_kg" placeholder="Price">
    <?php if($suppliers){
    echo "<select name='supplier_id'>";
        foreach($suppliers as $supplier){
            echo 
            " <option value=",$supplier['supplier_id'],">",$supplier['name'],"</option>"; 
        }
    echo "</select>";
    }?>
   
    <input type="submit" value="Submit" name="add-ingredient">
    <input type="reset" name="reset" value="Reset">
</form>

</section>

