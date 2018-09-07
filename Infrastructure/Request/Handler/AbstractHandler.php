<?php

namespace Infrastructure\Request\Handler;

use Infrastructure\Request\RequestInterface;

abstract class AbstractHandler implements HandlerInterface
{
    protected $next;

    public function __construct(HandlerInterface $next = null)
    {
        $this->next = $next;
    }

    abstract public function handle(RequestInterface $request): string;

}