<?php

namespace Renderer\Menu;


use Collections\Meals;

interface MenuRendererInterface
{
    public function render(Meals $meals): string;
}