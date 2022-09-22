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

    $counting = str_split($expression);

    $process = $counting[0];


    for ($i = 1; $i < mb_strlen($expression); $i++) {
        if ($counting[$i] === '+') {
            $process = $process + $expression[$i + 1];
        } elseif ($counting[$i] === '-') {
            $process = $process - $expression[$i + 1];
        }
    }
    return $process;
}

echo calculator($expression);
