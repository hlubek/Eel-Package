<?php
namespace Eel;

require_once __DIR__ . '/../Resources/Private/PHP/php-peg/Parser.php';

class EelParser extends \Parser {

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

/* Identifier: /[a-zA-Z0-9]+/ */
protected $match_Identifier_typestack = array('Identifier');
function match_Identifier ($stack = array()) {
	$matchrule = "Identifier"; $result = $this->construct($matchrule, $matchrule, null);
	if (( $subres = $this->rx( '/[a-zA-Z0-9]+/' ) ) !== FALSE) {
		$result["text"] .= $subres;
		return $this->finalise($result);
	}
	else { return FALSE; }
}


/* ObjectName: Identifier */
protected $match_ObjectName_typestack = array('ObjectName');
function match_ObjectName ($stack = array()) {
	$matchrule = "ObjectName"; $result = $this->construct($matchrule, $matchrule, null);
	$matcher = 'match_'.'Identifier'; $key = $matcher; $pos = $this->pos;
	$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
	if ($subres !== FALSE) {
		$this->store( $result, $subres );
		return $this->finalise($result);
	}
	else { return FALSE; }
}


/* MethodIdentifier: Identifier */
protected $match_MethodIdentifier_typestack = array('MethodIdentifier');
function match_MethodIdentifier ($stack = array()) {
	$matchrule = "MethodIdentifier"; $result = $this->construct($matchrule, $matchrule, null);
	$matcher = 'match_'.'Identifier'; $key = $matcher; $pos = $this->pos;
	$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
	if ($subres !== FALSE) {
		$this->store( $result, $subres );
		return $this->finalise($result);
	}
	else { return FALSE; }
}


/* Term: NumberLiteral | StringLiteral */
protected $match_Term_typestack = array('Term');
function match_Term ($stack = array()) {
	$matchrule = "Term"; $result = $this->construct($matchrule, $matchrule, null);
	$_27 = NULL;
	do {
		$res_24 = $result;
		$pos_24 = $this->pos;
		$matcher = 'match_'.'NumberLiteral'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres );
			$_27 = TRUE; break;
		}
		$result = $res_24;
		$this->pos = $pos_24;
		$matcher = 'match_'.'StringLiteral'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres );
			$_27 = TRUE; break;
		}
		$result = $res_24;
		$this->pos = $pos_24;
		$_27 = FALSE; break;
	}
	while(0);
	if( $_27 === TRUE ) { return $this->finalise($result); }
	if( $_27 === FALSE) { return FALSE; }
}

function Term_NumberLiteral (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

function Term_StringLiteral (&$result, $sub) {
		$result['val'] = $sub['val'];
	}



/* Expression: (NotExpression | Term) > Comparison? */
protected $match_Expression_typestack = array('Expression');
function match_Expression ($stack = array()) {
	$matchrule = "Expression"; $result = $this->construct($matchrule, $matchrule, null);
	$_38 = NULL;
	do {
		$_34 = NULL;
		do {
			$_32 = NULL;
			do {
				$res_29 = $result;
				$pos_29 = $this->pos;
				$matcher = 'match_'.'NotExpression'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_32 = TRUE; break;
				}
				$result = $res_29;
				$this->pos = $pos_29;
				$matcher = 'match_'.'Term'; $key = $matcher; $pos = $this->pos;
				$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
				if ($subres !== FALSE) {
					$this->store( $result, $subres );
					$_32 = TRUE; break;
				}
				$result = $res_29;
				$this->pos = $pos_29;
				$_32 = FALSE; break;
			}
			while(0);
			if( $_32 === FALSE) { $_34 = FALSE; break; }
			$_34 = TRUE; break;
		}
		while(0);
		if( $_34 === FALSE) { $_38 = FALSE; break; }
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$res_37 = $result;
		$pos_37 = $this->pos;
		$matcher = 'match_'.'Comparison'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else {
			$result = $res_37;
			$this->pos = $pos_37;
			unset( $res_37 );
			unset( $pos_37 );
		}
		$_38 = TRUE; break;
	}
	while(0);
	if( $_38 === TRUE ) { return $this->finalise($result); }
	if( $_38 === FALSE) { return FALSE; }
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

function Expression_NotExpression (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

function Expression_Term (&$result, $sub) {
		$result['val'] = $sub['val'];
	}

/* NotExpression: ('!' | 'not' [) Expression */
protected $match_NotExpression_typestack = array('NotExpression');
function match_NotExpression ($stack = array()) {
	$matchrule = "NotExpression"; $result = $this->construct($matchrule, $matchrule, null);
	$_51 = NULL;
	do {
		$_48 = NULL;
		do {
			$_46 = NULL;
			do {
				$res_40 = $result;
				$pos_40 = $this->pos;
				if (substr($this->string,$this->pos,1) == '!') {
					$this->pos += 1;
					$result["text"] .= '!';
					$_46 = TRUE; break;
				}
				$result = $res_40;
				$this->pos = $pos_40;
				$_44 = NULL;
				do {
					if (( $subres = $this->literal( 'not' ) ) !== FALSE) { $result["text"] .= $subres; }
					else { $_44 = FALSE; break; }
					if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
					else { $_44 = FALSE; break; }
					$_44 = TRUE; break;
				}
				while(0);
				if( $_44 === TRUE ) { $_46 = TRUE; break; }
				$result = $res_40;
				$this->pos = $pos_40;
				$_46 = FALSE; break;
			}
			while(0);
			if( $_46 === FALSE) { $_48 = FALSE; break; }
			$_48 = TRUE; break;
		}
		while(0);
		if( $_48 === FALSE) { $_51 = FALSE; break; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) { $this->store( $result, $subres ); }
		else { $_51 = FALSE; break; }
		$_51 = TRUE; break;
	}
	while(0);
	if( $_51 === TRUE ) { return $this->finalise($result); }
	if( $_51 === FALSE) { return FALSE; }
}

function NotExpression_Expression (&$result, $sub) {
		$result['val'] = !(boolean)$sub['val'];
	}

/* Comparison: comp:('==' | '<=' | '>=' | '<' | '>') > exp:Expression */
protected $match_Comparison_typestack = array('Comparison');
function match_Comparison ($stack = array()) {
	$matchrule = "Comparison"; $result = $this->construct($matchrule, $matchrule, null);
	$_74 = NULL;
	do {
		$stack[] = $result; $result = $this->construct( $matchrule, "comp" ); 
		$_70 = NULL;
		do {
			$_68 = NULL;
			do {
				$res_53 = $result;
				$pos_53 = $this->pos;
				if (( $subres = $this->literal( '==' ) ) !== FALSE) {
					$result["text"] .= $subres;
					$_68 = TRUE; break;
				}
				$result = $res_53;
				$this->pos = $pos_53;
				$_66 = NULL;
				do {
					$res_55 = $result;
					$pos_55 = $this->pos;
					if (( $subres = $this->literal( '<=' ) ) !== FALSE) {
						$result["text"] .= $subres;
						$_66 = TRUE; break;
					}
					$result = $res_55;
					$this->pos = $pos_55;
					$_64 = NULL;
					do {
						$res_57 = $result;
						$pos_57 = $this->pos;
						if (( $subres = $this->literal( '>=' ) ) !== FALSE) {
							$result["text"] .= $subres;
							$_64 = TRUE; break;
						}
						$result = $res_57;
						$this->pos = $pos_57;
						$_62 = NULL;
						do {
							$res_59 = $result;
							$pos_59 = $this->pos;
							if (substr($this->string,$this->pos,1) == '<') {
								$this->pos += 1;
								$result["text"] .= '<';
								$_62 = TRUE; break;
							}
							$result = $res_59;
							$this->pos = $pos_59;
							if (substr($this->string,$this->pos,1) == '>') {
								$this->pos += 1;
								$result["text"] .= '>';
								$_62 = TRUE; break;
							}
							$result = $res_59;
							$this->pos = $pos_59;
							$_62 = FALSE; break;
						}
						while(0);
						if( $_62 === TRUE ) { $_64 = TRUE; break; }
						$result = $res_57;
						$this->pos = $pos_57;
						$_64 = FALSE; break;
					}
					while(0);
					if( $_64 === TRUE ) { $_66 = TRUE; break; }
					$result = $res_55;
					$this->pos = $pos_55;
					$_66 = FALSE; break;
				}
				while(0);
				if( $_66 === TRUE ) { $_68 = TRUE; break; }
				$result = $res_53;
				$this->pos = $pos_53;
				$_68 = FALSE; break;
			}
			while(0);
			if( $_68 === FALSE) { $_70 = FALSE; break; }
			$_70 = TRUE; break;
		}
		while(0);
		if( $_70 === TRUE ) {
			$subres = $result; $result = array_pop($stack);
			$this->store( $result, $subres, 'comp' );
		}
		if( $_70 === FALSE) {
			$result = array_pop($stack);
			$_74 = FALSE; break;
		}
		if (( $subres = $this->whitespace(  ) ) !== FALSE) { $result["text"] .= $subres; }
		$matcher = 'match_'.'Expression'; $key = $matcher; $pos = $this->pos;
		$subres = ( $this->packhas( $key, $pos ) ? $this->packread( $key, $pos ) : $this->packwrite( $key, $pos, $this->$matcher(array_merge($stack, array($result))) ) );
		if ($subres !== FALSE) {
			$this->store( $result, $subres, "exp" );
		}
		else { $_74 = FALSE; break; }
		$_74 = TRUE; break;
	}
	while(0);
	if( $_74 === TRUE ) { return $this->finalise($result); }
	if( $_74 === FALSE) { return FALSE; }
}

function Comparison__finalise (&$self) {
		$self['comp'] = $self['comp']['text'];
		$self['rval'] = $self['exp']['val'];
	}


}
?>