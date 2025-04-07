class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        // 創建集合記錄已出現的數字
        $seen = [];
        
        // 持續計算平方和，直到得到 1 或進入循環
        while ($n != 1 && !isset($seen[$n])) {
            $seen[$n] = true;
            $n = $this->getNextNumber($n);
        }
        
        // 如果最終得到 1，則為快樂數
        return $n == 1;
    }

    /**
    * 計算數字各位數字的平方和
    * @param Integer $n 待計算的數字
    * @return Integer 平方和
    */
    function getNextNumber($n) {
        $sum = 0;
        
        // 計算各位數字的平方和
        while ($n > 0) {
            $digit = $n % 10;
            $sum += $digit * $digit;
            $n = (int)($n / 10);
        }
        
        return $sum;
    }
}

// 測試案例
/*
var_dump(isHappy(19)); // 應該輸出: true
var_dump(isHappy(2));  // 應該輸出: false
*/