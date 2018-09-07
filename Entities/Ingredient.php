<?php

namespace Entities;

class Ingredient extends AbstractObjectValue
{
    public function __construct(string $ingredientName)
    {
        $this->value = $ingredientName;
    }
}