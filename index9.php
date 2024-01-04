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
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     * 解題，返回第一次匹配的位置。
     * 有兩種解法，一種是用php的函數，一種是自己寫。
     * php函數的話，就是用strpos，要是沒有找到就返回false。
     * strpos(整個字串,要找的文字是那些。) — 查找字符串首次出现的位置
     */
    function strStr($haystack, $needle) {
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
        if($haystack==""||$needle==""){
            return 0;
        }
        //宣告一個判斷字母長度。
        $ans=0;
        $b=0;
        // 循環判斷字母。
        for($i=0;$i<strlen($haystack);$i++){
            // 如果字母相同，就把判斷字母長度+1。
            if($haystack[$i]===$needle[$b]){
                $ans++;
                $b++;
                if($ans===strlen($needle)){
                    return ($i+1)-($ans);
                }
            }else{
                // 如果字母不同，就把判斷字母長度歸0。
                $ans=0;
                $b=0;
            }
            
        }
        return -1;
         
        
    }
}
$test=new Solution();
$haystack = "sadbutsad";
$needle = "sad";
// 顯示第一個匹配的位置。
echo $test->strStr($haystack, $needle);