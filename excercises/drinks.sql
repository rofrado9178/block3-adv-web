ALTER TABLE `drinks` ADD CONSTRAINT `drink_size_id` FOREIGN KEY (`drink_size_id`) REFERENCES `drinkSize`(`drink_size_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `drinks` ADD CONSTRAINT `drink_type_id` FOREIGN KEY (`drink_type_id`) REFERENCES `drinkType`(`drink_type_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `drinks` ADD CONSTRAINT `drink_str_id` FOREIGN KEY (`drink_str_id`) REFERENCES `drinkStrength`(`drink_str_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `drinks` ADD CONSTRAINT `drink_tempt_id` FOREIGN KEY (`drink_temp_id`) REFERENCES `drinkTemp`(`drink_temp_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO `drinkSize` (`drink_size_id`, `drink_size_name`) VALUES (NULL, 'small'), (NULL, 'large');

INSERT INTO `drinkStrength` (`drink_str_id`, `drink_str`) VALUES (NULL, 'smooth'), (NULL, 'strong');

INSERT INTO `drinkTemp` (`drink_temp_id`, `drink_temp`) VALUES (NULL, 'cold'), (NULL, 'hot');

INSERT INTO `drinkType` (`drink_type_id`, `drink_type`) VALUES (NULL, 'coffee'), (NULL, 'milk');

INSERT INTO `drinks` (`drink_id`, `drink_name`, `drink_str_id`, `drink_type_id`, `drink_temp_id`, `drink_size_id`) VALUES (NULL, 'hot coffee', '2', '1', '2', '1'), (NULL, 'Hot chocolate', '1', '2', '2', '2');

SELECT * FROM drinks NATURAL JOIN drinkType NATURAL JOIN drinkTemp NATURAL JOIN drinkStrength NATURAL JOIN drinkSize WHERE drinkSize.drink_size_name = "Large";
