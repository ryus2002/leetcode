class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
         // 建立一個空字串來存放我們的結果
        $result = "";
        
        // 先找出兩個字串中較長的那個長度
        $maxLength = max(strlen($word1), strlen($word2));
        
        // 開始逐個字元合併
        for ($i = 0; $i < $maxLength; $i++) {
            // 如果 word1 還有字元，就加進去
            if ($i < strlen($word1)) {
                $result .= $word1[$i];
            }
            
            // 如果 word2 還有字元，也加進去
            if ($i < strlen($word2)) {
                $result .= $word2[$i];
            }
        }
        
        return $result;   
    }
}