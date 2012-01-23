<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 Resources/Private/Grammar/Eel.g 2012-01-23 12:32:16


use Antlr\Runtime\IntStream;
use Antlr\Runtime\DFA;
use Antlr\Runtime\Parser;
use Antlr\Runtime\Lexer;
use Antlr\Runtime\CommonToken;
use Antlr\Runtime\Set;
use Antlr\Runtime\Token;
use Antlr\Runtime\CharStream;
use Antlr\Runtime\RecognizerSharedState;
use Antlr\Runtime\ParserRuleReturnScope;

use Antlr\Runtime\EarlyExitException;
use Antlr\Runtime\FailedPredicateException;
use Antlr\Runtime\MismatchedRangeException;
use Antlr\Runtime\MismatchedSetException;
use Antlr\Runtime\MismatchedTokenException;
use Antlr\Runtime\NoViableAltException;
use Antlr\Runtime\RecognitionException;
use Antlr\Runtime\UnwantedtokenException;


function EelLexer_DFA9_static(){
    $eot = "\x5\xff";
    $eof = "\x5\xff";
    $min = "\x2\x2e\x3\xff";
    $max = "\x1\x39\x1\x65\x3\xff";
    $accept = "\x2\xff\x1\x2\x1\x1\x1\x3";
    $special = "\x5\xff";
    $transitionS = array(
        "\x1\x2\x1\xff\xa\x1",
        "\x1\x3\x1\xff\xa\x1\xb\xff\x1\x4\x1f\xff\x1\x4",
        "",
        "",
        ""
    );

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

class EelLexer_DFA9 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = EelLexer_DFA9_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 9;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "58:1: FLOAT : ( ( '0' .. '9' )+ '.' ( '0' .. '9' )* ( EXPONENT )? | '.' ( '0' .. '9' )+ ( EXPONENT )? | ( '0' .. '9' )+ EXPONENT );";
    }
}
function EelLexer_DFA21_static(){
    $eot = "\x3\xff\x1\xe\x3\xff\x1\x10\x1\x11\x9\xff";
    $eof = "\x12\xff";
    $min = "\x1\x9\x2\xff\x1\x3d\x3\xff\x1\x2e\x1\x30\x9\xff";
    $max = "\x1\x7c\x2\xff\x1\x3d\x3\xff\x1\x65\x1\x39\x9\xff";
    $accept = "\x1\xff\x1\x1\x1\x2\x1\xff\x1\x4\x1\x5\x1\x6\x2\xff\x1\x9" .
    "\x1\xa\x1\xc\x1\xd\x1\xe\x1\x3\x1\x8\x1\x7\x1\xb";
    $special = "\x12\xff";
    $transitionS = array(
        "\x2\x9\x2\xff\x1\x9\x12\xff\x1\x9\x1\x3\x1\xa\x2\xff\x1\xb\x1\xc" .
        "\x1\xa\x1\x1\x1\x2\x2\xb\x1\x5\x1\xb\x1\x8\x1\xb\xa\x7\x1\x4\x1" .
        "\xff\x3\xd\x2\xff\x1a\x6\x4\xff\x1\x6\x1\xff\x1a\x6\x1\xff\x1\xc",
        "",
        "",
        "\x1\xd",
        "",
        "",
        "",
        "\x1\xf\x1\xff\xa\x7\xb\xff\x1\xf\x1f\xff\x1\xf",
        "\xa\xf",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        ""
    );

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

class EelLexer_DFA21 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = EelLexer_DFA21_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 21;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens : ( T__24 | T__25 | T__26 | T__27 | T__28 | ID | INT | FLOAT | WS | StringLiteral | PATH_SEP | NUMBER_OP | BOOLEAN_OP | COMP_OP );";
    }
}
 

class EelLexer extends Lexer {
    const T_EXPONENT=12;
    const T_COMP_OP=7;
    const T_T__28=28;
    const T_T__27=27;
    const T_HexEscapeSequence=18;
    const T_T__26=26;
    const T_T__25=25;
    const T_T__24=24;
    const T_UnicodeEscapeSequence=19;
    const T_HEX_DIGIT=23;
    const T_INT=8;
    const T_FLOAT=9;
    const T_NUMBER_OP=5;
    const T_DoubleStringCharacter=14;
    const T_ID=4;
    const T_EOF=-1;
    const T_BOOLEAN_OP=6;
    const T_SingleStringCharacter=15;
    const T_StringLiteral=10;
    const T_WS=13;
    const T_SingleEscapeCharacter=20;
    const T_NonEscapeCharacter=21;
    const T_PATH_SEP=11;
    const T_EscapeCharacter=22;
    const T_CharacterEscapeSequence=17;
    const T_EscapeSequence=16;

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
            $_type = EelLexer::T_T__24;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_T__25;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_T__26;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_T__27;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_T__28;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_ID;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // Resources/Private/Grammar/Eel.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // Resources/Private/Grammar/Eel.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
            	        $this->input->consume();

            	    } else {
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
            $_type = EelLexer::T_INT;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            // Resources/Private/Grammar/Eel.g
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
            	    // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_FLOAT;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            $alt9=3;
            $alt9 = $this->dfa9->predict($this->input);
            switch ($alt9) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    // Resources/Private/Grammar/Eel.g
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
                    	    // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    //loop4:
                    do {
                        $alt4=2;
                        $LA4_0 = $this->input->LA(1);

                        if ( (($LA4_0>=$this->getToken('48') && $LA4_0<=$this->getToken('57'))) ) {
                            $alt4=1;
                        }


                        switch ($alt4) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g
                    	    {
                    	    $this->matchRange(48,57); 

                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop4;
                        }
                    } while (true);

                    // Resources/Private/Grammar/Eel.g
                    $alt5=2;
                    $LA5_0 = $this->input->LA(1);

                    if ( ($LA5_0==$this->getToken('69')||$LA5_0==$this->getToken('101')) ) {
                        $alt5=1;
                    }
                    switch ($alt5) {
                        case 1 :
                            // Resources/Private/Grammar/Eel.g
                            {
                            $this->mEXPONENT(); 

                            }
                            break;

                    }


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchChar(46); 
                    // Resources/Private/Grammar/Eel.g
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
                    	    // Resources/Private/Grammar/Eel.g
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

                    // Resources/Private/Grammar/Eel.g
                    $alt7=2;
                    $LA7_0 = $this->input->LA(1);

                    if ( ($LA7_0==$this->getToken('69')||$LA7_0==$this->getToken('101')) ) {
                        $alt7=1;
                    }
                    switch ($alt7) {
                        case 1 :
                            // Resources/Private/Grammar/Eel.g
                            {
                            $this->mEXPONENT(); 

                            }
                            break;

                    }


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    // Resources/Private/Grammar/Eel.g
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
                    	    // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_WS;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('9') && $this->input->LA(1)<=$this->getToken('10'))||$this->input->LA(1)==$this->getToken('13')||$this->input->LA(1)==$this->getToken('32') ) {
                $this->input->consume();

            } else {
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
            $_type = EelLexer::T_StringLiteral;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchChar(34); 
                    // Resources/Private/Grammar/Eel.g
                    //loop10:
                    do {
                        $alt10=2;
                        $LA10_0 = $this->input->LA(1);

                        if ( (($LA10_0>=$this->getToken('0') && $LA10_0<=$this->getToken('33'))||($LA10_0>=$this->getToken('35') && $LA10_0<=$this->getToken('65535'))) ) {
                            $alt10=1;
                        }


                        switch ($alt10) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchChar(39); 
                    // Resources/Private/Grammar/Eel.g
                    //loop11:
                    do {
                        $alt11=2;
                        $LA11_0 = $this->input->LA(1);

                        if ( (($LA11_0>=$this->getToken('0') && $LA11_0<=$this->getToken('38'))||($LA11_0>=$this->getToken('40') && $LA11_0<=$this->getToken('65535'))) ) {
                            $alt11=1;
                        }


                        switch ($alt11) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g
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
            // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    {
                    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('33'))||($this->input->LA(1)>=$this->getToken('35') && $this->input->LA(1)<=$this->getToken('91'))||($this->input->LA(1)>=$this->getToken('93') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                        $this->input->consume();

                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
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
            // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    {
                    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('38'))||($this->input->LA(1)>=$this->getToken('40') && $this->input->LA(1)<=$this->getToken('91'))||($this->input->LA(1)>=$this->getToken('93') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                        $this->input->consume();

                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
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
            // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->mCharacterEscapeSequence(); 

                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchChar(48); 

                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->mHexEscapeSequence(); 

                    }
                    break;
                case 4 :
                    // Resources/Private/Grammar/Eel.g
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
            // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->mSingleEscapeCharacter(); 

                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
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
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('33'))||($this->input->LA(1)>=$this->getToken('35') && $this->input->LA(1)<=$this->getToken('38'))||($this->input->LA(1)>=$this->getToken('40') && $this->input->LA(1)<=$this->getToken('47'))||($this->input->LA(1)>=$this->getToken('58') && $this->input->LA(1)<=$this->getToken('91'))||($this->input->LA(1)>=$this->getToken('93') && $this->input->LA(1)<=$this->getToken('97'))||($this->input->LA(1)>=$this->getToken('99') && $this->input->LA(1)<=$this->getToken('101'))||($this->input->LA(1)>=$this->getToken('103') && $this->input->LA(1)<=$this->getToken('109'))||($this->input->LA(1)>=$this->getToken('111') && $this->input->LA(1)<=$this->getToken('113'))||$this->input->LA(1)==$this->getToken('115')||$this->input->LA(1)==$this->getToken('119')||($this->input->LA(1)>=$this->getToken('121') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                $this->input->consume();

            } else {
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
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            if ( $this->input->LA(1)==$this->getToken('34')||$this->input->LA(1)==$this->getToken('39')||$this->input->LA(1)==$this->getToken('92')||$this->input->LA(1)==$this->getToken('98')||$this->input->LA(1)==$this->getToken('102')||$this->input->LA(1)==$this->getToken('110')||$this->input->LA(1)==$this->getToken('114')||$this->input->LA(1)==$this->getToken('116')||$this->input->LA(1)==$this->getToken('118') ) {
                $this->input->consume();

            } else {
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
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            if ( $this->input->LA(1)==$this->getToken('34')||$this->input->LA(1)==$this->getToken('39')||($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||$this->input->LA(1)==$this->getToken('92')||$this->input->LA(1)==$this->getToken('98')||$this->input->LA(1)==$this->getToken('102')||$this->input->LA(1)==$this->getToken('110')||$this->input->LA(1)==$this->getToken('114')||($this->input->LA(1)>=$this->getToken('116') && $this->input->LA(1)<=$this->getToken('118'))||$this->input->LA(1)==$this->getToken('120') ) {
                $this->input->consume();

            } else {
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
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
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
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
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
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            if ( $this->input->LA(1)==$this->getToken('69')||$this->input->LA(1)==$this->getToken('101') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // Resources/Private/Grammar/Eel.g
            $alt17=2;
            $LA17_0 = $this->input->LA(1);

            if ( ($LA17_0==$this->getToken('43')||$LA17_0==$this->getToken('45')) ) {
                $alt17=1;
            }
            switch ($alt17) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    if ( $this->input->LA(1)==$this->getToken('43')||$this->input->LA(1)==$this->getToken('45') ) {
                        $this->input->consume();

                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;

            }

            // Resources/Private/Grammar/Eel.g
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
            	    // Resources/Private/Grammar/Eel.g
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
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('70'))||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('102')) ) {
                $this->input->consume();

            } else {
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
            $_type = EelLexer::T_PATH_SEP;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_NUMBER_OP;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            if ( $this->input->LA(1)==$this->getToken('37')||($this->input->LA(1)>=$this->getToken('42') && $this->input->LA(1)<=$this->getToken('43'))||$this->input->LA(1)==$this->getToken('45')||$this->input->LA(1)==$this->getToken('47') ) {
                $this->input->consume();

            } else {
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
            $_type = EelLexer::T_BOOLEAN_OP;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchString("&&"); 


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
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
            $_type = EelLexer::T_COMP_OP;
            $_channel = EelLexer::DEFAULT_TOKEN_CHANNEL;
            // Resources/Private/Grammar/Eel.g
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
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchString("=="); 


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchString("!="); 


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchString("<="); 


                    }
                    break;
                case 4 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchString(">="); 


                    }
                    break;
                case 5 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->matchChar(60); 

                    }
                    break;
                case 6 :
                    // Resources/Private/Grammar/Eel.g
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
        // Resources/Private/Grammar/Eel.g
        $alt21=14;
        $alt21 = $this->dfa21->predict($this->input);
        switch ($alt21) {
            case 1 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mT__24(); 

                }
                break;
            case 2 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mT__25(); 

                }
                break;
            case 3 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mT__26(); 

                }
                break;
            case 4 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mT__27(); 

                }
                break;
            case 5 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mT__28(); 

                }
                break;
            case 6 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mID(); 

                }
                break;
            case 7 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mINT(); 

                }
                break;
            case 8 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mFLOAT(); 

                }
                break;
            case 9 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mWS(); 

                }
                break;
            case 10 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mStringLiteral(); 

                }
                break;
            case 11 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mPATH_SEP(); 

                }
                break;
            case 12 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mNUMBER_OP(); 

                }
                break;
            case 13 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mBOOLEAN_OP(); 

                }
                break;
            case 14 :
                // Resources/Private/Grammar/Eel.g
                {
                $this->mCOMP_OP(); 

                }
                break;

        }

    }



}
?>