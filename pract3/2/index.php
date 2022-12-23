<?php

require_once 'Predator.php';
require_once 'Peaceful.php';
require_once 'Middle.php';

$typeAnimal = 'str';
$countFood = '123';

$animal1 = new Predator("Хищник", "Много");
$animal2 = new Middle("Всеядный", "Достаточно");
$animal3 = new Peaceful("Травоядный", "Мало");


echo $animal3->diet();
