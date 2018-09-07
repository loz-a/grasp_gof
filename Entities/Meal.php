<?php

namespace Entities;

use Collections\Dishes;
use Entities\Meal\MealType;

class Meal implements MealInterface
{
    /**
     * @var MealType
     */
    protected $type;

    /**
     * @var Dishes[]
     */
    protected $dishes;

    public function __construct(MealType $type, Dishes $dishes)
    {
        $this->type = $type;
        $this->dishes = $dishes;
    }

    public function getType(): MealType
    {
        return $this->type;
    }

    public function getDishes(): Dishes
    {
        return $this->dishes;
    }

}