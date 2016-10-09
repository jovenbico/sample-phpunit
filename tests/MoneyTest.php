<?php
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase {

	function test_amount() {

		$m = new Money ( 100 );
		$this->assertEquals ( 100, $m->getAmount () );

	}

}