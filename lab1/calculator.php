<?php

$expression = '4+3+5-6';

function calculator(string $expression): string
{
    $correctString = ' +-1234567890';
    for ($i = 0; $i < mb_strlen($expression); $i++) {
        if (!strpos($correctString, $expression[$i])) {
            return "incorrect";
        }
    }
    for ($i = 0; $i < mb_strlen($expression); $i++) {
        if (is_numeric($expression)) {

            $numbers[$i] = $expression[$i];
        }
    }

    $counting = str_split($expression);

    $process = $counting[0];


    for ($i = 1; $i < mb_strlen($expression); $i++) // сложение и вычитание
    {
        if ($counting[$i] === '+') // ищу символ '+'
        {
            $process = $process + $expression[$i + 1]; //складываю предыдущий элемент с элементом через 1
        } elseif ($counting[$i] === '-') // ищу символ '-'
        {
            $process = $process - $expression[$i + 1]; //вычитаю из предыдущего элемента элемент через 1
        }
    }
    return $process;
}

echo calculator($expression);
