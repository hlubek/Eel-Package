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

/* ObjectPath: Identifier ('.' (MethodCall | Identifier) | OffsetAccess)* */
protected $match_ObjectPath_typestack = array('ObjectPath');
function match_ObjectPath ($stack = array()) {
	$matchrule = "ObjectPath"; $result = $this->construct($matchrule, $matchrule, null);
	$_54 = NULL;
	do {
		$matcher = 'match_'.'Identifier'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else { $_54 = FALSE; break; }
		while (true) {
			$res_53 = $result;
			$pos_53 = $this->pos;
			$_52 = NULL;
			do {
				$_50 = NULL;
				do {
					$res_38 = $result;
					$pos_38 = $this->pos;
					$_47 = NULL;
					do {
						if (substr($this->string,$this->pos,1) == '.') {
							$this->pos += 1;
							$result["text"] .= '.';
						}
						else { $_47 = FALSE; break; }
						$_45 = NULL;
						do {
							$_43 = NULL;
							do {
								$res_40 = $result;
								$pos_40 = $this->pos;
								$matcher = 'match_'.'MethodCall'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_43 = TRUE; break;
								}
								$result = $res_40;
								$this->pos = $pos_40;
								$matcher = 'match_'.'Identifier'; $key = $matcher; $pos = $this->pos;
								$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
								if ($subres !== FALSE) {
									$this->store( $result, $subres );
									$_43 = TRUE; break;
								}
								$result = $res_40;
								$this->pos = $pos_40;
								$_43 = FALSE; break;
							}
							while(0);
							if( $_43 === FALSE) { $_45 = FALSE; break; }
							$_45 = TRUE; break;
						}
						while(0);
						if( $_45 === FALSE) { $_47 = FALSE; break; }
						$_47 = TRUE; break;
					}
					while(0);
					if( $_47 === TRUE ) { $_50 = TRUE; break; }
					$result = $res_38;
					$this->pos = $pos_38;
					$matcher = 'match_'.'OffsetAccess'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_50 = TRUE; break;
					}
					$result = $res_38;
					$this->pos = $pos_38;
					$_50 = FALSE; break;
				}
				while(0);
				if( $_50 === FALSE) { $_52 = FALSE; break; }
				$_52 = TRUE; break;
			}
			while(0);
			if( $_52 === FALSE) {
				$result = $res_53;
				$this->pos = $pos_53;
				unset( $res_53 );
				unset( $pos_53 );
				break;
			}
		}
		$_54 = TRUE; break;
	}
	while(0);
	if( $_54 === TRUE ) { return $this->finalise($result); }
	if( $_54 === FALSE) { return FALSE; }
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
		$result['val'] = $result['val']->callAndWrap($sub['method'], $arguments);
	}

/* Term: ObjectPath | NumberLiteral | StringLiteral */
protected $match_Term_typestack = array('Term');
function match_Term ($stack = array()) {
	$matchrule = "Term"; $result = $this->construct($matchrule, $matchrule, null);
	$_63 = NULL;
	do {
		$res_56 = $result;
		$pos_56 = $this->pos;
		$matcher = 'match_'.'ObjectPath'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres );
			$_63 = TRUE; break;
		}
		$result = $res_56;
		$this->pos = $pos_56;
		$_61 = NULL;
		do {
			$res_58 = $result;
			$pos_58 = $this->pos;
			$matcher = 'match_'.'NumberLiteral'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_61 = TRUE; break;
			}
			$result = $res_58;
			$this->pos = $pos_58;
			$matcher = 'match_'.'StringLiteral'; $key = $matcher; $pos = $this->pos;
			$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
			if ($subres !== FALSE) {
				$this->store( $result, $subres );
				$_61 = TRUE; break;
			}
			$result = $res_58;
			$this->pos = $pos_58;
			$_61 = FALSE; break;
		}
		while(0);
		if( $_61 === TRUE ) { $_63 = TRUE; break; }
		$result = $res_56;
		$this->pos = $pos_56;
		$_63 = FALSE; break;
	}
	while(0);
	if( $_63 === TRUE ) { return $this->finalise($result); }
	if( $_63 === FALSE) { return FALSE; }
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
	$_84 = NULL;
	do {
		$_74 = NULL;
		do {
			$_72 = NULL;
			do {
				$res_65 = $result;
				$pos_65 = $this->pos;
				$matcher = 'match_'.'WrappedExpression'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_72 = TRUE; break;
				}
				$result = $res_65;
				$this->pos = $pos_65;
				$_70 = NULL;
				do {
					$res_67 = $result;
					$pos_67 = $this->pos;
					$matcher = 'match_'.'NotExpression'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_70 = TRUE; break;
					}
					$result = $res_67;
					$this->pos = $pos_67;
					$matcher = 'match_'.'Term'; $key = $matcher; $pos = $this->pos;
					$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
					if ($subres !== FALSE) {
						$this->store( $result, $subres );
						$_70 = TRUE; break;
					}
					$result = $res_67;
					$this->pos = $pos_67;
					$_70 = FALSE; break;
				}
				while(0);
				if( $_70 === TRUE ) { $_72 = TRUE; break; }
				$result = $res_65;
				$this->pos = $pos_65;
				$_72 = FALSE; break;
			}
			while(0);
			if( $_72 === FALSE) { $_74 = FALSE; break; }
			$_74 = TRUE; break;
		}
		while(0);
		if( $_74 === FALSE) { $_84 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$res_83 = $result;
		$pos_83 = $this->pos;
		$_82 = NULL;
		do {
			$_80 = NULL;
			do {
				$res_77 = $result;
				$pos_77 = $this->pos;
				$matcher = 'match_'.'Comparison'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_80 = TRUE; break;
				}
				$result = $res_77;
				$this->pos = $pos_77;
				$matcher = 'match_'.'Calculation'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_80 = TRUE; break;
				}
				$result = $res_77;
				$this->pos = $pos_77;
				$_80 = FALSE; break;
			}
			while(0);
			if( $_80 === FALSE) { $_82 = FALSE; break; }
			$_82 = TRUE; break;
		}
		while(0);
		if( $_82 === FALSE) {
			$result = $res_83;
			$this->pos = $pos_83;
			unset( $res_83 );
			unset( $pos_83 );
		}
		$_84 = TRUE; break;
	}
	while(0);
	if( $_84 === TRUE ) { return $this->finalise($result); }
	if( $_84 === FALSE) { return FALSE; }
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
	$_91 = NULL;
	do {
		if (substr($this->string,$this->pos,1) == '(') {
			$this->pos += 1;
			$result["text"] .= '(';
		}
		else { $_91 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else { $_91 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		if (substr($this->string,$this->pos,1) == ')') {
			$this->pos += 1;
			$result["text"] .= ')';
		}
		else { $_91 = FALSE; break; }
		$_91 = TRUE; break;
	}
	while(0);
	if( $_91 === TRUE ) { return $this->finalise($result); }
	if( $_91 === FALSE) { return FALSE; }
}

function WrappedExpression_Expression (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

/* NotExpression: (/ ! | not\s+ /) > Expression */
protected $match_NotExpression_typestack = array('NotExpression');
function match_NotExpression ($stack = array()) {
	$matchrule = "NotExpression"; $result = $this->construct($matchrule, $matchrule, null);
	$_98 = NULL;
	do {
		$_94 = NULL;
		do {
			if (( $subres = $this->rx( '/ ! | not\s+ /' ) ) !== FALSE) { $result["text"] .= $subres; }
			else { $_94 = FALSE; break; }
			$_94 = TRUE; break;
		}
		while(0);
		if( $_94 === FALSE) { $_98 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else { $_98 = FALSE; break; }
		$_98 = TRUE; break;
	}
	while(0);
	if( $_98 === TRUE ) { return $this->finalise($result); }
	if( $_98 === FALSE) { return FALSE; }
}

function NotExpression_Expression (&$result, $sub) {
		$result['val'] = !(boolean)$sub['val'];
	}

/* Comparison: comp:/ == | <= | >= | < | > / > exp:Expression */
protected $match_Comparison_typestack = array('Comparison');
function match_Comparison ($stack = array()) {
	$matchrule = "Comparison"; $result = $this->construct($matchrule, $matchrule, null);
	$_103 = NULL;
	do {
		$stack[] = $result; $result = $this->construct( $matchrule, "comp" ); 
		if (( $subres = $this->rx( '/ == | <= | >= | < | > /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			$subres = $result; $result = array_pop($stack);
			$this->store( $result, $subres, 'comp' );
		}
		else {
			$result = array_pop($stack);
			$_103 = FALSE; break;
		}
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres, "exp" );
		}
		else { $_103 = FALSE; break; }
		$_103 = TRUE; break;
	}
	while(0);
	if( $_103 === TRUE ) { return $this->finalise($result); }
	if( $_103 === FALSE) { return FALSE; }
}

function Comparison__finalise (&$self) {
		$self['comp'] = $self['comp']['text'];
		$self['rval'] = $self['exp']['val'];
	}

/* Calculation: op:/ \+ | \- | \/ | \* | % / > exp:Expression */
protected $match_Calculation_typestack = array('Calculation');
function match_Calculation ($stack = array()) {
	$matchrule = "Calculation"; $result = $this->construct($matchrule, $matchrule, null);
	$_108 = NULL;
	do {
		$stack[] = $result; $result = $this->construct( $matchrule, "op" ); 
		if (( $subres = $this->rx( '/ \+ | \- | \/ | \* | % /' ) ) !== FALSE) {
			$result["text"] .= $subres;
			$subres = $result; $result = array_pop($stack);
			$this->store( $result, $subres, 'op' );
		}
		else {
			$result = array_pop($stack);
			$_108 = FALSE; break;
		}
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres, "exp" );
		}
		else { $_108 = FALSE; break; }
		$_108 = TRUE; break;
	}
	while(0);
	if( $_108 === TRUE ) { return $this->finalise($result); }
	if( $_108 === FALSE) { return FALSE; }
}

function Calculation__finalise (&$self) {
		$self['op'] = $self['op']['text'];
		$self['rval'] = $self['exp']['val'];
	}


}
?>