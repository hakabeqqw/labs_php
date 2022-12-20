<?php
require_once 'Snack.php';

abstract class ChocolateFactory
{
	abstract protected function createSnack(string $type): Snack;
	public function orderSnack(string $type): void
	{
		$negr = $this->createSnack($type);
		$negr->prepare();
		$negr->cut();
	}
}
