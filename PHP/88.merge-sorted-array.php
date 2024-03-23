<?php
/*
 * @lc app=leetcode id=88 lang=php
 *
 * [88] Merge Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        
        // is the 2nd array empty?
        if ($n == 0) {
            return null;
        }

        $total = array_merge(array_slice($nums1, 0, (int) $m), $nums2);
        sort($total);
        $nums1 = $total;
    }
}
// @lc code=end
?>