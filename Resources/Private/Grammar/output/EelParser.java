// $ANTLR 3.4 /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g 2012-01-22 23:58:11

import org.antlr.runtime.*;
import java.util.Stack;
import java.util.List;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked"})
public class EelParser extends Parser {
    public static final String[] tokenNames = new String[] {
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "BOOLEAN_OP", "COMP_OP", "CharacterEscapeSequence", "DoubleStringCharacter", "EXPONENT", "EscapeCharacter", "EscapeSequence", "FLOAT", "HEX_DIGIT", "HexEscapeSequence", "ID", "INT", "NUMBER_OP", "NonEscapeCharacter", "PATH_SEP", "SingleEscapeCharacter", "SingleStringCharacter", "StringLiteral", "UnicodeEscapeSequence", "WS", "'!'", "'('", "')'", "','", "':'"
    };

    public static final int EOF=-1;
    public static final int T__24=24;
    public static final int T__25=25;
    public static final int T__26=26;
    public static final int T__27=27;
    public static final int T__28=28;
    public static final int BOOLEAN_OP=4;
    public static final int COMP_OP=5;
    public static final int CharacterEscapeSequence=6;
    public static final int DoubleStringCharacter=7;
    public static final int EXPONENT=8;
    public static final int EscapeCharacter=9;
    public static final int EscapeSequence=10;
    public static final int FLOAT=11;
    public static final int HEX_DIGIT=12;
    public static final int HexEscapeSequence=13;
    public static final int ID=14;
    public static final int INT=15;
    public static final int NUMBER_OP=16;
    public static final int NonEscapeCharacter=17;
    public static final int PATH_SEP=18;
    public static final int SingleEscapeCharacter=19;
    public static final int SingleStringCharacter=20;
    public static final int StringLiteral=21;
    public static final int UnicodeEscapeSequence=22;
    public static final int WS=23;

    // delegates
    public Parser[] getDelegates() {
        return new Parser[] {};
    }

    // delegators


    public EelParser(TokenStream input) {
        this(input, new RecognizerSharedState());
    }
    public EelParser(TokenStream input, RecognizerSharedState state) {
        super(input, state);
    }

    public String[] getTokenNames() { return EelParser.tokenNames; }
    public String getGrammarFileName() { return "/Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g"; }



    // $ANTLR start "fullExpression"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:3:1: fullExpression : expression EOF ;
    public final void fullExpression() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:4:2: ( expression EOF )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:4:4: expression EOF
            {
            pushFollow(FOLLOW_expression_in_fullExpression11);
            expression();

            state._fsp--;


            match(input,EOF,FOLLOW_EOF_in_fullExpression13); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "fullExpression"



    // $ANTLR start "expression"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:6:1: expression : ( methodCall | compositeExpression | notExpression | term );
    public final void expression() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:7:2: ( methodCall | compositeExpression | notExpression | term )
            int alt1=4;
            alt1 = dfa1.predict(input);
            switch (alt1) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:7:4: methodCall
                    {
                    pushFollow(FOLLOW_methodCall_in_expression22);
                    methodCall();

                    state._fsp--;


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:7:17: compositeExpression
                    {
                    pushFollow(FOLLOW_compositeExpression_in_expression26);
                    compositeExpression();

                    state._fsp--;


                    }
                    break;
                case 3 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:7:39: notExpression
                    {
                    pushFollow(FOLLOW_notExpression_in_expression30);
                    notExpression();

                    state._fsp--;


                    }
                    break;
                case 4 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:7:55: term
                    {
                    pushFollow(FOLLOW_term_in_expression34);
                    term();

                    state._fsp--;


                    }
                    break;

            }
        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "expression"



    // $ANTLR start "wrappedComposite"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:9:1: wrappedComposite : '(' expression ')' ;
    public final void wrappedComposite() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:10:2: ( '(' expression ')' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:10:4: '(' expression ')'
            {
            match(input,25,FOLLOW_25_in_wrappedComposite43); 

            pushFollow(FOLLOW_expression_in_wrappedComposite45);
            expression();

            state._fsp--;


            match(input,26,FOLLOW_26_in_wrappedComposite47); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "wrappedComposite"



    // $ANTLR start "compositeExpression"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:12:1: compositeExpression : ( wrappedComposite | term ) ( numberOperator | booleanOperator | comparisonOperator ) ( wrappedComposite | term ) ;
    public final void compositeExpression() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:2: ( ( wrappedComposite | term ) ( numberOperator | booleanOperator | comparisonOperator ) ( wrappedComposite | term ) )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:4: ( wrappedComposite | term ) ( numberOperator | booleanOperator | comparisonOperator ) ( wrappedComposite | term )
            {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:4: ( wrappedComposite | term )
            int alt2=2;
            int LA2_0 = input.LA(1);

            if ( (LA2_0==25) ) {
                alt2=1;
            }
            else if ( (LA2_0==FLOAT||(LA2_0 >= ID && LA2_0 <= INT)||LA2_0==StringLiteral) ) {
                alt2=2;
            }
            else {
                NoViableAltException nvae =
                    new NoViableAltException("", 2, 0, input);

                throw nvae;

            }
            switch (alt2) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:5: wrappedComposite
                    {
                    pushFollow(FOLLOW_wrappedComposite_in_compositeExpression57);
                    wrappedComposite();

                    state._fsp--;


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:24: term
                    {
                    pushFollow(FOLLOW_term_in_compositeExpression61);
                    term();

                    state._fsp--;


                    }
                    break;

            }


            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:30: ( numberOperator | booleanOperator | comparisonOperator )
            int alt3=3;
            switch ( input.LA(1) ) {
            case NUMBER_OP:
                {
                alt3=1;
                }
                break;
            case BOOLEAN_OP:
                {
                alt3=2;
                }
                break;
            case COMP_OP:
                {
                alt3=3;
                }
                break;
            default:
                NoViableAltException nvae =
                    new NoViableAltException("", 3, 0, input);

                throw nvae;

            }

            switch (alt3) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:31: numberOperator
                    {
                    pushFollow(FOLLOW_numberOperator_in_compositeExpression65);
                    numberOperator();

                    state._fsp--;


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:48: booleanOperator
                    {
                    pushFollow(FOLLOW_booleanOperator_in_compositeExpression69);
                    booleanOperator();

                    state._fsp--;


                    }
                    break;
                case 3 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:66: comparisonOperator
                    {
                    pushFollow(FOLLOW_comparisonOperator_in_compositeExpression73);
                    comparisonOperator();

                    state._fsp--;


                    }
                    break;

            }


            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:86: ( wrappedComposite | term )
            int alt4=2;
            int LA4_0 = input.LA(1);

            if ( (LA4_0==25) ) {
                alt4=1;
            }
            else if ( (LA4_0==FLOAT||(LA4_0 >= ID && LA4_0 <= INT)||LA4_0==StringLiteral) ) {
                alt4=2;
            }
            else {
                NoViableAltException nvae =
                    new NoViableAltException("", 4, 0, input);

                throw nvae;

            }
            switch (alt4) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:87: wrappedComposite
                    {
                    pushFollow(FOLLOW_wrappedComposite_in_compositeExpression77);
                    wrappedComposite();

                    state._fsp--;


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:13:106: term
                    {
                    pushFollow(FOLLOW_term_in_compositeExpression81);
                    term();

                    state._fsp--;


                    }
                    break;

            }


            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "compositeExpression"



    // $ANTLR start "notExpression"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:15:1: notExpression : '!' expression ;
    public final void notExpression() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:16:2: ( '!' expression )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:16:4: '!' expression
            {
            match(input,24,FOLLOW_24_in_notExpression91); 

            pushFollow(FOLLOW_expression_in_notExpression93);
            expression();

            state._fsp--;


            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "notExpression"



    // $ANTLR start "methodCall"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:18:1: methodCall : methodIdentifier arguments ;
    public final void methodCall() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:19:2: ( methodIdentifier arguments )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:19:4: methodIdentifier arguments
            {
            pushFollow(FOLLOW_methodIdentifier_in_methodCall102);
            methodIdentifier();

            state._fsp--;


            pushFollow(FOLLOW_arguments_in_methodCall104);
            arguments();

            state._fsp--;


            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "methodCall"



    // $ANTLR start "methodIdentifier"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:21:1: methodIdentifier : ID ( ':' ID )? ;
    public final void methodIdentifier() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:22:2: ( ID ( ':' ID )? )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:22:4: ID ( ':' ID )?
            {
            match(input,ID,FOLLOW_ID_in_methodIdentifier113); 

            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:22:7: ( ':' ID )?
            int alt5=2;
            int LA5_0 = input.LA(1);

            if ( (LA5_0==28) ) {
                alt5=1;
            }
            switch (alt5) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:22:8: ':' ID
                    {
                    match(input,28,FOLLOW_28_in_methodIdentifier116); 

                    match(input,ID,FOLLOW_ID_in_methodIdentifier118); 

                    }
                    break;

            }


            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "methodIdentifier"



    // $ANTLR start "arguments"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:24:1: arguments : '(' ( expression ( ',' expression )* )? ')' ;
    public final void arguments() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:25:2: ( '(' ( expression ( ',' expression )* )? ')' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:25:4: '(' ( expression ( ',' expression )* )? ')'
            {
            match(input,25,FOLLOW_25_in_arguments129); 

            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:25:8: ( expression ( ',' expression )* )?
            int alt7=2;
            int LA7_0 = input.LA(1);

            if ( (LA7_0==FLOAT||(LA7_0 >= ID && LA7_0 <= INT)||LA7_0==StringLiteral||(LA7_0 >= 24 && LA7_0 <= 25)) ) {
                alt7=1;
            }
            switch (alt7) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:25:9: expression ( ',' expression )*
                    {
                    pushFollow(FOLLOW_expression_in_arguments132);
                    expression();

                    state._fsp--;


                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:25:20: ( ',' expression )*
                    loop6:
                    do {
                        int alt6=2;
                        int LA6_0 = input.LA(1);

                        if ( (LA6_0==27) ) {
                            alt6=1;
                        }


                        switch (alt6) {
                    	case 1 :
                    	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:25:21: ',' expression
                    	    {
                    	    match(input,27,FOLLOW_27_in_arguments135); 

                    	    pushFollow(FOLLOW_expression_in_arguments137);
                    	    expression();

                    	    state._fsp--;


                    	    }
                    	    break;

                    	default :
                    	    break loop6;
                        }
                    } while (true);


                    }
                    break;

            }


            match(input,26,FOLLOW_26_in_arguments144); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "arguments"



    // $ANTLR start "term"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:27:1: term : ( integerLiteral | floatLiteral | stringLiteral | objectPath );
    public final void term() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:27:6: ( integerLiteral | floatLiteral | stringLiteral | objectPath )
            int alt8=4;
            switch ( input.LA(1) ) {
            case INT:
                {
                alt8=1;
                }
                break;
            case FLOAT:
                {
                alt8=2;
                }
                break;
            case StringLiteral:
                {
                alt8=3;
                }
                break;
            case ID:
                {
                alt8=4;
                }
                break;
            default:
                NoViableAltException nvae =
                    new NoViableAltException("", 8, 0, input);

                throw nvae;

            }

            switch (alt8) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:27:8: integerLiteral
                    {
                    pushFollow(FOLLOW_integerLiteral_in_term152);
                    integerLiteral();

                    state._fsp--;


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:27:25: floatLiteral
                    {
                    pushFollow(FOLLOW_floatLiteral_in_term156);
                    floatLiteral();

                    state._fsp--;


                    }
                    break;
                case 3 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:27:40: stringLiteral
                    {
                    pushFollow(FOLLOW_stringLiteral_in_term160);
                    stringLiteral();

                    state._fsp--;


                    }
                    break;
                case 4 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:27:56: objectPath
                    {
                    pushFollow(FOLLOW_objectPath_in_term164);
                    objectPath();

                    state._fsp--;


                    }
                    break;

            }
        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "term"



    // $ANTLR start "numberOperator"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:29:1: numberOperator : NUMBER_OP ;
    public final void numberOperator() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:29:15: ( NUMBER_OP )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:29:17: NUMBER_OP
            {
            match(input,NUMBER_OP,FOLLOW_NUMBER_OP_in_numberOperator171); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "numberOperator"



    // $ANTLR start "booleanOperator"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:31:1: booleanOperator : BOOLEAN_OP ;
    public final void booleanOperator() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:32:2: ( BOOLEAN_OP )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:32:4: BOOLEAN_OP
            {
            match(input,BOOLEAN_OP,FOLLOW_BOOLEAN_OP_in_booleanOperator180); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "booleanOperator"



    // $ANTLR start "comparisonOperator"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:34:1: comparisonOperator : COMP_OP ;
    public final void comparisonOperator() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:35:2: ( COMP_OP )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:35:4: COMP_OP
            {
            match(input,COMP_OP,FOLLOW_COMP_OP_in_comparisonOperator189); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "comparisonOperator"



    // $ANTLR start "integerLiteral"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:37:1: integerLiteral : INT ;
    public final void integerLiteral() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:38:2: ( INT )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:38:4: INT
            {
            match(input,INT,FOLLOW_INT_in_integerLiteral198); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "integerLiteral"



    // $ANTLR start "floatLiteral"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:40:1: floatLiteral : FLOAT ;
    public final void floatLiteral() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:41:2: ( FLOAT )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:41:4: FLOAT
            {
            match(input,FLOAT,FOLLOW_FLOAT_in_floatLiteral207); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "floatLiteral"



    // $ANTLR start "stringLiteral"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:43:1: stringLiteral : StringLiteral ;
    public final void stringLiteral() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:44:2: ( StringLiteral )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:44:4: StringLiteral
            {
            match(input,StringLiteral,FOLLOW_StringLiteral_in_stringLiteral216); 

            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "stringLiteral"



    // $ANTLR start "objectPath"
    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:46:1: objectPath : ID ( PATH_SEP ID )* ;
    public final void objectPath() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:46:11: ( ID ( PATH_SEP ID )* )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:46:13: ID ( PATH_SEP ID )*
            {
            match(input,ID,FOLLOW_ID_in_objectPath223); 

            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:46:16: ( PATH_SEP ID )*
            loop9:
            do {
                int alt9=2;
                int LA9_0 = input.LA(1);

                if ( (LA9_0==PATH_SEP) ) {
                    alt9=1;
                }


                switch (alt9) {
            	case 1 :
            	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:46:17: PATH_SEP ID
            	    {
            	    match(input,PATH_SEP,FOLLOW_PATH_SEP_in_objectPath226); 

            	    match(input,ID,FOLLOW_ID_in_objectPath228); 

            	    }
            	    break;

            	default :
            	    break loop9;
                }
            } while (true);


            }

        }
        catch (RecognitionException re) {
            reportError(re);
            recover(input,re);
        }

        finally {
        	// do for sure before leaving
        }
        return ;
    }
    // $ANTLR end "objectPath"

    // Delegated rules


    protected DFA1 dfa1 = new DFA1(this);
    static final String DFA1_eotS =
        "\13\uffff";
    static final String DFA1_eofS =
        "\1\uffff\1\11\1\uffff\3\11\4\uffff\1\11";
    static final String DFA1_minS =
        "\1\13\1\4\1\uffff\3\4\2\uffff\1\16\1\uffff\1\4";
    static final String DFA1_maxS =
        "\1\31\1\34\1\uffff\3\33\2\uffff\1\16\1\uffff\1\33";
    static final String DFA1_acceptS =
        "\2\uffff\1\2\3\uffff\1\3\1\1\1\uffff\1\4\1\uffff";
    static final String DFA1_specialS =
        "\13\uffff}>";
    static final String[] DFA1_transitionS = {
            "\1\4\2\uffff\1\1\1\3\5\uffff\1\5\2\uffff\1\6\1\2",
            "\2\2\12\uffff\1\2\1\uffff\1\10\6\uffff\1\7\2\11\1\7",
            "",
            "\2\2\12\uffff\1\2\11\uffff\2\11",
            "\2\2\12\uffff\1\2\11\uffff\2\11",
            "\2\2\12\uffff\1\2\11\uffff\2\11",
            "",
            "",
            "\1\12",
            "",
            "\2\2\12\uffff\1\2\1\uffff\1\10\7\uffff\2\11"
    };

    static final short[] DFA1_eot = DFA.unpackEncodedString(DFA1_eotS);
    static final short[] DFA1_eof = DFA.unpackEncodedString(DFA1_eofS);
    static final char[] DFA1_min = DFA.unpackEncodedStringToUnsignedChars(DFA1_minS);
    static final char[] DFA1_max = DFA.unpackEncodedStringToUnsignedChars(DFA1_maxS);
    static final short[] DFA1_accept = DFA.unpackEncodedString(DFA1_acceptS);
    static final short[] DFA1_special = DFA.unpackEncodedString(DFA1_specialS);
    static final short[][] DFA1_transition;

    static {
        int numStates = DFA1_transitionS.length;
        DFA1_transition = new short[numStates][];
        for (int i=0; i<numStates; i++) {
            DFA1_transition[i] = DFA.unpackEncodedString(DFA1_transitionS[i]);
        }
    }

    class DFA1 extends DFA {

        public DFA1(BaseRecognizer recognizer) {
            this.recognizer = recognizer;
            this.decisionNumber = 1;
            this.eot = DFA1_eot;
            this.eof = DFA1_eof;
            this.min = DFA1_min;
            this.max = DFA1_max;
            this.accept = DFA1_accept;
            this.special = DFA1_special;
            this.transition = DFA1_transition;
        }
        public String getDescription() {
            return "6:1: expression : ( methodCall | compositeExpression | notExpression | term );";
        }
    }
 

    public static final BitSet FOLLOW_expression_in_fullExpression11 = new BitSet(new long[]{0x0000000000000000L});
    public static final BitSet FOLLOW_EOF_in_fullExpression13 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_methodCall_in_expression22 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_compositeExpression_in_expression26 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_notExpression_in_expression30 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_term_in_expression34 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_25_in_wrappedComposite43 = new BitSet(new long[]{0x000000000320C800L});
    public static final BitSet FOLLOW_expression_in_wrappedComposite45 = new BitSet(new long[]{0x0000000004000000L});
    public static final BitSet FOLLOW_26_in_wrappedComposite47 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_wrappedComposite_in_compositeExpression57 = new BitSet(new long[]{0x0000000000010030L});
    public static final BitSet FOLLOW_term_in_compositeExpression61 = new BitSet(new long[]{0x0000000000010030L});
    public static final BitSet FOLLOW_numberOperator_in_compositeExpression65 = new BitSet(new long[]{0x000000000220C800L});
    public static final BitSet FOLLOW_booleanOperator_in_compositeExpression69 = new BitSet(new long[]{0x000000000220C800L});
    public static final BitSet FOLLOW_comparisonOperator_in_compositeExpression73 = new BitSet(new long[]{0x000000000220C800L});
    public static final BitSet FOLLOW_wrappedComposite_in_compositeExpression77 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_term_in_compositeExpression81 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_24_in_notExpression91 = new BitSet(new long[]{0x000000000320C800L});
    public static final BitSet FOLLOW_expression_in_notExpression93 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_methodIdentifier_in_methodCall102 = new BitSet(new long[]{0x0000000002000000L});
    public static final BitSet FOLLOW_arguments_in_methodCall104 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_ID_in_methodIdentifier113 = new BitSet(new long[]{0x0000000010000002L});
    public static final BitSet FOLLOW_28_in_methodIdentifier116 = new BitSet(new long[]{0x0000000000004000L});
    public static final BitSet FOLLOW_ID_in_methodIdentifier118 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_25_in_arguments129 = new BitSet(new long[]{0x000000000720C800L});
    public static final BitSet FOLLOW_expression_in_arguments132 = new BitSet(new long[]{0x000000000C000000L});
    public static final BitSet FOLLOW_27_in_arguments135 = new BitSet(new long[]{0x000000000320C800L});
    public static final BitSet FOLLOW_expression_in_arguments137 = new BitSet(new long[]{0x000000000C000000L});
    public static final BitSet FOLLOW_26_in_arguments144 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_integerLiteral_in_term152 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_floatLiteral_in_term156 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_stringLiteral_in_term160 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_objectPath_in_term164 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_NUMBER_OP_in_numberOperator171 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_BOOLEAN_OP_in_booleanOperator180 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_COMP_OP_in_comparisonOperator189 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_INT_in_integerLiteral198 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_FLOAT_in_floatLiteral207 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_StringLiteral_in_stringLiteral216 = new BitSet(new long[]{0x0000000000000002L});
    public static final BitSet FOLLOW_ID_in_objectPath223 = new BitSet(new long[]{0x0000000000040002L});
    public static final BitSet FOLLOW_PATH_SEP_in_objectPath226 = new BitSet(new long[]{0x0000000000004000L});
    public static final BitSet FOLLOW_ID_in_objectPath228 = new BitSet(new long[]{0x0000000000040002L});

}