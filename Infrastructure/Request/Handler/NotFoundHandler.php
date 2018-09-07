<?php

namespace Infrastructure\Request\Handler;

use Infrastructure\Request\RequestInterface;

class NotFoundHandler extends AbstractHandler
{
    /**
     * @param RequestInterface $request
     * @return string
     * @throws Exception\NotFoundHandlerException
     */
    public function handle(RequestInterface $request): string
    {
        throw new Exception\NotFoundHandlerException('Handler for process this request is not exists');
    }
}