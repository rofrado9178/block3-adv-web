<br>
<br>

<h2>Show Ingredient for specific Dish</h2>
<form method="POST">
    <?php if($dishes){
    echo "<select name='dish_id'>";
        foreach($dishes as $dish){
            echo 
            " <option value=",$dish['dish_id'],">",$dish['name'],"</option>"; 
        }
    echo "</select>";
    }?>   
    <input type="submit" name="check-dish-ingredient" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>