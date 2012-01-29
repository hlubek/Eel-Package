<?php
namespace Eel;

/**
 * An expression evalutator that interprets expressions
 *
 * There is no generated PHP code so this evaluator does not perform very
 * good in multiple invocations.
 */
class InterpretedEvaluator {


	/**
	 * Evaluate an expression under a given context
	 *
	 * @param string $expression
	 * @param Context
	 * @return mixed
	 */
	public function evaluate($expression, Context $context) {
		$parser = new InterpretedEelParser($expression, $context);
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