<?php
namespace Eel\Tests\Unit;

use Eel\Context;
use Eel\Evaluator;

class EvaluatorTest extends \TYPO3\FLOW3\Tests\UnitTestCase {

	/**
	 * @return array
	 */
	public function objectPathExpressions() {
		$data = array(
			'foo' => array(
				'bar' => array(
					'baz' => 42
				)
			)
		);
		$c = new Context($data);
		return array(
			// The most simple object path
			array('foo', $c, $data['foo']),
			// A nested path
			array('foo.bar', $c, $data['foo']['bar']),
			// A more deeply nested path
			array('foo.bar.baz', $c, $data['foo']['bar']['baz']),
		);
	}

	/**
	 * @return array
	 */
	public function integerLiterals() {
		$c = new Context();
		return array(
			// So simple, so true
			array('1', $c, 1),
			// It all starts with zero
			array('0', $c, 0),
			// Very large number!
			array('237498237473284', $c, 237498237473284),
			// Don't be so negative
			array('-100', $c, -100),
		);
	}

	/**
	 * @return array
	 */
	public function floatLiterals() {
		$c = new Context();
		return array(
			array('1.0', $c, 1.0),
			array('3.141', $c, 3.141),
			array('-17.4', $c, -17.4),
		);
	}

	/**
	 * @return array
	 */
	public function stringLiterals() {
		$c = new Context();
		return array(
			// An empty string
			array('""', $c, ''),
			// Very basic
			array('"Hello world"', $c, 'Hello world'),
			// Escape not possible
			array('"Foo \"Bar\""', $c, 'Foo "Bar"'),
			// Single quotes ftw
			array('\'\'', $c, ''),
			// Single quotes ftw
			array('\'Foo\'', $c, 'Foo'),
			// Mixed quote salad
			array('\'"Foo" Bar\'', $c, '"Foo" Bar'),
		);
	}

	/**
	 * @return array
	 */
	public function notExpressions() {
		$c = new Context();
		return array(
			// Not one is false
			array('!1', $c, FALSE),
			// Not an empty string is true
			array('!""', $c, TRUE),
		);
	}

	/**
	 * @test
	 * @dataProvider integerLiterals
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function integerLiteralsCanBeParsed($expression, $context, $result) {
		$evaluator = new Evaluator();
		$this->assertSame($result, $evaluator->evaluate($expression, $context));
	}

	/**
	 * @test
	 * @dataProvider floatLiterals
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function floatLiteralsCanBeParsed($expression, $context, $result) {
		$evaluator = new Evaluator();
		$this->assertSame($result, $evaluator->evaluate($expression, $context));
	}

	/**
	 * @test
	 * @dataProvider stringLiterals
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function stringLiteralsCanBeParsed($expression, $context, $result) {
		$evaluator = new Evaluator();
		$this->assertSame($result, $evaluator->evaluate($expression, $context));
	}

	/**
	 * @test
	 * @dataProvider notExpressions
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function notExpressionsCanBeParsed($expression, $context, $result) {
		$evaluator = new Evaluator();
		$this->assertSame($result, $evaluator->evaluate($expression, $context));
	}

}
?>