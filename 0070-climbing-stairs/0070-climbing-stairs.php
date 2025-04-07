class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        // 處理基本情況
        if ($n <= 2) {
            return $n;
        }
        
        // 使用動態規劃
        $dp = array();
        $dp[1] = 1; // 爬到第 1 階的方法數
        $dp[2] = 2; // 爬到第 2 階的方法數
        
        for ($i = 3; $i <= $n; $i++) {
            $dp[$i] = $dp[$i-1] + $dp[$i-2];
        }
        
        return $dp[$n];
    }
}