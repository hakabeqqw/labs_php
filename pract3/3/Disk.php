<?php

require_once 'Index.php';

class Disk implements computer
{

    protected string $nameOfDisk;
    public $count = 0;
    public $elements = [];

    function __construct(string $nameOfDisk)
    {
        $this->nameOfDisk = $nameOfDisk;
    }

    public function getNameOfDisk()
    {
        return $this->nameOfDisk;
    }

    public function render(): string
    {
        $this->count = 0;
        $disk = $this->nameOfDisk . ":";
        foreach ($this->elements as $value) {
            $disk = $disk . $value->render();
            $this->count++;
        }
        return $disk;
    }

    public function getCount(): int
    {
        $count = 0;
        foreach ($this->elements as $value) {
            $count = $value->getCount() + $count;
        }
        return $count;
    }

    public function elementAdd(computer $value)
    {
        if (!($value instanceof Directorys)) {
            $this->elements[] = $value;
        }
    }
}
