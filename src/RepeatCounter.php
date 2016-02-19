<?php

class CountRepeat
  {
      function oneWord($input)
      {
        return $input;
      }
      function multipleWords($input)
      {
          return $input;
      }
      function findWord($input_sentence, $input_word)
      {
          $explode_words = explode(" ", $input_sentence);
          foreach($explode_words as $word) {
              if ($word = $input_word);
          }
              return true;
      }
      function countRepeats($input_word, $input_sentence)
      {
          $lowercase_sentence = strtolower($input_sentence);
          $explode_words = explode(" ", $lowercase_sentence);
          $word_count = 0;
          foreach($explode_words as $word)
          {
            if ($word == $input_word)
                {
                  $word_count += 1;
                }
          }
            return $word_count;
        }
    }

?>
