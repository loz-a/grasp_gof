<?php


namespace Entities;


use Collections\Meals;

interface CuisineInterface
{
    public function cookMeal(): MealInterface;

    public function getMeals(): Meals;
}