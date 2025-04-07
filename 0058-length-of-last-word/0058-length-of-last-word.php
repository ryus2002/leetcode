class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        // 去除字串兩端的空格
        $s = trim($s);
        
        // 如果字串為空，返回0
        if (empty($s)) {
            return 0;
        }
        
        // 從字串尾部開始向前遍歷，找到第一個空格的位置
        $length = strlen($s);
        $lastWordLength = 0;
        
        for ($i = $length - 1; $i >= 0; $i--) {
            if ($s[$i] == ' ') {
                break;
            }
            $lastWordLength++;
        }
        
        return $lastWordLength;
    }
}

// 測試案例
/*
echo lengthOfLastWord("Hello World") . "\n";              // 應該輸出 5
echo lengthOfLastWord("   fly me   to   the moon  ") . "\n"; // 應該輸出 4
echo lengthOfLastWord("luffy is still joyboy") . "\n";    // 應該輸出 6
*/