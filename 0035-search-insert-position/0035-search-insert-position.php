class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        // 先設定左右邊界
        $left = 0;
        $right = count($nums) - 1;
        
        // 只要左邊還沒超過右邊，就繼續找
        while ($left <= $right) {
            // 找出中間的位置
            // 這裡用 intval 是為了確保得到整數，避免小數點問題
            $mid = $left + intval(($right - $left) / 2);
            
            // 找到了！太棒了，直接回傳
            if ($nums[$mid] == $target) {
                return $mid;
            }
            // 如果中間的數字太小，往右邊找
            else if ($nums[$mid] < $target) {
                $left = $mid + 1;
            }
            // 如果中間的數字太大，往左邊找
            else {
                $right = $mid - 1;
            }
        }
        
        // 如果找不到，左邊的指針就會指向它應該插入的位置
        return $left;
    }
}