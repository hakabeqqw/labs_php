<?php

require_once 'Animals.php';
class Peaceful extends Animal
{
    public function __construct($typeAnimal, $countFood)
    {
        parent::__construct($typeAnimal, $countFood);
    }

    public function diet(): void
    {
        print("Тип $this->typeAnimal ест $this->countFood");
    }
}
