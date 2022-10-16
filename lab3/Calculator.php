<?php

class Calculator
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function sum($number): self
    {
        $this->number += $number;
        return $this;
    }

    public function minus($number): self
    {
        $this->number -= $number;
        return $this;
    }

    public function product($number): self
    {
        $this->number *= $number;
        return $this;
    }

    public function division($number): self
    {
        $this->number /= $number;
        return $this;
    }

    public function getResult(): int
    {
        return $this->number;
    }
}
$calculator = new Calculator(0);
$calculator->getResult();
echo $calculator->sum(3)->sum(3)->product(4)->getResult();
