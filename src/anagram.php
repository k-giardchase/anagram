<?php
    class Anagram
    {

        function generateAnagram($input_word, $possible_matches)
        {
            $result = array();
            $exploded_possible_matches = array();

            $total_list_items = str_word_count($possible_matches);

            if ( $total_list_items <= 1)
            {
                $split_input = array();
                $split_input = str_split($input_word);
                sort($split_input);

                $split_match = str_split($possible_matches);
                sort($split_match);

                if( $split_input == $split_match)
                {
                    array_push($result, true);
                }
                else {
                    array_push($result, false);
                }

                return $result;

            }

            else {

                $exploded_possible_matches = explode(" ", $possible_matches);
            }


            foreach ($exploded_possible_matches as $one_word_in_match_array)
            {
                $split_input = array();
                $split_match = array();

                $split_input = str_split($input_word);
                sort($split_input);

                $split_match = str_split($one_word_in_match_array);
                sort($split_match);

                    foreach($split_match as $character)
                    {
                        if( $split_input == $split_match)
                        {
                            array_push($result, true);
                        } else {
                            array_push($result, false);
                        }
                    }
                    return $result;
                }


    }

    }



?>
