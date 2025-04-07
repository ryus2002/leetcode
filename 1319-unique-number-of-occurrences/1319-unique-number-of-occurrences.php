class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
                $freq = [];
        
        // 計算頻率
        foreach ($arr as $num) {
            if (!isset($freq[$num])) {
                $freq[$num] = 0;
            }
            $freq[$num]++;
        }
        
        // 檢查頻率的唯一性
        $occurrences = [];
        foreach ($freq as $count) {
            if (isset($occurrences[$count])) {
                return false;
            }
            $occurrences[$count] = true;
        }
        
        return true;
    }
}