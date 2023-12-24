<?php
// 编写一个函数来查找字符串数组中的最长公共前缀。
// 如果不存在公共前缀，返回空字符串 ""。
// 示例 1：
// 输入：strs = ["flower","flow","flight"]
// 输出："fl"
// 示例 2：
// 输入：strs = ["dog","racecar","car"]
// 输出：""
// 解释：输入不存在公共前缀。
// 提示：
// 1 <= strs.length <= 200
// 0 <= strs[i].length <= 200
// strs[i] 仅由小写英文字母组成
// 解題思路
/**
 * 1.先確認陣列中有幾個單字。
 * 2.確認每個單字長度。
 * 3.確認每個單字的第一個字母是否相同。
 * 4.如果相同就繼續比對下一個字母。
 * 5.如果不相同就回傳空字串。
 */
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        /**
         * 會用到的工具
         * 陣列有多少數值 count()
         * 
         */
    }
}