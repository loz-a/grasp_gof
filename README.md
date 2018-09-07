#ОПИС ПРЕДМЕТНОЇ ОБЛАСТІ:

Web-aплікашка роздруковує меню для різних кухонь.

- Guisine - кухня
- Meal - їжа, MealType - час прийому їжі (сніданок, обід, вечеря)
- Dish - страва
- Ingredient - інгредієнти для страви

Cuisine містить Meals (Set із типів Їжі),
Meal в свою чергу міcтить Dishes (Set із страв),
Dish містить Ingredients (Set з інгредієнтів)

- http://localhost:8000/?print=georgian - роздрукувати грузинську кухню
- http://localhost:8000/?print=ukrainian - роздрукувати українську кухню