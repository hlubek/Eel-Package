<?php
namespace Eel\Tests\Unit\Fixtures;

use Eel\Context;
use Eel\Evaluator;

class TestObject {

	/**
	 * @var string
	 */
	protected $property;

	public function getProperty() {
		return $this->property;
	}

	public function setProperty($property) {
		$this->property = $property;
	}

	/**
	 * @param string $name
	 * @return string
	 */
	public function callMe($name) {
		return 'Hello, ' . $name . '!';
	}

}
?>