<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_input_oneWord()
        {
        //Arrange
        $test_CountRepeat = new CountRepeat;
        $input = 'apple';
        //Act
        $result = $test_CountRepeat->oneWord($input);
        //Assert
        $this->assertEquals("apple", $result);
        }
        function test_input_multipleWords()
        {
        //Arrange
        $test_CountRepeat = new CountRepeat;
        $input = "apple pie";
        //Act
        $result = $test_CountRepeat->multipleWords($input);
        //Assert
        $this->assertEquals("apple pie", $result);
        }
    }
?>
