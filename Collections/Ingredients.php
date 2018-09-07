<?php

namespace Collections;

use Entities\Ingredient;

class Ingredients extends AbstractCollection
{
    public function __construct(Ingredient ...$ingredients)
    {
        $this->validateUniqueIngredients(...$ingredients);
        $this->items = $ingredients;
    }

    protected function validateUniqueIngredients(Ingredient ...$ingredients): void
    {
        $names = [];
        foreach ($ingredients as $ingredient) {
            $names[] = $ingredient->getValue();
        }

        if (\count(array_unique($names)) !== \count($ingredients)) {
            throw new \DomainException('Ingredient must be unique');
        }
    }
}