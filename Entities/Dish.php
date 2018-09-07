<?php


namespace Entities;

use Collections\Ingredients;

class Dish implements DishInterface
{
    protected $name;

    /**
     * @var Ingredients
     */
    protected $ingredients;

    public function __construct(
        string $name,
        Ingredients $ingredients
    ) {
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIngredients(): Ingredients
    {
        return $this->ingredients;
    }

}