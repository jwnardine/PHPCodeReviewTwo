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
        function test_input_findword()
        {
            //Arrange
            $test_CountRepeat = new CountRepeat;
            $input_word = "apple";
            $input_sentence = "this right here is some good apple pie";

            //Act
            $result = $test_CountRepeat->findWord($input_word, $input_sentence);

            //Assert
            $this->assertEquals(true, $result);
        }
        function test_input_countRepeatsSingleInstance()
        {
            //Arrange
            $test_CountRepeat = new CountRepeat;
            $input_word = "apple";
            $input_sentence = "this right here is some good apple pie";

            //Act
            $result = $test_CountRepeat->countRepeats($input_word, $input_sentence);

            //Assert
            $this->assertEquals(1, $result);
        }
        function test_input_countRepeatsMultipleInstances()
        {
            //Arrange
            $test_CountRepeat = new CountRepeat;
            $input_word = "apple";
            $input_sentence = "the best apple for making apple pie is the granny smith apple";

            //Act
            $result = $test_CountRepeat->countRepeats($input_word, $input_sentence);

            //Assert
            $this->assertEquals(3, $result);
        }
    }
?>
