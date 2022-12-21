<?php

abstract class Snack
{
	public string $name;
	public string $chocolate;
	/** @var string[] $toppings */
	public array $toppings;
	public string $cutting;


	public function prepare(): void
	{
		print("Началась создание snack-а");
		print("$this->name \n");
		print("Добавляется шоколад ");
		print("$this->chocolate \n");
		print("Добавлены начинки ");
		foreach ($this->toppings as $value) {
			print($value);
		}
	}
	public function cut(): void
	{
		print("$this->name будут резать $this->cutting");
	}
}
