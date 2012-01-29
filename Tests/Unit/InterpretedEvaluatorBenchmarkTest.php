<?php
namespace Eel\Tests\Unit;

use Eel\Context;
use Eel\InterpretedEvaluator;

/**
 * A benchmark to test the interpreting evaluator
 */
class InterpretedEvaluatorBenchmarkTest extends \TYPO3\FLOW3\Tests\UnitTestCase {

	/**
	 * @test
	 */
	public function loopedExpressions() {
		$evaluator = new InterpretedEvaluator();
		$expression = 'foo.bar=="Test"||foo.baz=="Test"||reverse(foo).bar=="Test"';
		$context = new Context(array(
			'foo' => array(
				'bar' => 'Test1',
				'baz' => 'Test2'
			),
			'reverse' => function($array) {
				return array_reverse($array, TRUE);
			}
		));
		for ($i = 0; $i < 10000; $i++) {
			$evaluator->evaluate($expression, $context);
		}
	}

}
?>