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
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $numatr=(string)$a;
        $numarr=str_split($numatr);
        $numbtr=(string)$b;
        $numbrr=str_split($numbtr);
        if(count($numarr)>count($numbrr))
        {
            $long=count($numarr);
        }
        else if(count($numarr)<count($numbrr))
        {
            $long=count($numbrr);
        }
        else
        {
            $long=count($numarr);
        }
        $newarr=[];
        $newarr=array_fill(0,$long,null);
        print_r($newarr);
        echo count($newarr);
        for($i=0;$i<$long;$i++)
        {
            $newarr[$i]=$numarr[$i]+$numbrr[$i];
        }
        print_r($newarr);
    //     for($i=$howlongtoarr-1;$i>=0;$i--)
    //     {

    //         if($numarr[$i]>1)
    //         {
    //             // 排除長度只有1的情況，並且有進位的情況。
    //             if($i==0)
    //             {
    //                 $numarr[$i]=0;
    //                 array_unshift($numarr,1);
    //                 $numint=implode("",$numarr);
    //                 return $numint;
    //             }
    //             $numarr[$i]=0;
    //             $numarr[$i+1]=$numarr[$i+1]+1;                
    //         }
    //         else
    //         {
    //             $numint=implode("",$numarr);
    //             return $numint;
    //         }
    //     }
    }
}
$a=new Solution();
echo $a->addBinary("11","1");
echo "<br>";
echo $a->addBinary("1010","1011");
echo "<br>";