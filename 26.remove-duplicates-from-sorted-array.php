<?php
/*
 * @lc app=leetcode id=26 lang=php
 *
 * [26] Remove Duplicates from Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $last = $nums[0];
        $unique = 1;

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] != $last) {
                $nums[$unique] = $nums[$i];
                $last = $nums[$i];
                $unique++;
            }
        }

        return $unique;
    }
}
// @lc code=end
?>