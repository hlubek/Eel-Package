<?php
// $ANTLR 3.1.3 ��� 06, 2009 18:28:01 Resources/Private/Grammar/Eel.g 2012-01-23 00:01:18


# for convenience in actions
if (!defined('HIDDEN')) define('HIDDEN', BaseRecognizer::$HIDDEN);


function EelLexer_DFA9_static(){
    $eot = array(5, 65535);
    $eof = array(5, 65535);
    $min = array(2, 46, 3, 65535);
    $max = array(1, 57, 1, 101, 3, 65535);
    $accept = array(2, 65535, 1, 2, 1, 1, 1, 3);
    $special = array(5, 65535);
    $transitionS = array(array(1, 2, 1, 65535, 10, 1), array(1, 3, 1, 65535,
    10, 1, 11, 65535, 1, 4, 31, 65535, 1, 4), array(), array(), array());

    $arr = array();
    $arr['eot'] = DFA::unpackRLE($eot);
    $arr['eof'] = DFA::unpackRLE($eof);
    $arr['min'] = DFA::unpackRLE($min, true);
    $arr['max'] = DFA::unpackRLE($max, true);
    $arr['accept'] = DFA::unpackRLE($accept);
    $arr['special'] = DFA::unpackRLE($special);


    $numStates = sizeof($transitionS);
    $arr['transition'] = array();
    for ($i=0; $i<$numStates; $i++) {
        $arr['transition'][$i] = DFA::unpackRLE($transitionS[$i]);
    }
    return $arr;
}
$EelLexer_DFA9 = EelLexer_DFA9_static();

class EelLexer_DFA9 extends DFA {

    public function __construct($recognizer) {
        // global $EelLexer_DFA9;
        $DFA = EelLexer_DFA9_static();
        $this->recognizer = $recognizer;
        $this->decisionNumber = 9;
        $this->eot = $DFA['eot'];
        $this->eof = $DFA['eof'];
        $this->min = $DFA['min'];
        $this->max = $DFA['max'];
        $this->accept = $DFA['accept'];
        $this->special = $DFA['special'];
        $this->transition = $DFA['transition'];
    }
    public function getDescription() {
        return "58:1: FLOAT : ( ( '0' .. '9' )+ '.' ( '0' .. '9' )* ( EXPONENT )? | '.' ( '0' .. '9' )+ ( EXPONENT )? | ( '0' .. '9' )+ EXPONENT );";
    }
}
function EelLexer_DFA21_static(){
    $eot = array(3, 65535, 1, 14, 3, 65535, 1, 16, 1, 17, 9, 65535);
    $eof = array(18, 65535);
    $min = array(1, 9, 2, 65535, 1, 61, 3, 65535, 1, 46, 1, 48, 9, 65535);
    $max = array(1, 124, 2, 65535, 1, 61, 3, 65535, 1, 101, 1, 57, 9, 65535);
    $accept = array(1, 65535, 1, 1, 1, 2, 1, 65535, 1, 4, 1, 5, 1, 6, 2,
    65535, 1, 9, 1, 10, 1, 12, 1, 13, 1, 14, 1, 3, 1, 8, 1, 7, 1, 11);
    $special = array(18, 65535);
    $transitionS = array(array(2, 9, 2, 65535, 1, 9, 18, 65535, 1, 9, 1,
    3, 1, 10, 2, 65535, 1, 11, 1, 12, 1, 10, 1, 1, 1, 2, 2, 11, 1, 5, 1,
    11, 1, 8, 1, 11, 10, 7, 1, 4, 1, 65535, 3, 13, 2, 65535, 26, 6, 4, 65535,
    1, 6, 1, 65535, 26, 6, 1, 65535, 1, 12), array(), array(), array(1,
    13), array(), array(), array(), array(1, 15, 1, 65535, 10, 7, 11, 65535,
    1, 15, 31, 65535, 1, 15), array(10, 15), array(), array(), array(),
    array(), array(), array(), array(), array(), array());

    $arr = array();
    $arr['eot'] = DFA::unpackRLE($eot);
    $arr['eof'] = DFA::unpackRLE($eof);
    $arr['min'] = DFA::unpackRLE($min, true);
    $arr['max'] = DFA::unpackRLE($max, true);
    $arr['accept'] = DFA::unpackRLE($accept);
    $arr['special'] = DFA::unpackRLE($special);


    $numStates = sizeof($transitionS);
    $arr['transition'] = array();
    for ($i=0; $i<$numStates; $i++) {
        $arr['transition'][$i] = DFA::unpackRLE($transitionS[$i]);
    }
    return $arr;
}
$EelLexer_DFA21 = EelLexer_DFA21_static();

class EelLexer_DFA21 extends DFA {

    public function __construct($recognizer) {
        // global $EelLexer_DFA21;
        $DFA = EelLexer_DFA21_static();
        $this->recognizer = $recognizer;
        $this->decisionNumber = 21;
        $this->eot = $DFA['eot'];
        $this->eof = $DFA['eof'];
        $this->min = $DFA['min'];
        $this->max = $DFA['max'];
        $this->accept = $DFA['accept'];
        $this->special = $DFA['special'];
        $this->transition = $DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens : ( T__24 | T__25 | T__26 | T__27 | T__28 | ID | INT | FLOAT | WS | StringLiteral | PATH_SEP | NUMBER_OP | BOOLEAN_OP | COMP_OP );";
    }
}


class EelLexer extends AntlrLexer {
    static $EXPONENT=12;
    static $COMP_OP=7;
    static $T__28=28;
    static $T__27=27;
    static $HexEscapeSequence=18;
    static $T__26=26;
    static $T__25=25;
    static $T__24=24;
    static $UnicodeEscapeSequence=19;
    static $HEX_DIGIT=23;
    static $INT=8;
    static $FLOAT=9;
    static $NUMBER_OP=5;
    static $DoubleStringCharacter=14;
    static $ID=4;
    static $EOF=-1;
    static $BOOLEAN_OP=6;
    static $SingleStringCharacter=15;
    static $StringLiteral=10;
    static $WS=13;
    static $SingleEscapeCharacter=20;
    static $NonEscapeCharacter=21;
    static $PATH_SEP=11;
    static $EscapeCharacter=22;
    static $CharacterEscapeSequence=17;
    static $EscapeSequence=16;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa9 = new EelLexer_DFA9($this);
            $this->dfa21 = new EelLexer_DFA21($this);
    }
    function getGrammarFileName() { return "Resources/Private/Grammar/Eel.g"; }

    // $ANTLR start "T__24"
    function mT__24(){
        try {
            $_type = EelLexer::$T__24;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:7:7: ( '(' )
            // Resources/Private/Grammar/Eel.g:7:9: '('
            {
            $this->matchChar(40);

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__24"

    // $ANTLR start "T__25"
    function mT__25(){
        try {
            $_type = EelLexer::$T__25;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:8:7: ( ')' )
            // Resources/Private/Grammar/Eel.g:8:9: ')'
            {
            $this->matchChar(41);

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__25"

    // $ANTLR start "T__26"
    function mT__26(){
        try {
            $_type = EelLexer::$T__26;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:9:7: ( '!' )
            // Resources/Private/Grammar/Eel.g:9:9: '!'
            {
            $this->matchChar(33);

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__26"

    // $ANTLR start "T__27"
    function mT__27(){
        try {
            $_type = EelLexer::$T__27;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:10:7: ( ':' )
            // Resources/Private/Grammar/Eel.g:10:9: ':'
            {
            $this->matchChar(58);

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__27"

    // $ANTLR start "T__28"
    function mT__28(){
        try {
            $_type = EelLexer::$T__28;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:11:7: ( ',' )
            // Resources/Private/Grammar/Eel.g:11:9: ','
            {
            $this->matchChar(44);

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__28"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = EelLexer::$ID;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:52:5: ( ( 'a' .. 'z' | 'A' .. 'Z' | '_' ) ( 'a' .. 'z' | 'A' .. 'Z' | '0' .. '9' | '_' )* )
            // Resources/Private/Grammar/Eel.g:52:7: ( 'a' .. 'z' | 'A' .. 'Z' | '_' ) ( 'a' .. 'z' | 'A' .. 'Z' | '0' .. '9' | '_' )*
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // Resources/Private/Grammar/Eel.g:52:31: ( 'a' .. 'z' | 'A' .. 'Z' | '0' .. '9' | '_' )*
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // Resources/Private/Grammar/Eel.g:
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
            	        $this->input->consume();

            	    }
            	    else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    break 2;//loop1;
                }
            } while (true);


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ID"

    // $ANTLR start "INT"
    function mINT(){
        try {
            $_type = EelLexer::$INT;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:55:5: ( ( '0' .. '9' )+ )
            // Resources/Private/Grammar/Eel.g:55:7: ( '0' .. '9' )+
            {
            // Resources/Private/Grammar/Eel.g:55:7: ( '0' .. '9' )+
            $cnt2=0;
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( (($LA2_0>=$this->getToken('48') && $LA2_0<=$this->getToken('57'))) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // Resources/Private/Grammar/Eel.g:55:7: '0' .. '9'
            	    {
            	    $this->matchRange(48,57);

            	    }
            	    break;

            	default :
            	    if ( $cnt2 >= 1 ) break 2;//loop2;
                        $eee =
                            new EarlyExitException(2, $this->input);
                        throw $eee;
                }
                $cnt2++;
            } while (true);


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "INT"

    // $ANTLR start "FLOAT"
    function mFLOAT(){
        try {
            $_type = EelLexer::$FLOAT;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:59:5: ( ( '0' .. '9' )+ '.' ( '0' .. '9' )* ( EXPONENT )? | '.' ( '0' .. '9' )+ ( EXPONENT )? | ( '0' .. '9' )+ EXPONENT )
            $alt9=3;
            $alt9 = $this->dfa9->predict($this->input);
            switch ($alt9) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:59:9: ( '0' .. '9' )+ '.' ( '0' .. '9' )* ( EXPONENT )?
                    {
                    // Resources/Private/Grammar/Eel.g:59:9: ( '0' .. '9' )+
                    $cnt3=0;
                    //loop3:
                    do {
                        $alt3=2;
                        $LA3_0 = $this->input->LA(1);

                        if ( (($LA3_0>=$this->getToken('48') && $LA3_0<=$this->getToken('57'))) ) {
                            $alt3=1;
                        }


                        switch ($alt3) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g:59:10: '0' .. '9'
                    	    {
                    	    $this->matchRange(48,57);

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt3 >= 1 ) break 2;//loop3;
                                $eee =
                                    new EarlyExitException(3, $this->input);
                                throw $eee;
                        }
                        $cnt3++;
                    } while (true);

                    $this->matchChar(46);
                    // Resources/Private/Grammar/Eel.g:59:25: ( '0' .. '9' )*
                    //loop4:
                    do {
                        $alt4=2;
                        $LA4_0 = $this->input->LA(1);

                        if ( (($LA4_0>=$this->getToken('48') && $LA4_0<=$this->getToken('57'))) ) {
                            $alt4=1;
                        }


                        switch ($alt4) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g:59:26: '0' .. '9'
                    	    {
                    	    $this->matchRange(48,57);

                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop4;
                        }
                    } while (true);

                    // Resources/Private/Grammar/Eel.g:59:37: ( EXPONENT )?
                    $alt5=2;
                    $LA5_0 = $this->input->LA(1);

                    if ( ($LA5_0==$this->getToken('69')||$LA5_0==$this->getToken('101')) ) {
                        $alt5=1;
                    }
                    switch ($alt5) {
                        case 1 :
                            // Resources/Private/Grammar/Eel.g:59:37: EXPONENT
                            {
                            $this->mEXPONENT();

                            }
                            break;

                    }


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:60:9: '.' ( '0' .. '9' )+ ( EXPONENT )?
                    {
                    $this->matchChar(46);
                    // Resources/Private/Grammar/Eel.g:60:13: ( '0' .. '9' )+
                    $cnt6=0;
                    //loop6:
                    do {
                        $alt6=2;
                        $LA6_0 = $this->input->LA(1);

                        if ( (($LA6_0>=$this->getToken('48') && $LA6_0<=$this->getToken('57'))) ) {
                            $alt6=1;
                        }


                        switch ($alt6) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g:60:14: '0' .. '9'
                    	    {
                    	    $this->matchRange(48,57);

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt6 >= 1 ) break 2;//loop6;
                                $eee =
                                    new EarlyExitException(6, $this->input);
                                throw $eee;
                        }
                        $cnt6++;
                    } while (true);

                    // Resources/Private/Grammar/Eel.g:60:25: ( EXPONENT )?
                    $alt7=2;
                    $LA7_0 = $this->input->LA(1);

                    if ( ($LA7_0==$this->getToken('69')||$LA7_0==$this->getToken('101')) ) {
                        $alt7=1;
                    }
                    switch ($alt7) {
                        case 1 :
                            // Resources/Private/Grammar/Eel.g:60:25: EXPONENT
                            {
                            $this->mEXPONENT();

                            }
                            break;

                    }


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g:61:9: ( '0' .. '9' )+ EXPONENT
                    {
                    // Resources/Private/Grammar/Eel.g:61:9: ( '0' .. '9' )+
                    $cnt8=0;
                    //loop8:
                    do {
                        $alt8=2;
                        $LA8_0 = $this->input->LA(1);

                        if ( (($LA8_0>=$this->getToken('48') && $LA8_0<=$this->getToken('57'))) ) {
                            $alt8=1;
                        }


                        switch ($alt8) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g:61:10: '0' .. '9'
                    	    {
                    	    $this->matchRange(48,57);

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt8 >= 1 ) break 2;//loop8;
                                $eee =
                                    new EarlyExitException(8, $this->input);
                                throw $eee;
                        }
                        $cnt8++;
                    } while (true);

                    $this->mEXPONENT();

                    }
                    break;

            }
            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "FLOAT"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = EelLexer::$WS;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:64:5: ( ( ' ' | '\\t' | '\\r' | '\\n' ) )
            // Resources/Private/Grammar/Eel.g:64:9: ( ' ' | '\\t' | '\\r' | '\\n' )
            {
            if ( ($this->input->LA(1)>=$this->getToken('9') && $this->input->LA(1)<=$this->getToken('10'))||$this->input->LA(1)==$this->getToken('13')||$this->input->LA(1)==$this->getToken('32') ) {
                $this->input->consume();

            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

              $_channel=HIDDEN;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "WS"

    // $ANTLR start "StringLiteral"
    function mStringLiteral(){
        try {
            $_type = EelLexer::$StringLiteral;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:74:2: ( '\"' ( DoubleStringCharacter )* '\"' | '\\'' ( SingleStringCharacter )* '\\'' )
            $alt12=2;
            $LA12_0 = $this->input->LA(1);

            if ( ($LA12_0==$this->getToken('34')) ) {
                $alt12=1;
            }
            else if ( ($LA12_0==$this->getToken('39')) ) {
                $alt12=2;
            }
            else {
                $nvae = new NoViableAltException("", 12, 0, $this->input);

                throw $nvae;
            }
            switch ($alt12) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:74:4: '\"' ( DoubleStringCharacter )* '\"'
                    {
                    $this->matchChar(34);
                    // Resources/Private/Grammar/Eel.g:74:8: ( DoubleStringCharacter )*
                    //loop10:
                    do {
                        $alt10=2;
                        $LA10_0 = $this->input->LA(1);

                        if ( (($LA10_0>=$this->getToken('0') && $LA10_0<=$this->getToken('33'))||($LA10_0>=$this->getToken('35') && $LA10_0<=$this->getToken('65535'))) ) {
                            $alt10=1;
                        }


                        switch ($alt10) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g:74:8: DoubleStringCharacter
                    	    {
                    	    $this->mDoubleStringCharacter();

                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop10;
                        }
                    } while (true);

                    $this->matchChar(34);

                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:75:4: '\\'' ( SingleStringCharacter )* '\\''
                    {
                    $this->matchChar(39);
                    // Resources/Private/Grammar/Eel.g:75:9: ( SingleStringCharacter )*
                    //loop11:
                    do {
                        $alt11=2;
                        $LA11_0 = $this->input->LA(1);

                        if ( (($LA11_0>=$this->getToken('0') && $LA11_0<=$this->getToken('38'))||($LA11_0>=$this->getToken('40') && $LA11_0<=$this->getToken('65535'))) ) {
                            $alt11=1;
                        }


                        switch ($alt11) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g:75:9: SingleStringCharacter
                    	    {
                    	    $this->mSingleStringCharacter();

                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop11;
                        }
                    } while (true);

                    $this->matchChar(39);

                    }
                    break;

            }
            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "StringLiteral"

    // $ANTLR start "DoubleStringCharacter"
    function mDoubleStringCharacter(){
        try {
            // Resources/Private/Grammar/Eel.g:79:2: (~ ( '\"' | '\\\\' ) | '\\\\' EscapeSequence )
            $alt13=2;
            $LA13_0 = $this->input->LA(1);

            if ( (($LA13_0>=$this->getToken('0') && $LA13_0<=$this->getToken('33'))||($LA13_0>=$this->getToken('35') && $LA13_0<=$this->getToken('91'))||($LA13_0>=$this->getToken('93') && $LA13_0<=$this->getToken('65535'))) ) {
                $alt13=1;
            }
            else if ( ($LA13_0==$this->getToken('92')) ) {
                $alt13=2;
            }
            else {
                $nvae = new NoViableAltException("", 13, 0, $this->input);

                throw $nvae;
            }
            switch ($alt13) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:79:4: ~ ( '\"' | '\\\\' )
                    {
                    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('33'))||($this->input->LA(1)>=$this->getToken('35') && $this->input->LA(1)<=$this->getToken('91'))||($this->input->LA(1)>=$this->getToken('93') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                        $this->input->consume();

                    }
                    else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:80:4: '\\\\' EscapeSequence
                    {
                    $this->matchChar(92);
                    $this->mEscapeSequence();

                    }
                    break;

            }
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "DoubleStringCharacter"

    // $ANTLR start "SingleStringCharacter"
    function mSingleStringCharacter(){
        try {
            // Resources/Private/Grammar/Eel.g:84:2: (~ ( '\\'' | '\\\\' ) | '\\\\' EscapeSequence )
            $alt14=2;
            $LA14_0 = $this->input->LA(1);

            if ( (($LA14_0>=$this->getToken('0') && $LA14_0<=$this->getToken('38'))||($LA14_0>=$this->getToken('40') && $LA14_0<=$this->getToken('91'))||($LA14_0>=$this->getToken('93') && $LA14_0<=$this->getToken('65535'))) ) {
                $alt14=1;
            }
            else if ( ($LA14_0==$this->getToken('92')) ) {
                $alt14=2;
            }
            else {
                $nvae = new NoViableAltException("", 14, 0, $this->input);

                throw $nvae;
            }
            switch ($alt14) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:84:4: ~ ( '\\'' | '\\\\' )
                    {
                    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('38'))||($this->input->LA(1)>=$this->getToken('40') && $this->input->LA(1)<=$this->getToken('91'))||($this->input->LA(1)>=$this->getToken('93') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                        $this->input->consume();

                    }
                    else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:85:4: '\\\\' EscapeSequence
                    {
                    $this->matchChar(92);
                    $this->mEscapeSequence();

                    }
                    break;

            }
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "SingleStringCharacter"

    // $ANTLR start "EscapeSequence"
    function mEscapeSequence(){
        try {
            // Resources/Private/Grammar/Eel.g:89:2: ( CharacterEscapeSequence | '0' | HexEscapeSequence | UnicodeEscapeSequence )
            $alt15=4;
            $LA15_0 = $this->input->LA(1);

            if ( (($LA15_0>=$this->getToken('0') && $LA15_0<=$this->getToken('47'))||($LA15_0>=$this->getToken('58') && $LA15_0<=$this->getToken('116'))||($LA15_0>=$this->getToken('118') && $LA15_0<=$this->getToken('119'))||($LA15_0>=$this->getToken('121') && $LA15_0<=$this->getToken('65535'))) ) {
                $alt15=1;
            }
            else if ( ($LA15_0==$this->getToken('48')) ) {
                $alt15=2;
            }
            else if ( ($LA15_0==$this->getToken('120')) ) {
                $alt15=3;
            }
            else if ( ($LA15_0==$this->getToken('117')) ) {
                $alt15=4;
            }
            else {
                $nvae = new NoViableAltException("", 15, 0, $this->input);

                throw $nvae;
            }
            switch ($alt15) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:89:4: CharacterEscapeSequence
                    {
                    $this->mCharacterEscapeSequence();

                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:90:4: '0'
                    {
                    $this->matchChar(48);

                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g:91:4: HexEscapeSequence
                    {
                    $this->mHexEscapeSequence();

                    }
                    break;
                case 4 :
                    // Resources/Private/Grammar/Eel.g:92:4: UnicodeEscapeSequence
                    {
                    $this->mUnicodeEscapeSequence();

                    }
                    break;

            }
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "EscapeSequence"

    // $ANTLR start "CharacterEscapeSequence"
    function mCharacterEscapeSequence(){
        try {
            // Resources/Private/Grammar/Eel.g:96:2: ( SingleEscapeCharacter | NonEscapeCharacter )
            $alt16=2;
            $LA16_0 = $this->input->LA(1);

            if ( ($LA16_0==$this->getToken('34')||$LA16_0==$this->getToken('39')||$LA16_0==$this->getToken('92')||$LA16_0==$this->getToken('98')||$LA16_0==$this->getToken('102')||$LA16_0==$this->getToken('110')||$LA16_0==$this->getToken('114')||$LA16_0==$this->getToken('116')||$LA16_0==$this->getToken('118')) ) {
                $alt16=1;
            }
            else if ( (($LA16_0>=$this->getToken('0') && $LA16_0<=$this->getToken('33'))||($LA16_0>=$this->getToken('35') && $LA16_0<=$this->getToken('38'))||($LA16_0>=$this->getToken('40') && $LA16_0<=$this->getToken('47'))||($LA16_0>=$this->getToken('58') && $LA16_0<=$this->getToken('91'))||($LA16_0>=$this->getToken('93') && $LA16_0<=$this->getToken('97'))||($LA16_0>=$this->getToken('99') && $LA16_0<=$this->getToken('101'))||($LA16_0>=$this->getToken('103') && $LA16_0<=$this->getToken('109'))||($LA16_0>=$this->getToken('111') && $LA16_0<=$this->getToken('113'))||$LA16_0==$this->getToken('115')||$LA16_0==$this->getToken('119')||($LA16_0>=$this->getToken('121') && $LA16_0<=$this->getToken('65535'))) ) {
                $alt16=2;
            }
            else {
                $nvae = new NoViableAltException("", 16, 0, $this->input);

                throw $nvae;
            }
            switch ($alt16) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:96:4: SingleEscapeCharacter
                    {
                    $this->mSingleEscapeCharacter();

                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:97:4: NonEscapeCharacter
                    {
                    $this->mNonEscapeCharacter();

                    }
                    break;

            }
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "CharacterEscapeSequence"

    // $ANTLR start "NonEscapeCharacter"
    function mNonEscapeCharacter(){
        try {
            // Resources/Private/Grammar/Eel.g:101:2: (~ ( EscapeCharacter ) )
            // Resources/Private/Grammar/Eel.g:101:4: ~ ( EscapeCharacter )
            {
            if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('33'))||($this->input->LA(1)>=$this->getToken('35') && $this->input->LA(1)<=$this->getToken('38'))||($this->input->LA(1)>=$this->getToken('40') && $this->input->LA(1)<=$this->getToken('47'))||($this->input->LA(1)>=$this->getToken('58') && $this->input->LA(1)<=$this->getToken('91'))||($this->input->LA(1)>=$this->getToken('93') && $this->input->LA(1)<=$this->getToken('97'))||($this->input->LA(1)>=$this->getToken('99') && $this->input->LA(1)<=$this->getToken('101'))||($this->input->LA(1)>=$this->getToken('103') && $this->input->LA(1)<=$this->getToken('109'))||($this->input->LA(1)>=$this->getToken('111') && $this->input->LA(1)<=$this->getToken('113'))||$this->input->LA(1)==$this->getToken('115')||$this->input->LA(1)==$this->getToken('119')||($this->input->LA(1)>=$this->getToken('121') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                $this->input->consume();

            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "NonEscapeCharacter"

    // $ANTLR start "SingleEscapeCharacter"
    function mSingleEscapeCharacter(){
        try {
            // Resources/Private/Grammar/Eel.g:105:2: ( '\\'' | '\"' | '\\\\' | 'b' | 'f' | 'n' | 'r' | 't' | 'v' )
            // Resources/Private/Grammar/Eel.g:
            {
            if ( $this->input->LA(1)==$this->getToken('34')||$this->input->LA(1)==$this->getToken('39')||$this->input->LA(1)==$this->getToken('92')||$this->input->LA(1)==$this->getToken('98')||$this->input->LA(1)==$this->getToken('102')||$this->input->LA(1)==$this->getToken('110')||$this->input->LA(1)==$this->getToken('114')||$this->input->LA(1)==$this->getToken('116')||$this->input->LA(1)==$this->getToken('118') ) {
                $this->input->consume();

            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "SingleEscapeCharacter"

    // $ANTLR start "EscapeCharacter"
    function mEscapeCharacter(){
        try {
            // Resources/Private/Grammar/Eel.g:109:2: ( SingleEscapeCharacter | '0' .. '9' | 'x' | 'u' )
            // Resources/Private/Grammar/Eel.g:
            {
            if ( $this->input->LA(1)==$this->getToken('34')||$this->input->LA(1)==$this->getToken('39')||($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||$this->input->LA(1)==$this->getToken('92')||$this->input->LA(1)==$this->getToken('98')||$this->input->LA(1)==$this->getToken('102')||$this->input->LA(1)==$this->getToken('110')||$this->input->LA(1)==$this->getToken('114')||($this->input->LA(1)>=$this->getToken('116') && $this->input->LA(1)<=$this->getToken('118'))||$this->input->LA(1)==$this->getToken('120') ) {
                $this->input->consume();

            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "EscapeCharacter"

    // $ANTLR start "HexEscapeSequence"
    function mHexEscapeSequence(){
        try {
            // Resources/Private/Grammar/Eel.g:116:2: ( 'x' HEX_DIGIT HEX_DIGIT )
            // Resources/Private/Grammar/Eel.g:116:4: 'x' HEX_DIGIT HEX_DIGIT
            {
            $this->matchChar(120);
            $this->mHEX_DIGIT();
            $this->mHEX_DIGIT();

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "HexEscapeSequence"

    // $ANTLR start "UnicodeEscapeSequence"
    function mUnicodeEscapeSequence(){
        try {
            // Resources/Private/Grammar/Eel.g:120:2: ( 'u' HEX_DIGIT HEX_DIGIT HEX_DIGIT HEX_DIGIT )
            // Resources/Private/Grammar/Eel.g:120:4: 'u' HEX_DIGIT HEX_DIGIT HEX_DIGIT HEX_DIGIT
            {
            $this->matchChar(117);
            $this->mHEX_DIGIT();
            $this->mHEX_DIGIT();
            $this->mHEX_DIGIT();
            $this->mHEX_DIGIT();

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "UnicodeEscapeSequence"

    // $ANTLR start "EXPONENT"
    function mEXPONENT(){
        try {
            // Resources/Private/Grammar/Eel.g:124:10: ( ( 'e' | 'E' ) ( '+' | '-' )? ( '0' .. '9' )+ )
            // Resources/Private/Grammar/Eel.g:124:12: ( 'e' | 'E' ) ( '+' | '-' )? ( '0' .. '9' )+
            {
            if ( $this->input->LA(1)==$this->getToken('69')||$this->input->LA(1)==$this->getToken('101') ) {
                $this->input->consume();

            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // Resources/Private/Grammar/Eel.g:124:22: ( '+' | '-' )?
            $alt17=2;
            $LA17_0 = $this->input->LA(1);

            if ( ($LA17_0==$this->getToken('43')||$LA17_0==$this->getToken('45')) ) {
                $alt17=1;
            }
            switch ($alt17) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:
                    {
                    if ( $this->input->LA(1)==$this->getToken('43')||$this->input->LA(1)==$this->getToken('45') ) {
                        $this->input->consume();

                    }
                    else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;

            }

            // Resources/Private/Grammar/Eel.g:124:33: ( '0' .. '9' )+
            $cnt18=0;
            //loop18:
            do {
                $alt18=2;
                $LA18_0 = $this->input->LA(1);

                if ( (($LA18_0>=$this->getToken('48') && $LA18_0<=$this->getToken('57'))) ) {
                    $alt18=1;
                }


                switch ($alt18) {
            	case 1 :
            	    // Resources/Private/Grammar/Eel.g:124:34: '0' .. '9'
            	    {
            	    $this->matchRange(48,57);

            	    }
            	    break;

            	default :
            	    if ( $cnt18 >= 1 ) break 2;//loop18;
                        $eee =
                            new EarlyExitException(18, $this->input);
                        throw $eee;
                }
                $cnt18++;
            } while (true);


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "EXPONENT"

    // $ANTLR start "HEX_DIGIT"
    function mHEX_DIGIT(){
        try {
            // Resources/Private/Grammar/Eel.g:127:11: ( ( '0' .. '9' | 'a' .. 'f' | 'A' .. 'F' ) )
            // Resources/Private/Grammar/Eel.g:127:13: ( '0' .. '9' | 'a' .. 'f' | 'A' .. 'F' )
            {
            if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('70'))||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('102')) ) {
                $this->input->consume();

            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "HEX_DIGIT"

    // $ANTLR start "PATH_SEP"
    function mPATH_SEP(){
        try {
            $_type = EelLexer::$PATH_SEP;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:129:9: ( '.' )
            // Resources/Private/Grammar/Eel.g:129:11: '.'
            {
            $this->matchChar(46);

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "PATH_SEP"

    // $ANTLR start "NUMBER_OP"
    function mNUMBER_OP(){
        try {
            $_type = EelLexer::$NUMBER_OP;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:132:2: ( '+' | '-' | '/' | '*' | '%' )
            // Resources/Private/Grammar/Eel.g:
            {
            if ( $this->input->LA(1)==$this->getToken('37')||($this->input->LA(1)>=$this->getToken('42') && $this->input->LA(1)<=$this->getToken('43'))||$this->input->LA(1)==$this->getToken('45')||$this->input->LA(1)==$this->getToken('47') ) {
                $this->input->consume();

            }
            else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "NUMBER_OP"

    // $ANTLR start "BOOLEAN_OP"
    function mBOOLEAN_OP(){
        try {
            $_type = EelLexer::$BOOLEAN_OP;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:135:2: ( '&&' | '||' )
            $alt19=2;
            $LA19_0 = $this->input->LA(1);

            if ( ($LA19_0==$this->getToken('38')) ) {
                $alt19=1;
            }
            else if ( ($LA19_0==$this->getToken('124')) ) {
                $alt19=2;
            }
            else {
                $nvae = new NoViableAltException("", 19, 0, $this->input);

                throw $nvae;
            }
            switch ($alt19) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:135:4: '&&'
                    {
                    $this->matchString("&&");


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:135:11: '||'
                    {
                    $this->matchString("||");


                    }
                    break;

            }
            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "BOOLEAN_OP"

    // $ANTLR start "COMP_OP"
    function mCOMP_OP(){
        try {
            $_type = EelLexer::$COMP_OP;
            $_channel = EelLexer::$DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g:137:9: ( '==' | '!=' | '<=' | '>=' | '<' | '>' )
            $alt20=6;
            $LA20 = $this->input->LA(1);
            if($this->getToken('61')== $LA20)
                {
                $alt20=1;
                }
            else if($this->getToken('33')== $LA20)
                {
                $alt20=2;
                }
            else if($this->getToken('60')== $LA20)
                {
                $LA20_3 = $this->input->LA(2);

                if ( ($LA20_3==$this->getToken('61')) ) {
                    $alt20=3;
                }
                else {
                    $alt20=5;}
                }
            else if($this->getToken('62')== $LA20)
                {
                $LA20_4 = $this->input->LA(2);

                if ( ($LA20_4==$this->getToken('61')) ) {
                    $alt20=4;
                }
                else {
                    $alt20=6;}
                }
            else{
                $nvae =
                    new NoViableAltException("", 20, 0, $this->input);

                throw $nvae;
            }

            switch ($alt20) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:137:11: '=='
                    {
                    $this->matchString("==");


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:137:18: '!='
                    {
                    $this->matchString("!=");


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g:137:25: '<='
                    {
                    $this->matchString("<=");


                    }
                    break;
                case 4 :
                    // Resources/Private/Grammar/Eel.g:137:32: '>='
                    {
                    $this->matchString(">=");


                    }
                    break;
                case 5 :
                    // Resources/Private/Grammar/Eel.g:137:39: '<'
                    {
                    $this->matchChar(60);

                    }
                    break;
                case 6 :
                    // Resources/Private/Grammar/Eel.g:137:45: '>'
                    {
                    $this->matchChar(62);

                    }
                    break;

            }
            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "COMP_OP"

    function mTokens(){
        // Resources/Private/Grammar/Eel.g:1:8: ( T__24 | T__25 | T__26 | T__27 | T__28 | ID | INT | FLOAT | WS | StringLiteral | PATH_SEP | NUMBER_OP | BOOLEAN_OP | COMP_OP )
        $alt21=14;
        $alt21 = $this->dfa21->predict($this->input);
        switch ($alt21) {
            case 1 :
                // Resources/Private/Grammar/Eel.g:1:10: T__24
                {
                $this->mT__24();

                }
                break;
            case 2 :
                // Resources/Private/Grammar/Eel.g:1:16: T__25
                {
                $this->mT__25();

                }
                break;
            case 3 :
                // Resources/Private/Grammar/Eel.g:1:22: T__26
                {
                $this->mT__26();

                }
                break;
            case 4 :
                // Resources/Private/Grammar/Eel.g:1:28: T__27
                {
                $this->mT__27();

                }
                break;
            case 5 :
                // Resources/Private/Grammar/Eel.g:1:34: T__28
                {
                $this->mT__28();

                }
                break;
            case 6 :
                // Resources/Private/Grammar/Eel.g:1:40: ID
                {
                $this->mID();

                }
                break;
            case 7 :
                // Resources/Private/Grammar/Eel.g:1:43: INT
                {
                $this->mINT();

                }
                break;
            case 8 :
                // Resources/Private/Grammar/Eel.g:1:47: FLOAT
                {
                $this->mFLOAT();

                }
                break;
            case 9 :
                // Resources/Private/Grammar/Eel.g:1:53: WS
                {
                $this->mWS();

                }
                break;
            case 10 :
                // Resources/Private/Grammar/Eel.g:1:56: StringLiteral
                {
                $this->mStringLiteral();

                }
                break;
            case 11 :
                // Resources/Private/Grammar/Eel.g:1:70: PATH_SEP
                {
                $this->mPATH_SEP();

                }
                break;
            case 12 :
                // Resources/Private/Grammar/Eel.g:1:79: NUMBER_OP
                {
                $this->mNUMBER_OP();

                }
                break;
            case 13 :
                // Resources/Private/Grammar/Eel.g:1:89: BOOLEAN_OP
                {
                $this->mBOOLEAN_OP();

                }
                break;
            case 14 :
                // Resources/Private/Grammar/Eel.g:1:100: COMP_OP
                {
                $this->mCOMP_OP();

                }
                break;

        }

    }



}
?>