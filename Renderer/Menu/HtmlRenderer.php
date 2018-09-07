<?php

namespace Renderer\Menu;

use Collections\{Meals, Dishes, Ingredients};

/**
 * Class HtmlRenderer
 * @package Renderer\Menu
 *
 * used Bridge Design Pattern
 */
class HtmlRenderer implements MenuRendererInterface
{
    public function render(Meals $meals): string
    {
        $result = [];
        /** @var \Entities\MealInterface $meal */
        foreach ($meals as $meal) {
            $result[] = sprintf('<h2>%s</h2> %s',
                strtoupper($meal->getType()->getValue()),
                $this->renderDishes($meal->getDishes())
            );
        }
        return sprintf('<h1>MENU</h1><ul><li>%s</li></ul>', implode($result, '</li><li>'));
    }


    protected function renderDishes(Dishes $dishes): string
    {
        $result = [];
        /** @var \Entities\DishInterface $dish */
        foreach ($dishes as $dish) {
            $result[] = sprintf('<h2>%s</h2> %s',
                ucfirst($dish->getName()),
                $this->renderIngradients($dish->getIngredients())
            );
        }
        return sprintf('<ul><li>%s</li></ul>',implode($result, '</li><li>'));
    }


    protected function renderIngradients(Ingredients $ingredients): string
    {
        $result = [];
        /** @var \Entities\Ingredient $ingredient */
        foreach ($ingredients as $ingredient) {
            $result[] = $ingredient->getValue();
        }
        return sprintf('<ul><li>%s</li></ul>', implode($result, '</li><li>'));
    }
}