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
// 以下是自己的解題，要加上註解。
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
        // 先建立一個變數，用來存放最後的數字。
        $total = 0;
        // str_split()可以把字串轉成陣列，這樣就可以用for迴圈來跑了。
        $a = str_split($s);
        // count()可以計算陣列的長度，陣列長度是從1開始算。
        $array = count($a);
        // 用for迴圈來跑，要小於陣列長度，所以要用小於。
        for ($key = 0; $key < $array; $key++) {
            // key值會一直往上加，如果key<array-1的話，就代表是最後一個key值了就不用再跑下去了。
            if ($key < $array - 1) {
                // 抓出C，X，I，這會與減相關的羅馬數字。
                if ($a[$key] == "C" || $a[$key] == "X" || $a[$key] == "I") {
                    // 要是發現$a[$key+1]的數值，如果是D或者是M，就代表是減的情況，所以要把$a[$key+1]的數值減去$a[$key]的數值。
                    if (($a[$key + 1] == "D" || $a[$key + 1] == "M")) {
                        // 這邊是計算大樹值減小數值的情況。
                        $total += $num[$a[$key + 1]] - $num[$a[$key]];
                        // 直接將key值加1，因為已經把$a[$key+1]的數值減去$a[$key]的數值了，所以就不用再跑$a[$key]的數值了。
                        $key = $key + 1;
                    } 
                    // 如果$a[key+1]等於L或者是C，同時$a[$key]不等於D，$a[$key+1]不等於M，$a[$key]不等於C，就代表是減的情況，前面加括號是因為要先判斷$a[$key+1]的數值，再判斷$a[$key]的數值。這樣才不會有錯。
                    elseif (($a[$key + 1] == "L" || $a[$key + 1] == "C") && $a[$key] != "D" && $a[$key + 1] != "M" && $a[$key] != "C") {
                        $total += $num[$a[$key + 1]] - $num[$a[$key]];
                        $key = $key + 1;
                       
                    } 
                    elseif (($a[$key + 1] == "V" || $a[$key + 1] == "X") && $a[$key] != "C" && $a[$key] != "L" && $a[$key] != "X") {
                        $total += $num[$a[$key + 1]] - $num[$a[$key]];
                        $key = $key + 1;
                    } else {
                        $total += $num[$a[$key]];
                    }
                } else {
                    $total += $num[$a[$key]];
                }
            } else {
                $total += $num[$a[$key]];
            }
        };
        return $total;
    }
};

$a = new Solution;
echo $a->romanToInt("III") . "<br>";
echo $a->romanToInt("IV") . "<br>";
echo $a->romanToInt("IX") . "<br>";
echo $a->romanToInt("LVIII") . "<br>";
echo $a->romanToInt("MCMXCIV") . "<br>";
echo $a->romanToInt("DCXXI") . "<br>";
echo $a->romanToInt("MDCCCLXXXIV") . "<br>";

// 以下是別人的解題，要加上註解。
// function romanToInt($s) {
//     宣告一個陣列，把羅馬數字對應的數字放進去。 
//     $arr = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
//     將字串轉成陣列，這樣就可以用foretch迴圈來跑了。
//     $a = str_split($s);
//     這行是總數，先給他0。
//     $r = 0;
//     用來儲存要被扣掉的數字，先給零0。
//     $p = 0;
//     foreach($a as $k) {
//         這邊會判斷，如果$p小於$arr[$k]，就代表要減，而因為前面先加過，所以要扣掉兩倍的$p。
//         if ($p && $arr[$k] > $p) {
//             $r += $arr[$k] - $p * 2;
//         } else {
//             $r += $arr[$k];
//         }
//         $p = $arr[$k];
//     }
//     return $r;
// }
// }
// 超強。
// 作者：Young😋
// 链接：https://leetcode.cn/problems/roman-to-integer/
// 来源：力扣（LeetCode）
// 著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。