<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $new_array = array_merge($nums1, $nums2);

        $n = count($new_array);

        if ($n > 2) {
            for ($i = 0; $i < $n - 1; $i++) {
                for($j = 0; $j < $n - $i - 1; $j++) {
                    if ($new_array[$j] > $new_array[$j +1]) {
                        [$new_array[$j], $new_array[$j+1]] = [$new_array[$j+1], $new_array[$j]];
                    }
                }
            }
        }
        $divider = intval($n / 2);
        if($n % 2) {
            return $new_array[$divider];
        } else {
            $total = $new_array[$divider - 1] + $new_array[$divider];

            return $total / 2;
        }
    }
}