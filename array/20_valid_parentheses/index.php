<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($string) {
        $length = strlen($string);
        if ($length % 2 !== 0) {
            return false;
        }

        $pairs = [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];

        $stack = [];

        for ($i = 0; $i < $length; $i++) {
            $character = $string[$i];

            if (array_key_exists($character, $pairs)) {
                if (empty($stack) || array_pop($stack) !== $pairs[$character]) {
                    return false;
                }
            } else {
                $stack[] = $character;
            }
        }

        return empty($stack);
    }
}