<?php

$expression = '1+2+3+4+5';

function calculator(string $expression)
{
    if (mb_strlen($expression) > 9 || $expression == null) // проверка на количество слогаемых
    {
        echo "превышено количество слогаемых или ввод был выполнен неверно";
        return;
    }

    $counting = str_split($expression);

    $process = $counting[0];

    for ($i=0; $i < mb_strlen($expression); $i++)
    {
        if ($counting[$i] != '+' && $counting[$i] != '-' && $counting[$i] != '0' && $counting[$i] != '1' && $counting[$i] != '2' && $counting[$i] != '3' && $counting[$i] != '4' 
        && $counting[$i] != '5' && $counting[$i] != '6' && $counting[$i] != '7' && $counting[$i] != '8' && $counting[$i] != '9')
        {
            echo "в выражении присутствует буква или вы ввели не выражение";
            return;
        }
    }

    for ($i = 0; $i < mb_strlen($expression); $i++) // сложение и вычитание
    {
        if ($counting[$i] == '+') // ищу символ '+'
        {
            $process = $process + $expression[$i + 1]; //складываю предыдущий элемент с элементом через 1
        } 
        elseif ($counting[$i] == '-') // ищу символ '-'
        {
            $process = $process - $expression[$i + 1]; //вычитаю из предыдущего элемента элемент через 1
        }
    }
    return $process;
}

echo calculator($expression);