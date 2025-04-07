class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        // 負數不可能是回文數字，因為有負號在前面
        if ($x < 0) {
            return false;
        }
        
        // 如果數字最後一位是0，那麼第一位也必須是0
        // 也就是說，只有0本身是回文數字
        if ($x > 0 && $x % 10 == 0) {
            return false;
        }
        
        // 開始反轉數字
        $reversed = 0;
        $original = $x;
        
        while ($x > 0) {
            // 取出最後一位數字
            $digit = $x % 10;
            // 把最後一位數字加到反轉數字的最後
            $reversed = $reversed * 10 + $digit;
            // 去掉原數字的最後一位
            $x = (int)($x / 10);
        }
        
        // 檢查反轉後的數字是否與原數字相同
        return $reversed == $original;
    }
}