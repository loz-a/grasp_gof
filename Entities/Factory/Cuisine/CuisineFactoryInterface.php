<?php

namespace Entities\Factory\Cuisine;

use Entities\CuisineInterface;

interface CuisineFactoryInterface
{
    public function create(): CuisineInterface;
}