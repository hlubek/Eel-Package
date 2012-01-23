#!/bin/sh

ANTLR_LIB=Resources/Private/Java
CLASSPATH=$CLASSPATH:$ANTLR_LIB/antlr-3.1.3-php.jar:$ANTLR_LIB/antlr-2.7.7.jar:$ANTLR_LIB/antlr-runtime-3.1.3.jar:$ANTLR_LIB/gunit.jar:$ANTLR_LIB/stringtemplate-3.2.jar 

export CLASSPATH

echo Generating Lexer and Parser
java org.antlr.Tool -fo Resources/Private/PHP Resources/Private/Grammar/Eel.g
