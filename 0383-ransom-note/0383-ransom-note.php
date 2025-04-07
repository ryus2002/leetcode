class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        // 計算magazine中每個字符的出現次數
        $charCount = array();
        for ($i = 0; $i < strlen($magazine); $i++) {
            $char = $magazine[$i];
            if (!isset($charCount[$char])) {
                $charCount[$char] = 0;
            }
            $charCount[$char]++;
        }
        
        // 檢查ransomNote中的每個字符是否在magazine中有足夠的數量
        for ($i = 0; $i < strlen($ransomNote); $i++) {
            $char = $ransomNote[$i];
            
            // 如果magazine中沒有這個字符或者數量不足
            if (!isset($charCount[$char]) || $charCount[$char] <= 0) {
                return false;
            }
            
            // 使用一個字符，減少計數
            $charCount[$char]--;
        }
        
        return true;
    }
}

// 測試案例
/*
var_dump(canConstruct("a", "b")); // 應該輸出 false
var_dump(canConstruct("aa", "ab")); // 應該輸出 false
var_dump(canConstruct("aa", "aab")); // 應該輸出 true
*/