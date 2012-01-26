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
Expression: (WrappedExpression | NotExpression | Term) > (Comparison | Calculation)?
	function WrappedExpression(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function NotExpression(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function Term(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function Calculation(&$result, $sub) {
		$lval = $result['val'];
		$rval = $sub['rval'];
		switch ($sub['op']) {
		case '+':
			$result['val'] = ($lval + $rval);
			break;
		case '-':
			$result['val'] = ($lval - $rval);
			break;
		case '/':
			$result['val'] = ($lval / $rval);
			break;
		case '*':
			$result['val'] = ($lval * $rval);
			break;
		case '%':
			$result['val'] = ($lval % $rval);
			break;
		}
	}
	function Comparison(&$result, $sub) {
		// Take the computed value (left side)
		$lval = $result['val'];
		$rval = $sub['rval'];
		switch ($sub['comp']) {
		case '==':
			$result['val'] = ($lval === $rval);
			break;
		case '<':
			$result['val'] = ($lval < $rval);
			break;
		case '<=':
			$result['val'] = ($lval <= $rval);
			break;
		case '>':
			$result['val'] = ($lval > $rval);
			break;
		case '>=':
			$result['val'] = ($lval >= $rval);
			break;
		}
	}
WrappedExpression: '(' > Expression > ')'
	function Expression(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
NotExpression: (/ ! | not\s+ /) > Expression
	function Expression(&$result, $sub) {
		$result['val'] = !(boolean)$sub['val'];
	}
Comparison: comp:/ == | <= | >= | < | > / > exp:Expression
	function __finalise(&$self) {
		$self['comp'] = $self['comp']['text'];
		$self['rval'] = $self['exp']['val'];
	}
Calculation: op:/ \+ | \- | \/ | \* | % / > exp:Expression
	function __finalise(&$self) {
		$self['op'] = $self['op']['text'];
		$self['rval'] = $self['exp']['val'];
	}
*/
}
?>