<?php
// 给你两个字符串 haystack 和 needle ，请你在 haystack 字符串中找出 needle 字符串的第一个匹配项的下标（下标从 0 开始）。如果 needle 不是 haystack 的一部分，则返回  -1 。
// 示例 1：
// 输入：haystack = "sadbutsad", needle = "sad"
// 输出：0
// 解释："sad" 在下标 0 和 6 处匹配。
// 第一个匹配项的下标是 0 ，所以返回 0 。
// 示例 2：
// 输入：haystack = "leetcode", needle = "leeto"
// 输出：-1
// 解释："leeto" 没有在 "leetcode" 中出现，所以返回 -1 。
// 提示：
// 1 <= haystack.length, needle.length <= 104
// haystack 和 needle 仅由小写英文字符组成
class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     * 解題，返回第一次匹配的位置。
     * 有兩種解法，一種是用php的函數，一種是自己寫。
     * php函數的話，就是用strpos，要是沒有找到就返回false。
     * strpos(整個字串,要找的文字是那些。) — 查找字符串首次出现的位置
     */
    function strStr($haystack, $needle)
    {
        // 這邊適用函數寫。
        // // 可能會用到的函數。
        // // strpos — 查找字符串首次出现的位置
        // $firstnum=strpos($haystack, $needle);
        // // 要是沒有找到就返回-1
        // if($firstnum===false){
        //     return -1;
        // }else{
        //     return $firstnum;
        // };

        // 以下是自己的寫法。
        // 確定邊界，如果近來的資料有兩項其中一項是空的，就返回0。
        if ($haystack == "" || $needle == "") {
            return 0;
        }
        //宣告一個判斷字母長度。
        $howlong = strlen($needle);
        $ans = 0;
        $b = 0;
        // 循環判斷字母。
        for ($i = 0; $i < strlen($haystack); $i++) {
            // strlen($haystack)是整個字串的長度。
            // howlong是自母的長度。
            if($haystack[$i]=== $needle[$b]){
                // 當兩個字母相等時，就將b+1。
                for($j = 0; $j < $howlong; $j++){
                    // 循環判斷字母。
                    if($haystack[$i+$j]!==$needle[$j]){
                        // 要是有一個字母不相等，就跳出循環。
                        break;
                    }
                    if($j === $howlong-1){
                        // 要是j等於howlong-1，就返回i。
                        return $i;
                    }
                }
            }
        }
        return -1;
// 別人解題的方式。
//         if(!$needle){
    // 要沒有需要確認的自母，就返回0。
//     return 0;
// }
// $fast = 0;
// $slow = 0;
// $n = strlen($needle);
// 自母的長度。
// $h = strlen($haystack);
// 整個字串的長度，已確定邊界。

// while($slow<$n && $fast<$h){
    // 確認循環邊界，
//     if($haystack[$fast]!=$needle[$slow]){
//         $fast = $fast-$slow;
//         $slow = 0;
//     }else{
//         $slow++;
//     }
//     $fast++;
// }
// if($slow==$n){
//     return $fast-$slow;
// }else{
//     return -1;
// }
// }

// 作者：栩栩如生
// 链接：https://leetcode.cn/problems/find-the-index-of-the-first-occurrence-in-a-string/solutions/834111/28phpti-jie-by-hikoming-c9v1/
// 来源：力扣（LeetCode）
// 著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
    }

}
$test = new Solution();
$haystack = "mississippi";
$needle = "pi";
// 顯示第一個匹配的位置。
echo $test->strStr($haystack, $needle);
