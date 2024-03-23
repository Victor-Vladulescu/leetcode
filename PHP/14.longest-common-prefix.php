<?php
/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        
        // make sure there are no duplicates
        $strs = array_unique($strs);

        // find the smallest string
        $smallest = $strs[0];

        foreach ($strs as $current) {
            if (strlen($current) < strlen($smallest)) {
                $smallest = $current;
            }
        }

        // find the longest prefix
        $prefix = "";
        for ($i = 0; $i < strlen($smallest); $i++) {
            foreach ($strs as $current) {
                if ($current[$i] != $smallest[$i]) {
                    $i = strlen($smallest);
                    break;
                }
            }

            $prefix = "{$prefix}{$smallest[$i]}";
        }

        return $prefix;
    }
}
// @lc code=end
?>