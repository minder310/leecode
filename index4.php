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
/**
 * 思考邏輯，要先將例外狀況先排除，不然會出現錯誤。
 * 哪邊會死要先想出來這樣才可以避免走進死胡同。
 * 
 */
class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        /**
         * 會用到的工具
         * 陣列有多少數值 count()
         * 
         */
        if($strs[0] === ""){
            return "";
        }elseif(count($strs) == 1){
            return $strs[0];
        }
        // 陣列長度。
        $count = count($strs);
        // 第一個單字長度。
        $allstr = "";
        $ansstr="";
        // 這個要宣告在外面，不然每次for迴圈重跑，都會被重製。 
        $strnum = mb_strlen($strs[0]);
        for ($j = 0; $j < $strnum; $j++) {
            // 第一個單字的第一個字母。
            $strs[0][$j];
            // 要先先宣告他為字串，才能夠使用。
            $allstr .= $strs[0][$j];
            // 將字串一個一個加進去，信行比對。
            $ans = 0;
            for ($i = 0; $i < $count; $i++) {
                if (substr($strs[$i], 0, $j + 1) != $allstr) {
                    // 如果不相同就回傳空字串。
                    if ($ans == 0) {
                        return "";
                    } elseif ($ans > 0) {
                        return $ansstr;
                    }
                } else {
                    // 如果相同就繼續比對下一個字母。
                    $ans++;
                }
                if($ans == $count){
                     $ansstr=$allstr;
                }
            }
        }
        return $ansstr;
    }
}

$srtr8 = ["a","a","b"];
$test = new Solution();
echo $test->longestCommonPrefix($srtr8);
echo "<br>";

//  自己的解題思路過了但效率超低，以下是大師作法。 
// class Solution {
//     function longestCommonPrefix($strs) {
//         $public = '';
//         $public為空字串，用來存放公共字串。
//         if(count($strs)==1)
//          {
//         要是陣列只有一個字串，就直接回傳該字串。
//         return array_pop($strs);
//         回傳被刪掉的字串。array_pop()會刪掉最後一個字串。而return會回傳被刪掉的字串。
//          };
//         $one = array_pop($strs);
//         取最後一個字串，為對比的基準。
//         for($i=0;$i<strlen($one);$i++){
//             用for迴圈來跑，小於最後一個字串的長度。
//             foreach($strs as $item){
//                 if($item[$i]!=$one[$i]){
//                     如果發現有不相同的字母，就回傳公共字串。
//                     return $public;
//                 }
//             }

//             如果沒有發現不相同的字母，就將字母加進公共字串。
//             $public .= $one[$i];
//         }
//        如果都沒有發現不相同的字母，就回傳公共字串。(這裡是完全成功的時候回傳)
//         return $public;
//     }
// }

// 作者：崔雪峰
// 链接：https://leetcode.cn/problems/longest-common-prefix/
// 来源：力扣（LeetCode）
// 著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。


