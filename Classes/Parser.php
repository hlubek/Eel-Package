<?php
namespace Eel;

class Parser {

	/**
	 *
	 * @param string $input
	 * @return mixed
	 */
	public function parse($input) {
		// FIXME Bad include
		require_once(__DIR__ . '/../Resources/Private/PHP/Antlr/antlr.php');

		require_once(__DIR__ . '/../Resources/Private/PHP/EelLexer.php');
		require_once(__DIR__ . '/../Resources/Private/PHP/EelParser.php');

		$input = new \ANTLRStringStream($input);
		$lexer = new \EelLexer($input);

		$tokens = new \CommonTokenStream($lexer);

		\TYPO3\FLOW3\var_dump($tokens->getTokens(), 'Tokens');

		$parser = new \EelParser($tokens);
		$parser->fullExpression();
	}

}
?>