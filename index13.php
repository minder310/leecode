<?php
// 给你两个二进制字符串 a 和 b ，以二进制字符串的形式返回它们的和。

// 示例 1：

// 输入:a = "11", b = "1"
// 输出："100"
// 示例 2：

// 输入：a = "1010", b = "1011"
// 输出："10101"

// 提示：

// 1 <= a.length, b.length <= 104
// a 和 b 仅由字符 '0' 或 '1' 组成
// 字符串如果不是 "0" ，就不含前导零
class Solution
{

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $numatr = (string)$a;
        // 將數字轉成字串。
        $numarr = str_split($numatr);
        // 將字串轉成陣列。
        $numbtr = (string)$b;
        $numbrr = str_split($numbtr);
        // 以下為判斷陣列長度哪一個比較長。
        if (count($numarr) > count($numbrr)) {
            $long = count($numarr);
            $aarrlong = count($numarr);
            $barrlong = count($numbrr);
            for ($i = 0; $i < $aarrlong - $barrlong; $i++) {
                array_unshift($numbrr, 0);
            }
        } else if (count($numarr) < count($numbrr)) {
            $long = count($numbrr);
            $aarrlong = count($numarr);
            $barrlong = count($numbrr);
            for ($i = 0; $i < $barrlong - $aarrlong; $i++) {
                array_unshift($numarr, 0);
            }
        } else {
            $long = count($numarr);
        }
        $newarr = [];
        $newarr = array_fill(0, $long, 0);
        // 以下為兩個陣列相加。
        for ($i = 0; $i < $long; $i++) {
            $newarr[$i] = $numarr[$i] + $numbrr[$i];
        }
        // 以下為判斷相加後的陣列。
        for ($i = $long - 1; $i > 0; $i--) {
            if ($newarr[$i] >= 2) {
                $newarr[$i] = $newarr[$i] - 2;
                $newarr[$i - 1] = $newarr[$i - 1] + 1;
            }
        }
        // 以下為判斷第一個數字是否大於2。
        if($newarr[0] >= 2){
            $newarr[0] = $newarr[0] - 2;
            array_unshift($newarr, 1);
        }
        // 以下為將陣列轉成字串。
        $newstr = implode($newarr);
        return $newstr;
    }
}
$a = new Solution();
echo $a->addBinary("11", "1");
echo "<br>";
echo $a->addBinary("1010", "1011");
echo "<br>";
echo $a->addBinary("1", "1011");
echo "<br>";
