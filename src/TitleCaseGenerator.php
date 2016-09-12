<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_lower = strtolower($input_title);
            $ignored_words = array("from", "to", "the", "on", "and");
            $input_array_of_words = explode(" ", $input_lower);
            $input_array_of_words[0] = ucfirst($input_array_of_words[0]);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {
                if (!in_array($word, $ignored_words)) {
                    array_push($output_titlecased, ucfirst($word));
                } else {
                    array_push($output_titlecased, $word);
                }
            }
            return implode(" ", $output_titlecased);
        }
    }

?>
