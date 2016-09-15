<?php
    require_once "src/ScrabbleScore.php";
    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_getLetterScore()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $letter = "A";
            //Act
            $output = $test_ScrabbleScore->getLetterScore($letter);
            //Assert
            $this->assertEquals(1, $output);
        }
        function test_getWordScore(){
            $test_getWordScore = new ScrabbleScore;
            $word = "AB";

            $output = $test_getWordScore->getWordScore($word);

            $this->assertEquals(4, $output);
        }
    }
        // export PATH=$PATH:./vendor/bin first and then you will only have to run $ phpunit tests

?>
