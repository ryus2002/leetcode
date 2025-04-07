class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        // 將字串轉為小寫並移除所有非字母數字的字符
        $cleanString = '';
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if (ctype_alnum($char)) {
                $cleanString .= strtolower($char);
            }
        }
        
        // 判斷處理後的字串是否為回文
        $length = strlen($cleanString);
        for ($i = 0; $i < $length / 2; $i++) {
            if ($cleanString[$i] !== $cleanString[$length - 1 - $i]) {
                return false;
            }
        }
        
        return true;
    }
}
// 測試案例
/*
var_dump(isPalindrome("A man, a plan, a canal: Panama")); // 應該輸出 true
var_dump(isPalindrome("race a car")); // 應該輸出 false
var_dump(isPalindrome(" ")); // 應該輸出 true
*/