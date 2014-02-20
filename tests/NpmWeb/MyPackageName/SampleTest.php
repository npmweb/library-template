<?php

namespace NpmWeb\MyPackageName;

class SampleTest extends \PHPUnit_Framework_TestCase {

	var $myobj;

	public function setUp() {
		$this->myobj = new MyClass();
	}

	public function testGetSuccess() {
		// arrange
		$input = 'Foo';

		// act
		$result = $this->myobj->myfunction($input);

		// assert
		$this->assertEquals($input.'!',$result);

	}

}
