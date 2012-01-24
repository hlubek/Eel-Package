grammar Eel;

options {
	language = Php;
}

fullExpression
	:	expression EOF;

expression
	:	methodCall | compositeExpression | notExpression | term;

wrappedComposite
	:	'(' expression ')';

compositeExpression
	:	(wrappedComposite | term) (numberOperator | booleanOperator | comparisonOperator) (wrappedComposite | term);

notExpression
	:	'!' expression;

methodCall
	:	methodIdentifier arguments;

methodIdentifier
	:	ID (':' ID)?;

arguments
	:	'(' (expression (',' expression)* )? ')';

term	:	floatLiteral | integerLiteral | stringLiteral | objectPath;

numberOperator:	NUMBER_OP;

booleanOperator
	:	BOOLEAN_OP;

comparisonOperator
	:	COMP_OP;

integerLiteral
	:	INT;

floatLiteral
	:	FLOAT;

stringLiteral
	:	StringLiteral;

objectPath:	ID (PATH_SEP ID)*;

ID  :	('a'..'z'|'A'..'Z'|'_') ('a'..'z'|'A'..'Z'|'0'..'9'|'_')*
    ;

INT :	'0'..'9'+
    ;

FLOAT
    :   ('0'..'9')+ '.' ('0'..'9')* EXPONENT?
    |   '.' ('0'..'9')+ EXPONENT?
    |   ('0'..'9')+ EXPONENT
    ;

WS  :   ( ' '
        | '\t'
        | '\r'
        | '\n'
        ) {$channel=HIDDEN;}
    ;

// JavaScript String definition

StringLiteral
	: '"' DoubleStringCharacter* '"'
	| '\'' SingleStringCharacter* '\''
	;

fragment DoubleStringCharacter
	: ~('"' | '\\')
	| '\\' EscapeSequence
	;

fragment SingleStringCharacter
	: ~('\'' | '\\')
	| '\\' EscapeSequence
	;

fragment EscapeSequence
	: CharacterEscapeSequence
	| '0'
	| HexEscapeSequence
	| UnicodeEscapeSequence
	;

fragment CharacterEscapeSequence
	: SingleEscapeCharacter
	| NonEscapeCharacter
	;

fragment NonEscapeCharacter
	: ~(EscapeCharacter)
	;

fragment SingleEscapeCharacter
	: '\'' | '"' | '\\' | 'b' | 'f' | 'n' | 'r' | 't' | 'v'
	;

fragment EscapeCharacter
	: SingleEscapeCharacter
	| '0'..'9'
	| 'x'
	| 'u'
	;

fragment HexEscapeSequence
	: 'x' HEX_DIGIT HEX_DIGIT
	;

fragment UnicodeEscapeSequence
	: 'u' HEX_DIGIT HEX_DIGIT HEX_DIGIT HEX_DIGIT
	;

fragment
EXPONENT : ('e'|'E') ('+'|'-')? ('0'..'9')+ ;

fragment
HEX_DIGIT : ('0'..'9'|'a'..'f'|'A'..'F') ;

PATH_SEP:	'.';

NUMBER_OP
	:	'+' | '-' | '/' | '*' | '%';

BOOLEAN_OP
	:	'&&' | '||';

COMP_OP	:	'==' | '!=' | '<=' | '>=' | '<' | '>';
