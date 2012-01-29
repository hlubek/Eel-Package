<?php
namespace Eel\Tests\Unit;

use Eel\Context;
use Eel\Evaluator;

abstract class AbstractEvaluatorTest extends \TYPO3\FLOW3\Tests\UnitTestCase {

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
			// Some whitespace allowed
			array('!0', $c, TRUE),
			// A not can be a word
			array('not 0', $c, TRUE),
		);
	}

	/**
	 * @return array
	 */
	public function comparisonExpressions() {
		$c = new Context();
		return array(
			array('1==0', $c, FALSE),
			array('1==1', $c, TRUE),
			array('0 == 0', $c, TRUE),
			// It's strict
			array('0==""', $c, FALSE),
			// Quoting doesn't matter
			array('"Foo"==\'Foo\'', $c, TRUE),
			// Whitespace okay!
			array('1> 0', $c, TRUE),
			// Whitespace okay!
			array('1 <0', $c, FALSE),
			// Multiple expressions, eval'd from left to right
			array('0 < 1 == 1', $c, TRUE),
			// Parenthesed comparisons
			array('(0 > 1) < (0 < 1))', $c, TRUE),
		);
	}

	/**
	 * @return array
	 */
	public function calculationExpressions() {
		$c = new Context();
		return array(
			// Very basic
			array('1 + 1', $c, 2),
			array('1 - 1', $c, 0),
			array('2*2', $c, 4),
			// Multiple calc with precedence
			array('1 + 2 * 3 + 4 / 2 + 2', $c, 11),
			//
			array('(1 + 2) * 3 + 4 / (2 + 2)', $c, 10),
		);
	}

	/**
	 * @return array
	 */
	public function combinedExpressions() {
		$c = new Context();
		return array(
			// Calculations before comparisons
			array('1 + 2 > 3', $c, FALSE),
			// Calculations before comparisons
			array('2 * 1 == 3 - 1', $c, TRUE),
			// Comparison on left side work too
			array('1 < 1 + 1', $c, TRUE),
		);
	}

	/**
	 * @return array
	 */
	public function booleanExpressions() {
		$c = new Context();
		return array(
			// Boolean literals work
			array('false', $c, FALSE),
			array('TRUE', $c, TRUE),
			// Conjunction before Disjunction
			array('TRUE && TRUE || FALSE && FALSE', $c, TRUE),
			array('TRUE && FALSE || FALSE && TRUE', $c, FALSE),
			array('1 < 2 && 2 > 1', $c, TRUE),
			array('!1 < 2', $c, FALSE),
			// Named and symbolic operators can be mixed
			array('TRUE && true and FALSE or false', $c, FALSE),
		);
	}

	/**
	 * @return array
	 */
	public function objectPathOnArrayExpressions() {
		// Wrap a value inside a context
		$c = new Context(array(
			'foo' => 42,
			'bar' => array(
				'baz' => 'Hello',
				'a1' => array(
					'b2' => 'Nested'
				)
			),
			'another' => array(
				'path' => 'b2'
			)
		));
		return array(
			// Undefined variables are NULL with the default context
			array('unknwn', $c, NULL),
			// Simple variable statement
			array('foo', $c, 42),
			// Simple object path
			array('bar.baz', $c, 'Hello'),
			// Dynamic array like access of properties by another object path (awesome!!!)
			array('bar.a1[another.path]', $c, 'Nested'),
			// Offset access with invalid path is NULL
			array('bar.a1[unknwn.path]', $c, NULL),
		);
	}

	/**
	 * @return array
	 */
	public function objectPathOnObjectExpressions() {
		$obj = new Fixtures\TestObject();
		$obj->setProperty('Test');
		$nested = new Fixtures\TestObject();
		$nested->setProperty($obj);
		// Wrap an object inside a context
		$c = new Context(array(
			'obj' => $obj,
			'nested' => $nested
		));
		return array(
			// Access object properties by getter
			array('obj.property', $c, 'Test'),
			// Access nested objects
			array('nested.property.property', $c, 'Test'),
			// Call a method on an object
			array('obj.callMe("Foo")', $c, 'Hello, Foo!'),
		);
	}

	/**
	 * @return array
	 */
	public function methodCallExpressions() {
		// Wrap an array with functions inside a context
		$c = new Context(array(
			'count' => function($array) {
				return count($array);
			},
			'funcs' => array(
				'dup' => function($array) {
					return array_map(function($item) { return $item * 2; }, $array);
				}
			),
			'arr' => array('a' => 1, 'b' => 2, 'c' => 3)
		));
		return array(
			// Call first-level method
			array('count(arr)', $c, 3),
			// Nest method calls and object paths
			array('funcs.dup(arr).b', $c, 4),
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
		$this->assertEvaluated($result, $expression, $context);
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
		$this->assertEvaluated($result, $expression, $context);
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
		$this->assertEvaluated($result, $expression, $context);
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
		$this->assertEvaluated($result, $expression, $context);
	}

	/**
	 * @test
	 * @dataProvider comparisonExpressions
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function comparisonExpressionsCanBeParsed($expression, $context, $result) {
		$this->assertEvaluated($result, $expression, $context);
	}

	/**
	 * @test
	 * @dataProvider calculationExpressions
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function calculationExpressionsCanBeParsed($expression, $context, $result) {
		$this->assertEvaluated($result, $expression, $context);
	}

	/**
	 * @test
	 * @dataProvider combinedExpressions
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function combinedExpressionsCanBeParsed($expression, $context, $result) {
		$this->assertEvaluated($result, $expression, $context);
	}

	/**
	 * @test
	 * @dataProvider objectPathOnArrayExpressions
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function objectPathOnArrayExpressionsCanBeParsed($expression, $context, $result) {
		$this->assertEvaluated($result, $expression, $context);
	}

	/**
	 * @test
	 * @dataProvider objectPathOnObjectExpressions
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function objectPathOnObjectExpressionsCanBeParsed($expression, $context, $result) {
		$this->assertEvaluated($result, $expression, $context);
	}

	/**
	 * @test
	 * @dataProvider methodCallExpressions
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function methodCallExpressionsCanBeParsed($expression, $context, $result) {
		$this->assertEvaluated($result, $expression, $context);
	}

	/**
	 * @test
	 * @dataProvider booleanExpressions
	 *
	 * @param string $expression
	 * @param \Eel\Context $context
	 * @param mixed $result
	 */
	public function booleanExpressionsCanBeParsed($expression, $context, $result) {
		$this->assertEvaluated($result, $expression, $context);
	}

	/**
	 * Assert that the expression is evaluated to the expected result
	 * under the given context.
	 *
	 * @param mixed $expected
	 * @param string $expression
	 * @param \Eel\Context $context
	 */
	protected function assertEvaluated($expected, $expression, $context) {
		$evaluator = $this->createEvaluator();
		$this->assertSame($expected, $evaluator->evaluate($expression, $context));
	}

	/**
	 * @return \Eel\Context
	 */
	abstract protected function createEvaluator();

}
?>