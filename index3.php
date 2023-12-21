<?php

/**
 * 罗马数字包含以下七种字符: I， V， X， L，C，D 和 M。
 *
 *字符          数值
 *I             1
 *V             5
 *X             10
 *L             50
 *C             100
 *D             500
 *M             1000
 *例如， 罗马数字 2 写做 II ，即为两个并列的 1 。12 写做 XII ，即为 X + II 。 27 写做  XXVII, 即为 XX + V + II 。
 *vi為6，iv為4，
 *通常情况下，罗马数字中小的数字在大的数字的右边。但也存在特例，例如 4 不写做 IIII，而是 IV。数字 1 在数字 5 的左边，所表示的数等于大数 5 减小数 1 得到的数值 4 。同样地，数字 9 表示为 IX。这个特殊的规则只适用于以下六种情况：
 *
 *I 可以放在 V (5) 和 X (10) 的左边，来表示 4 和 9。
 *X 可以放在 L (50) 和 C (100) 的左边，来表示 40 和 90。 
 *C 可以放在 D (500) 和 M (1000) 的左边，来表示 400 和 900。
 *给定一个罗马数字，将其转换成整数。
 */
// 解題思路
// 1. x旁邊一定是i或者是v。右邊為加左邊為減。
// 532
// DXXXII
// 499
// CDXCIX
// 先列出字串長度，再依序對比，如果右邊比左邊大，就減，反之就加。
class Solution
{
    public function romanToInt($s)
    {
        // 先建立一個陣列，把羅馬數字對應的數字放進去
        $num = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $total = 0;
        // 算出字串長度。
        $a = str_split($s);
        $array = count($a);
        print_r($a);
        for ($key = 0; $key < $array; $key++) {
            if ($key < $array - 1) {
                // 要是c的話，就要判斷右邊是不是d或者m，是的話就要減。
                if ($a[$key] == "C" || $a[$key] == "X" || $a[$key] == "I") {
                    if ($a[$key + 1] == "D" || $a[$key + 1] == "M") {
                        $total += $num[$a[$key + 1]] - $num[$a[$key]];
                        $key = $key + 1;
                    } elseif ($a[$key + 1] == "L" || $a[$key + 1] == "C") {
                        $total += $num[$a[$key + 1]] - $num[$a[$key]];
                        $key = $key + 1;
                    } elseif ($a[$key + 1] == "V" || $a[$key + 1] == "X") {
                        $total += $num[$a[$key + 1]] - $num[$a[$key]];
                        $key = $key + 1;
                    } else {
                        $total += $num[$a[$key]];
                    }
                } else {
                    $total += $num[$a[$key]];
                }
            }else{
                $total += $num[$a[$key]];
            }
        };
        return $total;
    }
};

$a = new Solution;
echo $a->romanToInt("III") . "<br>";
echo $a->romanToInt("IV")."<br>";
echo $a->romanToInt("IX")."<br>";
echo $a->romanToInt("LVIII")."<br>";
echo $a->romanToInt("MCMXCIV")."<br>";