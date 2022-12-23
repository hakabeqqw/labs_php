<?php

require_once 'Index.php';

class File implements computer
{

    protected string $nameOfFile;
    public $count = 0;

    function __construct(string $nameOfFile)
    {
        $this->nameOfFile = $nameOfFile;
    }

    public function render(): string
    {
        $this->count = 0;
        $disk = $this->nameOfFile;
        return $disk;
    }

    public function getCount(): int
    {
        $count = 1;
        return $count;
    }
}
