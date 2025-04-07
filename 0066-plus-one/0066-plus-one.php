class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $n = count($digits);
        
        // 從最後一位開始處理
        for ($i = $n - 1; $i >= 0; $i--) {
            // 當前位加一
            $digits[$i]++;
            
            // 如果不需要進位，直接返回結果
            if ($digits[$i] < 10) {
                return $digits;
            }
            
            // 需要進位，當前位設為 0
            $digits[$i] = 0;
        }
        
        // 如果程式執行到這裡，說明最高位也進位了
        // 需要在陣列前面插入一個 1
        array_unshift($digits, 1);
        
        return $digits;
    }
}