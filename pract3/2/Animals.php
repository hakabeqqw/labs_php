<?php

abstract class Animal
{
    protected $typeAnimal;
    protected $countFood;

    function __construct(string $typeAnimal, $countFood)
    {
        $this->typeAnimal = $typeAnimal;
        $this->countFood = $countFood;
    }

    abstract protected function diet(): void;
}
