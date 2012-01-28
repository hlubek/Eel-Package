<?php
namespace Eel;

require_once __DIR__ . '/../Resources/Private/PHP/php-peg/Parser.php';

class EelParser extends \Parser {

	/**
	 * @var \Eel\Context
	 */
	protected $context;

	/**
	 * @param string $string
	 * @param \Eel\Context $context
	 */
	function __construct($string, $context) {
		parent::__construct($string);
		$this->context = $context;
	}

/*!* BasicTypes

_IntegerNumber: / -? [0-9]+ /
_Decimals: / \.[0-9]+ /
NumberLiteral: int:_IntegerNumber dec:_Decimals?
	function __finalise(&$self) {
		if (isset($self['dec'])) {
			$self['val'] = (float)($self['text']);
		} else {
			$self['val'] = (integer)$self['text'];
		}
	}

DoubleQuotedStringLiteral: '"' / (\\"|[^"])* / '"'
SingleQuotedStringLiteral: "\'" / (\\'|[^'])* / "\'"
StringLiteral: SingleQuotedStringLiteral | DoubleQuotedStringLiteral
	function SingleQuotedStringLiteral(&$result, $sub) {
		$result['val'] = (string)str_replace("\'", "'", substr($sub['text'], 1, -1));
	}
	function DoubleQuotedStringLiteral(&$result, $sub) {
		$result['val'] = (string)str_replace('\"', '"', substr($sub['text'], 1, -1));
	}

Identifier: / [a-zA-Z_] [a-zA-Z0-9_]* /
OffsetAccess: '[' < Expression > ']'
	function Expression(&$result, $sub) {
		$result['index'] = $sub['val'];
	}
MethodCall: Identifier '(' < Expression* > ')'
	function Identifier(&$result, $sub) {
		$result['method'] = $sub['text'];
	}
	function Expression(&$result, $sub) {
		$result['arguments'][] = $sub['val'];
	}

ObjectPath: (MethodCall | Identifier) ('.' (MethodCall | Identifier) | OffsetAccess)*
	function Identifier(&$result, $sub) {
		$path = $sub['text'];
		if (!array_key_exists('val', $result)) {
			$result['val'] = $this->context;
		}
		$result['val'] = $result['val']->getAndWrap($path);
	}
	function OffsetAccess(&$result, $sub) {
		$path = $sub['index'];
		$result['val'] = $result['val']->getAndWrap($path);
	}
	function MethodCall(&$result, $sub) {
		$arguments = isset($sub['arguments']) ? $sub['arguments'] : array();
		if (!array_key_exists('val', $result)) {
			$result['val'] = $this->context;
		}
		$result['val'] = $result['val']->callAndWrap($sub['method'], $arguments);
	}

Term: ObjectPath | NumberLiteral | StringLiteral
	function ObjectPath(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function NumberLiteral(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function StringLiteral(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
*/

/*!* CombinedExpressions
Expression: Comparison
	function Comparison(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
SimpleExpression: WrappedExpression | NotExpression | Term
	function WrappedExpression(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function NotExpression(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function Term(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
WrappedExpression: '(' > Expression > ')'
	function Expression(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
NotExpression: (/ ! | not\s+ /) > Expression
	function Expression(&$result, $sub) {
		$result['val'] = !(boolean)$sub['val'];
	}
Comparison: lft:Calculation (< comp:/ == | <= | >= | < | > / > rgt:Calculation)?
	function lft(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function comp(&$result, $sub) {
		$result['comp'] = $sub['text'];
	}
	function rgt(&$result, $sub) {
		$rval = $sub['val'];
		switch ($result['comp']) {
		case '==':
			$result['val'] = $result['val'] === $rval;
			break;
		case '<':
			$result['val'] = $result['val'] < $rval;
			break;
		case '<=':
			$result['val'] = $result['val'] <= $rval;
			break;
		case '>':
			$result['val'] = $result['val'] > $rval;
			break;
		case '>=':
			$result['val'] = $result['val'] >= $rval;
			break;
		}
	}
Calculation: lft:SimpleExpression (< op:/ \+ | \- | \/ | \* | % / > rgt:SimpleExpression)?
	function lft(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function op(&$result, $sub) {
		$result['op'] = $sub['text'];
	}
	function rgt(&$result, $sub) {
		$rval = $sub['val'];
		switch ($result['op']) {
		case '+':
			$result['val'] += $rval;
			break;
		case '-':
			$result['val'] -= $rval;
			break;
		case '/':
			$result['val'] = $result['val'] / $rval;
			break;
		case '*':
			$result['val'] *= $rval;
			break;
		case '%':
			$result['val'] = $result['val'] % $rval;
			break;
		}
	}
*/
}
?>