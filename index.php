<?php

use Handlers\Menu\{PrintGeHandler, PrintUkHandler};
use Infrastructure\Request\Request as HttpRequest;
use Infrastructure\Request\Handler\NotFoundHandler;
use Infrastructure\Request\Handler\Exception\NotFoundHandlerException;

require_once 'autoload.php';

/*
ОПИС ПРЕДМЕТНОЇ ОБЛАСТІ:

Web-aплікашка роздруковує меню для різних кухонь.

Guisine - кухня
Meal - їжа, MealType - час прийому їжі (сніданок, обід, вечеря)
Dish - страва
Ingredient - інгредієнти для страви

Cuisine містить Meals (Set із типів Їжі),
Meal в свою чергу міcтить Dishes (Set із страв),
Dish містить Ingredients (Set з інгредієнтів)

http://localhost:8000/?print=georgian - роздрукувати грузинську кухню
http://localhost:8000/?print=ukrainian - роздрукувати українську кухню

*/

try {
    $httpRequest = new HttpRequest();

    $handlers = new PrintGeHandler(
        new PrintUkHandler(
            new NotFoundHandler()
        )
    );

   $response = $handlers->handle($httpRequest);

} catch (NotFoundHandlerException $e) {
    $response = '<h1>Page Not Found</h1>';
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>GRASP and GoF</title>
    </head>
    <body>
            <?= $response ?>
    </body>
</html>
