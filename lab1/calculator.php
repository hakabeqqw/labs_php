<?php

$expression = $argv[1];

function calculator(string $expression): string
{
    $correctString = ' +-1234567890';
    for ($i = 0; $i < mb_strlen($expression); $i++) {
        if (!strpos($correctString, $expression[$i])) {
            return "неверно";
        }
    }

    $counting = str_split($expression);

    $process = $counting[0];

    $countSigns = 0;

    for ($i = 1; $i < mb_strlen($expression); $i++) {
        if ($counting[$i] === '+') {
            $process = $process + $expression[$i + 1];
            $countSigns++;
        } elseif ($counting[$i] === '-') {
            $process = $process - $expression[$i + 1];
            $countSigns++;
        }
    }
    if ($countSigns > 4) {
        return "введено больше 5 слогаемых";
    }
    return $process;
}

echo calculator($expression);
