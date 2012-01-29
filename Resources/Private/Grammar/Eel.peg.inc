<?php
namespace Eel;

require_once __DIR__ . '/../Resources/Private/PHP/php-peg/Parser.php';

class EelParser extends \Parser {

/*!* BasicTypes

_IntegerNumber: / -? [0-9]+ /
_Decimals: / \.[0-9]+ /
NumberLiteral: int:_IntegerNumber dec:_Decimals?

DoubleQuotedStringLiteral: '"' / (\\"|[^"])* / '"'
SingleQuotedStringLiteral: "\'" / (\\'|[^'])* / "\'"
StringLiteral: SingleQuotedStringLiteral | DoubleQuotedStringLiteral

BooleanLiteral: 'true' | 'TRUE' | 'false' | 'FALSE'

Identifier: / [a-zA-Z_] [a-zA-Z0-9_]* /
OffsetAccess: '[' < Expression > ']'
MethodCall: Identifier '(' < Expression* > ')'

ObjectPath: (MethodCall | Identifier) ('.' (MethodCall | Identifier) | OffsetAccess)*

Term: term:BooleanLiteral | term:NumberLiteral | term:StringLiteral | term:ObjectPath
*/

/*!* CombinedExpressions
Expression: Disjunction
SimpleExpression: term:WrappedExpression | term:NotExpression | term:Term
WrappedExpression: '(' > Expression > ')'
NotExpression: (/ ! | not\s+ /) > Expression
Disjunction: lft:Conjunction (< / \|\| | or\s+ / > rgt:Conjunction)*
Conjunction: lft:Comparison (< / && | and\s+ / > rgt:Comparison)*
Comparison: lft:SumCalculation (< comp:/ == | <= | >= | < | > / > rgt:SumCalculation)?
SumCalculation: lft:ProdCalculation (< op:/ \+ | \- / > rgt:ProdCalculation)*
ProdCalculation: lft:SimpleExpression (< op:/ \/ | \* | % / > rgt:SimpleExpression)*

*/

}
?>