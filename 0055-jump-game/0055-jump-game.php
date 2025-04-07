class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        // 能到達的最遠位置，一開始當然是起點位置
        $furthestPosition = 0;
        
        // 數組長度
        $n = count($nums);
        
        // 遍歷數組中的每個位置
        for ($i = 0; $i < $n; $i++) {
            // 如果當前位置已經超過了能到達的最遠位置，那就卡住了
            if ($i > $furthestPosition) {
                return false;
            }
            
            // 更新能到達的最遠位置
            // 當前位置 + 當前位置能跳的最大距離
            $furthestPosition = max($furthestPosition, $i + $nums[$i]);
            
            // 如果最遠位置已經能到達或超過終點，就提前返回成功
            if ($furthestPosition >= $n - 1) {
                return true;
            }
        }
        
        // 如果遍歷完整個數組都沒返回false，說明能到達終點
        return true;
    }
}