<?php
/*
 * @lc app=leetcode id=27 lang=php
 *
 * [27] Remove Element
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $rep = 0;
        
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] != $val) {
                $nums[$rep] = $nums[$i];
                $rep++;
            }
        }

        return $rep;
    }
}
// @lc code=end
?>