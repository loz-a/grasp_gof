<?php

namespace Collections;


use Entities\MealInterface;

class Meals extends AbstractCollection
{
    public function __construct(MealInterface ...$meals)
    {
        $this->validateUniqueMeals(...$meals);
        $this->items = $meals;
    }

    protected function validateUniqueMeals(MealInterface ...$meals): void
    {
        $names = [];
        foreach ($meals as $meal) {
            $names[] = $meal->getType()->getValue();
        }

        if (\count(array_unique($names)) !== \count($meals)) {
            throw new \DomainException('Meals must be unique');
        }
    }
}