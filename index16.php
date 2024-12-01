<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        // incclassnum是指向head的指標。
        $InClassNum=$head;
        // 如果inclassnum和inclassnum->next不是null。就運行以下程式。
        // 因移動指標，所以會減查目前還下一個值是否為空值，如果為空值就return結束遞迴。
        if($InClassNum!=null && $InClassNum->next!=null)
        {
            // 如果inclassnum的值等於inclassnum->next的值，就會執行以下程式。
            if($InClassNum->val==$InClassNum->next->val)
            {
                // 會將next->next指向next(等於刪除節點的意思，因為就是把下一個節點，換到next節點，所以刪除了了一個節點的意思)。
                $InClassNum->next=$InClassNum->next->next;
                // 回傳改變後的節點結構，並在次呼叫自己檢查是否有重複。
                $this->deleteDuplicates($InClassNum);
            }
            else
            {
                // 用遞迴的方式，將數值換到下一個節點，並且導入deleteDuplicates函式，查看是否有重複。
                $this->deleteDuplicates($InClassNum->next);
            }
        }
        
        return $InClassNum;;
    }
}