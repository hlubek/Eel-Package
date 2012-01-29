<?php
namespace Eel;

/**
 * An evaluator that compiles expressions down to PHP code
 *
 * This simple implementation will lazily parse and evaluate the generated PHP
 * code into a function with a name built from the hashed expression.
 */
class CompilingEvaluator {


	/**
	 * Evaluate an expression under a given context
	 *
	 * @param string $expression
	 * @param Context
	 * @return mixed
	 */
	public function evaluate($expression, Context $context) {
		$identifier = md5($expression);
		$functionName = 'expression_' . $identifier;

		if (!function_exists($functionName)) {
			$parser = new CompilingEelParser($expression);
			$res = $parser->match_Expression();
			if (!array_key_exists('code', $res)) {
				throw new \Exception('No code in result: ' . json_encode($res));
			}
			$code = 'function ' . $functionName . '($context){return ' . $res['code'] . ';}';
			eval($code);
		}

		$result = $functionName($context);
		if ($result instanceof Context) {
			return $result->unwrap();
		} else {
			return $result;
		}
	}

}
?>