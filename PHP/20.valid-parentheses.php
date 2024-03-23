<?php
/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];

        for ($i = 0; $i < strlen($s); $i++) {

            switch ($s[$i]) {
                case '(':
                case '[':
                case '{':
                    array_push($stack, $s[$i]);
                    break;

                case ')':
                    if (array_pop($stack) != '(') {
                        return false;
                    }
                    break;
                case ']':
                    if (array_pop($stack) != '[') {
                        return false;
                    }
                    break;
                case '}':
                    if (array_pop($stack) != '{') {
                        return false;
                    }
                    break;
            }
        }

        // $stack must be empty at this point
        if (count($stack) != 0) {
            return false;
        }

        return true;
    }
}
// @lc code=end
?>