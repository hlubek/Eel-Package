<?php
namespace Eel;

/**
 * The Evaluator evaluates expressions
 */
class Evaluator {

	protected $t_integerLiteral = '[\+\-]?[0-9]+';

	protected $t_floatLiteral = '[\+|\-]?[0-9]+\.[0-9]+';

	protected $t_doubleQuotedStringLiteral = '"([^"\\\\]|\\\\")*"';

	protected $t_singleQuotedStringLiteral = '\'([^\'\\\\]|\\\\\')*\'';

	protected $t_notDesignator = '(!|not\s+)';

	protected $t_methodCallStart = '[a-zA-Z_]+';

	protected $t_stringLiteral;

	protected $t_eof = '$';

	protected $t_term;

	/**
	 * The full expression that is evaluated
	 * @var string
	 */
	protected $expression;

	/**
	 * The current input that is processed, will be consumed by matches
	 * @var string
	 */
	protected $input;

	/**
	 * The current value that was evaluated, maybe we need a stack later
	 * @var array
	 */
	protected $valueStack;

	public function __construct() {
		$this->t_stringLiteral = $this->t_singleQuotedStringLiteral . '|' . $this->t_doubleQuotedStringLiteral;
		$this->t_term = $this->t_floatLiteral . '|' . $this->t_integerLiteral . '|' . $this->t_stringLiteral;

		$this->valueStack = array();
	}

	/**
	 * Evaluate an expression under a given context
	 *
	 * @param string $expression
	 * @param Context
	 * @return mixed
	 */
	public function evaluate($expression, Context $context) {
		$this->expression = $expression;
		$this->input = $expression;
		$this->fullExpression();
		return $this->value;
	}

	protected function fullExpression() {
		$this->expression();
		$this->match($this->t_eof);
	}

	protected function expression() {
		if ($this->predict($this->t_notDesignator)) {
			$this->notExpression();
		} elseif ($this->predict($this->t_term)) {
			$this->term();
		} else {
			$this->noViableAlternative();
		}
	}

	protected function notExpression() {
		$this->match($this->t_notDesignator);
		$this->expression();
		$this->value = !((boolean)$this->value);
	}

	protected function term() {
		if ($this->predict($this->t_floatLiteral)) {
			$this->floatLiteral();
		} elseif ($this->predict($this->t_integerLiteral)) {
			$this->integerLiteral();
		} elseif ($this->predict($this->t_stringLiteral)) {
			$this->stringLiteral();
		} else {
			$this->noViableAlternative();
		}
	}

	protected function integerLiteral() {
		$token = $this->match($this->t_integerLiteral);
		$this->value = (integer)$token;
	}

	protected function floatLiteral() {
		$token = $this->match($this->t_floatLiteral);
		$this->value = (float)$token;
	}

	protected function stringLiteral() {
		$token = $this->match($this->t_stringLiteral);
		$unescaped = str_replace(array('\\"', '\\\''), array('"', '\''), (string)$token);
		$this->value = substr($unescaped, 1, -1);
	}

	protected function match($pattern, $group = 0) {
		if (preg_match('/^' . $pattern . '/', $this->input, $matches)) {
			$this->input = substr($this->input, strlen($matches[0]));
			return $matches[$group];
		} else {
			$this->unexpectedInput($pattern);
		}
	}

	protected function predict($pattern) {
		return (boolean)preg_match('/^' . $pattern . '/', $this->input);
	}

	protected function noViableAlternative() {
		throw new \Exception('noViableAlternative');
	}

	protected function unexpectedInput($pattern) {
		throw new \Exception('unexpectedInput, expected /^' . $pattern . '/, was ' . $this->input);
	}

}
?>