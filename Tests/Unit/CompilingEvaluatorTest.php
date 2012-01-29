<?php
namespace Eel\Tests\Unit;

use Eel\Context;
use Eel\CompilingEvaluator;

class CompilingEvaluatorTest extends AbstractEvaluatorTest {

	/**
	 * @return \Eel\Context
	 */
	protected function createEvaluator() {
		return new CompilingEvaluator();
	}

}
?>