<?php
// 给定一个由 整数 组成的 非空 数组所表示的非负整数，在该数的基础上加一。
// 最高位数字存放在数组的首位， 数组中每个元素只存储单个数字。
// 你可以假设除了整数 0 之外，这个整数不会以零开头。
// 示例 1：
// 输入：digits = [1,2,3]
// 输出：[1,2,4]
// 解释：输入数组表示数字 123。
// 示例 2：
// 输入：digits = [4,3,2,1]
// 输出：[4,3,2,2]
// 解释：输入数组表示数字 4321。
// 示例 3：
// 输入：digits = [0]
// 输出：[1]
// 理解這是一個連續數字只是用陣列表示。
class Solution 
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) 
    {
       $arrlong=count($digits);
         for($i=$arrlong-1;$i>=0;$i--)
         {
              if($digits[$i]==9)
              {
                if($i==0)
                // 如果$i=0，表示這個數字是9，所以要進位
                {
                    $digits[$i]=0;
                    array_unshift($digits,1);
                    // array_unshift() 函式用於在陣列開頭插入一個或多個元素。
                    return $digits;
                }
                $digits[$i]=0;
                
              }
              else
              {
                $digits[$i]++;
                return $digits;
              }
         }
        
    }
}
$a=new Solution();
print_r( $a->plusOne([1,2,3]));
echo "<br>";
print_r($a->plusOne([4,3,2,1]));
echo "<br>";
print_r($a->plusOne([0]));
echo "<br>";
print_r($a->plusOne([9]));
echo "<br>";
print_r($a->plusOne([1,0]));