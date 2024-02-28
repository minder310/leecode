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
        }
        
        
        
        
        
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
echo $solution->mySqrt(4); //2
echo $solution->mySqrt(8); //2
