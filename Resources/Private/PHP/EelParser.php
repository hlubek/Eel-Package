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

class EelParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "NUMBER_OP", "BOOLEAN_OP", "COMP_OP", "INT", "FLOAT", "StringLiteral", "PATH_SEP", "EXPONENT", "WS", "DoubleStringCharacter", "SingleStringCharacter", "EscapeSequence", "CharacterEscapeSequence", "HexEscapeSequence", "UnicodeEscapeSequence", "SingleEscapeCharacter", "NonEscapeCharacter", "EscapeCharacter", "HEX_DIGIT", "'('", "')'", "'!'", "':'", "','"
    );
    public $EXPONENT=12;
    public $COMP_OP=7;
    public $T__28=28;
    public $T__27=27;
    public $HexEscapeSequence=18;
    public $T__26=26;
    public $T__25=25;
    public $T__24=24;
    public $UnicodeEscapeSequence=19;
    public $HEX_DIGIT=23;
    public $INT=8;
    public $FLOAT=9;
    public $NUMBER_OP=5;
    public $DoubleStringCharacter=14;
    public $ID=4;
    public $EOF=-1;
    public $BOOLEAN_OP=6;
    public $SingleStringCharacter=15;
    public $StringLiteral=10;
    public $WS=13;
    public $SingleEscapeCharacter=20;
    public $NonEscapeCharacter=21;
    public $PATH_SEP=11;
    public $EscapeCharacter=22;
    public $CharacterEscapeSequence=17;
    public $EscapeSequence=16;

    // delegates
    // delegators


    static public $FOLLOW_expression_in_fullExpression24 = array();
    static public $FOLLOW_EOF_in_fullExpression26 = array(1 => 1);
    static public $FOLLOW_methodCall_in_expression35 = array(1 => 1);
    static public $FOLLOW_compositeExpression_in_expression39 = array(1 => 1);
    static public $FOLLOW_notExpression_in_expression43 = array(1 => 1);
    static public $FOLLOW_term_in_expression47 = array(1 => 1);
    static public $FOLLOW_24_in_wrappedComposite56 = array(4 => 4, 8 => 8, 9 => 9, 10 => 10, 24 => 24, 26 => 26);
    static public $FOLLOW_expression_in_wrappedComposite58 = array(25 => 25);
    static public $FOLLOW_25_in_wrappedComposite60 = array(1 => 1);
    static public $FOLLOW_wrappedComposite_in_compositeExpression70 = array(5 => 5, 6 => 6, 7 => 7);
    static public $FOLLOW_term_in_compositeExpression74 = array(5 => 5, 6 => 6, 7 => 7);
    static public $FOLLOW_numberOperator_in_compositeExpression78 = array(4 => 4, 8 => 8, 9 => 9, 10 => 10, 24 => 24);
    static public $FOLLOW_booleanOperator_in_compositeExpression82 = array(4 => 4, 8 => 8, 9 => 9, 10 => 10, 24 => 24);
    static public $FOLLOW_comparisonOperator_in_compositeExpression86 = array(4 => 4, 8 => 8, 9 => 9, 10 => 10, 24 => 24);
    static public $FOLLOW_wrappedComposite_in_compositeExpression90 = array(1 => 1);
    static public $FOLLOW_term_in_compositeExpression94 = array(1 => 1);
    static public $FOLLOW_26_in_notExpression104 = array(4 => 4, 8 => 8, 9 => 9, 10 => 10, 24 => 24, 26 => 26);
    static public $FOLLOW_expression_in_notExpression106 = array(1 => 1);
    static public $FOLLOW_methodIdentifier_in_methodCall115 = array(24 => 24);
    static public $FOLLOW_arguments_in_methodCall117 = array(1 => 1);
    static public $FOLLOW_ID_in_methodIdentifier126 = array(1 => 1, 27 => 27);
    static public $FOLLOW_27_in_methodIdentifier129 = array(4 => 4);
    static public $FOLLOW_ID_in_methodIdentifier131 = array(1 => 1);
    static public $FOLLOW_24_in_arguments142 = array(4 => 4, 8 => 8, 9 => 9, 10 => 10, 24 => 24, 25 => 25, 26 => 26);
    static public $FOLLOW_expression_in_arguments145 = array(25 => 25, 28 => 28);
    static public $FOLLOW_28_in_arguments148 = array(4 => 4, 8 => 8, 9 => 9, 10 => 10, 24 => 24, 26 => 26);
    static public $FOLLOW_expression_in_arguments150 = array(25 => 25, 28 => 28);
    static public $FOLLOW_25_in_arguments157 = array(1 => 1);
    static public $FOLLOW_integerLiteral_in_term165 = array(1 => 1);
    static public $FOLLOW_floatLiteral_in_term169 = array(1 => 1);
    static public $FOLLOW_stringLiteral_in_term173 = array(1 => 1);
    static public $FOLLOW_objectPath_in_term177 = array(1 => 1);
    static public $FOLLOW_NUMBER_OP_in_numberOperator184 = array(1 => 1);
    static public $FOLLOW_BOOLEAN_OP_in_booleanOperator193 = array(1 => 1);
    static public $FOLLOW_COMP_OP_in_comparisonOperator202 = array(1 => 1);
    static public $FOLLOW_INT_in_integerLiteral211 = array(1 => 1);
    static public $FOLLOW_FLOAT_in_floatLiteral220 = array(1 => 1);
    static public $FOLLOW_StringLiteral_in_stringLiteral229 = array(1 => 1);
    static public $FOLLOW_ID_in_objectPath236 = array(1 => 1, 11 => 11);
    static public $FOLLOW_PATH_SEP_in_objectPath239 = array(4 => 4);
    static public $FOLLOW_ID_in_objectPath241 = array(1 => 1, 11 => 11);


    protected $dfa1;


        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

            $this->dfa1 = new EelParser_DFA1($this);
        }
        

    public function getTokenNames() { return EelParser::$tokenNames; }
    public function getGrammarFileName() { return "Resources/Private/Grammar/Eel.g"; }



    // $ANTLR start "fullExpression"
    // Resources/Private/Grammar/Eel.g
    public function fullExpression(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->pushFollow(self::$FOLLOW_expression_in_fullExpression24);
            $this->expression();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('EOF'),self::$FOLLOW_EOF_in_fullExpression26); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "fullExpression"


    // $ANTLR start "expression"
    // Resources/Private/Grammar/Eel.g
    public function expression(){
        try {
            // Resources/Private/Grammar/Eel.g
            $alt1=4;
            $alt1 = $this->dfa1->predict($this->input);
            switch ($alt1) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_methodCall_in_expression35);
                    $this->methodCall();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_compositeExpression_in_expression39);
                    $this->compositeExpression();

                    $this->state->_fsp--;


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_notExpression_in_expression43);
                    $this->notExpression();

                    $this->state->_fsp--;


                    }
                    break;
                case 4 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_term_in_expression47);
                    $this->term();

                    $this->state->_fsp--;


                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "expression"


    // $ANTLR start "wrappedComposite"
    // Resources/Private/Grammar/Eel.g
    public function wrappedComposite(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('24'),self::$FOLLOW_24_in_wrappedComposite56); 
            $this->pushFollow(self::$FOLLOW_expression_in_wrappedComposite58);
            $this->expression();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('25'),self::$FOLLOW_25_in_wrappedComposite60); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "wrappedComposite"


    // $ANTLR start "compositeExpression"
    // Resources/Private/Grammar/Eel.g
    public function compositeExpression(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            // Resources/Private/Grammar/Eel.g
            $alt2=2;
            $LA2_0 = $this->input->LA(1);

            if ( ($LA2_0==$this->getToken('24')) ) {
                $alt2=1;
            }
            else if ( ($LA2_0==$this->getToken('ID')||($LA2_0>=$this->getToken('INT') && $LA2_0<=$this->getToken('StringLiteral'))) ) {
                $alt2=2;
            }
            else {
                $nvae = new NoViableAltException("", 2, 0, $this->input);

                throw $nvae;
            }
            switch ($alt2) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_wrappedComposite_in_compositeExpression70);
                    $this->wrappedComposite();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_term_in_compositeExpression74);
                    $this->term();

                    $this->state->_fsp--;


                    }
                    break;

            }

            // Resources/Private/Grammar/Eel.g
            $alt3=3;
            $LA3 = $this->input->LA(1);
            if($this->getToken('NUMBER_OP')== $LA3)
                {
                $alt3=1;
                }
            else if($this->getToken('BOOLEAN_OP')== $LA3)
                {
                $alt3=2;
                }
            else if($this->getToken('COMP_OP')== $LA3)
                {
                $alt3=3;
                }
            else{
                $nvae =
                    new NoViableAltException("", 3, 0, $this->input);

                throw $nvae;
            }

            switch ($alt3) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_numberOperator_in_compositeExpression78);
                    $this->numberOperator();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_booleanOperator_in_compositeExpression82);
                    $this->booleanOperator();

                    $this->state->_fsp--;


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_comparisonOperator_in_compositeExpression86);
                    $this->comparisonOperator();

                    $this->state->_fsp--;


                    }
                    break;

            }

            // Resources/Private/Grammar/Eel.g
            $alt4=2;
            $LA4_0 = $this->input->LA(1);

            if ( ($LA4_0==$this->getToken('24')) ) {
                $alt4=1;
            }
            else if ( ($LA4_0==$this->getToken('ID')||($LA4_0>=$this->getToken('INT') && $LA4_0<=$this->getToken('StringLiteral'))) ) {
                $alt4=2;
            }
            else {
                $nvae = new NoViableAltException("", 4, 0, $this->input);

                throw $nvae;
            }
            switch ($alt4) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_wrappedComposite_in_compositeExpression90);
                    $this->wrappedComposite();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_term_in_compositeExpression94);
                    $this->term();

                    $this->state->_fsp--;


                    }
                    break;

            }


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "compositeExpression"


    // $ANTLR start "notExpression"
    // Resources/Private/Grammar/Eel.g
    public function notExpression(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('26'),self::$FOLLOW_26_in_notExpression104); 
            $this->pushFollow(self::$FOLLOW_expression_in_notExpression106);
            $this->expression();

            $this->state->_fsp--;


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "notExpression"


    // $ANTLR start "methodCall"
    // Resources/Private/Grammar/Eel.g
    public function methodCall(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->pushFollow(self::$FOLLOW_methodIdentifier_in_methodCall115);
            $this->methodIdentifier();

            $this->state->_fsp--;

            $this->pushFollow(self::$FOLLOW_arguments_in_methodCall117);
            $this->arguments();

            $this->state->_fsp--;


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "methodCall"


    // $ANTLR start "methodIdentifier"
    // Resources/Private/Grammar/Eel.g
    public function methodIdentifier(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_methodIdentifier126); 
            // Resources/Private/Grammar/Eel.g
            $alt5=2;
            $LA5_0 = $this->input->LA(1);

            if ( ($LA5_0==$this->getToken('27')) ) {
                $alt5=1;
            }
            switch ($alt5) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->match($this->input,$this->getToken('27'),self::$FOLLOW_27_in_methodIdentifier129); 
                    $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_methodIdentifier131); 

                    }
                    break;

            }


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "methodIdentifier"


    // $ANTLR start "arguments"
    // Resources/Private/Grammar/Eel.g
    public function arguments(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('24'),self::$FOLLOW_24_in_arguments142); 
            // Resources/Private/Grammar/Eel.g
            $alt7=2;
            $LA7_0 = $this->input->LA(1);

            if ( ($LA7_0==$this->getToken('ID')||($LA7_0>=$this->getToken('INT') && $LA7_0<=$this->getToken('StringLiteral'))||$LA7_0==$this->getToken('24')||$LA7_0==$this->getToken('26')) ) {
                $alt7=1;
            }
            switch ($alt7) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_expression_in_arguments145);
                    $this->expression();

                    $this->state->_fsp--;

                    // Resources/Private/Grammar/Eel.g
                    //loop6:
                    do {
                        $alt6=2;
                        $LA6_0 = $this->input->LA(1);

                        if ( ($LA6_0==$this->getToken('28')) ) {
                            $alt6=1;
                        }


                        switch ($alt6) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g
                    	    {
                    	    $this->match($this->input,$this->getToken('28'),self::$FOLLOW_28_in_arguments148); 
                    	    $this->pushFollow(self::$FOLLOW_expression_in_arguments150);
                    	    $this->expression();

                    	    $this->state->_fsp--;


                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop6;
                        }
                    } while (true);


                    }
                    break;

            }

            $this->match($this->input,$this->getToken('25'),self::$FOLLOW_25_in_arguments157); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "arguments"


    // $ANTLR start "term"
    // Resources/Private/Grammar/Eel.g
    public function term(){
        try {
            // Resources/Private/Grammar/Eel.g
            $alt8=4;
            $LA8 = $this->input->LA(1);
            if($this->getToken('INT')== $LA8)
                {
                $alt8=1;
                }
            else if($this->getToken('FLOAT')== $LA8)
                {
                $alt8=2;
                }
            else if($this->getToken('StringLiteral')== $LA8)
                {
                $alt8=3;
                }
            else if($this->getToken('ID')== $LA8)
                {
                $alt8=4;
                }
            else{
                $nvae =
                    new NoViableAltException("", 8, 0, $this->input);

                throw $nvae;
            }

            switch ($alt8) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_integerLiteral_in_term165);
                    $this->integerLiteral();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_floatLiteral_in_term169);
                    $this->floatLiteral();

                    $this->state->_fsp--;


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_stringLiteral_in_term173);
                    $this->stringLiteral();

                    $this->state->_fsp--;


                    }
                    break;
                case 4 :
                    // Resources/Private/Grammar/Eel.g
                    {
                    $this->pushFollow(self::$FOLLOW_objectPath_in_term177);
                    $this->objectPath();

                    $this->state->_fsp--;


                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "term"


    // $ANTLR start "numberOperator"
    // Resources/Private/Grammar/Eel.g
    public function numberOperator(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('NUMBER_OP'),self::$FOLLOW_NUMBER_OP_in_numberOperator184); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "numberOperator"


    // $ANTLR start "booleanOperator"
    // Resources/Private/Grammar/Eel.g
    public function booleanOperator(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('BOOLEAN_OP'),self::$FOLLOW_BOOLEAN_OP_in_booleanOperator193); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "booleanOperator"


    // $ANTLR start "comparisonOperator"
    // Resources/Private/Grammar/Eel.g
    public function comparisonOperator(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('COMP_OP'),self::$FOLLOW_COMP_OP_in_comparisonOperator202); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "comparisonOperator"


    // $ANTLR start "integerLiteral"
    // Resources/Private/Grammar/Eel.g
    public function integerLiteral(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('INT'),self::$FOLLOW_INT_in_integerLiteral211); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "integerLiteral"


    // $ANTLR start "floatLiteral"
    // Resources/Private/Grammar/Eel.g
    public function floatLiteral(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('FLOAT'),self::$FOLLOW_FLOAT_in_floatLiteral220); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "floatLiteral"


    // $ANTLR start "stringLiteral"
    // Resources/Private/Grammar/Eel.g
    public function stringLiteral(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('StringLiteral'),self::$FOLLOW_StringLiteral_in_stringLiteral229); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "stringLiteral"


    // $ANTLR start "objectPath"
    // Resources/Private/Grammar/Eel.g
    public function objectPath(){
        try {
            // Resources/Private/Grammar/Eel.g
            // Resources/Private/Grammar/Eel.g
            {
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_objectPath236); 
            // Resources/Private/Grammar/Eel.g
            //loop9:
            do {
                $alt9=2;
                $LA9_0 = $this->input->LA(1);

                if ( ($LA9_0==$this->getToken('PATH_SEP')) ) {
                    $alt9=1;
                }


                switch ($alt9) {
            	case 1 :
            	    // Resources/Private/Grammar/Eel.g
            	    {
            	    $this->match($this->input,$this->getToken('PATH_SEP'),self::$FOLLOW_PATH_SEP_in_objectPath239); 
            	    $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_objectPath241); 

            	    }
            	    break;

            	default :
            	    break 2;//loop9;
                }
            } while (true);


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "objectPath"

    // Delegated rules



}

function EelParser_DFA1_static(){
    $eot = "\xb\xff";
    $eof = "\x1\xff\x1\x8\x1\xff\x3\x8\x4\xff\x1\x8";
    $min = "\x1\x4\x1\x5\x1\xff\x3\x5\x1\xff\x1\x4\x2\xff\x1\x5";
    $max = "\x1\x1a\x1\x1c\x1\xff\x3\x1c\x1\xff\x1\x4\x2\xff\x1\x1c";
    $accept = "\x2\xff\x1\x2\x3\xff\x1\x3\x1\xff\x1\x4\x1\x1\x1\xff";
    $special = "\xb\xff";
    $transitionS = array(
        "\x1\x1\x3\xff\x1\x3\x1\x4\x1\x5\xd\xff\x1\x2\x1\xff\x1\x6",
        "\x3\x2\x3\xff\x1\x7\xc\xff\x1\x9\x1\x8\x1\xff\x1\x9\x1\x8",
        "",
        "\x3\x2\x11\xff\x1\x8\x2\xff\x1\x8",
        "\x3\x2\x11\xff\x1\x8\x2\xff\x1\x8",
        "\x3\x2\x11\xff\x1\x8\x2\xff\x1\x8",
        "",
        "\x1\xa",
        "",
        "",
        "\x3\x2\x3\xff\x1\x7\xd\xff\x1\x8\x2\xff\x1\x8"
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

class EelParser_DFA1 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = EelParser_DFA1_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 1;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "10:1: expression : ( methodCall | compositeExpression | notExpression | term );";
    }
}
 
?>