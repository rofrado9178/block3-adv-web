Food Vendor Schema

Table Suppliers
| id | name | address | city | province | postal_code |contact_person | contact_number |
| --- | ---- | ---- | ---- | ---- | ---- | ---- | -- |
| 1 | Meaty Distribution | 123 spring field | B43 J35 |Montreal | Quebec | Jaques | 514 123 4567 |
| 2 | Vegies Distribution | 123 Saint Laurent | P42 Q85 |Montreal | Quebec | Madona | 514 321 4545 |

Table Dishes
| id | name | price | type |
| -- | -- | -- | -- |
| 1 | Chop Suey | 10.99 | Vegetarian |
| 2 | Sweet And Sour Pork | 15.99 | Non Vegetarian |
| 3 | Beef and Brocoli | 18.99 | Non Vegetarian |

RELATIONAL TABLE SCHEMA

Table Ingredients
| id | name | type |price_per_kg | supplier (FK) |
| -- | ---- | ----- | ----- | --- |
| 1 | beef | meat |10.99 | 1
| 2 | chicken | meat |8.92 | 1
| 3 | potato | vegetables | 2.12 | 2 |
| 4 | brocoli | vegetables | 4.12 | 2 |

Table Dish Ingredients
| id | dish_id (FK from dishes) | ingredient_id (FK - ingredients) | quantity_per_g |
| -- | -- | --- | --- |
| 1 | 3 | 1 | 250 |
| 2 | 3 | 4 | 300 |
