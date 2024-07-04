<?php
// 给定一个已排序的链表的头 head ， 删除所有重复的元素，使每个元素只出现一次 。返回 已排序的链表 。
// 示例 1：

// 输入：head = [1,1,2]
// 输出：[1,2]
// 示例 2：

// 输入：head = [1,1,2,3,3]
// 输出：[1,2,3]
 
// 提示：
// 链表中节点数目在范围 [0, 300] 内
// -100 <= Node.val <= 100
// 题目数据保证链表已经按升序 排列

// Definition for a singly-linked list.
class ListNode {
    // $val是節點的值目前是0。
    public $val = 0;
    // $next是指向下一個節點的指標目前是null。
    public $next = null;
    // __construct是建構子，當new一個物件時會自動執行。
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $InClassNum=$head;
        if($InClassNum!=null && $InClassNum->next!=null)
        {
            if($InClassNum->val==$InClassNum->next->val)
            {
                $InClassNum->next=$InClassNum->next->next;
                $this->deleteDuplicates($InClassNum);
            }
            else
            {
                $this->deleteDuplicates($InClassNum->next);
            }
        }
    }
}