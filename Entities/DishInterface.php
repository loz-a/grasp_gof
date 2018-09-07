<?php

namespace Entities;

use Collections\Ingredients;

interface DishInterface
{
    public function getName(): string;

    public function getIngredients(): Ingredients;
}