<br>
<br>
<a href="?page=dish-ingredient&show-dish-ingredients">Show All Dish Ingredients</a>
<br>
<section>
<h2>Input Dish Ingredient</h2>
<form method="POST">
    <?php if($dishes){
    echo "<select name='dish_id'>";
        foreach($dishes as $dish){
            echo 
            " <option value=",$dish['dish_id'],">",$dish['name'],"</option>"; 
        }
    echo "</select>";
    }?>
   <?php if($ingredients){
    echo "<select name='ingredient_id'>";
        foreach($ingredients as $ingredient){
            echo 
            " <option value=",$ingredient['ingredient_id'],">",$ingredient['name'],"</option>"; 
        }
    echo "</select>";
    }?>    
    <input type="submit" name="add-dishIngredient" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>
</section>
