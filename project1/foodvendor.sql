-- create table query

CREATE TABLE `fransiskus42_food_vendor`.`Supplier` (`supplier_id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `address` VARCHAR(255) NOT NULL , `city` VARCHAR(255) NOT NULL , `province` VARCHAR(255) NOT NULL , `postal_code` VARCHAR(255) NOT NULL , `contact_person` VARCHAR(255) NOT NULL , `contact_number` VARCHAR(255) NOT NULL , PRIMARY KEY (`supplier_id`));


CREATE TABLE `fransiskus42_food_vendor`.`Ingredient` (`ingredient_id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `type` VARCHAR(255) NOT NULL , `price_per_kg` INT NOT NULL , `supplier_id` INT NOT NULL , PRIMARY KEY (`ingredient_id`));


CREATE TABLE `fransiskus42_food_vendor`.`Dish` (`dish_id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `type` VARCHAR(255) NOT NULL , `ingredient_id` INT NOT NULL , `ingredient_qty` INT NOT NULL , PRIMARY KEY (`dish_id`));


CREATE TABLE `fransiskus42_food_vendor`.`Dish_Ingredient` (`id` INT NOT NULL AUTO_INCREMENT , `dish_id` INT NOT NULL , `ingredient_id` INT NOT NULL , `qty` INT NOT NULL , PRIMARY KEY (`id`))


-- Relation query

ALTER TABLE `Ingredients` ADD CONSTRAINT `supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `Supplier`(`supplier_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `Dish` ADD CONSTRAINT `ingredient_id` FOREIGN KEY (`ingredient_id`) REFERENCES `Ingredient`(`ingredient_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `Dish_Ingredient` ADD CONSTRAINT `dish_id` FOREIGN KEY (`dish_id`) REFERENCES `Dish`(`dish_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `Dish_Ingredient` ADD CONSTRAINT `ingredient_id` FOREIGN KEY (`ingredient_id`) REFERENCES `Ingredient`(`ingredient_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


-- insert query

INSERT INTO `Supplier` (`supplier_id`, `name`, `address`, `city`, `province`, `postal_code`, `contact_person`, `contact_number`) VALUES (NULL, 'Meaty Processor Inc', '123 Boulevard Cossineau', 'Saint-Hubert', 'Quebec', 'J6Y 3Z4', 'Jaques', '5146789101'), (NULL, 'Hello Veggies Co', '111 Pond Jean Cartier', 'Quebec City', 'Quebec', 'Z3Z 4A4', 'Nina', '5141234597');

INSERT INTO `Supplier` (`supplier_id`, `name`, `address`, `city`, `province`, `postal_code`, `contact_person`, `contact_number`) VALUES (NULL, 'Loopy Food', '9927 King Street', 'Cornwall', 'Ontario', 'B3B 4B4', 'William', '6459923939'), (NULL, 'Lukas Food Processor', '929 Queen Street', 'Ottawa', 'Ontario', 'A9J 3Z3', 'Nell Burrow', '647992999');

INSERT INTO `Ingredient` (`ingredient_id`, `name`, `type`, `price_per_kg`, `supplier_id`) VALUES (NULL, 'Ground Beef', 'Meat', '7.99', '1'), (NULL, 'Corn', 'Vegetable', '4', '2');

INSERT INTO `Ingredient` (`ingredient_id`, `name`, `type`, `price_per_kg`, `supplier_id`) VALUES (NULL, 'Egg', 'Protein', '12', '4'), (NULL, 'Milk', 'Dairy', '6', '4');

INSERT INTO `Dish` (`dish_id`, `name`, `type`) VALUES (NULL, 'Boil Egg', 'Protein Food'), (NULL, 'Corn Soup', 'Protein Food');

INSERT INTO `Dish_Ingredient` (`id`, `dish_id`, `ingredient_id`, `qty`) VALUES (NULL, '1', '5', '1'), (NULL, '2', '2', '1');

-- update query

UPDATE `Dish_Ingredient` SET `ingredient_id` = '5', `qty` = '2' WHERE `Dish_Ingredient`.`id` = 4;

-- JOIN TABLE QUERY 

SELECT * FROM Dish_Ingredient JOIN Ingredient ON Dish_Ingredient.ingredient_id = Ingredient.ingredient_id JOIN Dish ON Dish_Ingredient.dish_id = Dish.dish_id WHERE Dish.dish_id = "2";