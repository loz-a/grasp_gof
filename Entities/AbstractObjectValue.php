<?php


namespace Entities;


abstract class AbstractObjectValue
{
    protected $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }


}