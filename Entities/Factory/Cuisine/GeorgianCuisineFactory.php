<?php

namespace Entities\Factory\Cuisine;

use Collections\{Dishes, Ingredients, Meals};
use Entities\{Cuisine, CuisineInterface, Dish, Ingredient, Meal, Meal\MealType};

/**
 * Class GeorgianCuisineFactory
 * @package Entities\Factory\Cuisine
 *
 * used Abstract Factory Design Pattern
 * тут пасувало би тягнути дані з конфіга або бази даних!!!
 */
class GeorgianCuisineFactory implements CuisineFactoryInterface
{
    public const CUISINE_NAME = 'Georgian';

    public function create(): CuisineInterface
    {
        return new Cuisine(self::CUISINE_NAME, $this->createMeals());
    }

    protected function createMeals(): Meals
    {
        return new Meals(
            new Meal(new MealType(MealType::TYPE_BREAKFAST), $this->createBrackfastDishes()),
            new Meal(new MealType(MealType::TYPE_LUNCH), $this->createLunchDishes()),
            new Meal(new MealType(MealType::TYPE_SUPPER), $this->createSupperDishes())
        );
    }

    protected function createBrackfastDishes(): Dishes
    {
        $pkhali = new Dish('Pkhali', new Ingredients(
            new Ingredient('Cabbage'),
            new Ingredient('Eggplant'),
            new Ingredient('Spinach')
        ));

        $wine = new Dish('Wine', new Ingredients(new Ingredient('Grape')));

        return new Dishes($pkhali, $wine);
    }

    protected function createLunchDishes(): Dishes
    {
        $chakapuli = new Dish('Chakapuli', new Ingredients(
            new Ingredient('Veal'),
            new Ingredient('Dill'),
            new Ingredient('Tarragon leaves'),
            new Ingredient('Dry white wine'),
            new Ingredient('Onion')
        ));

        $churchkhela = new Dish('Churchkhela', new Ingredients(
            new Ingredient('Grape'),
            new Ingredient('Nuts'),
            new Ingredient('Flour')
        ));

        $wine = new Dish('Wine', new Ingredients(new Ingredient('Grape')));

        return new Dishes($chakapuli, $churchkhela, $wine);
    }

    protected function createSupperDishes(): Dishes
    {
        $dolma = new Dish('Dolma', new Ingredients(
            new Ingredient('Olive oil'),
            new Ingredient('Rice'),
            new Ingredient('Garlic')
        ));

        $wine = new Dish('Wine', new Ingredients(new Ingredient('Grape')));

        return new Dishes($dolma, $wine);
    }

}