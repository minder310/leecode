<?php
// 将两个升序链表合并为一个新的 升序 链表并返回。新链表是通过拼接给定的两个链表的所有节点组成的。 
// 示例 1：

// 输入：l1 = [1,2,4], l2 = [1,3,4]
// 输出：[1,1,2,3,4,4]
// 示例 2：

// 输入：l1 = [], l2 = []
// 输出：[]
// 示例 3：

// 输入：l1 = [], l2 = [0]
// 输出：[0]
class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     * 簡單來說就是將兩個陣列合併，並且排序。
     */
    function preall($alllist){
        print_r("<pre>");
        print_r($alllist);
        print_r("</pre>");
    }

    function mergeTwoLists($list1, $list2) {
        $num=[
            0=>$list1,
            1=>$list2
        ];
        $alllist=[];
        for($i=0;$i<2;$i++){
            foreach($num[$i] as $key=>$value){
                array_push($alllist,$value);
            }
        }
        $this->preall($alllist);
        foreach($alllist as $key=>$value){
            echo $key;
            if($value>$alllist[$key+1]){
                echo "我有近來唷";
                $temp=$alllist[$key+1];
                $alllist[$key+1]=$value;
                $alllist[$key]=$temp;
                $key=0;
            }
        }
        return $alllist;
    }
}
$test=new Solution();
print_r( $test->mergeTwoLists([1,2,4],[1,3,4]))."<br>";
// print_r($test->mergeTwoLists([],[0]))."<br>";