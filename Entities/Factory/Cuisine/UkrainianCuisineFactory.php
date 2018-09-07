<?php

namespace Entities\Factory\Cuisine;

use Collections\{Dishes, Ingredients, Meals};
use Entities\{Cuisine, CuisineInterface, Dish, Ingredient, Meal, Meal\MealType};

/**
 * Class UkrainianCuisineFactory
 * @package Entities\Factory\Cuisine
 *
 * used Abstract Factory Design Pattern
 * тут пасувало би тягнути дані з конфіга або бази даних!!!
 */
class UkrainianCuisineFactory implements CuisineFactoryInterface
{
    public const CUISINE_NAME = 'Ukrainian';

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
        $varenyky = new Dish('Varenyky', new Ingredients(
            new Ingredient('Dough'),
            new Ingredient('Potatoes'),
            new Ingredient('Onion')
        ));

        $kompot = new Dish('Kompot', new Ingredients(new Ingredient('Apples')));

        return new Dishes($varenyky, $kompot);
    }

    protected function createLunchDishes(): Dishes
    {
        $borshch = new Dish('Borshch', new Ingredients(
            new Ingredient('Beets'),
            new Ingredient('Cabbage'),
            new Ingredient('Potatoes'),
            new Ingredient('Tomatoes'),
            new Ingredient('Onion')
        ));

        $deruny = new Dish('Deruny', new Ingredients(
            new Ingredient('Potato pancakes'),
            new Ingredient('Sour cream')
        ));

        $kompot = new Dish('Kompot', new Ingredients(new Ingredient('Berries')));

        return new Dishes($borshch, $deruny, $kompot);
    }

    protected function createSupperDishes(): Dishes
    {
        $kasha = new Dish('Kasha', new Ingredients(
            new Ingredient('Buckwheat'),
            new Ingredient('Pork rinds'),
            new Ingredient('Onion')
        ));

        $nalyvka = new Dish('Nalyvka', new Ingredients(new Ingredient('Cherries')));

        return new Dishes($kasha, $nalyvka);
    }

}