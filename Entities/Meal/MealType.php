<?php

namespace Entities\Meal;

class MealType extends \Entities\AbstractObjectValue
{
    public const TYPE_BREAKFAST = 'breakfast';
    public const TYPE_LUNCH = 'lunch';
    public const TYPE_SUPPER = 'supper';

    public function __construct(string $value)
    {
        $this->validateValue($value);
        $this->value = $value;
    }

    protected function validateValue(string $type): bool
    {
        switch (true) {
            case $type === self::TYPE_BREAKFAST:
            case $type === self::TYPE_LUNCH:
            case $type === self::TYPE_SUPPER:
                return true;
            default:
                throw new \InvalidArgumentException(sprintf('Meal type is invalid'));
        }
    }

}