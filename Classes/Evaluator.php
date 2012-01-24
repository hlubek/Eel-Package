<?php
namespace Eel;

/**
 * The Evaluator evaluates expressions
 */
class Evaluator {


	/**
	 * Evaluate an expression under a given context
	 *
	 * @param string $expression
	 * @param Context
	 * @return mixed
	 */
	public function evaluate($expression, Context $context) {
		$parser = new EelParser($expression);
		$res = $parser->match_Expression();
		if (!isset($res['val'])) {
			throw new \Exception('No value in result: ' . json_encode($res));
		}
		return $res['val'];
	}

}
?>