<?php

namespace Entities;

use Collections\Dishes;
use Entities\Meal\MealType;

interface MealInterface
{
    public function getType(): MealType;

    public function getDishes(): Dishes;
}