<?php

namespace Collections;

use Entities\DishInterface;

class Dishes extends AbstractCollection
{
    public function __construct(DishInterface ...$dishes)
    {
        $this->validateUniqueDishes(...$dishes);
        $this->items = $dishes;
    }

    protected function validateUniqueDishes(DishInterface ...$dishes): void
    {
        $names = [];
        foreach ($dishes as $dish) {
            $names[] = $dish->getName();
        }

        if (\count(array_unique($names)) !== \count($dishes)) {
            throw new \DomainException('Dishes must be unique');
        }
    }

}