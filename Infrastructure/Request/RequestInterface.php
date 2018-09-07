<?php

namespace Infrastructure\Request;

interface RequestInterface
{
    public function isGet(): bool;

    public function getQueryParams(): array;
}