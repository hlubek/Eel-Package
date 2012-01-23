<?php
// $ANTLR 3.1.3 “ˆŽ 06, 2009 18:28:01 Resources/Private/Grammar/Eel.g 2012-01-23 00:01:18


# for convenience in actions
if (!defined('HIDDEN')) define('HIDDEN', BaseRecognizer::$HIDDEN);

class EelParser extends AntlrParser {
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

    
    static $FOLLOW_expression_in_fullExpression24;
    static $FOLLOW_EOF_in_fullExpression26;
    static $FOLLOW_methodCall_in_expression35;
    static $FOLLOW_compositeExpression_in_expression39;
    static $FOLLOW_notExpression_in_expression43;
    static $FOLLOW_term_in_expression47;
    static $FOLLOW_24_in_wrappedComposite56;
    static $FOLLOW_expression_in_wrappedComposite58;
    static $FOLLOW_25_in_wrappedComposite60;
    static $FOLLOW_wrappedComposite_in_compositeExpression70;
    static $FOLLOW_term_in_compositeExpression74;
    static $FOLLOW_numberOperator_in_compositeExpression78;
    static $FOLLOW_booleanOperator_in_compositeExpression82;
    static $FOLLOW_comparisonOperator_in_compositeExpression86;
    static $FOLLOW_wrappedComposite_in_compositeExpression90;
    static $FOLLOW_term_in_compositeExpression94;
    static $FOLLOW_26_in_notExpression104;
    static $FOLLOW_expression_in_notExpression106;
    static $FOLLOW_methodIdentifier_in_methodCall115;
    static $FOLLOW_arguments_in_methodCall117;
    static $FOLLOW_ID_in_methodIdentifier126;
    static $FOLLOW_27_in_methodIdentifier129;
    static $FOLLOW_ID_in_methodIdentifier131;
    static $FOLLOW_24_in_arguments142;
    static $FOLLOW_expression_in_arguments145;
    static $FOLLOW_28_in_arguments148;
    static $FOLLOW_expression_in_arguments150;
    static $FOLLOW_25_in_arguments157;
    static $FOLLOW_integerLiteral_in_term165;
    static $FOLLOW_floatLiteral_in_term169;
    static $FOLLOW_stringLiteral_in_term173;
    static $FOLLOW_objectPath_in_term177;
    static $FOLLOW_NUMBER_OP_in_numberOperator184;
    static $FOLLOW_BOOLEAN_OP_in_booleanOperator193;
    static $FOLLOW_COMP_OP_in_comparisonOperator202;
    static $FOLLOW_INT_in_integerLiteral211;
    static $FOLLOW_FLOAT_in_floatLiteral220;
    static $FOLLOW_StringLiteral_in_stringLiteral229;
    static $FOLLOW_ID_in_objectPath236;
    static $FOLLOW_PATH_SEP_in_objectPath239;
    static $FOLLOW_ID_in_objectPath241;

    
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
    // Resources/Private/Grammar/Eel.g:7:1: fullExpression : expression EOF ; 
    public function fullExpression(){
        try {
            // Resources/Private/Grammar/Eel.g:8:2: ( expression EOF ) 
            // Resources/Private/Grammar/Eel.g:8:4: expression EOF 
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
    // Resources/Private/Grammar/Eel.g:10:1: expression : ( methodCall | compositeExpression | notExpression | term ); 
    public function expression(){
        try {
            // Resources/Private/Grammar/Eel.g:11:2: ( methodCall | compositeExpression | notExpression | term ) 
            $alt1=4;
            $alt1 = $this->dfa1->predict($this->input);
            switch ($alt1) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:11:4: methodCall 
                    {
                    $this->pushFollow(self::$FOLLOW_methodCall_in_expression35);
                    $this->methodCall();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:11:17: compositeExpression 
                    {
                    $this->pushFollow(self::$FOLLOW_compositeExpression_in_expression39);
                    $this->compositeExpression();

                    $this->state->_fsp--;


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g:11:39: notExpression 
                    {
                    $this->pushFollow(self::$FOLLOW_notExpression_in_expression43);
                    $this->notExpression();

                    $this->state->_fsp--;


                    }
                    break;
                case 4 :
                    // Resources/Private/Grammar/Eel.g:11:55: term 
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
    // Resources/Private/Grammar/Eel.g:13:1: wrappedComposite : '(' expression ')' ; 
    public function wrappedComposite(){
        try {
            // Resources/Private/Grammar/Eel.g:14:2: ( '(' expression ')' ) 
            // Resources/Private/Grammar/Eel.g:14:4: '(' expression ')' 
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
    // Resources/Private/Grammar/Eel.g:16:1: compositeExpression : ( wrappedComposite | term ) ( numberOperator | booleanOperator | comparisonOperator ) ( wrappedComposite | term ) ; 
    public function compositeExpression(){
        try {
            // Resources/Private/Grammar/Eel.g:17:2: ( ( wrappedComposite | term ) ( numberOperator | booleanOperator | comparisonOperator ) ( wrappedComposite | term ) ) 
            // Resources/Private/Grammar/Eel.g:17:4: ( wrappedComposite | term ) ( numberOperator | booleanOperator | comparisonOperator ) ( wrappedComposite | term ) 
            {
            // Resources/Private/Grammar/Eel.g:17:4: ( wrappedComposite | term ) 
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
                    // Resources/Private/Grammar/Eel.g:17:5: wrappedComposite 
                    {
                    $this->pushFollow(self::$FOLLOW_wrappedComposite_in_compositeExpression70);
                    $this->wrappedComposite();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:17:24: term 
                    {
                    $this->pushFollow(self::$FOLLOW_term_in_compositeExpression74);
                    $this->term();

                    $this->state->_fsp--;


                    }
                    break;

            }

            // Resources/Private/Grammar/Eel.g:17:30: ( numberOperator | booleanOperator | comparisonOperator ) 
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
                    // Resources/Private/Grammar/Eel.g:17:31: numberOperator 
                    {
                    $this->pushFollow(self::$FOLLOW_numberOperator_in_compositeExpression78);
                    $this->numberOperator();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:17:48: booleanOperator 
                    {
                    $this->pushFollow(self::$FOLLOW_booleanOperator_in_compositeExpression82);
                    $this->booleanOperator();

                    $this->state->_fsp--;


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g:17:66: comparisonOperator 
                    {
                    $this->pushFollow(self::$FOLLOW_comparisonOperator_in_compositeExpression86);
                    $this->comparisonOperator();

                    $this->state->_fsp--;


                    }
                    break;

            }

            // Resources/Private/Grammar/Eel.g:17:86: ( wrappedComposite | term ) 
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
                    // Resources/Private/Grammar/Eel.g:17:87: wrappedComposite 
                    {
                    $this->pushFollow(self::$FOLLOW_wrappedComposite_in_compositeExpression90);
                    $this->wrappedComposite();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:17:106: term 
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
    // Resources/Private/Grammar/Eel.g:19:1: notExpression : '!' expression ; 
    public function notExpression(){
        try {
            // Resources/Private/Grammar/Eel.g:20:2: ( '!' expression ) 
            // Resources/Private/Grammar/Eel.g:20:4: '!' expression 
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
    // Resources/Private/Grammar/Eel.g:22:1: methodCall : methodIdentifier arguments ; 
    public function methodCall(){
        try {
            // Resources/Private/Grammar/Eel.g:23:2: ( methodIdentifier arguments ) 
            // Resources/Private/Grammar/Eel.g:23:4: methodIdentifier arguments 
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
    // Resources/Private/Grammar/Eel.g:25:1: methodIdentifier : ID ( ':' ID )? ; 
    public function methodIdentifier(){
        try {
            // Resources/Private/Grammar/Eel.g:26:2: ( ID ( ':' ID )? ) 
            // Resources/Private/Grammar/Eel.g:26:4: ID ( ':' ID )? 
            {
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_methodIdentifier126); 
            // Resources/Private/Grammar/Eel.g:26:7: ( ':' ID )? 
            $alt5=2;
            $LA5_0 = $this->input->LA(1);

            if ( ($LA5_0==$this->getToken('27')) ) {
                $alt5=1;
            }
            switch ($alt5) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:26:8: ':' ID 
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
    // Resources/Private/Grammar/Eel.g:28:1: arguments : '(' ( expression ( ',' expression )* )? ')' ; 
    public function arguments(){
        try {
            // Resources/Private/Grammar/Eel.g:29:2: ( '(' ( expression ( ',' expression )* )? ')' ) 
            // Resources/Private/Grammar/Eel.g:29:4: '(' ( expression ( ',' expression )* )? ')' 
            {
            $this->match($this->input,$this->getToken('24'),self::$FOLLOW_24_in_arguments142); 
            // Resources/Private/Grammar/Eel.g:29:8: ( expression ( ',' expression )* )? 
            $alt7=2;
            $LA7_0 = $this->input->LA(1);

            if ( ($LA7_0==$this->getToken('ID')||($LA7_0>=$this->getToken('INT') && $LA7_0<=$this->getToken('StringLiteral'))||$LA7_0==$this->getToken('24')||$LA7_0==$this->getToken('26')) ) {
                $alt7=1;
            }
            switch ($alt7) {
                case 1 :
                    // Resources/Private/Grammar/Eel.g:29:9: expression ( ',' expression )* 
                    {
                    $this->pushFollow(self::$FOLLOW_expression_in_arguments145);
                    $this->expression();

                    $this->state->_fsp--;

                    // Resources/Private/Grammar/Eel.g:29:20: ( ',' expression )* 
                    //loop6:
                    do {
                        $alt6=2;
                        $LA6_0 = $this->input->LA(1);

                        if ( ($LA6_0==$this->getToken('28')) ) {
                            $alt6=1;
                        }


                        switch ($alt6) {
                    	case 1 :
                    	    // Resources/Private/Grammar/Eel.g:29:21: ',' expression 
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
    // Resources/Private/Grammar/Eel.g:31:1: term : ( integerLiteral | floatLiteral | stringLiteral | objectPath ); 
    public function term(){
        try {
            // Resources/Private/Grammar/Eel.g:31:6: ( integerLiteral | floatLiteral | stringLiteral | objectPath ) 
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
                    // Resources/Private/Grammar/Eel.g:31:8: integerLiteral 
                    {
                    $this->pushFollow(self::$FOLLOW_integerLiteral_in_term165);
                    $this->integerLiteral();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // Resources/Private/Grammar/Eel.g:31:25: floatLiteral 
                    {
                    $this->pushFollow(self::$FOLLOW_floatLiteral_in_term169);
                    $this->floatLiteral();

                    $this->state->_fsp--;


                    }
                    break;
                case 3 :
                    // Resources/Private/Grammar/Eel.g:31:40: stringLiteral 
                    {
                    $this->pushFollow(self::$FOLLOW_stringLiteral_in_term173);
                    $this->stringLiteral();

                    $this->state->_fsp--;


                    }
                    break;
                case 4 :
                    // Resources/Private/Grammar/Eel.g:31:56: objectPath 
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
    // Resources/Private/Grammar/Eel.g:33:1: numberOperator : NUMBER_OP ; 
    public function numberOperator(){
        try {
            // Resources/Private/Grammar/Eel.g:33:15: ( NUMBER_OP ) 
            // Resources/Private/Grammar/Eel.g:33:17: NUMBER_OP 
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
    // Resources/Private/Grammar/Eel.g:35:1: booleanOperator : BOOLEAN_OP ; 
    public function booleanOperator(){
        try {
            // Resources/Private/Grammar/Eel.g:36:2: ( BOOLEAN_OP ) 
            // Resources/Private/Grammar/Eel.g:36:4: BOOLEAN_OP 
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
    // Resources/Private/Grammar/Eel.g:38:1: comparisonOperator : COMP_OP ; 
    public function comparisonOperator(){
        try {
            // Resources/Private/Grammar/Eel.g:39:2: ( COMP_OP ) 
            // Resources/Private/Grammar/Eel.g:39:4: COMP_OP 
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
    // Resources/Private/Grammar/Eel.g:41:1: integerLiteral : INT ; 
    public function integerLiteral(){
        try {
            // Resources/Private/Grammar/Eel.g:42:2: ( INT ) 
            // Resources/Private/Grammar/Eel.g:42:4: INT 
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
    // Resources/Private/Grammar/Eel.g:44:1: floatLiteral : FLOAT ; 
    public function floatLiteral(){
        try {
            // Resources/Private/Grammar/Eel.g:45:2: ( FLOAT ) 
            // Resources/Private/Grammar/Eel.g:45:4: FLOAT 
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
    // Resources/Private/Grammar/Eel.g:47:1: stringLiteral : StringLiteral ; 
    public function stringLiteral(){
        try {
            // Resources/Private/Grammar/Eel.g:48:2: ( StringLiteral ) 
            // Resources/Private/Grammar/Eel.g:48:4: StringLiteral 
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
    // Resources/Private/Grammar/Eel.g:50:1: objectPath : ID ( PATH_SEP ID )* ; 
    public function objectPath(){
        try {
            // Resources/Private/Grammar/Eel.g:50:11: ( ID ( PATH_SEP ID )* ) 
            // Resources/Private/Grammar/Eel.g:50:13: ID ( PATH_SEP ID )* 
            {
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_objectPath236); 
            // Resources/Private/Grammar/Eel.g:50:16: ( PATH_SEP ID )* 
            //loop9:
            do {
                $alt9=2;
                $LA9_0 = $this->input->LA(1);

                if ( ($LA9_0==$this->getToken('PATH_SEP')) ) {
                    $alt9=1;
                }


                switch ($alt9) {
            	case 1 :
            	    // Resources/Private/Grammar/Eel.g:50:17: PATH_SEP ID 
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
    $eot = array(11, 65535);
    $eof = array(1, 65535, 1, 8, 1, 65535, 3, 8, 4, 65535, 1, 8);
    $min = array(1, 4, 1, 5, 1, 65535, 3, 5, 1, 65535, 1, 4, 2, 65535, 1, 
    5);
    $max = array(1, 26, 1, 28, 1, 65535, 3, 28, 1, 65535, 1, 4, 2, 65535, 
    1, 28);
    $accept = array(2, 65535, 1, 2, 3, 65535, 1, 3, 1, 65535, 1, 4, 1, 1, 
    1, 65535);
    $special = array(11, 65535);
    $transitionS = array(array(1, 1, 3, 65535, 1, 3, 1, 4, 1, 5, 13, 65535, 
    1, 2, 1, 65535, 1, 6), array(3, 2, 3, 65535, 1, 7, 12, 65535, 1, 9, 
    1, 8, 1, 65535, 1, 9, 1, 8), array(), array(3, 2, 17, 65535, 1, 8, 2, 
    65535, 1, 8), array(3, 2, 17, 65535, 1, 8, 2, 65535, 1, 8), array(3, 
    2, 17, 65535, 1, 8, 2, 65535, 1, 8), array(), array(1, 10), array(), 
    array(), array(3, 2, 3, 65535, 1, 7, 13, 65535, 1, 8, 2, 65535, 1, 8));

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
$EelParser_DFA1 = EelParser_DFA1_static();

class EelParser_DFA1 extends DFA {

    public function __construct($recognizer) {
        global $EelParser_DFA1;
        $DFA = $EelParser_DFA1;
        $this->recognizer = $recognizer;
        $this->decisionNumber = 1;
        $this->eot = $DFA['eot'];
        $this->eof = $DFA['eof'];
        $this->min = $DFA['min'];
        $this->max = $DFA['max'];
        $this->accept = $DFA['accept'];
        $this->special = $DFA['special'];
        $this->transition = $DFA['transition'];
    }
    public function getDescription() {
        return "10:1: expression : ( methodCall | compositeExpression | notExpression | term );";
    }
}
 



EelParser::$FOLLOW_expression_in_fullExpression24 = new Set(array());
EelParser::$FOLLOW_EOF_in_fullExpression26 = new Set(array(1));
EelParser::$FOLLOW_methodCall_in_expression35 = new Set(array(1));
EelParser::$FOLLOW_compositeExpression_in_expression39 = new Set(array(1));
EelParser::$FOLLOW_notExpression_in_expression43 = new Set(array(1));
EelParser::$FOLLOW_term_in_expression47 = new Set(array(1));
EelParser::$FOLLOW_24_in_wrappedComposite56 = new Set(array(4, 8, 9, 10, 24, 26));
EelParser::$FOLLOW_expression_in_wrappedComposite58 = new Set(array(25));
EelParser::$FOLLOW_25_in_wrappedComposite60 = new Set(array(1));
EelParser::$FOLLOW_wrappedComposite_in_compositeExpression70 = new Set(array(5, 6, 7));
EelParser::$FOLLOW_term_in_compositeExpression74 = new Set(array(5, 6, 7));
EelParser::$FOLLOW_numberOperator_in_compositeExpression78 = new Set(array(4, 8, 9, 10, 24));
EelParser::$FOLLOW_booleanOperator_in_compositeExpression82 = new Set(array(4, 8, 9, 10, 24));
EelParser::$FOLLOW_comparisonOperator_in_compositeExpression86 = new Set(array(4, 8, 9, 10, 24));
EelParser::$FOLLOW_wrappedComposite_in_compositeExpression90 = new Set(array(1));
EelParser::$FOLLOW_term_in_compositeExpression94 = new Set(array(1));
EelParser::$FOLLOW_26_in_notExpression104 = new Set(array(4, 8, 9, 10, 24, 26));
EelParser::$FOLLOW_expression_in_notExpression106 = new Set(array(1));
EelParser::$FOLLOW_methodIdentifier_in_methodCall115 = new Set(array(24));
EelParser::$FOLLOW_arguments_in_methodCall117 = new Set(array(1));
EelParser::$FOLLOW_ID_in_methodIdentifier126 = new Set(array(1, 27));
EelParser::$FOLLOW_27_in_methodIdentifier129 = new Set(array(4));
EelParser::$FOLLOW_ID_in_methodIdentifier131 = new Set(array(1));
EelParser::$FOLLOW_24_in_arguments142 = new Set(array(4, 8, 9, 10, 24, 25, 26));
EelParser::$FOLLOW_expression_in_arguments145 = new Set(array(25, 28));
EelParser::$FOLLOW_28_in_arguments148 = new Set(array(4, 8, 9, 10, 24, 26));
EelParser::$FOLLOW_expression_in_arguments150 = new Set(array(25, 28));
EelParser::$FOLLOW_25_in_arguments157 = new Set(array(1));
EelParser::$FOLLOW_integerLiteral_in_term165 = new Set(array(1));
EelParser::$FOLLOW_floatLiteral_in_term169 = new Set(array(1));
EelParser::$FOLLOW_stringLiteral_in_term173 = new Set(array(1));
EelParser::$FOLLOW_objectPath_in_term177 = new Set(array(1));
EelParser::$FOLLOW_NUMBER_OP_in_numberOperator184 = new Set(array(1));
EelParser::$FOLLOW_BOOLEAN_OP_in_booleanOperator193 = new Set(array(1));
EelParser::$FOLLOW_COMP_OP_in_comparisonOperator202 = new Set(array(1));
EelParser::$FOLLOW_INT_in_integerLiteral211 = new Set(array(1));
EelParser::$FOLLOW_FLOAT_in_floatLiteral220 = new Set(array(1));
EelParser::$FOLLOW_StringLiteral_in_stringLiteral229 = new Set(array(1));
EelParser::$FOLLOW_ID_in_objectPath236 = new Set(array(1, 11));
EelParser::$FOLLOW_PATH_SEP_in_objectPath239 = new Set(array(4));
EelParser::$FOLLOW_ID_in_objectPath241 = new Set(array(1, 11));

?>