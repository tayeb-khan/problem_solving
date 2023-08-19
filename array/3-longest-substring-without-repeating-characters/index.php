<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($string) {
        $length = strlen($string);
        if ($length <= 1) {
            return $length; // Return early for short strings
        }

        $positions = [];
        $maxLength = 0;
        $start = 0;

        for ($i = 0; $i < $length; $i++) {
            $character = $string[$i];

            if (isset($positions[$character]) && $positions[$character] >= $start) {
                $start = $positions[$character] + 1;
            }

            $positions[$character] = $i;
            $currentLength = $i - $start + 1;
            $maxLength = max($maxLength, $currentLength);
        }

        return $maxLength;
    }

}