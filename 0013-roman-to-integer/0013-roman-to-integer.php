class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        // 定義羅馬數字對應的值
        $values = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        
        $result = 0;
        $length = strlen($s);
        
        for ($i = 0; $i < $length; $i++) {
            // 獲取當前字符的值
            $currentValue = $values[$s[$i]];
            
            // 檢查是否需要減法規則
            // 如果當前字符不是最後一個，且其值小於下一個字符的值
            if ($i + 1 < $length && $currentValue < $values[$s[$i + 1]]) {
                // 減去當前值
                $result -= $currentValue;
            } else {
                // 加上當前值
                $result += $currentValue;
            }
        }
        
        return $result;
    }
}

// 測試案例
/*
echo romanToInt("III") . "\n";     // 應該輸出 3
echo romanToInt("LVIII") . "\n";   // 應該輸出 58
echo romanToInt("MCMXCIV") . "\n"; // 應該輸出 1994

羅馬數字的轉換規則主要有：

通常情況下，羅馬數字是從左到右由大到小排列的，此時我們直接將每個字符對應的數值相加即可。
特殊情況是當小值在大值前面時，需要用大值減去小值，例如 IV 表示 5-1=4，而不是 1+5=6。
*/