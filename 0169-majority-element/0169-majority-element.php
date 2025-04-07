class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        // 解法一：使用計數法（哈希表）
        // 時間複雜度：O(n)，空間複雜度：O(n)
        /*
        $counts = [];
        $n = count($nums);
        $threshold = floor($n / 2);
        
        foreach ($nums as $num) {
            $counts[$num] = isset($counts[$num]) ? $counts[$num] + 1 : 1;
            if ($counts[$num] > $threshold) {
                return $num;
            }
        }
        
        // 由於題目保證多數元素存在，所以不會執行到這裡
        return -1;
        */
        
        // 解法二：排序法
        // 時間複雜度：O(n log n)，空間複雜度：O(1)（不考慮排序的額外空間）
        /*
        sort($nums);
        return $nums[floor(count($nums) / 2)];
        */
        
        // 解法三：Boyer-Moore 投票算法
        // 時間複雜度：O(n)，空間複雜度：O(1)
        $candidate = null;
        $count = 0;
        
        foreach ($nums as $num) {
            if ($count == 0) {
                $candidate = $num;
            }
            
            $count += ($num == $candidate) ? 1 : -1;
        }
        
        return $candidate;
    }
}
// 測試案例
/*
$nums1 = [3, 2, 3];
echo majorityElement($nums1) . "\n"; // 應該輸出 3

$nums2 = [2, 2, 1, 1, 1, 2, 2];
echo majorityElement($nums2) . "\n"; // 應該輸出 2

// 邊界情況
$nums3 = [1];
echo majorityElement($nums3) . "\n"; // 應該輸出 1

$nums4 = [1, 1, 2];
echo majorityElement($nums4) . "\n"; // 應該輸出 1
*/