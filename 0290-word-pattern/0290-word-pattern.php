class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        // 將字串分割成單詞數組
        $words = explode(" ", $s);
        
        // 檢查長度是否匹配
        if (strlen($pattern) != count($words)) {
            return false;
        }
        
        // 建立兩個映射表
        $patternToWord = array(); // pattern 中字母到單詞的映射
        $wordToPattern = array(); // 單詞到 pattern 中字母的映射
        
        // 遍歷模式和單詞
        for ($i = 0; $i < strlen($pattern); $i++) {
            $char = $pattern[$i];
            $word = $words[$i];
            
            // 檢查 pattern 到 word 的映射
            if (isset($patternToWord[$char])) {
                // 如果已有映射，檢查是否一致
                if ($patternToWord[$char] !== $word) {
                    return false;
                }
            } else {
                // 建立新映射
                $patternToWord[$char] = $word;
            }
            
            // 檢查 word 到 pattern 的映射
            if (isset($wordToPattern[$word])) {
                // 如果已有映射，檢查是否一致
                if ($wordToPattern[$word] !== $char) {
                    return false;
                }
            } else {
                // 建立新映射
                $wordToPattern[$word] = $char;
            }
        }
        
        return true;
    }
}
// 測試案例
/*
var_dump(wordPattern("abba", "dog cat cat dog")); // 應該輸出: true
var_dump(wordPattern("abba", "dog cat cat fish")); // 應該輸出: false
var_dump(wordPattern("aaaa", "dog cat cat dog")); // 應該輸出: false
*/