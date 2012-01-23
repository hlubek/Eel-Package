// $ANTLR 3.4 /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g 2012-01-22 23:58:11

import org.antlr.runtime.*;
import java.util.Stack;
import java.util.List;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked"})
public class EelLexer extends Lexer {
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
    // delegators
    public Lexer[] getDelegates() {
        return new Lexer[] {};
    }

    public EelLexer() {} 
    public EelLexer(CharStream input) {
        this(input, new RecognizerSharedState());
    }
    public EelLexer(CharStream input, RecognizerSharedState state) {
        super(input,state);
    }
    public String getGrammarFileName() { return "/Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g"; }

    // $ANTLR start "T__24"
    public final void mT__24() throws RecognitionException {
        try {
            int _type = T__24;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:2:7: ( '!' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:2:9: '!'
            {
            match('!'); 

            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "T__24"

    // $ANTLR start "T__25"
    public final void mT__25() throws RecognitionException {
        try {
            int _type = T__25;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:3:7: ( '(' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:3:9: '('
            {
            match('('); 

            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "T__25"

    // $ANTLR start "T__26"
    public final void mT__26() throws RecognitionException {
        try {
            int _type = T__26;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:4:7: ( ')' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:4:9: ')'
            {
            match(')'); 

            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "T__26"

    // $ANTLR start "T__27"
    public final void mT__27() throws RecognitionException {
        try {
            int _type = T__27;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:5:7: ( ',' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:5:9: ','
            {
            match(','); 

            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "T__27"

    // $ANTLR start "T__28"
    public final void mT__28() throws RecognitionException {
        try {
            int _type = T__28;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:6:7: ( ':' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:6:9: ':'
            {
            match(':'); 

            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "T__28"

    // $ANTLR start "ID"
    public final void mID() throws RecognitionException {
        try {
            int _type = ID;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:48:5: ( ( 'a' .. 'z' | 'A' .. 'Z' | '_' ) ( 'a' .. 'z' | 'A' .. 'Z' | '0' .. '9' | '_' )* )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:48:7: ( 'a' .. 'z' | 'A' .. 'Z' | '_' ) ( 'a' .. 'z' | 'A' .. 'Z' | '0' .. '9' | '_' )*
            {
            if ( (input.LA(1) >= 'A' && input.LA(1) <= 'Z')||input.LA(1)=='_'||(input.LA(1) >= 'a' && input.LA(1) <= 'z') ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:48:31: ( 'a' .. 'z' | 'A' .. 'Z' | '0' .. '9' | '_' )*
            loop1:
            do {
                int alt1=2;
                int LA1_0 = input.LA(1);

                if ( ((LA1_0 >= '0' && LA1_0 <= '9')||(LA1_0 >= 'A' && LA1_0 <= 'Z')||LA1_0=='_'||(LA1_0 >= 'a' && LA1_0 <= 'z')) ) {
                    alt1=1;
                }


                switch (alt1) {
            	case 1 :
            	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            	    {
            	    if ( (input.LA(1) >= '0' && input.LA(1) <= '9')||(input.LA(1) >= 'A' && input.LA(1) <= 'Z')||input.LA(1)=='_'||(input.LA(1) >= 'a' && input.LA(1) <= 'z') ) {
            	        input.consume();
            	    }
            	    else {
            	        MismatchedSetException mse = new MismatchedSetException(null,input);
            	        recover(mse);
            	        throw mse;
            	    }


            	    }
            	    break;

            	default :
            	    break loop1;
                }
            } while (true);


            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "ID"

    // $ANTLR start "INT"
    public final void mINT() throws RecognitionException {
        try {
            int _type = INT;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:51:5: ( ( '0' .. '9' )+ )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:51:7: ( '0' .. '9' )+
            {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:51:7: ( '0' .. '9' )+
            int cnt2=0;
            loop2:
            do {
                int alt2=2;
                int LA2_0 = input.LA(1);

                if ( ((LA2_0 >= '0' && LA2_0 <= '9')) ) {
                    alt2=1;
                }


                switch (alt2) {
            	case 1 :
            	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            	    {
            	    if ( (input.LA(1) >= '0' && input.LA(1) <= '9') ) {
            	        input.consume();
            	    }
            	    else {
            	        MismatchedSetException mse = new MismatchedSetException(null,input);
            	        recover(mse);
            	        throw mse;
            	    }


            	    }
            	    break;

            	default :
            	    if ( cnt2 >= 1 ) break loop2;
                        EarlyExitException eee =
                            new EarlyExitException(2, input);
                        throw eee;
                }
                cnt2++;
            } while (true);


            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "INT"

    // $ANTLR start "FLOAT"
    public final void mFLOAT() throws RecognitionException {
        try {
            int _type = FLOAT;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:55:5: ( ( '0' .. '9' )+ '.' ( '0' .. '9' )* ( EXPONENT )? | '.' ( '0' .. '9' )+ ( EXPONENT )? | ( '0' .. '9' )+ EXPONENT )
            int alt9=3;
            alt9 = dfa9.predict(input);
            switch (alt9) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:55:9: ( '0' .. '9' )+ '.' ( '0' .. '9' )* ( EXPONENT )?
                    {
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:55:9: ( '0' .. '9' )+
                    int cnt3=0;
                    loop3:
                    do {
                        int alt3=2;
                        int LA3_0 = input.LA(1);

                        if ( ((LA3_0 >= '0' && LA3_0 <= '9')) ) {
                            alt3=1;
                        }


                        switch (alt3) {
                    	case 1 :
                    	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
                    	    {
                    	    if ( (input.LA(1) >= '0' && input.LA(1) <= '9') ) {
                    	        input.consume();
                    	    }
                    	    else {
                    	        MismatchedSetException mse = new MismatchedSetException(null,input);
                    	        recover(mse);
                    	        throw mse;
                    	    }


                    	    }
                    	    break;

                    	default :
                    	    if ( cnt3 >= 1 ) break loop3;
                                EarlyExitException eee =
                                    new EarlyExitException(3, input);
                                throw eee;
                        }
                        cnt3++;
                    } while (true);


                    match('.'); 

                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:55:25: ( '0' .. '9' )*
                    loop4:
                    do {
                        int alt4=2;
                        int LA4_0 = input.LA(1);

                        if ( ((LA4_0 >= '0' && LA4_0 <= '9')) ) {
                            alt4=1;
                        }


                        switch (alt4) {
                    	case 1 :
                    	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
                    	    {
                    	    if ( (input.LA(1) >= '0' && input.LA(1) <= '9') ) {
                    	        input.consume();
                    	    }
                    	    else {
                    	        MismatchedSetException mse = new MismatchedSetException(null,input);
                    	        recover(mse);
                    	        throw mse;
                    	    }


                    	    }
                    	    break;

                    	default :
                    	    break loop4;
                        }
                    } while (true);


                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:55:37: ( EXPONENT )?
                    int alt5=2;
                    int LA5_0 = input.LA(1);

                    if ( (LA5_0=='E'||LA5_0=='e') ) {
                        alt5=1;
                    }
                    switch (alt5) {
                        case 1 :
                            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:55:37: EXPONENT
                            {
                            mEXPONENT(); 


                            }
                            break;

                    }


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:56:9: '.' ( '0' .. '9' )+ ( EXPONENT )?
                    {
                    match('.'); 

                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:56:13: ( '0' .. '9' )+
                    int cnt6=0;
                    loop6:
                    do {
                        int alt6=2;
                        int LA6_0 = input.LA(1);

                        if ( ((LA6_0 >= '0' && LA6_0 <= '9')) ) {
                            alt6=1;
                        }


                        switch (alt6) {
                    	case 1 :
                    	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
                    	    {
                    	    if ( (input.LA(1) >= '0' && input.LA(1) <= '9') ) {
                    	        input.consume();
                    	    }
                    	    else {
                    	        MismatchedSetException mse = new MismatchedSetException(null,input);
                    	        recover(mse);
                    	        throw mse;
                    	    }


                    	    }
                    	    break;

                    	default :
                    	    if ( cnt6 >= 1 ) break loop6;
                                EarlyExitException eee =
                                    new EarlyExitException(6, input);
                                throw eee;
                        }
                        cnt6++;
                    } while (true);


                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:56:25: ( EXPONENT )?
                    int alt7=2;
                    int LA7_0 = input.LA(1);

                    if ( (LA7_0=='E'||LA7_0=='e') ) {
                        alt7=1;
                    }
                    switch (alt7) {
                        case 1 :
                            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:56:25: EXPONENT
                            {
                            mEXPONENT(); 


                            }
                            break;

                    }


                    }
                    break;
                case 3 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:57:9: ( '0' .. '9' )+ EXPONENT
                    {
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:57:9: ( '0' .. '9' )+
                    int cnt8=0;
                    loop8:
                    do {
                        int alt8=2;
                        int LA8_0 = input.LA(1);

                        if ( ((LA8_0 >= '0' && LA8_0 <= '9')) ) {
                            alt8=1;
                        }


                        switch (alt8) {
                    	case 1 :
                    	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
                    	    {
                    	    if ( (input.LA(1) >= '0' && input.LA(1) <= '9') ) {
                    	        input.consume();
                    	    }
                    	    else {
                    	        MismatchedSetException mse = new MismatchedSetException(null,input);
                    	        recover(mse);
                    	        throw mse;
                    	    }


                    	    }
                    	    break;

                    	default :
                    	    if ( cnt8 >= 1 ) break loop8;
                                EarlyExitException eee =
                                    new EarlyExitException(8, input);
                                throw eee;
                        }
                        cnt8++;
                    } while (true);


                    mEXPONENT(); 


                    }
                    break;

            }
            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "FLOAT"

    // $ANTLR start "WS"
    public final void mWS() throws RecognitionException {
        try {
            int _type = WS;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:60:5: ( ( ' ' | '\\t' | '\\r' | '\\n' ) )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:60:9: ( ' ' | '\\t' | '\\r' | '\\n' )
            {
            if ( (input.LA(1) >= '\t' && input.LA(1) <= '\n')||input.LA(1)=='\r'||input.LA(1)==' ' ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            _channel=HIDDEN;

            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "WS"

    // $ANTLR start "StringLiteral"
    public final void mStringLiteral() throws RecognitionException {
        try {
            int _type = StringLiteral;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:70:2: ( '\"' ( DoubleStringCharacter )* '\"' | '\\'' ( SingleStringCharacter )* '\\'' )
            int alt12=2;
            int LA12_0 = input.LA(1);

            if ( (LA12_0=='\"') ) {
                alt12=1;
            }
            else if ( (LA12_0=='\'') ) {
                alt12=2;
            }
            else {
                NoViableAltException nvae =
                    new NoViableAltException("", 12, 0, input);

                throw nvae;

            }
            switch (alt12) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:70:4: '\"' ( DoubleStringCharacter )* '\"'
                    {
                    match('\"'); 

                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:70:8: ( DoubleStringCharacter )*
                    loop10:
                    do {
                        int alt10=2;
                        int LA10_0 = input.LA(1);

                        if ( ((LA10_0 >= '\u0000' && LA10_0 <= '!')||(LA10_0 >= '#' && LA10_0 <= '\uFFFF')) ) {
                            alt10=1;
                        }


                        switch (alt10) {
                    	case 1 :
                    	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:70:8: DoubleStringCharacter
                    	    {
                    	    mDoubleStringCharacter(); 


                    	    }
                    	    break;

                    	default :
                    	    break loop10;
                        }
                    } while (true);


                    match('\"'); 

                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:71:4: '\\'' ( SingleStringCharacter )* '\\''
                    {
                    match('\''); 

                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:71:9: ( SingleStringCharacter )*
                    loop11:
                    do {
                        int alt11=2;
                        int LA11_0 = input.LA(1);

                        if ( ((LA11_0 >= '\u0000' && LA11_0 <= '&')||(LA11_0 >= '(' && LA11_0 <= '\uFFFF')) ) {
                            alt11=1;
                        }


                        switch (alt11) {
                    	case 1 :
                    	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:71:9: SingleStringCharacter
                    	    {
                    	    mSingleStringCharacter(); 


                    	    }
                    	    break;

                    	default :
                    	    break loop11;
                        }
                    } while (true);


                    match('\''); 

                    }
                    break;

            }
            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "StringLiteral"

    // $ANTLR start "DoubleStringCharacter"
    public final void mDoubleStringCharacter() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:75:2: (~ ( '\"' | '\\\\' ) | '\\\\' EscapeSequence )
            int alt13=2;
            int LA13_0 = input.LA(1);

            if ( ((LA13_0 >= '\u0000' && LA13_0 <= '!')||(LA13_0 >= '#' && LA13_0 <= '[')||(LA13_0 >= ']' && LA13_0 <= '\uFFFF')) ) {
                alt13=1;
            }
            else if ( (LA13_0=='\\') ) {
                alt13=2;
            }
            else {
                NoViableAltException nvae =
                    new NoViableAltException("", 13, 0, input);

                throw nvae;

            }
            switch (alt13) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:75:4: ~ ( '\"' | '\\\\' )
                    {
                    if ( (input.LA(1) >= '\u0000' && input.LA(1) <= '!')||(input.LA(1) >= '#' && input.LA(1) <= '[')||(input.LA(1) >= ']' && input.LA(1) <= '\uFFFF') ) {
                        input.consume();
                    }
                    else {
                        MismatchedSetException mse = new MismatchedSetException(null,input);
                        recover(mse);
                        throw mse;
                    }


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:76:4: '\\\\' EscapeSequence
                    {
                    match('\\'); 

                    mEscapeSequence(); 


                    }
                    break;

            }

        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "DoubleStringCharacter"

    // $ANTLR start "SingleStringCharacter"
    public final void mSingleStringCharacter() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:80:2: (~ ( '\\'' | '\\\\' ) | '\\\\' EscapeSequence )
            int alt14=2;
            int LA14_0 = input.LA(1);

            if ( ((LA14_0 >= '\u0000' && LA14_0 <= '&')||(LA14_0 >= '(' && LA14_0 <= '[')||(LA14_0 >= ']' && LA14_0 <= '\uFFFF')) ) {
                alt14=1;
            }
            else if ( (LA14_0=='\\') ) {
                alt14=2;
            }
            else {
                NoViableAltException nvae =
                    new NoViableAltException("", 14, 0, input);

                throw nvae;

            }
            switch (alt14) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:80:4: ~ ( '\\'' | '\\\\' )
                    {
                    if ( (input.LA(1) >= '\u0000' && input.LA(1) <= '&')||(input.LA(1) >= '(' && input.LA(1) <= '[')||(input.LA(1) >= ']' && input.LA(1) <= '\uFFFF') ) {
                        input.consume();
                    }
                    else {
                        MismatchedSetException mse = new MismatchedSetException(null,input);
                        recover(mse);
                        throw mse;
                    }


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:81:4: '\\\\' EscapeSequence
                    {
                    match('\\'); 

                    mEscapeSequence(); 


                    }
                    break;

            }

        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "SingleStringCharacter"

    // $ANTLR start "EscapeSequence"
    public final void mEscapeSequence() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:85:2: ( CharacterEscapeSequence | '0' | HexEscapeSequence | UnicodeEscapeSequence )
            int alt15=4;
            int LA15_0 = input.LA(1);

            if ( ((LA15_0 >= '\u0000' && LA15_0 <= '/')||(LA15_0 >= ':' && LA15_0 <= 't')||(LA15_0 >= 'v' && LA15_0 <= 'w')||(LA15_0 >= 'y' && LA15_0 <= '\uFFFF')) ) {
                alt15=1;
            }
            else if ( (LA15_0=='0') ) {
                alt15=2;
            }
            else if ( (LA15_0=='x') ) {
                alt15=3;
            }
            else if ( (LA15_0=='u') ) {
                alt15=4;
            }
            else {
                NoViableAltException nvae =
                    new NoViableAltException("", 15, 0, input);

                throw nvae;

            }
            switch (alt15) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:85:4: CharacterEscapeSequence
                    {
                    mCharacterEscapeSequence(); 


                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:86:4: '0'
                    {
                    match('0'); 

                    }
                    break;
                case 3 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:87:4: HexEscapeSequence
                    {
                    mHexEscapeSequence(); 


                    }
                    break;
                case 4 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:88:4: UnicodeEscapeSequence
                    {
                    mUnicodeEscapeSequence(); 


                    }
                    break;

            }

        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "EscapeSequence"

    // $ANTLR start "CharacterEscapeSequence"
    public final void mCharacterEscapeSequence() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:92:2: ( SingleEscapeCharacter | NonEscapeCharacter )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            {
            if ( (input.LA(1) >= '\u0000' && input.LA(1) <= '/')||(input.LA(1) >= ':' && input.LA(1) <= 't')||(input.LA(1) >= 'v' && input.LA(1) <= 'w')||(input.LA(1) >= 'y' && input.LA(1) <= '\uFFFF') ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            }


        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "CharacterEscapeSequence"

    // $ANTLR start "NonEscapeCharacter"
    public final void mNonEscapeCharacter() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:97:2: (~ ( EscapeCharacter ) )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            {
            if ( (input.LA(1) >= '\u0000' && input.LA(1) <= '!')||(input.LA(1) >= '#' && input.LA(1) <= '&')||(input.LA(1) >= '(' && input.LA(1) <= '/')||(input.LA(1) >= ':' && input.LA(1) <= '[')||(input.LA(1) >= ']' && input.LA(1) <= 'a')||(input.LA(1) >= 'c' && input.LA(1) <= 'e')||(input.LA(1) >= 'g' && input.LA(1) <= 'm')||(input.LA(1) >= 'o' && input.LA(1) <= 'q')||input.LA(1)=='s'||input.LA(1)=='w'||(input.LA(1) >= 'y' && input.LA(1) <= '\uFFFF') ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            }


        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "NonEscapeCharacter"

    // $ANTLR start "SingleEscapeCharacter"
    public final void mSingleEscapeCharacter() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:101:2: ( '\\'' | '\"' | '\\\\' | 'b' | 'f' | 'n' | 'r' | 't' | 'v' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            {
            if ( input.LA(1)=='\"'||input.LA(1)=='\''||input.LA(1)=='\\'||input.LA(1)=='b'||input.LA(1)=='f'||input.LA(1)=='n'||input.LA(1)=='r'||input.LA(1)=='t'||input.LA(1)=='v' ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            }


        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "SingleEscapeCharacter"

    // $ANTLR start "EscapeCharacter"
    public final void mEscapeCharacter() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:105:2: ( SingleEscapeCharacter | '0' .. '9' | 'x' | 'u' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            {
            if ( input.LA(1)=='\"'||input.LA(1)=='\''||(input.LA(1) >= '0' && input.LA(1) <= '9')||input.LA(1)=='\\'||input.LA(1)=='b'||input.LA(1)=='f'||input.LA(1)=='n'||input.LA(1)=='r'||(input.LA(1) >= 't' && input.LA(1) <= 'v')||input.LA(1)=='x' ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            }


        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "EscapeCharacter"

    // $ANTLR start "HexEscapeSequence"
    public final void mHexEscapeSequence() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:112:2: ( 'x' HEX_DIGIT HEX_DIGIT )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:112:4: 'x' HEX_DIGIT HEX_DIGIT
            {
            match('x'); 

            mHEX_DIGIT(); 


            mHEX_DIGIT(); 


            }


        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "HexEscapeSequence"

    // $ANTLR start "UnicodeEscapeSequence"
    public final void mUnicodeEscapeSequence() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:116:2: ( 'u' HEX_DIGIT HEX_DIGIT HEX_DIGIT HEX_DIGIT )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:116:4: 'u' HEX_DIGIT HEX_DIGIT HEX_DIGIT HEX_DIGIT
            {
            match('u'); 

            mHEX_DIGIT(); 


            mHEX_DIGIT(); 


            mHEX_DIGIT(); 


            mHEX_DIGIT(); 


            }


        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "UnicodeEscapeSequence"

    // $ANTLR start "EXPONENT"
    public final void mEXPONENT() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:121:10: ( ( 'e' | 'E' ) ( '+' | '-' )? ( '0' .. '9' )+ )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:121:12: ( 'e' | 'E' ) ( '+' | '-' )? ( '0' .. '9' )+
            {
            if ( input.LA(1)=='E'||input.LA(1)=='e' ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:121:22: ( '+' | '-' )?
            int alt16=2;
            int LA16_0 = input.LA(1);

            if ( (LA16_0=='+'||LA16_0=='-') ) {
                alt16=1;
            }
            switch (alt16) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
                    {
                    if ( input.LA(1)=='+'||input.LA(1)=='-' ) {
                        input.consume();
                    }
                    else {
                        MismatchedSetException mse = new MismatchedSetException(null,input);
                        recover(mse);
                        throw mse;
                    }


                    }
                    break;

            }


            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:121:33: ( '0' .. '9' )+
            int cnt17=0;
            loop17:
            do {
                int alt17=2;
                int LA17_0 = input.LA(1);

                if ( ((LA17_0 >= '0' && LA17_0 <= '9')) ) {
                    alt17=1;
                }


                switch (alt17) {
            	case 1 :
            	    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            	    {
            	    if ( (input.LA(1) >= '0' && input.LA(1) <= '9') ) {
            	        input.consume();
            	    }
            	    else {
            	        MismatchedSetException mse = new MismatchedSetException(null,input);
            	        recover(mse);
            	        throw mse;
            	    }


            	    }
            	    break;

            	default :
            	    if ( cnt17 >= 1 ) break loop17;
                        EarlyExitException eee =
                            new EarlyExitException(17, input);
                        throw eee;
                }
                cnt17++;
            } while (true);


            }


        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "EXPONENT"

    // $ANTLR start "HEX_DIGIT"
    public final void mHEX_DIGIT() throws RecognitionException {
        try {
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:124:11: ( ( '0' .. '9' | 'a' .. 'f' | 'A' .. 'F' ) )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            {
            if ( (input.LA(1) >= '0' && input.LA(1) <= '9')||(input.LA(1) >= 'A' && input.LA(1) <= 'F')||(input.LA(1) >= 'a' && input.LA(1) <= 'f') ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            }


        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "HEX_DIGIT"

    // $ANTLR start "PATH_SEP"
    public final void mPATH_SEP() throws RecognitionException {
        try {
            int _type = PATH_SEP;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:125:9: ( '.' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:125:11: '.'
            {
            match('.'); 

            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "PATH_SEP"

    // $ANTLR start "NUMBER_OP"
    public final void mNUMBER_OP() throws RecognitionException {
        try {
            int _type = NUMBER_OP;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:128:2: ( '+' | '-' | '/' | '*' | '%' )
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:
            {
            if ( input.LA(1)=='%'||(input.LA(1) >= '*' && input.LA(1) <= '+')||input.LA(1)=='-'||input.LA(1)=='/' ) {
                input.consume();
            }
            else {
                MismatchedSetException mse = new MismatchedSetException(null,input);
                recover(mse);
                throw mse;
            }


            }

            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "NUMBER_OP"

    // $ANTLR start "BOOLEAN_OP"
    public final void mBOOLEAN_OP() throws RecognitionException {
        try {
            int _type = BOOLEAN_OP;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:131:2: ( '&&' | '||' )
            int alt18=2;
            int LA18_0 = input.LA(1);

            if ( (LA18_0=='&') ) {
                alt18=1;
            }
            else if ( (LA18_0=='|') ) {
                alt18=2;
            }
            else {
                NoViableAltException nvae =
                    new NoViableAltException("", 18, 0, input);

                throw nvae;

            }
            switch (alt18) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:131:4: '&&'
                    {
                    match("&&"); 



                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:131:11: '||'
                    {
                    match("||"); 



                    }
                    break;

            }
            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "BOOLEAN_OP"

    // $ANTLR start "COMP_OP"
    public final void mCOMP_OP() throws RecognitionException {
        try {
            int _type = COMP_OP;
            int _channel = DEFAULT_TOKEN_CHANNEL;
            // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:133:9: ( '==' | '!=' | '<=' | '>=' | '<' | '>' )
            int alt19=6;
            switch ( input.LA(1) ) {
            case '=':
                {
                alt19=1;
                }
                break;
            case '!':
                {
                alt19=2;
                }
                break;
            case '<':
                {
                int LA19_3 = input.LA(2);

                if ( (LA19_3=='=') ) {
                    alt19=3;
                }
                else {
                    alt19=5;
                }
                }
                break;
            case '>':
                {
                int LA19_4 = input.LA(2);

                if ( (LA19_4=='=') ) {
                    alt19=4;
                }
                else {
                    alt19=6;
                }
                }
                break;
            default:
                NoViableAltException nvae =
                    new NoViableAltException("", 19, 0, input);

                throw nvae;

            }

            switch (alt19) {
                case 1 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:133:11: '=='
                    {
                    match("=="); 



                    }
                    break;
                case 2 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:133:18: '!='
                    {
                    match("!="); 



                    }
                    break;
                case 3 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:133:25: '<='
                    {
                    match("<="); 



                    }
                    break;
                case 4 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:133:32: '>='
                    {
                    match(">="); 



                    }
                    break;
                case 5 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:133:39: '<'
                    {
                    match('<'); 

                    }
                    break;
                case 6 :
                    // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:133:45: '>'
                    {
                    match('>'); 

                    }
                    break;

            }
            state.type = _type;
            state.channel = _channel;
        }
        finally {
        	// do for sure before leaving
        }
    }
    // $ANTLR end "COMP_OP"

    public void mTokens() throws RecognitionException {
        // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:8: ( T__24 | T__25 | T__26 | T__27 | T__28 | ID | INT | FLOAT | WS | StringLiteral | PATH_SEP | NUMBER_OP | BOOLEAN_OP | COMP_OP )
        int alt20=14;
        alt20 = dfa20.predict(input);
        switch (alt20) {
            case 1 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:10: T__24
                {
                mT__24(); 


                }
                break;
            case 2 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:16: T__25
                {
                mT__25(); 


                }
                break;
            case 3 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:22: T__26
                {
                mT__26(); 


                }
                break;
            case 4 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:28: T__27
                {
                mT__27(); 


                }
                break;
            case 5 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:34: T__28
                {
                mT__28(); 


                }
                break;
            case 6 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:40: ID
                {
                mID(); 


                }
                break;
            case 7 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:43: INT
                {
                mINT(); 


                }
                break;
            case 8 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:47: FLOAT
                {
                mFLOAT(); 


                }
                break;
            case 9 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:53: WS
                {
                mWS(); 


                }
                break;
            case 10 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:56: StringLiteral
                {
                mStringLiteral(); 


                }
                break;
            case 11 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:70: PATH_SEP
                {
                mPATH_SEP(); 


                }
                break;
            case 12 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:79: NUMBER_OP
                {
                mNUMBER_OP(); 


                }
                break;
            case 13 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:89: BOOLEAN_OP
                {
                mBOOLEAN_OP(); 


                }
                break;
            case 14 :
                // /Volumes/Data/Users/hlubek/Dev/FLOW3/FLOW3/Packages/Application/Eel/Resources/Private/Grammar/Eel.g:1:100: COMP_OP
                {
                mCOMP_OP(); 


                }
                break;

        }

    }


    protected DFA9 dfa9 = new DFA9(this);
    protected DFA20 dfa20 = new DFA20(this);
    static final String DFA9_eotS =
        "\5\uffff";
    static final String DFA9_eofS =
        "\5\uffff";
    static final String DFA9_minS =
        "\2\56\3\uffff";
    static final String DFA9_maxS =
        "\1\71\1\145\3\uffff";
    static final String DFA9_acceptS =
        "\2\uffff\1\2\1\1\1\3";
    static final String DFA9_specialS =
        "\5\uffff}>";
    static final String[] DFA9_transitionS = {
            "\1\2\1\uffff\12\1",
            "\1\3\1\uffff\12\1\13\uffff\1\4\37\uffff\1\4",
            "",
            "",
            ""
    };

    static final short[] DFA9_eot = DFA.unpackEncodedString(DFA9_eotS);
    static final short[] DFA9_eof = DFA.unpackEncodedString(DFA9_eofS);
    static final char[] DFA9_min = DFA.unpackEncodedStringToUnsignedChars(DFA9_minS);
    static final char[] DFA9_max = DFA.unpackEncodedStringToUnsignedChars(DFA9_maxS);
    static final short[] DFA9_accept = DFA.unpackEncodedString(DFA9_acceptS);
    static final short[] DFA9_special = DFA.unpackEncodedString(DFA9_specialS);
    static final short[][] DFA9_transition;

    static {
        int numStates = DFA9_transitionS.length;
        DFA9_transition = new short[numStates][];
        for (int i=0; i<numStates; i++) {
            DFA9_transition[i] = DFA.unpackEncodedString(DFA9_transitionS[i]);
        }
    }

    class DFA9 extends DFA {

        public DFA9(BaseRecognizer recognizer) {
            this.recognizer = recognizer;
            this.decisionNumber = 9;
            this.eot = DFA9_eot;
            this.eof = DFA9_eof;
            this.min = DFA9_min;
            this.max = DFA9_max;
            this.accept = DFA9_accept;
            this.special = DFA9_special;
            this.transition = DFA9_transition;
        }
        public String getDescription() {
            return "54:1: FLOAT : ( ( '0' .. '9' )+ '.' ( '0' .. '9' )* ( EXPONENT )? | '.' ( '0' .. '9' )+ ( EXPONENT )? | ( '0' .. '9' )+ EXPONENT );";
        }
    }
    static final String DFA20_eotS =
        "\1\uffff\1\16\5\uffff\1\17\1\21\11\uffff";
    static final String DFA20_eofS =
        "\22\uffff";
    static final String DFA20_minS =
        "\1\11\1\75\5\uffff\1\56\1\60\11\uffff";
    static final String DFA20_maxS =
        "\1\174\1\75\5\uffff\1\145\1\71\11\uffff";
    static final String DFA20_acceptS =
        "\2\uffff\1\2\1\3\1\4\1\5\1\6\2\uffff\1\11\1\12\1\14\1\15\1\16\1"+
        "\1\1\7\1\10\1\13";
    static final String DFA20_specialS =
        "\22\uffff}>";
    static final String[] DFA20_transitionS = {
            "\2\11\2\uffff\1\11\22\uffff\1\11\1\1\1\12\2\uffff\1\13\1\14"+
            "\1\12\1\2\1\3\2\13\1\4\1\13\1\10\1\13\12\7\1\5\1\uffff\3\15"+
            "\2\uffff\32\6\4\uffff\1\6\1\uffff\32\6\1\uffff\1\14",
            "\1\15",
            "",
            "",
            "",
            "",
            "",
            "\1\20\1\uffff\12\7\13\uffff\1\20\37\uffff\1\20",
            "\12\20",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            ""
    };

    static final short[] DFA20_eot = DFA.unpackEncodedString(DFA20_eotS);
    static final short[] DFA20_eof = DFA.unpackEncodedString(DFA20_eofS);
    static final char[] DFA20_min = DFA.unpackEncodedStringToUnsignedChars(DFA20_minS);
    static final char[] DFA20_max = DFA.unpackEncodedStringToUnsignedChars(DFA20_maxS);
    static final short[] DFA20_accept = DFA.unpackEncodedString(DFA20_acceptS);
    static final short[] DFA20_special = DFA.unpackEncodedString(DFA20_specialS);
    static final short[][] DFA20_transition;

    static {
        int numStates = DFA20_transitionS.length;
        DFA20_transition = new short[numStates][];
        for (int i=0; i<numStates; i++) {
            DFA20_transition[i] = DFA.unpackEncodedString(DFA20_transitionS[i]);
        }
    }

    class DFA20 extends DFA {

        public DFA20(BaseRecognizer recognizer) {
            this.recognizer = recognizer;
            this.decisionNumber = 20;
            this.eot = DFA20_eot;
            this.eof = DFA20_eof;
            this.min = DFA20_min;
            this.max = DFA20_max;
            this.accept = DFA20_accept;
            this.special = DFA20_special;
            this.transition = DFA20_transition;
        }
        public String getDescription() {
            return "1:1: Tokens : ( T__24 | T__25 | T__26 | T__27 | T__28 | ID | INT | FLOAT | WS | StringLiteral | PATH_SEP | NUMBER_OP | BOOLEAN_OP | COMP_OP );";
        }
    }
 

}