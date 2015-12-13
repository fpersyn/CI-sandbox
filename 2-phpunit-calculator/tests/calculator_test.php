<?php

require('classes/calculator.php');
use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	
	public function testAdd()
	{
		$c = New Calculator;
		$result = $c->add(5,10);
		$this->assertEquals(15, $result);
	}
}

// run your tests via the CLI:
// cd into your working directory
// ../vendor/bin/phpunit tests/calculator_test.php
?>