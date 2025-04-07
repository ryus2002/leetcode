class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        // 如果陣列為空，返回空字串
        if (count($strs) == 0) {
            return "";
        }
        
        // 如果只有一個字串，則該字串本身就是最長公共前綴
        if (count($strs) == 1) {
            return $strs[0];
        }
        
        // 取第一個字串作為參考
        $prefix = $strs[0];
        $length = strlen($prefix);
        
        // 遍歷陣列中的其他字串
        for ($i = 1; $i < count($strs); $i++) {
            // 找出當前字串與前綴的公共部分
            $j = 0;
            while ($j < $length && $j < strlen($strs[$i]) && $prefix[$j] == $strs[$i][$j]) {
                $j++;
            }
            
            // 更新前綴長度
            $length = $j;
            
            // 如果前綴已經為空，則直接返回
            if ($length == 0) {
                return "";
            }
        }
        
        // 返回最長公共前綴
        return substr($prefix, 0, $length);
    }
}

// 測試案例
/*
echo longestCommonPrefix(["flower", "flow", "flight"]) . "\n"; // 應該輸出 "fl"
echo longestCommonPrefix(["dog", "racecar", "car"]) . "\n";    // 應該輸出 ""
*/