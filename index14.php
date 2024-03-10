<?php
// 给你一个非负整数 x ，计算并返回 x 的 算术平方根 。
// 由于返回类型是整数，结果只保留 整数部分 ，小数部分将被 舍去 。
// 注意：不允许使用任何内置指数函数和算符，例如 pow(x, 0.5) 或者 x ** 0.5 。

// 示例 1：
// 输入：x = 4
// 输出：2
// 示例 2：

// 输入：x = 8
// 输出：2
// 解释：8 的算术平方根是 2.82842..., 由于返回类型是整数，小数部分将被舍去。
// 提示：
// 0 <= x <= 231 - 1
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        // -----------------方法二-------------------
        if ($x == 0) {
            return 0;
        }elseif($x==1){
            return 1;
        }
        // 二分法
        // 二分法是一种在有序数组中查找某一特定元素的搜索算法。
        // 搜索过程从数组的中间元素开始，如果中间元素正好是要查找的元素，则搜索过程结束；
        // 如果某一特定元素大于或者小于中间元素，则在数组大于或小于中间元素的那一半中查找，而且跟开始一样从中间元素开始比较。
        // 如果在某一步骤数组为空，则代表找不到。
        // 这种搜索算法每一次比较都使搜索范围缩小一半。
        // 
        $g=1;
        // 第幾次
        $left = 1;
        // 左邊的數，就是計算起始值。
        $right = $x;
        // 右邊的數，就是計算結束值。
        while ($left <= $right) {
            echo "g:".$g++."<br>";
            echo "left:".$left." right:".$right."<br>";
            $mid = $left + floor(($right - $left) / 2);
            // $left + floor(($right - $left) / 2) 
            // $left=變動最小值
            // $right=變動最大值
            // $left+-等於，最大值變小，最小值變大。因為這個值已經用過，所以+-1。
            echo "mid:".$mid."<br>";
            // floor() 函数向下舍入为最接近的整数。
            $sqrt = $mid * $mid;
            if ($sqrt == $x) {
                return $mid;
            } elseif ($sqrt > $x) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
            echo "底left:".$left."底right:".$right."<br>";
        }
        return $right;
        
        
        
        
        
        // -----------------方法一-------------------
        // if ($x == 0) {
        //     return 0;
        // }
        // $ans=sqrt($x);
        // // sqrt() 函数返回一个数的平方根。
        // return floor($ans);
        // //floor() 函数向下舍入为最接近的整数。 
    }
}
$solution = new Solution();
//  echo $solution->mySqrt(4); //2
 echo $solution->mySqrt(8); //2
