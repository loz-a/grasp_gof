<?php

namespace Renderer\Menu;

use Collections\{Dishes, Ingredients, Meals};

/**
 * Class TextRenderer
 * @package Renderer\Menu
 *
 * used Bridge Design Pattern
 */

class TextRenderer implements MenuRendererInterface
{
    public function render(Meals $meals): string
    {
        $result = [];
        $result[] = '============ MENU =============';
        $result[] = '';
        /** @var \Entities\MealInterface $meal */
        foreach ($meals as $meal) {
            $result[] = strtoupper($meal->getType()->getValue());
            $result[] = $this->renderDishes($meal->getDishes());
            $result[] = '--------------------------------------';
        }
        return nl2br(implode($result, PHP_EOL));
    }


    protected function renderDishes(Dishes $dishes): string
    {
        $result = [];
        /** @var \Entities\DishInterface $dish */
        foreach ($dishes as $dish) {
            $result[] = ucfirst($dish->getName());
            $result[] = $this->renderIngradients($dish->getIngredients());
        }
        return implode($result, PHP_EOL);
    }


    protected function renderIngradients(Ingredients $ingredients): string
    {
        $result = [];
        /** @var \Entities\Ingredient $ingredient */
        foreach ($ingredients as $ingredient) {
            $result[] = $ingredient->getValue();
        }
        return implode($result, ', ');
    }

}