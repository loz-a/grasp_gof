<?php

namespace Collections;

/**
 * Class AbstractCollection
 * @package Collections
 *
 * used Iterator Design Pattern
 */
abstract class AbstractCollection implements \IteratorAggregate, \Countable
{
    /**
     * @var array
     */
    protected $items;

    public function __toArray(): array
    {
        return $this->items;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->items);
    }

    public function count()
    {
        return \count($this->items);
    }
}