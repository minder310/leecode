<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $HowLongToArray = count($nums);
        // count()函式用來計算陣列的長度
        for ($i = 0; $i < $HowLongToArray; $i++) 
        {
            $a =array_keys($nums,$target-$nums[$i]);
            print_r($a);
            if(isset($a[0]) && $a[0] != $i)
            {
                return [$i,$a[0]];
            }
        }
    }
}
$a = new Solution();
print_r( $a->twoSum([2, 7, 11, 15], 9));
