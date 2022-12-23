<?php
require_once 'Buyer.php';
$Buyer = new Buyer("hhhh", "Максим", "Вадимович", "Ул.Дадая", 12345678, 1);
$Buyer2 = new Buyer("xxxxxx", "ихихих", "ухухухху", "Ул.нетнетнет", 11111111, 2);
$Buyer3 = new Buyer("bbbbbb", "Максим", "Вадимович", "Ул.Дадая", 12345678, 3);

$array[] = $Buyer;
$array[] = $Buyer2;
$array[] = $Buyer3;

foreach ($array as $key => $value) {
    $array[$key]->outputInformation($key + 1);
}

foreach ($array as $key => $value) {
    for ($i = 1; $i < count($array); $i++)
        if ($array[$i]->getSurname()[0] < $array[$i - 1]->getSurname()[0]) {
            $Buyer0 = $array[$i - 1];
            $array[$i - 1] = $array[$i];
            $array[$i] = $Buyer0;
        }
}

foreach ($array as $key => $value) {
    $array[$key]->outputInformation($key + 1);
}
