<?php
// 给你两个按 非递减顺序 排列的整数数组 nums1 和 nums2，另有两个整数 m 和 n ，分别表示 nums1 和 nums2 中的元素数目。
// 请你 合并 nums2 到 nums1 中，使合并后的数组同样按 非递减顺序 排列。
// 注意：最终，合并后数组不应由函数返回，而是存储在数组 nums1 中。为了应对这种情况，nums1 的初始长度为 m + n，其中前 m 个元素表示应合并的元素，后 n 个元素为 0 ，应忽略。nums2 的长度为 n 。

// 示例 1：
// 输入：nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3
// 输出：[1,2,2,3,5,6]
// 解释：需要合并 [1,2,3] 和 [2,5,6] 。
// 合并结果是 [1,2,2,3,5,6] ，其中斜体加粗标注的为 nums1 中的元素。

// 示例 2：
// 输入：nums1 = [1], m = 1, nums2 = [], n = 0
// 输出：[1]
// 解释：需要合并 [1] 和 [] 。
// 合并结果是 [1] 。

// 示例 3：
// 输入：nums1 = [0], m = 0, nums2 = [1], n = 1
// 输出：[1]
// 解释：需要合并的数组是 [] 和 [1] 。
// 合并结果是 [1] 。
// 注意，因为 m = 0 ，所以 nums1 中没有元素。nums1 中仅存的 0 仅仅是为了确保合并结果可以顺利存放到 nums1 中。

// 提示：
// nums1.length == m + n
// nums2.length == n
// 0 <= m, n <= 200
// 1 <= m + n <= 200
// -109 <= nums1[i], nums2[j] <= 109
// 进阶：你可以设计实现一个时间复杂度为 O(m + n) 的算法解决此问题吗？
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        // 先宣告一個新的陣列，用來記錄兩個陣列合併後的數值。
        $newnumber1 = array();
        $newnumber2 = array();
        // 以下是兩個陣列的資料清洗。
        for ($i = 0; $i < $m; $i++) {
            if ($nums1[$i] != 0) {
                $newnumber1[] = $nums1[$i];
            }
        }
        if(count($newnumber1)==$m){
            echo "newnumber1:驗證通過<br>";
        }
        for ($i = 0; $i < $n; $i++) {
            if ($nums2[$i] != 0) {
                $newnumber2[] = $nums2[$i];
            }
        }
        if(count($newnumber2)==$n){
            echo "newnumber2:驗證通過<br>";
        }
        // 測輸出用。
        echo "newnumber1:";
        // print_r() 函數用於打印變數的易讀信息。
        print_r($newnumber1);
        echo "<br>";
        echo "newnumber2:";
        // print_r() 函數用於打印變數的易讀信息。
        print_r($newnumber2);
        echo "<br>";
        /*
        $newnumber = array_merge($nums1, $nums2);
        echo $newnumber;
        $nums1 = $newnumber;
        return $nums1;
        */
    }
    }
    
    // Create an instance of the Solution class and call the merge function
    // 呼叫 Solution 類別的實例，並呼叫 merge 函數。
    $solution = new Solution();
    // 測試資料。
    $nums1 = [1, 2, 3, 0, 0, 0];
    $m = 3;
    $nums2 = [2, 5, 6];
    $n = 3;
    // 呼叫函數。
    $solution->merge($nums1, $m, $nums2, $n);
    
    ?>
