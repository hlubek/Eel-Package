<?php
namespace Eel;

/**
 * A compiling expression parser
 *
 * The matcher functions will generate PHP code according to
 * the expressions. Method calls and object or array access are wrapped using
 * the Context object.
 */
class CompilingEelParser extends EelParser {

	public function NumberLiteral__finalise(&$self) {
		$self['code'] = $self['text'];
	}

	public function StringLiteral_SingleQuotedStringLiteral(&$result, $sub) {
		$result['code'] = $sub['text'];
	}
	public function StringLiteral_DoubleQuotedStringLiteral(&$result, $sub) {
		$result['code'] = $sub['text'];
	}

	public function BooleanLiteral__finalise(&$result) {
		$result['code'] = strtoupper($result['text']);
	}

	public function OffsetAccess_Expression(&$result, $sub) {
		$result['index'] = $sub['code'];
	}

	public function MethodCall_Identifier(&$result, $sub) {
		$result['method'] = '\'' . $sub['text'] . '\'';
	}
	public function MethodCall_Expression(&$result, $sub) {
		$result['arguments'][] = $sub['code'];
	}

	public function ObjectPath_Identifier(&$result, $sub) {
		$path = $sub['text'];
		if (!array_key_exists('code', $result)) {
			$result['code'] = '$context';
		}
		$result['code'] = $result['code'] . '->getAndWrap(\'' . $path . '\')';
	}

	public function ObjectPath_OffsetAccess(&$result, $sub) {
		$path = $sub['index'];
		$result['code'] = $result['code'] . '->getAndWrap(' . $path . ')';
	}

	public function ObjectPath_MethodCall(&$result, $sub) {
		$arguments = isset($sub['arguments']) ? $sub['arguments'] : array();
		if (!array_key_exists('code', $result)) {
			$result['code'] = '$context';
		}
		$result['code'] = $result['code'] . '->callAndWrap(' . $sub['method'] . ', array(' . implode(',', $arguments) . '))';
	}

	public function Term_term(&$result, $sub) {
		$result['code'] = $sub['code'];
	}

	public function Expression_Disjunction(&$result, $sub) {
		$result['code'] = $sub['code'];
	}

	public function SimpleExpression_term(&$result, $sub) {
		$result['code'] = $sub['code'];
	}

	public function WrappedExpression_Expression(&$result, $sub) {
		$result['code'] = '(' . $sub['code'] . ')';
	}

	public function NotExpression_Expression(&$result, $sub) {
		$result['code'] = '!(' . $sub['code'] . ')';
	}

	public function Disjunction_lft(&$result, $sub) {
		$result['code'] = $sub['code'];
	}

	public function Disjunction_rgt(&$result, $sub) {
		$result['code'] = '(' . $result['code'] .  ')||(' . $sub['code'] . ')';
	}

	public function Conjunction_lft(&$result, $sub) {
		$result['code'] = $sub['code'];
	}

	public function Conjunction_rgt(&$result, $sub) {
		$result['code'] = '(' . $result['code'] . ')&&(' . $sub['code'] . ')';
	}

	public function Comparison_lft(&$result, $sub) {
		$result['code'] = $sub['code'];
	}

	public function Comparison_comp(&$result, $sub) {
		$result['comp'] = $sub['text'];
	}

	public function Comparison_rgt(&$result, $sub) {
		$rval = $sub['code'];

		switch ($result['comp']) {
		case '==':
			$result['code'] = $result['code'] . '===' . $rval;
			break;
		case '<':
			$result['code'] = $result['code'] . '<' . $rval;
			break;
		case '<=':
			$result['code'] = $result['code'] . '<=' . $rval;
			break;
		case '>':
			$result['code'] = $result['code'] . '>' . $rval;
			break;
		case '>=':
			$result['code'] = $result['code'] . '>=' . $rval;
			break;
		}
	}

	public function SumCalculation_lft(&$result, $sub) {
		$result['code'] = $sub['code'];
	}

	public function SumCalculation_op(&$result, $sub) {
		$result['op'] = $sub['text'];
	}

	public function SumCalculation_rgt(&$result, $sub) {
		$rval = $sub['code'];
		switch ($result['op']) {
		case '+':
			$result['code'] = $result['code'] . '+' . $rval;
			break;
		case '-':
			$result['code'] = $result['code'] . '-' .  $rval;
			break;
		}
	}

	public function ProdCalculation_lft(&$result, $sub) {
		$result['code'] = $sub['code'];
	}

	public function ProdCalculation_op(&$result, $sub) {
		$result['op'] = $sub['text'];
	}

	public function ProdCalculation_rgt(&$result, $sub) {
		$rval = $sub['code'];
		switch ($result['op']) {
		case '/':
			$result['code'] = $result['code'] . '/' . $rval;
			break;
		case '*':
			$result['code'] = $result['code'] . '*' . $rval;
			break;
		case '%':
			$result['code'] = $result['code'] . '%' . $rval;
			break;
		}
	}

}
?>