<?php

/**
 *给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串 s ，判断字符串是否有效。
 *有效字符串需满足：
 *左括号必须用相同类型的右括号闭合。
 *左括号必须以正确的顺序闭合。
 *每个右括号都有一个对应的相同类型的左括号。
 
 *示例 1：

 *输入：s = "()"
 *输出：true
 *示例 2：

 *输入：s = "()[]{}"
 *输出：true
 *示例 3：

 *输入：s = "(]"
 *输出：false
 

 *提示：

 *1 <= s.length <= 104
 *s 仅由括号 '()[]{}' 组成
 */
// 解題思路
// 1.先確認括號的數量是否為偶數，如果不是偶數一定錯。
// strleng()可以計算字串長度。
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        if (strlen($s) % 2 != 0) {
            return false;
        }
        // 辨別括號位置是否正確。
        // 只要位置1,3,5,7，或是2,4,6,8
            $s = str_replace("(","", $s);
            $s = str_replace(")","",$s);
            if (strlen($s) % 2 != 0) {
                return false;
            }
            $s = str_replace("[","", $s);
            $s = str_replace("]","",$s);
            if (strlen($s) % 2 != 0) {
                return false;
            }
            $s = str_replace("{","", $s);
            $s = str_replace("}","",$s);
            if (strlen($s) % 2 != 0) {
                return false;
            }
        if ($s == "") {
            return true;
        }
    }
}
$a= new Solution;
echo $a->isValid("()"); 