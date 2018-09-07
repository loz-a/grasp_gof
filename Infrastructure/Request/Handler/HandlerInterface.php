<?php

namespace Infrastructure\Request\Handler;

use Infrastructure\Request\RequestInterface;

interface HandlerInterface
{
    public function handle(RequestInterface $request): string;
}