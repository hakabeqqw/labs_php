<?php

class Calculator
{
    public $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function sum($number)
    {
        $expressionSum = "+" . $number;
        return $expressionSum;
    }

    public function minus($number)
    {
        $expressionMinus = "-" . $number;
        return $expressionMinus;
    }

    public function product($number)
    {
        $expressionProduct = "*" . $number;
        return $expressionProduct;
    }

    public function division($number)
    {
        $expressionDivision = "/" . $number;
        return $expressionDivision;
    }

    public function getResult()
    {
        $result = $this->expressionSum . $this->expressionMinus . $this->expressionProduct . $this->expressionDivision;

        if(!$this->expressionDivision)
        {
            return 0;
        }
        return $result;
    }
}

$calculator = new Calculator();

$calculator->sum(2);
$calculator->sum(3);
$calculator->product(4);
echo $calculator->getResult();