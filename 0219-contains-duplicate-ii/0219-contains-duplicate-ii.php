class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        // 用來記錄我們看過的數字和它們的位置
        $seen = [];
        
        // 一個一個數字來看
        foreach ($nums as $index => $num) {
            // 嘿，這個數字之前見過嗎？
            if (isset($seen[$num])) {
                // 看看這兩個相同數字的距離夠不夠近
                if ($index - $seen[$num] <= $k) {
                    // 太好了！找到符合條件的了
                    return true;
                }
            }
            
            // 無論如何，都要更新這個數字最後出現的位置
            // (就算之前見過，我們也只關心最近的那次)
            $seen[$num] = $index;
        }
        
        // 哎呀，找了一圈都沒找到符合的
        return false;
    }
}
// 來測試一下吧！
// $solution = new Solution();
// $test1 = $solution->containsNearbyDuplicate([1,2,3,1], 3); // 應該是 true
// $test2 = $solution->containsNearbyDuplicate([1,0,1,1], 1); // 應該是 true
// $test3 = $solution->containsNearbyDuplicate([1,2,3,1,2,3], 2); // 應該是 false
// echo "測試結果: " . ($test1 ? "成功" : "失敗") . "\n";