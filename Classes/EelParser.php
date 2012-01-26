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

/* _IntegerNumber: / -? [0-9]+ / */
protected $match__IntegerNumber_typestack = array('_IntegerNumber');
function match__IntegerNumber ($stack = array()) {
	$matchrule = "_IntegerNumber"; $result = $this->construct($matchrule, $matchrule, null);
	if (( $subres = $this->rx( '/ -? [0-9]+ /' ) ) !== FALSE) {
		$result["text"] .= $subres;
		return $this->finalise($result);
	}
	else { return FALSE; }
}


/* _Decimals: / \.[0-9]+ / */
protected $match__Decimals_typestack = array('_Decimals');
function match__Decimals ($stack = array()) {
	$matchrule = "_Decimals"; $result = $this->construct($matchrule, $matchrule, null);
	if (( $subres = $this->rx( '/ \.[0-9]+ /' ) ) !== FALSE) {
		$result["text"] .= $subres;
		return $this->finalise($result);
	}
	else { return FALSE; }
}


/* NumberLiteral: int:_IntegerNumber dec:_Decimals? */
protected $match_NumberLiteral_typestack = array('NumberLiteral');
function match_NumberLiteral ($stack = array()) {
	$matchrule = "NumberLiteral"; $result = $this->construct($matchrule, $matchrule, null);
	$_4 = NULL;
	do {
		$matcher = 'match_'.'_IntegerNumber'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres, "int" );
		}
		else { $_4 = FALSE; break; }
		$res_3 = $result;
		$pos_3 = $this->pos;
		$matcher = 'match_'.'_Decimals'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres, "dec" );
		}
		else {
			$result = $res_3;
			$this->pos = $pos_3;
			unset( $res_3 );
			unset( $pos_3 );
		}
		$_4 = TRUE; break;
	}
	while(0);
	if( $_4 === TRUE ) { return $this->finalise($result); }
	if( $_4 === FALSE) { return FALSE; }
}

function NumberLiteral__finalise (&$self) {
		if (isset($self['dec'])) {
			$self['val'] = (float)($self['text']);
		} else {
			$self['val'] = (integer)$self['text'];
		}
	}

/* DoubleQuotedStringLiteral: '"' / (\\"|[^"])* / '"' */
protected $match_DoubleQuotedStringLiteral_typestack = array('DoubleQuotedStringLiteral');
function match_DoubleQuotedStringLiteral ($stack = array()) {
	$matchrule = "DoubleQuotedStringLiteral"; $result = $this->construct($matchrule, $matchrule, null);
	$_9 = NULL;
	do {
		if (substr($this->string,$this->pos,1) == '"') {
			$this->pos += 1;
			$result["text"] .= '"';
		}
		else { $_9 = FALSE; break; }
		if (( $subres = $this->rx( '/ (\\\\"|[^"])* /' ) ) !== FALSE) { $result["text"] .= $subres; }
		else { $_9 = FALSE; break; }
		if (substr($this->string,$this->pos,1) == '"') {
			$this->pos += 1;
			$result["text"] .= '"';
		}
		else { $_9 = FALSE; break; }
		$_9 = TRUE; break;
	}
	while(0);
	if( $_9 === TRUE ) { return $this->finalise($result); }
	if( $_9 === FALSE) { return FALSE; }
}


/* SingleQuotedStringLiteral: "\'" / (\\'|[^'])* / "\'" */
protected $match_SingleQuotedStringLiteral_typestack = array('SingleQuotedStringLiteral');
function match_SingleQuotedStringLiteral ($stack = array()) {
	$matchrule = "SingleQuotedStringLiteral"; $result = $this->construct($matchrule, $matchrule, null);
	$_14 = NULL;
	do {
		if (substr($this->string,$this->pos,1) == '\'') {
			$this->pos += 1;
			$result["text"] .= '\'';
		}
		else { $_14 = FALSE; break; }
		if (( $subres = $this->rx( '/ (\\\\\'|[^\'])* /' ) ) !== FALSE) { $result["text"] .= $subres; }
		else { $_14 = FALSE; break; }
		if (substr($this->string,$this->pos,1) == '\'') {
			$this->pos += 1;
			$result["text"] .= '\'';
		}
		else { $_14 = FALSE; break; }
		$_14 = TRUE; break;
	}
	while(0);
	if( $_14 === TRUE ) { return $this->finalise($result); }
	if( $_14 === FALSE) { return FALSE; }
}


/* StringLiteral: SingleQuotedStringLiteral | DoubleQuotedStringLiteral */
protected $match_StringLiteral_typestack = array('StringLiteral');
function match_StringLiteral ($stack = array()) {
	$matchrule = "StringLiteral"; $result = $this->construct($matchrule, $matchrule, null);
	$_19 = NULL;
	do {
		$res_16 = $result;
		$pos_16 = $this->pos;
		$matcher = 'match_'.'SingleQuotedStringLiteral'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres );
			$_19 = TRUE; break;
		}
		$result = $res_16;
		$this->pos = $pos_16;
		$matcher = 'match_'.'DoubleQuotedStringLiteral'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres );
			$_19 = TRUE; break;
		}
		$result = $res_16;
		$this->pos = $pos_16;
		$_19 = FALSE; break;
	}
	while(0);
	if( $_19 === TRUE ) { return $this->finalise($result); }
	if( $_19 === FALSE) { return FALSE; }
}

function StringLiteral_SingleQuotedStringLiteral (&$result, $sub) {
		$result['val'] = (string)str_replace("\'", "'", substr($sub['text'], 1, -1));
	}

function StringLiteral_DoubleQuotedStringLiteral (&$result, $sub) {
		$result['val'] = (string)str_replace('\"', '"', substr($sub['text'], 1, -1));
	}

/* Identifier: / [a-zA-Z_] [a-zA-Z0-9_]* / */
protected $match_Identifier_typestack = array('Identifier');
function match_Identifier ($stack = array()) {
	$matchrule = "Identifier"; $result = $this->construct($matchrule, $matchrule, null);
	if (( $subres = $this->rx( '/ [a-zA-Z_] [a-zA-Z0-9_]* /' ) ) !== FALSE) {
		$result["text"] .= $subres;
		return $this->finalise($result);
	}
	else { return FALSE; }
}


/* OffsetAccess: '[' < Expression > ']' */
protected $match_OffsetAccess_typestack = array('OffsetAccess');
function match_OffsetAccess ($stack = array()) {
	$matchrule = "OffsetAccess"; $result = $this->construct($matchrule, $matchrule, null);
	$_27 = NULL;
	do {
		if (substr($this->string,$this->pos,1) == '[') {
			$this->pos += 1;
			$result["text"] .= '[';
		}
		else { $_27 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else { $_27 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		if (substr($this->string,$this->pos,1) == ']') {
			$this->pos += 1;
			$result["text"] .= ']';
		}
		else { $_27 = FALSE; break; }
		$_27 = TRUE; break;
	}
	while(0);
	if( $_27 === TRUE ) { return $this->finalise($result); }
	if( $_27 === FALSE) { return FALSE; }
}

function OffsetAccess_Expression (&$result, $sub) {
		$result['index'] = $sub['val'];
	}

/* MethodCall: Identifier '(' < Expression* > ')' */
protected $match_MethodCall_typestack = array('MethodCall');
function match_MethodCall ($stack = array()) {
	$matchrule = "MethodCall"; $result = $this->construct($matchrule, $matchrule, null);
	$_35 = NULL;
	do {
		$matcher = 'match_'.'Identifier'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else { $_35 = FALSE; break; }
		if (substr($this->string,$this->pos,1) == '(') {
			$this->pos += 1;
			$result["text"] .= '(';
		}
		else { $_35 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		while (true) {
			$res_32 = $result;
			$pos_32 = $this->pos;
			$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) { $this->store( $result, $subres ); }
			else {
				$result = $res_32;
				$this->pos = $pos_32;
				unset( $res_32 );
				unset( $pos_32 );
				break;
			}
		}
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		if (substr($this->string,$this->pos,1) == ')') {
			$this->pos += 1;
			$result["text"] .= ')';
		}
		else { $_35 = FALSE; break; }
		$_35 = TRUE; break;
	}
	while(0);
	if( $_35 === TRUE ) { return $this->finalise($result); }
	if( $_35 === FALSE) { return FALSE; }
}

function MethodCall_Identifier (&$result, $sub) {
		$result['method'] = $sub['text'];
	}

function MethodCall_Expression (&$result, $sub) {
		$result['arguments'][] = $sub['val'];
	}

/* ObjectPath: (MethodCall | Identifier) ('.' (MethodCall | Identifier) | OffsetAccess)* */
protected $match_ObjectPath_typestack = array('ObjectPath');
function match_ObjectPath ($stack = array()) {
	$matchrule = "ObjectPath"; $result = $this->construct($matchrule, $matchrule, null);
	$_60 = NULL;
	do {
		$_42 = NULL;
		do {
			$_40 = NULL;
			do {
				$res_37 = $result;
				$pos_37 = $this->pos;
				$matcher = 'match_'.'MethodCall'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_40 = TRUE; break;
				}
				$result = $res_37;
				$this->pos = $pos_37;
				$matcher = 'match_'.'Identifier'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_40 = TRUE; break;
				}
				$result = $res_37;
				$this->pos = $pos_37;
				$_40 = FALSE; break;
			}
			while(0);
			if( $_40 === FALSE) { $_42 = FALSE; break; }
			$_42 = TRUE; break;
		}
		while(0);
		if( $_42 === FALSE) { $_60 = FALSE; break; }
		while (true) {
			$res_59 = $result;
			$pos_59 = $this->pos;
			$_58 = NULL;
			do {
				$_56 = NULL;
				do {
					$res_44 = $result;
					$pos_44 = $this->pos;
					$_53 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == '.') {
							$this->pos += 1;
							$result["text"] .= '.';
						}
						else { $_53 = FALSE; break; }
						$_51 = NULL;
						do {
							$_49 = NULL;
							do {
								$res_46 = $result;
								$pos_46 = $this->pos;
								$matcher = 'match_'.'MethodCall'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_49 = TRUE; break;
								}
								$result = $res_46;
								$this->pos = $pos_46;
								$matcher = 'match_'.'Identifier'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_49 = TRUE; break;
								}
								$result = $res_46;
								$this->pos = $pos_46;
								$_49 = FALSE; break;
							}
							while(0);
							if( $_49 === FALSE) { $_51 = FALSE; break; }
							$_51 = TRUE; break;
						}
						while(0);
						if( $_51 === FALSE) { $_53 = FALSE; break; }
						$_53 = TRUE; break;
					}
					while(0);
					if( $_53 === TRUE ) { $_56 = TRUE; break; }
					$result = $res_44;
					$this->pos = $pos_44;
					$matcher = 'match_'.'OffsetAccess'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_56 = TRUE; break;
					}
					$result = $res_44;
					$this->pos = $pos_44;
					$_56 = FALSE; break;
				}
				while(0);
				if( $_56 === FALSE) { $_58 = FALSE; break; }
				$_58 = TRUE; break;
			}
			while(0);
			if( $_58 === FALSE) {
				$result = $res_59;
				$this->pos = $pos_59;
				unset( $res_59 );
				unset( $pos_59 );
				break;
			}
		}
		$_60 = TRUE; break;
	}
	while(0);
	if( $_60 === TRUE ) { return $this->finalise($result); }
	if( $_60 === FALSE) { return FALSE; }
}

function ObjectPath_Identifier (&$result, $sub) {
		$path = $sub['text'];
		if (!array_key_exists('val', $result)) {
			$result['val'] = $this->context;
		}
		$result['val'] = $result['val']->getAndWrap($path);
	}

function ObjectPath_OffsetAccess (&$result, $sub) {
		$path = $sub['index'];
		$result['val'] = $result['val']->getAndWrap($path);
	}

function ObjectPath_MethodCall (&$result, $sub) {
		$arguments = isset($sub['arguments']) ? $sub['arguments'] : array();
		if (!array_key_exists('val', $result)) {
			$result['val'] = $this->context;
		}
		$result['val'] = $result['val']->callAndWrap($sub['method'], $arguments);
	}

/* Term: ObjectPath | NumberLiteral | StringLiteral */
protected $match_Term_typestack = array('Term');
function match_Term ($stack = array()) {
	$matchrule = "Term"; $result = $this->construct($matchrule, $matchrule, null);
	$_69 = NULL;
	do {
		$res_62 = $result;
		$pos_62 = $this->pos;
		$matcher = 'match_'.'ObjectPath'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres );
			$_69 = TRUE; break;
		}
		$result = $res_62;
		$this->pos = $pos_62;
		$_67 = NULL;
		do {
			$res_64 = $result;
			$pos_64 = $this->pos;
			$matcher = 'match_'.'NumberLiteral'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_67 = TRUE; break;
			}
			$result = $res_64;
			$this->pos = $pos_64;
			$matcher = 'match_'.'StringLiteral'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_67 = TRUE; break;
			}
			$result = $res_64;
			$this->pos = $pos_64;
			$_67 = FALSE; break;
		}
		while(0);
		if( $_67 === TRUE ) { $_69 = TRUE; break; }
		$result = $res_62;
		$this->pos = $pos_62;
		$_69 = FALSE; break;
	}
	while(0);
	if( $_69 === TRUE ) { return $this->finalise($result); }
	if( $_69 === FALSE) { return FALSE; }
}

function Term_ObjectPath (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

function Term_NumberLiteral (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

function Term_StringLiteral (&$result, $sub) {
		$result['val'] = $sub['val'];
	}



/* Expression: (WrappedExpression | NotExpression | Term) > (Comparison | Calculation)? */
protected $match_Expression_typestack = array('Expression');
function match_Expression ($stack = array()) {
	$matchrule = "Expression"; $result = $this->construct($matchrule, $matchrule, null);
	$_90 = NULL;
	do {
		$_80 = NULL;
		do {
			$_78 = NULL;
			do {
				$res_71 = $result;
				$pos_71 = $this->pos;
				$matcher = 'match_'.'WrappedExpression'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_78 = TRUE; break;
				}
				$result = $res_71;
				$this->pos = $pos_71;
				$_76 = NULL;
				do {
					$res_73 = $result;
					$pos_73 = $this->pos;
					$matcher = 'match_'.'NotExpression'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_76 = TRUE; break;
					}
					$result = $res_73;
					$this->pos = $pos_73;
					$matcher = 'match_'.'Term'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_76 = TRUE; break;
					}
					$result = $res_73;
					$this->pos = $pos_73;
					$_76 = FALSE; break;
				}
				while(0);
				if( $_76 === TRUE ) { $_78 = TRUE; break; }
				$result = $res_71;
				$this->pos = $pos_71;
				$_78 = FALSE; break;
			}
			while(0);
			if( $_78 === FALSE) { $_80 = FALSE; break; }
			$_80 = TRUE; break;
		}
		while(0);
		if( $_80 === FALSE) { $_90 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$res_89 = $result;
		$pos_89 = $this->pos;
		$_88 = NULL;
		do {
			$_86 = NULL;
			do {
				$res_83 = $result;
				$pos_83 = $this->pos;
				$matcher = 'match_'.'Comparison'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_86 = TRUE; break;
				}
				$result = $res_83;
				$this->pos = $pos_83;
				$matcher = 'match_'.'Calculation'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_86 = TRUE; break;
				}
				$result = $res_83;
				$this->pos = $pos_83;
				$_86 = FALSE; break;
			}
			while(0);
			if( $_86 === FALSE) { $_88 = FALSE; break; }
			$_88 = TRUE; break;
		}
		while(0);
		if( $_88 === FALSE) {
			$result = $res_89;
			$this->pos = $pos_89;
			unset( $res_89 );
			unset( $pos_89 );
		}
		$_90 = TRUE; break;
	}
	while(0);
	if( $_90 === TRUE ) { return $this->finalise($result); }
	if( $_90 === FALSE) { return FALSE; }
}

function Expression_WrappedExpression (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

function Expression_NotExpression (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

function Expression_Term (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

function Expression_Calculation (&$result, $sub) {
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

function Expression_Comparison (&$result, $sub) {
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

/* WrappedExpression: '(' > Expression > ')' */
protected $match_WrappedExpression_typestack = array('WrappedExpression');
function match_WrappedExpression ($stack = array()) {
	$matchrule = "WrappedExpression"; $result = $this->construct($matchrule, $matchrule, null);
	$_97 = NULL;
	do {
		if (substr($this->string,$this->pos,1) == '(') {
			$this->pos += 1;
			$result["text"] .= '(';
		}
		else { $_97 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else { $_97 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		if (substr($this->string,$this->pos,1) == ')') {
			$this->pos += 1;
			$result["text"] .= ')';
		}
		else { $_97 = FALSE; break; }
		$_97 = TRUE; break;
	}
	while(0);
	if( $_97 === TRUE ) { return $this->finalise($result); }
	if( $_97 === FALSE) { return FALSE; }
}

function WrappedExpression_Expression (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

/* NotExpression: (/ ! | not\s+ /) > Expression */
protected $match_NotExpression_typestack = array('NotExpression');
function match_NotExpression ($stack = array()) {
	$matchrule = "NotExpression"; $result = $this->construct($matchrule, $matchrule, null);
	$_104 = NULL;
	do {
		$_100 = NULL;
		do {
			if (( $subres = $this->rx( '/ ! | not\s+ /' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_100 = FALSE; break; }
			$_100 = TRUE; break;
		}
		while(0);
		if( $_100 === FALSE) { $_104 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else { $_104 = FALSE; break; }
		$_104 = TRUE; break;
	}
	while(0);
	if( $_104 === TRUE ) { return $this->finalise($result); }
	if( $_104 === FALSE) { return FALSE; }
}

function NotExpression_Expression (&$result, $sub) {
		$result['val'] = !(boolean)$sub['val'];
	}

/* Comparison: comp:/ == | <= | >= | < | > / > exp:Expression */
protected $match_Comparison_typestack = array('Comparison');
function match_Comparison ($stack = array()) {
	$matchrule = "Comparison"; $result = $this->construct($matchrule, $matchrule, null);
	$_109 = NULL;
	do {
		$stack[] = $result; $result = $this->construct( $matchrule, "comp" ); 
		if (( $subres = $this->rx( '/ == | <= | >= | < | > /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			$subres = $result; $result = array_pop($stack);
			$this->store( $result, $subres, 'comp' );
		}
		else {
			$result = array_pop($stack);
			$_109 = FALSE; break;
		}
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres, "exp" );
		}
		else { $_109 = FALSE; break; }
		$_109 = TRUE; break;
	}
	while(0);
	if( $_109 === TRUE ) { return $this->finalise($result); }
	if( $_109 === FALSE) { return FALSE; }
}

function Comparison__finalise (&$self) {
		$self['comp'] = $self['comp']['text'];
		$self['rval'] = $self['exp']['val'];
	}

/* Calculation: op:/ \+ | \- | \/ | \* | % / > exp:Expression */
protected $match_Calculation_typestack = array('Calculation');
function match_Calculation ($stack = array()) {
	$matchrule = "Calculation"; $result = $this->construct($matchrule, $matchrule, null);
	$_114 = NULL;
	do {
		$stack[] = $result; $result = $this->construct( $matchrule, "op" ); 
		if (( $subres = $this->rx( '/ \+ | \- | \/ | \* | % /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			$subres = $result; $result = array_pop($stack);
			$this->store( $result, $subres, 'op' );
		}
		else {
			$result = array_pop($stack);
			$_114 = FALSE; break;
		}
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres, "exp" );
		}
		else { $_114 = FALSE; break; }
		$_114 = TRUE; break;
	}
	while(0);
	if( $_114 === TRUE ) { return $this->finalise($result); }
	if( $_114 === FALSE) { return FALSE; }
}

function Calculation__finalise (&$self) {
		$self['op'] = $self['op']['text'];
		$self['rval'] = $self['exp']['val'];
	}


}
?>