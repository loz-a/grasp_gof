<?php


namespace Entities;


interface OrderInterface
{
    public function getMeal(): MealInterface;
}