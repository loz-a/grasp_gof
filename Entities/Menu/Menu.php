<?php

namespace Entities\Menu;

use Entities\CuisineInterface;
use Renderer\Menu\MenuRendererInterface;

/**
 * Class Menu
 * @package Entities\Menu
 *
 * used Bridge Design Pattern
 */
class Menu implements PrintableInterface
{
    protected $cuisine;
    protected $renderer;

    public function __construct(
        CuisineInterface $cuisine,
        MenuRendererInterface $renderer
    ) {
        $this->cuisine = $cuisine;
        $this->renderer = $renderer;
    }


    public function printMenu(): string
    {
        return $this->renderer->render($this->cuisine->getMeals());
    }


}