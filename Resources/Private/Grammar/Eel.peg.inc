<?php
namespace Eel;

require_once __DIR__ . '/../Resources/Private/PHP/php-peg/Parser.php';

class EelParser extends \Parser {

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

Identifier: /[a-zA-Z0-9]+/
ObjectName: Identifier
MethodIdentifier: Identifier

Term: NumberLiteral | StringLiteral
	function NumberLiteral(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function StringLiteral(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
*/

/*!* CombinedExpressions
Expression: (NotExpression | Term) > Comparison?
	function Comparison(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function NotExpression(&$result, $sub) {
		$result['val'] = $sub['val'];
	}
	function Term(&$result, $sub) {
		$result['val'] = $sub['val'];
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
NotExpression: ('!' | 'not' [) Expression
	function Expression(&$result, $sub) {
		$result['val'] = !(boolean)$sub['val'];
	}
Comparison: comp:('==' | '<=' | '>=' | '<' | '>') > exp:Expression
	function __finalise(&$self) {
		$self['comp'] = $self['comp']['text'];
		$self['rval'] = $self['exp']['val'];
	}
*/
}
?>