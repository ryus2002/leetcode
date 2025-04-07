class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        // 確保 str1 是較長的字串
        if (strlen($str1) < strlen($str2)) {
            // 交換 str1 和 str2
            $temp = $str1;
            $str1 = $str2;
            $str2 = $temp;
        }
        
        // 如果短字串為空，則長字串就是結果
        if ($str2 === "") {
            return $str1;
        }
        
        // 檢查短字串是否能整除長字串
        $len2 = strlen($str2);
        if (substr($str1, 0, $len2) !== $str2) {
            return ""; // 如果不能整除，返回空字串
        }
        
        // 遞迴處理剩餘部分
        // 將長字串減去短字串後的剩餘部分與短字串再次比較
        return $this->gcdOfStrings(substr($str1, $len2), $str2);
    }
}