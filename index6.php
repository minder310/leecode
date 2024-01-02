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
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
    // output
    function output(){
        $list = $this;
        $str = '';
        while($list){
            $str .= $list->val . ' -> ';
            $list = $list->next;
        }
        $str .= 'NULL';
        echo $str . PHP_EOL;
    }
}
class Solution
{

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     * 簡單來說就是將兩個陣列合併，並且排序。
     */
    function preall($alllist)
    {
        print_r("<pre>");
        print_r($alllist);
        print_r("</pre>");
    }
    
    function mergeTwoLists($list1, $list2)
    {
        // 宣告一個空的class用來存放最終結果。
        $ans = new ListNode();
        // 宣告一個新的節點，並且將值設為空。
        $cur = $ans;
        
        while ($list1 !== null && $list2 !== null) {
        if ($list1->val <= $list2->val) {
            $cur->next = $list1;
            $list1 = $list1->next;
            // 這是將$list1，移動到下一個節點，代表這個節點已經被處理了。
        } else {
            $cur->next = $list2;
            $list2 = $list2->next;
            // 這是將$list2，移動到下一個節點，代表這個節點已經被處理了。
        }
        $cur = $cur->next;
    }

    if ($list1 !== null) {
        $cur->next = $list1;
    } elseif ($list2 !== null) {
        $cur->next = $list2;
    }

    return $ans->next;

        // 宣告一個新的空節點，拿來存放最後的結果。
        // while($list1!==null && $list2!==null){
        //     // 當兩個陣列都不為空時，執行以下程式碼。

        //     if($list1->val <= $list2->val){
        //     //當$list1->val小於等於$list2->val時，執行以下程式碼。 
        //     }
            
        


        // 舊的思考邏輯。
        // $num = [
        //     0 => $list1,
        //     1 => $list2
        // ];
        // $alllist = [];
        // foreach ($num as $key => $value) {
        //     foreach ($value as $key2 => $value2) {
        //         array_push($alllist, $value2->value);
        //     }
        // }
        // $this->preall($alllist);
        // while (true) {
        //     $count = 0;
        //     foreach ($alllist as $key => $value) {
        //         if (array_key_last($alllist) != $key) {
        //             if ($value > $alllist[$key + 1]) {
        //                 echo "大小轉換開始<br>";
        //                 $temp = $alllist[$key + 1];
        //                 $alllist[$key + 1] = $value;
        //                 $alllist[$key] = $temp;
        //                 $count++;
        //             }
        //         }
        //     }
        //     if ($count == 0) {
        //         break;
        //     }
        // }
        // $ans=implode(",", $alllist);
        // return $ans;
    }
}
// print_r($test->mergeTwoLists([],[0]))."<br>";
// 輸入範例
$lst1=new ListNode(1,new ListNode(2,new ListNode(4,null)));
$lst2=new ListNode(1,new ListNode(3,new ListNode(4,null)));
$test=new Solution();
$a=$test->mergeTwoLists($lst1,$lst2);
$a->output();

//  以下為網路上的解題方式。
// function mergeTwoLists($l1, $l2)
// 
//    $dummyHead = new ListNode(null);
//    宣告一個新的節點，並且將值設為空。
//   $cur = $dummyHead;
//   宣告一個新的節點，並且將值設為空。
    // while ($l1 !== null && $l2 !== null) {
    // 啟動條件，當兩個陣列都不為空時，執行以下程式碼。
        // if ($l1->val <= $l2->val) {
        // 當$list1->val小於等於$list2->val時，執行以下程式碼。
            // $cur->next = $l1;
            // 將$cur->next的值設為$l1。$cur->val = null，$cur->next = $l1。
            // $l1 = $l1->next;

        // } else {
            // $cur->next = $l2;
            // $l2 = $l2->next;
        // }
        // $cur = $cur->next;
    // }
// 
    // if ($l1 !== null) {
        // $cur->next = $l1;
    // } elseif ($l2 !== null) {
        // $cur->next = $l2;
    // }
// 
    // return $dummyHead->next;
// }
// 
// 作者：Zou Zhipeng
// 链接：https://leetcode.cn/problems/merge-two-sorted-lists/solutions/88656/php-jie-fa-by-zzpwestlife-19/
// 来源：力扣（LeetCode）
// 著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
