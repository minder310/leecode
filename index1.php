<!-- 1. 两数之和 -->
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
            if(isset($a[0]) && $a[0] != $i)
            {
                return [$i,$a[0]];
            }
        }
    }
}
/**
 * 1.先取得陣列長度
 * 2.使用for迴圈來跑陣列
 * 3.使用array_keys()函式來取得陣列中指定值的索引
 * 4.使用isset()函式來判斷陣列中是否有指定值
 * 5.使用return來回傳陣列
 * 整體來說是使用單迴圈，然後家array_keys()來確定陣列中是否有指定值。
 */

