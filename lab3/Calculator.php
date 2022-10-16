<?php

class Calculator
{
    public int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function sum($number)
    {
        $this->number += $number;
        return $this;
    }

    public function minus($number)
    {
        $this->number -= $number;
        return $this;
    }

    public function product($number)
    {
        $this->number *= $number;
        return $this;
    }

    public function division($number)
    {
        $this->number /= $number;
        return $this;
    }

    public function getResult()
    {
        return $this->number;
    }
}
$calculator = new Calculator(0);
$calculator->number;
echo $calculator->sum(3)->sum(3)->product(4)->getResult();
