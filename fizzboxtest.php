<?php
require_once('fizzbox.php');

class fizzboxTest extends PHPUnit_Framework_TestCase
{

	public function testFizzInstance()
	{
		$fizzbox = new fizzbox();
		$this->assertNotEmpty($fizzbox);
		return $fizzbox;
	}


	public function buzzProvider()
	{
		return array(
			array(0, 0),
			array(1, 1),
			array(2, 2),
			array(3, 'fizz'),
			array(4, 4),
			array(5, 'buzz'),
			array(6, 'fizz'),
			array(7, 7),
			array(8, 8),
			array(9, 'fizz'),
			array(10, 'buzz'),
			array(11, 11),
			array(12, 'fizz'),
			array(13, 13),
			array(14, 14),
			array(15, 'fizzbuzz'),
			array(16, 16)
			);
	}

	/**
	*@depends testFizzInstance
	*@dataProvider buzzProvider
	*/
	public function testFizzbuzz($buzzProvider1, $buzzProvider2, $fizzboxInstance)
	{
		$this->assertEquals($buzzProvider2, $fizzboxInstance->fizz($buzzProvider1));
	}

}


?>