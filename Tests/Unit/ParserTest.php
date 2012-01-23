<?php
namespace Eel\Tests\Unit;

class ParserTest extends \TYPO3\FLOW3\Tests\UnitTestCase {

	/**
	 * @test
	 */
	public function simpleExpressionCanBeParsed() {
		$parser = new \Eel\Parser();
		$parser->parse('"Test foo"==1');
	}

}
?>