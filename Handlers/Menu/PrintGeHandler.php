<?php

namespace Handlers\Menu;

use Entities\Factory\Cuisine\GeorgianCuisineFactory;
use Entities\Menu\Menu;
use Infrastructure\Request\{RequestInterface, Handler\AbstractHandler};
use Renderer\Menu\HtmlRenderer;

/**
 * Class PrintUkHandler
 * @package Handlers\Menu
 *
 * used Chain of Responsibility Design Pattern
 */

class PrintGeHandler extends AbstractHandler
{
    public function handle(RequestInterface $request): string
    {
        if ($request->isGet()) {
            $data = $request->getQueryParams();
            if (isset($data['print']) &&
                $data['print'] === strtolower(GeorgianCuisineFactory::CUISINE_NAME)
            ) {
                $cuisine = (new GeorgianCuisineFactory())->create();
                $renderer = new HtmlRenderer();

                return (new Menu($cuisine, $renderer))->printMenu();
            }
        }

        return $this->next->handle($request);
    }

}