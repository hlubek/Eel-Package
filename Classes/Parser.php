<?php
namespace Eel;

class Parser {

	/**
	 *
	 * @param string $input
	 * @return mixed
	 */
	public function parse($input) {
		require_once(__DIR__ . '/../Resources/Private/PHP/EelLexer.php');
		require_once(__DIR__ . '/../Resources/Private/PHP/EelParser.php');

		$input = new \Antlr\Runtime\ANTLRStringStream($input);
		$lexer = new \EelLexer($input);

		$tokens = new \Antlr\Runtime\CommonTokenStream($lexer);

		foreach ($tokens->getTokens() as $token) {
			var_dump((string)$token);
		}

		$parser = new \EelParser($tokens);
		$parser->fullExpression();
	}

}
?>