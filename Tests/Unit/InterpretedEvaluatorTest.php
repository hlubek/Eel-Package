<?php
namespace Eel\Tests\Unit;

use Eel\Context;
use Eel\InterpretedEvaluator;

class InterpretedEvaluatorTest extends AbstractEvaluatorTest {

	/**
	 * @return \Eel\Context
	 */
	protected function createEvaluator() {
		return new InterpretedEvaluator();
	}

}
?>