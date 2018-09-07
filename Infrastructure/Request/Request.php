<?php

namespace Infrastructure\Request;

class Request implements RequestInterface
{
    public function isGet(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    public function getQueryParams(): array
    {
        return $this->isGet() ? $_GET : [];
    }

}