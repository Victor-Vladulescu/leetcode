<?php
/*
 * @lc app=leetcode id=80 lang=php
 *
 * [80] Remove Duplicates from Sorted Array II
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {

        // array with one or two elements?
        $temp = count($nums);
        if ($temp < 3) return $temp;

        $last = $nums[0];
        $k = 1;
        $twice = false;
        for ($i = 1; $i < count($nums); $i++) {
        
            if (($nums[$i] == $last) && !$twice) {
                $twice = true;
                $nums[$k] = $nums[$i];
                $k++;
            }
            else if ($nums[$i] != $last) {
                $twice = false;
                $nums[$k] = $nums[$i];
                $k++;
                $last = $nums[$i];
            }
        }

        return $k;
    }
}
// @lc code=end
?>