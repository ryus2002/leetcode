class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        // 如果needle為空字串，根據題意應該返回0
        if ($needle === "") {
            return 0;
        }
        
        // 獲取兩個字串的長度
        $haystackLen = strlen($haystack);
        $needleLen = strlen($needle);
        
        // 如果needle比haystack長，則不可能找到匹配
        if ($needleLen > $haystackLen) {
            return -1;
        }
        
        // 遍歷haystack中可能的起始位置
        for ($i = 0; $i <= $haystackLen - $needleLen; $i++) {
            // 檢查從當前位置開始的子字串是否與needle匹配
            $j = 0;
            while ($j < $needleLen && $haystack[$i + $j] === $needle[$j]) {
                $j++;
            }
            
            // 如果完全匹配，返回當前位置
            if ($j === $needleLen) {
                return $i;
            }
        }
        
        // 如果沒有找到匹配，返回-1
        return -1;
    }
}

// 測試案例
/*
echo strStr("sadbutsad", "sad") . "\n";  // 應該輸出 0
echo strStr("leetcode", "leeto") . "\n"; // 應該輸出 -1
*/