<?php
namespace Entities;

use Collections\Meals;

class Cuisine implements CuisineInterface
{
    protected $name;
    protected $meals;

    public function __construct(
        string $name,
        Meals $meals
    ) {
        $this->name = $name;
        $this->meals = $meals;
    }

    public function cookMeal(): MealInterface
    {
        // TODO: Implement cookMeal() method.
    }


    public function getMeals(): Meals
    {
        return $this->meals;
    }

}