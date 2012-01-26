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
		$parser = new EelParser($expression, $context);
		$res = $parser->match_Expression();
		if (!array_key_exists('val', $res)) {
			throw new \Exception('No value in result: ' . json_encode($res));
		} else if ($res['val'] instanceof Context) {
			return $res['val']->unwrap();
		} else {
			return $res['val'];
		}
	}

}
?>