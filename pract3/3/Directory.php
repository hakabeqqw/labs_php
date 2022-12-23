<?php

use Directory as GlobalDirectory;

require_once 'Index.php';
class Directorys implements computer
{

    protected string $nameOfDirectory;
    public $count = 0;
    public $elements = [];

    function __construct(string $nameOfDirectory)
    {
        $this->nameOfDirectory = $nameOfDirectory;
    }

    public function render(): string
    {
        $directory = $this->nameOfDirectory . ":";
        foreach ($this->elements as $value) {
            $directory = $directory . $value->render();
        }
        return $directory;
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
