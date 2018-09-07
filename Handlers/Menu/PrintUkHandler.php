<?php

namespace Handlers\Menu;

use Entities\Factory\Cuisine\UkrainianCuisineFactory;
use Entities\Menu\Menu;
use Infrastructure\Request\{RequestInterface, Handler\AbstractHandler};
use Renderer\Menu\HtmlRenderer;

/**
 * Class PrintUkHandler
 * @package Handlers\Menu
 *
 * used Chain of Responsibility Design Pattern
 */

class PrintUkHandler extends AbstractHandler
{
    public function handle(RequestInterface $request): string
    {
        if ($request->isGet()) {
            $data = $request->getQueryParams();

            if (isset($data['print']) &&
                $data['print'] === strtolower(UkrainianCuisineFactory::CUISINE_NAME)
            ) {
                $cuisine = (new UkrainianCuisineFactory())->create();
                $renderer = new HtmlRenderer();

                return (new Menu($cuisine, $renderer))->printMenu();
            }
        }

        return $this->next->handle($request);
    }

}