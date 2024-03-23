<?php
/*
 * @lc app=leetcode id=169 lang=php
 *
 * [169] Majority Element
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        // create map, key = number and value = occurences
        $occurences = array($nums[0] => 1);

        for ($i = 1; $i < count($nums); $i++) {
            $occurences[$nums[$i]]++;
        }

        // don't even sort
        $key = null;
        $max = 0;
        foreach ($occurences as $k => $v) {
            if ($v > $max) {
                $max = $v;
                $key = $k;
            }
        }
        
        return $key;

        // slower by sorting
        // arsort($occurences);
        // return array_keys($occurences)[0];
    }
}
// @lc code=end
?>
