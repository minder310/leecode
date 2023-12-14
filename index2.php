<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x=(string)$x;
        $y=null;
        $Xarray=str_split($x);
        $Xarraynum=count($Xarray);
        for($i=$Xarraynum-1;$i>=0;$i--)
        {
            echo $i."<br>";
            $y.=$Xarray[$i];
        };
        if($x==$y)
        {
            return true;
        }
        else
        {
            return false;
        };
    }
}
$a = new Solution;
echo $a->isPalindrome(121);