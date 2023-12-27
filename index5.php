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
// 2.如果再{[(為一邊，就要確認另一邊是否有對應的括號。
// strleng()可以計算字串長度。
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        // 判別數值宣告。

        // 第一步先確人是不是偶數。
        if (strlen($s) % 2 != 0||strlen($s)==0) {
            return false;
        }
        // 以下是別人解題絲路。我想不出來了。XD
        // 第二步建立一個陣列，並且將括號對應的關係建立起來。 
        $map = [
            ')' => '(',
            ']' => '[',
            '}' => '{',
        ];
        // 第三部建立一個陣列。
        $stack = [];
        // 第四部將字串拆解成陣列，並且進行判斷。strlen()可以計算字串長度。
        for ($i = 0; $i < strlen($s); $i++) {
            // in_array()可以判斷陣列中是否有對應的值。
            if (in_array($s[$i], ['(', '[', '{'])) {
                // array_push()可以將值加入陣列中的最後一頁。
                array_push($stack, $s[$i]);
            } else {
                // 呼叫相對應的括號，如果不相對就是錯誤的。
                // array_pop()，可以提取陣列中最後一個值，並且將其刪除。
                // $map[$s[$i]]，可以呼叫對應的括號，而對應的括號要能對應到正確的最後一個前括號即為正確，如果不是即為錯誤。
                if (array_pop($stack) != $map[$s[$i]]) {
                    return false;
                }
            }
        }
        // 所以最後會變成這列中沒有任何值，即為正確。
        return count($stack) == 0;



        // 第二次解題思路失敗XD
        // 最大的問題是array_search()，的false==數字0，而陣列中也會有0，所以會出現問題。第一個文字都不會被檢查到。
        // 第二步將字串拆除成陣列，並宣告為sarray。
        // $sarray = str_split($s);
        // // 第三部用來檢驗是否有對應符號，或是錯誤符號在其中。
        // $ta = array_search("(", $sarray);
        // echo $ta;
        // if ($ta != false) {
        //     echo "第一層判斷";
        //     if ($sarray[$ta + 1] == "]" || $sarray[$ta + 1] == "}") {
        //         echo "第二層判斷";
        //         return false;
        //     }
        // }
        // $tb = array_search("[", $sarray);
        // echo $tb;
        // if($tb!=false){
        //     echo "第三層判斷";
        //     if ($sarray[$tb + 1] == ")" || $sarray[$tb + 1] == "}") {
        //         echo "第四層判斷";
        //         return false;
        //     }
        // }
        // $tc = array_search("{", $sarray);
        // if($tc!=false){
        //     echo "第五層判斷";
        //     if ($sarray[$tc + 1] == "]" || $sarray[$tc + 1] == ")") {
        //         echo "第六層判斷";
        //         return false;
        //     }
        // }
        // return true;
        // 第一次解題絲路。不正確版本不知如何改進，所以重寫。
        // 辨別括號位置是否正確。
        // 只要位置1,3,5,7，或是2,4,6,8
        //     $s = str_replace("(","", $s);
        //     $s = str_replace(")","",$s);
        //     if (strlen($s) % 2 != 0) {
        //         return false;
        //     }
        //     $s = str_replace("[","", $s);
        //     $s = str_replace("]","",$s);
        //     if (strlen($s) % 2 != 0) {
        //         return false;
        //     }
        //     $s = str_replace("{","", $s);
        //     $s = str_replace("}","",$s);
        //     if (strlen($s) % 2 != 0) {
        //         return false;
        //     }
        // if ($s == "") {
        //     return true;
        // }
    }
}
$a = new Solution;
echo $a->isValid("()");
